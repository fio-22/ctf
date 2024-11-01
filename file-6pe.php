<?php
// Attempt to include the malicious PHP script
$fileUrl = isset($_GET['file_url']) ? $_GET['file_url'] : '';

// Validate and sanitize the user-supplied file URL
$sanitizedFileUrl = filter_var($fileUrl, FILTER_VALIDATE_URL);
if ($sanitizedFileUrl !== false) {
    // Include the file
    include($sanitizedFileUrl);
} else {
    echo "Invalid URL";
}
?>