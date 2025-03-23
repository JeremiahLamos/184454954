<!DOCTYPE html>
<html lang="en">
<head>
   <Title>PHP INTRO</Title>
</head>
<body>
    <?php

$a = 15;
$b = 7;

$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;

echo "Sum: $sum\n";
echo "Difference: $difference\n";
echo "Product: $product\n";
echo "Quotient: $quotient\n";
?>

<br><br>

<?php

function checkEvenOdd($num) {
    if ($num % 2 == 0) {
        echo "$num is an even number.\n";
    } else {
        echo "$num is an odd number.\n";
    }
}


function checkSign($num) {
    if ($num > 0) {
        echo "$num is a positive number.\n";
    } elseif ($num < 0) {
        echo "$num is a negative number.\n";
    } else {
        echo "$num is zero.\n";
    }
}

$number = 15;

checkEvenOdd($number);
checkSign($number);
?>


<br><br>


<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo "$i\n";
    }
}

echo "\n"; 

$fib = [0, 1];
$limit = 10;
for ($i = 2; $i < $limit; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

foreach ($fib as $num) {
    if ($num % 2 == 0) {
        echo "$num\n";
    }
}
?>


<br><br>


<?php

function greet($name) {
    return "Hello, $name! Welcome!";
}

function square($num) {
    return $num * $num;
}

$name = "John";
$number = 5;

echo greet($name) . "\n";
echo "The square of $number is " . square($number) . "\n";
?>


<br><br>

<form method="POST" action="">
        <label for="user_input">Enter text:</label>
        <input type="text" id="user_input" name="user_input" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = htmlspecialchars($_POST["user_input"]);
        echo "<p>You entered: $input</p>";
    }
    ?>
</body>
</html>