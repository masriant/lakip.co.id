<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= user()->username; ?></h5>
                            <ul class="list-group list-group-flush">


                                <?php if (user()->fullname) : ?>
                                    <li class="list-group-item"><?= user()->fullname; ?></li>
                                <?php endif; ?>

                                <li class="list-group-item"><?= user()->email; ?></li>



                                <li class="list-group-item"><span class="badge badge-<?= (user()->active == 0) ? 'danger' : 'success' ?>"><?= (user()->active == 0) ? 'Not Active' : 'Active' ?></span></li>

                                <li class="list-group-item"><span class="badge badge-<?= (user()->active == 0) ? 'danger' : 'success' ?>"><?= (user()->created_at); ?> </span></li>

                            </ul>

                            
                            <p class="card-text">
                                <small class="text-body-secondary">Last updated : <?= (user()->updated_at); ?> </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('/edit/') . user()->id; ?>" class="btn btn-primary">Edit</a>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>