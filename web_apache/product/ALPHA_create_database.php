<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Advanced forms | Dynamic Admin Template</title>
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="application-name" content="" />
        <!-- Import google fonts - Heading first/ text second -->
        <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- Css files -->
        <!-- Icons -->
        <link href="css/icons.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="css/custom.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
        
		<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />

    </head>
    <body>
        <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->




                                    
                                    
                                    
                                    <div class="panel-body pt0 pb0">
                                        <form class="form-horizontal group-border stripped" role="form" action="ALPHA_create_database_result.php" method="POST">
                                            <div class="form-group">
	                                            
	                                                     
                                                <br><br>
                                                
                                                <div class="panel-heading">
	                                                <h4 class="panel-title"> Columns </h4>
													<button type="button" class="btn btn-success mr5 mb10" onclick="addRow('editable-table')">ADD</button>
													<button type="button" class="btn btn-danger mr5 mb10" onclick="deleteRow('editable-table')">DEL</button>
						              			</div>
						              			
								              <div class="panel-body">
											  <div>
												<table id="editable-table">
								
													<tbody>
														<tr>
															<p>
															<td><input type="checkbox" name="chk[]" /></td>
								
															<td>
																<label> &nbsp COLUMN  &nbsp </label>
																<input type="text" id="tag" required="required" name="ONE[]">
															</td>
																						 
															<td>
																<label for="op">  &nbsp TYPE &nbsp </label>
																	<select id="op" name="op" required="required">
																		<option> Select One </option>
																		<option> Number </option>
																		<option> Text </option>
																		<option> Date/Time </option>
																	</select>
															</td>
															</p>
														</tr>
													</tbody>
								
								
												</table>
								                  
											  </div>    
								              </div>


											 <div class="panel-heading">
													<h4 class="panel-title"> <button type="submit" class="btn btn-default">Submit</button> </h4>
                                    		</div>
											


                                        </form>
               
                                        
                                     </div>
                                     
                                     
                          
							        
										 <script>
										
										function addRow(tableID) {
											var table = document.getElementById(tableID);
											var rowCount = table.rows.length;
											if(rowCount < 5){							// limit the user from creating fields more than your limits
												var row = table.insertRow(rowCount);
												var colCount = table.rows[0].cells.length;
												for(var i=0; i<colCount; i++) {
													var newcell = row.insertCell(i);
													newcell.innerHTML = table.rows[0].cells[i].innerHTML;
												}
											}else{
												 alert("You need PRO to create more than 5 columns");
													   
											}
										}

										function deleteRow(tableID) {
											var table = document.getElementById(tableID);
											var rowCount = table.rows.length;
											for(var i=0; i<rowCount; i++) {
												var row = table.rows[i];
												var chkbox = row.cells[0].childNodes[0];
												if(null != chkbox && true == chkbox.checked) {
													if(rowCount <= 1) { 						// limit the user from removing all the fields
														alert("Must have atleast 1 column.");
														break;
													}
													table.deleteRow(i);
													rowCount--;
													i--;
												}
											}
										}
											
											 
										</script>
							        
							        
							        
						


	
		
		
		                    
	
							
							

		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="jquery.autocomplete.js"></script>
<!--
		<script>
			$(document).ready(function(){
			$("#tag").autocomplete("autocomplete.php", { selectFirst: true});			
			});
		</script>	
-->
						
						
           
                   <!-- Load pace first -->
        <script src="plugins/core/pace/pace.min.js"></script>

  <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
        <!-- Bootstrap plugins -->
        <script src="js/bootstrap/bootstrap.js"></script>
        <!-- Core plugins ( not remove ) -->
        <script src="js/libs/modernizr.custom.js"></script>
        <!-- Handle responsive view functions -->
        <script src="js/jRespond.min.js"></script>
        <!-- Custom scroll for sidebars,tables and etc. -->
        <script src="plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        <!-- Remove click delay in touch -->
        <script src="plugins/core/fastclick/fastclick.js"></script>
        <!-- Increase jquery animation speed -->
        <script src="plugins/core/velocity/jquery.velocity.min.js"></script>
        <!-- Quick search plugin (fast search for many widgets) -->
        <script src="plugins/core/quicksearch/jquery.quicksearch.js"></script>
        <!-- Bootbox fast bootstrap modals -->
        <script src="plugins/ui/bootbox/bootbox.js"></script>
        <!-- Other plugins ( load only nessesary plugins for every page) -->
        <script src="plugins/forms/fancyselect/fancySelect.js"></script>
        <script src="plugins/forms/select2/select2.js"></script>
        <script src="plugins/forms/maskedinput/jquery.maskedinput.js"></script>
        <script src="plugins/forms/dual-list-box/jquery.bootstrap-duallistbox.js"></script>
        <script src="plugins/forms/spinner/jquery.bootstrap-touchspin.js"></script>
        <script src="plugins/forms/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="plugins/forms/bootstrap-timepicker/bootstrap-timepicker.js"></script>
        <script src="plugins/forms/bootstrap-colorpicker/bootstrap-colorpicker.js"></script>
        <script src="plugins/forms/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <script src="js/libs/typeahead.bundle.js"></script>
        <script src="plugins/forms/summernote/summernote.js"></script>
        <script src="plugins/forms/bootstrap-markdown/bootstrap-markdown.js"></script>
        <script src="plugins/forms/dropzone/dropzone.js"></script>
        <script src="plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="js/jquery.Dynamic.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pages/forms-advanced.js"></script>
    </body>
</html>