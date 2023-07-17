<?php require "json.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSNO</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class='container text-center'>
        <table class='table'>
            <?php 
            $data = json("file.json");
            $j = 1;
            foreach ($data as $video) { 
            ?>
            <tr>
                <td>
                    <u><h1 class='hed'><?php echo $j . " ." . $video["Title"]; ?></h1></u>
                    <p class='para'><?php echo $video["Description"]; ?></p>
                    <a class='ang' href='<?php echo $video['Url']; ?>'>
                        <button>Watch Video</button>
                    </a>
                </td>
            </tr>
            <?php $j++; ?>
            <?php } ?>
        </table>
    </div>
</body>
</html>
