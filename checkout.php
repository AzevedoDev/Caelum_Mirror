<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/checkout.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mirror Fashion</title>
</head>
<body>
  <div class="jumbotron">
    <div class="container">
      <h1>Otima escolha!</h1>
      <p>Obrigado por escolhar a MF! Preencha seus dados para efetivar a compra</p>
    </div>
  </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
          <div class="panel-heading">
            <h2>Sua compra</h2>
          </div>
          <div class="panel-body">
            <img src="img/produtos/foto2-<?=$_POST['cor']?>.png" class="img-thumbnail img-responsive">
            <dl>
              <dt>Cor</dt>
              <dd><?= $_POST['cor']?></dd>
              <dt>Tamanho</dt>
              <dd><?= $_POST['tamanho']?></dd>
              <dt>Produto</dt>
              <dd><?= $_POST['nome']?></dd>
              <dt>Preco</dt>
              <dd id="preco"><?= $_POST['preco']?></dd>
            </dl>
            <div class="form-group">
              <label for="qt">Quantidade</label>
              <input id="qt" class="form-control" type="number" min="0" max="99" value="1">
            <div class="form-group">
              <label for="total">Total</label>
              <output for="qt preco" id="total" class="form-control">
                <?= $_POST["preco"] ?>
              </output>
            </div>
            </div>
          </div>
        </div>
      </div>
      <form class="col-sm-8" action="index.html" method="post">
        <div class="row">
        <fieldset class="col-md-6">
          <legend>Dados pessoais</legend>
          <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" required autofocus>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="juquinha@bala.com">
          </div>
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required placeholder="000.000.000-00">
          </div>
          <div class="checkbox">
            <label for="nome">
              <input type="checkbox" value="sim" name="spam" checked>
              Quero receber spam da Mirror Fashion
            </label>
          </div>
        </fieldset>
        <fieldset class="col-md-6">
          <legend>Cartao de Credito</legend>

          <div class="form-group">
            <label for="numero-cartao">Numero - CVV</label>
            <input type="text" class="form-control" name="numero-cartao">
          </div>
          <div class="form-group">
            <label for="bandeira-cartao">Bandeira Cartao</label>
            <select id="bandeira-cartao" class="form-control" name="bandeira-cartao">
            <option value="master">MasterCard</option>
            <option value="visa">Visa</option>
            <option value="amex">Amex</option>
          </select>
          </div>
          <div class="form-group">
          <label for="validade-cartao">Validade</label>
          <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
        </div>
        </fieldset>
      </div>
        <button type="submit" class="btn btn-primary btn-lg pull-right" name="button">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          Confirmar Pedido
        </button>
      </form>
    </div>
    </div>
  </div>
  <script src="js/total.js" charset="utf-8"></script>
</body>
</html>
