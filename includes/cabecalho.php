<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php print $cabecalho_title; ?></title>
<?php 
 print @$cabecalho_css1;
 print @$cabecalho_css2;
 print @$cabecalho_css3;
 print @$cabecalho_css4;
 
?>
<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
<meta name="viewport" content="width=device-width">
</head>
<body>
<header class="container">
        <!-- Conteúdo do cabeçalho -->
        <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>

        <p class="sacola">
            Nenhum item na sacola de compras
        </p>
        <nav class="menu-opcoes">
        <ul>
        <li><a href="#">Lista de Desejos</a></li>
        <li><a href="#">Cartão Fidelidade</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="#">Ajuda</a></li>
        </ul>
        </nav>
    </header>