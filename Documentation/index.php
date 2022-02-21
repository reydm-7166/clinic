<?php 
    $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $shfl = str_shuffle($comb);
    $pwd = substr($shfl,0,12); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script>
        $(document).ready(function(){
            $("#reset").click(function(){
                $('#password').val('<?= $pwd ?>');
            });
        });
        
    </script>
    <title>Documentation</title>
</head>
<body>
    <main>
        <input type="text" id="password" value="">
        <button id="reset">Reset</button>
        
    </main>
</body>
</html>