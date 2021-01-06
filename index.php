<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>VACATION TIME</h1>
    <p>So you want to go on vacation but you have to convert every amount to euro, and vice-versa.<br>
        Choose a destination and we will convert it for you!</p>
    <form class="calc-curreny" method="post">
        <select name="size" required>
            <option value="">None</option>
            <option value="Brazil">Brazil</option>
            <option value="Australia">Australia</option>
            <option value="Vietnam">Vietnam</option>
        </select>
        <input type="text" name="convert" placeholder="Amount in destination">
        <input type="text" name="euro" placeholder="Amount in euro">
        <button type="submit" name="submit">Convert</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $amount = $_POST['convert'];
        $euro = $_POST['euro'];
        $destination = $_POST['size'];

        echo "You are going to: " . $destination . ".<br>";

        switch ($destination) {
            case 'Brazil':
                $exchangeRate = 6.52;
                echo "The currency in " . $destination . " is Brazilian Real.<br>";
                if (empty($_POST['euro'])) {
                    $convertedAmount = $amount * $exchangeRate;
                    echo $amount . " Brazilian Real is " . $convertedAmount . " euro.<br>";
                } else {
                    $convertedAmount = $euro * $exchangeRate;
                    echo $euro . " euro is " . $convertedAmount .  " Brazilian Real.<br>";
                }
                break;
            case 'Australia':
                $exchangeRate = 1.58;
                echo "The currency in " . $destination . " is Australian Dollar.<br>";
                if (empty($_POST['euro'])) {
                    $convertedAmount = $amount * $exchangeRate;
                    echo $amount . " Australian Dollar is " . $convertedAmount . " euro.<br>";
                } else {
                    $convertedAmount = $euro * $exchangeRate;
                    echo $euro . " euro is " . $convertedAmount .  " Australian Dollar.<br>";
                }
                break;
            case 'Vietnam':
                $exchangeRate = 28356.41;
                echo "The currency in " . $destination . " is Vietnemese Dong.<br>";
                if (empty($_POST['euro'])) {
                    $convertedAmount = $amount * $exchangeRate;
                    echo $amount . " Vietnemese Dong is " . $convertedAmount . " euro.<br>";
                } else {
                    $convertedAmount = $euro * $exchangeRate;
                    echo $euro . " euro is " . $convertedAmount .  " Vietnamese Dong.<br>";
                }
                break;
        }
    }
    ?>
</body>

</html>