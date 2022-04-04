
<body>
    
    <nav class="navbar navbar-expand-lg navigation">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><?php echo "Hello, ", $_SESSION['user'] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Our Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Onsite Service</a></li>
                  <li><a class="dropdown-item" href="#">In shop</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
              </li>

              <?php if (isset($_SESSION['user'])): ?>
                <li class="nav-item">
                <a id="LogoutBtn" class="nav-link btn btn-dark text-white" data-bs-toggle="modal">Logout</a>
              </li>
              <?php else: ?>
                <li class="nav-item">
                <a class="nav-link btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#signin">Login</a>
              </li>
              <?php endif; ?>

            </ul>
          </div>
        </div>
      </nav>
