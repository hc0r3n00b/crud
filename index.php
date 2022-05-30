<!-- Simple CRUD App - CREATE - READ - UPDATE - DELETE -->
<!-- MADE BY HC0R3N00B INCLUDING BOOTSTRAP 5, PHP, AJAX/JAVASCRIPT -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1>Simple CRUD App!</h1>
    <a class="btn btn-primary" onclick="create()" role="button">Create</a>
    <div class="container" id="read"></div>
    <div class="container" id="create"></div>
    <div class="container" id="update"></div>
    <div class="container" id="delete"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        read()
     });
     function read(){
      $.ajax({
            type: "GET",
            url: 'actions/read.php',
            success: function(response)
            {
              $( "#read" ).html(response); 
           }
       });
     }
     function create(){
        $.ajax({
            type: "GET",
            url: 'actions/create.php',
            success: function(response)
            {
              $( "#create" ).html(response); 
           }
       });
       }
       function update(id){
        $.ajax({
            type: "GET",
            url: 'actions/update.php',
            data: {id:id},
            success: function(response)
            {
              $( "#update" ).html(response); 
           }
       });
       }
       function del(id){
        $.ajax({
            type: "GET",
            url: 'actions/delete.php',
            data: {id:id},
            success: function(response)
            {
              $( "#delete" ).html(response); 
           }
       });
       }
    </script>
  </body>
</html>
