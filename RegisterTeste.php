<?php
include("db_conexao.php");

$query = sprintf("SELECT reg_Code FROM Config");
$dados = mysql_query($query, $con) or die(mysql_error());
$linha = mysql_fetch_assoc($dados);
$Code = $linha['reg_Code'];
//$Code++;
//$Code='AA000';
//
//mysql_query("UPDATE Config SET reg_Code = '$Code' WHERE id = '1'");
mysql_close($con);
?>
<?php mysql_free_result($dados); ?>





<html><head><title>Check CODE</title>
<style>
table {
    margin-top: 30px;
    margin-left:auto; 
    margin-right:auto;
    border: 1px solid #cbcbcb;
    width: 30%;
}
    
th, td {
   // border: 1px solid #cbcbcb;
    padding: 15px;
    text-align: center;
    }
th {background-color: #efefef}   

    
</style>
</head><body><table>
<tr>
 <th> &nbsp; C O D E &nbsp; </th>
 <th> &nbsp;<?=$Code;?>&nbsp; </th>
</tr>

</table></body></html>


<?php 

//echo "<h3> Code: $Code <br></h3>";
//
//echo '== Alphabets == <br>' . PHP_EOL;
//for ($n=0; $n<30; $n++) {
//    echo $Code++ . PHP_EOL;
//    echo "<br>";
//}

//id, reg_Code, text_Msn, gad_Password
?>
