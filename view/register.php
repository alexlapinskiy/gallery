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
        <h1 class="h1 text-center">Create account</h1>
        <?php if ($errors): ?>
            <div class="alert alert-danger">
                <strong>Error:&nbsp;</strong><?php echo $errors ?>
            </div>
        <?php endif; ?>
        <form action="/processRegister" method="post">
            <div class="form-group">
                <label for="login">Enter Login</label>
                <input type="text" class="form-control" id="login" name="login" value="<?php echo Application::get('session')->getFieldValue('login') ?>">
            </div>
            <div class="form-group">
                <label for="pass">Enter Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <div class="form-group">
                <label for="repass">Re-enter password</label>
                <input type="password" class="form-control" id="repass" name="repass">
            </div>
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