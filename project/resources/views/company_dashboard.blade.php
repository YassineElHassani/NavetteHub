<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Pulse Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/css/dashboard_style.css') }}">
</head>
<body>

    <div id="sidebar">
        <h4><i class="fas fa-chart-line"></i> Company Pulse</h4>
        <ul class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> Employees</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-project-diagram"></i> Projects</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> Reports</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-cog"></i> Settings</a>
        </ul>
    </div>

    <div id="content">
        <h2>Welcome to Your Dashboard</h2>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-friends"></i> Total Employees</h5>
                        <p class="card-text">220</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-tasks"></i> Active Projects</h5>
                        <p class="card-text">38</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-dollar-sign"></i> Monthly Revenue</h5>
                        <p class="card-text">$85,000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3><i class="fas fa-history"></i> Recent Activities</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Activity</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-user-plus"></i> New employee: Jane Smith</td>
                        <td>2023-10-27</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-calendar-check"></i> Project "Alpha" milestone completed</td>
                        <td>2023-10-26</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-invoice-dollar"></i> Invoice #1234 sent to client</td>
                        <td>2023-10-25</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>