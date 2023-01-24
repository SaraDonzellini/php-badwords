<section>
  <p>
    <?php 
      echo $_POST['paragrafo'];
    ?>
  </p>
  <h5>
    <?php 
      echo strlen($_POST['paragrafo']);
    ?>
  </h5>
</section>

<section>
  <p>
    <?php 

      $replacedString = str_ireplace('suscipit', '***', $_POST['paragrafo']);
      echo $replacedString;
    ?>
  </p>
  <h5>
    <?php 
      echo strlen($replacedString);
    ?>
  </h5>
</section>
