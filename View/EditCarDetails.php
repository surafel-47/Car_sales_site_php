<head>
  <title>Car Sales Admin Panel</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      position: relative;
    }

    .sideBar {
      float: left;
      width: 17%;
      height: 100vh;
      background-color: #38383b;
      color: #fff;
      box-shadow: 0px 15px 20px rgb(47, 44, 44);
    }

    .sideBarTop {
      padding: 20px;
      height: 30%;
    }

    .logo {
      position: relative;
      justify-content: center;
      width: 90%;
      height: 90%;
      background-color: rgb(73, 59, 59);
      border-radius: 20px;
      box-shadow: 10px 10px 10px rgb(17, 16, 16);
    }

    .logo {
      background-image: url(add.png);
      background-repeat: no-repeat;
      background-position: center bottom 70px;
      transition: 0.15s;
    }

    .logo span {
      position: absolute;
      display: block;
      bottom: 10px;
      left: 27%;
      font-size: 2em;
      font-weight: bold;
    }

    .logo:hover {
      animation: rotate 1s ease-in-out both;
      background-color: rgb(49, 39, 39);
      border-radius: 100px;
      box-shadow: 20px 20px 50px rgb(0, 0, 0);
      ;
    }

    @keyframes rotate {
      0% {
        transform: rotate(0deg);
      }

      10% {
        transform: rotate(12deg);
      }

      20% {
        transform: rotate(-12deg);
      }

      30% {
        transform: rotate(10deg);
      }

      40% {
        transform: rotate(-10deg);
      }

      50% {
        transform: rotate(7deg);
      }

      60% {
        transform: rotate(-7deg);
      }

      70% {
        transform: rotate(3deg);
      }

      80% {
        transform: rotate(-3deg);
      }

      90% {
        transform: rotate(2deg);
      }

      92% {
        transform: rotate(-2deg);
      }

      94% {
        transform: rotate(1deg);
      }

      96% {
        transform: rotate(-1deg);
      }

      100% {
        transform: rotate(0deg);
      }
    }

    .sideBarBottom {
      height: 70%;
      padding-top: 20px;
    }

    .sideMenuItem {
      padding: 10px;
      height: 10%;
      font-size: 1.4em;
      margin-bottom: 20px;
      color: #fff;
      display: block;
      text-decoration: none;
      transition: background-color 0.3s ease;
      background-color: #313137;
    }

    .sideMenuItem img {
      margin-left: 10px;
      width: 35px;
      height: 35px;
    }

    .sideMenuItem span {
      display: inline-block;
      padding-left: 20px;
    }

    #logOut {
      margin-top: 50%;
      position: relative;
      bottom: 0;
    }

    .sideMenuItem:hover {
      background-color: #000000;
    }

    .mainPanel {
      float: right;
      position: relative;
      width: 80%;
      height: 100vh;
    }

    #bgVideo {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }



    body {
      overflow: hidden;
    }

    .addProdForm * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;

    }

    .addProdForm {
      z-index: 1;
      background-color: rgb(250, 250, 250, 0.6);
      backdrop-filter: blur(3px);
      box-shadow: 10px 5px 20px 3px rgb(87, 69, 69);
      margin-top: 10px;
      margin-left: 10%;
      /* must remove*/
      position: absolute;
      /*very Important*/
      margin-top: 20px;
      top: 0;
      left: 0;
      overflow: hidden;
      display: block;
      width: 75%;
      height: 90%;
      border-radius: 2%;
    }

    .addProdForm p {
      padding-top: 4%;
      padding-bottom: 1%;
      padding-left: 5%;
      font-size: 1.15em;
      font-weight: 600;
      text-align: start;
    }

    .formLeft {
      float: left;
      width: 50%;
      height: 100%;
    }

    .formLeft .inputTextField {
      margin-left: 5%;
      width: 80%;
      height: 8%;
      padding: 2%;
      border: none;
      font-size: large;
      font-weight: 550;
      background-color: rgb(245, 243, 243);
      border-radius: 10px;
      box-shadow: 3px 5px 4px rgb(216, 179, 179);
      transition: 0.15s;
    }

    .formLeft .inputTextField:hover {
      transform: scale(1.05);
      background-color: rgb(170, 178, 185);
    }

    .formLeft .inputTextArea {
      margin-left: 5%;
      width: 80%;
      height: 20%;
      padding: 2%;
      font-size: 1.5em;
      font-weight: 550;
      background-color: rgb(245, 243, 243);
      border-radius: 20px;
      border-bottom-right-radius: 5px;
      box-shadow: 3px 5px 4px rgb(216, 179, 179);
      transition: 0.15s;
    }

    .formLeft .inputTextArea:hover {
      transform: scale(1.05);
      background-color: rgb(202, 208, 214);
    }


    .formRight {
      float: right;
      width: 50%;
      height: 100%;
    }

    .formRight .imgFilePanel {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 10px;
    }

    .formRight img {
      width: 50%;
      max-width: 200px;
      height: auto;
    }

    /* .formRight input[type="file"] {
                  display: none;
              } */

    /* .formRight label {
                  background-color: #eee;
                  padding: 10px;
                  cursor: pointer;
                  display: flex;
                  align-items: center;
                  justify-content: center;
              }
  
                  .formRight label::after {
                      content: "Choose File";
                      margin-left: 5px;
                  } */

    .formRight .submitButton {
      margin-top: 30px;
      color: white;
      font-size: 1.7em;
      font-weight: 550;
      width: 40%;
      height: 10%;
      border: none;
      border-radius: 7px;
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
      background-color: #524d4d;
      box-shadow: 2px 2px 5px rgb(175, 151, 151);
      transition: 0.15s;
    }

    .formRight .submitButton:hover {
      transform: scale(1.1);
      box-shadow: 4px 10px 10px rgb(175, 151, 151);
      background-color: #292727;
    }

    .formRight .resetButton {
      margin-top: 30px;
      font-size: 1.7em;
      color: white;
      font-weight: 550;
      width: 25%;
      height: 10%;
      margin-right: 20px;
      margin-left: 10%;
      border: none;
      border-radius: 7px;
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
      background-color: #978080;
      box-shadow: 2px 2px 5px rgb(175, 151, 151);
      transition: 0.15s;
    }

    .resetButton:hover {
      transform: scale(1.1);
      box-shadow: 4px 10px 10px rgb(175, 151, 151);
      background-color: #544343;
    }
  </style>
