<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Larafolio</title>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div id="app">
  @if(Session::has('flash_message'))
      <div class="alert alert-success">
          {{ session('flash_message') }}
      </div>
  @endif
  
  <header>
    <ul class="header-ul">
      <li>
        <router-link to="/">
          <h4 class="header-list">Larafolio</h4>
        </router-link>
      </li>
      <li>
        <router-link to="/about">
          <h4 class="header-list">about</h4>
        </router-link>
      </li>
      <li>
        <router-link to="/works">
          <h4 class="header-list">works</h4>
        </router-link>
      </li>
      <li>
        <router-link to="/contact">
          <h4 class="header-list">contact</h4>
        </router-link>
      </li>
    </ul>
  </header>

  <div>
    <router-view/>
  </div>

  @include('footer')
</div>

<script src="{{ mix('js/app.js') }}"></script> 
</body>
</html>