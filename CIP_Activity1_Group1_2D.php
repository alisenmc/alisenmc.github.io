<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <title>City Populations</title>
    <style>
      body {

            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1413&q=80");
        background-size:100% 100vh;   
        background-attachment:fixed;  
        background-size:100% 100vh;
        overflow-x: hidden;
      }
          
      input[type=submit] {
        background-color: #35556b;
        color: white;
        padding: 5px 15px;
        margin 5px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-family: Verdana;
        font-size: 1.125em;
      }

      input[type=submit]:hover {
        background-color: #8fb0c8;
        color: white;
      }

      form {
        background-color: white;
        padding: 3em;
        border-radius: 5px;
        border-style: solid;
        border-color: white;
        margin: 50px;
      }

      #foot {

        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #d9c6c8;
        color: black;
        text-align: center;
      }

      #foot > p {
        padding: 10px 0;
      }
      #top {
        background-color: #5a93bc;
        height: 65px;
      }
      
    </style>
 </head>
  
 <body>
    <div class="image">

        <div class="container-fluid" id="top">
          <h1 class="text-light p-1" style="font-weight: bold;">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
              <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
            </svg>
          city/populations</h1>
        </div>

        <div class="row">

          <div class="container col-4 align-self-center">
            <h5 class="text-light ps-5 pb-5" style="text-align: justify; line-height: 30px; font-style: Arial;"><blockquote>The Philippines' cities are spread across the country's approximate 7,641 islands. These islands are divided into three geographical divisions -- Luzon, Visayas, and Mindanao. The country has a total of 145 chartered cities. Philippines has 6 cities with more than a million people, 88 cities with between 100,000 and 1 million people, and 516 cities with between 10,000 and 100,000 people.</blockquote></h5>
          </div>
        
          <div class="container col-8"> 
            <form action="" method="post">
              <div class="form-group row">
                <label class="col-4"><h4>City A Population:</h4></label>
                <input type="number" name="CityPopulationA" value="<?php if (isset($_POST['CityPopulationA'])) {echo $_POST['CityPopulationA'];} ?>" class="col-8 align-middle">
              </div>

              <br>

              <div class="form-group row">
                <label class="col-4"><h4>City A Growth Rate:</h4></label>
                <input type="number" name="CityRateA" value="<?php if (isset($_POST['CityRateA'])) {echo $_POST['CityRateA'];}?>" class="col-8 align-middle">
              </div>

              <br>

              <div class="form-group row">
                <label class="col-4"><h4>City B Population:</h4></label>
                <input type="number" name="CityPopulationB" value="<?php if (isset($_POST['CityPopulationB'])) {echo $_POST['CityPopulationB'];} ?>" class="col-8 align-middle">
              </div>

              <br>

              <div class="form-group row">
                <label class="col-4"><h4>City B Growth Rate:</h4></label>
                <input type="number" name="CityRateB" value="<?php if (isset($_POST['CityRateB'])) {echo $_POST['CityRateB'];}?>" class="col-8 align-middle">
              </div>

              <br>

              <div class="text-end">
                <input type="submit" value="Evaluate">
              </div>

<?php
  if (isset($_POST['CityPopulationA']) && isset($_POST['CityRateA']) && isset($_POST['CityPopulationB']) && isset($_POST['CityRateB']))
  {
    $populationA = $_POST['CityPopulationA'];
    $rateA = (1 + $_POST['CityRateA'] / 100);
    $years = 0;

    $populationB = $_POST['CityPopulationB'];
    $rateB = (1 + $_POST['CityRateB'] / 100);

    $isLessThan = True;

    $CityA = 0;
    $CityB = 0;

    while ($isLessThan)
    {
      $CityA = intval($populationA * $rateA);
      $CityB = intval($populationB * $rateB);

      $populationA = $CityA;
      $populationB = $CityB;

      if ($CityA >= $CityB)
      {
        $isLessThan = False;
      }

      $years++;
    }

    echo "<h4>City A: ".number_format($CityA)."</h4>";
    echo "<h4>City B: ".number_format($CityB)."</h4>";

    echo "<h4>The population of City A will be greater than or the same as City B in ".$years." years"."</h4>";
  }
?>
            <br>
            </form>
          </div>

        
        <div class="container-fluid text-center" id="foot">
          <p>GROUP 1 • Alisen, Mariel Camille • Cornillez, Jazel Hanne • Javier, Leenard Troy • Manuel, Daniella Mae • Panlaqui, Ezzexckquiel Lledor</p>
        </div>

    </div>
    
   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>