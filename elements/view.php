<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lorem PHP Framework |  Documentation</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/css/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/loremcss.css">
    <!-- Logo  -->
    <link rel="shortcut icon" type="" href="assets/img/logo/lorem-logo.png">

    <style>
        .nav-link{
            color: #fff !important;
        }
        .nav-link.active{
            background-color: #00bf63 !important ;
            color: #000 !important;
        }

        code {
            position: relative;
            display: block;
            color: #ffffff !important;
            padding-top: 5px;
            padding-left: 20px; /* Add padding for the macOS-like window controls and copy icon */
            margin-top: 20px;
            font-family: monospace, sans-serif !important;
            background-color: #252a37 !important;
            border-radius: 5px;
            height: 31px;
        }

        /* Add macOS-like window controls */
        .dot-title::before {
            content: "";
            position: absolute;
            top: 23px;
            left: 5px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #fc615d; /* Red */
        }

        .dot-title::before{
            box-shadow: 15px 0 #fdbc40, 30px 0 #34c749;
            margin-left: 10px;
        }

        /* Add macOS-like window controls */
        .dot::before {
            content: "";
            position: absolute;
            top: 10px;
            left: 5px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #fc615d; /* Red */
        }

        /* Add the copy icon */
        code::after {
            content: attr(data-icon);
            /* Get the data-icon attribute value for the Font Awesome icon */
            font-family: "Font Awesome 5 Free";
            position: absolute;
            top: 2px;
            right: 5px;
            font-size: 20px;
            cursor: pointer;
        }
        .dot::before{
            box-shadow: 15px 0 #fdbc40, 30px 0 #34c749;
            margin-left: 10px;
        }
        @media (max-width: 768px) {
            code {
                font-size: 14px;
                height: auto;
                padding: 10px;
            }
            code::after {
                top: 50%;
                transform: translateY(-50%);
            }
        }
        .title-doc {
            color: #fc615d;
        }
        .ins-doc {
            color: #34c749;
        }

    </style>
</head>

<body class="hold-transition layout-top-nav dark-mode">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-dark text-light border-bottom-0" style="background-color: #343a40;">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <span class="brand-text font-light text-light dot-title"></span>
                </a>
                <!-- <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li> -->
                    </ul>
                </div>
                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-toggle-on"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">v1</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <h1 style="margin-top: 90px; margin-left: 30px;">
                            <img src="assets/img/logo/lorem-logo.png" alt="AdminLTE Logo" class="brand-image img-rectangle" width="30%">
                        </h1>
                        <div class="col-lg-12 pr-5 pl-5">
                            <div class="card" style="background-color: #2d3748">
                                <div class="card-header">
                                    <h5 class="card-title m-0 dot"></h5>
                                </div>
                                <div class="card-body" id="scrollme">
                                    <h3 class="title-doc">Introducing Lorem PHP Master Framework</h3>
                                    <br>
                                    
                                    <p style="text-align: justify;">
                                        The Lorem PHP Master Framework is an open-source PHP web framework designed by Loreto Gabawa. It aims to assist beginners and students in developing online applications using the element-page-action component architectural pattern. The framework also offers built-in authentication and sign-in/sign-out sessions for added convenience in application development.
                                    </p>
                                </div>
                            </div>
                            <h6 class="pl-3">
                                <i class="fas fa-book-open"></i>
                                <a href="" class="text-white" style="text-decoration: underline;">
                                    Documentation
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Footer -->
        <footer class="main-footer border-top-0">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Lorem
            </div>
            <!-- Default to the left -->
            <strong>Tool for a beginner.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="assets/css/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/css/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/css/loremcss.min.js"></script>
</body>

</html>