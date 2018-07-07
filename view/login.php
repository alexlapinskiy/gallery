<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="pub/css/bootstrap.css">
    <link rel="stylesheet" href="pub/css/main.css">
</head>
<body>
<div class="album py-5 bg-light">
    <div class="container">
        <h1 class="h1 text-center">Login</h1>
        <?php if ($errors): ?>
            <div class="alert alert-danger">
                <strong>Error:&nbsp;</strong><?php echo $errors ?>
            </div>
        <?php endif; ?>
        <form action="/processLogin" method="post">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="enter your login" value="<?php echo Application::get('session')->getFieldValue('login') ?>">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="enter your password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div> <br>
            <div class="form-group row">
                <div class="col-sm-10">
                    <a class="btn btn-outline-secondary" href="/">Back to Gallery</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>