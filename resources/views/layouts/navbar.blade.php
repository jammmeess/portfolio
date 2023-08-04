@include('layouts/app')
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid" #id="navbar">
    <a class="navbar-brand mx-4 text-light" href="/">My Portfolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <img src="/img/icons/toggle.png" style="width: 30px">
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-light  ms-2" href="/about">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light  ms-2" href="/education">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light  ms-2" href="/experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light ms-2" href="/projects">Projects</a>
        </li>
        <li class=" nav-item">
          <a class="nav-link text-light " href="/contact">Contact Me</a>
        </li>
    </div>
  </div>
</nav>