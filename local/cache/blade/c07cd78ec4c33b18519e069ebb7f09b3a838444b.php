<div class="product-item <?php echo e($block); ?>" id="<?php echo e($itemIds['PICT_SLIDER']); ?>" data-slider-interval="<?php echo e($arParams['SLIDER_INTERVAL']); ?>" data-slider-wrap="true">
    <a href="<?php echo e($item['DETAIL_PAGE_URL']); ?>"  data-entity="image-wrapper" id="<?php echo e($itemIds['SECOND_PICT']); ?>">
        <img src="<?php echo $item['PREVIEW_PICTURE']['SRC']; ?>" style="<?php echo ($showSlider ? 'display: none;' : ''); ?>">
    </a>
    <div class="<?php echo e($block->elem('discont_circal')); ?>">
        <?php if($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y'): ?>
            <div class="<?php echo e($block->elem('circal_sale')); ?> <?php echo e($discountPositionClass); ?>" id="<?php echo e($itemIds['DSC_PERC']); ?>"
                <?php echo ($price['PERCENT'] > 0 ? '' : 'style="display: none;"'); ?>>
                <span><?php echo e(-$price['PERCENT']); ?>%</span>
            </div>
        <?php endif; ?>
    </div>
    <h2 class="<?php echo e($block->elem('titles_boks_top')); ?>">
        <a href="<?php echo e($item['DETAIL_PAGE_URL']); ?>" title="<?php echo $productTitle; ?>"><?php echo $productTitle; ?></a>
    </h2>
    <div class="<?php echo e($block->elem('price_books_top')); ?>">
        <?php if($arParams['SHOW_OLD_PRICE'] === 'Y'): ?>
            <span class="product-item-price-old" id="<?php echo e($itemIds['PRICE_OLD']); ?>"
            <?php echo ($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : ''); ?>>
                <?php echo $price['PRINT_RATIO_BASE_PRICE']; ?>

            </span>&nbsp;
        <?php endif; ?>
        <span class="product-item-price-current" id="<?php echo e($itemIds['PRICE']); ?>">
            <?php if(!empty($price)): ?>
                <?php if($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers): ?>
                    <?php echo \Bitrix\Main\Localization\Loc::getMessage(
                    'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
                    array(
                    '#PRICE#' => $price['PRINT_RATIO_PRICE'],
                    '#VALUE#' => $measureRatio,
                    '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
                    )
                    ); ?>

                <?php else: ?>
                    <?php echo $price['PRINT_RATIO_PRICE']; ?>

                <?php endif; ?>
            <?php endif; ?>
        </span>
        </div>
    <div class="product-item-info-container product-item-hidden" data-entity="props-block">
        <dl class="product-item-properties">
            <?php $__currentLoopData = $item['DISPLAY_PROPERTIES']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $displayProperty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <dt <?php echo (!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : ''); ?>>
                    <?php echo e($displayProperty['NAME']); ?>

                </dt>
                <dd <?php echo (!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : ''); ?>>
                    <?php echo (is_array($displayProperty['DISPLAY_VALUE'])
                    ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                    : $displayProperty['DISPLAY_VALUE']); ?>

                </dd>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </dl>
    </div>
    <div class="product-item-info-container product-item-hidden" data-entity="buttons-block">
    <div class="product-item-button-container" id="<?php echo e($itemIds['BASKET_ACTIONS']); ?>">
        <a class="<?php echo e($block->elem('btns')); ?> btn-default <?php echo e($buttonSizeClass); ?>" id="<?php echo e($itemIds['BUY_LINK']); ?>"
        href="javascript:void(0)" rel="nofollow">
        <?php echo ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']); ?>

        </a>
    </div>
    </div>
 </div>
<?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/catalog/catalogtop/catalogtop.blade.php ENDPATH**/ ?>