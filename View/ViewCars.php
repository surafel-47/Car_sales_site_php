<head>
    <title>Walia Cars</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,400;1,500&family=Playfair+Display:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,600;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200&family=Quicksand:wght@300;400;500;600;700&display=swap");

        .navbar {
            background-color: #2e2020;
            box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.2);
            padding: 10px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-right: 15px;
            margin-left: 15px;
            margin-top: 10px;
            position: sticky;
            top: -5;
            z-index: 1000;
            color: white;
        }

        .navbar-brand {
            font-family: "Playfair Display", Helvetica, sans-serif;
            font-weight: bolder;
            font-size: 33px;
            color: #ffffff;
        }

        .navbar-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-link {
            margin: 15px;
            text-decoration: none;
            color: #ffffff;
            padding-top: 15px;
            font-size: 20px;
            font-weight: 400;
            font-family: "Poppins", Arial, Helvetica, sans-serif;
        }

        .navbar-link:hover {
            color: #f20359;
            font-weight: 700;
            font-size: 21.3px;
            transform: translate(0.2ms);
            text-decoration: underline 1px dashed #851037;
        }

        .profile-container {
            display: flex;
            align-items: center;
        }

        .cart-button {
            display: flex;
            align-items: center;
            padding: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .cart-button img {
            width: 30px;
            height: 30px;
        }

        .item-count {
            color: #333;
            font-size: 1.5em;
            border-radius: 50%;
        }

        .history-button {
            display: flex;
            align-items: center;
            padding: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .history-button img {
            margin-left: 20px;
            width: 30px;
            height: 30px;
        }

        .sigin-button {
            margin-left: 40px;
            display: flex;
            align-items: center;
            padding: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .sigin-button img {
            width: 30px;
            height: 30px;
        }

        .sign-in {
            color: #333;
            font-size: 1.5em;
            border-radius: 50%;
        }

        .dropdown {
            margin-left: 20px;
            position: relative;
        }

        .user-profile {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }

        .profile-pic {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .user-profile:hover {
            color: #f00;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu a {
            display: block;
            text-decoration: none;
            color: #333;
            margin-bottom: 5px;
        }

        .dropdown-menu a img {
            vertical-align: middle;
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,400;1,500&family=Playfair+Display:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,600;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200&family=Quicksand:wght@300;400;500;600;700&display=swap");




        /***************************************************************************************************/

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1%;
            width: 100%;
        }


        .search-form {
            display: flex;
            align-items: center;
            width: 30%;
            height: 70px;
        }

        .dropdown select {
            padding: 8px;
            font-size: 15px;
            border: 1px solid #ccc;
            height: 50px;
            background-color: ghostwhite;
            border-radius: 4px;
        }

        .search-box {
            flex-grow: 1;
            margin: 0 10px;
            height: 50px;
            font-size: 15px;
        }

        .search-box input {
            padding: 8px;
            width: 100%;
            height: 50px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-btn {
            margin-left: 20px;
            padding: 8px 16px;
            font-size: 14px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            height: 50px;
        }

        .search-btn:hover {
            background-color: #555;
        }

        .ProductsGrid {
            box-shadow: -5px 0 5px rgba(0, 0, 0, 0.1), 5px 0 5px rgba(0, 0, 0, 0.1);
            margin-left: 10%;
            margin-right: 10%;
            padding: 3%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            overflow: hidden;
        }



        .product-card {
            width: 340px;
            height: 340px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid rgb(237, 232, 232);
            box-shadow: 10px 10px 10px rgba(70, 49, 49, 0.1);
        }

        .slider-container {
            width: 300px;
            height: 200px;
            overflow: hidden;
        }


        .image-slider {
            display: flex;
            animation: slide-animation 10s infinite;
        }

        .image-slider img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        @keyframes slide-animation {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-100%);
            }

            50% {
                transform: translateX(-200%);
            }

            75% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(0);
            }
        }


        .product-name {
            margin-top: 10px;
        }

        .price {
            display: flex;
            align-items: center;
            font-weight: bold;
            margin-top: 10px;
        }

        .add-to-cart-link {
            margin-left: auto;
            margin-right: 20px;
            width: 15%;
            padding: 8px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
        }

        .Remove-From-cart-link {
            margin-left: auto;
            margin-right: 20px;
            width: 15%;
            padding: 8px;
            background-color: red;
            color: #fff;
            text-decoration: none;
        }

        .add-to-cart-link:hover {
            background-color: #2980b9;
        }

        .Remove-From-cart-link :hover {
            background-color: darkred;
        }



        .rating {
            display: inline-block;
            direction: rtl;
        }

        .rating input[type="radio"] {
            display: none;
        }

        .rating label {
            color: #ddd;
            font-size: 24px;
            cursor: pointer;
            display: inline-block;
            transform: rotateY(180deg);
        }

        .rating label:before {
            content: "\2605";
            display: inline-block;
            transform: rotateY(180deg);
        }

        .rating input[type="radio"]:checked~label {
            color: #ffcc00;
        }

        .dot {
            margin-left: 5px;
            margin-right: 5px;
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: black;
        }

        .carCard {
            width: 400px;
            height: 350px;
            border-radius: 10px;
            box-shadow: 0 14px 19px 10px rgba(24, 10, 10, 0.29);
            overflow: hidden;
            position: relative;
            transition: 0.15s;
        }

        .carCard:hover {
            transform: scale(1.05);
            box-shadow: 0 14px 19px 10px rgba(40, 29, 29, 0.554);
        }

        .carImage {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .carDetails {
            position: absolute;
            bottom: 0px;
            left: 0;
            padding: 10px;
            background-image: linear-gradient(to top, #04070b, #3d3e4063, #79797b40, #1e1e2033, #12111116);
            width: 100%;
        }

        .carName,
        .mileage,
        .color,
        .price,
        .batteryCap,
        .chargingTime {
            margin-bottom: 5px;
            color: white;
            z-index: 1;
        }

        .carName {
            font-weight: bold;
            font-size: 18px;
        }

        .mileage,
        .color,
        .price,
        .batteryCap,
        .chargingTime {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">Walia Dealership</div>
        <div class="navbar-links">
            <a href=/Customers/Home class="navbar-link">Contact Us</a>
            <a href=/ class="navbar-link">Search Cars</a>
        </div>
    </nav>

    <div class="search-container">
        <form class="search-form" method="GET" action= />
        <div class="search-box">
            <input type="text" placeholder="Search Cars..." name="searchQuery" value=>
        </div>
        <button type="submit" class="search-btn">Search</button>
        </form>
    </div>

    <div class="ProductsGrid">
        <?php
        require_once '../Models/Model.php';

        $electricCarsArray = unserialize(file_get_contents('../ElectricCars.txt'));
        $fuelCarsArray = unserialize(file_get_contents('../FuelCars.txt'));

        if ($electricCarsArray != false) {
            foreach ($electricCarsArray as $car) {
        ?>
                <div class="carCard">
                    <img class="carImage" src="../carsImg/<?= $car->getImgUrl() ?>" alt="Car Image">
                    <div class="carDetails">
                        <div class="carName"><?= $car->getName() ?></div>
                        <div class="mileage">Mileage: <?= $car->getMileage() ?> km</div>
                        <div class="color">Color: <?= $car->getColor() ?></div>
                        <div class="price">Price:<?= $car->getPrice() ?> Birr</div>
                        <div class="batteryCap">Battery Capacity: <?= $car->getBatteryCapacity() ?> kWh</div>
                        <div class="chargingTime">Charging Time: <?= $car->getChargingTime() ?> hours</div>
                    </div>
                </div>
            <?php
            }
        }

        if ($fuelCarsArray != false) {
            foreach ($fuelCarsArray as $car) {
            ?>
                <div class="carCard">
                    <img class="carImage" src="../carsImg/<?= $car->getImgUrl() ?>" alt="Car Image">
                    <div class="carDetails">
                        <div class="carName"><?= $car->getName() ?></div>
                        <div class="mileage">Mileage: <?= $car->getMileage() ?> km</div>
                        <div class="color">Color: <?= $car->getColor() ?></div>
                        <div class="price">Price:<?= $car->getPrice() ?> Birr</div>
                        <div class="batteryCap">Fuel Capacity: <?= $car->getFuelCapacity() ?> Liters</div>
                        <div class="chargingTime">Km per Liter: <?= $car->getKmPerLiter() ?> KM/L</div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>

