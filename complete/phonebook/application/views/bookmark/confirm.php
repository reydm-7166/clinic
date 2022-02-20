<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <style>
        * {
            text-align: center;
            margin: 1rem;
        }
    </style>
</head>
<body>
    <form action="/Bookmark/process" method="post">
        <h1>Are you sure you want to delete?</h1>
        <?php echo $folder . "/". $name . "(". $URL . ")"; ?><br>
        <input type="submit" value="no">
        <input type="submit" value="yes, I want to delete">
    </form>
</body>
</html>