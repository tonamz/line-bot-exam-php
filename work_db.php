<?php

    include 'db.php';

    try {
        $stmt = $pdo->prepare('INSERT INTO work(user,name,deadline) VALUES( :user, :name, :deadline');
        $stmt->execute(array(
        
            ':user' => $_POST['user'],
            ':name' => $_POST['name'],
            ':deadline' => $_POST['deadline']
                             ));
        $result['message'] = 'success';

        echo json_encode($result);
    } catch(Exception $error) {
        $result['message'] = 'fail';
        $result['error'] = $error->getCode();

        echo json_encode($result);
    }

    

?>
