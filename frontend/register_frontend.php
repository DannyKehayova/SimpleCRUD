<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/united/bootstrap.css"/>
    <title>Register form</title>
</head>
<body>
<div class="container">
    <div class="row">
    <form method="post" class="form-horizontal">
        <fieldset>
            <legend>Register</legend>
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <label for="pass" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" name="password" id="pass" placeholder="Password">
                </div>
            </div>

            <div class="form-group">
                <label for="firstName" class="col-lg-2 control-label">First name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="first_name" id="firstName" placeholder="First name">
                </div>
            </div>

            <div class="form-group">
                <label for="secondName" class="col-lg-2 control-label">Second name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="second_name" id="secondName" placeholder="Second name">
                </div>
            </div>

            <div class="form-group">
                <label for="secondName" class="col-lg-2 control-label">Third name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="third_name" id="thirdName" placeholder="Third name">
                </div>
            </div>

            <div class="form-group">
                <label for="age" class="col-lg-2 control-label">Your Age</label>
                <div class="col-lg-10">
                    <input type="number" class="form-control" name="age" id="age" placeholder="Age">
                </div>
            </div>


            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" name="register" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
</div>
</body>
</html>

