<div class="container">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-8">
            <div>
                <h1 class="text-center mb-5">Edit Data User</h1>
            </div>
            <div class="mb-5">
                <form class="mb-5" action="<?= BASEURL ?>/home/update" method="post">
                    <div>
                        <input type="text" value="<?= $data['user']['id']?>" hidden name="id">
                        <input type="text" value="<?= $data['user']['role']?>" hidden name="role">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" value="<?= $data['user']['nama'] ?>" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" value="<?= $data['user']['email'] ?>" name="email">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Handphone</label>
                        <input type="text" class="form-control" id="no_hp" value="<?= $data['user']['no_hp'] ?>" name="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="password">Password Baru</label>
                        <input type="text" class="form-control" id="password" value="<?= $data['user']['password'] ?>" name="pass">
                    </div>
                    <div class="form-group">
                        <label for="konfirmasiPassword">Konfirmasi Password Baru</label>
                        <input type="text" class="form-control" id="konfirmasiPassword" value="<?= $data['user']['konfirmasi_password'] ?>"  name="konfirmasi_password">
                    </div>
                    <a class="btn btn-secondary" href="<?= BASEURL ?>">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>