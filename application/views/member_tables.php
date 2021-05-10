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
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Pegawai</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No. Telepon</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($pegawai as $pg) {
                                                ?>
                                                <tr>
                                                    <th scope="row"><?= $i++ ?></th>
                                                    <td><?= $pg['nama_pegawai'] ?></td>
                                                    <td><?= $pg['alamat_pegawai'] ?></td>
                                                    <td><?= $pg['jenis_kelamin'] ?></td>
                                                    <td><?= $pg['no_telepon'] ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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