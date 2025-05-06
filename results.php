
<?php
    // get number from the textfield
    $age = $_POST['userAge'];
    $rRatedMovies = 17;
    $pg13Movies = 13;
    $pgMovies = 10;
    $gMovies = 5;


    <?php
    if ($age >= $rRatedMovies) {
        echo 'You are old enough to watch R rated movies.';
    }
    else if ($age >= $pg13Movies) {
        echo 'You are old enough to watch PG-13 rated movies.';
    }
    else if ($age >= $pgMovies) {
        echo 'You are old enough to watch PG rated movies.';
    }
    else if ($age >= $gMovies) {
        echo 'You are old enough to watch G rated movies.';
    }
    else {
        echo 'Enter a valid age.';
    }
    ?>
?>

