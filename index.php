<?php

namespace view;

class TranslateView {
    // array containing strings
    private $title = 'Translator group 5 - Rövarspråket'; 
    private $charset = 'utf-8';

    // Textarea input
    private $input;

    // Textarea output
    private $output;
    

    // Function that translates rövarspråk

    // rendering page
    public function echoHTML() {
        echo " 
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset='$this->charset'>
                <title>$this->title</title>
            </head>
            <body>
                $this->input
                <br>
                $this->output
            </body>
        </html>";

    }



}

