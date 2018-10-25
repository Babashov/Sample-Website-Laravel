<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="/">Sample Website Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item {{Request::is('messages') ? 'active' : ''}}">
          <a class="nav-link" href="/messages">Messages</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>