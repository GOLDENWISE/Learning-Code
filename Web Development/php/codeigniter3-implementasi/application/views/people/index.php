<div class="container">
    <h3 class="mt-3">List Of People</h3>
    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $peoples as $people) : ?>
                    <tr>
                        <th><?= ++$start; ?></th>
                        <td><?= $people["Nama"];  ?></td>
                        <td><?= $people["Email"]; ?></td>
                        <td>
                            <a href="" class="badge text-bg-primary text-decoration-none">Detail</a>
                            <a href="" class="badge text-bg-success text-decoration-none">Update</a>
                            <a href="" class="badge text-bg-danger text-decoration-none">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!--tempat pagination diset oleh codeigniter-->
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>