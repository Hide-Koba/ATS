<section class="content">
			<div class="row" style="width:1300px; margin:0 auto;">
			<div class="col-md-4">

	<div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <!--<img class="img-circle" src="<?=base_url();?>admin_css/dist/img/user7-128x128.jpg" alt="User Avatar">-->
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">
              	<?php echo $list->first_name.' '.$list->last_name;?> <br>
              </h3>
              
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Address <span class="pull-right badge bg-blue"><?php echo $list->Address; ?></span></a></li>
                <li><a href="#">Email <span class="pull-right badge bg-aqua"><?php echo $list->Email;?></span></a></li>
                <li><a href="#">Phone <span class="pull-right badge bg-green"><?php echo $list->Phone_Number;?></span></a></li>
              </ul>
            </div>
            <?php
            if (isset($job_data['id'])){  
			      ?>
            <div class="box-footer no-padding">
              <h4>This person applys through below job posting.</h4>
              <ul class="nav nav-stacked">
                <li><a href="#">Job ID <span class="pull-right badge bg-blue"><?=$job_data['id']?></span></a></li>
                <li><a href="#">Title <span class="pull-right badge bg-aqua"><?=$job_data['Post_Title']?></span></a></li>
                <li><a href="#">Description <span><?=$job_data['Post_Description']?></span></a></li>
                <li><a href="#">Wage <span class="pull-right badge bg-green">$<?=$job_data['wage_per_month']?></span></a></li>
                <li><a href="#">Place of work <span class="pull-right badge bg-green"><?=$job_data['place_of_work']?></span></a></li>
                <li><a href="#">Company name <span class="pull-right badge bg-green"><?=$job_data['company_name']?></span></a></li>
                <li><a href="#">Counter person <span class="pull-right badge bg-green"><?=$job_data['counter_person']?></span></a></li>
                <li><a href="#">Contact <span class="pull-right badge bg-green"><?=$job_data['email']?></span></a></li>
              </ul>
            </div>
              <?php
            }
            ?>
        </div>
    </div>
          </div>
         </section>
     </div>