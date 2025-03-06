<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh; position: fixed;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <span class="fs-4 text-primary fw-bold">NavetteHub</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link active" aria-current="page">
                <i class="bi bi-house-door me-2"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="/shuttles" class="nav-link text-dark">
                <i class="bi bi-bus-front me-2"></i> Shuttle Offers
            </a>
        </li>
        <li>
            <a href="/subscribers" class="nav-link text-dark">
                <i class="bi bi-people me-2"></i> Subscribers
            </a>
        </li>
        <li>
            <a href="/routes" class="nav-link text-dark">
                <i class="bi bi-geo-alt me-2"></i> Routes
            </a>
        </li>
        <li>
            <a href="/reports" class="nav-link text-dark">
                <i class="bi bi-wallet2 me-2"></i> Reports
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://via.placeholder.com/40" alt="profile" class="rounded-circle me-2">
            <strong>Company Name</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
            <li><a class="dropdown-item" href="/profile">Profile</a></li>
            <li><a class="dropdown-item" href="/settings">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Sign out</a></li>
        </ul>
    </div>
</div>