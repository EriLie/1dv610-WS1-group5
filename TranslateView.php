<?php

namespace view;

class TranslateView {
    // Header meta data
    private $title = 'Translator group 5 - Rövarspråket'; 
    private $charset = 'utf-8';

    // User input
    private $input;

    // Translation output
    public $output;

    // Translates to rövarspråk
    public function translate($input) {
        return $input;
    }

    // Renders the page
    public function echoHTML() {
        echo " 
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset='$this->charset'>
                <title>$this->title</title>
            </head>
            <body>
                <form action='' method='post'>
                    <textarea name='txtin'>$this->input</textarea>
                    <br>
                    <input type='submit' name='Submit'/>
                </form>
            </body>
        </html>";
    }
}
