<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SISWA</title>
</head>
<body>
    <center>
        <table cellpadding="5" cellspacing="5">
            <tr >
                <th colspan="8">HASIL DATA SISWA</th>
            </tr>

            <tr >
                <td colspan="8">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th>NIS</th>
                <th>:</th>
                <td><?= $nis; ?></td>
            </tr>
            <tr>
                <th>kelas </th>
                <th>:</th>
                <td><?= $kelas; ?></td>
            </tr>
            <tr>
                <th>tanggal lahir </th>
                <th>:</th>
                <td><?= $tanggallahir; ?></td>
            </tr>
            <tr>
                <th>tempat lahir</th>
                <th>:</th>
                <td><?= $tempatlahir; ?></td>
            </tr>
            <tr>
                <th>alamat</th>
                <th>:</th>
                <td><?= $alamat; ?></td>
            </tr>
            <tr>
                <th>jenis kelamin</th>
                <th>:</th>
                <td><?= $jk; ?></td>
            </tr>
            <tr>
                <th>agama</th>
                <th>:</th>
                <td><?= $agama; ?></td>
            </tr>
            <tr >
                <td colspan="8" align="center">
                    <a href="<?= base_url('terminal'); ?>">kembali</a>
                </td>
            </tr>
            
        </table>
    </center>
</body>
</html>