<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md4 col-md-offset" style="margin-top: 20px">
                <h4>Registration</h4>
                <form action="{{ route('register') }}" method="post">

                    @csrf
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" placeholder="Your First Name" name="first_name">
                    </div>

                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" placeholder="Your Last Name" name="last_name">
                    </div>

                    <div class="form-group">
                        <label for="username">Username/Email</label>
                        <input type="text" class="form-control" placeholder="Enter Username/Email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate">
                    </div>
                    
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" name="password">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <br>

                    <a href='login'>Log in</a>
                </form>
            </div>
        </div>

    </div>
</body>
</html>