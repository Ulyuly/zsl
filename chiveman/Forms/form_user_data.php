<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form user data</title>
</head>
<body>
  <?php 
    //echo '<pre>',print_r($_POST),'</pre>';
  
    if(isset($_POST['accountType'])) {
      $accountType = $_POST['accountType'];
      switch ($accountType) {
        case 'personal':
          $accountType = 'Konto Osobiste';
          break;
        case 'business':
          $accountType = 'Konto Biznesowe';
          break;
      }
    }

    if(isset($_POST['name'])) {
      if(strlen($_POST['name'])<11){
        $name = $_POST['name'];
      }
    }
    if(isset($_POST['surname'])) {
      if(strlen($_POST['surname'])<21){
        $surname = $_POST['surname'];
      }
    }

    if(isset($_POST['country'])) {
      $country = $_POST['country'];
      switch ($country) {
        case 'poland':
          $country = 'Polska';
          break;
        case 'usa':
          $country = 'Stany Zjednoczone';
          break;
        case 'greece':
          $country = 'Grecja';
          break;
      }
    }

    if(isset($_POST['stAddress'])) {
      $stAddress = $_POST['stAddress'];
    }
    if(isset($_POST['stAddress2'])) {
      $stAddress2 = $_POST["stAddress2"];
    }

    if(isset($_POST['zip'])) {
      $zip = $_POST['zip'];
    }

    if(isset($_POST['city'])) {
      $city = $_POST['city'];
    }

    if(isset($_POST['state'])) {
      $state = $_POST['state'];
      switch ($state) {
        case 'Wielkopolskie':
          $state = 'Wielkopolskie';
          break;
        case 'Zachodniopomorskie':
          $state = 'Zachodniopomorskie';
          break;
        case 'Malopolskie':
          $state = 'Malopolskie';
          break;
      }
    }

    if(isset($_POST['tel'])) {
      $tel = $_POST['tel'];
    }

    echo <<<DATA
      Konto: $accountType<br>
      Imię i nazwisko: $name $surname<br>
      Kraj: $country<br>
      Adres 1: $stAddress<br>
      Adres 2: $stAddress2<br>
      Kod pocztowy i miasto: $zip $city<br>
      Województwo: $state<br>
      Numer telefonu: $tel<br>
DATA;
  ?>
</body>
</html>