<!DOCTYPE HTML5>
<html>
    <head>
        <link href="index.css" type="text/css" rel="stylesheet"/>
        <link rel="shortcut icon" href="images/uwfavicon.jpeg" type="image/x-icon">
        <script src="https://ajax.googleipis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
        <script src="kaleJS.js" type="text/javascript"></script>
		<script src="gen_validatorv4.js" type="text/javascript"></script>
        <title>Course Checker</title>
    </head>
<body>
	<div id = "banner">
			<img src="images/banner1.jpg" /> </a>
	</div>
	
	<div id="header">
    </div>
	<div id = "number">
			<?php #$num = rand (9000,9999); ?>
			<h1> <?#=$num?> </h1>
	</div>
	<div id= "layout">
		<h2>Select course:</h2>
	    
        <form id="myform" action="search.php" method="get" >
	   		<div class="searchbar">
	   			<label><input type="radio" name="quarter" value="SPR" />Spring</label>
                <label><input type="radio" name="quarter" value="SUM" />Summer</label>
                <label><input type="radio" name="quarter" value="AUT" />Autumn</label>
                <label><input type="radio" name="quarter" value="WIN" />Winter</label>
	   		</div>
			<div class="searchbar">
                Course Abbreviation
	        	<input type="text" name="course" size="10" /> 
                Course Number
	        	<input type="text" name="number" size="10" /> 
	        	<input type="submit" value="Search Course" />
	    	</div>
	    </form>
		<script type="text/javascript">
		var frmvalidator  = new Validator("myform");
		frmvalidator.addValidation("course","req","Please enter your Course Name");
		frmvalidator.addValidation("course","alphabetic","Please enter the right Course Name");
		frmvalidator.addValidation("course","req","Please enter your Course Number");
		frmvalidator.addValidation("number","numeric","Please enter the right Course Number");
	</script>
	</div>
    <div id="footer">
<pre>Copyright &copy; YUXUAN XUE
at CSWiz club, 
University of Washington.</pre>
    </div>
</body>
</html>
