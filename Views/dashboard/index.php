<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand">MyApp Dashboard</span>
            <div class="d-flex">
                <span class="navbar-text me-3">
                    Welcome, <?= esc($username) ?>!
                </span>
                <a href="<?= site_url('logout') ?>" class="btn btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="alert alert-success">
            <h4 class="alert-heading">Hello, <?= esc($username) ?>!</h4>
            <p>You have successfully logged in. This is your dashboard.</p>
        </div>
        <!-- Add more dashboard content here -->
    </div>
</body>
</html>