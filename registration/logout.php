<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//將session清空
unset($_SESSION['username']);
echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <form>
    <div>
      echo '登出中......';
    </div>
  </form>

</body>
</html>
