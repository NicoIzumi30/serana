<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix justify-content-start">
                <div class="col-lg-5 col-md-10">
                    <div class="card mcard_3 ">
                        <div class="body pb-5">
                            <a href="profile.html"><img src="<?= base_url() ?>assets/images/profile_av.jpg"
                                    class="rounded-circle" alt="profile-image"></a>
                            <h3 class="m-t-10 mb-0"><?= $this->session->userdata('username'); ?></h3>
                            <p>Bergabung sejak <strong><?= $this->session->userdata('create'); ?></strong></p>
                            <div class="row">
                                <div class="col-12 mb-4">

                                    <a href="#" class="btn btn-info">Edit Data</a>
                                    <a href="#" class="btn btn-warning">Ubah Password</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 col-md-10">
                    <div class="card">
                        <div class="body">
                            <small class="text-muted">Nama Petugas: </small>
                            <p><?= $this->session->userdata('nama_petugas'); ?></p>
                            <hr>
                            <small class="text-muted">Username</small>
                            <p><?= $this->session->userdata('username'); ?></p>
                            <hr>
                            <small class="text-muted">Username</small>
                            <p><?= $this->session->userdata('username'); ?></p>
                            <hr>
                            <small class="text-muted">Level</small>
                            <?php if ($this->session->userdata('level') == 1) {
                                echo '<p>Administrator</p>';
                            } elseif ($this->session->userdata('level') == 2) {
                                echo '<p>Petugas</p>';
                            } else {
                                echo '<p>undifined</p>';
                            } ?>
                            <hr>
                            <small class="text-muted">Created</small>
                            <p><?= $this->session->userdata('create'); ?></p>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>