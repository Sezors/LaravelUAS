<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"/> -->
	<title>
		shopping cart with javascript using local storage -- fullyworld web tutorials
	</title>
	<link rel="stylesheet" href="index.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<script>

		function Delete(e){
			let items = [];
			JSON.parse(localStorage.getItem('items')).map(data=>{
				if(data.id != e.parentElement.parentElement.children[0].textContent){

					items.push(data);

				}
			});
			localStorage.setItem('items',JSON.stringify(items));
			window.location.reload();
		};
	</script>
</head>
<body>

    @include('components.navbar')

	 @yield('content')
     
</body>
</html>