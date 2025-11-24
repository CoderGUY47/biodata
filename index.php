<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bio-Data</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="card">
        <?php
        $name = $email = $mobile = $occupation = $nationality = $marital = $website = $comment = $gender = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $mobile = htmlspecialchars($_POST['mobile'] ?? '');
            $occupation = htmlspecialchars($_POST['occupation'] ?? '');
            $nationality = htmlspecialchars($_POST['nationality'] ?? '');
            $marital=htmlspecialchars($_POST['marital'] ??'');
            $website = htmlspecialchars($_POST['website'] ?? '');
            $comment = htmlspecialchars($_POST['comment'] ?? '');
            $gender = htmlspecialchars($_POST['gender'] ?? '');

            echo "<h2>Your Submitted Bio-Data:</h2>";
            echo '<div class="kv">';
            echo '<div class="row"><div class="key">Name</div><div class="val">' . $name . '</div></div>';
            echo '<div class="row"><div class="key">Email</div><div class="val">' . $email . '</div></div>';
            echo '<div class="row"><div class="key">Mobile</div><div class="val">' . $mobile . '</div></div>';
            echo '<div class="row"><div class="key">Occupation</div><div class="val">' . $occupation . '</div></div>';
            echo '<div class="row"><div class="key">Nationality</div><div class="val">' . $nationality . '</div></div>';
            echo '<div class="row"><div class="key">Marital Status</div><div class="val">' . $marital . '</div></div>';
            echo '<div class="row"><div class="key">Website</div><div class="val"><a href="' . $website . '" target="_blank" rel="noopener">' . $website . '</a></div></div>';
            echo '<div class="row"><div class="key">Comment</div><div class="val">' . nl2br($comment) . '</div></div>';
            echo '<div class="row"><div class="key">Gender</div><div class="val">' . $gender . '</div></div>';
            echo '</div>';
        } 
        else {
            echo '<div class="notice">No data submitted. Go back to the <a href="index.html">form</a>.</div>';
        }
        ?>
      </div>
    </div>
  </body>
</html>