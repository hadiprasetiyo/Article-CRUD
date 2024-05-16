<?php
  include '../config/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card" style="margin-top: 115px; margin-left: 120px; margin-right: 120px; padding-left: 40px; padding-right: 40px">
        <div class="card-body">
          <div class="row clearfix">
            <h2>Create</h2>
            <div class="body mb-3">
              <form method="POST" enctype="multipart/form-data">
                <div class="d-flex flex-column gap-3 mb-3">
                  <label for="">Title</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="title" class="form-control" />
                    </div>
                  </div>
                  <label for="">File</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="file" name="file" class="form-control" />
                    </div>
                  </div>

                  <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $show_date=date("Y-m-d H:i:s");
                  ?>

                  <label for="">Date</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="date" class="form-control" value="<?php echo $show_date?>" disabled />
                    </div>
                  </div>

                  <label for="">Category</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="kategori"class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="../index.php" class="btn btn-secondary" style="margin-left: 378px;">Back</a> 
                    <input type="submit" name="simpan" value="Save" class="btn btn-primary" style="margin-right: 1px;">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php 
if (isset($_POST['simpan'])){
  date_default_timezone_set('Asia/Jakarta');
  $date=date("Y-m-d H:i:s");
  $title=$_POST['title'];
  $foto=$_FILES['file']['name'];
  $lokasi=$_FILES['file']['tmp_name'];
  $upload=move_uploaded_file($lokasi, "../public/".$foto);
  $kategori=$_POST['kategori'];

  if ($upload){
      $sql=$conn->query("insert into artikel (title,file,date,kategori) values('$title','$foto','$date','$kategori')");
    if ($sql){
      ?>
      <script type="text/javascript">
        alert ("Data Berhasil di Simpan");
        window.location.href="../index.php";
      </script>
      <?php
    }
  }
}
?>