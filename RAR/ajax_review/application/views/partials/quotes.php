
<div id="quotes1">
<?php  
foreach($partials as $order)
{     ?> 
          
    <div class="quote">
        <form id="update" action="/Orders/update" method="post">

        <h2><?= $order['id'] ?></h2>
        <input type="hidden" name="id" value="<?= $order['id'] ?>">
        Order Name: <input type="text" name="order_name" value="<?= $order['order_name']?>"><br>
        Order Quantity: <input type="text" name="order_quantity" value="<?= $order['order_quantity']?>"><br>
        <br>
        <input class="btn btn-primary" type="submit" name="submit" value="Save">        
        </form> 

        <form id="delete" action="/Orders/delete" method="post">

            <input type="hidden" name="id" value="<?= $order['id'] ?>">

        <input class="btn btn-danger" type="submit" name="submit" value="Delete">
        </form>
    </div>
<?php 
}  ?>
</div>