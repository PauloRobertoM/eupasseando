<?php include 'components/header.php'; ?>
	
	<section class="topo">
		<div class="container">
			<p><i class="fa fa-envelope" aria-hidden="true"></i> VOCÊ ESTÁ PARTICIPANDO DE 02 LEILÕES.</p>
			<a href="" class="informacoes"><span>+</span> MAIS INFORMAÇÕES</a>
		</div><!-- container -->
	</section><!-- topo -->

	<section class="interna leilao">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<div class="item">
						<img src="assets/images/avatar.png" alt="" class="img-bg-viaje" />
						<h2 class="titulo-geral">Paris</h2>
						<p class="localizacao"><img src="assets/images/pin.png" alt=""> França</p>
						<h4>Esse leilão está ativo, dê seu lance.</h4>
						<a href="nossos-pacotes.php" class="informacoes hvr-underline-from-center"><span>+</span>MAIS INFORMAÇÕES</a>
					</div><!-- item -->
				</div><!-- md-9 -->
				<div class="col-md-3 col-sm-3">
					<form action="" class="form-valor-lance">
						<div class="conteudo">
							<!-- <h2><span>R$</span> 0,00</h2> -->
							<h2><span>R$</span></h2>
							<input type="text" class="form-control" placeholder="0,00" />
						</div><!-- conteudo -->
						<button data-toggle="modal" data-target="#myModalParabens" class="btn">DÊ SEU LANCE</button>
					</form>
				</div><!-- md-3 -->
			</div><!-- row -->

			<div class="progressbar">
				<h2 class="titulo-geral">Você</h2>
				<div class="progressWrapper">
					<div class="progressBar"></div>
					<div class="now" data="70%"></div>
				</div>
				<h2 class="titulo-geral">Paris</h2>
			</div><!-- progress -->

			<div class="dados">
				<div class="item">
					<h4>ENCERRAMENTO EM:</h4>
					<ul>
						<li><span id="hours"></span>HORAS</li>
						<li><span id="minutes"></span>MINUTOS</li>
					</ul>
				</div><!-- item -->
				<div class="item">
					<h4>PARTICIPANTES:</h4>
					<ul>
						<li><span class="timer" data-from="0" data-to="100"></span>PESSOAS</li>
					</ul>
				</div><!-- item -->
				<div class="item-atual">
					<div>
						<h4>VALOR ATUAL:</h4>
						<ul>
							<li><span>R$</span>10<span>,20</span></li>
						</ul>
					</div>
				</div><!-- item-atual -->
			</div><!-- dados -->
		</div><!-- container -->
		<div class="atualizacao">
			<div class="container">
				<div class="content">
					<h2 class="titulo-geral">Atualizações</h2>
					<ul>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Você está concorrendo</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Sua aposta foi validada</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> O lance atual é de R$ xxx</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Usuário 12 apostou R$ xxx</li>
					</ul>
				</div>
			</div><!-- container -->
		</div><!-- atualizacao -->
		<img src="assets/images/back-vaije.png" alt="" class="img-responsive">
	</section><!-- interna -->

<?php include 'components/footer.php'; ?>