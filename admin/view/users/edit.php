<div class="panel panel-default">
  <div class="panel-body">
    <div class="panel panel-primary">
      <a href="index.php?controller=users&act=list" class='btn btn-success back'><i class="fas fa-caret-left"></i> Back</a>
      <div class="panel-heading">Edit Account</div>
      <div class="panel-body">
        <form action="" method="post" class="form-left" style="max-width: 350px;">
          <div class="w-600">
            <div class="panel panel-primary">
              <div class="panel-body">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input required type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $arr["email"]; ?>"></input>
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input required type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $arr["name"]; ?>"></input>
                </div>
                <div class="form-group">
                  <label for="pwd">Current Password</label>
                  <input required type="password" class="form-control" name="pass0" placeholder="Current Password">
                </div>
                <div class="form-group">
                  <label for="pwd">New Password</label>
                  <input type="password" class="form-control" name="pass1" placeholder="New Password">
                </div>
                <div class="form-group">
                  <label for="pwd">Confirm NewPassword</label>
                  <input type="password" class="form-control" name="pass2" placeholder="Confirm New Password">
                </div>
                <button type="submit" class="btn btn-default" name="edit_user">Change</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>