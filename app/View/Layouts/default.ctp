<!DOCTYPE html>
<html>
<!-- HEAD -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<title><?=$title_for_layout?> | inLEDs&trade;</title>
	<? if (isset($meta_description)) : ?><meta name="description" content="<?=$meta_description?>"><? endif; ?>
	<? if (isset($meta_keywords)) : ?><meta name="keywords"	 content="<?=$meta_keywords?>"><? endif; ?>
	<?php
	echo $this->Html->css(array(
		'app/reset',
		'app/presentation',
		'app/position',
		'app/colors',
		'app/fonts',
		'pages/default',
		));
	if (isset($stylesheets)&&count($stylesheets)>0&&$stylesheets[0]!='')
		foreach ($stylesheets as $sheet) echo $this->Html->css('pages/'.$sheet);
	?>
	<link href='http://fonts.googleapis.com/css?family=Amethysta|Open+Sans:300italic,400,600,700' rel='stylesheet' type='text/css'>
	<script>
		var webroot = "<?=$this->webroot?>";
	</script>
</head>
<!-- BODY -->
<body class="app-bg amethysta black-stripe-bg">
	<!-- TOP BAR -->
	<div class="full-width app-bg clearfix on-top drop-down-shadow" id="top-bar-wrapper">
		<a href="<?=$this->webroot?>">
			<div class="left" id="logo-wrapper">
				<div class="clearfix" id="logo-container">
					<!-- CSS3 logo -->
					<div class="left" id="logo-image-container">
						<div class="orange-bg circle clearfix" id="logo-outer">
							<div class="app-bg circle" id="logo-inner">
								<div class="full-width" style="height:0.125em"></div>
								<?php
									$size = 5;
									for ($i=1;$i<=$size;$i++) {
										$columns = $size-2*abs(($size+1)/2-$i);
										$spaces = abs($i-3);
										$margin_left = 0.125 + 0.0625*$spaces + 0.375*$spaces;									
										echo '<div class="logo-led-wrapper full-width" style="margin-top:0.0625em;">
												 <div class="logo-led-container" style="margin-left:' . $margin_left .'em;">';
										for ($j=0;$j<$columns;$j++) : ?>
											<div class="orange-bg circle left logo-led" style="margin-left:0.0625em"></div>
								<?php
										endfor;
										echo '   </div>
											  </div>';
									} 
								?>
							</div>
						</div>
					</div>
					<!--/ CSS3 logo -->
					<div class="left" id="logo-text-container">
						<div class="open-sans light-text" id="logo-inleds">
							inLEDs&trade;
						</div>
						<div class="open-sans lighter-text" id="logo-text">
							POWER LED LIGHTING SOLUTIONS
						</div>
					</div>
				</div>
			</div>
		</a>
		<div class="left grey-bg" id="top-bar-separator"></div>
		<div class="left amethysta clearfix" id="nav-wrapper">
			<?=$this->element('navigation',array('navs'=>$navs))?>
		</div>
	</div>
	<!-- BODY -->
	<div class="full-width centered-text clearfix" id="body">
		<div class="clearfix drop-down-shadow" id="body-container">
			<?=$content_for_layout?>
		</div>
	</div>
	<?php
	echo $this->Html->script(array(
		'app/jquery-1.7.1.min',
		'app/respond.min',
		));
	if (isset($scripts)&&count($scripts)>0&&$scripts[0]!='')
		foreach ($scripts as $script) echo $this->Html->script('pages/' . $script);		
	?>
</body>
</html>