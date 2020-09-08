<?php
  session_start();
?>
<html>
  <body>
    <header>
      <nav>
        <a href="#">

        </a>
        <ul>
          <li><a href="index.php">home</a></li>
        </ul>
        <div>
        <?php
        if (isset($_SESSION['userId'])) {
          echo '<form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>';
        }
        else {
          echo '<form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username/Email">
          <input type="password" name="pwd" placeholder="password">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>';
        }
        ?>

          
        </div>
      </nav>
    </header>
  </body>
