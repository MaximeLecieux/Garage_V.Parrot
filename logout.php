<?php
require 'App/lib/session.php';

session_destroy();
unset($_SESSION);

header('location: connexion.php');