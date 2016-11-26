<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->

	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<div class="row">
			<div class="col-lg-12">
				
				<h1 class="page-header"><?php echo $thread->subject?><small> by <a href="#"><?php echo $thread->first_name." ".$thread->last_name?></a> </small></h1>
				<ol class="breadcrumb">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="active">
						Blog Post
					</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->

		<!-- Content Row -->
		<div class="row">

			<!-- Blog Post Content Column -->
			<div class="col-lg-8">

				<!-- Blog Post -->

				<hr>

				<!-- Date/Time -->
				<p>
					<i class="fa fa-clock-o"></i> Posted on <?php echo $thread->created_on?>
				</p>

				<hr>

				<hr>

				<!-- Post Content -->
				<p class="lead">
					<?php echo $thread->post ?>
				</p>
				
				<hr>

				<!-- Blog Comments -->

				<!-- Comments Form -->
				<div class="well">
					<h4>Leave a Comment:</h4>
					<form role="form" action="<?php echo site_url('comment/save_comment')?>" method="post">
						<div class="form-group">
							<textarea name ="comment" class="form-control" rows="3"></textarea>
						</div>
						<input type="hidden" name="thread_id" value="<?php echo $thread_id?>" />
						<input type="submit" name="submit" value="Comment" class="btn btn-primary"/>
					</form>
				</div>

				<hr>
				 <?php if($this->session->flashdata('conf'))
                   {?>
                   	
					
					<div class="alert alert-info">
						  <strong> <?php  echo $this->session->flashdata('conf');?> </strong>
					</div>
                   	
				  <?php } ?>

				<!-- Posted Comments -->

				<!-- Comment -->
				<div class="media">
					<a class="pull-left" href="#"> <img class="media-object" src="http://placehold.it/64x64" alt=""> </a>
					<div class="media-body">
						<h4 class="media-heading">Start Bootstrap <small>August 25, 2014 at 9:30 PM</small></h4>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</div>

				<!-- Comment -->
				<div class="media">
					<a class="pull-left" href="#"> <img class="media-object" src="http://placehold.it/64x64" alt=""> </a>
					<div class="media-body">
						<h4 class="media-heading">Start Bootstrap <small>August 25, 2014 at 9:30 PM</small></h4>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						<!-- Nested Comment -->
						<div class="media">
							<a class="pull-left" href="#"> <img class="media-object" src="http://placehold.it/64x64" alt=""> </a>
							<div class="media-body">
								<h4 class="media-heading">Nested Start Bootstrap <small>August 25, 2014 at 9:30 PM</small></h4>
								Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							</div>
						</div>
						<!-- End Nested Comment -->
					</div>
				</div>

			</div>

			<!-- Blog Sidebar Widgets Column -->
			<div class="col-md-4">

				<!-- Blog Search Well -->
				<div class="well">
					<h4>Blog Search</h4>
					<div class="input-group">
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="fa fa-search"></i>
							</button> </span>
					</div>
					<!-- /.input-group -->
				</div>

				<!-- Blog Categories Well -->
				<div class="well">
					<h4>Blog Categories</h4>
					<div class="row">
						<div class="col-lg-6">
							<ul class="list-unstyled">
								<li>
									<a href="#">Category Name</a>
								</li>
								<li>
									<a href="#">Category Name</a>
								</li>
								<li>
									<a href="#">Category Name</a>
								</li>
								<li>
									<a href="#">Category Name</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-6">
							<ul class="list-unstyled">
								<li>
									<a href="#">Category Name</a>
								</li>
								<li>
									<a href="#">Category Name</a>
								</li>
								<li>
									<a href="#">Category Name</a>
								</li>
								<li>
									<a href="#">Category Name</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /.row -->
				</div>

				<!-- Side Widget Well -->
				<div class="well">
					<h4>Side Widget Well</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.
					</p>
				</div>

			</div>

		</div>
		<!-- /.row -->

		<hr>
