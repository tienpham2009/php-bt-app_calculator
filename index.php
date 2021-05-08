<head>
    <title>Calculator</title>
    <style>
        input{
            border-color: white;
        }
    </style>
</head>
<form method="post">
    <h1>Simple Calculator</h1>

    <fieldset style="width: 40%">
        <legend>Calculator</legend>
        First Operand : <input type="number" name="number1">
        <br>
        Operator : <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        Second Operand : <input type="number" name="number2">
        <br>
        <input type="submit" value="Calculate">
    </fieldset>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operator = $_POST['operator'];
    $text = "<h1>Result :</h1>";

    switch ($operator){
        case '+':
            echo $text.$number1."+".$number2." = ".($number1 + $number2);
            break;
        case "-" :
            echo $text.$number1."-".$number2." = ".($number1 - $number2);
            break;
        case "*":
            echo $text.$number1."*".$number2." = ".($number1 * $number2);
            break;
        case "/":
            try {
                if ($number2 != 0){
                    echo $text.$number1."/".$number2." = ".($number1 / $number2);
                } else {
                    throw new Exception("phep chia khong hop le");
                }
            }catch (Exception $e){
                echo $e->getMessage();
            }
            break;
    }
}

