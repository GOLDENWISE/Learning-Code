<section class="mt-0 pt-2">
  <div class="container py-3 mt-5 pt-3">
    <div class="row d-flex justify-content-center align-items-center py-5">
      <div class="col col-lg-6 mb-5 mb-lg-0">
        <div class="card mb-3  bg-gradient">
          <div class="row g-0">
            <div class="col-md-4 text-center bg-gradient text-bg-danger" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="<?= base_url('assets/img/').$img; ?>"alt="Avatar" class="img-fluid my-5 rounded-circle" style="width: 100px; height: 100px;" />
              <h5 class=" row justify-content-center">
                <form action="<?= base_url('index.php/Profile/username/').$id; ?>" method="post" class="col-md-8">
                  <div class="form-floating">
                     <input type="text" class="form-control-plaintext text-white" id="floatingInput" name="username" value="<?= $username; ?>">
                  </div>
                </form>
              </h5>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col mb-1">
                    <h6>Email</h6>
                    <p class="text-muted"><?= $email; ?></p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1 justify-content-center">
                  <div class="col-12 mb-1">
                    <h6>Change Image Profile</h6>
                    <?= form_open_multipart('index.php/Profile/image/'.$id); ?>
                      <div class="col-sm-9">
                        <div class="mb-3">
                          <input class="form-control" name="img" type="file" id="formFile">
                        </div>
                        <button type="submit" class="badge bg-success">Change</button>
                      </div>
                    </form>
                  </div>
                </div>
                <hr class="mt-5 mb-3">
                <div class="d-flex justify-content-center me-0 row">
                  <a class="col-md-4 mt-1 ms-1 badge text-decoration-none bg-primary" href="<?= base_url('index.php/Auth/logout'); ?>">
                    <i class="fs-5 bi bi-box-arrow-left"></i>
                  </a>
                  <a href="<?= base_url('index.php/Home'); ?>" class="col-md-4 mt-1 ms-1 badge bg-success text-decoration-none">
                    <i class="fs-5 bi bi-house-fill"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="row text-bg-info ms-3 " style="width: 16rem;">
  <small class="col">*Jika ingin mengganti username, pastikan panjang username tidak lebih dari 10 karakter</small>
</section>