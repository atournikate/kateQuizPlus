<?php

    function DBConnection() {
        try { 
            $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', 
            DB_USER, 
            DB_PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) { 
            echo "<p>DB connection failed: " . $e->getMessage() . '</p>';
            echo 'HTTP_HOST = ' . $_SERVER['HTTP_HOST'] . '<br>';
            echo 'DB_NAME = ' . DB_NAME . '<br>';
            echo 'DB_USER = ' . DB_USER . '<br>';
            echo 'DB_PASSWORD = ' . DB_PASSWORD . '<br>';
            echo 'DB_HOST = ' . DB_HOST . '<br>';
            exit;
        }
        return $connection;
    }

    if (strpos($_SERVER['HTTP_HOST'], 'localhost:') !== false) {
        define('DB_NAME', getenv('DB_NAME'));
        define('DB_USER', getenv('DB_USER'));
        define('DB_PASSWORD', getenv('DB_PASSWORD'));
        define('DB_HOST', getenv('DB_HOST'));
    } else {
        define('DB_HOST', 'ipiluwig.mysql.db.internal');
        define('DB_NAME', 'ipiluwig_kt');
        define('DB_USER', 'ipiluwig_17');
        define('DB_PASSWORD', 'G30logyR@x');
    }

    function introductionDataFromDB($quizID) {
        if (TRACE_DB_ACCESS) {
            print "<h1>INTRODUCTION</h1>";
        }
        $query = DBConnection()->prepare("SELECT * from Introduction WHERE quizID =?");
        $query->bindValue(1, $quizID);
        $query->execute();

        $data = $query->fetch(PDO::FETCH_ASSOC);

        if (TRACE_DB_ACCESS) {
            var_dump($data);
            echo '<p>-----------------------------------------------</p>';
        }
    
        return $data;
    }

    function questionDataFromDB($quizID, $questionID) {
        if (TRACE_DB_ACCESS) {
            print "<h1>QUESTIONS</h1>";
        }

        $query  = DBConnection()->prepare("SELECT * FROM Question WHERE quizID = ? AND id = ?");
        $query->bindValue(1, $quizID);
        $query->bindValue(2, $questionID);
        $query->execute();

        $data = $query->fetch(PDO::FETCH_ASSOC);

        //associate the answers to the other question data
        $data['answers'] = answerDataFromDB($questionID);

        if (TRACE_DB_ACCESS) {
            var_dump($data);
            echo '<p>-----------------------------------------</p>';
        }

        return $data;
    }

    function answerDataFromDB($questionID) {
        if (TRACE_DB_ACCESS) {
            print "<h3>Answer Data</h3>";
        }

        $query = DBConnection()->prepare("SELECT text, isCorrect from Answer Where qID = ?");
            $query->bindValue(1, $questionID);
            $query->execute();

            $answers = $query->fetchAll(PDO::FETCH_ASSOC);

            if (TRACE_DB_ACCESS) {
                var_dump($answers);
                echo '<p>-----------------------------------------</p>';
            }
    
            return $answers;
    }

    function reportDataFromDB($quizID) {
        if (TRACE_DB_ACCESS) {
            print "<h3>this is a report now. huray</h3>";
        }

        $query = DBConnection()->prepare("SELECT * from Report where quizID = ?");
            $query->bindValue(1, $quizID);
            $query->execute();

            $report = $query->fetch(PDO::FETCH_ASSOC);

            if (TRACE_DB_ACCESS) {
                var_dump($report);
                echo '<p>-----------------------------------------</p>';
            }

        return $report;    
    
    }

    function totalQuestions($quizID) {
        if (TRACE_DB_ACCESS) {
            print "<h3>Total Number of Questions: </h3>";
        }

        $query = DBConnection()->prepare("SELECT id from Question where quizID = ?");
        $query->bindValue(1, $quizID);
        $query->execute();

        $totalQuestions = $query->fetchAll(PDO::FETCH_ASSOC);

        if (TRACE_DB_ACCESS) {
            var_dump($totalQuestions);echo '<p>-----------------------------------------</p>';
        }

    return $totalQuestions;    
    }

    function sqlInsert() {
        $stmt = DBConnection()->prepare("INSERT INTO Feedback (name, email, text) VALUES (:name, :email, :text)");
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':text', $_POST['text']);
        $stmt->execute();

        if (DBConnection() == true) {
            echo "<p>New message successfully created! Thanks for playing!</p>";
        } else {
            echo "Oops! Something went wrong!";
        }
    }



?>