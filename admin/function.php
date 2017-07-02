<?php
 // set function backup
 function backup_db($table = '*') {
  $result = null;
  $tables = array();

  // check table yang akan di backup
  if ($table == '*') {
   $sql = 'SHOW TABLES';
   $rs = mysqli_query($link,$sql) or die ($sql);

   while ($row = mysqli_fetch_array($rs)) {
    $name = $row[0];

    array_push($row,$tables, $name);
   }
  } else {
   $tables = is_array($table) ? $table : explode(',', $table);
  }

  // loop table
  foreach ($tables as $table) {
   include 'config.php';
   // create table
   $sql = 'SHOW CREATE TABLE '.$table;
   $rs = mysqli_query($link,$sql);
   $row = mysqli_fetch_array($rs);
   $create_table = $row[1];

   // show data table
   $sql = 'SELECT * FROM '.$table;
   $rs = mysqli_query($link,$sql);

   // set field per table
   $fields = mysqli_num_fields($rs);

   // create comment table
   $result .= 'DROP TABLE '.$table.";\n";
   $result .= $create_table.";\n\n";

   // loop field per table
   for ($i=0; $i<$fields; $i++) {

    // loop data table
    while($row = mysqli_fetch_array($rs)) {
     $result .= 'INSERT INTO '.$table.' VALUES (';

     // loop value field per table
     for ($j=0; $j<$fields; $j++) {
      $row[$j] = addslashes($row[$j]);
      $row[$j] = preg_replace('/\n/i','\\n',$row[$j]);

      if (isset($row[$j])) {
       $result .= '"'.$row[$j].'"';
      } else {
       $result .= 'NULL';
      }

      $result .= $j < ($fields - 1) ? ', ' : '';
     }

     $result .= ");\n";
    }
   }
   $result .= "\n\n\n";
  }

  // simpan file sql
  $handle = fopen('./backup/'.'db-backup-'.time().'-'.md5(implode(',', $tables)).'.sql', 'w+');
  fwrite($handle, $result);
  fclose($handle);
 }
