<!DOCTYPE HTML5>
<html>
    <head>
        <title>Course Checker</title>
        <link href="search.css" type="text/css" rel="stylesheet" />
		<link rel="shortcut icon" href="Images/uwfavicon.jpeg" type="image/x-icon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
        <script src="kaleJS.js" type="text/javascript"></script>
		<script src="gen_validatorv4.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="comment.css" />
</head>
<body>
    <?php
        $name  = trim(strtolower($_GET['course']));
        $number = $_GET['number'];
        $quarter = $_GET['quarter'];
		$year = date("Y");
        $profName = "";
        $descriptionURL = "http://www.washington.edu/students/crscat/".$name.".html";
        $timeURL = "http://www.washington.edu/students/timeschd/".$quarter.$year."/".$name.".html";
        include('simple_html_dom.php');
        include('description.php');
        include('array.php');


    ?>
	<div id = "banner">
			<a href="http://students.washington.edu/cswiz/course"><img src="Images/banner1.jpg" /></a>
	</div>
	<div id="header">
    </div>
	<div id = "number">
			<?php# $num = rand (9000,9999); ?>
			<h1> <?#=$num?> </h1>
	</div>
	<div id="layout">
	    	<div id="maincontent">
	            <h2>
                    <?php $title = strtoupper($name) ?>
                    <?=$title ?>
                    <?=$number ?>

	            </h2>
	            <hr />
	            <div id="prof">
	                
	            <ul>   
	               	<li>Name:</li>
	                <li>Email:</li>
	                <li>Phone:</li>
	            </ul>
	            </div>
	            <h2>
	                Course Description
	            </h2>
	            <div id="description">
                    <?php 
					$fp = @fopen($descriptionURL, 'r');
						if($fp){	
							$find = description($descriptionURL, $name, $number);
							if(!$find){
								echo 'Sorry, dude, the course is not exsit in this quarter.';
							}
						}else{
							echo 'dude, are you sure that you typed the right course information?';
						}	
					?>
	            </div>
	            <h2>
	            	Course Information
	            </h2>
	            <div id="info">
					<?php 
					$fp = @fopen($timeURL, 'r');
						if($fp){	
							$find = info($timeURL, $name, $number);
							if(!$find){
								echo 'Sorry, dude, the course is not exsit in this quarter.';
							}
						}else{
							echo 'dude, are you sure that you typed the right course information?';
						}	
					?>
	            </div>


	            <h2>
	                Comments
	            </h2>


	            <div id="quote">
					<?php
					$name=strtoupper($name);
					if (!file_exists("comment/$name$number.txt")) {
					?>
						<div class="comments">					
							<div class="comment"><p>Sorry, No reviews about this course.  
							You can add a comment below</p></div>					
						</div>
					<?php
					} else {
						$users = file("comment/$name$number.txt", FILE_IGNORE_NEW_LINES);
						foreach ($users as $user) { 
							$userinfo = explode(",", $user); 
							$name = $userinfo[0];
							$comment = $userinfo[1];
							$star = $userinfo[2]; 
						?>
						<div class="comments">					
							<div class="comment"><p><?= $comment ?></p></div>
							<div class="star"><p><?= $star ?> stars</p></div>
							<?php
							for ($i = 0; $i < intval($star); $i++) {
							?>
                            <img src="images/star.png" width="10" height="10" alt="star" />
								<?php
							}
							?>
							<div class="reviewer"><p>--<?= $name ?></p></div>					
						</div>
						<?php
						}
					}
					?>
				</div>
	            <h2>
	                Add Comments:
	            </h2>
	            <div id="Comment">
                    <form id="comment" action="comment-submit.php" method="post">
						<fieldset>
							<legend>Add Your Comment!</legend>
							
							<div>
								Your Name<input type="text" name="name" id="name" />
							</div>
							
							<div>Your Comment:
								<textarea name="comment" rows="10" cols="50" id="comment"></textarea>
							</div>	
							
							<div>
								Rate Your Professor:
								<select name="star" id="star">
									<option value="no rating" checked="checked"></option>
									<option value="5">5</option>
									<option value="4">4</option>
									<option value="3">3</option>
									<option value="2">2</option>
									<option value="1">1</option>
								</select>
								stars
							</div>
							
							<input type="hidden" name="professor" value="professor" />
							<input type="hidden" name="quarter" value="<?= $quarter ?>" />
							<input type="hidden" name="course" value="<?= $name ?>" />
							<input type="hidden" name="number" value="<?= $number ?>" />
							
							<div>
								<input type="submit" name="submit" id="submit" value="Submit Comment" /> 
							</div>
							
						</fieldset>
					</form>
					<script type="text/javascript">
					var frmvalidator  = new Validator("comment");
					frmvalidator.addValidation("name","req","Please enter your Course Name");
					frmvalidator.addValidation("name","alphabetic","Please enter the valid Name");
					frmvalidator.addValidation("comment","req","comment area is required");
					frmvalidator.addValidation("star","req","Please select a star");
					</script>
	            </div>
			</div>
         </div>
    </body>
</html>
