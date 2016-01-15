
<html>
	
	<head>
	<title> Create Table </title>
		
	</head>
	
	
	
	<body>
		
		<form action="ALPHA_create_database_result.php" method="POST">

	                                            
	    	<br><br>
 

			<button type="button"  onclick="addRow('editable-table')">ADD</button>
			<button type="button"  onclick="deleteRow('editable-table')">DEL</button>
						              	


			<div>
				<table id="editable-table">

					<tbody>
						<tr>
							<td>
								<input type="checkbox" name="chk[]" />
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
		
		
	</body>
	
</html>