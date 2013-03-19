<?php
  require_once('../core/core.class.php');
  $cms = new Core();
  
  $cms->Logout();
  $cms->GotoUrl("home.php");
  exit;
?>
