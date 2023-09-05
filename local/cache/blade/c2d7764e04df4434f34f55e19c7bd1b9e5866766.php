<div class="<?php echo e($block); ?>">
    <?php if($arResult["USER_NAME"]): ?>
        <div class="<?php echo e($block->elem('formlogin')); ?>">
            <form>
                <table width="100%">
                    <tr>
                        <td align="center">
                            <?php echo e($arResult["USER_NAME"]); ?></br>
                            
                        </td>
                    </tr>
                    <tr >
                        <td align="center">
                            <?php $__currentLoopData = $arResult["GET"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($value); ?>" />
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php echo bitrix_sessid_post(); ?>

                                <input type="hidden" name="logout" value="yes" />
                                <?php echo $renderer->renderBlock('form/button' , ['arr' => GetMessage("AUTH_LOGOUT_BUTTON"), 'type' => 'submit']); ?>

                                
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    <?php endif; ?>
    <?php if($arResult["USER_NAME"] == false): ?>
        <div class="<?php echo e($block->elem('formlogin')); ?>">
            <a href="/" id="but"><h4>Авторизация</h4></a>
        </div>
    <?php endif; ?>
</div><?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/common/loginform/loginform.blade.php ENDPATH**/ ?>