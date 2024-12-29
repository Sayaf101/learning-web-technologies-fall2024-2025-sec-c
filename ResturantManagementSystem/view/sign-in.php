<?php

$error_msg = '';

if (isset($_GET['err'])) {

  $err_msg = $_GET['err'];

  switch ($err_msg) {
    case 'mismatch': {
        $error_msg = "Wrong username or password.";
        break;
      }
    case 'empty': {
        $error_msg = "Field(s) can not be empty.";
        break;
      }
    case 'loginFirst': {
        $error_msg = "Log in first.";
        break;
      }
  }
}

$success_msg = '';

if (isset($_GET['success'])) {

  $s_msg = $_GET['success'];

  switch ($s_msg) {
    case 'created': {
        $success_msg = "Account creation successful. Please sign in.";
        break;
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
</head>
<body>
  <table width="27%" border="1" cellspacing="0" cellpadding="25">
    <tr>
      <td>
        <form method="post" action="../controller/sign-in-controller.php">
          <h1>Sign In</h1>
          <label class="lebel">Email</label>
          <input id="email" type="email" name="email" size="43px">
          <br><br>
          Password
          <input id="password" type="password" name="password" size="43px">
          <br><br>
          <button size="250px"  name="submit">Sign In</button>
          <br>
          <br>
          <?php if (strlen($error_msg) > 0) { ?>
            <br>
            <font color="red" align="center"><?= $error_msg ?></font>
            <br><br>
          <?php } ?>
          <?php if (strlen($success_msg) > 0) { ?>
            <br>
            <font color="green" align="center"><?= $success_msg ?></font>
            <br><br>
          <?php } ?>
          <br><br>
        </form>
        <hr width="auto">
        Dont have an account?
        <br><br>
        <a href="sign-up.php"><button>Sign Up</button></a>
      </td>
    </tr>
  </table>
</body>
</html>