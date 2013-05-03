<?php
$doc = JFactory::getDocument();

$BASE_PATH = $this->baseurl.'/templates/'.$this->template;

$doc->addStyleSheet($BASE_PATH . '/css/bootstrap/bootstrap.css');
$doc->addStyleSheet($BASE_PATH . '/css/template.css');

$doc->addScript($BASE_PATH . '/js/bootstrap.js', 'text/javascript');
$doc->addScript($BASE_PATH . '/js/main.js', 'text/javascript');

?>

<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Marck+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&subset=cyrillic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<jdoc:include type="head" />

</head>
<body>
	<!-- main container -->
	<div class='container'>
		<!-- header -->
		<header >
			<div class="row">
				<img class="span3" src="<?php echo $BASE_PATH; ?>/images/logo.png" alt="Custom image" class="customImage">
				<div class="telephone span3 offset5" >
					<a href="callto:88005555550">8 800 555 55 50</a>
					<div class="tel-description">
						<span>БЕСПЛАТНО</span><br/> <span>звонки по России</span>
					</div>
				</div>
			</div>
			<div class="header-text row">
				<div class="slogan">Профессиональная организация школьных туров<br/> в Санкт-Петербурге, Москве и Казани</div>
				<button class="order-btn btn">заказать звонок</button>	
			</div>
		</header>
		<nav id='header' class="offset2">
			<jdoc:include type="module" name="mod_menu" title="Main Menu" />
		</nav> 

		<!-- mid container - includes main content area and right sidebar -->
		<div class='mid_container '>
		   	<?php echo JHtml::_('content.prepare', '{besps}sampledata/simpleslideshow{/besps}'); ?>
			<!-- main content area -->
			<div class='content container'>
				<div class="main-content well">
	 				<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
							<!-- right sidebar -->
				<div class='right_sidebar'>
					<div class="actions">
						<h2 class="header-text">Акции:</h2>
						<jdoc:include type="modules" name="right-sidebar" style="well" />
					</div>
					<div class="application">
						<h2 class="application-header">Заявка на подбор тура</h2>
						Ваше имя
						<input></input>
						Ваш телефон
						<input></input>
						Ваша электронная почта
						<input></input>
						Город
						<input></input>
						<button class="order-btn btn">заказать звонок</button>	

					</div>
				</div>

			</div>

		</div>

		<!-- footer -->
		<footer>
			<jdoc:include type="module"  name="mod_menu" />
			<jdoc:include type="modules" name="footer"/>
			Elena Fedorova (c)
		</footer>


	</div>

</body>
</html>