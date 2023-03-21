    <a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th><th>Kode</th><th>Nama</th>
                    <th>Harga Jual</th><th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['harga_jual']?></td>
                        <td><?=$row['stok']?></td>
                        <td>
                            <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
                            <a class="btn btn-primary" href="Edit_produk.php?idedit=<?=$row['id']?>">Edit</a>
                            <a class="btn btn-primary" href="list_produk.php?iddel=<?=$row['id']?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
                            >Delete</a> 
                        </td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
<?php 
    require_once 'dbkoneksi.php';
    // Fitur delete
    if (isset($_GET['iddel'])) {
        $id = $_GET['iddel'];
        $sql= "DELETE FROM produk WHERE id = ?";
        $st = $dbh->prepare($sql);
        $st->execute([$id]);
        header("Location: list_produk.php");
        exit();
    }
?>
<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>