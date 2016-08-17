<?php

//lets check for the file
$filename = "reel.txt";
if(file_exists($filename)):
	$file = fopen($filename, 'r');
	$raw = fread($file, $length = filesize($filename));
	preg_match_all("/([\w]+\.[\w]+)/", $raw, $matches);
	$urls = $matches[0];
	//print_r($urls);
endif;


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Whois Extractor</title>
	<meta name="author" content="Emmy" >
	<meta name="date" content="2016-08-14T18:25:49+0100" >
	<meta name="copyright" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
	<meta http-equiv="content-style-type" content="text/css">
	<meta http-equiv="expires" content="0">
	<style type="text/css">
		table{background-color: #B8AEAE; width: 500px; margin: 10px auto;}
		th:nth-child(1){width: 20%;}
		th:nth-child(2){width: 40px;}
		th:nth-child(3){width: 40px;}
		tr:nth-child(odd){background-color:#A5C9EC}
		tr:nth-child(even){background-color:#D2E5F7}
		th{padding: 10px; background-color: #F1FABC; text-transform: uppercase;}
		tr{padding: 10px}
		td{padding: 10px; text-align: center;}

		<!-- form{background-color: #F1FABC; width: 500px;padding:10px 0; margin: 10px auto;border-top-right-radius: 10px;border-top-left-radius: 10px;}
		h1{font-size: 22px; text-align: center;color: #A5C9EC;text-shadow: 1px 1px #000;}
		a{text-decoration: none;}a:hover{text-decoration: underline;}
		label{width: 80%;padding: 5px 10%; margin: 10px auto;}
		input[type="number"]{padding: 10px; width: 80%; margin-left: 9%; margin-top: 10px;}
		input[type="submit"]{padding: 10px; width: 60%; margin-left: 20%; margin-top: 10px;} -->
	</style>

	<script>
			var urls = <?= json_encode($urls) ?>;
	</script>
</head>
<body>

<?php if(isset($urls)): ?>
	<table id="url-table">
		<tr><th>s/n</th><th>Domain</th><th>Phone Number</th</tr>



	</table>
<?php endif; ?>

<script>
	var interval = 1.2; //timeout in minutes
		interval = Number(interval * 1000);
	var no = (function(){ var count = 1; return function(){return count++;}})();



	var url = 501;
	var phone = 08010000000;
	var timer = setInterval("display(url, phone)",interval);




	function display(x, y)
	{
		var template = "<tr><td>"+no()+"</td><td>"+x+"</td><td>"+y+"</td></tr>";
		var elem = document.getElementById('url-table');
		elem.innerHTML = elem.innerHTML + " \n " + template;
		url++; phone++;
		if(url > 520) {clearTimeout(timer);}
	}
</script>
</body>
</html>