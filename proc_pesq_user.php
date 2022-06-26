<?php require_once 'config.php';

$usuarios = filter_input(INPUT_POST, 'palavra');

$result_user = "SELECT * FROM usuario WHERE nome LIKE '%$usuarios%' LIMIT 20";
$resultado_user = mysqli_query($conexao, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows !=0)) {
    while($row_user = mysqli_fetch_assoc($resultado_user)){
        echo "<li>".$row_user['nome']."</li>";
    }
}else{
    echo 'nenhum resultado encontrado';
}

