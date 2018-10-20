<?php 
include 'config.php';
?>
<form action="tabmhs.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
    <tr>
        <td>Nim</th>
        <td>Nama</th>
        <td>Tanggal Lahir</th>
        <td>Jenis Kelamin</th>
        <td>Program Studi</th>
        <td>Fakultas</th>
        <td>Asal</th>
        <td>Moto Hidup</th>
        <td>Aksi </th>
    </tr>
    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysql_query("select * from mhs where nama like '%".$cari."%'");             
    }else{
        $data = mysql_query("select * from mhs");       
    }
    $no = 1;
    while($d = mysql_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
    </tr>
    <?php } ?>
</table>