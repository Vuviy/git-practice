<?php

class Logger
{
    private string $logFile;

    public function __construct(string $logFile = 'app.log')
    {
        $this->logFile = $logFile;
    }

    public function info(string $message): void
    {
        $this->write('INFO', $message);
    }

    public function warning(string $message): void
    {
        $this->write('WARNING', $message);
    }

    public function error(string $message): void
    {
        $this->write('ERROR', $message);
    }

    private function write(string $level, string $message): void
    {
        $timestamp = date('Y-m-d H:i:s');
        $line      = "[$timestamp] [$level] $message" . PHP_EOL;

        file_put_contents($this->logFile, $line, FILE_APPEND);
    }
    public function log(string $level, string $message): void
    {
        $this->write(strtoupper($level), $message);
    }
}