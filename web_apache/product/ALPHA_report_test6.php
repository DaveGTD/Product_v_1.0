<?php
	
// get the column names and types 
	
$host = "localhost";
$user = "root";
$password = "root";
$database = "test";
$table = 'users';

$_POST['table'] = $table;

$conn = new mysqli($host, $user, $password, $database);
$sql = "SELECT COLUMN_NAME,COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$table'";
$result = $conn->query($sql);

$nameAndType = array();

if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$name = $row['COLUMN_NAME'];
		$type = $row['COLUMN_TYPE'];
		$nameAndType[$name] = $type;
			
	}
}
	
foreach ($nameAndType as $k => $v)
{
	if(contains($v , 'char') || contains($v, 'text') || contains($v, 'blob') || contains($v, 'enum'))
	{
		$nameAndType[$k] = 'string';
	}
	
	if(contains($v, 'float') || contains($v, 'double') || contains($v, 'decimal'))
	{
		$nameAndType[$k] = 'double';
	}
	if(contains($v, 'int'))
	{
		$nameAndType[$k] = 'integer';
	}
}
	
/*
	Supported "time" types:
	datetime
	date
	time
	
*/
	
function startsWith($haystack, $needle)
{
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

function contains($haystack, $needle)
{
	if (strpos($haystack, $needle) !== FALSE)
	{
		return true;
	}
	else
	{
		return false;
	}
}

	
// NOTE: jquery query builder API doesn't support the type:'' as year... 
// so we'll not includes mysql table columns which have 'year' as type for now 
// remove columns from array where type is year, ... also do this for other types which are not not handled yet 

foreach ($nameAndType as $k => $v)
{
	if(contains($v, 'year') || contains($v, 'timestamp'))
	{
		unset($k);
	}
}

	
// print_r($nameAndType);

$conn->close();

	
	
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Report Test</title>

  <link rel="stylesheet" href="bower_components_upper/bootstrap/dist/css/bootstrap.min.css" id="bt-theme">
  <link rel="stylesheet" href="bower_components_upper/bootstrap-select/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="bower_components_upper/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css">
  <link rel="stylesheet" href="bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">
  <link rel="stylesheet" href="bower_components/selectize/dist/css/selectize.bootstrap3.css">

  <link rel="stylesheet" href="query-builder.default.css" id="qb-theme">

  <link rel="stylesheet" href="http://mistic100.github.io/jQuery-QueryBuilder/assets/flags/flags.css">
  <link rel="stylesheet" href="jquery.datetimepicker.css">
  <style>
    .flag { display: inline-block; }
  </style>
</head>

<body>

<div class="container">
  <div class="col-md-12 col-lg-10 col-lg-offset-1">

  <div id="builder"></div>
  <br>
   <button class="btn btn-danger reset">Reset</button>
  <br>
    
    <!-- Not exposed to user
    <div class="btn-group">
      <button class="btn btn-default" disabled>Get:</button>
      <button class="btn btn-primary parse-json">JSON</button>
      <button class="btn btn-primary parse-sql" data-stmt="false">SQL</button>
      <button class="btn btn-primary parse-sql" data-stmt="question_mark">SQL statement</button>
      <button class="btn btn-primary parse-mongo">MongoDB</button>
    </div>
    -->
    
	<div id="HelperTools">
		
	<h3>Date & Time Picker</h3>
	<input type="text" value="" id="datetimepicker"/><br><br>
	<h3>Time Picker</h3>
	<input type="text" id="datetimepicker1"/><br><br>
	<h3>Date Picker</h3>
	<input type="text" id="datetimepicker2"/><br><br>
	<!-- Disabled for now ..
	<h3>Timestamp Picker</h3>
	<input type="text" id="datetimepicker3"/><br><br>
	<h3>Year Picker</h3>
	<input type="text" id="datetimepicker4"/><br><br>		
	-->
	
	</div>

    <div id="result" class="hide">
      <h3>Output</h3>
      <pre></pre>
    </div>
    
    <div id="submitForm">
	    <form action="ALPHA_result_test3.php" method="POST">
		<input type="hidden" id="tableSQL" name="tableSQL" value="">
		<input class="btn btn-primary sub" type="submit" value="Submit">
		</form>
    </div>
    
    
  </div>
</div>

<script src="bower_components_upper/jquery/dist/jquery.js"></script>
<script src="bower_components_upper/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components_upper/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="bower_components_upper/bootbox/bootbox.js"></script>
<script src="bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<script src="bower_components/selectize/dist/js/standalone/selectize.min.js"></script>
<script src="bower_components_upper/jquery-extendext/jQuery.extendext.min.js"></script>
<script src="bower_components_upper/sql-parser/browser/sql-parser.js"></script>
<script src="bower_components_upper/doT/doT.js"></script>

<script src="query-builder.js"></script>
<script src="jquery.datetimepicker.full.js"></script>

<script>


$('[data-toggle="tooltip"]').tooltip();

var $b = $('#builder');

var options = {
  allow_empty: true,


  plugins: {
    'bt-tooltip-errors': { delay: 100},
    'sortable': null,
    'filter-description': { mode: 'bootbox' },
    'bt-selectpicker': null,
    'unique-filter': null,
    'bt-checkbox': { color: 'primary' },
    'invert': null
  },

  // standard operators in custom optgroups
  operators: [
    {type: 'equal',            optgroup: 'basic'},
    {type: 'not_equal',        optgroup: 'basic'},
    {type: 'in',               optgroup: 'basic'},
    {type: 'not_in',           optgroup: 'basic'},
    {type: 'less',             optgroup: 'numbers'},
    {type: 'less_or_equal',    optgroup: 'numbers'},
    {type: 'greater',          optgroup: 'numbers'},
    {type: 'greater_or_equal', optgroup: 'numbers'},
    {type: 'between',          optgroup: 'numbers'},
    {type: 'not_between',      optgroup: 'numbers'},
    {type: 'begins_with',      optgroup: 'strings'},
    {type: 'not_begins_with',  optgroup: 'strings'},
    {type: 'contains',         optgroup: 'strings'},
    {type: 'not_contains',     optgroup: 'strings'},
    {type: 'ends_with',        optgroup: 'strings'},
    {type: 'not_ends_with',    optgroup: 'strings'},
    {type: 'is_empty'     },
    {type: 'is_not_empty' },
    {type: 'is_null'      },
    {type: 'is_not_null'  }
  ],

  filters: [
  /*
   * basic
   */
   
   <?php
	
	$numItems = count($nameAndType);
	$i = 0;
	foreach ($nameAndType as $k => $v)
	{
		if(++$i != $numItems)
		{	
			echo "{ id:'". $k ."', label: {en: '". $k . "'}, type: '". $v ."'},";
		}
		else
		{
			echo "{ id:'". $k ."', label: {en: '". $k . "'}, type: '". $v ."'}";
		}   
	}
	   
	?>


    ]
};














// init
$('#builder').queryBuilder(options);

$('#builder').on('afterCreateRuleInput.queryBuilder', function(e, rule) {
    if (rule.filter.plugin == 'selectize') {
        rule.$el.find('.rule-value-container').css('min-width', '200px')
          .find('.selectize-control').removeClass('form-control');
    }
});





// reset builder
$('.reset').on('click', function() {
  $('#builder').queryBuilder('reset');
  $('#result').addClass('hide').find('pre').empty();
});

// get rules
$('.parse-json').on('click', function() {
  $('#result').removeClass('hide')
    .find('pre').html(JSON.stringify(
      $('#builder').queryBuilder('getRules', {get_flags: true}),
      undefined, 2
    ));
});

$('.parse-sql').on('click', function() {
  var res = $('#builder').queryBuilder('getSQL', $(this).data('stmt'), false);
  $('#result').removeClass('hide')
    .find('pre').html(
      res.sql + (res.params ? '\n\n' + JSON.stringify(res.params, undefined, 2) : '')
    );
});

$('.parse-mongo').on('click', function() {
  $('#result').removeClass('hide')
    .find('pre').html(JSON.stringify(
      $('#builder').queryBuilder('getMongo'),
      undefined, 2
    ));
});



$('.sub').on('click', function() {
  var res = $('#builder').queryBuilder('getSQL', false, true);
  $("#tableSQL").val(res.sql);
});




</script>

<script>

// $.datetimepicker.setLocale('en');

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
format: 'Y-m-d H:i:s',
// theme: 'dark',
step:1
});


$('#datetimepicker1').datetimepicker({
	lang: 'en',
	datepicker:false,
	format:'H:i:s',
	step:1
});

$('#datetimepicker2').datetimepicker({
	lang:'en',
	timepicker:false,
	format:'Y-m-d'
});

$('#datetimepicker3').datetimepicker({
	format:'unixtime'
});

$('#datetimepicker4').datetimepicker({
 timepicker:false,
 format:'Y',
 // minDate:'-1970/01/02',//yesterday is minimum date(for today use 0 or -1970/01/01)
 // maxDate:'+1970/01/02'//tommorow is maximum date calendar
});
	
</script>



</body>
</html>
