<!-- Page Container START -->
<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- Breadcrumb Start -->
            <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                    <h4 class="page-title">Tabel Pegawai</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                    <ol class="breadcrumb float-right">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">/ Tabel Pegawai</li>
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
                        <div class="card">
                            <div class="card-header border-bottom">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">Table Pegawai</h4>
                                    <a role="button" class="btn btn-success" href="<?= base_url('tabledata/add_data');  ?>">Tambah Data Pegawai</a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="row">
                                        <div class="col-md">
                                            <form action="<?= base_url('tabledata') ?>" method="post">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Cari Kata Kunci..." name="keyword" autocomplete="off" autofocus>
                                                    <div class="input-group-append">
                                                        <input class="btn btn-info" type="submit" name="submit">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Export to...
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?= base_url('tabledata/pdf') ?>">PDF</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?= base_url('tabledata/excel') ?>">EXCEL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <h6>Total : <?= $total_rows; ?></h6>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Pegawai</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No. Telepon</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($pegawai as $pg) {
                                                ?>
                                                <tr>
                                                    <td><?= ++$start; ?></td>
                                                    <td><?= $pg['nama_pegawai'] ?></td>
                                                    <td><?= $pg['alamat_pegawai'] ?></td>
                                                    <td><?= $pg['jenis_kelamin'] ?></td>
                                                    <td><?= $pg['no_telepon'] ?></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Aksi
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="<?= site_url('tabledata/edit/' . $pg['id_pegawai']); ?>">Edit</a>
                                                                <a class="dropdown-item" href="<?= site_url('tabledata/hapus/' . $pg['id_pegawai']); ?>" onclick="return confirm('Anda yakin?');">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <?= $pages; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title Count End -->
        </div>
    </div>
</div>
<!-- Content Wrapper END -->