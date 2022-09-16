<?php
    $destinatario = "sales.iury08@aluno.ifce.edu.br";

    $nome = $_REQUEST['nome'];
    $data_nas = $_REQUEST['data_nasc'];
    $endereco = $_REQUEST['endereco'];
    $bairro = $_REQUEST['bairro'];
    $cidade = $_REQUEST['cidade'];
    $cep = $_REQUEST['cep'];
    $estado= $_REQUEST['estado'];
    $curriculo= $_REQUEST['curriculo'];

    $body = "===================================" . "\n";
    $body = $body . "Esse é apenas um formulário de teste." . "\n";
    $body = $body . "===================================" . "\n\n";
    $body = $body . "Nome: " . $nome . "\n";
    $body = $body . "Data de Nascimento: " . $data_nasc . "\n";
    $body = $body . "Endereço: " . $endereco . "\n\n";
    $body = $body . "Bairro: " . $bairro . "\n\n";
    $body = $body . "Cidade: " . $cidade . "\n\n";
    $body = $body . "CEP: " . $cep . "\n\n";
    $body = $body . "Estado: " . $estado . "\n\n";
    $body = $body . "Mini-Currículo: " . $curriculo . "\n\n";
    $body = $body . "===================================" . "\n";

    mail($destinatario, $nome , $data_nasc, $endereco, $bairro, $cidade, $cep, $estado, $curriculo, $body, "From: $email\r\n");

    header("location:obrigado.htm");


    ?>
