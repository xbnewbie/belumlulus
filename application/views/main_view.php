<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Infinite Scroll Testing</title>
  <meta name="author" content="Belum Lulus">
	<link type="text/css" rel="stylesheet" media="all" href="assets/style.css">
	<script type="text/javascript" src="assets/jquery.min.js"></script>
	<script type="text/javascript" src="assets/jquery.infinitescroll.js"></script>
	<script type="text/javascript" src="assets/manual-trigger.js"></script>
</head>

<body> 
	<div class="header">
  <h1 class="header__content-text">
   
   <a href='' style='background-color: green' title="Mahasiswa Paling Lama">MAPALA  </a>
   <a href='' style='background-color: #f44336;' title="God Bless You">Hampir DO  </a>
      <a href='' style='background-color: #f44336;' title="Rest In Peace">DO  </a>
      
  </h1>
</div>
	
	
	<div id="content">
	
		  <p>Main Utama</p>
		 <?php
		 if(!empty($post))
		 {
			foreach($post as $p)
			{
				echo "<div id='judul_gambar'>";
				echo $p->judul ." </div>
				<br>";
				echo "<div id='gambar'>
					<img src='file/".$p->file."'>
					
				</div>
				
				";
				 
			}
		 }
		 ?>
		
			
	</div>
	<a id="next" href="index.php">next page?</a>


<script type="text/javascript">
$(document).ready(function(){
	$('#content').infinitescroll({
		navSelector: "#next:last",
		nextSelector: "#next:last",
		itemSelector: "#content",
		debug: false,
		dataType: 'html',
    maxPage: 1006,
		path: function(index) {
			return "index.php/main/load_post?id=" + index ;
		}
		// appendCallback	: false, // USE FOR PREPENDING
    }, function(newElements, data, url){
      // used for prepending data
    	// $(newElements).css('background-color','#ffef00');
    	// $(this).prepend(newElements);
    });
});
</script>


</body>
</html>
