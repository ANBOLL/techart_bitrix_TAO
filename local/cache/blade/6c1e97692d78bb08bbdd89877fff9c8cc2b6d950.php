<section class="<?php echo e($block->elem('news_title')); ?>">
    <?php if(in_array($arrTheme, $arResult["THEME_LIST"])): ?>
    <h2 class="<?php echo e($block->elem('news_title_h2')); ?>">Новости по теме <?php echo e($arrTheme); ?></h2>
    <?php echo $APPLICATION->SetTitle($arrTheme); ?>

    <?php elseif(!isset($themeCode)): ?>
    <h2 class="<?php echo e($block->elem('news_title_h2')); ?>">Новости</h2>
    <?php echo $APPLICATION->SetTitle("NEWS"); ?>

    <?php endif; ?>
    </section>
    <div class="<?php echo e($block->elem('news_block')); ?>">
        <?php if($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?php echo e($arResult["NAV_STRING"]); ?>

        <?php endif; ?>
        <?php $__currentLoopData = $arResult["ITEMS"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $arResult["NEWS"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valueID): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($arItem["ID"] == $valueID): ?>     
            <?php
                $comp->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $comp->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="<?php echo e($block->elem('news')); ?>">
                <?php if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                    <div class="<?php echo e($block->elem('data_news')); ?>">
                        <?php echo e($arItem["DISPLAY_ACTIVE_FROM"]); ?>

                    </div>
                <?php endif; ?>
                <?php if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]): ?>
                <?php if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <div class="<?php echo e($block->elem('title_news')); ?>">
                        <?php echo e($arItem["NAME"]); ?>

                    </div>
                <?php else: ?>
                    <?php echo e($arItem["NAME"]); ?>

                <?php endif; ?>
                <?php endif; ?>
                <?php if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]): ?>
                <div class="<?php echo e($block->elem('announce_news')); ?>">
                    <?php echo $arItem["PREVIEW_TEXT"]; ?>

                </div>
                <?php endif; ?>
                <?php if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                <?php endif; ?>
                <?php $__currentLoopData = $arItem["FIELDS"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <small>
                        <?php echo GetMessage("IBLOCK_FIELD_".$code); ?>:&nbsp;<?php echo e($value); ?>

                    </small>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                <?php $__currentLoopData = $arItem["DISPLAY_PROPERTIES"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pid=>$arProperty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <small>
                    <?php echo e($arProperty["NAME"]); ?>:&nbsp;
                    <?php if(is_array($arProperty["DISPLAY_VALUE"])): ?>
                        <?php echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>

                    <?php else: ?>
                        <?php echo e($arProperty["DISPLAY_VALUE"]); ?>

                    <?php endif; ?>
                    </small>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a href="/news/<?php echo e($arItem["ID"]); ?>/" class="<?php echo e($block->elem('a_style_button')); ?>">
                    <div class="<?php echo e($block->elem('button_news')); ?>">
                        Подробнее<div class="<?php echo e($block->elem('arrow_button')); ?>"></div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <?php echo $arResult["NAV_STRING"]; ?>

    <?php endif; ?>
<?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/news/newslist/newslist.blade.php ENDPATH**/ ?>