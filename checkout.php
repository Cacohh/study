<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Checkout Mirror Fashion</title>
    <style>
        body { 
            padding-top: 50px; 
            }
        .form-control:invalid {
            border: 1px solid #cc0000;
        }
        .navbar .glyphicon {
            font-size: 1.5em;
            color: red;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Mirror Fashion</a>
            <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse">
            <li><a href="sobre.php"><span class="glyphicon glyphicon-question-sign"></span> Sobre</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>  Ajuda</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span>  Perguntas frequentes</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-send"></span>  Entre em contato</a></li>
          </ul>
        </nav>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <h1>Ótima escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
            </div>
        </div>

            <div class="panel panel-success">

            <div class="container">
                <div class="panel-heading">
                    <h2>Sua compra</h2>
                </div>
                <div class="panel-body">
                    <img class="hidden-xs" src="img/produtos/foto2<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive">
                    <dl>
                        <dt>Produto</dt>
                        <dd>
                            <?= $_POST['nome'] ?>
                        </dd>
                        <dt>Preço</dt>
                        <dd>
                            <?= $_POST['preco'] ?>
                                <dt>Cor</dt>
                                <dd>
                                    <?= $_POST['cor'] ?>
                                </dd>
                                <dt>Tamanho</dt>
                                <dd>
                                    <?= $_POST['tamanho'] ?>
                                </dd>
                    </dl>
                    <form class="col-sm-8 col-lg-9">
                      <div class="row">
                        <fieldset class="col-md-6">
                            <legend>Dados pessoais</legend>
                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="sim" name="spam" checked>Quero receber spam da Mirror Fashion</label>
                            </div>
                        </fieldset>
                        <fieldset class="col-md-6">
                            <legend>Cartão de crédito</legend>
                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                            </div>
                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                <option value="master">MasterCard</option>
                                <option value="visa">VISA</option>
                                <option value="amex">American Express</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                            </div>
                        </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg pull-right">
                        <span class="glyphicon glyphicon-btc"></span>
                         Confirmar Pedido
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    

</body>

</html>
