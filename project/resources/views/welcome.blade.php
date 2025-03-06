@extends('layout')
@section('title', 'NavetteHub | Home')

@section('content')
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-3">Connect Your Journey</h1>
                <p class="lead mb-4">Find and subscribe to shuttle services between cities or request new routes that
                    match your commuting needs.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="" class="btn btn-light btn-lg px-4 me-md-2">
                        <i class="bi bi-search me-2"></i>Find Shuttles
                    </a>
                    <a href="{{route('register')}}" class="btn btn-outline-light btn-lg px-4">
                        <i class="bi bi-person-plus me-2"></i>Join Today
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                <img src="https://i.ibb.co/Txwh11jf/travel.png" alt="Bus illustration" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <h3 class="card-title text-center mb-4">Find Your Shuttle</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-5">
                                    <label for="departure" class="form-label">Departure City</label>
                                    <select class="form-select" id="departure" required>
                                        <option value="" selected disabled>Select departure city</option>
                                        <option value="casablanca">Casablanca</option>
                                        <option value="rabat">Rabat</option>
                                        <option value="marrakech">Marrakech</option>
                                        <option value="agadir">Agadir</option>
                                        <option value="tangier">Tangier</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="arrival" class="form-label">Arrival City</label>
                                    <select class="form-select" id="arrival" required>
                                        <option value="" selected disabled>Select arrival city</option>
                                        <option value="casablanca">Casablanca</option>
                                        <option value="rabat">Rabat</option>
                                        <option value="marrakech">Marrakech</option>
                                        <option value="agadir">Agadir</option>
                                        <option value="tangier">Tangier</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="searchButton" class="form-label d-block">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary w-100" id="searchButton">
                                        <i class="bi bi-search me-2"></i>Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Why Choose NavetteHub?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div
                            class="feature-icon bg-primary bg-gradient text-white mb-3 d-inline-flex p-3 rounded-circle">
                            <i class="bi bi-calendar2-check fs-3"></i>
                        </div>
                        <h4>Regular Subscriptions</h4>
                        <p class="text-muted">Subscribe to regular shuttle services between cities with guaranteed
                            seating for your daily commute.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div
                            class="feature-icon bg-primary bg-gradient text-white mb-3 d-inline-flex p-3 rounded-circle">
                            <i class="bi bi-people fs-3"></i>
                        </div>
                        <h4>Community Requests</h4>
                        <p class="text-muted">Request new routes and see how many others are interested in the same
                            journey.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div
                            class="feature-icon bg-primary bg-gradient text-white mb-3 d-inline-flex p-3 rounded-circle">
                            <i class="bi bi-building fs-3"></i>
                        </div>
                        <h4>For Transport Companies</h4>
                        <p class="text-muted">Create and manage your shuttle offers, view demand, and optimize your
                            routes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Popular Routes</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Casablanca ↔ Rabat</h5>
                            <span class="badge bg-success rounded-pill">15 offers</span>
                        </div>
                        <div class="d-flex justify-content-between text-muted small mb-2">
                            <span><i class="bi bi-clock me-1"></i>1h journey</span>
                            <span><i class="bi bi-people me-1"></i>250+ subscribers</span>
                        </div>
                        <p class="card-text">Daily shuttle services with multiple departure times between Morocco's
                            economic capital and the administrative capital.</p>
                        <a href="#" class="btn btn-outline-primary">View Offers</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Rabat ↔ Marrakech</h5>
                            <span class="badge bg-success rounded-pill">8 offers</span>
                        </div>
                        <div class="d-flex justify-content-between text-muted small mb-2">
                            <span><i class="bi bi-clock me-1"></i>3h journey</span>
                            <span><i class="bi bi-people me-1"></i>180+ subscribers</span>
                        </div>
                        <p class="card-text">Connect between the administrative center and the tourism hub with
                            comfortable coach services.</p>
                        <a href="#" class="btn btn-outline-primary">View Offers</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Tangier ↔ Casablanca</h5>
                            <span class="badge bg-success rounded-pill">12 offers</span>
                        </div>
                        <div class="d-flex justify-content-between text-muted small mb-2">
                            <span><i class="bi bi-clock me-1"></i>3.5h journey</span>
                            <span><i class="bi bi-people me-1"></i>200+ subscribers</span>
                        </div>
                        <p class="card-text">Regular services connecting the northern port city with the business hub,
                            featuring executive coaches.</p>
                        <a href="#" class="btn btn-outline-primary">View Offers</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/shuttles" class="btn btn-primary">Browse All Routes</a>
        </div>
    </div>
</div>

<div class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2>Ready to start your shuttle subscription?</h2>
                <p class="lead mb-0">Join thousands of commuters who have simplified their regular travel.</p>
            </div>
            <div class="col-lg-4 mt-3 mt-lg-0 text-lg-end">
                <a href="{{route('register')}}" class="btn btn-light btn-lg">Get Started Now</a>
            </div>
        </div>
    </div>
</div>
@endsection