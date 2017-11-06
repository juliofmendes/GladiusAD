<?php
    require("PasswordHASH.php");
    $con = mysqli_connect("localhost", "juligo_dreaper", "bdGAD321", "juligo_gladius");
    
    $Email = $_POST["bdEmail"];
    $password = $_POST["bdPassword"];

    $statement = mysqli_prepare($con, "SELECT * FROM User WHERE Email = ?");
    mysqli_stmt_bind_param($statement, "s", $Email);

    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_key, $ID, $Level, $Status, $Name, $Email, $Password);
    
    $response = array();
    $response["success"] = false;
    $response["conection"] = false;  //false

    if (mysqli_sqlstate($con) == 00000) {
    $response["conection"] = true;  
    }

    
       while(mysqli_stmt_fetch($statement)){
        if (password_verify($password, $Password)) {
            $response["success"] = true;  
            $response["Key"] = $user_key;
            $response["ID"] = $ID;
            $response["Level"] = $Level;
            $response["Status"] = $Status;
            $response["Name"] = $Name;
            $response["Email"] = $Email;
            $response["Password"] = $Password;
        }
    }


    echo json_encode($response);
?>












<?php
/*
    require("PasswordHASH.php");
    $con = mysqli_connect("localhost", "juligo_dreaper", "bdGAD321", "juligo_gladius");
    
    $Email = $_POST["bdEmail"];
    $Password = $_POST["bdPassword"];

//    $Email = "juliofmendes@gmail.com";
//    $Password = "111";

    $statement = mysqli_prepare($con, "SELECT * FROM User WHERE Email = ? AND Password = ?");
    mysqli_stmt_bind_param($statement, "ss", $Email, $Password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_key, $ID, $Level, $Status, $Name, $Email, $Password);
    
    $response = array();
    $response["success"] = false;
    $response["conection"] = false;  

    if (mysqli_sqlstate($con) == 00000) {
    $response["conection"] = true;  
    }

    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["Key"] = $user_key;
        $response["ID"] = $ID;
        $response["Level"] = $Level;
        $response["Status"] = $Status;
        $response["Name"] = $Name;
        $response["Email"] = $Email;
        $response["Password"] = $Password;
    }


    echo json_encode($response);
    */
?>