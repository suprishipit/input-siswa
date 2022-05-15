<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form iput data siswa</title>
</head>
<body bgcolor="#A9A9A9">
    <center>
        <form action="<?= base_url('terminal/cetak');  ?>"
        method="post">

            <table cellpadding="6" cellspacing="4" bgcolor="#00FFFF">
                <tr bgcolor="blue">
                    <th colspan="8">
                        <h1>INPUT DATA SISWA</h1>
                    </th>
                </tr>
                <tr >
                    <td colspan="8">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NAMA</th>
                    <th>:</th>
                    <td> <input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td><input type="number" name="nis" id="nis"></td>
                </tr>
                <tr>
                    <th>kelas</th>
                    <th>:</th>
                    <td><input type="number" name="kelas" id="kelas"></td>
                </tr>
                <tr>
                    <th>tanggal lahir</th>
                    <th>:</th>
                    <td><input type="date" name="tanggallahir" id="tanggallahir"></td>
                </tr>
                <tr>
                    <th>tempat lahir</th>
                    <th>:</th>
                    <td><input type="text " name="tempatlahir" id="tempatlahir"></td>
                </tr>
                <tr>
                    <th>alamat</th>
                    <th>:</th>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <th>jenis kelamin</th>
                    <th>:</th>
                    <td><input type="radio" value="laki-laki" name="jk" id="jk">laki-laki <br>
                        <input type="radio" value="perempuan" name="jk" id="jk">perempuan
                    </td>
                </tr>
                <tr>
                    <th>agama</th>
                    <th>:</th>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">kristen</option>
                            <option value="katolik">katolik</option>
                            <option value="budha">budha</option>
                            <option value="hindu">hindu</option>
                            <option value="protestan">protestan</option>
                            <option value="khonghucu">khonghucu</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="8" align="center">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>

        </form>
    </center>
</body>
</html>