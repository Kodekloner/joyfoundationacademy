<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="../assets/js/jquery-3.5.1.min.js"></script>

	<!--DataTable Style-->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../assets/css/datatables.min.css">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <!--My New Stylesheet CSS -->
	 <link rel="stylesheet" href="../assets/css/myStyleSheet.css">
    <title>Promotion Student</title>
    <style>
        .inCheckBox{
            margin-top: -5px;
        }
    </style>
  </head>
  
   <?php include ('../layout/style.php');?>
  
  <body style="background: rgb(236, 234, 234);">

	
		<div class="menu-wrapper">
       	    <div class="sidebar-header">
			    <?php include ('../layout/sidebar.php');?>

    			<div class="backdrop"></div>
    
    			<div class="content">
    
    				<?php include ('../layout/header.php');?>
    
    					<div class="content-data">
    					    
    					          <div class="row" style="margin: 15px;">
            
                                        <div class="col-sm-12">
    				
                    <div class="cardBoxSty">
    
    				<form>
                        <div class="form-row">
                            <div class="form-group col-sm">
                                <select class="form-control">
                                    <option>Select Session</option>
                                    <option>2020/2021</option>
                                    <option>2021/2022</option>
                                    <option>2022/2023</option>
                                </select>
    						</div>
    						
    						<div class="form-group col-sm">
                                <select class="form-control">
                                    <option>Select Term</option>
                                    <option>1st Term</option>
                                    <option>2nd Term</option>
                                    <option>3rd Term</option>
                                </select>
                            </div>
    					
    
                            <div class="form-group col-sm">
                                <select class="form-control">
                                    <option>Select Class</option>
                                    <option>Nursery 1</option>
    								<option>Nursery 2</option>
    								<option>Primary 1</option>
                                </select>
    						</div>
    
    						<div class="form-group col-sm">
                                <select class="form-control">
                                    <option>Select Section</option>
                                    <option>Blue</option>
    								<option>Red</option>
                                </select>
    						</div>
    						
                            <div class="form-group col-sm">
    							<button type="submit" class="btn btn-primary" style="border-radius: 20px;">
    								<i class="fa fa-search" aria-hidden="true"></i>
    								<span style="margin-left: 5px;">Search</span>
    							</button>
                            </div>
                        </div>
                    </form>
    					
    
                    </div>
                </div>
    		                        </div>
    
    		                        <div class="row" style="margin: 15px;">
            
                <div class="col-sm-12">
    				
                    <div class="table-responsive data_table">
    
    					<h3 style="margin-bottom: 50px;">Promote students</h3>
    
                        <button type="submit"  data-toggle="modal" data-target="#changeModal" class="btn btn-primary" style="border-radius: 20px; float: right;">
                            Promote All
                        </button>
    
    					<table id="example" class="table table-striped" style="width:100%">
    						<thead>
    							<tr>
                                    <th> 
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" onclick='selects()' ondblclick="deSelect()" value="Select All">
                                            <label class="form-check-label" style="font-weight: bold;">
                                              All
                                            </label>
                                        </div>
                                    </th>
    								<th>Reg No.</th>
    								<th>Student</th>
    								<th>Class</th>
                                    <th>Section</th>
    								<th>Average</th>
                                    <th>Grade</th>
    								<th>Action</th>
    							</tr>
    						</thead>
    						<tbody>
    							<tr>
                                    <td> 
                                        <div class="form-check">
                                            <input class="form-check-input inCheckBox" onselect="" type="checkbox" name="chkBoc" value="" >
                                        </div>
                                    </td>
    								<td>1102</td>
    								<td>Eva Monday</td>
    								<td>Nursery One</td>
                                    <td>Blue</td>
    								<td>67.8</td>
                                    <td>B</td>
    								<td>
                                        <button type="submit" data-toggle="modal" data-target="#changeModal" class="btn btn-primary" style="border-radius: 20px;">
                                            Promote
                                        </button>
                                    </td>
    							</tr>
    							<tr>
                                    <td> 
                                        <div class="form-check">
                                            <input class="form-check-input inCheckBox" type="checkbox" name="chkBoc" value="" >
                                        </div>
                                    </td>
    								<td>1103</td>
    								<td>Chinoso Madu</td>
    								<td>Nursery One</td>
                                    <td>Blue</td>
    								<td>72.8</td>
                                    <td>A</td>
    								<td>
                                        <button type="submit" data-toggle="modal" data-target="#changeModal" class="btn btn-primary" style="border-radius: 20px;">
                                            Promote
                                        </button>
                                    </td>
    							</tr>
    							<tr>
                                    <td> 
                                        <div class="form-check">
                                            <input class="form-check-input inCheckBox" type="checkbox" name="chkBoc" value="" >
                                        </div>
                                    </td>
    								<td>1104</td>
    								<td>Henry Peters</td>
    								<td>Nursery One</td>
                                    <td>Blue</td>
    								<td>88.92</td>
                                    <td>A+</td>
    								<td>
                                        <button type="submit" data-toggle="modal" data-target="#changeModal" class="btn btn-primary" style="border-radius: 20px;">
                                            Promote
                                        </button>
                                    </td>
    							</tr>
    							<tr>
                                    <td> 
                                        <div class="form-check">
                                            <input class="form-check-input inCheckBox" type="checkbox" name="chkBoc" value="" >
                                        </div>
                                    </td>
    								<td>1105</td>
    								<td>Habiba John</td>
    								<td>Nursery One</td>
                                    <td>Blue</td>
    								<td>67.8</td>
                                    <td>B</td>
    								<td>
                                        <button type="submit" data-toggle="modal" data-target="#changeModal" class="btn btn-primary" style="border-radius: 20px;">
                                            Promote
                                        </button>
                                    </td>
    							</tr>
    							
    						
    						</tbody>
    					</table>
    
                    </div>
                </div>
    		</div>
    		
    		 
                                <!-- Promotion modal -->
                                <!-- Promotion modal -->
                        
                                <div class="modal fade" id="changeModal" tabindex="-1" aria-labelledby="changeModalLabel" aria-hidden="true">
                        
                                    <div class="modal-dialog">
                        
                                        <div class="modal-content">
                        
                                            <div class="modal-header">
                                                <h3 style="margin-left: 25%;" class="modal-title" >Promote Students</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                        
                                            <div class="modal-body">
                                                
                                                <form>
                                                   
                                                    <div class="form-row"> 
                                                        <div class="col-sm-12">
                                                            <label style="font-weight: 600;">Session:</label>
                                                            <select class="form-control">
                                                                <option>Select Session</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-12" style="margin-top: 20px;">
                                                            <label style="font-weight: 600;">Class:</label>
                                                            <select class="form-control">
                                                                <option>Select Class</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-12" style="margin-top: 20px;">
                                                            <label style="font-weight: 600;">Section:</label>
                                                            <select class="form-control">
                                                                <option>Select Section</option>
                                                            </select>
                                                        </div>
                                                    </div>
                        
                                                </form>
                        
                                            </div>
                        
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                            
                                        </div>
                        
                                    </div>
                        
                                </div>
                        
                               <!-- Promotion modal -->
                                <!-- Promotion modal -->
    
    
                            
    					</div>
    
    			</div>
		    </div>
        </div>







		
	<script>
		$(document).ready(function(){
			var table = $('#example').DataTable({
				scrollX: true,
				buttons:['copy', 'csv', 'excel', 'pdf', 'print']
			});

			table.buttons().container()
			.appendTo('#example_wrapper .col-md-6:eq(0)');
		});


                
        function selects(){  
            var ele=document.getElementsByName('chkBoc');  
            for(var i=0; i<ele.length; i++){  
                if(ele[i].type=='checkbox')  
                    ele[i].checked=true;  
            }  
        }  
        function deSelect(){  
            var ele=document.getElementsByName('chkBoc');  
            for(var i=0; i<ele.length; i++){  
                if(ele[i].type=='checkbox')  
                    ele[i].checked=false;  
                
            }  
        }            



          $('#desktop').click(function(){
            
                $('li a').toggleClass('hideMenuList');
                $('.sidebar').toggleClass('changeWidth');
            })
            
            
            
            $('#mobile').click(function(){
            
                $('.sidebar').toggleClass('showMenu');
                $('.backdrop').toggleClass('showBackdrop');
            })
            
            
            $('.cross-icon').click(function(){
            
                $('.sidebar').toggleClass('showMenu');
                $('.backdrop').removeClass('showBackdrop');
            })
            
            $('.backdrop').click(function(){
            
                $('.sidebar').removeClass('showMenu');
                $('.backdrop').removeClass('showBackdrop');
            })
            
            $('li').click(function () {
                $('li').removeClass();
                $(this).addclass('selected');
                $('.sideBar').removeClass('showMenu');
            })
            
	

	</script>
	
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   	<script src="../assets/bootstrap/js/jquery.slim.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>



	<script src="../assets/js/jquery-3.5.1.js"></script>
	<script src="../assets/js/jquery.dataTables.min.js"></script>
   <script src="../assets/js/datatables.min.js"></script>
	<script src="../assets/js/pdfmake.min.js"></script>
	<script src="../assets/js/vfs_fonts.js"></script>

	

  </body>
</html>