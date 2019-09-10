<?php



namespace view;

require_once('TranslateView.php'); 

$translateView = new TranslateView();

$translateView->echoHTML(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "caught post";
}