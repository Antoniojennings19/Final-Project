<?php   
    include './View/header.php';
    include './View/navbar.php';

?>

<script>
    document.getElementById('background').style.background = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('./View/Public/Images/LightJar.jpg')";
    document.getElementById('background').style.backgroundPosition = "center"; 
    document.getElementById('background').style.backgroundRepeat = "no-repeat";
    document.getElementById('background').style.backgroundSize = "cover"; 
</script>

    <!-- Iframe Grid -->
        <div class="iframe-grid">
            <a href='./View/Public/Projects/FIT-Project--Learning-Experience-/index.php'><h2 style="background-color: black; color: white;">Learning Experience</h2></a>
            <a href='./View/Public/Projects/Bubble-Blower/'><h2 style="background-color: black; color: white;">Bubble Blower</h2></a>
            <a href='./View/Public/Projects/FIT--Web-Exercises-Week-01/Index.html'><h2 style="background-color: black; color: white;">Anime Phone Case</h2></a>
        </div>
</body>
</html>