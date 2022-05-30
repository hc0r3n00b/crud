<form id="deleteform" action="actions/delete_db.php">
<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_GET['id'] ?>"> 
<button type="submit" class="btn btn-primary">Yes</button>
</form>

<script>
$("#deleteform").submit(function(e) {
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
      $( "#delete" ).html(''); 
    }
});
});
</script>