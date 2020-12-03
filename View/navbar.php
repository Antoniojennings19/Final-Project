    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("main").style.display = "none"; 
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.getElementById("main").style.display = "block"; 
        }
    </script>
        
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./index.php">About</a>
        <a href="./projects.php">Projects</a>
        <a href="./contact.php">Contact</a>
    </div>

    <div id="main" class='main-style'>
        <span style="font-size:30px;cursor:pointer;grid-column:1;" onclick="openNav()">&#9776; Home</span>
    </div>