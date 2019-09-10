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
    public function inputToOutput() {
        $this->output = $this->input;
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
                <form action='index.php' method='post'>
                    <textarea name='txtin'>$this->input</textarea>
                    <br>
                    <textarea name='txtout'>$this->output</textarea>
                    <input type='submit' />
                </form>
            </body>
        </html>";
    }
}
