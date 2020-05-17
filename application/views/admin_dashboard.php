<?php 
	require('includes/admin_header.php');
?>
	<div class="content-body">
        <!-- Stats -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-12">
          	<h2>Dashboard Contents Goes Here</h2>

          	<!-- Zero configuration table -->
			<section id="configuration">
			    <div class="row">
			        <div class="col-12">
			            <div class="card">
			                <div class="card-header">
			                    <h4 class="card-title">Zero configuration</h4>
			                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
			                    <div class="heading-elements">
			                        <ul class="list-inline mb-0">
			                            <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
			                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
			                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
			                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
			                        </ul>
			                    </div>
			                </div>
			                <div class="card-content collapse show">
			                    <div class="card-body card-dashboard">
			                        <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p>
			                        <table class="table table-striped table-bordered zero-configuration" 
			                        id="mytable">
			                            <thead>
			                                <tr>
			                                    <th>Name</th>
			                                    <th>Position</th>
			                                    <th>Office</th>
			                                    <th>Age</th>
			                                    <th>Start date</th>
			                                    <th>Salary</th>
			                                </tr>
			                            </thead>
			                            <tbody>
			                                <tr>
			                                    <td>Tiger Nixon</td>
			                                    <td>System Architect</td>
			                                    <td>Edinburgh</td>
			                                    <td>61</td>
			                                    <td>2011/04/25</td>
			                                    <td>$320,800</td>
			                                </tr>
			                            </tfoot>
			                        </table>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</section>
			<!--/ Zero configuration table -->

          </div>
        </div>
    </div>

    
<?php 
	require('includes/admin_footer.php');
?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#mytable').DataTable();
	});
    	
 </script>
