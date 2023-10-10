<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Edit Modul Siswa</h1>
        </div>
        <div class="col-4">
            <a href="?m=siswa&s=tampil" class="btn btn-large btn-info" style="float: right"> Kembali</a>
        </div>
        <?php
        include_once('koneksi.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM siswa WHERE id='$id'";
        $query = mysqli_query($koneksi, $sql);
        $r = mysqli_fetch_array($query);
        ?>
        <div class="col">
            <form action="?m=siswa&s=update" method="post">
                <div class="mb-2">
                    <label for="">Nomor Induk Siswa</label>
                    <input type="text" name="nis" value="<?=$r['nis'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama" value="<?=$r['nama'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="<?=$r['tempat_lahir'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="<?=$r['tanggal_lahir'];?>" class="form-control">
                </div>
                <?php
                include_once("koneksi.php");
                $sql2 = "SELECT id, jurusan FROM jurusan ORDER BY jurusan";
                $query2 = mysqli_query($koneksi, $sql2);
                ?>
                <div class="mb-2">
                    <label for="">Pilih Jurusan</label>
                    <select name="nama_jurusan" class="form-control" required>
                        <?php
                        while($rj=mysqli_fetch_array($query2)){
                        ?>
                            <option value="<?=$rj['id'];?>" <?= $rj['id']==$r['nama_jurusan']?'selected':'' ?>><?=$rj['nama_jurusan'];?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-2">
                    <input type="hidden" name="id" value="<?=$r['id'];?>">
                    <input type="reset" class="btn btn-info">&nbsp;
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>        
    </div>
</section>