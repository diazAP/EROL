<?php
    define('TITLE','EROL | Pinjam Ruang');
    include('includes/header.php');
    include('includes/operation.php');
?>

<div class="container mx-auto">
    <h1 class="text-center">Pinjam Ruangan</h1>
    <div id="contact">
        <form method="post" action="" id="contact-form">
            <label for="fname">Nama Anda</label>
            <input type="text" name="fname">

            <label for="nim">NIM Anda</label>
            <input type="text" name="nim">

            <label for="penting">Kepentingan Anda</label>
            <input type="text" name="penting">

            <label>Jadwal Peminjaman</label>
            <input class="form-control" type="date" name="jadwal" min="<?php echo date('Y-m-d')?>" value="<?php echo date('Y-m-d')?>"><br>
            
            <label>Sesi Peminjaman</label>
            <select class="form-control" name="sesi">
                <option value="Sesi 1 : 07:00-08:00">Sesi 1 : 07:00-08:00</option>
                <option value="Sesi 2 : 08:00-09:00">Sesi 2 : 08:00-09:00</option>
                <option value="Sesi 3 : 09:00-10:00">Sesi 3 : 09:00-10:00</option>
                <option value="Sesi 4 : 10:00-11:00">Sesi 4 : 10:00-11:00</option>
                <option value="Sesi 5 : 11:00-12:00">Sesi 5 : 11:00-12:00</option>
                <option value="Sesi 6 : 12:00-13:00">Sesi 6 : 12:00-13:00</option>
                <option value="Sesi 7 : 13:00-14:00">Sesi 7 : 13:00-14:00</option>
                <option value="Sesi 8 : 14:00-15:00">Sesi 8 : 14:00-15:00</option>
                <option value="Sesi 9 : 15:00-16:00">Sesi 9 : 15:00-16:00</option>
            </select>

            <label>Ruangan</label>
            <select class="form-control" name="ruang">
                <option value="E5">E5</option>
                <option value="E6">E6</option>
                <option value="E7">E7</option>
                <option value="E8">E8</option>
                <option value="E9">E9</option>
                <option value="M21">M21</option>
                <option value="M23">M23</option>
                <option value="TD">TD</option>
            </select>

            <input type="submit" class="button next" name="submit" value="Kirim Pesan">
        </form>
    </div>

</div>

<?php
    //Fungsi Submit Form/Click Tombol Submit Form
    if(isset($_POST['submit'])){
        //Mendefinisikan variabel
        $fname = $_POST['fname'];
        $nim = $_POST['nim'];
        $penting = $_POST['penting'];
        $jadwal = $_POST['jadwal'];
        $sesi = $_POST['sesi'];
        $ruang = $_POST['ruang'];

        //Fungsi untuk menghitung jumlah data yang sama pada database
        $erol = new Erol();
        $cekData = $erol->cekData($jadwal,$sesi,$ruang);
        $cekRow = $cekData->fetchColumn();

        //Menjalankan fungsi pada variabel dengan tipe input varchar
        if($erol->has_header_injection($fname) || $erol->has_header_injection($nim) || $erol->has_header_injection($penting)){
            die();
        }

        /*Fungsi If untuk mengecek apakah ada salah satu data yang belum terisi
        jika terdapat data yg belum terisi akan mengeluarkan peringatan*/
        if(!$fname || !$nim || !$penting || !$jadwal || !$sesi || !$ruang){
            echo "<script>alert('Mohon untuk mengisi semua data dengan lengkap.');</script>";
        }

        //Fungsi mengisi data jika tidak ada data yang sama pada database
        if($cekRow >= 1) {
            echo "<script>alert('Pilihan sudah dipinjam. Mohon pilih jadwal/sesi/ruangan lain.');</script>";   
        }else{
            $cd = $erol->createData($fname, $nim, $penting, $jadwal, $sesi, $ruang);
            if($cd){
                header('Location: daftar.php');
            }
        }
    }
    include('includes/footer.php');
?>
