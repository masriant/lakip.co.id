<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= user()->username; ?> 
                            </h5>
                            <ul class="list-group list-group-flush">

                                <?php if (user()->fullname) : ?>
                                    <li class="list-group-item"><?= user()->fullname; ?></li>
                                <?php endif; ?>
                                <li class="list-group-item"><?= user()->email; ?></li>

                                
                                

                            </ul>
                            <p class="card-text">
                                <small class="text-body-secondary">
                                    <a href="<?= base_url('user'); ?>">&laquo; Back</a>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- <div class="col-lg-8"> -->
        <!-- content -->
        <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col">
                <div class="card">
                    <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start" width="100px" alt="<?= user()->fullname; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= user()->fullname; ?></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>


        </div>
        <br>
        <!-- content end -->
        <!-- </div> -->
    </div>

</div>
<?= $this->endSection(); ?>