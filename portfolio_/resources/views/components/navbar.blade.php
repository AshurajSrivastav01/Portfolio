<header id="site-header" class="fixed-top transition-base">
  <nav class="navbar navbar-expand-lg px-3 px-lg-5" aria-label="Main Navigation">
    <div class="container-fluid max-w-container">

      <!-- Branding / Logo -->
      <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="#home" aria-label="Developer Portfolio Home">
        <div class="logo-mark d-flex align-items-center justify-content-center">
          <span class="font-monospace text-primary fw-bold">&lt;/&gt;</span>
        </div>
        <span class="brand-text fw-bold text-body">DevPortfolio</span>
      </a>

      <!-- Desktop Navigation Links -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav align-items-center gap-1 gap-lg-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>

      <!-- Right Action Area: CTA & Mobile Toggle -->
      <div class="d-flex align-items-center gap-3">
        <a href="#contact" class="btn btn-primary btn-sm d-none d-lg-inline-flex align-items-center gap-2 px-3 py-2">
          <span>Hire Me</span>
          <i class="bi bi-arrow-right small-icon"></i>
        </a>

        <!-- Mobile Menu Trigger -->
        <button class="navbar-toggler border-0 p-2 text-body" type="button" id="mobileMenuToggle" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list fs-4"></i>
        </button>
      </div>

    </div>
  </nav>

  <!-- Off-Canvas / Fullscreen Mobile Menu -->
  <div class="mobile-menu-overlay" id="mobileMenu" aria-hidden="true">
    <div class="mobile-menu-container d-flex flex-column h-100 p-4">
      <div class="d-flex align-items-center justify-content-between mb-5">
        <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="#home">
          <div class="logo-mark d-flex align-items-center justify-content-center">
            <span class="font-monospace text-primary fw-bold">&lt;/&gt;</span>
          </div>
          <span class="brand-text fw-bold text-body">DevPortfolio</span>
        </a>
        <button class="btn btn-ghost text-body p-2" id="mobileMenuClose" aria-label="Close navigation">
          <i class="bi bi-x-lg fs-4"></i>
        </button>
      </div>

      <ul class="navbar-nav flex-column gap-3 fs-4 mb-auto">
        <li class="nav-item"><a class="nav-link mobile-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link mobile-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link mobile-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link mobile-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link mobile-link" href="#experience">Experience</a></li>
        <li class="nav-item"><a class="nav-link mobile-link" href="#contact">Contact</a></li>
      </ul>

      <div class="pt-4 border-top border-secondary-subtle">
        <a href="#contact" class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 py-3 mobile-link">
          <span>Hire Me</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</header>
