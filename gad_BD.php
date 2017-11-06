<?php
include("db_conexao.php");

// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT user_key, ID, Level, Status, Name, Email, Password FROM User");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>

<html>
	<head>
	<title>gad_BD</title>
<style>
table {
    margin-top: 30px;
    margin-left:auto; 
    margin-right:auto;
    border: 1px solid #cbcbcb;
    width: 70%;
}
th.Senha {
    width: 5px;
    table-layout: fixed;
}   
th, td {
   // border: 1px solid #cbcbcb;
    padding: 15px;
    text-align: left;
    }
th {background-color: #d3d3d3;}

    tr:nth-child(even) {background-color: #f2f2f2}
tr:nth-child(odd) {background-color: #fafafa}
tr:hover {background-color: #ffcccc}
</style>
</head>
<body>
<div>
<table>
    <tr>
 <th> &nbsp; KEY &nbsp; </th>
 <th> &nbsp; ID &nbsp; </th>
 <th> &nbsp; NIVEL &nbsp; </th>
 <th> &nbsp; STATUS &nbsp; </th>
 <th> &nbsp; NOME &nbsp; </th>
 <th> &nbsp; EMAIL &nbsp; </th>
 <th class="Senha"> &nbsp; SENHA &nbsp; </th>
 </tr>
<?php

	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
            <tr>
            <td> &nbsp;<?=$linha['user_key']?>&nbsp; </td>
            <td> &nbsp;<?=$linha['ID']?>&nbsp; </td>
            <td> &nbsp;<?=$linha['Level']?>&nbsp; </td>
            <td> &nbsp;<?=$linha['Status']?>&nbsp; </td>
            <td> &nbsp;<?=$linha['Name']?>&nbsp; </td>
            <td> &nbsp;<?=$linha['Email']?>&nbsp; </td>
<!--            <td> <?=$linha['Password']?> </td>-->
            <td class="Senha"> &nbsp;********&nbsp; </td>
            </tr>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if 
	}
?>
</table>
</div>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>

<?php


    
    /*      TABELA Config
    *       -----------------------------------------------------------------------------------
    *       reg_Code     =         [s] Chave de Registro Unica para USUARIOS. [AA000]
    *       Count_News   =         [b] Controle para atualização das informaçoes.
    *       gad_Password =         [s] Palavra Passe para reuniao.
    *       text_Msn     =         [i] Alforismo?.
    *///TABELA Config
    
    
   /*      TABELA User
    *       -----------------------------------------------------------------------------------
    *       user_key    =         [i] Chave primaria e Unica.
    *       ID          =         [s] Chave de Registro reg_Code.
    *       Level       =         [i] Nivel de 0 a 7, onde delimita acesso e o Grau.
    *       Status      =         [i] Ativo ou Inativo, chave geral para acesso ao app. (Exige Confirmação).
    *       Name        =         [s] Nome de cadastro.
    *       Email       =         [s] Email / Login
    *       Password    =         [s] Senha ou Codigo de acesso.
    *///TABELA User

?>