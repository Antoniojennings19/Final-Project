<?php   
    include './View/header.php';
    include './View/navbar.php';

?>
<script>
    document.getElementById('background').style.background = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('./View/Public/Images/CampFire2.jpg')";
    document.getElementById('background').style.backgroundPosition = "center"; 
    document.getElementById('background').style.backgroundRepeat = "no-repeat";
    document.getElementById('background').style.backgroundSize = "cover"; 
</script>

<!-- Web Grid -->
    <div class='web-grid-three'>
        <div class="container">
            <form action="/action_page.php">
                <label label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                
                <label for="lname">Email</label>
                <input type="text" id="email" name="email" placeholder="Ex. John@yahoo.com">
                
                <label for="subject">Have Any Questions or Comments?</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                <input type="submit" value="Submit">

            </form> 
        </div>
    </div>
</body>
</html>