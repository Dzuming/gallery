<?php
class ftp
{
 
//variable to hold connection object.
    private $connectionId;
    private $loginOk = false;
    private $messageArray = array();
//private construct - class cannot be instatiated externally.
    public function __construct()
{
    
    }
    private function logMessage($message)
    {
        $this->messageArray[] = $message;
    }
    public function getMessages()
    {
        return $this->messageArray;
    }
    public function connect($server, $ftpUser, $ftpPassword, $isPassive = true)
    {
 
       // *** Set up basic connection
        $this->connectionId = ftp_connect($server);
 
       // *** Login with username and password
        $loginResult = ftp_login($this->connectionId, $ftpUser, $ftpPassword);
 
       // *** Sets passive mode on/off (default off)
        ftp_pasv($this->connectionId, $isPassive);
 
       // *** Check connection
        if ((!$this->connectionId) || (!$loginResult)) {
            $this->logMessage('FTP connection has failed!');
            $this->logMessage('Attempted to connect to ' . $server . ' for user ' . $ftpUser, true);
            return false;
        } else {
            $this->logMessage('Connected to ' . $server . ', for user ' . $ftpUser);
            $this->loginOk = true;
            return true;
        }
    }
    public function makeDir($directory)
    {
        // *** If creating a directory is successful...
        if (ftp_mkdir($this->connectionId, $directory)) {
            $this->logMessage('Directory "' . $directory . '" created successfully');
            return true;
 
        } else {
            // *** ...Else, FAIL.
            $this->logMessage('Failed creating directory "' . $directory . '"');
            return false;
        }
    }
    public function uploadFile($fileFrom, $fileTo)
    {
        // *** Set the transfer mode
        $asciiArray = array('txt', 'csv');
        $extension = end(explode('.', $fileFrom));
        if (in_array($extension, $asciiArray)) {
            $mode = FTP_ASCII;
        } else {
            $mode = FTP_BINARY;
        }
 
        // *** Upload the file
        $upload = ftp_put($this->connectionId, $fileTo, $fileFrom, $mode);
 
        // *** Check upload status
        if (!$upload) {
            $this->logMessage('FTP upload has failed!');
            return false;
 
        } else {
            $this->logMessage('Uploaded "' . $fileFrom . '" as "' . $fileTo);
            return true;
        }
    }
}//end class
