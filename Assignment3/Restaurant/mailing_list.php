<?php include("header.php");
      include("db_config.php");
?>

            <div id="content" class="clearfix">
                <p>&nbsp;</p>
                <h1>Mailing List</h1>
                <table border="1" width=80%>

                  <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Phone Number</th>
                  </tr>

                  <!-- Display content in table -->
                  <?php
                  if (($result = $conn->query("SELECT * FROM mailing_list")) == TRUE)
                  {
                    if ($conn->num_rows($result) > 0)
                    {
                      while ($row = $conn->fetch_assoc($result))
                      {
                        echo '<tr>';
                        echo '<td>' . $row['first_name'] . $row['last_name'] .  '/td';
                        echo '<td>' . $row['email_address'] . '/td';
                        echo '<td>' . $row['username'] . '/td';
                        echo '<td>' . $row['phone_number'] . '/td';
                        echo '</tr>';
                      }
                    }
                  }
                  ?>

                </table>
            </div><!-- End Content -->
<?php include("footer.php"); ?>
