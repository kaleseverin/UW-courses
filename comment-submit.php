<h1>Thank you!</h1>

<?php
	$name  = trim(strtoupper($_POST['course']));
    $number = $_POST['number'];
    $quarter = $_POST['quarter'];
?>
<p><a href="search.php?quarter=<?= $quarter ?>&course=<?= $name ?>&number=<?= $number ?>">Refresh the Page</a></p>

<?php
//puts all information of the user into a string
$user = $_POST["name"].",".$_POST["comment"].",".$_POST["star"]."\n";
//appends the string at the end of professor.txt
$professor = $_POST["professor"].".txt";
if (!file_exists("comment/$name$number.txt")) {
    $fileHandle = fopen("comment/$name$number.txt", 'w');
	fclose($fileHandle);
}
chmod("comment/$name$number.txt", 0664);
file_put_contents("comment/$name$number.txt", $user, FILE_APPEND);
?>
