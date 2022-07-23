<?= $this->extend('templates/index'); ?>

<?= $this->section('userContent'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">EDIT USER</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                    <li class="breadcrumb-item active">editUser</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-sm">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <!-- general form elements -->
                        <?php foreach ($updateUser as $update) : ?>
                            <form method="POST" action="/admin/update/<?= $update->user_id ?>">
                                <div class="container">
                                    <div class="row mb-2">
                                        <div class="col-1">
                                            UserID
                                        </div>
                                        <div class="col-0">
                                            :
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="user_id" value="<?= $update->user_id; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-1">
                                            Email
                                        </div>
                                        <div class="col-0">
                                            :
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control" name="email" value="<?= $update->email; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-1">
                                            Username
                                        </div>
                                        <div class="col-0">
                                            :
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="username" value="<?= $update->username; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-1">
                                            Status
                                        </div>
                                        <div class="col-0">
                                            :
                                        </div>
                                        <div class="col">
                                            <div class="control">
                                                <?php
                                                $status = $update->active;
                                                if ($status == 1) :
                                                ?>
                                                    <input type="radio" name="status" checked value="1"> Aktif
                                                    <input type="radio" name="status" value="0"> Tidak Aktif
                                                <?php
                                                else :
                                                ?>
                                                    <input type="radio" name="status" value="1"> Aktif
                                                    <input type="radio" name="status" checked value="0"> Tidak Aktif
                                                <?php
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-1">
                                            Role
                                        </div>
                                        <div class="col-0">
                                            :
                                        </div>
                                        <div class="col">
                                            <div class="control">
                                                <?php
                                                $role = $update->group_id;
                                                if ($role == 1) :
                                                ?>
                                                    <input type="radio" name="role" value="1" checked> Admin
                                                    <input type="radio" name="role" value="2"> User
                                                <?php
                                                else :
                                                ?>
                                                    <input type="radio" name="role" value="1"> Admin
                                                    <input type="radio" name="role" checked value="2"> User
                                                <?php
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-1">

                                        </div>
                                        <div class="col-0">

                                        </div>
                                        <div class="col-1">
                                            <button type="submit" class="btn btn-info btn-block">Ubah</button>
                                        </div>
                                        <div class="col-1">
                                            <a class="btn btn-secondary btn-block" href="/admin/">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>