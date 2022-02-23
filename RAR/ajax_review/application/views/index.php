<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <title>Index</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      padding: 5rem;
      text-align: center;
    }
    .forms form {
        margin-top: 2rem;
        height: 10vh;
    }
    #update {
        margin-top: 0;
        
    }
    main {
      padding-left: 5rem;
      height: 90vh;
    }
    #quotes1 {
      width: 100%;
      min-height: 100vh;
      margin: 1rem 1rem;
      display: inline-block;
      text-align: center;
      vertical-align: top;
      padding-top: 4rem;
      outline: solid 1px black;
    }
    .quote {
        text-align: center;
    }
    #quotes1 input {
        margin-bottom: .5rem;
        border-width:0px;
        border:none;
    }
    #quotes1 p {
      font-size: 20px;
    }
    .quote{
      display: inline-block;
      outline: dotted 1px black;
      margin: 1rem 1rem;
      width: 30%;
      height: 35vh;
    }
    #delete {
        margin-top: 2rem;
        height: 4vh;
        display: inline-block;
    }
  </style>
  <script>
     $(document).ready(function(){

      $.get('/Orders/index', function(res) {
          $('#quotes').html(res);
        });

        $('#create').submit(function(){
          $.post('/Orders/create', $(this).serialize(), function(res) {
            $('#quotes').html(res);
          });
          return false;
        });
        

        $(document).on('submit', '#update', function(){
          $.post('/Orders/update', $(this).serialize(), function(res) {
            $('#quotes').html(res);
          });
          return false;
        });


        $(document).on('submit', '#delete', function(){
          $.post('/Orders/delete', $(this).serialize(), function(res) {
            $('#quotes').html(res);
          });
          return false;
        });

     });
   </script>

</head>
<body>
  <div class="forms">
    <form id="create" action="/Orders/create" method="post">
      <label>Order name</label>
      <input type="text" name="name">

      <label>Quantity </label>
      <input type="text" name="quantity">

      <input type="submit" name="submit" value="Submit">
    </form>
    </div>
    <main>
      <h1>Order Queue:</h1>
      <div id="quotes">
      </div>

    </main>
    

</body>
</html>

