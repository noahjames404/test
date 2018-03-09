<?php
        @session_start();
        unset($_SESSION['connection']);
        unset($_SESSION['url']);
//        $xml = simplexml_load_file("extension/config.xml");
//        $json = json_encode($xml);
//        $json = json_decode($json,true);

        $host= gethostname();
        $myIp = gethostbyname($host);



    //============== CHANGES ARE ONLY HERE =================================



        //database
        $db_name = "id3670636_db_ems";
        $name = "localhost";
        $username = "id3670636_root";
        $password = "1234567890";

        //url
        $directory = "squad404.000webhostapp.com/EventSys";
        $protocol = "https";

        //sms
        $email = "yanganoah17@yahoo.com.ph";
        $pass = "aiwprton";
        $deviceID = 73665;

    //============== CHANGES ARE ONLY HERE =================================


        $_SESSION['connection'][0] = $name;
        $_SESSION['connection'][1] = $db_name;
        $_SESSION['connection'][2] = $username;
        $_SESSION['connection'][3] = $password;

        $_SESSION['url'][0] = $protocol;
        $_SESSION['url'][1] =  str_replace("localhost",$myIp,$directory);

        $_SESSION['sms'][0] = $email;
        $_SESSION['sms'][1] = $pass;
        $_SESSION['sms'][2] = $deviceID;

        $_SESSION['test'] = "false";