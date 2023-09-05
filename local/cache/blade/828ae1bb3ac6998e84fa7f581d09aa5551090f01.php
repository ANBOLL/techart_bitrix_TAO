<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($component->fieldType($field) != 'hidden'): ?>
	<div class="tao-form-field tao-form-field-<?php echo e($field); ?><?php echo e($data['error_class']); ?>">
		<?php if($component->option('show_labels')): ?>
			<div class="caption"><label for=" <?php echo e($field); ?> "> <?php echo e($data['caption']); ?>:</label></div>
		<?php endif; ?>
        <?php
        $placeholder = $data['NAME'];
        $name = $data["code"];
        ?>
        <?php if($data["processed_type"] == 'input'): ?>
        <?php echo $renderer->renderBlock('form/input', ['name' => $name, 'placeholder' => $placeholder, 'type' => 'text']); ?>

        <?php else: ?>
        <?php echo $renderer->renderBlock('form/select', ['items' => $data["ITEMS"], 'name' => $name]); ?>

        <?php endif; ?>
	</div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $renderer->renderBlock('form/button', ['arr' => $component->option('submit_text') , 'type' => 'submit']); ?>

<?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/common/layoutfeedback/layoutfeedback.blade.php ENDPATH**/ ?>