<?php

global $PAGE_TITLE;
global $PAGE_DESCRIPTION;
global $PAGE_KEYWORDS;

$PAGE_TITLE = "Хоумстейджинг. Москва";
$PAGE_DESCRIPTION = "Упаковка квартир Москва.(Красногорск)";
$PAGE_KEYWORDS = "homestaging москва,упаковка квартир москва,homestaging красногорск,меблировка, комплектация квартир, хоумстейджинг";

$DOCUMENT_ROOT = dirname($_SERVER['DOCUMENT_ROOT']);

require $DOCUMENT_ROOT . "/template/header.php";
require $DOCUMENT_ROOT . "/template/mitinskii-page.php";
require $DOCUMENT_ROOT . "/template/footer.php";