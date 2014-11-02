<div class="page-head">
                    <h1>All Posts  <small></small></h1>
                    <ol class="breadcrumb">
						<li>You are here:</li>
                        <li><a href="dashboard.php?p=home">Dashboard</a></li>
                        <li class="dashboard.php?p=all-user">All Posts</li>
                    </ol>
</div>

<div class="content">
             <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-title">
                                    <h3>Table Posts</h3>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                     <table class="table table-hover table-striped">
									  <thead>
										  <tr>
										  	  <th>ID</th>
											  <th>Title</th>
											  <th>Category</th>
											  <th>User</th>
											  <th>Content</th>
											  <th>Date</th>
											  <th>Image</th>
											  <th>Actions</th>
										  </tr>
									  </thead>   
									  <tbody>
										<tr>
											<?php foreach($result as $row){?>
												<td><?php echo html_escape($row->post_id);?></td>
												<td><?php echo html_escape($row->post_title);?></td>
												<td><?php echo html_escape($row->cat_id);?></td>
												<td><?php echo html_escape($row->user_id);?></td>
												<td style="width:300px;"><?php echo html_escape($row->post_content);?></td>
												<td><?php echo html_escape($row->post_date);?></td>
												<td >									
													<img style="width:50px; height:50px" src="<?php echo base_url();?>upload/<?php echo $row->post_image;?>"/>
												</td>
											<td>
												<a class="btn btn-success btn-sm" href="table.php#">
													<i class="fa fa-search-plus "></i>  
												</a>
												<a class="btn btn-info btn-sm" href="edit_post/<?php echo $row->post_id;?>">
													<i class="fa fa-edit "></i>  
												</a>
												<a class="btn btn-danger btn-sm" href="table.php#">
													<i class="fa fa-trash-o "></i> 
												</a>
											</td>
										</tr>
										<?php
											}
										?>

									  </tbody>
                                <!-- /.box-body -->
                            <!-- /.box -->
                        
                    
            
        <!-- /.wrapper -->
		
		
        <!-- Javascript -->
        <script src="js/plugins/jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jquery-ui/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
		
		<!-- Bootstrap -->
        <script src="js/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>
		
		<!-- Interface -->
        <script src="js/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="js/plugins/pace/pace.min.js" type="text/javascript"></script>
		
		<!-- Forms -->
       <script src="js/custom.js" type="text/javascript"></script>
    
		</table>
		<div class="row">
						<div class="col-md-4">
							<div class="dataTables_info" id="example2_info">Showing 1 to 10
								of 57 entries</div>
						</div>
						<div class="col-md-8">
							<div class="dataTables_paginate paging_bootstrap">
								<ul class="pagination">
									<li class="prev disabled"><a href="#">Previous</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">6</a></li>
									<li><a href="#">7</a></li>
									<li class="next"><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
		</div></div></div></div>       
</div>