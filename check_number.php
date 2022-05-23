<?php
if (isset($_POST["lucky"]) && $_POST["lucky"] == "999999") {
    echo "You so lucky: KMUTTCTF{YoU_So_Luckyyyy}";
} else {
    echo "Unlucky please try again.";
}
