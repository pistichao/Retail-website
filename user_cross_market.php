<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Market - User Visit History</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/shop-homepage.css" rel="stylesheet">

</head>

<body>

<div><br></div>

<!-- Navigation -->
<?php
include "header.php";
//$url = "https://www.shengtao.website/company/api/users.php";
//$ch = curl_init();
# set get
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

# set post
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$res = curl_exec($ch);
//curl_close($ch);
//$res = json_decode($res, true);

// check if the cookie remembered the user info
if (isset($_COOKIE['username'])) {
    // if so, passed to session directory
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['islogin'] = 1;
}
$email = "admin@email.com";
if (isset($_SESSION['islogin'])) {
// if already logged in
    $email = $_SESSION['username'];
}

$urls = array("http://pichao314.com/trend.php",
    "http://ryanhw.com/api/uservisiting.php",
    "https://www.shengtao.website/company/api/site/user-last-visited.php",
    "http://xunand.com/history.php");

foreach ($urls as $url) {
    try {
        $ch = curl_init();
        $name = array("username" => $email);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $name);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($result, true);
        echo "Custormer " . $email . "'s last visit at " . explode('/', $url)[2];
        echo "<table border='1' class='table'>
            <thead class='thead-dark'>
            <tr>
            <th>Product Name</th>
            <th>Last Visit</th>
            </tr>
            </thead>";
        foreach ($data as $row) {
            echo "<tr>";
            if (!isset($row['product_name'])) {
                print_r(explode('/', $row['url']));
                $row['product_name'] = explode('/', $row['url'])[0];
            }
            echo "<td><a href='" . $row['url'] . "'>" . $row['product_name'] . "</a> </td>";
            echo "<td>" . $row['timestamp'] . "</td>";
            echo "</tr>";
        }


        echo "</table>";
        echo "<br>";
    } catch (Exception $e) {
        throw new Exception("Invalid URL", 0, $e);
    }
}

include "footer.php"
?>

</body>

</html>
