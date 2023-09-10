<?php 
include "koneksi.php";

$sql = mysqli_query($koneksi, "select * from biodata where id='$_GET[kode]'");
$data= mysqli_fetch_array($sql);

?>

<h3>Ubah Data</h3>

<form action="" method="POST">
    <table>
        <tr>
            <td width="130">ID</td>
            <td><input type="text" name="id" value="<?php echo $data ['id']; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data ['nama']; ?>" ></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data ['alamat']; ?>" ></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $data ['pekerjaan']; ?>" ></td>
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
        mysqli_query($koneksi, "update biodata set
        
        nama = '$_POST[nama]',
        alamat = '$_POST[alamat]',
        pekerjaan = '$_POST[pekerjaan]'
        where id = '$_GET[kode]'");
        
        echo "Biodata telah Diubah";
        echo "<meta http-equiv=refresh content=1;URL='data_biodata.php'>";
    }
?>