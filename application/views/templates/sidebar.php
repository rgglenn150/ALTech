<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/images/download.png') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user->first_name . ' ' . $user->last_name ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $user->type . ' Account' ?></a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- Dashboard link -->
        <li>
                <a href="<?php echo site_url('dashboard') ?>">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
        </li>

        <li class="active treeview">
                <a href="">
                  <i class="fa fa-user"></i> <span>Profile</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Edit profile</a></li>
                  <li><a href="supplier-profile.php"><i class="fa fa-circle-o"></i> View Profile</a></li>
                </ul>
        </li>
        
        <?php if(strcasecmp($user->type,'supplier')==0){ ?>
        <li>
              <a href="supplier-tools.php">
                <i class="fa fa-cubes"></i> <span>Production Tools</span>
              </a>
        </li>
        <!-- Dashboard link -->
        <li>
                <a href="supplier-trade.php">
                  <i class="fa fa-exchange-alt"></i> <span>Trade In</span>
                </a>
        </li>

        <?php } ?>

        <?php if(strcasecmp($user->type,'business')==0){ ?>
        <li>
              <a href="supplier-tools.php">
                <i class="fa fa-circle-o"></i> <span>Products</span>
              </a>
        </li>
        <!-- Dashboard link -->
        <li>
                <a href="supplier-trade.php">
                  <i class="fa fa-circle-o  "></i> <span>Supply</span>
                </a>
        </li>

         <li>
                <a href="supplier-trade.php">
                  <i class="fa fa-upload"></i> <span>Top Up</span>
                </a>
        </li>

        <?php } ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
