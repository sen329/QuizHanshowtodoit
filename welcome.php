<?php
   include('work/session.php');
?>
<html>

   <head>
      <title>Welcome </title>
   </head>

   <body>
      <h1>Welcome <?php echo $login_session; ?></h1>
      <nav>
      <ul>
        <li>Available routes</li>
        <li>Requested routes</li>
        <li>My routes offered</li>
        <li>My routes booked</li>
      </ul>
    </nav>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>

</html>
