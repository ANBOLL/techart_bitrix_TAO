<div class="<?php echo e($block->elem('hiden-swiper-horisontal')); ?>">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
        <?php $__currentLoopData = $newsSwiper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $test = new \TAO\File($rows["PREVIEW_PICTURE"]); ?>
            <div class="swiper-slide" >
                <a href="<?php echo $rows["DETAIL_PAGE_URL"]; ?>">
                <div class="<?php echo e($block->elem('hero_section')); ?>">
                    <div class="<?php echo e($block->elem('hero_image')); ?>">
                        <img alt="hero_image" src="<?=$test?>">
                    </div>
                    <div class="<?php echo e($block->elem('hero_text')); ?>">
                        <h1 class="<?php echo e($block->elem('hero_h1')); ?>"><?php echo e($rows["NAME"]); ?></h1>
                        <?=$rows["PREVIEW_TEXT"]?>
                    </div>
                </div>
            </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<div class="<?php echo e($block->elem('hiden-swiper-vertical')); ?>">
    <?php $__currentLoopData = $newsSwiper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $test = new \TAO\File($rows["PREVIEW_PICTURE"]); ?>
        <a href="<?php echo $rows["DETAIL_PAGE_URL"]; ?>">
            <div class="<?php echo e($block->elem('hero_section')); ?>">
                <div class="<?php echo e($block->elem('hero_image')); ?>">
                    <img alt="hero_image" src="<?=$test?>">
                </div>
                <div class="<?php echo e($block->elem('hero_text')); ?>">
                    <h1 class="<?php echo e($block->elem('hero_h1')); ?>"><?php echo e($rows["NAME"]); ?></h1>
                    <?=$rows["PREVIEW_TEXT"]?>
                </div>
            </div>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/swiper/swiper/swiper.blade.php ENDPATH**/ ?>