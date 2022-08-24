{{-- topbar --}}
<div class="topnav" id="topbar">
    <a href="https://github.com/Madhaakbar" target="_blank"><i class="bi bi-github"></i></a>
    <a href="https://twitter.com/Mdhaaaa_" target="_blank"><i class="bi bi-twitter"></i></a>
    <a href="https://www.instagram.com/mdhaaaa_" target="_blank"><i class="bi bi-instagram"></i></a>
    <a href="https://www.linkedin.com/in/madha-akbar-3a1b431a4/" target="_blank"><i class="bi bi-linkedin"></i></a>
</div>
{{-- navbar --}}
<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Madha Akbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                {{-- <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"href="/">Home</a> --}}
                <ul class="list-unstyled list-navbarku">
                    <li><a class="nav-link active"href="/">Home</a></li>
                    <li><a class="nav-link" href="#project">My Project</a></li>
                    <li><a class="nav-link" href="#contact">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
