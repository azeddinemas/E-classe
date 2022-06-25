     
        <div class="row">
            <input type="checkbox" id="menu">
            <div style="background: #FAFFC1;" id="toggel" class="col-lg-2 col-md-3 col-sm-5 col-8  text-center">
                <label style="font-size: x-large;transform: rotate(180deg);" for="menu" id="label" class="label float-end"><img src="images/arrow-right-circle.svg" alt=""></label>
                <h2 class="titre text-start"><span class="text-info p-2">|</span>E-classe</h2>
                <br>
                <img class="rounded rounded-circle" src="images/profile.svg" alt="">
                <h3><?= $_COOKIE['e'] ?></h3>
                <h4 class="text-info fs-5">Admin</h4>
                <br>
                <nav class="text-start p-3">
                    <a href="index.php" class="nav-link text-black text-nowrap  <?php if(basename($_SERVER["REQUEST_URI"]) == "index.php") echo 'bg-info rounded-3'; ?>">
                        <img class="me-3" src="images/home.svg" alt=""> Home
                    </a>
                    <br>
                    <a class="nav-link text-black text-nowrap <?php if(basename($_SERVER["REQUEST_URI"]) == "cours.php") echo 'bg-info rounded-3'; ?>" href="cours.php">
                        <img class="me-3" src="images/save.svg" alt=""> Course
                    </a>
                    <br>
                    <a class="nav-link text-black text-nowrap  <?php if(basename($_SERVER["REQUEST_URI"]) == "Students.php") echo 'bg-info rounded-3'; ?>" href="Students.php">
                        <img class="me-3" src="images/student.svg" alt=""> Students
                    </a>
                    <br>
                    <a class="nav-link text-black text-nowrap  <?php if(basename($_SERVER["REQUEST_URI"]) == "payment.php") echo 'bg-info rounded-3'; ?>" href="payment.php">
                        <img class="me-3" src="images/payement.svg" alt=""> Payment
                    </a>
                    <br>
                    <a class="nav-link text-black text-nowrap" href="#">
                        <img class="me-3" src="images/report.svg" alt=""> Report
                    </a>
                    <br>
                    <a class="nav-link text-black text-nowrap" href="#">
                        <img class="me-3" src="images/setting.svg" alt=""> Settings
                    </a>
                    <br>
                </nav>
                <a href="logout.php" class="nav-link text-black">
                    <img class="bi me-2" src="images/out.svg" alt=""> Logout
                </a>
                <br>
            </div>
            <!--end sidebar-->
            <!--start navbar-->
            <div class="col">
                <div class="row">
                    <div class="col-md d-flex justify-content-between bg-white">
                        <label style="font-size: x-large;" for="menu" class="label"><img src="images/arrow-right-circle.svg" alt=""></label>
                        <form class="d-flex my-2">
                            <input class="me-2" type="search" placeholder="Search...                    🔍">
                            <img src="images/notif.svg" alt="">
                        </form>
                    </div>
