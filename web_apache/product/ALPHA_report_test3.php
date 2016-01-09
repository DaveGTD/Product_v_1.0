<?php
	
	$host = "localhost";
	$user = "root";
	$password = "root";
	$database = "test";
	
	$conn = new mysqli($host, $user, $password, $database);
	$sql = 'SELECT * FROM users LIMIT 1';
	$result = $conn->query($sql);



    $field = mysql_num_fields( $query );
    
    for ( $i = 0; $i < $field; $i++ )
    {
        
        $names[] = mysql_field_name( $query, $i );
        
    }

	var_dump($names);



/*
	if ($result->num_rows > 0) 
	{
    	while($row = $result->fetch_assoc()) 
    	{
        
    	}
	} 
	else
	{
    echo "0 results";
	}
*/
	
	
	
	
	$conn->close();
	
?>




<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Grid | Dynamic Admin Template</title>
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
        
          <link rel="stylesheet" href="bower_components_upper/bootstrap/dist/css/bootstrap.min.css" id="bt-theme">
		  <link rel="stylesheet" href="bower_components_upper/bootstrap-select/dist/css/bootstrap-select.min.css">
		  <link rel="stylesheet" href="bower_components_upper/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css">
		  <link rel="stylesheet" href="bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">
		  <link rel="stylesheet" href="bower_components/selectize/dist/css/selectize.bootstrap3.css">
		
		  <link rel="stylesheet" href="query-builder.default.css" id="qb-theme">
		  
		  <link rel="stylesheet" href="http://mistic100.github.io/jQuery-QueryBuilder/assets/flags/flags.css">
		  <style>
		    .flag { display: inline-block; }
		  </style>
        
        
    </head>
    <body>
        <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

        <!-- #wrapper -->
        <div id="wrapper">
            <!-- .page-sidebar -->
            <aside id="sidebar" class="page-sidebar hidden-md hidden-sm hidden-xs">
                <!-- Start .sidebar-inner -->
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
	                    
	                    <div class="user-info clearfix">
                            <img src="img/company_logo.png">
                        </div>
                        
 
                        <!--  .sidebar-panel -->
                        <div class="sidebar-panel">
                            <h5 class="sidebar-panel-title">Navigation</h5>
                        </div>
                        <!-- / .sidebar-panel -->
                        <!-- .side-nav -->
                        <div class="side-nav">
                            <ul class="nav">
                                <li><a href="ALPHA_home.php"><i class="l-basic-laptop"></i><span class="txt">Home</span></a>
                                </li>
                                <li>
                                    <a href="ALPHA_analyze.php"><i class="l-ecommerce-graph1"></i> <span class="txt">Analyze</span></a>
                                </li>
                                <li>
                                    <a href="ALPHA_update.php"><i class="l-basic-webpage-txt"></i><span class="txt">Update</span></a>
                                </li>
                                <li>
                                    <a href="ALPHA_report.php"><i class="l-software-layout-header-3columns"></i><span class="txt">Report</span></a>

                                </li>
                                <li>
                                    <a href="ALPHA_create_database.php"><i class="l-software-layers2"></i><span class="txt">Create Database</span></a>

                                </li>



                                </ul>
                        </div>
                        <!-- / side-nav -->
                        <!--  .sidebar-panel -->

                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
            </aside>
            <!-- / page-sidebar -->
                        
                        
        <div class="container">
  <div class="col-md-12 col-lg-10 col-lg-offset-1">

  <div id="builder"></div>

    <div class="btn-group">
      <button class="btn btn-default" disabled>Get:</button>
      <button class="btn btn-primary parse-json">JSON</button>
      <button class="btn btn-primary parse-sql" data-stmt="false">SQL</button>
      <button class="btn btn-primary parse-sql" data-stmt="question_mark">SQL statement</button>
      <button class="btn btn-primary parse-mongo">MongoDB</button>
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

<script>
	
// String Columns: Name, Address 
// Number Columns: Time, Salary
	
$('[data-toggle="tooltip"]').tooltip();

var $b = $('#builder');

var options = {
  allow_empty: true,
  
  // default_filter: 'state',
  
/*
  optgroups: {
    core: {
      en: 'Core'
    }
  },
*/

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



// set rules
$('.set').on('click', function() {
  $('#builder').queryBuilder('setRules', {
    condition: 'AND',
    flags: {
      condition_readonly: true
    },
    rules: [{
      id: 'price',
      operator: 'between',
      value: [10.25, 15.52],
      flags: {
        no_delete: true,
        filter_readonly: true
      },
      data: {
        unit: '€'
      }
    }, {
      id: 'state',
      operator: 'equal',
      value: 'AK',
    }, {
      condition: 'OR',
      flags: {
        no_delete: true
      },
      rules: [{
        id: 'category',
        operator: 'equal',
        value: 2
      }, {
        id: 'coord',
        operator: 'equal',
        value: 'B.3'
      }]
    }]
  });
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
                
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
          <!-- Javascripts -->
        <!-- Load pace first -->
        <script src="plugins/core/pace/pace.min.js"></script>
        <!-- Important javascript libs(put in all pages) -->
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
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
        <script src="plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="js/jquery.dynamic.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pages/blank.js"></script>
    </body>
</html>