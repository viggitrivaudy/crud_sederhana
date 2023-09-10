<link rel="stylesheet" href="style.css">


<h3>BIODATA</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th colspan="2" >Aksi</th>
    </tr>

    <?php 
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from biodata");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[pekerjaan]</td>
            <td>
            <a href='data_ubah.php?kode=$tampil[id]'>Ubah</td>
            <td>
            <a href='?kode=$tampil[id]'>Hapus</a>
            </td>
        </tr>";

        $no++;
    }
    
    ?>
</table>
<br>
<button><a href="tambah_data.php">Tambah Data</a></button>

<?php 

if(isset($_GET['kode'])) {
    mysqli_query($koneksi, "delete from biodata where id='$_GET[kode]'");
    
    echo "Data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='data_biodata.php'>";

}

?> 