<?php 
require_once "./Calculator.php";

// If the submit button has been pressed
if (isset($_POST['submit'])) {

    // Check number values
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $calculator = new \App\Calculator;

        // Calculate total
        if ($_POST['operation'] == 'plus') {
            $total = $calculator->add($_POST['number1'], $_POST['number2']);
            $_POST['operation'] = '+';
        } else if ($_POST['operation'] == 'minus') {
            $total = $calculator->subtract($_POST['number1'], $_POST['number2']);
            $_POST['operation'] = '-';
        } else if ($_POST['operation'] == 'times') {
            $total = $calculator->multiply($_POST['number1'], $_POST['number2']);
            $_POST['operation'] = '*';
        } else if ($_POST['operation'] == 'divided by') {
            $total = $calculator->divide($_POST['number1'], $_POST['number2']);
            $_POST['operation'] = '/';
        }

    } else {

        // Print error message to the browser
        $total = 'Numeric values are required';
    }
}
?>