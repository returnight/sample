<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'sample') - 大神</title>
  <link rel="stylesheet" href="/css/app.css"
</head>
<body>
  @include('layouts._header')

  <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
  </div>
</body>
</html>
