
<?php include 'includes/head.php'; ?>

<session class="slide-home">
	<div class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active" style="background-image: url('assets/images/bg.jpg');"></div>
			<div class="item" style="background-image: url('assets/images/bg-1.jpg');"></div>
			<div class="item" style="background-image: url('assets/images/bg-2.jpg');"></div>
			<div class="item" style="background-image: url('assets/images/bg-3.jpg');"></div>
			<div class="item" style="background-image: url('assets/images/bg-4.jpg');"></div>
			<div class="item" style="background-image: url('assets/images/bg-5.jpg');"></div>
		</div>
	</div>
</session>

<header class="header" id="resumo">	
	<div class="top-container">
		<div class="row">
			<div class="container">	
				<h1 class="col-sm-3">
					<a href="#resumo" class="scroll">
						<img src="assets/images/mpsi.png" alt="MPSI">
					</a>
				</h1>

				<nav class="col-sm-9 nav txt-right">
					<div class="menu">
						<a class="scroll" href="#resumo" title="Resumo">Resumo</a>
						<a class="scroll" href="#vantagens" title="Vantagens">Vantagens</a>
						<a class="scroll" href="#quem-usa" title="Quem Usa">Quem Usa</a>
						<a class="scroll" href="#contato" title="contato">contato</a>
					</div>
					<span class="telefone">
						<span>(14) 3533 3322</span>
					</span>
					<span href="javascript" class="menu-mobile"><span></span></span>
				</nav>
			</div>
		</div>
	</div>
	
	<session class="cont-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h3>o Sistema de Manufatura por Processo.</h3>
				</div>
				<div class="col-sm-4">
					<h4><em>Controle todas as etapas deprodução, de uma ponta a outra.</em></h4>
				</div>
				<div class="col-sm-12">
					<form>
						<input type="text" name="email" id="email" placeholder="Cadastre seu e-mail">
						<button type="button" class="enviar">Solicite uma Demonstração</button>
						<p class="msg-form"></p>
					</form>
				</div>
			</div>
		</div>
	</session>

	<aside class="aside">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 item"><a href="#inventario" class="scroll" title="Inventário">Inventário</a></div>
				<div class="col-sm-3 item"><a href="#qualidade" class="scroll" title="Qualidade">Qualidade</a></div>
				<div class="col-sm-3 item"><a href="#qualidade" class="scroll" title="Planejamento">Planejamento</a></div>
				<div class="col-sm-3 item"><a href="#engenharia" class="scroll" title="Engenharia">Engenharia</a></div>

				<div class="col-sm-3 item"><a href="#engenharia" class="scroll" title="Produção">Produção</a></div>
				<div class="col-sm-3 item"><a href="#custos" class="scroll" title="Custos">Custos</a></div>
				<div class="col-sm-3 item"><a href="#custos" class="scroll" title="Custos2">Custos2</a></div>
				<div class="col-sm-3 item"><a href="#pedidos" class="scroll" title="Pedidos">Pedidos</a></div>
			</div>
		</div>
	</aside>
</header>

<session class="box-content cinza vantagens" id="vantagens">
	<div class="row">
		<div class="col-sm-5 img img-slide">
			<div class="slide-inventario">

				<div class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active" style="background-image: url('assets/images/tela-slide1.jpg');"></div>
						<div class="item" style="background-image: url('assets/images/tela-slide2.jpg');"></div>
					</div>
				</div>

			</div>
		</div>
		<div class="col-sm-6 conteudo conteudo-inventario">
			<h2>Vantagens Gerais</h2>
			<p>Suporte de profissionais experientes com mais de 30 anos no mercado.</p>
			<ul class="list-check">
				<li>Fácil implantação, entendimento e integração com outros sistemas e setores.</li>
				<li>Suporte online e atualização automática de versões.</li>
			</ul>
			<h5><strong>Sistema PMS</strong> atende às principais características da produção:</h5>
			<ul class="list-check">
				<li>Prevê a utilização de produtos intermediários na produção de um produto.</li>
				<li>Presença de coprodutos e subprodutos em qualquer fase do processo.</li>
				<li>Múltiplas fórmulas para atender condições  variadas de produção.</li>
				<li>Apuração da variação de rendimentos em qualquer fase do processo.</li>
				<li>Registros de qualidade em cada etapa da produção.</li>
				<li>Rastreabilidade de lotes, expiração e tempo de prateleira.</li>
				<li>Apropriação de custos diretos e indiretos em todos os níveis da produção.</li>
				<li>Gestão de estoque em todas as fases do processo.</li>
				<li>Reação imediata a problemas de produção e alterações de demanda.</li>
			</ul>
		</div>
	</div>
</session>

<session class="box-content video" id="quem-usa">
	<video class="play-video" width="853" height="480" controls poster="assets/images/video.jpg">
	  <source src="assets/video/video-pmsi.mp4" type="video/mp4">
	</video>
