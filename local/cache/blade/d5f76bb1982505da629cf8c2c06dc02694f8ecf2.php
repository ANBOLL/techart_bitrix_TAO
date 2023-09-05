<div class="<?php echo e($block); ?>">
        <?php if(!empty($arResult)): ?>
        <ul class="<?php echo e($block->elem('item')->mod('multilevel')); ?>">
        <?php
        $previousLevel = 0;
        ?>
        <?php $__currentLoopData = $arResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
               <?php echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>

            <?php endif; ?>
                <?php if($arItem["IS_PARENT"]): ?>
                    <?php if($arItem["DEPTH_LEVEL"] == 1): ?>
                        <li><a href="<?php echo e($arItem["LINK"]); ?>" class="<?php echo e($block->elem('listmenu')); ?> <?php if($arItem["SELECTED"]): ?><?php echo e($block->elem('listmenu')->mod('active')); ?><?php endif; ?>"><h4><?php echo e($arItem["TEXT"]); ?></h4></a>
                        <ul>
                    <?php else: ?>
                        <li  class="<?php if($arItem["SELECTED"]): ?><?php echo e($block->elem('selected')); ?><?php endif; ?>"><a href="<?php echo e($arItem["LINK"]); ?>" class=""><?php echo e($arItem["TEXT"]); ?></a>
                        <ul>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($arItem["PERMISSION"] > "D"): ?>
                        <?php if($arItem["DEPTH_LEVEL"] == 1): ?>
                            <li><a href="<?php echo e($arItem["LINK"]); ?>" class="<?php echo e($block->elem('listmenu')); ?> <?php if($arItem["SELECTED"]): ?><?php echo e($block->elem('listmenu')->mod('active')); ?><?php endif; ?>"><h4><?php echo e($arItem["TEXT"]); ?></h4></a></li>
                        <?php else: ?>
                            <li class="<?php if($arItem["SELECTED"]): ?><?php echo e($block->elem('selected')); ?><?php endif; ?>"><a href="<?php echo e($arItem["LINK"]); ?>"><?php echo e($arItem["TEXT"]); ?></a></li>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($arItem["DEPTH_LEVEL"] == 1): ?>
                            <li><a href="" class="<?php if($arItem["SELECTED"]): ?><?php echo e($block->elem('listmenu')); ?><?php else: ?><?php echo e($block->elem('listmenu')->mod('active')); ?><?php endif; ?>" title="<?php echo e(GetMessage("MENU_ITEM_ACCESS_DENIED")); ?>"><h4><?php echo e($arItem["TEXT"]); ?></h4></a></li>
                        <?php else: ?>
                            <li><a href="" class="denied" title="<?php echo e(GetMessage("MENU_ITEM_ACCESS_DENIED")); ?>"><?php echo e($arItem["TEXT"]); ?></a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php
            $previousLevel = $arItem["DEPTH_LEVEL"];
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($previousLevel > 1): ?>
            <?php echo str_repeat("</ul></li>", ($previousLevel-1) ); ?>

        <?php endif; ?>
        </ul>
        <?php endif; ?>
</div>
<div class="<?php echo e($block->elem('hight')); ?>">
    <div class="topnav" id="myTopnav">
        <?php $__currentLoopData = $arResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
           <?php echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>

        <?php endif; ?>
            <?php if($arItem["IS_PARENT"]): ?>
                <?php if($arItem["DEPTH_LEVEL"] == 1): ?>
                    <a href="<?php echo e($arItem["LINK"]); ?>" class="<?php echo e($block->elem('listmenu')); ?> <?php if($arItem["SELECTED"]): ?><?php echo e($block->elem('listmenu')->mod('active')); ?><?php endif; ?>"><h4><?php echo e($arItem["TEXT"]); ?></h4></a>
                    
                <?php else: ?>
                    <a href="<?php echo e($arItem["LINK"]); ?>" class=""><?php echo e($arItem["TEXT"]); ?></a>
                    <ul>
                <?php endif; ?>
            <?php else: ?>
                <?php if($arItem["PERMISSION"] > "D"): ?>
                    <?php if($arItem["DEPTH_LEVEL"] == 1): ?>
                            <a href="<?php echo e($arItem["LINK"]); ?>" class="<?php echo e($block->elem('listmenu')); ?> <?php if($arItem["SELECTED"]): ?><?php echo e($block->elem('listmenu')->mod('active')); ?><?php endif; ?>"><h4><?php echo e($arItem["TEXT"]); ?></h4></a>
                        <?php else: ?>
                            <a id="hight_block_a" class="<?php echo e($block->elem('Ablocknone')); ?>" href="<?php echo e($arItem["LINK"]); ?>"><?php echo e($arItem["TEXT"]); ?></a>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($arItem["DEPTH_LEVEL"] == 1): ?>
                        <a href="" class="<?php if($arItem["SELECTED"]): ?><?php echo e($block->elem('listmenu')); ?><?php else: ?><?php echo e($block->elem('listmenu')->mod('active')); ?><?php endif; ?>" title="<?php echo e(GetMessage("MENU_ITEM_ACCESS_DENIED")); ?>"><h4><?php echo e($arItem["TEXT"]); ?></h4></a>
                    <?php else: ?>
                        <a href="" class="denied" title="<?php echo e(GetMessage("MENU_ITEM_ACCESS_DENIED")); ?>"><?php echo e($arItem["TEXT"]); ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php
        $previousLevel = $arItem["DEPTH_LEVEL"];
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="javascript:void(0);" class="icon cl-btn-7" onclick="myFunction()">
        </a>
    </div>
</div><?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/common/multimenu/multimenu.blade.php ENDPATH**/ ?>