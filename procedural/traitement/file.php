<?php 
//Read the content of a file:
$fileName = 'my_file.txt';
$content = file_get_contents($fileName);

if ($content !== false) {
    echo "File content: <pre>$content</pre>";
} else {
    echo "Unable to read the file.";
}

//Write to a file:
$fileName = 'new_file.txt';
$content = 'Content to write to the file.';

if (file_put_contents($fileName, $content) !== false) {
    echo "Write to file successful.";
} else {
    echo "Unable to write to the file.";
}

//Copy a file:
$source = 'source_file.txt';
$destination = 'destination_file.txt';

if (copy($source, $destination)) {
    echo "File copied successfully.";
} else {
    echo "Unable to copy the file.";
}

//. Move a file:
$source = 'source_file.txt';
$destination = 'new_directory/destination_file.txt';

if (rename($source, $destination)) {
    echo "File moved successfully.";
} else {
    echo "Unable to move the file.";
}
//. Delete a file:
$fileName = 'file_to_delete.txt';

if (unlink($fileName)) {
    echo "File deleted successfully.";
} else {
    echo "Unable to delete the file.";
}