</session>

<session class="box-content inventario" id="inventario">
	<div class="container">
	<div class="row">		
		<div class="col-sm-12">
			<h2>Inventário</h2>
		</div>
		<div class="col-sm-5 col-md-offset-2 conteudo">
			<p class="destaque"><em>Com mais de 190 tipos de relatórios, você encontrará o que precisa.</em></p>
			<ul class="list-check">
				<li>Flexibilidade na estruturação do estoque.</li>
				<li>Multi-almoxarifado, lote e sublote.</li>
				<li>Múltiplas unidades de medida.</li>
				<li>Precisão, segurança e auditoria dos estoques.</li>
				<li>Simulação de posicionamento de estoque.</li>
				<li>Gerenciamento de estoques de terceiros.</li>
			</ul>
		</div>
		<!--<div class="col-sm-6 img"></div>-->
	</div>
	</div>
</session>

<session class="box-content azul qualidade" id="qualidade">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h2>Qualidade</h2>
				<p>Garante a qualidade de produtos e materiais respeitando padrões pré-definidos.<br>Registro dos resultados dos testes de amostras.<br>Emissão de laudos laboratoriais.<br>Registro dos problemas de qualidade.<br>Assegura o cumprimento de cada etapa do ciclo.<br>Registra a rastreabilidade genealógica e classifica classifica os lotes de acordo com os nivei de qualidade.</p>
			</div>
			<div class="col-sm-5 col-md-offset-2" id="planejamento">
				<h2 class="align-right">Planejamento</h2>
				<p class="align-right">Eficiência de estoque de produtos e materiais.<br>Sugere compras de materiais com base na carteira de pedidos e previsão de vendas.<br>Aconselha transferência de matérias de outras unidades evitando as compras desnecessárias.<br>Sugere produção e geração automática de ordens de produção de todos os itens envolvidos.<br>Sugere cancelamento e/ou realocação de datas.</p>
			</div>
		</div>
	</div>
</session>

<session class="box-content cinza engenharia" id="engenharia">
	<h3><span><img src="assets/images/icon-engenharia.png">Ferramenta completa com investimento acessível para empresas de todos os portes.</span></h3>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-offset-3">
				<h2>Engenharia</h2>
				<p>Define a composição e roteiro de produção, registrando as melhorias e evolução.<br>Controle de versões e workflow de aprovação.<br>Fator de perda / refugo.<br>Consumo e produção por etapas do processo.<br>Base para o planejamento, custeio e produção.</p>
			</div>
			<div class="col-sm-4" id="producao">
				<h2>Produção</h2>
				<p>Melhoria  no processo produtivo seguindo receitas, instruções de processos e padrões.<br>Visualização do desempenho em tempo real.<br>Registra a geração dos produtos, subprodutos, consumo dos materiais e recursos lote a lote, garantindo precisão dos estoques, rastreabilidade, custeio direto e indireto.<br>Apontamentos do consumo dos materiais<br>Apuração de perdas no processo e rendimento.</p>
			</div>
		</div>
	</div>
</session>

<session class="box-content azul-escuro depoimento">
	<h2>Depoimento</h2>
</session>

<session class="box-content custo" id="custos">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-offset-6">
				<h2>Custos</h2>
				<p class="destaque">Dois métodos de custeio:</p>
				<p><strong>Custo Real:</strong> este avançado algoritmo  garante o custo real do produto com base nos estoques, nas compras e  nas transferências.</p>
				<p><strong>Custo Padrão:</strong> baseado na engenharia do produto, proporcionando indicadores de viabilidade de produção, formação de preço de venda, cálculo de margem de contribuição, etc.</p>
				<p>• Em ambos os métodos são apurados os custos diretos e indiretos atendendo o conceito de Custo Integrado.</p>
				<p>• Análise detalhada do custo por componente, por exemplo, matéria prima, insumos, embalagens, mão de obra, depreciação, GGF, etc.</p>
				<p>• O simulador de custo identifica os produtos que serão afetados com uma variação de preço/câmbio dos ingredientes das fórmulas.</p>
				<p>• Custo em várias moedas.</p>
			</div>
		</div>
	</div>
</session>

<session class="box-content cinza-escuro desenvolvimento" id="pedidos">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-offset-6">
				<h2>Desenvolvimento</h2>
				<p>• Analise de mercado • Custo previsto do produto • Testes de qualidade • Investimento necessário para produção • Registro das experiência.</p>

				<h2>Fluxo de Pedidos</h2>
				<p>Integra os processos de vendas, estoque, qualidade e produção, permitindo a tomada de decisões colaborativas.</p>

				<h2>Desenvolvimento</h2>
				<p>Permite a visualização de todas as movimentações lote a lote, desde a compra dos materiais até a expedição do produto.</p>
			</div>
		</div>
	</div>
</session>

<?php include 'includes/footer.php'; ?>