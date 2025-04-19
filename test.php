<!DOCTYPE html>
<html>
<head>
    <title>PHP Test Script</title>
</head>
<body>
    <h1>PHP Information</h1>
    
    <?php
    // Basic PHP information
    echo "<p>PHP Version: " . phpversion() . "</p>";
    echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
    echo "<p>Current Directory: " . __DIR__ . "</p>";
    
    // Current date and time
    date_default_timezone_set('UTC');
    echo "<p>Current Time: " . date('Y-m-d H:i:s') . "</p>";
    
    // Simple calculation example
    $a = 5;
    $b = 3;
    $sum = $a + $b;
    echo "<p>Calculation Example: $a + $b = $sum</p>";
    
    // Environment information
    echo "<h2>Environment Variables</h2>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
    ?>
    
    <p><a href="index.html">Back to HTML</a></p>
</body>
</html>
