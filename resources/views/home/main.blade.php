@extends('index')


@section('main-header-area');
 <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.blade.php"><h2 style="color:red">AB Property</h2></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="customer_home">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="customer_home">Home</a></li>
                                        <li><a href="about-us.blade.php">About Us</a></li>
                                       
                                        <li><a href="contact.blade.php">Contact</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="listings.html">Properties</a></li>
                                
                                <li><a href="contact.blade.php">Contact</a></li>
                                <li><a href="index.blade.php">Login</a></li>
                                <li><a href="index.blade.php">Registration</a></li>
                            </ul>
                            

                           
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
    @endsection