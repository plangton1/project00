<?php 
      include 'conn.php' ;
      $sql3 = "SELECT COUNT(product_name) as all_product  FROM product";
      $queryinsert = mysqli_query($connect , $sql3);
      $show = mysqli_fetch_assoc($queryinsert);
      ?>
<div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>
                  </h1>
                  <h6 class="text-white">เพิ่มข้อมูลสินค้า</h6>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-blur-linear"></i>
                  </h1>
                  <a href="?page=stock" class="text-white">อัพเดตสต็อก</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-border-outside"></i>
                  </h1>
                  <h6><a href="?page=type" class="text-white">จัดการประเภทสินค้า</a></h6>
                </div>
              </div>
            </div>

<!--             
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-chart-bubble"></i>
                  </h1>
                  <a href="MyReport.pdf" class="text-white">พิมพ์รายงาน</a>
                </div>
              </div>
            </div> -->

        

            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-receipt"></i>
                  </h1>
                  <h6 class="text-white">รายการสินค้าทั้งหมด <?= $show['all_product'] ; ?></h6>
                </div>
              </div>
            </div>


            

            
          </div>