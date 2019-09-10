<?php

namespace view;

class TranslateView {
    // Array containing strings
    private $title = 'Translator group 5 - Rövarspråket'; 
    private $charset = 'utf-8';

    // Textarea input
    private $input;

    // Textarea output
    public $output;

    // Function that translates rövarspråk
    public function inputToOutput() {
        $this->output = $this->input;
    }

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
