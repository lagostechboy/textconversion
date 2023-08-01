<?php

//check the method of the post
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST["text"])) {

    //get the POST value ...xD
    $text = $_POST['text'];

    //this function will convert text to binary
    function convertToBinary($text){
        $binary = '';
        $length = strlen($text);

        for ($i = 0; $i < $length; $i++) {
            $binary .= str_pad(decbin(ord($text[$i])), 8, '0', STR_PAD_LEFT). ' ';
        }
        return trim($binary);
    }

    //this function will convert text to ascii
    function convertToAscii($text) {
        $ascii = '';

        for ($j = 0; $j < strlen($text); $j++) {
            $ascii .= ord($text[$j]). ' ';
        }
        return trim($ascii);
    }

    //this function will convert text to hex
    function convertToHex($text) {
        $hex = '';
        
        for ($i = 0; $i < strlen($text); $i++) {
            $hex .= dechex(ord($text[$i])). ' ';
        }
        return trim($hex);
    }

    //this function will retrieve the input
    function inputTxt($text) {
        $Inputs = '';
        if ($text == $_POST['text'] && !empty($text)) {
            $Inputs = $text; 
        }
        return ($Inputs);
    }
}
?>