<?php
session_start();
unset($_SESSION['SignIn']);
header('Location: Pet.php');