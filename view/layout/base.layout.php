<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen">


    <?php
    require_once "../view/partial/nav.html.php";
    ?>
    <main>

        <?php
        echo $content;
        ?>
    </main>
</body>

</html>