
<?php $this->load->view("templates/extra_top.php"); ?>


<!-- Page Content -->
  <div class="container">

    <div class="row" style = "margin-top:30px;">

      <div class="col-lg-3">
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="Search Items">
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">Cosmetics</a>
          <a href="#" class="list-group-item">Food Additives</a>
          <a href="#" class="list-group-item">Abrasives</a>
          <a href="#" class="list-group-item">Nutrinional Supplements</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">

            <?php 
            
            foreach($products as $product){
                ?>

                
          <!-- Market Item -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="<?php echo $product->prod_id; ?>"><img class="card-img-top" src="<?php echo base_url($product->image_url); ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo $product->prod_id; ?>"><?php echo $product->prod_name; ?></a>
                </h4>
                <h5>$<?php echo $product->prod_price; ?></h5>
                <p class="card-text"><?php echo $product->prod_description; ?></p>
              </div>
            </div>
          </div><!-- Market Item -->

            <?php
            }
            ?>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <div style="height:149px;"></div>

<?php $this->load->view("templates/extra_bot.php"); ?>