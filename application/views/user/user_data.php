<section class="content-header">
      <h1>
       Users
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box-header">
                <h3 class="boc-title">Data Users</h3>
                <!-- Button Tambah User -->
                <div class="pull-right">
                    <a href="<?= site_url('user/add')?>" class="btn btn-primary btn-flat" >
                        <i class="fa fa-user-plus">Tambah User</i>
                    </a>
                </div>
            </div>
            <!-- Kita arahkan kemana?? ke /tambah -->
            <div class="box-body table-responsive">  <!-- Tambahkan kelas table responsive, kl misalkan dia dibuka dimobile dan kebetulan datanya lebih maka entar scroll otomatis  -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Level</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                         <!-- looping pake foreach -->
                         <?php $no = 1;
                         foreach($row->result() as $key => $data ) { ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data->username?></td>  <!-- nama filednya harus sama -->
                            <td><?=$data->name?></td>
                            <td><?=$data->address?></td>
                            <td><?=$data->level == 1? "SuperAdmin" : "Admin"?></td> <!-- Jika data levelnya 1 maka dia tampil SuperAdmin atau sebaliknya -->
                            
                            <td class="text-center" width="160px">
                            <!-- Button edit -->
                            <a href="<?= site_url('user/edit')?>" class="btn btn-primary btn-xs" >
                            <i class="fa fa-pencil">Edit</i>
                            </a>
                            <!-- Button hapus -->
                            <a href="<?= site_url('user/hapus')?>" class="btn btn-danger btn-xs" >
                            <i class="fa fa-trash">Hapus</i>
                            </a>
                            </td>
                                </tr>
                                    <?php
                                } ?>

                    </tbody>
                </table>
            </div>
     </div>
        </section>