<?php
  include 'config/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Article | Hadi Prasetiyo</title>
  <link rel="shortcut icon" href="img/article.png" type="image/x-icon">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-newspaper"></i>
          </div>
          <div class="sidebar-brand-text mx-3">7DS<br>Article</div>
        </a>
          <hr class="sidebar-divider my-0">
            <hr class="sidebar-divider">
              <div class="sidebar-heading">
                  Interface
              </div>
              <li class="nav-item active">
                <a class="nav-link" href="tables.html"><i class="fas fa-fw fa-table"></i><span>Tables</span></a>
              </li>
          <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                      <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hadi Prasetiyo</span>
                          <img class="img-profile rounded-circle" src="img/hadiiyok.jpg">
                        </a>
                      </li>
                  </ul>
                </nav>

                <div class="container-fluid">
                  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                  <h1 class="h3 mb-2 text-gray-800"></h1>
                  <div class="card shadow mb-4">
                      <div class="px-3 pt-3 d-flex justify-content-between align-items-center">
                          <h6 class="m-0 font-weight-bold text-primary">Data Article</h6>
                          <a href="pages/add_artikel.php" class="btn btn-success" style="margin-right: 5px;">Create</a>   
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>File</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                $no=1;
                                $sql=$conn->query("select * from artikel");
                                while($data=$sql->fetch_assoc()){
                              ?>
                              <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $data['title']?></td>
                                <td><img style="width: 100px; height: 100px;" src="public/<?php echo $data['file']?>" alt=""></td>
                                <td><?php echo $data['date']?></td>
                                <td><?php echo $data['kategori']?></td>
                                <td>
                                  <a href="pages/detail_artikel.php?id=<?php echo $data['id'];?>" class="btn btn-info">Read</a>
                                  <a href="pages/edit_artikel.php?id=<?php echo $data['id'];?>" class="btn btn-warning">Update</a>
                                  <a onclick ="return confirm ('Anda Yakin akan Menghapus Data Ini?')" href="pages/delete_artikel.php?id=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a>
                                </td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; hadiiyok 2024</span>
                </div>
              </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>
</body>
</html>