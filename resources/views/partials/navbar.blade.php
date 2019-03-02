<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">{{config('app.name', 'Plan your event')}}</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/foto/">Foto</a></li>
        <li><a href="/video/">Video</a></li>
        <li><a href="/locations/">Locations</a></li>
        <li><a href="/dashboard/">My dashboard</a></li>
        <li><a href="/posts/">Blog</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</header>