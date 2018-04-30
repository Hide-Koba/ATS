<section class="content">
			<div class="row" style="width:1300px; margin:0 auto;">
			<div class="col-md-4">

	<div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
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
        </div>
    </div>
          </div>
         </section>
     </div>