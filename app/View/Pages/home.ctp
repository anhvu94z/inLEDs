<div id="home-upperside" class="light-bg clear-both">
	<div id="home-gallery" class="inline-block right non-mobile-portrait clearfix">
		<img src="<?=$this->webroot?>img/pages/home/home-gallery-1.jpg">
	</div>
	<div id="home-splash" class="light-bg inline-block right clearfix right-shadow">
		<div id="home-splash-text" class="">
			<div class="open-sans">
				SINGAPORE LED LIGHTS
			</div>
			<div class="amethysta auto-width full-height">
				inLEDs&trade; offers a wide range of advanced high power LED lighting products and the most cost effective solutions for replacing your conventional lighting requirements.
			</div>
			<?=$this->element('button',array(
				'class'   => 'black',
				'id'      => 'upperside-button',
				'caption' => 'VIEW GALLERY'))?>
		</div>
	</div>
</div>
<div id="home-lowerside" class="dark-bg clearfix">
	<!--PRODUCTS column -->
	<?=$this->element('home/column',array(
		'id' => 'products-desc',
		'header' => 'PRODUCTS',
		'element' => 'products'
		))?>
	<!--ARTICLES column -->
	<?=$this->element('home/column',array(
		'id' => 'applications-desc',
		'header' => 'APPLICATIONS',
		'element' => 'applications'
		))?>
	<!--PRODUCTS & UPDATES column -->
	<?=$this->element('home/column',array(
		'id' => 'p-and-u-desc',
		'header' => 'PROMOTIONS &amp; UPDATES',
		'element' => 'pnu'
		))?>
</div>
<?=$this->element('footer')?>