<?php
session_start();
ob_start();
header('Access-Control-Allow-Origin:http://jezero.info');
//header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
//header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header("Content-type: application/json");
//"contentType" : "application/x-www-form-urlencoded" }
date_default_timezone_set('UTC');

//connect to database
$db = mysqli_connect('localhost', 'jezero_root', '1kresimir2', 'jezero_vote');
//$db = mysqli_connect('localhost', 'root', '', 'vote');

if (mysqli_connect_errno()) {
   echo '<p>Error: Ne može se uspostaviti veza sa bazom.<br/>
   Molimo pokušajte ponovno kasnije.</p>';
   exit;
}

try {
 
    $currentTime = time();
    $session_id = session_id();
    
    $lastPoll = isset($_SESSION['last_poll']) ? 
                      $_SESSION['last_poll'] : $currentTime;
    
    $action = isset($_SERVER['REQUEST_METHOD']) && 
              ($_SERVER['REQUEST_METHOD'] == 'POST') ? 
              'send' : 'poll';

    switch($action) {
        case 'poll':

           $query = "SELECT * FROM chatlog WHERE 
                     date_created >= ?";

           $stmt = $db->prepare($query);
           $stmt->bind_param('s', $lastPoll);  
           $stmt->execute();
           $stmt->bind_result($id, $message, $session_id, $date_created);
           $result = $stmt->get_result();

           $newChats = [];
           while($chat = $result->fetch_assoc()) {
               
               if($session_id == $chat['sent_by']) {
                  $chat['sent_by'] = 'self';
               } else {
                  $chat['sent_by'] = 'other';
               }
             
               $newChats[] = $chat;
            }


           $_SESSION['last_poll'] = $currentTime;

           print json_encode([
               'success' => true,
               'messages' => $newChats
           ]);
           exit;

        case 'send':

            $message = isset($_POST['message']) ? $_POST['message'] : '';            
            $message = strip_tags($message);

            $query = "INSERT INTO chatlog (message, sent_by, date_created) 
                      VALUES(?, ?, ?)";

            $stmt = $db->prepare($query);
            $stmt->bind_param('ssi', $message, $session_id, $currentTime); 
            $stmt->execute(); 

            print json_encode(['success' => true]);
            exit;
    }
} catch(\Exception $e) {
    print json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
    
}
