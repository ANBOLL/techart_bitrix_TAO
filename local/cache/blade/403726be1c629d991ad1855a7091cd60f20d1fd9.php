
<div class="<?php echo e($block); ?>">
    <a href="/news/" class="<?php echo e($block->elem('a')); ?>">
        <div class="<?php echo e($block->elem('logo')); ?>">
            <img src="<?= SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt="logo" class="<?php echo e($block->elem('logo-img')); ?>">
            <p class="<?php echo e($block->elem('logo-text')); ?>">Галактический<br>вестник</p>
        </div>
    </a>
    <div class="<?php echo e($block->elem('navigation')); ?>">
        <?php echo $multilevel; ?>

    </div>
    <div class="<?php echo e($block->elem('navigation')); ?>">
        <?php echo $loginForm; ?>

    </div>
    <div class="<?php echo e($block->elem('navigation')); ?>">
        <?php echo $search; ?>

    </div>    
</div><?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/common/header/header.blade.php ENDPATH**/ ?>