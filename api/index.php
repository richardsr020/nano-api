<?php
session_start();
require '../model/Model.php';
require '../model/User.php';
require '../model/Contact.php';
require '../model/Msg.php';
require '../model/File.php';
require '../model/Router.php';
/**
 * here is the  all the links that will be called
 * to get profile of current user : http://localhost/nanoChat/api/index.php?p=profile
 * to get chat (all the messages sent to me) :http://localhost/nanoChat/api/index.php?p=chat
 * to get chat (all the messages sent among the current user with an other user) : http://localhost/nanoChat/api/index.php?p=chat-box&contact=26
 * to get chat (all the messages sent to me) : http://localhost/nanoChat/api/index.php?p=get-session
 * to get freinds (all the freinds) : http://localhost/nanoChat/api/index.php?p=get-contacts
 */

if(isset($_GET['p']) && !empty($_GET['p'])){
    $pagesList = ['profile','chat','chat-Box','log-out','get-session','get-contacts'];
    $contact;
    if(in_array($_GET['p'], $pagesList)){
        
        if(isset($_GET['contact']) && !empty($_GET['contact'])){
            $contact = $_GET['contact'];
        }

        $page = $_GET['p'];
        switch($page){
            case 'profile': Rout::getProfile();
            break;
            case 'chat-Box': Rout::getPrivateChatWith($contact);
            break;
            case 'chat': Rout::getChat();
            break;
            case 'log-out': Rout::logOut();
            break;
            case 'get-session': Rout::currentSession();
            break;
            case 'get-contacts': Rout::getFreinds();
            break;
        }
    }
}

if(isset($_POST)&& !empty($_POST)){
    
    $actionsList = ['sign-Up','log-In',
                    'chat','chat-Box',
                    'log-out','upload','edit-profile','msg-send','add-contact'];
    $data = $_POST;
     
    if(in_array($_GET['action'], $actionsList)){
        /* The target in url help you're editing profile of user
        the target may be 'name, profile,phone,password....'*/
        $target = (isset($_GET['target']))?$_GET['target']:null;
        var_dump($target);
        
        // if(isset($_GET['contact']) && !empty($_GET['contact'])){
        //     $contact = $_GET['contact'];
        // }
        switch($_GET['action']){
            case 'sign-Up': Rout::signUp();
            break;
            case 'log-In': Rout::logIn();
            break;
            case 'upload': Rout::sendFile();
            break;
            case 'msg-send': Rout::msgSend();
            break;
            //Evoid to use this command to edite a message
            case 'edit-profile': App::fillProfile($target);
            break;
            case 'add-contact': Rout::addNewContact();
            break;
        }
    }else{
        echo json_encode('command no found');

    }
}else{
    echo json_encode('no data');
}



?>