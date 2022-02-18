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
            margin: 2rem .5rem;
        }

    </style>
</head>
<body>
    <header>
        <h3><a href="/Contacts/index">Go back</a></h3>
        <h3><a href="/Contacts/show/<?= $this->session->userdata('to_edit')?>">Show</a></h3>
    </header>
    

    <form action="/Contacts/edit_process/<?= $this->session->userdata('to_edit')?>" method="post">
        <label>Name: </label><br>
        <input type="text" name="name"><br><br>
        <label>Contact Number: </label><br>
        <input type="text" name="number"><br><br>

        <input type="submit" name="create">

    </form>
</body>
</html>