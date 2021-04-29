<div class="panel panel-default">
  <div class="panel-heading">List of accounts</div>
  <div class="panel-body">
    <a href="index.php?controller=users&act=add" class="add"><i class="fal fa-plus-square"></i> Add New</a>
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <tr>
          <th class="text-center">ID</th>
          <th>Name</th>
          <th>Email</th>
          <th style="width: 105px;">Created Date</th>
          <th style="width: 105px;">Updated Date</th>
          <th class="text-center">Active</th>
        </tr>
        <?php $stt=0;foreach($arrs as $arr){$stt++; ?>
          <tr>
            <td class="text-center"><?php echo $arr["id"]; ?></td>
            <td><?php echo $arr["name"]; ?></td>
            <td><?php echo $arr["email"]; ?></td>
            <td><?php echo $arr["created_date"]; ?></td>
            <td><?php echo $arr["updated_date"]; ?></td>
            <td class="text-center">
            <a href="index.php?controller=users&act=list&do=edit&id=<?php echo $arr["id"]; ?>" class="btn btn-success edit"><i class="fas fa-edit"></i>Edit</a>
            <a href="index.php?controller=users&act=list&do=del&id=<?php echo $arr["id"]; ?>" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i>Delete</a>
          </td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>