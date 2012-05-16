<?php
    //include('simple_html_dom.php');
	#print date("Y");
	// $_GET variables from search.php
    //$quarter
    //$name
	//$number
    
	
	// $doc = new DOMDocument();
	// $load = @$doc->loadHTMLFile($url);
	// $elements = $doc->getElementsByTagName('table');
	
	// if (!is_null($elements)) {
		// foreach ($elements as $element) {
			// echo "<br/>". $element->nodeName. ": ";
			// $nodes = $element->childNodes;
			// foreach ($nodes as $node) {
			// echo $node->nodeValue. "\n";
		// }
	  // }
	// }
	
	//$name  = "engl";
	//$number = "131";
	//$quarter = "SUM";
	//$year = "2012";
	// if($quarter == "SPR"){
		// $year++;
	// }
	//$profName = "";
	//$descriptionURL = "http://www.washington.edu/students/crscat/".$name.".html";
	//$timeURL = "http://www.washington.edu/students/timeschd/AUT2012/88milsci.html";
	
	//info($timeURL, $name, $number);
	
	//$html = file_get_html('http://www.washington.edu/students/timeschd/SPR2012/cse.html');
    //$ret = $html->find('table[bgcolor=#ccffcc] table[bgcolor=#ffcccc]');
	//info($timeURL, $name, $number);
    //print_r($html);

    //$ret = $html->find('br');
    function info($timeURL, $name, $number){
		$html = file_get_html($timeURL);
		$html = explode("<table bgcolor", $html);
		foreach($html as $table){
			if(strpos($table,$name . $number) !== false){
				print("<table bgcolor".$table);
				return true;
			}
		}
		return false;
    }

?>
