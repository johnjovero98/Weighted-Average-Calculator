<?php
$asgn_count = isset($_GET['asgn-count']) ? $_GET['asgn-count'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weighted Average Calculato0r</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="container-xl">
    <header class="mb-4">
        <img src="img/calculator.png" alt="calculator icon">
        <h1>Weighted Average Calculator</h1>
    </header>

    <div class="grid-col">
        <section class="asgn-counter">
            <h2 class="mb-3">Calculate Your Final Grade</h2>
            <p>Enter the number of assignments you have completed so far.</p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                <label class="form-label" for="asgn-count">Number of Assignments:</label>

                <input class="form-control w-50" type="number" name="asgn-count" id="asgn-count" min="1" max="20"
                    value="<?php echo $asgn_count ?>" required>
                <input class="btn btn-primary my-3" type="submit" name="generate-tables" id="generate-tables"
                    value="Generate Tables">
            </form>
        </section>

        <!-- calculator -->
        <section class="calculator-table">
            <h2>Grade Calculator</h2>
            <?php include('render-table.php') ?>
        </section>

        <section class="results">
            <h2>Results</h2>
            <?php include('render-results.php') ?>
        </section>
    </div>
</body>
</html>

<!-- 
image attribution
<a href="https://www.flaticon.com/free-icons/calculator" title="calculator icons">Calculator icons created by Smashicons - Flaticon</a>
 -->