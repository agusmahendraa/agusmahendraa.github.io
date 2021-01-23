<!DOCTYPE html>
<head>
<title>bernie meme</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<?php
$link = $_SERVER['REQUEST_URI']; 
$searchTerm = $_POST['search'];
$result = preg_replace("/[^a-zA-Z]/", "", $searchTerm);
$ch = curl_init("https://unsplash.com/s/photos/$result/");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

// menampilkan

$dom = new DOMDocument;
libxml_use_internal_errors($result);
$dom->loadHTML($result);
$tags = $dom->getElementsByTagName('img');
?>

<style type="text/css">
    .bali { 
    	width: 640px;
        height: 640px;
        margin : 16px;
	}
</style>

<img style="width: 300px; height: 300px; position : absolute; left: 38%; top: 46%; position : fixed;" src="https://i.ibb.co/mC8g4Y2/bgsanders.png">

<div class="d-flex align-items-center justify-content-start p-3 bg-light text-white flex-column" style="height: 100%;">  
<button onclick="window.location.href='index.html'" class="btn btn-dark">Back</button>
<small class="text-secondary text-center">Let's Bring Bernie Wherever you Want || Buy me a coffee <a href="https://www.buymeacoffee.com/damnitsawful">Here !</a></small>
	<div class="p-2" >
	 	<?php
			for($i = 2; $i < $tags ->length; $i++) {
			$grab = $tags->item($i);
			echo "<img class='d-flex justify-content-center bali' src=" . $grab->getAttribute('src')."/>";
			}
			?>
    </div>     
 </div>
</body>
</html>



