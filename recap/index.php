<!DOCTYPE html>
<html>

<head>
    <title>PHP and AJAX Tutorial</title>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["input-field"];
            $response = "You entered: " . $input;
            echo $response;
        }
    ?>
</head>

<body>
    <form>
        <input type="text" id="input-field" name="input-field">
        <button type="submit" id="submit-button">Submit</button>
    </form>

    <div id="output"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>