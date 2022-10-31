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
                <h3 class="boc-title">Tambah USer</h3>
                
                <div class="pull-right">
                    <a href="<?= site_url('user')?>" class="btn btn-warning btn-flat" >
                        <i class="fa fa-user-plus">Tambah User</i>
                    </a>
                </div>
            </div>

            <div class="box-body">  
                <div class="row">
                    <div class="col-md-4">
                    <?php echo validation_errors(); ?>
                        <form action="" method="post">
                            <div class=""form-group>
                                <label>Name *</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>
                            <div class=""form-group>
                                <label>Username *</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class=""form-group>
                                <label>Password *</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class=""form-group>
                                <label>Password Confirmation *</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class=""form-group>
                                <label>Address *</label>
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                            <div class=""form-group>
                                <label>Level *</label>
                                <select name="level" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option value="1">SuperAdmin</option>
                                    <option value="2">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i>Simpan</button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
     </div>
        </section>