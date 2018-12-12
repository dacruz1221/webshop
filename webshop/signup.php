<?php

require "header.php";

?>

<main>
<h1>Signup</h1>
<form action="includes/signup.inc.php" method="post">
<input type="text" name="uid" value="" placeholder="Username">
<input type="text" name="mail" value="" placeholder="Email">
<input type="password" name="pwd" value="" placeholder="Password">
<input type="password" name="pwd-repeat" value="" placeholder="Repeat Password">
<button type="submit" name="signup-submit">Signup</button>
</form>
</main>

<?php

require "footer.php";

?>