<?php include 'components/header.php'; ?>

	<section class="interna login cadastro">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#">Entrar no leilão</a></li>
			</ol>
			<div class="row">
				<div class="col-md-7 col-sm-7">
					<h2 class="titulo-geral">Faça o seu cadastro</h2>
				</div><!-- md-6 -->
			</div><!-- row -->

			<form>
				<div class="row">
					<div class="col-md-7 col-sm-7">
						<h4><img src="assets/images/ico-dados.png" alt=""> 1. Dados pessoais</h4>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label>Nome</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
							<div class="col-md-6 col-sm-6">
								<label>Último sobrenome</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
						</div><!-- row -->
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label>Data de nascimento</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
							<div class="col-md-6 col-sm-6">
								<label>Sexo</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
						</div><!-- row -->
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label>Foto de perfil</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
							<div class="col-md-6 col-sm-6">
								<label>Anexe um arquivo de imagem com até 500kb.</label>
							</div><!-- md-6 -->
						</div><!-- row -->
						<div class="borda"></div>
					</div><!-- md-6 -->
				</div><!-- row -->
				<div class="row">
					<div class="col-md-7 col-sm-7">
						<h4><img src="assets/images/ico-cartao.png" alt=""> 2. Dados de pagamento</h4>
						<h5>CARTÃO DE CRÉDITO</h5>
						<label>Nome impresso no cartão</label>
						<input type="text" class="form-control"/>
						<label>Número do cartão</label>
						<input type="text" class="form-control"/>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label>Validade</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
							<div class="col-md-6 col-sm-6">
								<label>Código de segurança</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
						</div><!-- row -->
						<div class="borda"></div>
					</div><!-- md-6 -->
				</div><!-- row -->
				<div class="row">
					<div class="col-md-7 col-sm-7">
						<h4><img src="assets/images/ico-cartao.png" alt=""> 3. E-mail para contato</h4>
						<label>E-mail</label>
						<input type="text" class="form-control"/>
						<label>Confime o e-mail</label>
						<input type="text" class="form-control"/>
						<div class="boxes">
							<input type="checkbox" id="box-1">
							<label for="box-1">Quero receber ofertas e informações do Eu passeando.</label>
						</div>
						<div class="borda"></div>
					</div><!-- md-6 -->
				</div><!-- row -->
				<div class="row">
					<div class="col-md-7 col-sm-7">
						<h4><img src="assets/images/ico-cartao.png" alt=""> 4. Sua senha</h4>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label>Login</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
						</div><!-- row -->
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label>Senha (no mínimo 8 dígitos)</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
							<div class="col-md-6 col-sm-6">
								<label>Confime sua senha</label>
								<input type="text" class="form-control"/>
							</div><!-- md-6 -->
							<div class="col-md-12 col-sm-12">
								<div class="boxes">
									<input type="checkbox" id="box-2">
									<label for="box-2">Declaro que li as <a href="">condições de compra e políticas de cancelamento</a> e estou de acordo com os termos das tarifas e serviços oferecidos pela empresa.</label>
								</div>
							</div><!-- md-12 -->
						</div><!-- row -->
					</div><!-- md-6 -->
				</div><!-- row -->

				<button href="" class="btn">CONCLUIR CADASTRO</button>
			</form>
		</div><!-- container -->
		<img src="assets/images/back-vaije.png" alt="" class="img-responsive">
	</section><!-- interna -->

<?php include 'components/footer.php'; ?>