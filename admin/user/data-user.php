<?php 
  require '../../conection.php';

  $DataUser = query("SELECT * FROM users");
  
  if(isset($_GET['id'])) {
    $id = $_GET["id"];

    $queryMb = "DELETE FROM users WHERE id_user = $id";
    hapus($queryMb);
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
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet" />
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
                <div class="sidebar-brand-text mx-3">JB mobil</div>
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
                                <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg" />
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
                    <h4>Data Users</h4>
                    <br />
                    <?php if(isset($_GET['success'])){?>
                    <div class="alert alert-success">
                        <p>Tambah Data Berhasil !</p>
                    </div>
                    <?php }?>
                    <?php if(isset($_GET['success-edit'])){?>
                    <div class="alert alert-success">
                        <p>Update Data Berhasil !</p>
                    </div>
                    <?php }?>
                    <?php if(isset($_GET['id'])){?>
                    <div class="alert alert-danger">
                        <p>Hapus Data Berhasil !</p>
                    </div>
                    <?php }?>

                    <table>
                        <tr>
                            <td><button id="tombol-simpan" class="btn btn-primary"
                                    onclick="document.location='/webJualBeli_Mobil/admin/tambah.php?kategori=user'"><i
                                        class="fa fa-plus"></i>
                                    Insert Data</button></td>
                        </tr>
                    </table>
                    <br />
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm" id="example1">
                                <thead>
                                    <tr style="background:#DFF0D8;color:#333;">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>role</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1 ?>
                                    <?php foreach ($DataUser as $row) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $row["nama_user"] ?></td>
                                        <td><?= $row["tgl_lahir"] ?></td>
                                        <td><?= $row["username"] ?></td>
                                        <td><?= $row["email"] ?></td>
                                        <td><?= $row["role"] ?></td>
                                        <td>
                                            <a href="#">
                                                <button class="btn btn-warning" type="button"
                                                    onclick="document.location='/webJualBeli_Mobil/admin/edit.php?edit=<?= $row['id_user']?>&Kedit=user'">
                                                    Edit
                                                </button>
                                            </a>
                                            <a href="?id=<?= $row["id_user"]; ?>"
                                                onclick="javascript:return confirm('Hapus Data Kategori ?');">
                                                <button class=" btn btn-danger">
                                                    Hapus
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>
</body>

</html>