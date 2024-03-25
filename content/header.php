<?php
    echo"
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <nav class='navbar navbar-expand-lg bg-body-tertiary'>
      <div class='container-fluid'>
        <a class='navbar-brand' href='#'>
          <img src='content/a.png' alt='AI' width='50' height='50' style='border-radius: 100%;'>
        </a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
            <li class='nav-item'>
              <a class='nav-link active' aria-current='page' href='index.php'>Home</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link active' href='about.php'>About</a>
            </li>
            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle active' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                Category
              </a>
              <ul class='dropdown-menu'>
                <li><a class='dropdown-item' href='#'>Action</a></li>
                <li><a class='dropdown-item' href='#'>Another action</a></li>
                <li><hr class='dropdown-divider'></li>
                <li><a class='dropdown-item' href='#'>Something else here</a></li>
              </ul>
            </li>
            <li class='nav-item'>
              <a class='nav-link active' href='contact.php'>Contact</a>
            </li>
          </ul>
          <div class='d-flex align-items-center'>   
            <!-- The form -->
            <form class='example'>
              <input type='text' placeholder='Search' name='search'>
              <button type='submit'><i class='fa fa-search'></i></button>
            </form>
            <button data-mdb-ripple-init type='button' class='btn'data-toggle='modal' data-target='#loginmodal'>
              Login
            </button>
            <button data-mdb-ripple-init type='button' class='btn btn-primary me-3'data-toggle='modal' data-target='#signupmodal'>
              Sign up
            </button>
                  </div>
        </div>
      </div>
    </nav>
    ";
  include 'loginmodal.php';
  include 'signupmodal.php';

?>