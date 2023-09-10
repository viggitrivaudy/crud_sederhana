<h3>Tambah Data</h3>

<form action="" method="POST">
    <table>
        <tr>
            <td width="130">ID</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>

<br>

<button><a href="data_biodata.php">Lihat Biodata</a></button>


<?php 
    include "koneksi.php";

    if(isset($_POST['proses'])) {
        mysqli_query($koneksi, "insert into biodata set
        id = '$_POST[id]',
        nama = '$_POST[nama]',
        alamat = '$_POST[alamat]',
        pekerjaan = '$_POST[pekerjaan]'");
        
        echo "Data baru telah tersimpan";
    }
?>