<?php 
require_once('_cms.php');

//print($_GET['page']);
include($DCR_MAP[$_GET['page']]['template']);
