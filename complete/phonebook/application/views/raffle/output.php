<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon</title>
    <style>
        form {
            border: 1px black solid;
            width: 30%;
            height: 50vh;
            margin: auto;
            text-align: center;
            padding-top: 5rem;
            box-sizing: border-box;
            border-radius: .5rem;
            background-color: lightblue;
        }
        input {
            cursor: pointer;
            font-size: 25px;
            background-color: salmon;
            border-radius: .5rem;
        }
    </style>
</head>
<body>
    <form action= "/Random/output" method="post">
        <h1> There are <?= $this->session->userdata('remaining');?> lucky winners selected</h1>

        <?php $code = rand(1000000, 1999999); ?>
        <h1><?= $code ?></h1>
        <input type="submit" name="PickMore">
    </form>
</body>
</html>