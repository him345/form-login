<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center"> <h2>General Information</h2></div>
                    <div class="card-body">
                        <form action="../process/register-process.php" method="post">
                            <label for="username">username:</label>
                            <input type="text" name="username" id="username" class="form form-control"> 
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form form-control">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form form-control">
                            <label for="text">Message:</label>
                            <textarea name="text" id="text" cols=41 rows="3"></textarea>
                            <button class="btn btn-danger float-right mt-1 btn-block" name="register1">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>