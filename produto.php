<?php include("header.php");?>


	<div class="container">
			<div class="produto">
				<h1>Fuzzy Cardigan</h1>
				<p>por apenas R$ 129.00</p>

				<form>
					<fieldset class="cores">
						<legend>Escolha a Cor:</legend>

						<input type="radio" name="cor" value="verde" id="verde" checked>
						<label for="verde">
							<img src="img/produtos/foto2-verde.png" alt="verde">
						</label>
						<input type="radio" name="cor" value="rosa" id="rosa">
						<label for="rosa">
							<img src="img/produtos/foto2-rosa.png" alt="rosa">
						</label>
						<input type="radio" name="cor" value="azul" id="azul">
						<label for="azul">
							<img src="img/produtos/foto2-azul.png" alt="azul">
						</label>
					</fieldset>
					<fieldset class="tamanhos">
						<legend>Escolha o Tamnaho</legend>
						<input type="range" min="36" max="46" name="tamanho" step="2" value="42" id="tamanhoss">
					</fieldset>
					<input type="submit" class="comprar" value="comprar">
				</form>
			</div>
			<div class="destalhes">
				<h2>Destalhes Produto</h2>
				<p>Esse e o melhor casaco de cardiga que ja viu. Exelente material
				italiano com estampa</p>
			</div>
			<table>
				<thead>
					<tr>
						<th>caracteristica</th>
						<th>detalhe</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Modelo</td>
						<td>Mardiga 7845</td>
					</tr>
					<tr>
						<td>Material</td>
						<td>Algodao e poliester</td>
					</tr>
					<tr>
						<td>Cores</td>
						<td>Azul, Rosa e Verde</td>
					</tr>
					<tr>
						<td>lavagem</td>
						<td>Lavar a mao</td>
					</tr>
				</tbody>
			</table>
	</div>
<?php include("footer.php");?>
