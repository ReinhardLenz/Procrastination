

<?php include('../templates/header.php'); ?>

<?php
$xml=simplexml_load_file($_SERVER['DOCUMENT_ROOT'] ."/language_xml/languages_procrastination.xml") or die("xml not found!");
$INS1 =$xml->INS1->$lang;
$INS2 =$xml->INS2->$lang;
$INS3 =$xml->INS3->$lang;
$INS4 =$xml->INS4->$lang;
$INS5 =$xml->INS5->$lang;
$INS6 =$xml->INS6->$lang;
$INS7 =$xml->INS7->$lang;
$INS8 =$xml->INS8->$lang;
$INS9 =$xml->INS9->$lang;
$INS10 =$xml->INS10->$lang;
$INS11 =$xml->INS11->$lang;
$INS12 =$xml->INS12->$lang;
$K_selected = isset($_POST["K"]) ? (int)$_POST["K"] : 5;
$P_selected = isset($_POST["P"]) ? (int)$_POST["P"] : 20;
$M_selected = isset($_POST["M"]) ? (int)$_POST["M"] : 3;
$V_selected = isset($_POST["V"]) ? (int)$_POST["V"] : 5;
$E_selected = isset($_POST["E"]) ? (int)$_POST["E"] : 5;
$L_selected = isset($_POST["L"]) ? (int)$_POST["L"] : 0;
$H_selected = isset($_POST["H"]) ? (int)$_POST["H"] : 5;
?>
<head>

    <title>procrastination</title>

</head>
<body>
<br>

<img src="salvador-dali-clock-painting-24.jpg" alt="3" width="300" height="218">
<br>
<h1><?php echo $INS9; ?></h1>
<br>
<p><?php echo $INS10; ?></p>
<br>

<br>
<img src="equation.png" alt="2" width="273" height="88">
<p>




<div id="procrastination-container">
    <canvas id="myCanvas" width="400" height="300"></canvas>
    <!-- Start the form and submit to the same file -->
    <form action="" method="POST">
        <!-- Container K with first input field -->
        <div id="procrastination-container_K" class="procrastination-form-container">
            <label for="number">K</label>
            <select name="K" id="K">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    $selected = ($i == $K_selected) ? 'selected' : '';
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
        </div>
        <!-- Container P with first input field -->
        <div id="procrastination-container_P" class="procrastination-form-container">
            <label for="number">P</label>
            <select name="P" id="P">
                <?php
                for ($i = 1; $i <= 50; $i++) {
                    $selected = ($i == $P_selected) ? 'selected' : '';
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
        </div>
        <!-- Container M with input field -->
        <div id="procrastination-container_M" class="procrastination-form-container">
            <label for="number">M</label>
            <select name="M" id="M">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    $selected = ($i == $M_selected) ? 'selected' : '';
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
        </div>
        <!-- Container V with option type input field -->
        <div id="procrastination-container_V" class="procrastination-form-container">
            <label for="number">V</label>
            <select name="V" id="V">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    $selected = ($i == $V_selected) ? 'selected' : '';
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
        </div>
        <!-- Container E with option type input field -->
        <div id="procrastination-container_E" class="procrastination-form-container">
            <label for="number">E</label>
            <select name="E" id="E">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    $selected = ($i == $E_selected) ? 'selected' : '';
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
        </div>
        <!-- Container E with option type input field -->
        <div id="procrastination-container_E_RESULT" class="procrastination-form-container">
            <p><?php echo "E  ". $E_selected; ?></p>
    </div>
        <!-- Container L with option type input field -->
        <div id="procrastination-container_L" class="procrastination-form-container">
            <label for="number">L</label>
            <select name="L" id="L">
                <?php
                for ($i = -5; $i <= 5; $i++) {
                    $selected = ($i == $L_selected) ? 'selected' : '';
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
        </div>
        <!-- Container H with option type input field -->
        <div id="procrastination-container_H" class="procrastination-form-container">
            <label for="number">H</label>
            <select name="H" id="H">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    $selected = ($i == $H_selected) ? 'selected' : '';
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
        </div>
        <!-- Container 3 with submit button -->
        <div id="procrastination-submit-container3" class="procrastination-form-container">
            <input type="submit" value="calculate">
        </div>
    </form>
    <?php
    // Handle form submission within the same file
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $K = isset($_POST["K"]) ? (int)$_POST["K"] : null;
        $P = isset($_POST["P"]) ? (int)$_POST["P"] : null;
        $M = isset($_POST["M"]) ? (int)$_POST["M"] : null;
        $V = isset($_POST["V"]) ? (int)$_POST["V"] : null;
        $E = isset($_POST["E"]) ? (int)$_POST["E"] : null;
        $L = isset($_POST["L"]) ? (int)$_POST["L"] : null;
        $H = isset($_POST["H"]) ? (int)$_POST["H"] : null;
        // Ensure the inputs are numeric
        if (is_numeric($K) && is_numeric($P) && is_numeric($M) && is_numeric($V)&& is_numeric($E)&& is_numeric($L)&& is_numeric($H)) {
            // Sum the inputs

            $x = ((($K*50) / $P^2)+ ($V^2) + ($E* $L))/($H*$M*$E);

            if ($x<1) {
                    echo "<div class='procrastination-form-container' style='top: 240px; left: 10px;'><p>T= $x</p><p>$INS12</p></div>";
                } else{
                    echo "<div class='procrastination-form-container' style='top: 240px; left: 10px;'><p>T= $x</p><p>$INS11</p></div>";
                }
        } else {
            echo "<div class='procrastination-form-container' style='top: 240px; left: 10px; color: red;'><p>Invalid input: please enter numbers.</p></div>";
        }
    }
    ?>
</div>
<script>
    var canvas = document.getElementById('myCanvas');
    var context = canvas.getContext('2d');
    // Create an image element
    var img = new Image();
    img.src = 'canvas_equation.png';
    // Draw the image on the canvas once it loads
    img.onload = function() {
        context.drawImage(img, 0, 0, canvas.width, canvas.height);
    };
</script>
<br>
<p><?php echo $INS1; ?></p>
<p><?php echo $INS2; ?></p>
<p><?php echo $INS3; ?></p>
<p><?php echo $INS4; ?></p>
<p><?php echo $INS5; ?></p>
<p><?php echo $INS6; ?></p>
<p><?php echo $INS7; ?></p>
<p><?php echo $INS8; ?></p>
<br>
<?php include('../templates/footer.php'); ?>



</body>
</html>