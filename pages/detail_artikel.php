<?php
  include '../config/connection.php';
  $id = $_GET['id'];
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Article Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <?php
          $no=1;
          $sql=$conn->query("SELECT * FROM artikel WHERE id='$id'");
          while($data=$sql->fetch_assoc()) {
        ?>
          <div class="card" style="margin-top: 100px; margin-left: 120px; margin-right: 120px; padding-left: 40px; padding-right: 40px">
            <div class="card-body">
              <h1 class="card-title text-center"><?php echo $data['title']?></h1>
              <img class="card-img-top rounded mx-auto d-block" style="width: 250px; height: 250px;" src="../public/<?php echo $data['file']?>" alt="Article Image">
              <p class="card-text text-center fst-italic text-muted"><?php echo $data['date']?></p>
              <p class="fw-bold text-center border border-dark rounded p-2" style="margin-left: 130px; margin-right: 130px;"><?php echo $data['kategori']?></p>
              <a href="../index.php" class="btn btn-secondary" style="margin-left: 445px;">Back</a> 
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>