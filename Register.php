<?php
include_once("RegisterCode.php");
require("PasswordHASH.php");

$con = mysqli_connect("localhost", "juligo_dreaper", "bdGAD321", "juligo_gladius");



    $ID = GetCODE();
    $Level = $_POST["bdLevel"];
    $Status = $_POST["bdStatus"];
    $Name = $_POST["bdName"];
    $Email = $_POST["bdEmail"];
    $Password = $_POST["bdPassword"];

    $response = array();
    $response["success"] = true;
    $response["insert_error"] = false;


    $passwordHash = password_hash($Password, PASSWORD_DEFAULT);
    $statement = mysqli_prepare($con, "INSERT INTO User (ID, Level, Status, Name, Email, Password) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siisss", $ID, $Level, $Status, $Name, $Email, $passwordHash);   
    mysqli_stmt_execute($statement);  


    if (mysqli_sqlstate($con) == 00000) {Update(); //RegisterCode.php 
    }elseif (mysqli_sqlstate($con) == 23000) {$response["insert_error"] = true;
    }else {$response["success"] = false;}

    mysqli_stmt_close($statement);   
    echo json_encode($response);

    /*      TABELA User
    *       -----------------------------------------------------------------------------------
    *       user_key    =         [i] Chave primaria e Unica.
    *       ID          =         [s] Chave de Registro.
    *       Level       =         [i] Nivel de 0 a 7, onde delimita acesso e o Grau.
    *       Status      =         [i] Ativo ou Inativo, chave geral para acesso ao app. (Exige Confirmação).
    *       Name        =         [s] Nome de cadastro.
    *       Email       =         [s] Email / Login
    *       Password    =         [s] Senha ou Codigo de acesso.
    */

?>