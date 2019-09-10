<?php

namespace view;

class TranslateView {
    // Array containing strings
    private $title = 'Translator group 5 - Rövarspråket'; 
    private $charset = 'utf-8';

    // Textarea input
    private $input = 'khqvwdkhvqd';


    // Textarea output
    private $output;
    
    echoHTML();

    // Function that translates rövarspråk

    // Rendering page
    public function echoHTML() {
        echo " 
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset='$this->charset'>
                <title>$this->title</title>
            </head>
            <body>
                <textarea rows='4' cols='50'></textarea>
                $this->input
                <br>
                $this->output
            </body>
        </html>";

    }



}
