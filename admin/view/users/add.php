<div class="panel panel-default">
	<a href="index.php?controller=users&act=list" class='btn btn-success back'><i class="fas fa-caret-left"></i> Back</a>
	<div class="panel-heading">Add New</div>
    <div class="panel-body">
		<form action="" method="post" class="form-left" style="max-width: 350px;">
			<div class="w-600">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="pwd">Password</label>
							<input required type="password" class="form-control" name="pass1" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="pwd">Confirm Password</label>
							<input required type="password" class="form-control" name="pass2" placeholder="Confirm Password">
						</div>
						<button type="submit" class="btn btn-default" name="add_user">Add New</button>
					</div>
				</div>
			</div>
		</form>
    </div>
</div>