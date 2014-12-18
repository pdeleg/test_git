<html>
<head>
  <title>Chargement fichier</title>
</head>
<body>
<h1>Chargement fichiers...</h1>
<?
  // $userfile is where file went on webserver
  // $userfile_name is original file name
  // $userfile_size is size in bytes
  // $userfile_type is mime type e.g. image/gif

  echo "Fichier:<br>";

// rajout pde : traces du post, detail de FILES :
print_r($_FILES);
echo "<br><br>";
print_r($_FILES['userfile1']);
//foreach ($_FILES as $fic)	
/*	$userfile = $_POST['userfile1'];
  echo $userfile." ".$userfile['name']." ".$userfile['size']." ".$userfile['type']."<br>";

  echo $userfile." ".$userfile_name." ".$userfile_size." ".$userfile_type."<br>";


  if ($userfile=="none")
  {
    echo "Problème aucun fichier chargé";
    exit;
  }
  
  if ($userfile_size==0)
  {
    echo "Problème fichier chargé vide";
    exit;
  }
  $upfile = "Download/".$userfile_name;

   $old_max_execution_time = ini_set("max_execution_time", 120);
   echo "l'ancien timeout est $old_max_execution_time <br>";
   $max_execution_time = ini_get("max_execution_time");
   echo "le nouveau timeout est $max_execution_time <br>";

  if ( !copy($userfile, $upfile)) 
  {
    echo "Probleme: impossible de déplacer le fichier dans ce répertoire"; 
    exit;
  }
  echo "Fichier chargé avec succès.<br><br>"; 
*/
  /*
  $fp = fopen($upfile, "r");
  $contents = fread ($fp, filesize ($upfile));
  fclose ($fp);
 
  $contents = strip_tags($contents);
  $fp = fopen($upfile, "w");
  fwrite($fp, $contents);
  fclose($fp);

  echo "Preview of uploaded file contents:<br><hr>";
  echo $contents;
  echo "<br><hr>";
*/
?>
</body>
</html>
