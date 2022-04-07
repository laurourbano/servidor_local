<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro site PHP</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php
        for ($i=0; $i < 10 ; $i++) {
            print("<span class=\"linha\">Linha número " . $i . "</span><br />");
        }
    ?>
<script src="main.js"></script></body>
</html>
