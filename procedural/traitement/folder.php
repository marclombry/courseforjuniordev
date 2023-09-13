<?php 
//Create a Directory:
$directoryName = 'new_directory';

if (!file_exists($directoryName)) {
    mkdir($directoryName);
    echo "Directory '$directoryName' created successfully.";
} else {
    echo "Directory '$directoryName' already exists.";
}

// Remove (Delete) a Directory:
$directoryName = 'directory_to_delete';

if (is_dir($directoryName)) {
    if (rmdir($directoryName)) {
        echo "Directory '$directoryName' deleted successfully.";
    } else {
        echo "Unable to delete the directory.";
    }
} else {
    echo "Directory '$directoryName' does not exist.";
}

// List Files and Subdirectories in a Directory:
$directoryName = 'directory_to_list';

if (is_dir($directoryName)) {
    $contents = scandir($directoryName);
    foreach ($contents as $item) {
        echo "$item<br>";
    }
} else {
    echo "Directory '$directoryName' does not exist.";
}

// Rename a Directory:
$oldDirectoryName = 'old_directory_name';
$newDirectoryName = 'new_directory_name';

if (file_exists($oldDirectoryName)) {
    if (rename($oldDirectoryName, $newDirectoryName)) {
        echo "Directory renamed successfully.";
    } else {
        echo "Unable to rename the directory.";
    }
} else {
    echo "Directory '$oldDirectoryName' does not exist.";
}
