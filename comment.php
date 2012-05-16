<!DOCTYPE html>
<html>
	<head>
		<title>Comment function</title>
		<!--
		<script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
		-->
		<script src="comment.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="comment.css" />
	</head>

	
	<body>

		<h2>User Comments and Ratings</h2>
		<div id="quote">
			<?php
				$users = file("professor2.txt", FILE_IGNORE_NEW_LINES);
				foreach ($users as $user) { 
					$userinfo = explode(",", $user); 
					$name = $userinfo[0];
					$comment = $userinfo[1];
					$star = $userinfo[2]; 
				?>
				<div class="comments">					
					<div class="comment"><p><?= $comment ?></p></div>
					<div class="star"><p><?= $star ?> stars</p></div>
					<div class="reviewer"><p>--<?= $name ?></p></div>					
				</div>
				<?php
				}
			?>
		</div>
		<form action="comment-submit.php" method="post">
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
				
				<div>
					<input type="submit" name="submit" id="submit" value="Submit Comment" /> 
				</div>
			</fieldset>
		</form>
	</body>
</html>