<?php   require_once 'header.php'; ?>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Cover</th>
    <th>kode produkth>
    <th>Nama</th>
    <th>deskripsi</th>
    <th>harga</th>
    <th>stok</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php

    $view[]=$product->view_product();
foreach ($view as $data)
{
  ?>
      <tr>";
        <td><img src='../product/<?=$data['cover']?>' width='100' height='100'></td>";
        <td><?=$data['kode_produk']?></td>;
        <td><?=$data['nama_produk']?></td>;
        <td><?=  substr($data['deskripsi'],0,30)?></td>;
        <td><?=  $data['harga']?></td>;
        <td><?=   $data['stok']?></td>;
        <td><a href='form_ubah.php?nis=".$data['kode_produk']."'>Ubah</a></td>";
        <td><a href='proses_hapus.php?nis=".$data['kode_produk']."'>Hapus</a></td>";
      </tr>";
<?php  }
  ?>
  </table>
</body>
</html>
