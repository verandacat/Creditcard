<?php
  $redirect[1] = "https://re-roots.net/link.php?i=pgn7whvhbmzv&m=mglyzkhr1q9g"; 



  if( isset($_GET['id']) ){
    $id = intval($_GET['id']);
    header("Location:$redirect[$id]");
  }
?>
