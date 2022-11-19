<?php 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 123 && $usuario = 'leo'){
    echo "dados corretos";
}else{
    echo "dados incorretos";
}
?>