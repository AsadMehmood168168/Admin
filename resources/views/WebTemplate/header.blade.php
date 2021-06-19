<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand ms-5" href="https://localhost">
      <img
        src="{{ url('/images/MSP.JPG') }}"
        height="35"
        alt=""
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarRightAlignExample"
      aria-controls="navbarRightAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Support</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Journals Catalog</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Key Directions</a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-primary me-3">
            Login
          </button>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>

