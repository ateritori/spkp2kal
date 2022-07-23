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
                                <?php foreach ($users as $user) : ?>
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
                                            <form method="POST" action="/admin/edit/<?= $user->user_id ?>" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </button>
                                            </form>
                                            <form method="POST" action="/admin/delete/<?= $user->user_id ?>" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="user_id" value="<?= $user->user_id ?>">
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                </button>
                                            </form>
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