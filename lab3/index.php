<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
        }

        .side-panel {
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 20px;
            left: 10px;
            background: #A52A2A;
            overflow-x: hidden;
            padding: 20px 10px;
        }

        .side-panel a {
            padding: 10px 16px;
            text-decoration: none;
            font-size: 18px;
            color: #2196F3;
            display: block;
        }

        .side-panel a:hover {
            color: #064579;
        }

        .main-content {
            margin-left: 220px;
            font-size: 18px;
            padding: 10px;
        }

        header {
            text-align: center;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>  

    <div class="side-panel">
        <?php include('sections/panel.php'); ?>
    </div>

    <div class="main-content">
        <header>
            <?php include('sections/title.php'); ?>
        </header>

        <article>
            <?php include('sections/content.php'); ?>
        </article>

        <footer>
            <?php
                if (isset($_GET['Завдання'])) {
                    $task = filter_var($_GET['Завдання'], FILTER_SANITIZE_NUMBER_INT);
                    
                    if ($task == 2) {
                        for ($i = 0; $i <= 10; $i++) {
                            echo "<br>";
                        }
                    }
                    echo "<p>Завдання: $task</p>";
                }
            ?>
        </footer>
    </div>

</body>
</html>