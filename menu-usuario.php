<?php include 'components/header.php'; ?>
	
	<section class="topo">
		<div class="container">
			<p><i class="fa fa-envelope" aria-hidden="true"></i> VOCÊ ESTÁ PARTICIPANDO DE 02 LEILÕES.</p>
			<a href="" class="informacoes"><span>+</span> MAIS INFORMAÇÕES</a>
		</div><!-- container -->
	</section><!-- topo -->
	
	<section class="interna usuario">
		<div class="container">
			<div class="row">
				<div class="item">
					<div class="circle"></div>
					<div class="p-image">
						<img src="assets/images/altera.png" alt="" class="upload-button" />
						<input class="file-upload" type="file" accept="image/*"/>
					</div><!-- p-image -->
				</div><!-- item -->
				<div class="conteudo">
					<div>
						<h2 class="titulo-geral">Nome do Usuário</h2>
						<h4>nome@email.com.br</h4>
					</div>
				</div><!-- conteudo -->
			</div><!-- row -->
		</div><!-- container -->
		<div class="menu-usuario">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#tab-perfil" aria-controls="tab-perfil" role="tab" data-toggle="tab">seu perfil</a></li>
				<li role="presentation"><a href="#tab-leiloes" aria-controls="tab-leiloes" role="tab" data-toggle="tab">seus leilões</a></li>
				<li role="presentation"><a href="#tab-marcadas" aria-controls="tab-marcadas" role="tab" data-toggle="tab">viagens marcadas</a></li>
				<li role="presentation"><a href="#tab-credito" aria-controls="tab-credito" role="tab" data-toggle="tab">cartões de crédito</a></li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="tab-perfil">
					<div class="container">
						<h2 class="titulo-geral">Perfil</h2>
						<h4>Não há viagens marcadas para esse passageiro.</h4>
					</div><!-- container -->
				</div><!-- tab-pane -->
				<div role="tabpanel" class="tab-pane" id="tab-leiloes">
					<div class="container">
						<h2 class="titulo-geral">Leilões</h2>
						<h4>Não há viagens marcadas para esse passageiro.</h4>
					</div><!-- container -->
				</div><!-- tab-pane -->
				<div role="tabpanel" class="tab-pane" id="tab-marcadas">
					<div class="container">
						<h2 class="titulo-geral">Viagens marcadas</h2>
						<h4>Não há viagens marcadas para esse passageiro.</h4>
					</div><!-- container -->
				</div><!-- tab-pane -->
				<div role="tabpanel" class="tab-pane" id="tab-credito">
					<div class="container">
						<h2 class="titulo-geral">Cartões de Crédito</h2>
						<h4>Não há viagens marcadas para esse passageiro.</h4>
					</div><!-- container -->
				</div><!-- tab-pane -->
			</div><!-- tab-content -->
		</div><!-- menu-usuario -->
	</section><!-- interna -->

<?php include 'components/footer.php'; ?>