<link rel="stylesheet" href="{{ url('assets/css/navbar.css') }}" />
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="{{ url('assets/img/logo.png') }}">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">
                Home
            </a>

            <a class="navbar-item" href="/skins">
                Skins
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    More
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Chi siamo
                    </a>
                    <a class="navbar-item" href="/contact">
                        Contatti
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Segnala un problema
                    </a>
                </div>
            </div>
        </div>

            <div class="navbar-end" id="authorized-buttons">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-info" href="/account/">
                            <strong>Account</strong>
                        </a>
                        <a id="logout-button" class="button is-light">
                            Log out
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end" id="unauthorized-buttons">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-info" href="/signup">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="/login">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
    </div>
</nav>

<script src="{{ url('assets/js/navbar/navbar.js') }}" type="text/javascript"></script>