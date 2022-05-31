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
    <div id="modal"></div>
    <div id="notification"></div>
    <nav class="navbar navbar-dark bg-primary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Simple Crud App
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
        <a type="button" onclick="create()" class="btn btn-success">Create</a>
        </li>
      </ul>
  </div>
</nav>
    <div class="container" id="read"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        read();
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
              modal('Create',response);
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
              modal('Update',response);
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
              modal('Delete',response); 
           }
       });
       }
       function modal(title, body){
        $.ajax({
            type: "GET",
            url: 'elements/modal.php',
            data: {title:title,body:body},
            success: function(response)
            {
              $( "#modal" ).html(response); 
              $(".modal").modal('toggle');
           }
       });
       }
       function notification(operation, body){
        $.ajax({
            type: "GET",
            url: 'elements/notification.php',
            data: {operation:operation,body:body},
            success: function(response)
            {
              $( "#notification" ).html(response); 
              $(".toast").show();
              setTimeout("notification_distroy()", 5000);
           }
       });
       }
       function modal_distroy(){
              $(".modal").modal('toggle');
              $( "#modal" ).html(''); 
           }
           function notification_distroy(){
              $(".toast").hide();
              $( "#notification" ).html(''); 
           }
    </script>
  </body>
</html>
