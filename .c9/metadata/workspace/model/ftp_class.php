{"filter":false,"title":"ftp_class.php","tooltip":"/model/ftp_class.php","undoManager":{"mark":20,"position":20,"stack":[[{"start":{"row":0,"column":0},"end":{"row":41,"column":12},"action":"insert","lines":[" class ftp{"," ","//variable to hold connection object.","private $connectionId;","private $loginOk = false;","private $messageArray = array(); ","//private construct - class cannot be instatiated externally.","private function __construct() {","    ","}","private function logMessage($message) ","{","    $this->messageArray[] = $message;","}","public function getMessages()","{","    return $this->messageArray;","}"," public function connect ($server, $ftpUser, $ftpPassword, $isPassive = false)","{"," ","    // *** Set up basic connection","    $this->connectionId = ftp_connect($server);"," ","    // *** Login with username and password","    $loginResult = ftp_login($this->connectionId, $ftpUser, $ftpPassword);"," ","    // *** Sets passive mode on/off (default off)","    ftp_pasv($this->connectionId, $isPassive);"," ","    // *** Check connection","    if ((!$this->connectionId) || (!$loginResult)) {","        $this->logMessage('FTP connection has failed!');","        $this->logMessage('Attempted to connect to ' . $server . ' for user ' . $ftpUser, true);","        return false;","    } else {","        $this->logMessage('Connected to ' . $server . ', for user ' . $ftpUser);","        $this->loginOk = true;","        return true;","    }","}","}//end class"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":3}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["/"],"id":4}],[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"],"id":5}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"],"id":6}],[{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"],"id":7}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":["/"],"id":8},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"]}],[{"start":{"row":42,"column":12},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":1},"action":"insert","lines":["?"],"id":10}],[{"start":{"row":43,"column":1},"end":{"row":43,"column":2},"action":"insert","lines":[">"],"id":11}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":7},"action":"remove","lines":["private"],"id":12},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"insert","lines":["p"]}],[{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"insert","lines":["u"],"id":13}],[{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"insert","lines":["b"],"id":14}],[{"start":{"row":8,"column":3},"end":{"row":8,"column":4},"action":"insert","lines":["l"],"id":15}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["i"],"id":16}],[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["c"],"id":17}],[{"start":{"row":41,"column":1},"end":{"row":42,"column":0},"action":"insert","lines":["",""],"id":18}],[{"start":{"row":42,"column":0},"end":{"row":56,"column":1},"action":"insert","lines":["public function makeDir($directory)","{","    // *** If creating a directory is successful...","    if (ftp_mkdir($this->connectionId, $directory)) {"," ","        $this->logMessage('Directory \"' . $directory . '\" created successfully');","        return true;"," ","    } else {"," ","        // *** ...Else, FAIL.","        $this->logMessage('Failed creating directory \"' . $directory . '\"');","        return false;","    }","}"],"id":19}],[{"start":{"row":56,"column":1},"end":{"row":57,"column":0},"action":"insert","lines":["",""],"id":20}],[{"start":{"row":57,"column":0},"end":{"row":81,"column":1},"action":"insert","lines":["public function uploadFile ($fileFrom, $fileTo)","{","    // *** Set the transfer mode","    $asciiArray = array('txt', 'csv');","    $extension = end(explode('.', $fileFrom));","    if (in_array($extension, $asciiArray)) {","        $mode = FTP_ASCII;      ","    } else {","        $mode = FTP_BINARY;","    }"," ","    // *** Upload the file","    $upload = ftp_put($this->connectionId, $fileTo, $fileFrom, $mode);"," ","    // *** Check upload status","    if (!$upload) {"," ","            $this->logMessage('FTP upload has failed!');","            return false;"," ","        } else {","            $this->logMessage('Uploaded \"' . $fileFrom . '\" as \"' . $fileTo);","            return true;","        }","}"],"id":21}]]},"ace":{"folds":[],"scrolltop":483,"scrollleft":0,"selection":{"start":{"row":81,"column":1},"end":{"row":81,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1456495439000,"hash":"5570ed7a6d134a08f214633eb93b8071302ed9c0"}