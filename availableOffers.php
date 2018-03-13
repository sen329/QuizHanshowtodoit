<html>
  <head>
    <title>Available offers</title>
  </head>
  <body>
    <nav>
      <ul>
        <li>Available offers</li>
        <li>Requested routes</li>
        <li>My routes offered</li>
        <li>My routes booked</li>
      </ul>
    </nav>
    <hr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizdb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
    }
    ?>
    <table>
      <tr>
        <th colspan="6">Available offers</th>
      </tr>
      <tr>
        <th>Date</th>
        <th>Source location</th>
        <th>target location</th>
        <th>driver name</th>
        <th>average rating</th>
        <th>number of ratings given</th>
      </tr>
      <tr>
        <td>date placeholder</td>
        <td><?php
          $sql = "select source from availableoffers";
          $result = $conn ->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["source"];
            }}
          ?></td>
        <td>target location</td>
        <td>driver name</td>
        <td>average rating</td>
        <td>number of ratings given</td>
      </tr>
      <tr>
        <td colspan="3">addroutebutton(fordriver)</td>
        <td colspan="3">bookroutebutton(forpassanger)</td>
      </tr>
    </table>
  </body>
  </html>
