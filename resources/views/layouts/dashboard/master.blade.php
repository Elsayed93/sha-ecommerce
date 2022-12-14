<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

@include('layouts.dashboard.includes._head')

<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.dashboard.includes._sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('layouts.dashboard.includes._nav')
        <!-- End Navbar -->

        @yield('content')
    </main>

    @include('layouts.dashboard.includes._ui_configuration')

    <!--   Core JS Files   -->
    @include('layouts.dashboard.includes._scripts')


</body>

</html>
