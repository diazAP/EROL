<?php
    define('TITLE','EROL | Daftar Peminjaman');
    include('includes/header.php');
    include('includes/operation.php');
?>

<h1>Daftar Peminjaman</h1>
<div class="container mx-auto">
  <table class="table table-hover table-responsive">
    <thead class="thead-dark text-center">
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">Kepentingan</th>
        <th scope="col">Jadwal Peminjaman</th>
        <th scope="col">Waktu Peminjaman</th>
        <th scope="col">Ruangan</th>
        <th scope="col">Waktu Input</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>

<?php
  $erol = new Erol();
  $read = $erol->readData();
  while($data = $read->fetch(PDO::FETCH_OBJ)){
    echo "<tr>
            <td>$data->fname</td>
            <td>$data->nim</td>
            <td>$data->penting</td>
            <td>$data->jadwal</td>
            <td>$data->startTime - $data->endTime</td>
            <td>$data->ruang</td>
            <td>$data->timeInput</td>
            <td><div class='btn-group'><a class='btn btn-info btn-sm text-white' href='includes/edit.php?pesanId=$data->pesanId'>Ubah</a>
                <a class='btn btn-danger btn-sm text-white' href='daftar.php?hapus=$data->pesanId'>Hapus</a></div></td>
          </tr>";
  };
?>

    </tbody>
  </table>
  <a href="pinjam.php" class="button next">Pinjam Ruang</a>
</div> <br> <br>

<?php
  if(isset($_GET['hapus'])){
    $hapus = $erol->deleteData($_GET['hapus']);
    header('Location: daftar.php');
  }
  include('includes/footer.php');
?>