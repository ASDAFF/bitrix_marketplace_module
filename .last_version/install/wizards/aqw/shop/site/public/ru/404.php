<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� 404");
$APPLICATION->AddChainItem("�������� 404", "#");
?>
    <style>
    .center {text-align: center; margin-left: auto; margin-right: auto; margin-bottom: auto; margin-top: auto; padding: 10px;}
</style>
    <div class="hero-unit center">
        <h1>�������� �� �������</h1>
        <br />
        <p>��������, ������� �� ���������, �� ����� ���� ��������. ���������� � �������������� ����� ��� �������� �������� ����� ��������� �����. ����������� ������ <b>�����</b> � �������� ��� �������� �� ���������� ��������</p>
        <p><b>��� ������ ������� �� ������:</b></p>
        <a href="<?=SITE_DIR?>" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> ������� �� ������� �������� �����</a>
    </div>
    <br />
 <?$APPLICATION->IncludeComponent(
    "aqw:store.recommend",
    "",
    Array(
    )
);?>
    <!-- By ConnerT HTML & CSS Enthusiast -->
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php')?>