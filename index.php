<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <main>
    <section>
      <h1>
      PHP Badwords
      </h1>
    </section><br>
    <section>
      <form action="./request.php" method="POST">
        <label for="paragrafo">Inserisci un testo</label>
        <input type="text" name="paragrafo" id="paragrafo">
        <label for="censura">Inserisci la parola da censurare</label>
        <input type="text" name="censura" id="censura">
        <button type="submit">Invia</button>
      </form>
      </section>
  </main>
</body>
</html>