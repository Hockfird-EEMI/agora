<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

require_once('model/site/profile.php');
$users = lire_users();

include_once('view/site/profile.php');