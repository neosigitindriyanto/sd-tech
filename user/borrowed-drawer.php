<?php
require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SD-Tech</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="..\fontawesome-free-6.1.1-web\fontawesome-free-6.1.1-web\css\all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body style="background-color: #f1f3f4">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-end mb-5">
        <div class="container container-fluid">
            <a class="navbar-brand" href="#">
                <img src="..\img\Logo White.png" alt="" width="200px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-block w-100">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-lg-end">
                        <li></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sigit Indriyanto
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="..\login\login.html">Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Container Start-->
    <div class="container">
        <h1 class="mb-5 text-center">Tools List STR-01</h1>
        <div>
            <table class="text-center table-bordered table table-light">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tools Name</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM datatools ORDER BY id DESC");
                    if (mysqli_num_rows($sql) == 0) {
                        echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
                    } else { // jika terdapat entri maka tampilkan datanya
                        $no = 1; // mewakili data dari nomor 1
                        while ($row = mysqli_fetch_assoc($sql)) { // fetch query yang sesuai ke dalam array
                            if ($row['value'] == 0) {
                                $status = "Not Available";
                            } else {
                                $status = " Available";
                            }

                            echo '
                      <tr>
                        <td scope="row">' . $no . '</td>
                        <td>' . $row['tools'] . '</td>
                        <td>' . $status . '</td>
                      </tr>
                      ';
                            $no++; // mewakili data kedua dan seterusnya
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Container End -->
</body>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>