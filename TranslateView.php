<?php

namespace view;

// Translating input into Rövarspråk
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
        // Convert input into lowercase letters
        $input = strtolower($input);
        
        // The rövarspråk output
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
                <link rel='stylesheet' type='text/css' href='style.css'>
                <title>$this->title</title>
            </head>
            <body>
                <img src='lnu-translate.png' alt='LNU translate logo'>

                <h1>Rövarspråk</h1>
                <form action='' method='post'>
                    <textarea name='txtin' placeholder='Enter text to translate here...'>$this->input</textarea>
                    <br>
                    <input type='submit' name='Submit'/>
                </form>
            </body>
        </html>";
    }
}
