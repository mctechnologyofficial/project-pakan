<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">Milky</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="{{ route('transaction.invoice') }}" class="nav-item nav-link">Invoice</a>
            <a href="service.html" class="nav-item nav-link">Services</a>
            <a href="product.html" class="nav-item nav-link">Products</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="gallery.html" class="dropdown-item">Gallery</a>
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            @guest
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <a href="javascript:void(0)" class="nav-item nav-link" id="hreflogout">Logout</a>
                    <button type="submit" class="d-none" id="logout"></button>
                </form>
            @endauth
        </div>
        <div class="border-start ps-4 d-none d-lg-block">
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
        </div>
    </div>
</nav>