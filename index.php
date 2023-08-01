<!DOCTYPE html>
<html>
<head>
    <title>Basic Text Converter - Convert to Binary, Hex, Ascii</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1><a href="/textconversion/textconversion/index.php">Basic Text Converter</a></h1>
        <form action="index.php" method="post">
            <label for="text">Enter text:</label>
            <input type="text" name="text" id="text" rows="4" cols="50" required>
            <div class="conversion-options">
                <div class="option">
                    <input type="checkbox" name="convertToAscii" value="ascii" id="checkboxAscii">
                    <label for="checkboxAscii">Ascii</label>
                </div>
                <div class="option">
                    <input type="checkbox" name="convertToHex" value="hex" id="checkboxHex">
                    <label for="checkboxHex">Hex</label>
                </div>
                <div class="option">
                    <input type="checkbox" name="convertToBinary" value="binary" id="checkboxBinary">
                    <label for="checkboxBinary">Binary</label>
                </div>
            </div>
            <button type="submit">Convert</button>
        </form>

        <div class="conversion-results">
            <!-- display of result -->
            <?php
            // Check if form is submitted and text is not empty
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST["text"])) {
                $text = $_POST["text"];
                    
                    //include the conversion logic
                    require_once 'converter.php';

                    //calling the functions
                    $ascii = convertToAscii($text);
                    $hex = convertToHex($text);
                    $binary = convertToBinary($text);
                    $Input = $text;

                    if (isset($_POST["convertToAscii"]) || isset($_POST["convertToHex"]) || isset($_POST["convertToBinary"])) {

                        if (!empty($_POST["text"])) {
                            echo "<h3>Input :</h3>";
                            echo "<p>{$Input}</p>";
                        }

                        //display the results :)
                        echo "<h2>Conversion Results:</h2>";

                        if (isset($_POST["convertToAscii"])) {
                            echo "<h3>ASCII :</h3>";
                            echo "<p>{$ascii}</p>";
                        }

                        if (isset($_POST["convertToHex"])) {
                            echo "<h3>Hex :</h3>";
                            echo "<p>{$hex}</p>";
                        }

                        if (isset($_POST["convertToBinary"])) {
                            echo "<h3>Binary :</h3>";
                            echo "<p>{$binary}</p>";
                        }
                    }else {
                        echo "Please select at least one conversion option.";
                    }
                    
                }
                ?>
            </div>
        </div>
            <footer>
                <div class="footer-content">
                    <p>&copy; <?php echo date('Y'). "<br>";?><a href="https://github.com/abiodunadeniji">Abiodun Adeniji</a></p>
                </div>
        </footer>
    </body>
</html>