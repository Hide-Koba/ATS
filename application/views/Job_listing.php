<script src=""></script>
<script>
function sort(){
  //alert('clicked');
  let search_type = $('#sorting_type').val();
  let keyword = $('#search_keyword').val();
  let order = $('#search_order').val();

  if (keyword===''){
    alert('Please input keyword.');
    return false;
  }
  let base_url = '<?=base_url()?>';
  //http://localhost/ats/?type=specialization&key=php&order=asc
  let query = '?type='+search_type+'&key='+keyword+'&order='+order;
  console.log(query);

  location.href=base_url+query;
  
}
</script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3 class="box-title text-red">Latest Jobs</h3>
      <div>
      <form>
      Search type: <select name="sorting_type" id="sorting_type">
        <option value="salary">salary</option>
        <option value="location">location</option>
        <option value="specialization">specialization</option></select>
        keyword: <input type="text" name="keyword" id="search_keyword" />
        Order: <select name="order" id="search_order"><option value="ASC">ASC</option><option value="DESC">DESC</option></select>
        <input type="button" onclick="sort()" value="Search" />
        </form>
      </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
      </ol>
    </section>

   <section class="content">
	<?php
  if (count($job_data)===0){
    ?>
    <div>
      <h1>No job registered in this search condition. Please try again.</h1>
    </div>
    <?php
  }else{
	foreach($job_data as $each){
	?>
   	<div class="box" style="width:700px;">
        <div class="box-header with-border">
          <h3 class="box-title"><a href="<?=base_url();?>Job_controller/Detail/<?=$each['id']?>"><?php echo $each['Post_Title']?></a></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<strong>location:</strong> </h2> <?php echo $each['place_of_work']?><br>
			<strong>wage:</strong> <?php echo $each['wage_per_month']?><br>
			<?php echo $each['short_description']?> 
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
		<?php
      }
    }
		?>
		</section>
    <div>
    <a href="<?=base_url();?>uploads/final-release.apk" target="_blank"><img width="50px" src="<?=base_url();?>admin_css/playstore_icon.png" />Download Android App from here</a>
    </div>
	</div>
  

</body>
</html>