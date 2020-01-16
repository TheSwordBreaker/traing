<form action="#" method="post">
    Enter the length of Rectangle:<input type="text" name="l"><br>

    Enter thr breadth of Rectangle:<input type="text" name="b"><br>

    <select name="op">
        <option value="area"> Area</option>
        <option value="peri"> Perimeter</option>
    </select>
    <input type="submit" value="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $l = $_POST["l"];
    $b = $_POST["b"];
    if (isset($_POST["op"])) {
        $op = $_POST["op"];
        if ($op == "area") {
            echo "The area of Rectangle is " . ($l * $b);
        } else if ($op == "peri") {
            echo "The Perimeter of Rectangle is " . (2 * ($l + $b));
        }
    }
}

?>