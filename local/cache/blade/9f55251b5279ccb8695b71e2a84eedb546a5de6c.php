<select class="<?php echo e($block); ?>" name="<?php echo e($name); ?>">
		<option class="<?php echo e($block->elem('item')); ?>" value="Без темы">(Без темы)</option>
		<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option class="<?php echo e($block->elem('item')); ?>" value="<?php echo $key; ?>"><?php echo $value; ?></option>';
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>	<?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/form/select/select.blade.php ENDPATH**/ ?>