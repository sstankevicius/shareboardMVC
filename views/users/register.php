<div class="card">
  <div class="card-header">
    <h4>Register User</h4>
  </div>
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" />
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" />
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" />
    </div>
    <div class='buttons'>
    <input class='btn btn-primary space' type="submit" name="submit" value="Submit" />
    </div>
  </form>
</div>
