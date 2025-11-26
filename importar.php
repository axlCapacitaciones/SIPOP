<?php
include "conexion.php";


if ( isset( $_FILES['userfile'] ) )
{
  $csv_file = $_FILES['userfile']['tmp_name'];

  if ( ! is_file( $csv_file ) )
    exit('Archivo Invalido.');


  if (($handle = fopen( $csv_file, "r")) !== FALSE)
  {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
      {
            
      $sql = "INSERT INTO tbl_productos VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";
      $result = $db->query($sql);   

      header('Location: index.html');
      }
      fclose($handle);
  }

  // Insert into database

  //exit( $sql );
  exit( "Complete!" );
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>CSV to MySQL Via PHP</title>
</head>
<body>
  <form enctype="multipart/form-data" method="POST">
    <input name="userfile" type="file">
    <input type="submit" value="Upload">
  </form>
</body>
</html>