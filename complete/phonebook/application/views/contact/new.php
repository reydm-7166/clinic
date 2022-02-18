

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Contact</title>
    <style>
        body {
            padding: 5rem 10rem;
            text-align: left;
        }
        h3 {
            display: inline-block;
        }

    </style>
</head>
<body>
        <?php if (isset($_SESSION['notification'])){ ?>
            <h1><?= $_SESSION['notification'] ?></h1>
        <?php } unset($_SESSION['notification']); ?>

    <header><a href="/Contacts/index">Go back</a></header>
    <h1>Add new contact</h1>

    <form action="/Contacts/addnew_process" method="post">
        <label>Name: </label><br>
        <input type="text" name="name"><br><br>
        <label>Contact Number: </label><br>
        <input type="text" name="number"><br><br>

        <input type="submit">
    </form>
</body>
</html>