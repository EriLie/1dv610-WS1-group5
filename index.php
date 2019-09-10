<?php

namespace view;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('TranslateView.php'); 

$translateView = new TranslateView();

$translateView->echoHTML(); 

if(isset($_POST['Submit'])) {
    $inputText = $_POST['txtin'];
    $translatedText = $translateView->translate($inputText);
    echo $translatedText;
}
