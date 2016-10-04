<?php
    include ('test.html');
    if(isset($_POST['SEND'])){
        $username=$_POST['name'];$email=$_POST['email'];
        $content=$_POST['message'];
        echo $username;
        echo $email;
        echo $content;
        echo ("123");
        $sql="insert into t_message(username,email,content) VALUES ($username,$email,$content)";
        $mysql_query($sql);
        echo $sql;
    }
?>
<base href="http://localhost/myweb/index.php">
