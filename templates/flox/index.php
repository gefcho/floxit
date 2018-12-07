<?php

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// Add JavaScript
$this->_scripts = $this->_script = array();
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery-3.3.1.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.mmenu.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.magnific-popup.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/wow.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.wi-feedback.min.js');

$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/intlTelInput-jquery.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/utils.js');

$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery-ui.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/fontawesome-all.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/jquery.mmenu.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/magnific-popup.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/wi-feedback.min.css');

$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/intlTelInput.css');

$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/animate.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/jquery-ui.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');

// Setting params
$doc->setGenerator('');

?>
	<!DOCTYPE html>
	<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">


	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
		<jdoc:include type="head" />
		<link rel="stylesheet" href="/templates/flox/css/animate.css">
		<script src="/templates/flox/js/wow.min.js"></script>
		<script>
			var wow = new WOW({



				mobile: false, // включение/отключение WOW.js на мобильных устройствах (по умолчанию, включено)



			});
			wow.init();

		</script>
	</head>





	<body class="site <?php echo $option
        . ' view-' . $view
        . ($layout ? ' layout-' . $layout : ' no-layout')
        . ($task ? ' task-' . $task : ' no-task')
        . ($itemid ? ' itemid-' . $itemid : '');
        echo ($this->direction == 'rtl' ? ' rtl' : '');
    ?>">
		<div id="flox-page">
			<section class="main-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-1 col-1">
							<div class="fl-main-menu">
								<?php if ($this->countModules('header-menu-left')) : ?>
								<jdoc:include type="modules" name="header-menu-left" />
								<?php endif; ?>


							</div>
							<div class="offcanvas-menu">
								<div class="offcanvas-menu-button"><i class="fas fa-bars"></i></div>
							</div>
							<div class="fl-offcanvas-menu">
								<?php if ($this->countModules('header-menu')) : ?>
								<jdoc:include type="modules" name="header-menu" />
								<?php endif; ?>
								<div class="language-swith">
									<a href="#language-popup" class="popup-language">Language</a>
								</div>

							</div>
						</div>
						<div class="flex-logo col-md-2 col-sm-10 col-10">
							<a class="main-logo" href="/./" id="fl-logo"><img src="/templates/flox/images/flox_logo.svg"></a>
							<a class="hover-logo" href="/./" id="fl-logo"><img src="/templates/flox/images/flox_logo_yellow.svg"></a>
						</div>
						<div class="col-md-5 col-sm-7 col-xs-6 col-7">
							
								
									<div class="fl-main-menu">
										<?php if ($this->countModules('header-menu-right')) : ?>
										<jdoc:include type="modules" name="header-menu-right" />
										<?php endif; ?>
									
								</div>
								<div class="lng-dsp">
										<?php if ($this->countModules('header-right-language')) : ?>
										<jdoc:include type="modules" name="header-right-language" />
										<?php endif; ?>
									</div>
								
						</div>



						


					</div>
				</div>
			</section>

			<?php if ($this->countModules('fl-banner')) : ?>
			<section class="fl-banner">
				<jdoc:include type="modules" name="fl-banner" />
			</section>
			<?php endif; ?>


			<?php if ($this->countModules('fl-banner-help')) : ?>
			<section class="fl-banner help-banner">
				<jdoc:include type="modules" name="fl-banner-help" />
			</section>
			<?php endif; ?>
			<?php if ($this->countModules('fl-banner-how')) : ?>
			<section class="fl-banner how-banner help-banner">
				<jdoc:include type="modules" name="fl-banner-how" />
			</section>
			<?php endif; ?>
			<?php if ($this->countModules('fl-banner-charge')) : ?>
			<section class="fl-banner fl-banner-charge">
				<jdoc:include type="modules" name="fl-banner-charge" />
			</section>
			<?php endif; ?>

			<?php if ($this->countModules('fl-about-us')) : ?>
			<section id="about-us" class="fl-about">
				<jdoc:include type="modules" name="fl-about-us" />
			</section>
			<?php endif; ?>


			<?php if ($this->countModules('fl-how-it-works')) : ?>
			<section id="how-it-works" class="fl-how-it-works">
				<jdoc:include type="modules" name="fl-how-it-works" />
			</section>
			<?php endif; ?>
			<?php if ($this->countModules('fl-how-it-works-second')) : ?>
			<section id="how-it-works" class="fl-how-it-works-second">
				<jdoc:include type="modules" name="fl-how-it-works-second" />
			</section>
			<?php endif; ?>
			<?php if ($this->countModules('fl-how-it-works-charge')) : ?>
			<section id="how-it-works" class="fl-how-it-works-charge">
				<jdoc:include type="modules" name="fl-how-it-works-charge" />
			</section>
			<?php endif; ?>
			<?php if ($this->countModules('fl-got-qestions')) : ?>
			<section class="fl-got-qestions">
				<jdoc:include type="modules" name="fl-got-qestions" />
			</section>
			<?php endif; ?>


			<?php if ($this->countModules('fl-safety')) : ?>
			<section id="safety" class="fl-safety">
				<jdoc:include type="modules" name="fl-safety" />
			</section>
			<?php endif; ?>


			<?php if ($this->countModules('fl-location')) : ?>
			<section id="locations" class="fl-location">
				<jdoc:include type="modules" name="fl-location" />
			</section>
			<?php endif; ?>


			<?php if ($this->countModules('fl-contact')) : ?>
			<section id="contact-us" class="fl-contact">
				<jdoc:include type="modules" name="fl-contact" />
			</section>
			<?php endif; ?>
			<?php if ($this->countModules('fl-help')) : ?>
			<section id="help" class="fl-help">
				<jdoc:include type="modules" name="fl-help" />
			</section>
			<?php endif; ?>
			<?php if ($this->countModules('fl-faq')) : ?>
			<section id="help" class="fl-help">
				<jdoc:include type="modules" name="fl-faq" />
			</section>
			<?php endif; ?>


			<?php if ($this->countModules('fl-footer')) : ?>
			<section class="fl-footer">
				<jdoc:include type="modules" name="fl-footer" />
			</section>
			<?php endif; ?>


			<jdoc:include type="modules" name="debug" />
		</div>
	</body>

	</html>
