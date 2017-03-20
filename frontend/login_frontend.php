<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/united/bootstrap.css"/>
    <title>Login form</title>
</head>
<body>
<div class="container">
    <div class="row">
        <form method="post" class="form-horizontal">
            <fieldset>
                <legend>Login</legend>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="username" id="name" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" name="login" class="btn btn-primary">Submit</button>
                    </div>
                </div>
</fieldset>
            </form>
        </div>
    </div>







