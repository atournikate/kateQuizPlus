<?php
    include '../config.php';
    require_once 'quiz_header.php';
    // var_dump($_POST);
    // echo "<br>";

//debugging the POST submission
    // if (isset($_POST['submit'])) {
    //     foreach($_POST as $formElement) {
    //         echo '<pre>';
    //         print_r($formElement);
    //         echo '</pre>';
    //     }
    //   } else {
    //     echo "Somethin' ain't right...";
    // }
  
      if (!isset($_POST['submit'])) {
          ?>
               <div  class="options mx-20px">
                      <p>Tell us how you liked the quiz, or send us your ideas to improve it!</p>
                      <form class="feedback" method="POST" action="" >
                          <label for="name">Name:</label><br>
                              <input type="text" name="name" placeholder="Please enter your name" required><br>
                          <label for="email">Email:</label><br>
                              <input type="text" name="email" placeholder="Please provide your email address" required><br>
                          <label for="text">Message:</label><br>
                              <input class="message" type="text" name="text" placeholder="Leave your feedback here" required><br>
                          <br>
                          <input type="submit" name="submit" class="btn d-grid col-12" value="Submit">
                      </form>   
                  </div>    
           <?php    
      } else {
          sqlInsert();
          echo "<div  class='options mx-20px'><p>Thanks <strong>" . $_POST["name"] . " </strong>for sending the following message: <br><em>'" . $_POST["text"] . "'</em></br>";
          echo "We will followup with you at " . $_POST["email"] . " if we need to get in touch with you.<br></p></div>";
          session_destroy();
      }

    
  //var_dump($_SESSION);


    
    ?>
                <!-- <div  class="options mx-20px">
                    <p>Tell us how you liked the quiz, or send us your ideas to improve it!</p>
                    <form class="feedback" method="POST" action="" >
                        <label for="name">Name:</label><br>
                            <input type="text" name="name" placeholder="Please enter your name" required><br>
                        <label for="email">Email:</label><br>
                            <input type="text" name="email" placeholder="Please provide your email address" required><br>
                        <label for="text">Message:</label><br>
                            <input class="message" type="text" name="text" placeholder="Leave your feedback here" required><br>
                        <br>
                        <input type="submit" name="submit" class="btn d-grid col-12" value="Submit">
                    </form>   
                </div> -->


                </div>
        </div>

        <?php
    require_once 'footer.php';
    ?>
