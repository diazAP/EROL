<?php
    define('TITLE', 'EROL');
    include('includes/header.php');
?>
    <div id="philosophy">
            <h1>Apa itu EROL?</h1>
            <p>E-RoLo (<em>electronic room loan</em>) merupakan sebuah aplikasi berbasis website yang membantu pengguna dalam melakukan peminjaman ruangan di DTETI.</p>
            <h1>Kegunaan EROL</h1>
            <p>Memberikan kemudahan dimana saja dan kapan saja dalam melakukan peminjaman ruangan dan dapat memberikan rekomendasi ruangan lain pada waktu yang tersedia.</p>
            <h1>Menu EROL</h1>
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-info-list" data-toggle="list" href="#list-info" role="tab" aria-controls="info">Info</a>
                    <a class="list-group-item list-group-item-action" id="list-pinjam-list" data-toggle="list" href="#list-pinjam" role="tab" aria-controls="pinjam">Pinjam</a>
                    <a class="list-group-item list-group-item-action" id="list-daftar-list" data-toggle="list" href="#list-daftar" role="tab" aria-controls="daftar">Daftar</a>
                </div> <!--Tab Content-->
            </div> <!--Tab Content-->
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-info" role="tabpanel" aria-labelledby="list-info-list"><p>Halaman yang menampilkan informasi terkait EROL.</p></div>
                    <div class="tab-pane fade" id="list-pinjam" role="tabpanel" aria-labelledby="list-pinjam-list"><p>Halaman untuk melakukan peminjaman ruang.</p></div>
                    <div class="tab-pane fade" id="list-daftar" role="tabpanel" aria-labelledby="list-daftar-list"><p>Halaman yang menampilkan daftar peminjaman ruang.</p></div>
                </div> <!--Tab Content-->
            </div><!--Tab Content-->
        </div><!--Row Content-->
    </div>
<?php

?>

<?php
    include('includes/footer.php');
?>