 
  <?php 
  $cabecalho_title = "Produto Mirror Fashion";
  $cabecalho_css1 = '<link rel="stylesheet" href="css/reset.css">';
  $cabecalho_css2 = '';
  $cabecalho_css3 = '<link rel="stylesheet" href="css/produto.css>"';
  include("includes/cabecalho.php"); ?>
<div class="produto">
<h1>Fuzzy Cardigan</h1>
<p>por apenas R$ 129,00</p>
<form>
<fieldset class="cores">
<legend>Escolha a cor:</legend>
<input type="radio" name="cor" value="verde" id="verde" checked>
<label for="verde">
<img src="img/produtos/foto2-verde.png" alt="verde">
</label>
<input type="radio" name="cor" value="rosa" id="rosa" checked>
<label for="rosa">
<img src="img/produtos/foto2-rosa.png" alt="rosa">
</label>
<input type="radio" name="cor" value="azul" id="azul" checked>
<label for="azul">
<img src="img/produtos/foto2-azul.png" alt="azul">
</label>
</fieldset>
<input type="submit" class="comprar" value="Comprar" checked>
</form>
</di>
 <?php include("includes/footer.php") ?>
</body>
</html>