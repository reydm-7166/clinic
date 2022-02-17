<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        
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
        main {
            text-align: center;
        }
        div {
            display: inline-block;
        }
        img {
            height: 20rem;
            width: 20rem;
            margin: 1.5rem;
            border-radius: .5rem;
        }
        h3 {
            display: inline-block;
        }
        .submit {
            background-color: blue;
            color: white;
            border-radius: .3rem;
        }
        input:not(.submit){
            width: 5rem;
            margin-right: 1rem;
        }
    </style>
</head>
<body>
    <header class="p-2 bg-secondary rounded-bottom">
        <h1 class="ml-5 text-white">My Store</h1>
        <h2><a href="/Shopping/cart_data">Cart (<?php if (!empty($this->session->userdata('cart_count'))){
            echo $this->session->userdata('cart_count');
        }?>)</a></h2>
    </header>

    <main class="pt-5">
        <div>
            <form action="/Shopping/add_process" method="post">
                <img src="../../../user_guide/_images/cart/thewok_nft.jpg" alt=""><br>
                <h3>The wok NFT</h3>
                <h3 class="ml-3">$5</h3><br>
                <input type="hidden" name="item_name" value="The Wok NFT">
                <input type="hidden" name="price" value="5">
                <input type="number" name="quantity">
                <input type="submit" class="submit" name="submit" value="Buy">
            </form>
        </div>
        <div>
        <form action="/Shopping/add_process" method="post">
                <img src="../../../user_guide/_images/cart/john_xina_nft.png" alt=""><br>
                <h3>John Xena NFT</h3>
                <h3 class="ml-3">$10</h3><br>
                <input type="hidden" name="item_name" value="John Xena NFT">
                <input type="hidden" name="price" value="10">
                <input type="number" name="quantity">
                <input type="submit" class="submit" name="submit" value="Buy">
            </form>
        </div>
        <div>
            <form action="/Shopping/add_process" method="post">
                <img src="../../../user_guide/_images/cart/super_idol_nft.jpg" alt=""><br>
                <h3>Super IDOL NFT</h3>
                <h3 class="ml-3">$15</h3><br>
                <input type="hidden" name="item_name" value="Super Idol NFT">

                <input type="hidden" name="price" value="15">
                <input type="number" name="quantity">
                <input type="submit" class="submit" name="submit" value="Buy">
            </form>       
        </div>
    </main>
</body>
</html>