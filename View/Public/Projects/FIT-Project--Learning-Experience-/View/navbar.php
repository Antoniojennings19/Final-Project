<!-- Navbar -->
<div class='navbar-grid'>
    <!-- Navbar Left -->
        <div class='navbar-left'>
            <a href='./index.php' style='text-decoration: none;'><h1 class='title'>Learning Experience</h1></a>
            <img class='bee-pic' src='./View/Public/Images/bee.png'>
        </div>
    <!-- Navbar Left -->

    <!-- Navbar Menu -->
        <div class='navbar-menu'>
            <a class='remove' href="#">Math</a>
            <a class='remove' href="#">Language Arts</a>
            <a class='remove' href="#">Social Studies</a>
            <a class='remove' href="#">Science</a>
        </div>

        <div class="container">                                     
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Home
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Math</a></li>
                    <li><a href="#">Language Arts</a></li>
                    <li><a href="#">Social Studies</a></li>
                    <li><a href="#">Science</a></li>
                </ul>
            </div>
        </div>
    <!-- Navbar Menu -->
    
    <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style='color: red;'>&times;</button>
                    </div>

                    <div class="modal-body"> 
                        <label for="name">Are you a Teacher or Student?</label>
                        <a href='./login.php'><button type="button" class="teacher-btn btn btn-primary">Teacher</button></a>
                        <a href='./signup.php'><button type="button" class="student-btn btn btn-primary">Student</button></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal -->

    <!-- Navbar Right -->
        <div class='navbar-right'>
            <button class='btn-btn btn btn-primary' data-toggle="modal" data-target="#myModal">Sign up</button>
            <a href='./login.php'><button class='btn-btn btn btn-primary'>Log In</button></a>
        </div>
    <!-- Navbar Right -->
</div>
<!-- Navbar-->