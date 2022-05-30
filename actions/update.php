<form id="updateform" action="actions/update_db.php">
<?php 
require 'connect.php';
$id = $_GET['id'];

$sql = "SELECT * FROM data WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '
    <input type="hidden" class="form-control" id="id" name="id" value="' . $row["id"].'">
    <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="' . $row["name"].'">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message:</label>
    <textarea class="form-control" id="message" name="message" rows="3">' . $row["message"].'</textarea>
  </div>';
  }
} else {
    echo 'Error';
}

$conn->close();
?> 
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
$("#updateform").submit(function(e) {
e.preventDefault();
var form = $(this);
var actionUrl = form.attr('action');
$.ajax({
    type: "POST",
    url: actionUrl,
    data: form.serialize(), 
    success: function(data)
    {
      read();
      $( "#update" ).html(''); 
    }
});
});
</script>