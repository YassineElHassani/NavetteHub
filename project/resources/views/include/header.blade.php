<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            <i class="bi bi-bus-front me-2"></i>NavetteHub
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">
                        <i class="bi bi-house-door me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shuttles">
                        <i class="bi bi-calendar2-check me-1"></i>Browse Shuttles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/request">
                        <i class="bi bi-plus-circle me-1"></i>Request Route
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="companyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-building me-1"></i>For Companies
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                        <li><a class="dropdown-item" href="add-shuttle.html">Add Shuttle</a></li>
                        <li><a class="dropdown-item" href="manage-shuttles.html">Manage Shuttles</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="view-requests.html">View Requests</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">
                        <i class="bi bi-info-circle me-1"></i>About
                    </a>
                </li>
            </ul>

            <form class="d-flex me-2">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search shuttles..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>

            <div class="d-flex">
                <a href="/login" class="btn btn-outline-light me-2">
                    <i class="bi bi-box-arrow-in-right me-1"></i>Login
                </a>
                <a href="/register" class="btn btn-light">
                    <i class="bi bi-person-plus me-1"></i>Register
                </a>
            </div>
        </div>
    </div>
</nav>