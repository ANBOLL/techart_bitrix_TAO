<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=9ef78e46-b791-4756-82ec-af9d6ef6be77" type="text/javascript"></script>
<div class="<?php echo e($block->elem('buttons')); ?>">
<button type="submit" id="tula" class="<?php echo e($block->elem('but')); ?> activebut" >Офис в Туле</button>
<button type="submit" id="moscow" class="<?php echo e($block->elem('but')); ?>" >Офис в Москве</button>
</div>
<div id="map" class="<?php echo e($block); ?>"></div>
<div id="mapmoscow" class="<?php echo e($block); ?> active"></div>

<?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/common/map/map.blade.php ENDPATH**/ ?>