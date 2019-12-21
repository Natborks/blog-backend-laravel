<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Dashboard</title>

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template-->
  <link href="css/blog.css" rel="stylesheet">



      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

</head>


<div class="container-fluid col-md-9">
    <header class="blog-header py-3 top-buffer-large">
        <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4">
        <a class="blog-header-logo text-dark" href="#">NAT BK</a>
      </div>

        </div>
      </header>

      <div class=" py-1 mb-2">
        <nav class="nav d-flex text-centre">
          <a class="nav-item p-2 text-muted" href="{{ url('/home') }}">Home</a>
          <a class="nav-item p-2 text-muted" href="{{ url('/blog') }}">Blog</a>
          <a class="nav-item p-2 text-muted" >Resume</a>
          <a class="nav-item p-2 text-muted" href="#">Contributors</a>
        </nav>
      </div>
</div>



<main role="main" class="container-fluid col-md-9">
    @yield('content')
</main>

<div class="container-fluid col-md-9 top-buffer-small">

  <hr>
  <footer class="container max-w-xl px-4 md:px-8 mx-auto border-t border-grey py-6 mt-6 text-center text-sm sm:text-base">
      <p>
        &copy; 2019 Nathanael Boketey-Kwaku &nbsp;&bull;&nbsp;
        <a href="http://twitter.com/natborks">@natborks</a> &nbsp;&bull;&nbsp; 
        <a href="/blog/feed.atom">RSS</a> &nbsp;&bull;&nbsp; Like what I write? Send me an email 
        &amp; we can work together
      </p>
  </footer>
  <br>
  <br>
</div>
