<?php

/**
 * Simple SMTP Class
 * Allows sending emails via SMTP using socket connection
 */

class SimpleSMTP
{
    private $host;
    private $port;
    private $username;
    private $password;
    private $encryption;
    private $timeout = 30;
    private $debug = false;
    private $socket;

    public function __construct($host, $port, $username, $password, $encryption = 'tls')
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->encryption = $encryption;
    }

    public function send($to, $subject, $body, $headers = [])
    {
        try {
            $this->connect();
            $this->auth();

            $this->sendCommand('MAIL FROM: <' . $this->username . '>');
            $this->sendCommand('RCPT TO: <' . $to . '>');
            $this->sendCommand('DATA');

            // Prepare headers
            $headerStr = '';
            foreach ($headers as $key => $value) {
                // If header is already a full string (e.g. "From: ...")
                if (is_numeric($key)) {
                    $headerStr .= $value . "\r\n";
                } else {
                    $headerStr .= $key . ': ' . $value . "\r\n";
                }
            }

            // Ensure Subject and To are in headers if not provided
            if (stripos($headerStr, 'Subject:') === false) {
                $headerStr .= "Subject: $subject\r\n";
            }
            if (stripos($headerStr, 'To:') === false) {
                $headerStr .= "To: $to\r\n";
            }

            $message = $headerStr . "\r\n" . $body . "\r\n.";
            $this->sendCommand($message);

            $this->sendCommand('QUIT');
            fclose($this->socket);

            return true;
        } catch (Exception $e) {
            error_log("SMTP Error: " . $e->getMessage());
            if (is_resource($this->socket)) {
                fclose($this->socket);
            }
            return false;
        }
    }

    private function connect()
    {
        $protocol = '';
        if ($this->encryption === 'ssl') {
            $protocol = 'ssl://';
        }

        $this->socket = fsockopen($protocol . $this->host, $this->port, $errno, $errstr, $this->timeout);

        if (!$this->socket) {
            throw new Exception("Could not connect to SMTP host: $errstr ($errno)");
        }

        $this->getResponse();
        $this->sendCommand('EHLO ' . $_SERVER['SERVER_NAME']);

        if ($this->encryption === 'tls') {
            $this->sendCommand('STARTTLS');
            if (!stream_socket_enable_crypto($this->socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                throw new Exception("TLS encryption failed");
            }
            $this->sendCommand('EHLO ' . $_SERVER['SERVER_NAME']);
        }
    }

    private function auth()
    {
        $this->sendCommand('AUTH LOGIN');
        $this->sendCommand(base64_encode($this->username));
        $this->sendCommand(base64_encode($this->password));
    }

    private function sendCommand($command)
    {
        fputs($this->socket, $command . "\r\n");
        return $this->getResponse();
    }

    private function getResponse()
    {
        $response = '';
        while (($line = fgets($this->socket, 515)) !== false) {
            $response .= $line;
            if (substr($line, 3, 1) == ' ') {
                break;
            }
        }

        // Check for error codes (4xx or 5xx)
        $code = substr($response, 0, 3);
        if ($code >= 400) {
            throw new Exception("SMTP Server Error: $response");
        }

        return $response;
    }
}
