<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style>
		#main-banner {
			position: absolute;
			padding: 0;
			width: 500px;
			height: 500px;
			overflow: hidden;
		}
		#main-banner-content-br-rj {
			float: right;
			position: absolute;
			left: 100px;
			top: 100px;
		} 
		#main-banner-content-br-sp {
			float: right;
			position: absolute;
			left: 200px;
			top: 200px;
		}  		
  </style>
  
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">

	<div id="main-banner">
		<img src="mapa.png" style="width: 100%; height: auto"></img>
		<div id="main-banner-content-br-rj">
			<img src="brasil-rj-b.png" width="20"></img>
		</div>
		<div id="main-banner-content-br-sp">
			<img src="brasil-sp-b.png" width="20"></img>
		</div>		
	</div>

    </div>
  </div>
</div>

</body>
</html>
