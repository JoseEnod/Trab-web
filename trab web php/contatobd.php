<?php
    include "conecta.inc.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $programa = $_POST['programa'];

    $dados = "INSERT INTO sugestoes(nome, email, tipo, programa)
        VALUES ('$nome', '$email', '$tipo', '$programa')";

    $query = mysqli_query($conexao, $dados);

    if($query){
        echo '<center><h4 style="margin-top: 50px;">Sugestão enviada!</h4>
        <a href="index.php"><button class="btn btn-success mt-md-3">Voltar</button></a></center>';
    }else{
        echo "<center><h4>Erro houve um problema ao enviar sua sujestão!</h4></center>";
    }

?>