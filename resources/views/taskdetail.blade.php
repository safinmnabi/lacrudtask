<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Task</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">



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
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Foxdos</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="/logout">Sign out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span data-feather="home"></span>
                  Home
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <a href="/taskcreate/{{$pid}}" class="btn btn-sm btn-outline-secondary">Create</a>
              </div>
            </div>
          </div>

          <h2>Task Data</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Project Name</th>
                  <th scope="col">Describtion</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              	@foreach ($data as $user)
    			<tr>
                  <td>{{$user->project}}</td>
                  <td>{{$user->describtion}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                      <a href="/detail/{{$user->id}}" class="btn btn-sm btn-success">View</a>
                      <a href="/taskedit/{{$user->pid}}/{{$user->id}}" class="btn btn-sm btn-warning">Edit</a>
                      <a href="/taskdelete/{{$pid}}/{{$user->id}}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                  </td>
                </tr>
				@endforeach
                
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>


    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/css/dashboard.js')}}"></script>
  </body>
</html>
