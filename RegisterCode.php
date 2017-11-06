<?php
function GetCODE(){
    
    include("db_conexao.php");
    $query = sprintf("SELECT reg_Code FROM Config");
    $dados = mysql_query($query, $con) or die(mysql_error());
    $linha = mysql_fetch_assoc($dados);
    $Code = $linha['reg_Code'];
    return $Code;
    
    mysql_close($con);
    mysql_free_result($dados); 

}//RETURN $CODE

function Update(){
    $Code = GetCODE();
    ++$Code;
    
    //$Code = AA001;
    mysql_query("UPDATE Config SET reg_Code = '$Code' WHERE id = '1'");
} //UPDATE CODE++
?>