<!DOCTYPE html>
<html>

<head>
    <title>PHP POST Method</title>

    <style>

        body{
            font-family: Arial;
            background-color: lightgray;
            padding: 20px;
        }

        .box{
            background-color: white;
            padding: 20px;
            width: 350px;
            border-radius: 10px;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }

        button{
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
        }

    </style>

</head>

<body>

<div class="box">

    <h2>User Registration Form</h2>

    <form method="POST">

        <label>Name:</label>
        <input type="text" name="name">

        <label>Email:</label>
        <input type="email" name="email">

        <button type="submit">
            Submit
        </button>

    </form>

    <?php

    // Check form submission
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Display submitted data
        echo "<h3>Submitted Information</h3>";

        echo "Name: " . $name . "<br>";

        echo "Email: " . $email;
    }

    ?>

</div>

</body>

</html>