<?php
    include '../config.php';

    require_once 'quiz_header.php'; 
    ?>
                <div  class="options mx-20px">
                    <p>Tell us how you liked the quiz, or send us your ideas to improve it!</p>
                    <form action="db-access.php" action="POST">
                        <label for="userName">Name:</label><br>
                            <input type="text" name="userName"><br>
                        <label for="email">Email:</label><br>
                            <input type="text" name="email"><br>
                        <label for="text">Message:</label><br>
                            <input class="message" type="text" name="text"><br>
                        <br>
                        <input type="submit" class="btn d-grid col-12" value="Submit">
                    </form>   
                </div>    


            </div>
        </div>

        <?php
    require_once 'footer.php';
    ?>
