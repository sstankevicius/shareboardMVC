<div class="card">
  <div class="card-header">
    <h4>Share something!</h4>
  </div>
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
      <label>Share Title</label>
      <input type="text" name="title" class="form-control" />
    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea name="body" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label>Link</label>
      <input type="text" name="link" class="form-control" />
    </div>
    <div class='buttons'>
    <input class='btn btn-primary space' type="submit" name="submit" value="Submit" />
    <a class='btn btn-danger' href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </div>
  </form>
</div>
