<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	    <meta name="generator" content="Hugo 0.84.0">
	    <title>Task Create · Bootstrap v5.0</title>
	    <!-- Bootstrap core CSS -->
		<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">


    
    	<!-- Custom styles for this template -->
    	<link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
  	</head>
  	<body class="text-center">
    
		<main class="form-signin">
		  <form method='POST'>
		  	@csrf
		  	<div class="form-floating">
		      <input type="text" name="project" value="{{$single->project}}" class="form-control" id="floatingInput" placeholder="James Bond">
		      <label for="floatingInput">Project Name</label>
		    </div>
		    <div class="form-floating">
		      <input type="text" name="describtion" value="{{$single->describtion}}" class="form-control" id="floatingInput" placeholder="name@example.com">
		      <label for="floatingInput">Describtion</label>
		    </div>

		    <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
		    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
		  </form>
		</main>    
  	</body>
</html>
