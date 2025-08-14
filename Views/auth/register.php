<?php if (isset($validation)): ?>
    <div class="alert alert-danger">
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-2 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Register</h3>
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= esc(session()->getFlashdata('error')) ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= esc(session()->getFlashdata('success')) ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= site_url('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="pass_confirm" class="form-label">Confirm Password</label>
                                <input type="password" name="pass_confirm" id="pass_confirm" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Register</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="<?= site_url('login') ?>">Already have an account? Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>