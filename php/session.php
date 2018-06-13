<?php
  $var=0;
  session_start();
  if (!isset($_SESSION['count'])) {
    $var=$_SESSION['count'] = 0;
  } else {
    $_SESSION['count']++;
  }

?>

<p>
<?php echo $_SESSION['count']; ?>
</p>