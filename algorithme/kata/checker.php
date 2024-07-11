<?php 
function isPalindrome($str) {
    $str = preg_replace('/[^a-zA-Z0-9]/', '', $str);
    $str = strtolower($str);
    return $str === strrev($str);
}

// Example usage:
// echo isPalindrome("A man, a plan, a canal, Panama");
