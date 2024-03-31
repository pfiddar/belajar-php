<!-- product variable -->
<?php
    $product = [[
        "id" => 1,
        "nama" => "Chessecake",
        "harga" => "Rp. 20.000",
        "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing"
    ],
    [
        "id" => 2, 
        "nama" => "Choco Muffin",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj66Y47aMrlY3zLZYnOPnK-gFp7q4ucupD-w&usqp=CAU",
        "harga" => "Rp. 10.000",
        "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing"
    ],
    [
        "id" => 3, 
        "nama" => "Chiffon Cake",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGtFHiPO61y9cO5KEzI5ksSborCuCEe-7R5Q&usqp=CAU",
        "harga" => "Rp. 25.000",
        "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing"
    ],
    [
        "id" => 4, 
        "nama" => "Croissant",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQq86INfgcDFfiaMYw8768L-3eEBhpXV0sGxQ&usqp=CAU",
        "harga" => "Rp. 20.000",
        "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing"
    ],
    [
        "id" => 5, 
        "nama" => "Strawberry Chessecake",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIAG4LfhcfWMXcOeVzq6Yhe-jrg3jy-_Y6Ow&usqp=CAU",
        "harga" => "Rp. 45.000",
        "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing"
    ],
    [
        "id" => 6, 
        "nama" => "Nutella Stuffed Cookies",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUAIG8yEoS1BmkZ0crgEsAAvcvapl9aSjf_A&usqp=CAU",
        "harga" => "Rp. 15.000",
        "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing"
    ],
    [
        "id" => 7, 
        "nama" => "Biscoff Stuffed Cookies",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnBHEMDvWEtoRoO8Y624aSyK2fygrS9k6iSw&usqp=CAU",
        "harga" => "Rp. 15.000",
        "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing"
    ],
];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/product-style.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title>Tugas 11 | Product</title>
</head>
<body class="sidebar-mini">
    <div class="wrapper">
        <!-- nav -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- left nav side -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-widget="pushmenu" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-tone d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-tone d-sm-inline-block">
                    <a href="#" class="nav-link">About</a>
                </li>
            </ul>
            <!-- right nav side -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-widget="navbar-search" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block" style="display: none;">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input type="search" class="form-control  form-control-navbar" placeholder="Search..." aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- logo -->
            <a class="brand-link" href="#">
                <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Tugas 11</span>
            </a>
            <!-- sidebar -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="newproduct.php" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Product List
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Login Page</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <!-- content header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Product List</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a href="newproduct.php">Product List</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content -->
            <div class="content">
                <div class="row"  id="content">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/adminlte.min.js"></script>
    <script src="assets/api-product.js"></script>

</body>
</html>