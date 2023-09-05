<?php if($arResult["forbidden"]): ?>
<div class="<?php echo e($block); ?>">
	<div class="<?php echo e($block->elem('page_navigation_link')); ?>">
		<p class="<?php echo e($block->elem('page_navigation_link_p')); ?>">
			<a href="/news/">Главная</a> &nbsp;/&nbsp;<?php echo e($arResult["NAME"]); ?>

		</p>
	</div>
	<div class="<?php echo e($block->elem('page_hero')); ?>">
		<h1 class="<?php echo e($block->elem('page_hero_h1')); ?>">
			<?php echo $arResult["NAME"]; ?>

		</h1>
	</div>
	<div class="<?php echo e($block->elem('page_block_news')); ?>">
		<div class="<?php echo e($block->elem('left_block_news')); ?>">
			<div class="<?php echo e($block->elem('left_block_news_data')); ?>">
				<?php if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
					<?php echo e($arResult["DISPLAY_ACTIVE_FROM"]); ?>

				<?php endif; ?>
			</div>
			<div class="<?php echo e($block->elem('left_block_news_content')); ?>">
				<?php if($arResult["NAV_RESULT"]): ?>
                    <?php if($arParams["DISPLAY_TOP_PAGER"]): ?>
                        <?php echo e($arResult["NAV_STRING"]); ?>

                    <?php endif; ?>
				        <?php echo e($arResult["NAV_TEXT"]); ?>

                    <?php if($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                        <?php echo e($arResult["NAV_STRING"]); ?>

                    <?php endif; ?>
				<?php elseif($arResult["DETAIL_TEXT"] <> ''): ?>
					<?php echo $arResult["DETAIL_TEXT"]; ?>

				<?php else: ?>
					<?php echo $arResult["PREVIEW_TEXT"]; ?>

				<?php endif; ?>
			</div>			
			<div class="<?php echo e($block->elem('theme')); ?>">
               <?php
               $arr = $arResult['DISPLAY_PROPERTIES']["THEME"]['DISPLAY_VALUE'];
               ?>
					<p>
                        <?php if(is_array($arr)): ?>
                            <?php echo "Темы: "; echo implode(", ", $arr); ?>

                        <?php else: ?>
                            <?php echo "Тема: "; echo $arr; ?>

                        <?php endif; ?>
					</p>
			</div>
			<a href="/news/" class="<?php echo e($block->elem('a_style_button')); ?>">
				<div class="<?php echo e($block->elem('left_block_news_button')); ?>">
					<div class="<?php echo e($block->elem('arrow_button_page')); ?>"></div>назад к новостям
				</div>
			</a>
		</div>
        <div class="<?php echo e($block->elem('right_block_news')); ?>">
            <?php if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])): ?>
                <img
                    border="0"
                    src="<?php echo $arResult["DETAIL_PICTURE"]["SRC"]; ?>"
                    width="<?php echo $arResult["DETAIL_PICTURE"]["WIDTH"]; ?>"
                    height="<?php echo $arResult["DETAIL_PICTURE"]["HEIGHT"]; ?>"
                    alt="<?php echo $arResult["DETAIL_PICTURE"]["ALT"]; ?>"
                    title="<?php echo $arResult["DETAIL_PICTURE"]["TITLE"]; ?>"
                    />
            <?php endif; ?>			
        </div>
	</div>
</div>
<?php endif; ?>
<?php if($arResult["forbidden"] == false): ?>
    <section class="<?php echo e($block->elem('login')); ?>">
        <h1 class="<?php echo e($block->elem('forbidden')); ?>">
            Доступ запрещен для неавторизованных пользователей! 
        </h1>
        <form class="<?php echo e($block->elem('ui-form')); ?>" name="system_auth_form<?php echo $arResult["RND"]; ?>" method="post" target="_top" action="<?php echo $arResult["AUTH_URL"]; ?>">
            <h3>Вход</h3>
            <input type="hidden" name="AUTH_FORM" value="Y" />
            <input type="hidden" name="TYPE" value="AUTH" />
            <div class="<?php echo e($block->elem('form-row')); ?>">
                <input type="text" id="email" name="USER_LOGIN" maxlength="50" value="" size="17" required autocomplete="off"/><label for="email">Логин</label>
            </div>
            <div class="<?php echo e($block->elem('form-row')); ?>">
                <input type="password"  id="password" name="USER_PASSWORD" maxlength="255" size="17" required autocomplete="off" /><label for="password">Пароль</label>
            </div>
            <input class="<?php echo e($block->elem('button_forms_autorize')); ?>" type="submit" name="Login" value="<?php echo e(GetMessage("AUTH_LOGIN_BUTTON")); ?>" />
        </form>
    </section>
<?php endif; ?><?php /**PATH /var/www/workspace/herald/www/local/templates/main/frontend/src/block/news/newsdetail/newsdetail.blade.php ENDPATH**/ ?>