<?php
if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
    // Directory containing the PNG files
    $directory = __DIR__ . '/img/upload/2025-05';

    // Scan the directory for files
    $files = scandir($directory);

    // Loop through the files
    foreach ($files as $file) {
        // Check if the file is a PNG file
        if (pathinfo($file, PATHINFO_EXTENSION) === 'png') {
            // Delete the file
            unlink($directory . DIRECTORY_SEPARATOR . $file);
        }
    }

    echo "PNG files deleted successfully.";
} else {
    echo '<form method="post">
            <p>Are you sure you want to delete all PNG files?</p>
            <button type="submit" name="confirm" value="yes">Yes</button>
            <button type="submit" name="confirm" value="no">No</button>
          </form>';
    exit;
}
?>
