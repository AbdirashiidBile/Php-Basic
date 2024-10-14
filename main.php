<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops and Calculations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #007BFF;
        }
        .output {
            background: #fff;
            border-radius: 5px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        pre {
            background: #eee;
            padding: 10px;
            border-radius: 5px;
            overflow: auto;
        }
    </style>
</head>
<body>

<?php
$i = 1;

// Loop to count from 1 to 15 and print each number
echo "<div class='output'><h2>Counting from 1 to 15:</h2><pre>";
while ($i <= 15) {
    echo "$i, ";
    $i++;
}
echo "</pre></div>";

// Reset the counter and loop to count from 1 to 14
$i = 1;
echo "<div class='output'><h2>Counting from 1 to 14:</h2><pre>";
while ($i < 15) {
    echo "$i, ";
    $i++;
}
echo $i; // Output the value of i after the loop
echo "</pre></div>";

echo "<br>";

// Multiplication table of 12
$count = 1;
echo "<div class='output'><h2>Multiplication Table of 12:</h2><pre>";
while ($count <= 12) {
    echo "$count times 12 is " . ($count * 12) . "<br>";
    ++$count;
}
echo "</pre></div>";

echo "<br>";

// Calculate the factorial of 5
$result = 1;
$n = 5;
do {
    $result *= $n; // Multiply result by n
    $n--; // Decrease n
} while ($n > 0);
echo "<div class='output'><h2>Factorial of 5:</h2><pre>";
echo $result; // Output the factorial result
echo "</pre></div>";

echo "<br>";

// Define weeks and days for nested loops
$weeks = 3;
$days = 7;

// Outer loop to print weeks
echo "<div class='output'><h2>Weeks and Days:</h2>";
for ($i = 1; $i <= $weeks; ++$i) {
    echo "Week: " . $i . "<br>";

    // Inner loop to print days
    for ($j = 1; $j <= $days; ++$j) {
        echo "  Day: " . $j . "<br>";
    }
}
echo "</div>";

// Multiplication table of 12 again using a for loop
echo "<div class='output'><h2>Multiplication Table of 12 (For Loop):</h2><pre>";
for ($count = 1; $count <= 12; ++$count) {
    echo "$count times 12 is " . ($count * 12) . "<br>";
}
echo "</pre></div>";

// Count from 1 to 15 using a for loop
echo "<div class='output'><h2>Counting from 1 to 15 (For Loop):</h2><pre>";
for ($count = 1; $count <= 15; $count++) {
    echo "$count " . "<br>";
}
echo "</pre></div>";

// Print squares of numbers from 1 to 10
echo "<div class='output'><h2>Squares of Numbers from 1 to 10:</h2><pre>";
for ($i = 1; $i <= 10; $i++) {
    echo "The square of $i is " . ($i * $i) . "<br>";
}
echo "</pre></div>";

// Count from 1 to 15, but break at 10
$i = 1;
echo "<div class='output'><h2>Counting with Break:</h2><pre>";
while ($i <= 15) {
    echo "$i, ";
    $i++;
    if ($i == 10) {
        break; // Breaks the loop when i reaches 10
    }
}
echo "</pre></div>";
?>

</body>
</html>