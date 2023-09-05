<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
// $APPLICATION->SetPageProperty("TITLE", "FEEDBACK");
$APPLICATION->SetPageProperty("keywords", "feedback");
$APPLICATION->SetPageProperty("description", "Страница обратной связи");
$APPLICATION->SetTitle("Связь");
?>
<?=
\TAO::frontend()->renderBlock('common/map')?>
<?
ob_start();
print  \TAO::form('Questions')->render();
$feedbackform = ob_get_clean();
?><br>
<?=
\TAO::frontend()->renderBlock(
    'common/feedback',
    [
    'feedbackform' => $feedbackform,
    ]
)
?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>