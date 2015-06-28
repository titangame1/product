<html>
	<head>
	<meta charset="utf-8">
	<title>Select Bootstraps</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="asset/bootstrap/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="asset/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Bootstrap theme</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Home</a></li>
	            <li><a href="#about">About</a></li>
	            <li><a href="#contact">Contact</a></li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li role="separator" class="divider"></li>
	                <li class="dropdown-header">Nav header</li>
	                <li><a href="#">Separated link</a></li>
	                <li><a href="#">One more separated link</a></li>
	              </ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
		</nav>
		<div class="container">
			<div class="jumbotron">
	        <h1>Theme example</h1>
	        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
	      </div>
				</div>
				<div class="row">

		        <div class="col-sm-8 blog-main">

		          <div class="blog-post">
		            <h2 class="blog-post-title">Sample blog post</h2>
		            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

								<?php
								include('class/mysql_crud.php');
								$db = new Database();
								$db->connect();
								//public function select($table, $rows = '*', $join = null, $where = null,
								//$order = null, $limit = null){
								$db->select('products'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
								$res = $db->getResult();
								//echo "<pre>";
								//print_r($res);
								?>
								<a href="frm_insert.php" class="btn btn-Warning btn-lg active" role="button"><span class="glyphicon glyphicon-plus">&nbsp;Insert</span></a>
								<table class="table table-hover">
											<tr>
												<td><strong><center>Pro_id</center></strong></td>
												<td><strong><center>Vend_id</center></strong></td>
												<td><strong><center>Prod_name</center></strong></td>
												<td><strong><center>Prod_price</center></strong></td>
												<td><strong><center>Prod_desc</center></strong></td>
												<td><strong><center>EDIT</center></strong></td>
												<td><strong><center>DELETE</center></strong></td>
											</tr>

								<?php

								foreach($res as $key => $value){?>
										<tr>
											<td><?=$value['prod_id']?></td>
											<td><?=$value['vend_id']?></td>
											<td><?=$value['prod_name']?></td>
											<td><?=$value['prod_price']?></td>
											<td><?=$value['prod_desc']?></td>
											<td><a href="frm_edit.php?prod_id=<?=$value['prod_id']?>" class="btn btn-info btn-lg active" role="button"><span class="glyphicon glyphicon-th-list">&nbsp;EDIT</span></center></a></td>
											<td><a href="delete.php?prod_id=<?=$value['prod_id']?>" class="btn btn-danger btn-lg active" role="button"><span class="glyphicon glyphicon-trash">&nbsp;DELETE</span></center></a></td>
										</tr>


										<?php
								}
								?>
								</table>

		            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
		            <hr>
		            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
		            <blockquote>
		              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            </blockquote>
		            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		            <h2>Heading</h2>
		            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
		            <h3>Sub-heading</h3>
		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		            <pre><code>Example code block</code></pre>
		            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
		            <h3>Sub-heading</h3>
		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		            <ul>
		              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
		              <li>Donec id elit non mi porta gravida at eget metus.</li>
		              <li>Nulla vitae elit libero, a pharetra augue.</li>
		            </ul>
		            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
		            <ol>
		              <li>Vestibulum id ligula porta felis euismod semper.</li>
		              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
		              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
		            </ol>
		            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
		          </div><!-- /.blog-post -->

		          <div class="blog-post">
		            <h2 class="blog-post-title">Another blog post</h2>
		            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

		            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
		            <blockquote>
		              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            </blockquote>
		            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
		          </div><!-- /.blog-post -->

		          <div class="blog-post">
		            <h2 class="blog-post-title">New feature</h2>
		            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		            <ul>
		              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
		              <li>Donec id elit non mi porta gravida at eget metus.</li>
		              <li>Nulla vitae elit libero, a pharetra augue.</li>
		            </ul>
		            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
		          </div><!-- /.blog-post -->

		          <nav>
		            <ul class="pager">
		              <li><a href="#">Previous</a></li>
		              <li><a href="#">Next</a></li>
		            </ul>
		          </nav>

		        </div><!-- /.blog-main -->

		        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
		          <div class="sidebar-module sidebar-module-inset">
		            <h4>About</h4>
		            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		          </div>
		          <div class="sidebar-module">
		            <h4>Archives</h4>
		            <ol class="list-unstyled">
		              <li><a href="#">March 2014</a></li>
		              <li><a href="#">February 2014</a></li>
		              <li><a href="#">January 2014</a></li>
		              <li><a href="#">December 2013</a></li>
		              <li><a href="#">November 2013</a></li>
		              <li><a href="#">October 2013</a></li>
		              <li><a href="#">September 2013</a></li>
		              <li><a href="#">August 2013</a></li>
		              <li><a href="#">July 2013</a></li>
		              <li><a href="#">June 2013</a></li>
		              <li><a href="#">May 2013</a></li>
		              <li><a href="#">April 2013</a></li>
		            </ol>
		          </div>
		          <div class="sidebar-module">
		            <h4>Elsewhere</h4>
		            <ol class="list-unstyled">
		              <li><a href="#">GitHub</a></li>
		              <li><a href="#">Twitter</a></li>
		              <li><a href="#">Facebook</a></li>
		            </ol>
		          </div>
		        </div><!-- /.blog-sidebar -->

		      </div>
