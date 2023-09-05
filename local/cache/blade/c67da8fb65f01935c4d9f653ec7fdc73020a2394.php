<div class="<?php echo e($block); ?>">
    <form action="<?php echo e($arResult["FORM_ACTION"]); ?>" class="<?php echo e($block->elem('formwidth')); ?>">
    <?php echo $suggest; ?><?php echo $renderer->renderBlock('form/button', ['arr' => GetMessage("BSF_T_SEARCH_BUTTON"), 'type' => 'submit']); ?>

    </form>
</div>
<?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/form/form/form.blade.php ENDPATH**/ ?>