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
        $input = strtolower($input);
        $output = "";
        $characters = str_split($input);
        $consonants = array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z");

        foreach ($characters as $char) {
            if (in_array($char, $consonants)) {
                $output .= $char;
                $output .= "o";
                $output .= $char;
            } else {
                $output .= $char;
            }
        }

        return $output;
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
