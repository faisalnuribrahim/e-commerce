<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="{{ url('home') }}">
          Desa Loh Bener
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('home') }}">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('product') }}">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Info</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
