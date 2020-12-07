<?php
    include './View/header.php';
    include './View/navbar.php';
    include './Controller/ajax-calls.php';
?>

<!-- Introduction -->
    <div class='intro-grid'>
        <img class='banner-pic' src='./View/Public/Images/Banner.jpg'>
    </div>
<!-- Introduction -->

<!-- Form -->
    <!-- Login Form -->
        <div class='login-form-grid'>
                <div class="log-form">
                    <div class="user">
                        <label for="uname"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" id="user" required>
                    </div>

                    <div class="pass">
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" id="pass" required>
                    </div>

                    <div class="log">
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>

                        <button type="submit" name='login-submit' onclick="ajaxLog(document.getElementById('user').value,
                                                                                   document.getElementById('pass').value)">Login</button>
                    </div>
                </div>

                <div class="forgot-password">
                    <span class="psw"><a href="#">Forgot password?</a></span>
                </div>

                <div id="login-msg">
                
              </div>
        </div>
    <!-- Login Form -->
<!-- Form -->

<!-- Footer -->

    <div class='footer-grid'>
        <!-- Footer Left -->
            <div class='footer-left-grid'>
                <img class='cloud-pic'src='./View/Public/Images/cloud.png'>
            </div>
        <!-- Footer Left -->

        <!-- Footer Right -->
            <div class='footer-right-button-grid'>
                <button class='support-btn btn btn-primary'>Support</button>
            </div>
        <!-- Footer Right -->
    </div>

</div>
<!-- Footer -->
</body>
</html>