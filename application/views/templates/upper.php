<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php  $this->load->view('templates/header'); ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
<?php  $this->load->view('templates/nav',$user); ?>
<?php  $this->load->view('templates/sidebar',$user); ?>