<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Alamat Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
        </tr>
        <?php
        $i = 1;
        foreach ($pegawai as $pegawai) :
            ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $pegawai->nama_pegawai; ?></td>
                <td><?= $pegawai->alamat_pegawai ?></td>
                <td><?= $pegawai->jenis_kelamin; ?></td>
                <td><?= $pegawai->no_telepon; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>