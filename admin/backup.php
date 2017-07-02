<?php
//  require_once __DIR__.'/header.php';
  require_once __DIR__.'/config.php';
  require_once __DIR__.'/function.php';

  session_start();
  if((!empty($_SESSION['admin_email'])))
    {
?>
<head>
<fieldset>
<legend><h1>Backup Data</h1></legend>

<?php
 // show table dari database
 $sql = 'SHOW TABLES';
 $rs = mysqli_query($link,$sql) or die ($sql);

 if (isset($_POST['backup'])) {
  backup_db($_POST['table']);
  echo "<center>Berhasil Backup Database, silahkan di cek.</center>";
 }
?>

<script type="text/javascript">
 window.onload = function() {
  _('all-table', 'id').addEventListener('click', function(e) {
   var checked = _('all-table', 'id').checked,
   tables = _('table', 'class');

   for(var i=0; i<tables.length; i++) {
    if (checked) {
     tables[i].checked = true;
    } else {
     tables[i].checked = false;
    }
   }
  });
 }

 function _(element, type) {
  var e = type == 'id' ? document.getElementById(element) : document.getElementsByClassName(element);
  return e;
 }
</script>
</head>
<body style="font-style: Verdana; font-size: 14px">
<form method="POST">
<h3>LIST TABLE</h3>

 <hr/>
  <label>
    <input type="checkbox" id="all-table" /> <b>Semua table</b>
  </label><br>
    <?php 
      while ($row = mysqli_fetch_array($rs))
      {
    ?>
  <label>
    <input type="checkbox" name="table[]" class="table" value="<?php echo $row[0]; ?>" /> 
      <?php echo $row[0]; ?>
    </label><br>
    <?php 
      }
    ?>
  <hr/>

<button type="submit" name="backup">BACKUP DATABASE</button>
<p>* pilih table yang akan anda backup</p>
</form>
</body>

<?php
 include 'footer.php';
}else
  header("location:index.php");
?>
