<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin: 5rem auto;
        }
        .total {
            position:absolute;
            top: 6.5rem;
            right: 32rem;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        body {
            padding: 0;
            box-sizing: border-box;
        }
        a {
            text-decoration: none;
            color: white;
        }
        header h1, h2{
            display: inline-block;
        }
        h2 {
            position: absolute;
            right: 10rem;
            top: 1rem;
        }
        h3 {
            display: inline-block;
        }
        form {
            padding: 1rem;
            border: 1px solid black;
            width: 23%;
            text-align: right;
        }
        form *:not(h1) {
            font-size: 1rem;
        }
        #submit {
            margin-top: 1rem;
        }
        label {
            margin-right: 2rem;
        }
        input {
            margin-right: 1rem;
        }

    </style>
</head>
<body>
    <header class="p-2 bg-secondary rounded-bottom">
        <h1 class="ml-5 text-white">My Store</h1>
        <h2><a href="/Shopping/index">Catalog</a></h2>
    </header>
    <main>
        <?php if(!empty($this->session->userdata('cart_items'))){
            $total = 0;
            foreach($this->session->userdata('cart_items') as $data){
           
            $total += intval($data['Quantity'] * $data['Price']);

            } echo "<h3 class='total text-success'>Total: $". $total ."</h3>";

        }?>
        <table>
            <tr>
                <th>Item Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php if (!empty($this->session->userdata('cart_items'))){
                        foreach($this->session->userdata('cart_items') as $data){ ?>
            <tr>
                <td><?= $data['item_name']; ?></td>
                <td><?= $data['Quantity'] ?></td>
                <td><?= $data['Price'] ?></td>
                <td><a class="text-primary" href="/Shopping/delete_process/<?= $data['id']?>">Delete</a></td>
            </tr>
            <?php } 
            } ?>
        </table>
    </main>
    <main class="p-5 m-5 mb-4">
        <h1 class="mb-5">Billing Info</h1>

        <form action="" post="method">
            <label>Name: </label>
            <input type="text" name="name"><br>

            <label>Address: </label>
            <input type="text" name="address"><br>

            <label>Card number: </label>
            <input type="text" name="card_number"><br>

            <input class="mt-3 bg-primary text-white rounded" type="submit" name="submit">
        </form>
    

    </main>
</body>
</html>