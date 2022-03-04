<?php

class User {

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function averageCorrentAnswers() {
        $sqlQuery = "SELECT user.user_id, user.first_name, user.last_name, AVG(test_result.correct) AS average_correct_answers FROM user LEFT JOIN test_result ON user.user_id = test_result.user_id GROUP BY user.user_id"; 
        // Execute the query
        $stmt = $this->pdo->prepare($sqlQuery);
        $stmt->execute();
        // return the as object
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}