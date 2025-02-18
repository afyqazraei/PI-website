
<?php
// Set the directory path for the images
$imageDir = '../../figures/group_members';

// Scan the directory for all files
$files = scandir($imageDir);

// Filter out non-image files (you can add more image extensions if needed)
$imageFiles = array_filter($files, function($file) {
    return preg_match('/\.(jpg|jpeg|png|gif|JPG)$/i', $file);
});

// Send the list of image files as a JSON response
header('Content-Type: application/json');
echo json_encode(array_values($imageFiles));
?>