<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Log in</h1>
    <form class="row g-3 needs-validation" action="/login/checkuser.php" method="POST">
        <div class="col-md-12">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="email" name="uname" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            </div>
        </div>


        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" id="validationCustom01" value="Mark" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</body>

</html>