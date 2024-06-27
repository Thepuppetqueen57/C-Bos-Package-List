<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/scripts.js"></script>


    <!-- I really wanted to link to a css file but for SOME reason it didnt work -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
        }

        .downloads-container {
            text-align: center;
        }

        .download-item {
            margin-bottom: 20px;
        }

        .file-name {
            color: white;
            margin-bottom: 5px;
        }

        .download-button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 10px;
            background-color: rgb(128, 128, 128);
            transition: 0.3s;
        }

        .download-button:hover {
            background-color: rgb(98, 98, 98);
            transform: scale(1.1);
        }
    </style>
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