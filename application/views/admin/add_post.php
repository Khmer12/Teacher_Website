<div class="page-head">
                    <h1>Form posts<small></small></h1>
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
                      <h3>Form Posts</h3>
                   </div>
                   <div class="box-body">
							<form action="<?php echo site_url();?>/post/add_new_post" class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
									
									<!-- Text input -->
									<div class="form-group">
										<label for="input-text" class="col-sm-1 control-label">Title</label>
										<div class="col-sm-11">
										<input type="text" class="form-control" id="post_title" name="post_title">
										</div>
									</div>

									<div class="form-group">
										<label for="input-text" class="col-sm-1 control-label">Category</label>
										<div class="col-sm-11">
										<select name="cat_id" id="cat_id" class="form-control">
											<option value="1">Java</option>
										</select>
										</div>
									</div>
									
									<div class="form-group">
										<label for="input-text" class="col-sm-1 control-label">Content</label>
										<div class="col-sm-11">
										<textarea id="post_content" name="post_content" class="form-control"></textarea>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-1 control-label">Date</label>
										<div class="col-sm-3">
											<input type="text" class="form-control datepicker-input" id="datepicker" name="post_date">
										</div>
									</div>
									
									
									<div class="form-group">
										<label for="inputPassword" class="col-sm-1 control-label">Image</label>
										<div class="col-sm-11">
										<input type="file" class="form-control" id="post_image" name="post_image">
										</div>
									</div>
																		
									<div class="form-group">
										<label class="col-sm-2 control-label">
										<button type="submit" class="btn btn-primary">Post</button></label>										
									</div>									
					</form>
              </div>
		</div>
	</div>              
 </div>

