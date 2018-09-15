<?php $this->load->view('templates/landing_top')?>

  <!-- Footer -->
  <section class="py-5" style = "background:#16a085;">
    <div class="container">
      <h2 class="m-0 text-center text-white">Create an account</h2>
    </div>
    <!-- /.container -->
  </section>

  <!-- Page Content -->
  <div class="container">
    <div class="row" style = "margin-top:30px;">
        <div class="col-sm-4">
            <div class="tile pt-inner">
                <div class="pti-header bg-amber">
                    <h2>$25 <small>| mo</small></h2>
                    <div class="ptih-title">Consumer</div>
                </div>

                <div class="pti-body">
                    <div class="ptib-item">
                        Pellentesque habitant morbi tristique senectus et netusmalesuada fames ac turpis egestas.  imperdiet tristique.
                    </div>
                    <div class="ptib-item">
                        In dapibus ipsum sit amet leo
                    </div>
                    <div class="ptib-item">
                        Vestibulum ut mauris tellus. Donec
                    </div>
                    <div class="ptib-item">
                        Purna lectus venenatis felis, nonsemper
                    </div>
                    <div class="ptib-item">
                        Aliquam erat volutpat hasellus ultri
                    </div>
                </div>

                <div class="pti-footer">
                
                    <a href="<?php echo site_url("register/consumer"); ?>" class="bg-amber"><button class='btn-lg btn-warning'>Register Consumer Account</button><i class="fa fa-check"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="tile pt-inner">
                <div class="pti-header bg-green">
                    <h2>$65 <small>| mo</small></h2>
                    <div class="ptih-title">Supplier</div>
                </div>

                <div class="pti-body">
                    <div class="ptib-item">
                        Nullam diam dolor, sollicitudin vitae magna ut, pharetra tempor velit. Donec quis egestas nisl, id porta mi. Phasellus eleifend facilisis
                    </div>
                    <div class="ptib-item">
                        Ina enim liberosed whens
                    </div>
                    <div class="ptib-item">
                        Sipsum maunich lendilwer
                    </div>
                    <div class="ptib-item">
                        Dacider mengthu ferine looking seth
                    </div>
                    <div class="ptib-item">
                        Sinnab wanliset wareder thenli
                    </div>
                </div>

                <div class="pti-footer">
                
                    <a href="<?php echo site_url('register/supplier') ?>" class="bg-green"><button class='btn-lg btn-success'>Register Supplier Account</button><i class="fa fa-check"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="tile pt-inner">
                <div class="pti-header bg-cyan">
                    <h2>$660 <small>| mo</small></h2>
                    <div class="ptih-title">Business</div>
                </div>

                <div class="pti-body">
                    <div class="ptib-item">
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris iaculis laoreet mattis piuminer lasethol and envy
                    </div>
                    <div class="ptib-item">
                        Maricial wendys boraoand denish
                    </div>
                    <div class="ptib-item">
                        Manchil vallao whengoo
                    </div>
                    <div class="ptib-item">
                        Shaeel ipsum leeshan
                    </div>
                    <div class="ptib-item">
                        Hasellus ultrices tincidunt
                    </div>
                </div>

                <div class="pti-footer">
                    
                    <a href="<?php echo site_url('register/business') ?>" class="bg-cyan"><button class='btn-lg btn-primary'>Register Business Account</button><i class="fa fa-check"></i></a>
                </div>
                <br>
                <div></div>
            </div>
        </div>
	</div>
  </div>
  <!-- /.container -->

  <?php $this->load->view('templates/landing_bot');?>