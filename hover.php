<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0"> 
	<link href= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity= 
"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
		crossorigin="anonymous"> 
	<script src= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity= 
"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script> 

	<style> 
		.dropdown:hover .dropdown-menu { 
			display: block; 
		} 

		.dropdown { 
			margin-left: 40rem; 
			margin-right: 40rem; 

		} 

		.name { 
			text-align: center; 
			color: green; 
		} 
	</style> 
	<title>Document</title> 
</head> 

<body> 
	<h1 class="name">GeeksforGeeks</h1> 
	<div class="dropdown"> 
		<a class="btn btn-secondary dropdown-toggle"
			href="#"
			role="button" id="dropdownMenuLink"
			data-bs-toggle="dropdown"
			aria-expanded="false"> 
			Dropdown link 
		</a> 

		<ul class="dropdown-menu"
			aria-labelledby="dropdownMenuLink"> 
			<li><a class="dropdown-item" href="#"> 
				Action 
				</a> 
			</li> 
			<li><a class="dropdown-item" href="#"> 
				Another action 
				</a> 
			</li> 
			<li><a class="dropdown-item" href="#"> 
				Something else here 
			</a> 
		</li> 
		</ul> 
	</div> 

	<script> 
		$(document).ready(function () { 
			$('.dropdown').hover(function () { 
				$(this).addClass('show'); 
				$(this).find('.dropdown-menu').addClass('show'); 
			}, function () { 
				$(this).removeClass('show'); 
				$(this).find('.dropdown-menu').removeClass('show'); 
			}); 
		}); 
	</script> 
</body> 

</html>
