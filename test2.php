<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odometer Animation on Scroll</title>

    <!-- Odometer CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css">

    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        /* Counter section */
        .counter-box {
            background: #222;
            color: #fff;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            text-align: center;
            margin-top: 50px;
        }

        h3 {
            margin-bottom: 10px;
            font-size: 24px;
        }

        /* Odometer styling */
        .odometer {
            font-size: 48px;
            font-weight: bold;
            color: #ffcc00;
        }
    </style>
</head>
<body>

    <div style="height: 100vh; background: #f0f0f0; display: flex; align-items: center; justify-content: center;">
        <h2>Scroll Down to See Odometer Animation</h2>
    </div>

    <!-- Odometer Counter -->
    <section class="animated">
        <div class="counter-box">
            <h3>Experience:</h3>
            <div class="odometer exp-odometer">0</div>
            <p>Years in Business</p>
        </div>
    </section>

    <div style="height: 100vh; background: #f0f0f0;"></div> <!-- Extra space for scrolling -->

    <!-- Odometer JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>

    <script>
       
    </script>

</body>
</html>
