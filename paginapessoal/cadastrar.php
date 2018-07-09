<?php
$con = mysql_connect('localhost','root','erechim');
mysql_select_db('arthur', $con);

$nome = $_POST['nome'];
$email = $_POST['email'];

$select = "select * from cadastrados";
$resultado = mysql_query($select);

if ($resultado == $nome || $resultado == $email){
    echo 'Usuário já cadastrado';
} else {
    $insert = "insert into cadastrados (nome, email) values ('$nome','$email')";
    $query = mysql_query($insert);
    
    header('location:index.php');
        
}

?>