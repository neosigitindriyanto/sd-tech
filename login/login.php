<?php
if (isset($_POST["submit"])) {
    // cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika benar masuk ke halaman  admin
        header('Location: ..\user\user.html');
        exit;
    } else {
        // jika salah tampilkan pesan kesalahan
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SD-Tech</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body style="background-color: #061924">
    <div class="row container w-50 m-auto mt-5">
        <div class="col justify-content-center">
            <img src="..\img\Logo White.png" alt="" height="20%" class="d-block position-relative img-fluid m-auto" />
            <form class="container d-inline position-relative d-block bg-light rounded mt-5 w-75" method="post">
                <div class="mb-3 mt-3">
                    <h1 class="text-center pt-3">Login</h1>

                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary mb-3 w-25" type="submit" name="submit" role="button">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!--  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>