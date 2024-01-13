<?php
  require '../conection.php';

  $id = $_GET['edit'];

 if($_GET['Kedit'] == "mobil") {
    $DataMobil = query("SELECT * FROM mobil WHERE id_mobil = $id");

 } else if($_GET['Kedit'] == "user") {
    $DataUsers = query("SELECT * FROM users WHERE id_user = $id")[0];

 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>JB_MOBIL</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">JB_MOBIL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="document.location='/webJualBeli_Mobil/index.php'">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Akses Data</span>

                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#"
                            onclick="document.location='/webJualBeli_Mobil/admin/mobil/data-mobil.php'">Data Mobil</a>
                        <a class="collapse-item" href="#"
                            onclick="document.location='/webJualBeli_Mobil/admin/user/data-user.php'">Data User</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- fungsi edit Mobil -->
                    <?php if(isset($_POST['users'])){?>
                    <?php if(editUsr($_POST) > 0) { ?>
                    <div class="alert alert-success">
                        <p>Edit Data Berhasil !</p>
                    </div>
                    <?php } else { ?>
                    <div class="alert alert-danger">
                        <p>Edit Data Gagal !</p>
                    </div>
                    <?php } ?>
                    <?php }?>

                    <?php if(isset($_POST['edit'])){?>
                    <?php if(edit($_POST) > 0) { ?>
                    <div class="alert alert-success">
                        <p>Edit Data Berhasil !</p>
                    </div>
                    <?php } else if(edit($_POST) == 0){ ?>
                    <div class="alert alert-danger">
                        <p>Edit Data Gagal !</p>
                    </div>
                    <?php } else {?>

                    <?php } ?>
                    <?php }?>

                    <!-- fungsi tambah user -->
                    <?php if($_GET['Kedit'] == "mobil") { ?>
                    <h4>Edit Data Mobil</h4>

                    <form action="#" method="POST">
                        <input type="hidden" name="id_mobil" value="<?= $DataMobil[0]["id_mobil"] ?>">
                        <div class="modal-body">
                            <table class="table table-striped bordered">
                                <tr>
                                    <td>Nama Mobil</td>
                                    <td><input type="text" placeholder="Nama Barang" required class="form-control"
                                            name="nama_mobil" value="<?= $DataMobil[0]["nama_mobil"]; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Merek Mobil</td>
                                    <td><input type="text" placeholder="Merk Barang" required class="form-control"
                                            name="merek_mobil" value="<?= $DataMobil[0]["merek_mobil"] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Harga Mobil</td>
                                    <td><input type="number" placeholder="Harga Mobil" required class="form-control"
                                            name="harga_mobil" value="<?= $DataMobil[0]["harga_mobil"] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Kategori Mobil</td>
                                    <td><input type="text" placeholder="Harga Jual" required class="form-control"
                                            name="kategori_mobil" value="<?= $DataMobil[0]["kategori_mobil"] ?>"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    <?php } else if($_GET['Kedit'] === "user") {?>
                    <!-- fungsi tambah mobil -->

                    <h4>Edit Data User</h4>

                    <form action="" method="POST">
                        <input type="hidden" name="id_user" value="<?= $DataUsers["id_user"] ?>">
                        <div class="modal-body">
                            <table class="table table-striped bordered">
                                <tr>
                                    <td>Nama User</td>
                                    <td>
                                        <input type="text" placeholder="Nama User" required class="form-control"
                                            name="nama_user" value="<?= $DataUsers['nama_user']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir User</td>
                                    <td>
                                        <input type="date" required class="form-control" name="tgl_lahir"
                                            value="<?= $DataUsers['tgl_lahir']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>
                                        <input type="text" placeholder="Username" required class="form-control"
                                            name="username" value="<?= $DataUsers['username']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>
                                        <input type="password" placeholder="Password" required class="form-control"
                                            name="password" value="<?= $DataUsers['password']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email User</td>
                                    <td>
                                        <input type="email" placeholder="Email User" required class="form-control"
                                            name="email" value="<?= $DataUsers['email']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Role User</td>
                                    <td>
                                        <input type="text" placeholder="Role user" required class="form-control"
                                            name="role" value="<?= $DataUsers['role']; ?>">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="users">Save changes</button>
                        </div>
                    </form>
                    <?php } ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; | JB_MOBIL</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancel
                    </button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
</body>

</html>