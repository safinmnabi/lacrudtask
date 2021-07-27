<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	    <meta name="generator" content="Hugo 0.84.0">
	    <title> Data Create · Bootstrap v5.0</title>
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
		      <input type="text" name="fname" value="{{$single->fname}}" class="form-control" id="floatingInput" placeholder="James Bond">
		      <label for="floatingInput">Fullname</label>
		    </div>
		    <div class="form-floating">
		      <input type="text" name="job" value="{{$single->job}}" class="form-control" id="floatingInput" placeholder="Engineer">
		      <label for="floatingInput">Job</label>
		    </div>
		    <div class="form-floating">
		      <input type="text" name="mobile" value="{{$single->mobile}}" class="form-control" id="floatingPassword" placeholder="number">
		      <label for="floatingPassword">Mobile</label>
		    </div>

		    <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
		    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
		  </form>
		</main>    
  	</body>
</html>
