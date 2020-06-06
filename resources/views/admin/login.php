<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <title>Admin-<?= config('app.name') ?></title>
</head>

<body>
<div class="dashboard-main-wrapper">
    <h2 class="text-center p-5">Login</h2>
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <form method="post">
                <div class="form-group">
                    <label for="login">login</label>
                    <input type="text" name="login" class="form-control" id="login" aria-describedby="emailHelp"
                           placeholder="login">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your login with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>