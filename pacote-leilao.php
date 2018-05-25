<?php include 'components/header.php'; ?>

	<section class="interna pacotes pct-leilao">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#">Eu passeando</a></li>
				<li><a href="#">Nossos pacotes</a></li>
				<li><a href="#">Paris</a></li>
				<li class="active">Entrar no leilão</li>
			</ol>
			
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<div class="fotorama" data-nav="thumbs">
						<img src="http://s.fotorama.io/okonechnikov/1-lo.jpg">
						<img src="http://s.fotorama.io/okonechnikov/2-lo.jpg">
					</div><!-- fotoroma -->
				</div><!-- md-8 -->
				<div class="col-md-4 col-sm-4">
					<h2 class="titulo-geral">Paris</h2>
					<p class="localizacao"><img src="assets/images/pin.png" alt=""> França</p>
					<h4>Informações:</h4>
					<ul>
						<li><span>Ida:</span> São Paulo, Brasil.</li>
						<li><span>Volta:</span> Paris, França.</li>
						<li><span>Diárias:</span> 6 diárias.</li>
						<li><span>Hotel:</span> Sant Exupery Hotel, Champs Elysee, 1992.</li>
					</ul>
					<a href="#" class="informacoes hvr-underline-from-center" data-toggle="modal" data-target="#myModalInformacoes"><span>+</span>MAIS INFORMAÇÕES</a>
					<div class="borda"></div>
					<h4>Valor do passe de entrada:</h4>
					<h3><span class="cifrao">R$</span>100<span class="centavos">,00</span></h3>
					<div class="borda"></div>
					<div class="boxes legenda">
						<input type="checkbox" id="box-2">
						<label for="box-2">Usar dados de pagamento padrão.</label>
					</div>
					<button data-toggle="modal" data-target="#myModalEntrar" class="btn">ENTRAR NO LEILÃO</button>
				</div><!-- md-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- interna -->

<?php include 'components/footer.php'; ?>