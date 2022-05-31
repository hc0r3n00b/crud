<form id="createform" action="actions/create_db.php">
<div class="mb-3">
  <label for="name" class="form-label">Name:</label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
</div>
<div class="mb-3">
  <label for="message" class="form-label">Message:</label>
  <textarea class="form-control" id="message" name="message" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
$("#createform").submit(function(e) {
e.preventDefault();
var form = $(this);
var actionUrl = form.attr('action');
$.ajax({
    type: "POST",
    url: actionUrl,
    data: form.serialize(), 
    success: function(data)
    {
      modal_distroy();
      notification('Create', data)
      read();
    }
});
});
</script>