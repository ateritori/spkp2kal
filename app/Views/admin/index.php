<?= $this->extend('templates/index'); ?>

<?= $this->section('userContent'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">MANAGE USERS</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                    <li class="breadcrumb-item active">index</li>
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
                        <table id="tabelUsers" class="table table-hover">
                            <thead class="table-dark">
                                <td>UserID</td>
                                <td>Email</td>
                                <td>Username</td>
                                <td>Status</td>
                                <td>Role</td>
                                <td>Update At</td>
                                <td>Action</td>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($users as $user) :
                                ?>
                                    <tr>
                                        <td><?= $user->user_id; ?></td>
                                        <td><?= $user->email; ?></td>
                                        <td><?= $user->username; ?></td>
                                        <td><?php
                                            $active = $user->active;
                                            if ($active == 1) :
                                                $aktive = 'Aktif';
                                            else :
                                                $aktive = 'Tidak Aktif';
                                            endif;
                                            echo $aktive;
                                            ?></td>
                                        <td><?= $user->name; ?></td>
                                        <td><?= $user->updated_at; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="<?= base_url('admin/' . $user->user_id); ?>">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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