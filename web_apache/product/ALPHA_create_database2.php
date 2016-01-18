
<html>
	
	<head>
	<title> Create Table </title>
		
	</head>
	
	
	
	<body>
		
		<form action="ALPHA_create_database_result.php" method="POST">

	                                            
	    	<br><br>
 

			<button type="button"  onclick="addRow('dataTable')">ADD</button>
			<button type="button"  onclick="deleteRow('dataTable')">DEL</button>
						              	

			<!-- 
			<div>
				<table id="editable-table">

					<tbody>
						<tr>
							<td>
								<input type="checkbox" required="required" name="chk[]" />
							</td>

							<td>
								<label>COLUMN</label>
								<input type="text" id="tag" required="required" name="ONE[]">
							</td>
														 
							<td>
								<label for="op">TYPE</label>
									<select id="op" name="op" required="required">
										<option> Select One </option>
										<option> Number </option>
										<option> Text </option>
										<option> Date/Time </option>
									</select>
							</td>
						</tr>
					</tbody>


				</table>

			</div>
			-->
			
			             <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
						<td>
							<label>Name</label>
							<input type="text" required="required" name="BX_NAME[]">
						 </td>
						 <td>
							<label for="BX_age">Age</label>
							<input type="text" required="required" class="small"  name="BX_age[]">
					     </td>
						 <td>
							<label for="BX_gender">Gender</label>
							<select id="BX_gender" name="BX_gender" required="required">
								<option>....</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						 </td>
						 <td>
							<label for="BX_birth">Berth Pre</label>
							<select id="BX_birth" name="BX_birth" required="required">
								<option>....</option>
								<option>Window</option>
								<option>No Choice</option>
							</select>
						 </td>
							</p>
                    </tr>
                    </tbody>
                </table>




			<button type="submit">Submit</button> 
                              



        </form>

		
		
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
														 alert("Maximum Passenger per ticket is 5.");
															   
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
																alert("Cannot Remove all the Passenger.");
																break;
															}
															table.deleteRow(i);
															rowCount--;
															i--;
														}
													}
												}
											
											 
										</script>
		
		
	</body>
	
</html>