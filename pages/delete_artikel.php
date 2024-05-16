<?php
  include '../config/connection.php';
	$id = $_GET['id'];
  $sql = $conn->query("delete from artikel where id='$id'");

  if ($sql) {
?>
    <script type="text/javascript">
      alert ("Data Berhasil di Hapus");
      window.location.href="../index.php";
    </script>

<?php
  } else {
?>
    <script type="text/javascript">
      alert ("Data gagal di Hapus");
      window.location.href="../index.php";
    </script>
<?php
  }
?>