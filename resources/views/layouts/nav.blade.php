<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My cars</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="{{request()->is('/') ? 'active' : ''}} nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="{{request()->is('cars') ? 'active' : ''}} nav-link" href="/cars">Cars</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
