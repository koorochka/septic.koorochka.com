<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arServices = Array(
    "main" => Array(
        "NAME" => "Main install from koorochka",
        "STAGES" => Array(
            "files.php", // Copy bitrix files
            "template.php", // Install template
            "settings.php"
        ),
    ),
    "iblock" => Array(
        "NAME" => "Iblock innstall from koorochka",
        "STAGES" => Array(
            "types.php", //IBlock types
            "news.php",
            "products.php",
            "services.php",
            "vacancies.php",
        ),
    ),
);
?>