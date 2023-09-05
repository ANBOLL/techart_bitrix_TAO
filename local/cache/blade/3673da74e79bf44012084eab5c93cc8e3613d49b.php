<div class="<?php echo e($block); ?>" id="<?php echo $itemIds['ID']; ?>" itemscope itemtype="http://schema.org/Product">
	<h1 class="<?php echo e($block->elem('h1_books_detail')); ?>"><?php echo $name; ?></h1>
    
	<div class="<?php echo e($block->elem('img_books_detail')); ?>">
		<div id="<?php echo $itemIds['BIG_SLIDER_ID']; ?>" data-entity="images-container">
			<img src="<?php echo e($actualItem['MORE_PHOTO'][0]['SRC']); ?>" alt="<?php echo e($alt); ?>" title="<?php echo e($title); ?>"<?php echo ($key == 0 ? ' itemprop="image"' : ''); ?>>
		</div>
		<div class="<?php echo e($block->elem('discont_detail')); ?>">
			<?php if($price['DISCOUNT'] > 0): ?>
				<div class="<?php echo e($block->elem('element_sale_circal')); ?>" id="<?php echo $itemIds['DISCOUNT_PERCENT_ID']; ?>" title="<?php echo -$price['PERCENT']; ?>%">
                    <span><?php echo e(-$price['PERCENT']); ?>%</span>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="<?php echo e($block->elem('price_detail_block')); ?>">
		<div class="<?php echo e($block->elem('prise_old')); ?>" id="<?php echo e($itemIds['OLD_PRICE_ID']); ?>" >
			<?php echo ($showDiscount ? $price['PRINT_RATIO_BASE_PRICE'] : ''); ?>

		</div>
		<div class="<?php echo e($block->elem('prise_actual')); ?>" id="<?php echo $itemIds['PRICE_ID']; ?>">
			<?php echo $price['PRINT_RATIO_PRICE']; ?>

		</div>
        <div class="<?php echo e($block->elem('prise_discont')); ?>" id="<?php echo e($itemIds['OLD_PRICE_ID']); ?>" >
			<?php if($showDiscount): ?>
			    <?php echo Bitrix\Main\Localization\Loc::getMessage('CT_BCE_CATALOG_ECONOMY_INFO2', array('#ECONOMY#' => $price['PRINT_RATIO_DISCOUNT'])); ?>

		    <?php endif; ?>
		</div>
		<div id="<?php echo e($itemIds['BASKET_ACTIONS_ID']); ?>">
			<a class="<?php echo e($block->elem('button_buy')); ?>" id="<?php echo e($itemIds['ADD_BASKET_LINK']); ?>" href="javascript:void(0);">
				<?php echo $arParams['MESS_BTN_ADD_TO_BASKET']; ?>

			</a>
		</div>
	</div>
	<div class="<?php echo e($block->elem('detail_book_content')); ?>">
		<?php echo $arResult['DETAIL_TEXT_TYPE'] === 'html' ? $arResult['DETAIL_TEXT'] : '<p>'.$arResult['DETAIL_TEXT'].'</p>'; ?>

	</div>
	<dl class="<?php echo e($block->elem('item_books_detail')); ?>">
		<?php $__currentLoopData = $arResult['DISPLAY_PROPERTIES']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<dt><?php echo e($property['NAME']); ?>:</dt>
			<dd><?php echo (
				is_array($property['DISPLAY_VALUE'])
				? implode(' / ', $property['DISPLAY_VALUE'])
				: $property['DISPLAY_VALUE']
				); ?>

			</dd>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</dl>
</div><?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/catalog/catalogdetail/catalogdetail.blade.php ENDPATH**/ ?>