
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);

} else {
    header("Location: index.html");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Successful</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .result {
            background: white;
            max-width: 500px;
            margin: 50px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #bdb4d8;
        }

        .result h1 {
            color: green;
        }

        .result p {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #eee;
        }

        .back {
            display: block;
            text-align: center;
            background: #7655bd;
            color: white;
            padding: 12px;
            text-decoration: none;
            border-radius: 7px;
        }
    </style>
</head>

<body>

<div class="result">

    <h1>Application Submitted!</h1>

    <p><b>Name:</b> <?php echo $name; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Mobile:</b> <?php echo $phone; ?></p>
    <p><b>Date of Birth:</b> <?php echo $dob; ?></p>
    <p><b>Gender:</b> <?php echo $gender; ?></p>
    <p><b>Course:</b> <?php echo $course; ?></p>
    <p><b>Address:</b> <?php echo nl2br($address); ?></p>

    <h3 style="text-align:center; color:green;">
        Thank you for registering!
    </h3>

    <a href="index.html" class="back">Back to Registration</a>

</div>

</body>
</html>
