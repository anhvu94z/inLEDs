<?php
	$valid_categories = isset($categories)&&count($categories)>0&&$categories[0]!='';
?>
<!-- BANNER -->
<div id="banner-wrapper" class="light-bg left clear-both">
	<div id="banner-container" class="left">
		<div id="page-header" class="open-sans">
			PRODUCTS
		</div>
		<div class="amethysta">
			Please choose a product category below to browse our products.
		</div>
		<div id="products-category-select">
			<!--NAVIGATION FOR MOBILE-->
			<select class="mobile-portrait" onchange="onCategorySelected(this.value);">
				<?php if ($valid_categories) foreach ($categories as $category) : ?>
				<option value="<?=$category['alias']?>" <?php if ($category['name']==$category_name) :?>selected="selected"<?php endif; ?>><?=$category['name']?></option>
				<?php endforeach; ?>
			</select>
			<!--NAVIGATION FOR TABLET & DESKTOP-->
			<div id="categories-container" class="non-mobile-portrait clearfix">
				<?php 
				if ($valid_categories) foreach ($categories as $category) : 
				$at_current_category = ($category['name']==$category_name);
				?>
				<a href="<?=$at_current_category?"#":$this->webroot . "products/index/" . $category['alias']?>">
					<div class="category left clearfix<?php if ($at_current_category) : ?> current-category<?php endif; ?>">
						<?php if (trim($category['image'])!="") : ?>
						<div class="category-image left clear-both"><img src="<?=$this->webroot?>img/products/<?=$category['image']?>"></div>
						<?php else : ?>
						<div class="category-image-empty clear-both open-sans">NO PREVIEW AVAILABLE</div>
						<?php endif; ?>
						<div class="category-name open-sans light-text left"><?=$category['name']?></div>
					</div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<!-- PRODUCTS VIEW-->
<div id="products-view-wrapper" class="dark-bg left clear-both">
	<div id="products-view-container" class="left clearfix">
		<div id="products-category" class="left">
			<div id="category-header" class="left clear-both open-sans light-text">
				<?=$category_name?>
			</div>
			<div id="category-description" class="left clear-both amethysta grey-text non-mobile-portrait">
				<?=$category_description?>
			</div>
		</div>
		<div id="products-views" class="left clear-both">
			<!--PRODUCT VIEW-->
			
			<?php
			if (isset($products)&&count($products)>0) :
				foreach ($products as $product) : ?>
			<div id="product-wrapper" class="left clearfix">
				<div class="product-container left clearfix">
					<div class="product-leftside-wrapper left">
						<div class="product-image-wrapper left clearboth">
							<img src="<?=$this->webroot . "img/products/" . $product['Product']['category_id'] . "/" . $product['Product']['image']?>">
						</div>
						<?php if ($product['Product']['data_sheet']!="") : ?>
						<div class="product-datasheet">
							<?=$this->element('button',array(
								'class' => 'datasheet-btn orange',
								'caption' => 'VIEW DATASHEET',
								'action' => $this->webroot . "files/datasheets/" . $product['Product']['data_sheet'],
								));?>								
						</div>
						<?php endif; ?>
					</div>
					<div class="product-desc-wrapper left clearfix">
						<div class="product-desc-container clearfix">
							<div class="product-header left clear-both">
								<div class="product-name open-sans"><?=$product['Product']['name']?></div>
								<div class="product-model open-sans">
									MODEL: <?=$product['Product']['model']==""?"<em>No model specified</em>":$product['Product']['model']?>
								</div>
							</div>
							<div class="product-section-divider left clear-both"></div>
							<div class="product-details left clear-both">
								<table>
									<tbody>
										<?php 
										$details = explode(PRODUCT_DETAILS_DELIMITER,$product['Product']['data']);
										foreach ($details as $detail) :
											$columns = explode(PRODUCT_COLUMNS_DELIMITER,$detail);
										?>
										<tr>
											<td class="open-sans"><?=strtoupper($columns[0])?></td>
											<td class="amethysta"><?=$columns[1]?></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; else : ?>
				<em id="products-empty" class="grey-text">No products are available in this category yet.</em>
			<?php endif; ?>
			<!--/PRODUCT VIEW-->
		</div>
	</div>
</div>
<div class="clear-both"><?#debug($products); ?></div>
<?=$this->element('footer')?>