
<form action="">
    Celsius: <input type="text" name="cel"/>
    <input type="submit" value="Convert"/>
    <?php
    if (isset($_GET)){
        $celsius = floatval($_GET['cel']);
        $fahrenheit = ($celsius * 1.8) + 32;
        echo "$celsius &deg;C = $fahrenheit &deg;F";
    }
    ?>
</form>
<form action="">
    Fahrenheit: <input type="text" name="fah"/>
    <input type="submit" value="Convert"/>
    <?php
    $fahrenheit = floatval($_GET['fah']);
    $celsius = ($fahrenheit - 32) / 1.8;
    echo "$fahrenheit &deg;F = $celsius &deg;C";
    ?>
</form>
