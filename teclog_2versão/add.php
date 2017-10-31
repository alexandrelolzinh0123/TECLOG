<?php 
require_once 'config.php';

$descricao=$_POST['descricao'];
$quantidade_atual=$_POST['quantidade_atual'];
$preco_por_caixa=$_POST['preco_por_caixa'];
$demanda=$_POST['demanda'];


$statment = $connect->prepare('INSERT INTO gestao (descricao, quantidade_atual, preco_por_caixa, demanda) VALUES (?, ?, ?, ?)');

$statment->execute(array($descricao, $quantidade_atual, $preco_por_caixa, $demanda));

header('location: formadd.php');
?>