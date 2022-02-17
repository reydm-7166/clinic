<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <title>Contacts</title>
</head>
<body>
        <?php if (isset($_SESSION['notification'])){ ?>
            <h1 style='text-align: center; color: blue;'><?= $_SESSION['notification'] ?></h1>
        <?php } unset($_SESSION['notification']); ?>
    <header>
        <h1>Contacts</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
            <?php $count = 1; foreach($this->session->userdata('allcontacts') as $data) {?>
            <tr>
                <td><?= $count++ ?></td>
                <td><?= $data['name']?></td>
                <td><?= $data['number']?></td>
                <td><a href="/Contacts/show/<?=$data['id']?> ">Show</a> |
                <a href="/Contacts/edit/<?=$data['id'] ?>">Edit</a> |
                <a href="/Contacts/delete_process/<?=$data['id'] ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
        <h2><a href="/Contacts/new">Add new contact</a></h2>
    </main>
</body>
</html>