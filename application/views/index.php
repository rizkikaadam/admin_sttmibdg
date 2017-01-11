<?php
include "header.php";
include "top.php";
include "left.php";
?>
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <div class="text-center">
    <ul class="stats_box">
	<li>
	    <div class="sparkline bar_week"></div>
	    <div class="stat_text">
		<strong>2.345</strong>Weekly Visit
		<span class="percent down"> <i class="fa fa-caret-down"></i> -16%</span>
	    </div>
	</li>
	<li>
	    <div class="sparkline line_day"></div>
	    <div class="stat_text">
		<strong>165</strong>Daily Visit
		<span class="percent up"> <i class="fa fa-caret-up"></i> +23%</span>
	    </div>
	</li>
	<li>
	    <div class="sparkline pie_week"></div>
	    <div class="stat_text">
		<strong>$2 345.00</strong>Weekly Sale
		<span class="percent"> 0%</span>
	    </div>
	</li>
	<li>
	    <div class="sparkline stacked_month"></div>
	    <div class="stat_text">
		<strong>$678.00</strong>Monthly Sale
		<span class="percent down"> <i class="fa fa-caret-down"></i> -10%</span>
	    </div>
	</li>
    </ul>
</div>
<hr>
<div class="text-center">

    <a class="quick-btn" href="#">
	<i class="fa fa-bolt fa-2x"></i>
	<span>default</span>
	<span class="label label-default">2</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-check fa-2x"></i>
	<span>danger</span>
	<span class="label label-danger">2</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-building-o fa-2x"></i>
	<span>No Label</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-envelope fa-2x"></i>
	<span>success</span>
	<span class="label label-success">-456</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-signal fa-2x"></i>
	<span>warning</span>
	<span class="label label-warning">+25</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-external-link fa-2x"></i>
	<span>π</span>
	<span class="label btn-metis-2">3.14159265</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-lemon-o fa-2x"></i>
	<span>é</span>
	<span class="label btn-metis-4">2.71828</span>
    </a>
    <a class="quick-btn" href="#">
	<i class="fa fa-glass fa-2x"></i>
	<span>φ</span>
	<span class="label btn-metis-3">1.618</span>
    </a>

</div>
<hr>
<div class="row">
    <div class="col-lg-8">
	<div class="box">
	    <header>
		<h5>Line Chart</h5>
	    </header>
	    <div class="body" id="trigo" style="height: 250px;"></div>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="box">
	    <div class="body">
		<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    <th>Country <i class="fa sort"></i></th>
			    <th>Visit <i class="fa sort"></i></th>
			    <th>Time <i class="fa sort"></i></th>
			</tr>
		    </thead>
		    <tbody>
			<tr class="active">
			    <td>Andorra</td>
			    <td>1126</td>
			    <td>00:00:15</td>
			</tr>
			<tr>
			    <td>Belarus</td>
			    <td>350</td>
			    <td>00:01:20</td>
			</tr>
			<tr class="danger">
			    <td>Paraguay</td>
			    <td>43</td>
			    <td>00:00:30</td>
			</tr>
			<tr class="warning">
			    <td>Malta</td>
			    <td>547</td>
			    <td>00:10:20</td>
			</tr>
			<tr>
			    <td>Australia</td>
			    <td>560</td>
			    <td>00:00:10</td>
			</tr>
			<tr>
			    <td>Kenya</td>
			    <td>97</td>
			    <td>00:20:00</td>
			</tr>
			<tr class="success">
			    <td>Italy</td>
			    <td>2450</td>
			    <td>00:10:00</td>
			</tr>
		    </tbody>
		</table>
	    </div>
	</div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
	<div class="box">
	    <header>
		<h5>Calendar</h5>
	    </header>
	    <div id="calendar_content" class="body">
		<div id='calendar'></div>
	    </div>
	</div>
    </div>
</div>

                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
                    <div id="right" class="bg-light lter">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
<?php
include "footer.php";
?>
