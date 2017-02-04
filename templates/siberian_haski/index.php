<?php defined("_JEXEC") or die();?>
<?php

$templateparams = JFactory::getApplication()->getTemplate(true)->params;

$doc = JFactory::getDocument();
$site_logo = $templateparams->get('site_logo');
$site_name = $templateparams->get('site_name');
$site_desc = $templateparams->get('site_desc');

//print_r($templateparams);

///stylesheets
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/bootstrap.min.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/libs/fancybox/jquery.fancybox.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/libs/owl-carousel/owl.carousel.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/libs/countdown/jquery.countdown.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/fonts.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/font-awesome.min.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/custom.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/main.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/media.css');



$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/favicon.png');

if ($doc->countModules('position-5'))
{
	$showMainMenu = TRUE;
}

if ($doc->countModules('position-7'))
{
	$showSlider = TRUE;
}


//scripts
//$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/common.js');

?>

<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
</head>
<body>
	<header class="top_header">
		<nav class="header_topline">
			<div class="container">
				<div class="row">
					<div class="col-xs-2 col-sm-6 col-md-4">
						<button class="auth_button hidden-sm hidden-md hidden-lg">
							<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> 
							<!-- <i class="fa fa-key fa-lg"></i> -->
						</button>
						<div class="top_links">
							<a href="#login" class="fancybox">Вход</a>
							<span>|</span>
							<a href="#register" class="fancybox">Регистрация</a>
							<span>|</span>
							<a href="#">Забыли пароль?</a>
						</div>
					</div>
					<div class="col-xs-10 col-sm-6 col-md-3 col-md-push-5">
						<div class="soc_buttons">
							<a href="#" title="Фэйсбук">
								<span class="fa-stack fa-lg">
									<i class="fa fa-square-o fa-stack-2x" ></i>
									<i class="fa fa-facebook fa-stack-1x btn-primary"></i>
								</span>
							</a>
							<a href="#" title="Твиттер">
								<span class="fa-stack fa-lg">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x btn-info"></i>
								</span>
							</a>
							<a href="#" title="Гугл Плюс">
								<span class="fa-stack fa-lg">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x btn-danger"></i>
								</span>
							</a>
							<a href="#" title="В контакте">
								<span class="fa-stack fa-lg">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-vk fa-stack-1x btn-success"></i>
								</span>
							</a>
							<a href="#" title="Одноклассники">
								<span class="fa-stack fa-lg">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-odnoklassniki fa-stack-1x btn-warning"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-md-5 col-md-pull-3">
						<div class="top_search">
							<form id="top_search" class="form-horizontal" role="form">
								<div class="input-group">

									<input type="text" class="form-control" id="inputSearch" placeholder="Что ищем?">
									<span class="input-group-addon">
										<i class="fa fa-search fa-lg" aria-hidden="true" role="button"></i>
									</span>
								</div>
							</form>						
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="wraper_logo">
					<div class="logo_img">
					<?php if($site_logo) :?>
						<a href="<?php echo JUri::base();?>">
							<img src="<?php echo $site_logo ?>" alt="Сайт для любителей сибирских хаски в Беларуси">
						</a>
					<?php else:?>
						<a href="<?php echo JUri::base();?>">
							<img src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/images/logo.png" alt="Сайт для любителей сибирских хаски в Беларуси">
						</a>
					<?php endif;?>
					</div>
					<div class="logo_text">
						<div class="logo_title">
							<?php if($site_name) :?>
								<a href="<?php echo JUri::base();?>"><h1><?php echo $site_name ?></h1></a>
							<?php else:?>
								<a href="<?php echo JUri::base();?>"><h1>Pro-Haski.By</h1></a>
							<?php endif;?>
							
						</div>
						<div class="greeting">
							<?php if($site_desc) :?>
								<h3><?php echo $site_desc ?></h3>
							<?php else:?>
								<h3>Cайт любителей сибирских хаски!</h3>
							<?php endif;?>
						</div>
						<?php if(showMainMenu) :?>
							<nav class="main_menu">
								<button class="main_menu_bt  hidden-sm hidden-md hidden-lg">
									<!-- <i class="fa fa-bars"></i> -->
									<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Меню
								</button>							
								<jdoc:include type="modules" name="position-5" style="top_menu" />
						</nav>
					<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</header>
		<section class="content">
			<div class="container">
				<div class="row">
								<?php if($doc->countModules('position-6')) :?>
									<jdoc:include type="modules" name="position-6"/>
								<?php endif;?>
				</div>
				<div class="row">
					<div class="col-md-9 col-md-push-3">
						<div class="slider_container"><!-- Блок слайдера -->
							<div class="carousel">
								<?php if(showSlider) :?>
										<jdoc:include type="modules" name="position-7" />
								<?php endif;?>
							</div>
						</div><!-- Конец Блока слайдера -->
						<div class="conteiner">
							<div class="row">
								<?php if($doc->countModules('position-8')) :?>
									<div class="ad_posts">
										<jdoc:include type="modules" name="position-8"/>
									</div>	
								<?php endif;?>
							</div>
							<div class="row">
								<div class="list_posts">
									<jdoc:include type="component" />
								</div>
							</div>
							<div class="row">
								<?php if($doc->countModules('position-10')) :?>
									<div class="ad_posts">
										<jdoc:include type="modules" name="position-10"/>
									</div>	
								<?php endif;?>
							</div>

						</div>
					</div>
					<div class="col-md-3 col-md-pull-9">
						<div class="block_sidebar">
							<div class="row">
								<?php if($doc->countModules('position-9')) :?>
									<jdoc:include type="modules" name="position-9" style="left_menu"/>
								<?php endif;?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="main_footer">
			<div class="footer_subscribe">
				<div class="container">
					<div class="row">
						<form class="form-inline">
							<div class="form-group">
							<label for="Name">Имя:</label>
								<input type="text" class="form-control" id="Name" placeholder="Введите ваше Имя">
							</div>
							<div class="form-group">
								<label for="Email">Email:</label>
								<input type="email" class="form-control" id="Email" placeholder="Введите ваш Email">
							</div>
							<button type="submit" class="btn btn-info">Получать новости</button>
						</form>
					</div>
				</div>
			</div>
				<div class="footer_topline">
					<div class="container">
						<div class="row">
							<!-- <div class="col-md-12"> -->
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="footer_left_block">
									<!-- <button id="add_ad" class="btn btn-info hidden-md hidden-lg">
										<i class="fa fa-plus fa-lg" aria-hidden="true"></i>
										<span>Подать объявление</span>
									</button> -->
									<h3 class="add_ad" role="button">Подать объявление</h3>
									<ul>
										<li><a href="#">Продать/Купить Хаски</a></li>
										<li><a href="#">Дрессировка собак</a></li>
										<li><a href="#">Гроуминг и стрижки собак</a></li>
										<li><a href="#">Знакомство для вязки</a></li>
										<li><a href="#">Медицина и ветеринария</a></li>
										<li><a href="#">Розыск собаки</a></li>
										<li><a href="#">Ищу хозяина</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="footer_center_block">
									<h3 class="reclama" role="button">Разместить рекламу</h3>
									<div class="rec_content">
										<p>Здесь Вы можете узнать <a href="">условия и тарифы по размещению рекламы</a> на нашем сайте.</p>
										<p>Если у вас возникли дополнительные вопросы или предложения по размещению рекламы, то свяжитесь с нами по указанным контактам и мы постараемся максимально быстро ответить на них.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="footer_right_block">
									<h3 class="contacts" role="button">Контакты</h3>
									<div class="contacts_content">
										<div class="skype">
											<i class="fa fa-skype" aria-hidden="true"></i>
											<span>pro-haski</span>
										</div>
										<div class="mobile">
											<i class="fa fa-mobile" aria-hidden="true"></i>
											<span>+375 (29) 608-89-63</span>
										</div>
										<div class="email">
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>info@pro-haski.by</span>
										</div> 
									</div>
								</div>
							</div>
							<!-- </div> -->
						</div>
					</div>
				</div>
				<div class="footer_bottomline">
					<div class="conteiner">
						<div class="row">
							<div class="col-md-12">
								<span>Все права защищены. 2016 год.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="hidden">
			<form action="" id="login" class="login_form">
			<jdoc:include type="modules" name="position-0" style="autorisation" />
				<!-- <h3>Вход на сайт</h3>
				<div class="form-group has-success has-feedback">
					<label for="inputEmail" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail" placeholder="Введите Ваш Email" required>
					</div>
				</div>
				<div class="form-group has-success has-feedback">
					<label for="inputPassword" class="col-sm-3 control-label">Пароль</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword" placeholder="Введите Ваш Пароль" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Запомнить меня
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-info">Войти</button>
					</div>
				</div> -->
			</form>
			<form id="register" class="form-horizontal" role="form">
				<div class="form-group has-success has-feedback">
					<label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputSuccess3">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
					</div>
				</div>
			</form>
		</div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/js/bootstrap.min.js"></script>
	<!-- <script src="libs/jquery/jquery-1.11.1.min.js"></script> -->
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/waypoints/waypoints-1.6.2.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/scrollto/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/countdown/jquery.plugin.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/countdown/jquery.countdown-ru.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/libs/landing-nav/navigation.js"></script>
	<script type="text/javascript" src="<?php echo JUri::base();?>templates/<?php echo $doc->template; ?>/js/common.js"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>