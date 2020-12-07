<?php
    include './View/header.php';
    include './View/navbar.php';
?>

<!-- Introduction -->
    <div class='intro-grid'>
        <img class='banner-pic' src='./View/Public/Images/Banner.jpg'>
    </div>
<!-- Introduction -->

<!-- Information Cards -->
    <div class='information-grid'>
        <p class='p-text'>Allow your kids to explore and learn new things!</p>
            <div class='info-card-grid'>
                <!-- Info 1 -->
                    <div class='info-one-grid'>
                        <!-- Inline Styles -->
                        <h2 style='text-align: center; font-size: 30px'>Pre-K</h2>
                        <p>Counting numbers, rhyming words,
                            learning letters, and more!</p>

                        <ul class='remove-one-style'>
                            <li>Math</li>
                            <li>Language Arts</li>
                        </ul>
                    </div>
                <!-- Info 1 -->

                <!-- Info 2 -->
                    <div class='info-two-grid'>
                        <h2 style='text-align: center'>K-12</h2>
                        <p>Basic and advance understanding 
                            of different subjects!</p>
                        
                        <ul class='remove-two-style'>
                            <li>Math</li>
                            <li>Language Arts</li>
                            <li>Social Studies</li>
                            <li>Science</li>
                        </ul>
                    </div>
                <!-- Info 2 -->
            </div>
    </div>
<!-- Information Cards -->

<?php
    include './View/footer.php';
?>