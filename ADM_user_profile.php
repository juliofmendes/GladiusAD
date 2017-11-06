<html>
	<head>
	<title>ADM - User Profile</title>
        <style>
table {
    margin-top: 10px;
    margin-left:auto; 
    margin-right:auto;
    border: 1px solid #cbcbcb;
    width: 50%;
}
    
th, td {
   // border: 1px solid #cbcbcb;
    padding: 10px;
    text-align: center;
    }
th {
    background-color: #d3d3d3;
    width: 100px;
    }   

tr:nth-child(even) {background-color: #f2f2f2}
tr:nth-child(odd) {background-color: #fafafa}
tr:hover {background-color: #ffcccc}
input {width: 100%;}
    
</style>
</head>
<body>
<?php
    
    $con = mysqli_connect("localhost", "juligo_dreaper", "bdGAD321", "juligo_gladius") or die("Não foi possível a conexão");
    $IDorEmail = trim($_POST['Buscar']);
    
    
    $statement = mysqli_prepare($con, "SELECT * FROM User WHERE ID = ? OR Email = ?");
    mysqli_stmt_bind_param($statement, "ss", $IDorEmail,$IDorEmail);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_key, $ID, $Level, $Status, $Name, $Email, $Password);
    
    $response = array();
    $response["success"] = false;
    $response["conection"] = false;
    $Checked = "";

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
    
    if ($response["Status"]){
        $Checked = "checked";
     }
?>
    
    <table>

        <center><h1>ADM - User Profile</h1></center>

    <tr>
        <form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
        <th> &nbsp; ID ou Email &nbsp; </th>
        <td><input type="text" name="Buscar" value="AA001"></td>
        <td><input type="submit" name="buscarok" value="Buscar"></td>
        </form>
    </tr>


    </table>
    
<form name="frmAlterar" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?User=<?=$response["ID"]?>" >
    <table>

    <tr>
        <th> &nbsp; ID &nbsp; </th>
        <td colspan = "2"> &nbsp;<?=$response["ID"]?>&nbsp; </td>
    </tr>
    <tr>
        <th> &nbsp; NIVEL &nbsp; </th>
        <td colspan = "2"><input type="text" name="Level" value="<?=$response["Level"]?>"></td>
    </tr>
    <tr>
        <th> &nbsp; STATUS &nbsp; </th>
        <td colspan = "2"><input type="checkbox" name="Status" value="1" <?=$Checked?> ></td>
    </tr>   
    <tr>
        <th> &nbsp; NOME &nbsp; </th>
        <td colspan = "2"><input type="text" name="Name" value="<?=$response["Name"]?>"></td>
    </tr>
    <tr>
        <th> &nbsp; EMAIL &nbsp; </th>
        <td colspan = "2"><input type="text" name="Email" value="<?=$response["Email"]?>"></td>
    </tr>
    <tr>
        <th> &nbsp; SENHA &nbsp; </th>
        <td colspan = "2"><input type="text" name="Password" value="<?=$response["Password"]?>"></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="reset" value="Limpar" ></td>
        <td><input type="submit" name="Enviar" id="Enviar" value="Enviar"></td>
        
    </tr>

</table>
</form>
    
</body>
</html>

<?php 
      if (isset($_POST['Enviar'])) {

        $response["ID"] = $_GET['User'];
        $response["Level"] = trim($_POST['Level']);
        $response["Status"] = trim($_POST['Status']);
        $response["Name"] = trim($_POST['Name']);
        $response["Email"] = trim($_POST['Email']);
        $response["Password"] = trim($_POST['Password']);
        
        $statement = mysqli_prepare($con, "UPDATE User SET Level=?, Status=?, Name=?, Email=? WHERE ID=?");
        mysqli_stmt_bind_param($statement, "iisss", $response["Level"], $response["Status"], $response["Name"], $response["Email"], $response["ID"]);   
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);   
      }
      echo $response["Status"];
?>
<?php //echo json_encode($response); ?>
