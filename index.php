<?php

if (isset($_POST['submit'])) {
    $infoUser = [
        'userName' => 'admin',
        'passWord' => "admin"
    ];
    $err = [];

    if (empty($_POST['userName'])) {
        $err[] =  "Không dược để trống trường uerName!";
    } else {
        $userName = $_POST['userName'];
    }
    if (empty($_POST['passWord'])) {
        $err[] = "Không được để trống trường passWord!";
    } else {
        $passWord = $_POST['passWord'];
    }
    if (empty($err)) {
        if ($userName === $infoUser['userName'] and $passWord = $infoUser['passWord']) {
            $redirectTo = $_POST['redirect_to'];
            header("Location: {$redirectTo}");
        } else {
            $err[] = "UserName hoặc PassWord không chính xác!";
        }
    }
    if (!empty($err)) {
        echo "<pre>";
        print_r($err);
        echo "</pre>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo form hidden field</title>
</head>
<style>
    input {
        display: block;
        margin-bottom: 20px;
    }
</style>

<body>

    <div>
        <h1>Form login</h1>
        <form action="" method="POST">
            <label for="userName">UerName</label>
            <input type="text" name="userName" id="userName">
            <label for="passWord">PassWord</label>
            <input type="password" name="passWord" id="passWord">
            <input type="hidden" name="redirect_to" value="cart.php">
            <input type="submit" name="submit" value=" submit">
        </form>
    </div>
</body>

</html>