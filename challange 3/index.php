<?php 
// initialize connection 
require_once('init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table> 
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Average Correct Answers</th>
            </tr>
            <?php foreach($user->averageCorrentAnswers() as $user): ?>
            <tr>
                <td><?php echo $user->user_id; ?></td>
                <td><?php echo $user->first_name; ?></td>
                <td><?php echo $user->last_name; ?></td>
                <td><?php echo $user->average_correct_answers ? $user->average_correct_answers : 0; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>