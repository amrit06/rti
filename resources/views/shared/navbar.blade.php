<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name', 'rti') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/service">Service</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right" style="right: 0">
                <li><a href="/blog/create">Create Blog</a></li>
            </ul>
        </div>
    </div>

</nav>