</head>

<body>
  <section class="sideBar">
    <div class="sideBarTop">
      <div class="logo">
        <span>Walia</span>
      </div>
    </div>
    <div class="sideBarBottom">
      <a href="Search.php" class="sideMenuItem" id="SearchProducts">
        <img src="../assets/search.png" />
        <span>Search Products</span>
      </a>
      <a href="AddFuelCar.php" class="sideMenuItem" id="add">
        <img src="../assets/addE.png" />
        <span>Add Fuel Car</span>
      </a>
      <a href="AddElectricCar.php" class="sideMenuItem" id="SearchProducts">
        <img src="../assets/CarF.png" />
        <span>Add Electric Car</span>
      </a>
    </div>
  </section>

  <section class="mainPanel">

  <?php
      require_once '../Models/Model.php';

      $name = $_GET['carName'];
      $type = $_GET['type'];


      $carToBeEdited;

      if ($type == "Electric") {
        $electricCarsArray = unserialize(file_get_contents('../ElectricCars.txt'));
        foreach ($electricCarsArray as $car) {
          if ($car->getName() === $name) {
            $carToBeEdited = $car;
            break;
          }
        }
      } else {
        $fuelCarsArray = unserialize(file_get_contents('../FuelCars.txt'));
        foreach ($fuelCarsArray as $car) {
          if ($car->getName() === $name) {
            $carToBeEdited = $car;
            break;
          }
        }
      }
      ?>

      <form class="addProdForm" action="../Controller/EditController.php" method="post">
        <div class="formLeft">
          <p>Car Name</p>
          <input class="inputTextField" type="text" name="carName" id="carName" max="20" value="<?php echo $carToBeEdited->getName(); ?>" readonly />
          <p>Car Price (Birr)</p>
          <input class="inputTextField" type="number" step="0.01" name="UPrice" id="price" required value="<?php echo $carToBeEdited->getPrice(); ?>" />
          <p>Car Color</p>
          <input style="display: none;" type="text" name="type" value="<?php echo $type?>">
          <select class="inputTextField" name="Color" id="color" required>
            <option value="Red">Red</option>
            <option value="Blue">Blue</option>
            <option value="Green">Green</option>
            <option value="Yellow">Yellow</option>
            <option value="Black">Black</option>
            <option value="White">White</option>
          </select>
          <p>Car Mile Age (Km) </p>
          <input class="inputTextField" type="number" name="mileage" id="mileage" required value="<?php echo $carToBeEdited->getMileage(); ?>" />
        </div>
        <div class="formRight">
          <div id="imgFilePanel1">
            <img src="../CarsImg/<?php echo $carToBeEdited->getImgUrl(); ?>" alt="" />
          </div>
          <button type="submit" class="submitButton">
            Update Car Details
          </button>
        </div>
      </form>
  </section>
</body>