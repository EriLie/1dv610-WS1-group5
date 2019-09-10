<?php

namespace view;

require_once('TranslateView.php'); 

$translateView = new TranslateView();

$translateView->echoHTML(); 

if(isset($_POST['Submit'])) {
    $inputText = $_POST['txtin'];
    $translatedText = $translateView->translate($inputText);
    echo $translatedText;
}
