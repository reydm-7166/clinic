<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKMARK</title>
    <style> 
        form {
            border: 1px black solid;
            width: 30%;
            min-height: 20vh;
            margin: auto;
            text-align: center;
            padding: 1rem 0;
            box-sizing: border-box;
            border-radius: .5rem;
            background-color: lightblue;
        }
        input:not(#submit) {
            height: 2vh;
            width: 30%;
        } 
        #submit {
            cursor: pointer;
            font-size: 22px;
            background-color: salmon;
            border-radius: .5rem;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
            
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        h1 {
            text-align: center;
        }

    </style>
</head>
<body>
    
    <form action="/Bookmark/process" method="post">
        <h1>Add A Bookmark</h1>
        Name: <input type="text" name="name"><br><br>
        URL: <input type="text" name="URL"><br><br>
        FOLDER: <input type="text" name="folder"><br><br>
            <input type="hidden" name="count" value="1">
        <input type="submit" id="submit">
    </form>
    <main>
        <h1>BOOKMARKS</h1>
        <table>
            <tr>
                <th>Folder</th>
                <th>Name</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
            <?php $num = 1;
                foreach($this->session->userdata('row') as $data){  ?>
            <tr>
                <td><?= $data['folder'] ?></td>
                <td><?= $data['name'] ?></td>
                <td><?= $data['URL'] ?></td>
                <td><a href="/Bookmark/destroy/<?= $data['count'] ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
    </main>
</body>
</html>