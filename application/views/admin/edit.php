<!-- Page Container START -->
<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- Breadcrumb Start -->
            <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                    <h4 class="page-title">Form Ubah Data Pegawai</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                    <ol class="breadcrumb float-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">/ Tabel Pegawai</a></li>
                        <li class="active">/ Ubah Data Pegawai</li>
                    </ol>
                </div>
            </div>
            <!-- Breadcrumb End -->
        </div>

        <div class="container-fluid">
            <!-- Title Count Start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-b-10">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card">
                                            <div class="card-header">
                                                <h1 class="text-center">Form Ubah Data Pegawai</h1>
                                            </div>
                                            <div class="card-body">
                                                <?php if (validation_errors()) : ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?= validation_errors(); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php foreach ($pegawai as $pegawai) { ?>
                                                    <form action="<?= base_url() . 'tabledata/update'; ?>" method="post">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id_pegawai" value="<?= $pegawai->id_pegawai ?>">
                                                            <label for="nama_pegawai">Nama Pegawai</label>
                                                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?= $pegawai->nama_pegawai ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat Pegawai</label>
                                                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pegawai->alamat_pegawai ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                                                <option value="Laki-laki" <?php if ($pegawai->jenis_kelamin == "Laki-laki") {
                                                                                                echo "selected";
                                                                                            } ?>>Laki-laki</option>
                                                                <option value="Perempuan" <?php if ($pegawai->jenis_kelamin == "Perempuan") {
                                                                                                echo "selected";
                                                                                            } ?>>Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_telepon">Nomor Telepon</label>
                                                            <input type="text" name="no_telepon" class="form-control" id="no_telepon" value="<?= $pegawai->no_telepon ?>">
                                                        </div>
                                                        <button type="submit" name="edit" class="btn btn-success float-right">Ubah Data</button>
                                                    </form>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title Count End -->
        </div>
    </div>
    <!-- Content Wrapper END -->