<?php

require 'vendor/autoload.php';

$UR = new UptimeRobotClient\Client("");        
$UR->setFormat('json');   
$UR->setApiKey("YOUR-API-KEY-HERE");            

try {
    $params = array(
        'name' => 'Google',
        'uri' => 'http://www.google.com/',
        'type' => 1
    );
    $result = $UR->newMonitor($params);
    print_r($result);    
} 
catch (Exception $ex) {
    switch ($ex->getCode()) {
        case 1:
            echo $ex->getMessage();
            break;
        case 2:
            echo "You should try specifying an apiKey for once!";
            break;
        case 3:
            echo "You forgot a required key, you moron!";
            break;
        default:
            echo $ex->getCode(). ": ". $ex->getMessage();        
    }  
}

 
                                 