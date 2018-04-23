<?php

echo '
<!DOCTYPE HTML>
<html>
<head>
<title>统计数据 - Cremunity</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->

<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
</head>

<body>
	<div id="wrapper">
';
require 'includes/navbar.php';

echo '
		<div id="page-wrapper">
			<div class="graphs">
				<div class="widget_head">统计数据</div>
				<div class="widget_1">
					
					<div class="col-sm-3 widget_1_box">
						<div class="tile-progress bg-info">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress">
									<div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;">
									</div>
								</div>
								<span>40% increase</span>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3 widget_1_box">
						<div class="tile-progress bg-success">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress">
									<div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;">
									</div>
								</div>
								<span>40% increase</span>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3 widget_1_box">
						<div class="tile-progress bg-danger">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress">
									<div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;">
									</div>
								</div>
								<span>40% increase</span>
							</div>
						</div>
					</div>
					
					
					<div class="col-sm-3 widget_1_box">
						<div class="tile-progress bg-secondary">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress">
									<div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;">
									</div>
								</div>
								<span>40% increase</span>
							</div>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				
				<div class="widget_2">
					<div class="col-sm-3 widget_1_box">
						<div class="wid-social facebook">
							<div class="social-icon">
								<i class="fa fa-facebook text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">143K</h3>
								<h4 class="counttype text-light">Likes</h4>
								<span class="percent">5% increase from last week</span>
							</div>
						</div>
					</div>
				
			
					<div class="col-sm-3 widget_1_box">
						<div class="wid-social twitter">
							<div class="social-icon">
								<i class="fa fa-twitter text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">3454</h3>
								<h4 class="counttype text-light">Tweets</h4>
								<span class="percent">2% increase from last week</span>
							</div>
						</div>
					</div>
			
					<div class="col-sm-3 widget_1_box">
						<div class="wid-social google-plus">
							<div class="social-icon">
								<i class="fa fa-google-plus text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">523</h3>
								<h4 class="counttype text-light">Circles</h4>
								<span class="percent">2% increase from last week</span>
							</div>
						</div>
					</div>
			
					<div class="col-sm-3 widget_1_box">
						<div class="wid-social dribbble">
							<div class="social-icon">
								<i class="fa fa-dribbble text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">2525</h3>
								<h4 class="counttype text-light">Subscribers</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					</div>
			
					<div class="clearfix">
					</div>
				</div>
		
				<div class="widget_3">
					<div class="col-sm-3 widget_1_box">
						<div class="wid-social linkedin">
							<div class="social-icon">
								<i class="fa fa-linkedin text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">2525</h3>
								<h4 class="counttype text-light">Connections</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3 widget_1_box">
						<div class="wid-social youtube">
							<div class="social-icon">
								<i class="fa fa-youtube text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">1523</h3>
								<h4 class="counttype text-light">Subscribers</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3 widget_1_box">
						<div class="wid-social skype">
							<div class="social-icon">
								<i class="fa fa-skype text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">2721</h3>
								<h4 class="counttype text-light">Contacts</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3 widget_1_box">
						<div class="wid-social flickr">
							<div class="social-icon">
								<i class="fa fa-flickr text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">1221</h3>
								<h4 class="counttype text-light">Media</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					</div>
					
					<div class="clearfix">
					</div>
				</div>
				
				<div class="widget_4">
					<div class="col-md-4 widget_1_box1">
						<div class="coffee">
							<div class="coffee-top">
								<a href="#"><img class="img-responsive" src="images/pic4.jpg" alt="">
								<div class="doe">
									<h6>Lorem Ipusm</h6>
									<p>Web Designer</p>
								</div>
								<i></i></a>
							</div>
							<div class="follow">
								<div class="col-xs-4 two">
									<p>Followers</p>
									<span>1,367</span>
								</div>
								<div class="col-xs-4 two">
									<p>Tweets</p>
									<span>967</span>
								</div>
								<div class="col-xs-4 two">
									<p>Following</p>
									<span>367</span>
								</div>
								<div class="clearfix">
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 stats-info3"> 
						<div class="online">
							<a href="#">
							<div class="online-top">
								<div class="top-at">
									<img class="img-responsive" src="images/2.png" alt="">
								</div>
								<div class="top-on">
									<div class="top-on1">
										<p>Characteristic</p>
										<span>Ipsum</span>
									</div>
									<label class="round"> </label>
									<div class="clearfix">
									</div>
								</div>
								<div class="clearfix">
								</div>
							</div>
							</a>
							<a href="#">
							<div class="online-top">
								<div class="top-at">
									<img class="img-responsive" src="images/3.png" alt="">
								</div>
								<div class="top-on">
									<div class="top-on1">
										<p>Accompanied</p>
										<span>Repet</span>
									</div>
									<label class="round"> </label>
									<div class="clearfix">
									</div>
								</div>
								<div class="clearfix">
								</div>
							</div>
							</a>
							<a href="#">
							<div class="online-top">
								<div class="top-at">
									<img class="img-responsive" src="images/4.png" alt="">
								</div>
								<div class="top-on">
									<div class="top-on1">
										<p>Adipiscing</p>
										<span>Mistake</span>
									</div>
									<label class="round"> </label>
									<div class="clearfix">
									</div>
								</div>
								<div class="clearfix">
								</div>
							</div>
							</a>
							<a href="#">
							<div class="online-top online-top1">
								<div class="top-at">
									<img class="img-responsive" src="images/1.png" alt="">
								</div>
								<div class="top-on">
									<div class="top-on1">
										<p>Denouncing</p>
										<span>Lorem</span>
									</div>
									<label class="round"> </label>
									<div class="clearfix">
									</div>
								</div>
								<div class="clearfix">
								</div>
							</div>
							</a>
						</div>
					</div>
					
					<div class="col-md-4 stats-info stats-info1">
						<div class="panel-heading">
							<h4 class="panel-title">Browser Stats</h4>
						</div>
						<div class="panel-body panel-body2">
							<ul class="list-unstyled">
								<li>Google Chrome<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div></li>
								<li>Firefox<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>
								<li>Internet Explorer<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div></li>
								<li>Safari<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div></li>
								<li>Opera<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div></li>
								<li>Mobile &amp; tablet<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div></li>
								<li class="last">Others<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div></li> 
							</ul>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				
				<div class="widget_5">
					<div class="col-md-6 widget_1_box2">
						<div class="wid_blog">
							<h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s</h1>
						</div>
						<div class="wid_blog-desc">
							<div class="wid_blog-left">
								<img src="images/1.png" class="img-responsive" alt="">
							</div>
							<div class="wid_blog-right">
								<h2>Lorem Ipsum</h2>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
								<ul class="list-unstyled list-inline">
									<li><a href="#" class="text-muted">12<sup>th</sup> March, 2015</a></li>
									<li><a href="#" class="text-muted"><i class="fa fa-comment"></i> 584</a></li>
									<li><a href="#" class="text-orange"><i class="fa fa-heart"></i> 12k</a></li>
									<li><a href="#" class="text-muted">More</a></li>
								</ul>
							</div>
							<div class="clearfix">
							</div>
						</div>
					</div>
					
					<div class="col-md-6 widget_1_box2">
						<div class="widget-body">
							<div class="form-group">
								<input type="text" class="form-control1 input-lg" placeholder="Enter title ...">
							</div>
							<div class="editor">
								<div class="editor-toolbar">
									<div class="btn-group">
										<button class="btn btn-link link1"><span class="fa fa-code"></span></button>
									</div>
									<div class="btn-group">
										<button class="btn btn-link link1"><span class="fa fa-font"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-paragraph"></span></button>
									</div>
									<div class="btn-group">
										<button class="btn btn-link link1"><span class="fa fa-bold"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-italic"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-underline"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-strikethrough"></span></button>
									</div>
									<div class="btn-group">
										<button class="btn btn-link link1 active"><span class="fa fa-align-left"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-align-center"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-align-right"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-align-justify"></span></button>
									</div>
									<div class="btn-group">
										<button class="btn btn-link link1"><span class="fa fa-list-ul"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-list-ol"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-outdent"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-indent"></span></button>
									</div>
									<div class="btn-group">
										<button class="btn btn-link link1"><span class="fa fa-table"></span></button>
										<button class="btn btn-link link1"><span class="fa fa-th"></span></button>
									</div>
								</div>
								<div class="editor-content ng-isolate-scope" mb-scrollbar="contentScrollbar">
									<div class="editor-input ng-scope" contenteditable="true">
										<h1>Header #1</h1>
										<h2>Header #2</h2>
										<h3>Header #3</h3>
										<h4>Header #4</h4>
										<h5>Header #5</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error dolorem dolorum minima libero, officiis iure, ea? Dicta alias, tempora maxime illum nostrum ea atque eos vel. Aliquid ducimus culpa ut.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				
				
			<div class="graphs">
				<div class="widget_6">
					<div class="clearfix">
					<div class="graph_box">
						<div class="col-md-4 grid_2">
							<div class="grid_1">
								<h3>Circular</h3>
								<canvas id="doughnut" height="375" width="500" style="width: 400px; height: 300px;"></canvas>
							</div>
						</div>
						<div class="col-md-4 grid_2">
							<div class="grid_1">
								<h3>Line</h3>
								<canvas id="line" height="375" width="500" style="width: 400px; height: 300px;"></canvas>
							</div>
						</div>
						<div class="col-md-4 grid_2">
							<div class="grid_1">
								<h3>PolarArea</h3>
								<canvas id="polarArea" height="375" width="500" style="width: 400px; height: 300px;"></canvas>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="widget_7">
				
					<div class="graph_box">
						<div class="col-md-4 grid_2">
							<div class="grid_1">
								<h3>Bar</h3>
								<canvas id="bar" height="375" width="500" style="width: 400px; height: 300px;"></canvas>
							</div>
						</div>
						<div class="col-md-4 grid_2">
							<div class="grid_1">
								<h3>Pie</h3>
								<canvas id="pie" height="375" width="500" style="width: 400px; height: 300px;"></canvas>
							</div>
						</div>
						<div class="col-md-4 grid_2">
							<div class="grid_1">
								<h3>Radar</h3><canvas id="radar" height="375" width="500" style="width: 400px; height: 300px;"></canvas>
							</div>
						</div>
						<div class="clearfix">
						</div>
					</div>
					
		
					
		
					<div class="clearfix"></div>
					
					
				</div>
				<div class="clearfix"></div>
			<script>

		var doughnutData = [
				{
					value: 30,
					color:"#ef553a"
				},
				{
					value : 50,
					color : "#9358ac"
				},
				{
					value : 100,
					color : "#3b5998"
				},
				{
					value : 40,
					color : "#00aced"
				},
				{
					value : 120,
					color : "#4D5360"
				}
			
			];
		var lineChartData = {
			labels : ["","","","","","",""],
			datasets : [
				{
					fillColor : "#00aced",
					strokeColor : "#00aced",
					pointColor : "#00aced",
					pointStrokeColor : "#fff",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "#3b5998",
					strokeColor : "#3b5998",
					pointColor : "#3b5998",
					pointStrokeColor : "#fff",
					data : [28,48,40,19,96,27,100]
				}
			]
			
		};
		var pieData = [
				{
					value: 30,
					color:"#ef553a"
				},
				{
					value : 50,
					color : "#00aced"
				},
				{
					value : 100,
					color : "#69D2E7"
				}
			
			];
		var barChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					fillColor : "#ef553a",
					strokeColor : "#ef553a",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "#00aced",
					strokeColor : "#00aced",
					data : [28,48,40,19,96,27,100]
				}
			]
			
		};
	var chartData = [
			{
				value : Math.random(),
				color: "#D97041"
			},
			{
				value : Math.random(),
				color: "#C7604C"
			},
			{
				value : Math.random(),
				color: "#21323D"
			},
			{
				value : Math.random(),
				color: "#9D9B7F"
			},
			{
				value : Math.random(),
				color: "#7D4F6D"
			},
			{
				value : Math.random(),
				color: "#9358ac"
			}
		];
		var radarChartData = {
			labels : ["","","","","","",""],
			datasets : [
				{
					fillColor : "#3b5998",
					strokeColor : "#3b5998",
					pointColor : "#3b5998",
					pointStrokeColor : "#fff",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "#ef553a",
					strokeColor : "#ef553a",
					pointColor : "#ef553a",
					pointStrokeColor : "#fff",
					data : [28,48,40,19,96,27,100]
				}
			]
			
		};
	new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
	new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
	new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
	new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
	new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
	new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
	
				</script>
			</div>
';
require 'includes/copyright.php';
echo '
			</div>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>


';



?>