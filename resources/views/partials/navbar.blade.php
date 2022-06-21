<nav class="navbar navbar-expand-lg navbar-dark warna1">
    <div class="container">
      <a class="navbar-brand" href="/">Laravel-8</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $active == "home" ? "active" : "" }}" href="/">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link {{ $active == "about" ? "active" : "" }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == "posts" ? "active" : "" }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Explore Post
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/posts">All Posts</a></li>
              <li><a class="dropdown-item" href="/authors">Authors</a></li>
              <li><a class="dropdown-item" href="/categories">Categories</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/login">
              <button class="btn btn-light">Login</button>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>