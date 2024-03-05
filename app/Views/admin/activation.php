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
                        <th scope="col">Details</th>
                        <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i  = 1; ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><span class="badge badge-<?= ($user->name == "admin") ? 'danger' : 'info' ?>">
                                    <?= $user->name; ?></span>
                            </td>

                            <td><span class="badge badge-<?= ($user->active == 0) ? 'danger' : 'success' ?>"><?= ($user->active == 0) ? 'Not Active' : 'Active' ?></span> </td>

                            <!-- <+?php if ($user->active == 0) : ?> -->
                            <td>
                                <a href="<?= url_to('activate-account') . '?token=' . $user->activate_hash ?>" class="badge badge-<?= ($user->activate_hash == null) ? 'success' : 'danger' ?>"><?= ($user->activate_hash == null) ? ' PRO' : 'Activate' ?></a>
                            </td>
                            <td>
                                <a href="<?= base_url('/admin/' . $user->userid); ?>" class="badge badge-info">Details</a>
                            </td>
                            <td>
                                <a href="<?= url_to('reset-password') . '?token=' . $user->activate_hash ?>" class="badge badge-<?= ($user->activate_hash == null) ? 'success' : 'warning' ?>" target="_blank"><?= ($user->active == 1) ? ' Change Password' : 'Activate Password' ?></a>
                            </td>
                            <!-- <+?php endif; ?> -->
                        </tr>
                    <?php endforeach; ?>

            </table>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>