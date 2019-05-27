<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('page_title') - JOBALLATION</title>
  <link rel="stylesheet" href="\css\app.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="icon" href="\images\favicon.ico">
</head>
<body>
    @include('inc.navbar')
  <div class="mt-5 container-fluid main_container flex-grow-1 px-lg-5">
      @yield('content')
  </div>
  <script src="\js\app.js"></script>
</body>
</html>