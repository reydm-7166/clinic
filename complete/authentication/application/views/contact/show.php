<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contact</title>
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
    <header>
        <h3><a href="/Contacts/index">Go back |</a></h3>
        <h3><a href=""> Edit</a></h3>
    </header>
    <main>
        <?php $data_show = $this->session->userdata('by_id_contact'); ?>
        <h1>Contact #<?= $data_show['id']; ?></h1>
        <p>Name: <?= $data_show['name']; ?></p><br>
        <p>Contact Number: <?= $data_show['number']; ?></p>
    </main>
</body>
</html>