<?php
  include_once "headerlgs.php";
 ?>

    <section class="main-container">
      <div class="main-wrapper">
        <h2>Sign Up</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
          <input type="text" name="first" placeholder="Firstname">
          <input type="text" name="last" placeholder="Lastname">
          <input type="text" name="email" placeholder="E-mail">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="submit">Sign Up</button>
        </form>
      </div>

    </section>

<?php
  include_once "footerlgs.php";
?>
