<?php 
include 'modelUser.php';

if (isset($_POST['cadastrar'])) {

$modelo = new ModelUser();

$user= new User();
$user->setFirstName($_POST['first_name']);
$user->setLastName($_POST['last_name']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);
$user->setImage('image');

$modelo->adicionar($user);

}
var_dump($_POST);

$campo_obrigatorio = "";

if (isset($_POST['enviar'])){
    if( empty($_POST['nome'])  ){
        
        $campo_obrigatorio = "PREENCHAAAA";
    }else
        echo "<br><b>".$_POST['nome']."</b>";

}

?>