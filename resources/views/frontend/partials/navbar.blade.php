@php
    $url_path = Request::segment(1);
@endphp

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html">Uptown</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ $url_path == '' ? 'active' : '' }}">
          <a href="{{ route('index') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item {{ $url_path == 'about' ? 'active' : '' }}">
          <a href="{{ route('about') }}" class="nav-link">About</a>
        </li>
        <li class="nav-item {{ $url_path == 'agent' ? 'active' : '' }}">
          <a href="{{ route('agent.index') }}" class="nav-link">Agent</a>
        </li>
        <li class="nav-item {{ $url_path == 'services' ? 'active' : '' }}">
          <a href="{{ route('services.index') }}" class="nav-link">Services</a>
        </li>
        <li class="nav-item {{ $url_path == 'properties' ? 'active' : '' }}">
          <a href="{{ route('properties.index') }}" class="nav-link">Properties</a>
        </li>
        <li class="nav-item {{ $url_path == 'blog' ? 'active' : '' }}">
          <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
        </li>
        <li class="nav-item {{ $url_path == 'contact' ? 'active' : '' }}">
          <a href="{{ route('contact') }}" class="nav-link">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>