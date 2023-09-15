<?php 

// create function

function generateListe(array $listes) 
{
    echo '<ul>';
    foreach($listes as $liste) 
    {
        echo '<li>'.$liste.'</li>';
    }
    echo '</ul>';
}

// call function 

generateListe(['pizza','water','eggs','oil']);


function downloadRemoteVideo($videoURL, $localPath) {
    // Download the video from a remote URL and save it locally
    $result = file_put_contents($localPath, file_get_contents($videoURL));
    
    if($result !== false) {
        return "The video was downloaded successfully.";
    } 
    
    return "Failed to download the video."; 
}

// Example usage:
$videoURL = "https://www.example.com/video.mp4";
$localPath = "path/to/local/file/video.mp4";
$resultMessage = downloadRemoteVideo($videoURL, $localPath);
echo $resultMessage;


$toJson = fn(array $array) => json_encode($array);

$job = $toJson([
    'City' => 'Paris',
    'Job' => 'Developper',
    'Salary' => '120k',
]);

var_dump($job);
?>
