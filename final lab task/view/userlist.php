<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html'); 
    }

    $users = [
        ['id'=>1, 'username'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=> '124'],
        ['id'=>2, 'username'=>'xyz', 'email'=>'abc@aiub.edu', 'password'=> '124'],
        ['id'=>3, 'username'=>'abc', 'email'=>'xyz@aiub.edu', 'password'=> '124'],
        ['id'=>4, 'username'=>'pqr', 'email'=>'pqr@aiub.edu', 'password'=> '124'],
        ['id'=>5, 'username'=>'aaa', 'email'=>'aa@aiub.edu', 'password'=> '124'],
    ];
?>
<html>
<head>
    <title>View Users</title>
</head>
<body>
        <h2>User list</h2>
        <a href='home.php'>Back </a> |
        <a href='../controller/logout.php'>logout </a>

        <br>

        <table border=1>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php 
                for($i=0; $i<count($users); $i++){
            ?>
            <tr>
                <td><?php echo $users[$i]['id']; ?></td>
                <td><?php echo $users[$i]['username']; ?></td>
                <td><?=$users[$i]['email']?></td>
                <td><?=$users[$i]['password']?></td>
                <td>
                    <a href="edit.php?id=<?=$users[$i]['id']?>"> EDIT </a> |
                    <a href="delete.php"> DELETE </a> 
                </td>
            </tr>

            <?php } ?>
        </table>
</body>
</html>




