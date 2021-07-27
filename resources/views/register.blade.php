<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	    <meta name="generator" content="Hugo 0.84.0">
	    <title>Register · Bootstrap v5.0</title>
	    <!-- Bootstrap core CSS -->
		<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- {{ URL::asset('js/scrollTo.js'); }} -->

	    <style>
	      .bd-placeholder-img {
	        font-size: 1.125rem;
	        text-anchor: middle;
	        -webkit-user-select: none;
	        -moz-user-select: none;
	        user-select: none;
	      }

	      @media (min-width: 768px) {
	        .bd-placeholder-img-lg {
	          font-size: 3.5rem;
	        }
	      }
	    </style>

    
    	<!-- Custom styles for this template -->
    	<link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
  	</head>
  	<body class="text-center">
    
		<main class="form-signin">
		  <form method='POST'>
		  	@csrf
		    <h1 class="h3 mb-3 fw-normal">Please Register</h1>

		    <div class="form-floating">
		      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
		      <label for="floatingInput">Email address</label>
		    </div>
		    <div class="form-floating">
		      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
		      <label for="floatingPassword">Password</label>
		    </div>

		    <div class="checkbox mb-3">
		      <label>
		        <input type="checkbox" value="remember-me"> Remember me
		      </label>
		    </div>
		    <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
		  </form>
		  <a href="/" class="mt-3 w-100 btn btn-lg btn-success" type="submit">Sign In</a>
		    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>

		</main>    
  	</body>
</html>
