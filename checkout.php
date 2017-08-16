<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Checkout Mirror Fashion</title>
    </head>
    <body>
        <h1>Ótima escolha!</h1>
        <h2>Sua compra</h2>
        <dl>
            <dt>Produto</dt>
            <dd><?= $_POST['nome'] ?></dd>
            <dt>Preço</dt>
            <dd><?= $_POST['preco'] ?>
            <dt>Cor</dt>
            <dd><?= $_POST['cor'] ?></dd>
            <dt>Tamanho</dt>
            <dd><?= $_POST['tamanho'] ?></dd>
        </dl>
        <p>Obrigado por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>
    </body>
</html>