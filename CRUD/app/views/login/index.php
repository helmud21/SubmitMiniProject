<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-6">
            <form class="p-3" action="<?= BASEURL ?>/login" method="post" id="form-login">
                <div class="form-group text-center mb-4">
                    <h1>FORM LOGIN</h1>
                    <?php Flasher::flash(); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="password">
                </div>

                <small>
                    <div>
                        <p class="text-primary" type="button" data-toggle="modal" data-target="#modalPendaftaran">Anda belum memiliki akun? Daftar di sini!</p>
                    </div>
                </small>

                <div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="modalPendaftaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= BASEURL ?>/pendaftaran/tambah" id="formPendaftaran" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No Handphone</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="konfirmasi_password">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Masukkan Konfirmasi Password" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>