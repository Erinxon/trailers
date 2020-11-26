<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
    <a class="navbar-brand" href="#">Trailers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="{{ setActive('register') }}">
                <a class="nav-link" href="/register">
                    Sign Up
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="{{ setActive('login') }}">
                <a class="nav-link" href="/login">
                    Login</a>
            </li>
        </ul>
    </div>
</nav>
