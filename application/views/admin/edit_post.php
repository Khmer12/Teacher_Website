<div class="page-head">
                    <h1>Form Edit Post<small></small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li><a href="dashboard.php?p=home">Dashboard</a></li>
                        <li class="dashboard.php?p=all-user">Add Post</li>
                    </ol>
</div>

<div class="content">
      <div class="col-md-12">
            <div class="box">
                  <div class="box-title">
                      <h3>Form Edit Post</h3>
                   </div><?php 
										if($result){
											foreach($result as $row){
												$post_id = $row->post_id;
												$post_content = $row->post_content;
												$post_title = $row->post_title;
												$post_image = $row->post_image;
												$post_date = $row->post_date;
												//$user_id = $row->user_id;
												$cat_id = $row->cat_id;		
									?>
                   <div class="box-body">
							<form action="<?php echo site_url();?>/post/edit_post/<?php echo $post_id;?>" class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
									
									
									<div class="form-group">
										<label for="input-text" class="col-sm-1 control-label">Title</label>
										<div class="col-sm-11">
										<input type="text" class="form-control" value="<?php echo $post_title;?>" id="post_title" name="post_title">
										</div>
									</div>

									<div class="form-group">
										<label for="input-text" class="col-sm-1 control-label">Category</label>
										<div class="col-sm-11">
										<select name="cat_id" id="cat_id" class="form-control" >
											<option value="<?php echo $cat_id;?>" selected>Java</option>
										</select>
										</div>
									</div>
									
									<div class="form-group">
										<label for="input-text" class="col-sm-1 control-label">Content</label>
										<div class="col-sm-11">
										<textarea id="post_content" name="post_content" class="form-control"><?php echo $post_content;?></textarea>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-1 control-label">Date</label>
										<div class="col-sm-3">
											<input type="text" class="form-control datepicker-input" id="datepicker" name="post_date" value="<?php echo $post_date;?>">
										</div>
									</div>
									
									
									<div class="form-group">
										<label for="post_image" class="col-sm-1 control-label">Image</label>
										<div class="col-sm-11">
										<img style="width:200px;height:200px;" id="image" src="<?php echo base_url()."upload/".$post_image;?>"/> 
										<input type="hidden" id="post_hidden" name="post_hidden" value="<?php echo $post_image;?>"/>
										<input type="file" class="form-control" id="post_image" name="post_image" value="<?php echo $post_image;?>">
										</div>
									</div>

																		
									<div class="form-group">
										<label class="col-sm-2 control-label">
										<button type="submit" class="btn btn-primary">Save</button></label>										
									</div>									
					</form>
					<?php
											}
										}
					?>
              </div>
		</div>
	</div>              
 </div>
 <script>
 	$(function(){
 		var post_date = "<?php echo $post_date;?>";
	 	var post_image ="<?php echo $post_image;?>";
	 	$('#datepicker').val(post_date);
	 	//$('#datepicker').datepicker("setDate", new Date("<?php echo $post_date;?>") );
	 	//alert(post_date);
	 	//$('#post_image').val(post_image);
	 	$('#post_image').change(function(){
	 		$('#image').attr('display','none');
	 		//$('#image').attr('src',$(this).val());
	 	});
	 // 	var file = $('#post_image')[0].files[0]
		// if(file){
 	// 	alert(file.name);
}
 	});
 	
 </script>

