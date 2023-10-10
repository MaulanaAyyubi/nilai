<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Siswa</h1>
        </div>
        <div class="col-4">
            <a href="?m=siswa&s=tampil" class="btn btn-large btn-info" style="float: right"> Kembali</a>
        </div>
        <div class="col">
            <form action="?m=siswa&s=simpan" method="post">
                <div class="mb-2">
                    <label for="">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Pilih Jurusan</label>
                    <select name="jurusan" required>
                       <option value="">AP</option>
                       <option value="">Tabus</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="">Foto</label>
                    <input type="file" name="foto" accept="image/*">
                </div>
                <div class="mb-2">
                    <input type="reset" class="btn btn-warning">&nbsp;
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>        
    </div>
</section>