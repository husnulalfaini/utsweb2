<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rumah Gunung</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

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
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Barang</h6>
                                </div>
                                <div class="card-body">

                                    <form method="post" action="tambah_aksi.php">
                                        <div class="mb-3">
                                            <label for="kode_barang" class="form-label">Kode</label>
                                            <input type="text" class="form-control" name="kode_barang" id="kode_barang" aria-describedby="kodeHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_barang" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" aria-describedby="namaHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlah_barang" class="form-label">Jumlah</label>
                                            <input type="number" class="form-control" name="jumlah_barang" id="jumlah_barang" aria-describedby="jumlahHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="satuan_barang" class="form-label">Satuan</label>
                                            <select class="form-control" name="satuan_barang" id="satuan_barang">
                                                <option value="kg">Kg</option>
                                                <option value="pcs">Pcs</option>
                                                <option value="liter">Liter</option>
                                                <option value="meter">Meter</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="harga_beli" class="form-label">Harga</label>
                                            <input type="number" class="form-control" name="harga_beli" id="harga_beli" aria-describedby="hargaHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="status_barang" class="form-label">Status</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="status_barang" id="status_barang" value="1">
                                                <label class="form-check-label" for="status_barang">
                                                    Available
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                                    </form>

                                </div>
                            </div>
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
                        <span>Copyright &copy; Your Website 2024</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>
</body>

</html>
