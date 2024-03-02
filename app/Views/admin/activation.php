<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <h4>Aktikan Account User </h4>

    <div class="row">
        <div class="col-lg-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Activate</th>
                        <th scope="col">Reset</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i  = 1; ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->name; ?></td>
                            <td><span class="badge badge-<?= ($user->active == 0) ? 'danger' : 'success' ?>"><?= ($user->active == 0) ? 'Not Active' : 'Active' ?></span> </td>

                            <td>
                                <a href="<?= url_to('activate-account') . '?token=' . $user->activate_hash ?>" class="badge badge-<?= ($user->activate_hash == null) ? 'success' : 'danger' ?>"><?= ($user->active == 1) ? 'Success' : 'Activate' ?></a>
                            </td>
                            <td>
                                <a href="<?= url_to('reset-password') . '?token=' . $user->activate_hash ?>" class="badge badge-<?= ($user->activate_hash == null) ? 'success' : 'info' ?>" target="_blank"><?= ($user->active == 1) ? 'Success' : 'Reset Password' ?></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

            </table>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>