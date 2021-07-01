<?php
session_start();
unset($_SESSION['useruid']);

header('Location: /index.php');
exit;