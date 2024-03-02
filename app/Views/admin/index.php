<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">User List</h1>
<!-- Table Users List -->
<div class="row">
    <div class="col-lg-8" >
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i  = 1;?>
  	<?php foreach ($users as $user) :?>
        <tr>
          <th scope="row"><?= $i++ ?></th>
          <td><?= $user->username; ?></td>
          <td><?= $user->email; ?></td>
          <td><?= $user->name; ?></td>
          <td>
            <a href="<?= base_url('/admin/' . $user->userid); ?>" class="btn btn-info">Details</a>
            <a href="<?= base_url('/admin/edituser/' . $user->userid); ?>" class="btn btn-warning">Edit</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?=$user->userid;?>">Delete</button>
            
          </td>
          
           
              
             
        </tr>
        <?php endforeach; ?>

</table>
    </div>
</div>

</div>
<?= $this->endSection(); ?>