<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-Bos Packages</title>
    <script src="assets/scripts.js"></script>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<div class="downloads-container">
    <?php
    $dir = 'packages';

    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != '.' && $file != '..') {
                    echo '<div class="download-item">';
                    echo '<div class="file-name">' . $file . '</div>';
                    echo '<a href="' . $dir . '/' . $file . '" download>';
                    echo '<button class="download-button">Download</button>';
                    echo '</a>';
                    echo '</div>';
                }
            }
            closedir($dh);
        } else {
            echo 'Failed to open the directory.';
        }
    } else {
        echo 'Directory does not exist.';
    }
    ?>
</div>

</body>
</html>
