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
    <div class='form-grid'>
        <!-- Signup Form -->
            <div class="form-group">
                <label class="control-label col-sm-2" for="fname">First Name:</label>
                <div class="col-sm-10">          
                  <input type="firstname" class="form-control" id="fname" placeholder="First Name" name="fname" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="lname">Last Name:</label>
                <div class="col-sm-10">          
                  <input type="lastname" class="form-control" id="lname" placeholder="Last Name" name="lname" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="grade">Grade</label>
                <div class="col-sm-10">          
                  <select class="form-control" id="grade" placeholder="Grade" name="grade" required>
                    <option style="display: none;" value="">Please Select</option>
                    <option class="grade" value="Pre-K">Pre-K</option>
                    <option class="grade" value="First Grade">1</option>
                    <option class="grade" value="Second Grade">2</option>
                    <option class="grade" value="Third Grade">3</option>
                    <option class="grade" value="Fourth Grade">4</option>
                    <option class="grade" value="Fifth Grade">5</option>
                    <option class="grade" value="Sixth Grade">6</option>
                    <option class="grade" value="Seventh Grade">7</option>
                    <option class="grade" value="Eighth Grade">8</option>
                    <option class="grade" value="Nineth Grade">9</option>
                    <option class="grade" value="Tenth Grade">10</option>
                    <option class="grade" value="Eleventh Grade">11</option>
                    <option class="grade" value="Twelfth Grade">12</option>
                </select>
                </div>
              </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone">Phone Number:</label>
                <div class="col-sm-10">          
                  <input type="phonenumber" class="form-control" id="phone" placeholder="Phone Number" name="phone" required>
                </div>
              </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10">          
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                  <!-- Inline Styles -->
                  <a class='right-text' href=''style='font-style: italic;'>Already have an account?</a>
                </div>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name='signup-submit'onclick="ajaxCard(document.getElementById('fname').value, 
                                                                                               document.getElementById('lname').value,
                                                                                               document.querySelector('#grade').value,
                                                                                               document.getElementById('email').value,
                                                                                               document.getElementById('phone').value, 
                                                                                               document.getElementById('pwd').value)">Submit</button>
              </div>

              <div id="response-msg">
                
              </div>
            </div>
        <!-- Signup Form -->
    </div>
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