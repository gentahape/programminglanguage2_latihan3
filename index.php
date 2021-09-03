<?php
include "controller/controller_pegawai.php";

$main = new controller();

if (isset($_GET['i'])) {
	$main->view_post();
} else if (isset($_GET['e'])) {
	$main->view_put($_GET['e']);
} else {
	$main->view_index();
}
