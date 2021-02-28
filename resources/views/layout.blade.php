<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-white" href="/">Home</a>
    <a class="p-2 text-white" href="about">About me</a>
    <a class="p-2 text-white" href="skills">Skills </a>
    <a class="p-2 text-white" href="blog">Blog</a>
  </nav>
  <a class="btn btn-warning" href="#">Sign up</a>
</div>
<div class="container">

@yield('main-content')

</div>

</body>
</html>