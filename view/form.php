<?php require_once ('src/app.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>New Image</title>
        <link rel="stylesheet" href="/pub/css/bootstrap.css">
        <link rel="stylesheet" href="/pub/css/main.css">

    </head>
    <body>
    <div class="album py-5 bg-light">
        <div class="container">
            <h1 class="h1 text-center">Upload New Image</h1>
            <?php if ($errors = getErrors()): ?>
                                <div class="alert alert-danger">
                                        <strong>Error:&nbsp;</strong><?php echo $errors ?>
                                </div>
            <?php endif; ?>
            <form action="/submit" method="post" enctype="multipart/form-data">
                <label for="authorname"> Author Name</label>
                <input type="text" class="form-control" id="authorname" name="authorname"><br/>
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea><br/>
                <label for="image">Select image</label>
                <input type="file" class="form-control" id="image" name="image"><br/>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a class="btn btn-light" href="/">Back to Gallery</a>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </div>

            </form>



    </body>
</html>