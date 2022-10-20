<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body bgcolor="yellow">
    <form method="post" action="switch_cal.php">
        <table border="2px" bgcolor = "cyan">
            <tr>
                <td>
                    <input type="number" name="no1" placeholder="NUMBER 1">
                </td>
                <td>
                    <input type="number" name="no2" placeholder="NUMBER 2">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="+">

                    <input type="submit" name="submit" value="-">
                </td>
                <td>
                    <input type="submit" name="submit" value="*">
                
                    <input type="submit" name="submit" value="/">
                </td>
            </tr>
        </table>
    </form>
</body>
<?php
function sum(float $a, float $b)
{
    $z = $a + $b;
    return $z;
}
function sub(float $a, float $b)
{
    $z = $a - $b;
    return $z;
}
function mul(float $a, float $b)
{
    $z = $a * $b;
    return $z;
}
function div(float $a, float $b)
{
    $z = $a / $b;
    return $z;
}
if (isset($_POST['submit'])) {
    $no1 = $_POST['no1'];
    $no2 = $_POST['no2'];
    $result = $_POST['submit'];

    switch ($result) {
        case '+':
            $ans = sum($no1, $no2);
            echo "addition is : " . $ans . "<br>";
            break;

        case '-':
            $ans = sub($no1, $no2);
            echo "subtraction is : " . $ans . "<br>";
            break;

        case '*':
            $ans = mul($no1, $no2);
            echo "multiplication is : " . $ans . "<br>";
            break;

        case '/':
            $ans = div($no1, $no2);
            echo "division is : " . $ans . "<br>";
            break;
        default:
            echo "invalid input";
            break;
    }
}
?>

</html>