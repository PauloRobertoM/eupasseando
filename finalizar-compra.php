<?php include 'components/header.php'; ?>

	<section class="interna login cadastro">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#">Entrar no leilão</a></li>
			</ol>
			<div class="row">
				<div class="col-md-7 col-sm-7">
					<h2 class="titulo-geral">Faça o seu cadastro</h2>

					<form>
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
						<button href="" class="btn">CONCLUIR CADASTRO</button>
					</form>
				</div><!-- md-7 -->
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-4 col-sm-4">
					<aside>
						<h2><img src="assets/images/ico-resumo.png" alt="" /> RESUMO DE VIAGEM</h2>
						<div class="conteudo1">
							<h4>VALOR DO PACOTE</h4>
							<ul>
								<li>Pacote <span>R$ 1200,00</span></li>
								<li>Taxas <span>R$ 60,00</span></li>
								<li class="borda"></li>
								<li class="resultado">Total <span>R$ 1260,00</span></li>
							</ul>
						</div><!-- conteudo1 -->
						<div class="conteudo2">
							<h4>PASSAGENS AÉREAS</h4>
							<div class="item">
                                <h5><img src="assets/images/ida.png" alt="" /> VOO DE IDA</h5>
                                <p><span>Air France | 00000</span></p>

                                <h4>SAÍDA</h4>
                                <p>Sexta-feira, 01/01/2018.</p>
                                <h6>Horário:</h6>
                                <p>21h42</p>
                                <h6>Local:</h6>
                                <p><span>GRU</span> | São Paulo, Brasil.</p>

                                <h4>CHEGADA</h4>
                                <p>Sexta-feira, 01/01/2018.</p>
                                <h6>Horário:</h6>
                                <p>21h42</p>
                                <h6>Local:</h6>
                                <p><span>GRU</span> | São Paulo, Brasil.</p>
                            </div><!-- item -->
                            <div class="item">
                            	<div class="borda"></div>
                                <h5><img src="assets/images/volta.png" alt="" /> VOO DE VOLTA</h5>
                                <p><span>Air France | 00000</span></p>

                                <h4>SAÍDA</h4>
                                <p>Sexta-feira, 01/01/2018.</p>
                                <h6>Horário:</h6>
                                <p>21h42</p>
                                <h6>Local:</h6>
                                <p><span>GRU</span> | São Paulo, Brasil.</p>

                                <h4>CHEGADA</h4>
                                <p>Sexta-feira, 01/01/2018.</p>
                                <h6>Horário:</h6>
                                <p>21h42</p>
                                <h6>Local:</h6>
                                <p><span>GRU</span> | São Paulo, Brasil.</p>
                                <p><span>Importante:</span> Para marcar assento nos voos, é necessário entrar em contato diretamente com a companhia aérea, seja por telefone ou no balcão da empresa no momento do check-in.</p>
                            </div><!-- item -->
						</div><!-- conteudo2 -->
						<div class="conteudo2 hospedagem">
							<h4>HOSPEDAGEM</h4>
							<img src="assets/images/hospedagem.png" alt="" class="img-responsive" />
							<p><span>Endereço:</span> Rua São joão, 2222. Paris, França.</p>
							<ul class="pull-left">
								<li class="check">CHECK-IN:</li>
								<li>02/01/2018, 12H.</li>
							</ul>
							<ul class="pull-right">
								<li class="check">CHECK-OUT:</li>
								<li>10/01/2018, 12H.</li>
							</ul>
							<ul>
								<li><span>Diárias:</span> 10 diárias.</li>
								<li><span>Quarto:</span> Suíte Premium.</li>
							</ul>
							<a href="" class="informacoes hvr-underline-from-center"><span>+</span>MAIS DETALHES</a>
						</div><!-- conteudo2 -->
					</aside>
				</div><!-- md-4 -->
			</div><!-- row -->
		</div><!-- container -->
		<img src="assets/images/back-vaije.png" alt="" class="img-responsive">
	</section><!-- interna -->

<?php include 'components/footer.php'; ?>