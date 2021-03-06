<form name="form1" action="" method="post" class="form-horizontal">
  <script type="text/javascript">
    function showWarning(checked) {
      $('#warning').toggle();
      if (checked) {
        $('#deleteBtn').removeAttr('disabled');
      } else {
        $('#deleteBtn').attr('disabled', 'disabled');
      }
    }
  </script>
  <input type="hidden" name="action" value="delete_bill">
  <h3>Delete Bill</h3>
  <hr>
  <div class="control-group">
    <label class="control-label" for="confirm"><strong>Confirm</strong></label>
    <div class="controls">
      <div class="checkbox">
        <label>
        <input type="checkbox" name="confirm" value="confirm" onchange="javascript: showWarning(this.checked);">
        Yes, please delete this bill!
        </label>
      </div>
    </div>
  </div>
  <br>
  <div class="alert alert-danger" id="warning" style="display: none;">
    <h4 class="alert-heading"><i class="fa fa-exclamation-triangle"></i> Warning</h4>
    You are about to delete this bill.
  </div>
  <div class="form-actions">
    <button id="deleteBtn" type="submit" class="btn btn-danger" disabled="disabled"><i class="fa fa-trash"></i> <strong>Delete Bill</strong></button>
  </div>
</form>
