<?php 
function areAnagrams($word1, $word2) {
    $word1 = str_replace(' ', '', strtolower($word1));
    $word2 = str_replace(' ', '', strtolower($word2));
    return count_chars($word1, 1) == count_chars($word2, 1);
}

// Example usage:
// $result = areAnagrams("listen", "silent");
// echo $result ? "Anagrams" : "Not Anagrams";
