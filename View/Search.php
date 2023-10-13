<head>
  <title>Admin Main Panel</title>

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
  </style>
  <style>
    body {
      overflow: hidden;
    }

    /* Styling the card container */
    .searchProduct {
      margin: 20px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      height: 90%;
    }

    /* Centering the search bar */
    .searchProductTopArea {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      height: 10%;
    }



    .searchProduct input {
      font-size: 20px;
      margin-left: 10px;
    }

    /* Styling the search bar */
    .searchInput {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 20px;
    }

    .searchButton {
      padding: 10px 20px;
      background-color: rgb(66, 56, 56);
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .searchProductMiddleArea {
      padding: 10px;
      overflow-y: scroll;
      height: 80%;
    }

    .searchProductMiddleArea::-webkit-scrollbar {
      display: none;
    }

    .searchProductMiddleArea table {
      width: 100%;
      height: 50%;
      font-size: 20px;
    }

    .searchProductMiddleArea thead {
      position: sticky;
      top: -10;
    }

    /* Alternating background colors for table rows */
    .productListTable tbody tr:nth-child(even) {
      background-color: rgb(237, 229, 229);
    }

    .Edit {
      display: inline-block;
      padding: 10px 10px;
      background-color: #978080;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .Remove {
      display: inline-block;
      padding: 10px 10px;
      background-color: #524d4d;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }



    .productListTable tbody tr:nth-child(odd) {
      background-color: rgb(255, 240, 255);
    }

    .productListTable tbody tr {
      transition: 0.15s;
    }

    .productListTable tr:hover {
      transform: scale(1.01);
    }

    /* Styling table header */
    .productListTable th {
      background-color: rgb(66, 56, 56);
      color: #fff;
      padding: 10px;
      font-size: 25px;
    }

    /* Padding for table cells */
    .productListTable td {
      padding: 10px;
    }
  </style>

</head>

<body>
  <section class="sideBar">
    <div  class="sideBarTop">
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
    <div class="searchProduct">
      <div class="searchProductTopArea">
        <form method="GET" action=/Admin>
          <table>
            <tr>
              <td>
                <input type="text" class="searchInput" placeholder="Search Item Here!" name="searchQuery" value="" />
              </td>
              <td>
                <input class="searchButton" value="Search!" type="submit" />
              </td>
            </tr>
          </table>
        </form>

      </div>
      <div class="searchProductMiddleArea">
        <table class="productListTable">
          <thead>
            <th>Car Name</th>
            <th>Price</th>
            <th>Color</th>
            <th>Type</th>
            <th>Edit</th>
            <th>Delete</th>

          </thead>
          <tbody>
            <?php
            require_once '../Models/Model.php';

            $electricCarsArray = unserialize(file_get_contents('../ElectricCars.txt'));
            $fuelCarsArray = unserialize(file_get_contents('../FuelCars.txt'));

            if ($electricCarsArray != false) {
              foreach ($electricCarsArray as $car) {
            ?>
                <tr>
                  <td><?= $car->getName() ?></td>
                  <td><?= $car->getPrice() ?> Birr</td>
                  <td><?= $car->getColor() ?></td>
                  <td>Electric</td>
                  <td>
                    <a class="Edit" href="EditCarDetails.php?carName=<?= $car->getName() ?>&type=Electric">Edit</a>
                  </td>
                  <td>
                    <a class="Remove" href="../Controller/DeleteElectricController.php?carName=<?= $car->getName() ?>">Delete</a>
                  </td>
                </tr>
              <?php
              }
            }

            if ($fuelCarsArray != false) {
              foreach ($fuelCarsArray as $car) {
              ?>
                <tr>
                  <td><?= $car->getName() ?></td>
                  <td><?= $car->getPrice() ?> Birr</td>
                  <td><?= $car->getColor() ?></td>
                  <td>Fuel</td>
                  <td>
                    <a class="Edit" href="EditCarDetails.php?carName=<?= $car->getName() ?>&type=Fuel">Edit</a>
                  </td>
                  <td>
                    <a class="Remove" href="../Controller/DeleteFuelController.php?carName=<?= $car->getName() ?>">Delete</a>
                  </td>
                </tr>
            <?php
              }
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </section>
</body>