<?php
	
// get the column names and types 
	
$host = "localhost";
$user = "root";
$password = "root";
$database = "test";
$table = 'users';

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
	
	if(contains($v, 'int') || contains($v, 'float') || contains($v, 'double') || contains($v, 'decimal'))
	{
		$nameAndType[$k] = 'double';
	}
}
	
/*
	Time related types:
	timestamp
	datetime
	date
	time
	year
	
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
	
print_r($nameAndType);

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
    <div class="btn-group">
      <button class="btn btn-default" disabled>Get:</button>
      <button class="btn btn-primary parse-json">JSON</button>
      <button class="btn btn-primary parse-sql" data-stmt="false">SQL</button>
      <button class="btn btn-primary parse-sql" data-stmt="question_mark">SQL statement</button>
      <button class="btn btn-primary parse-mongo">MongoDB</button>
    </div>
    
	<div id="HelperTools">
		
	<h3>DateTimePicker</h3>
	<input type="text" value="" id="datetimepicker"/><br><br>
	<h3>TimePicker</h3>
	<input type="text" id="datetimepicker1"/><br><br>
	<h3>DatePicker</h3>
	<input type="text" id="datetimepicker2"/><br><br>
		
	</div>

    <div id="result" class="hide">
      <h3>Output</h3>
      <pre></pre>
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
	
	foreach ($nameAndType as $k => $v)
	{
		echo "{ id:'". $k ."', label: {en: '". $k . "'}, type: '". $v ."'},";
	}   
	   
	?>

   {
	   id: 'Name',
	   label: {en: 'Name'},
	   type: 'string',
	   // optgroup: 'Core',
	   default_value: 'Enter Name',
	   size: 100

   },

   {
	   id: 'Time',
	   label: {en: 'Time'},
	   type: 'datetime',
	   // optgroup: 'Core',
	   default_value: 'Enter Date/Time/Date & Time',
	   size: 100

   },

   {
    id: 'State',
    label: 'State',
    type: 'string',
    input: 'select',
    multiple: true,
    plugin: 'selectize',
    plugin_config: {
      valueField: 'id',
      labelField: 'name',
      searchField: 'name',
      sortField: 'name',
      options: [
        { id: "AL", name: "Alabama" },
        { id: "AK", name: "Alaska" },
        { id: "AZ", name: "Arizona" },
        { id: "AR", name: "Arkansas" },
        { id: "CA", name: "California" },
        { id: "CO", name: "Colorado" },
        { id: "CT", name: "Connecticut" },
        { id: "DE", name: "Delaware" },
        { id: "DC", name: "District of Columbia" },
        { id: "FL", name: "Florida" },
        { id: "GA", name: "Georgia" },
        { id: "HI", name: "Hawaii" },
        { id: "ID", name: "Idaho" }
      ]
    },
    valueSetter: function(rule, value) {
      rule.$el.find('.rule-value-container select')[0].selectize.setValue(value);
    	}
    }


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








</script>

<script>

$.datetimepicker.setLocale('en');

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
format: 'Y-m-d H:i:s',
step:1
});


$('#datetimepicker1').datetimepicker({
	datepicker:false,
	format:'H:i:s',
	step:0.1
});
$('#datetimepicker2').datetimepicker({
	lang:'en',
	timepicker:false,
	format:'Y-m-d'
});

	
</script>



</body>
</html>
