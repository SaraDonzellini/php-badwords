<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords Request</title>
</head>
<body>
  <main>
    <section>
      <p>
        <?php
        $paragraph = $_POST['paragrafo'];
        echo $paragraph;
        ?>
      </p>
      <h5>
        <?php
        echo strlen($paragraph);
        ?>
      </h5>
    </section>
    
    <section>
      <p>
        <?php
    
        $replacedString = str_ireplace($_POST['censura'], '***', $paragraph);
        echo $replacedString;
        ?>
      </p>
      <h5>
        <?php
        echo strlen($replacedString);
        ?>
      </h5>
    </section>

  </main>
</body>
</html>
