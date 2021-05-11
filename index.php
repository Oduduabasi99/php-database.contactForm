
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
include "includes/config.php";

?>
<body>
    <div class="container">
        <div class="header">
            <h2>Contact Us</h2>
        </div>
        <form action="includes/submit.php" method="post" role="form" class="form" id="form">
            <div class="form-control">
                <label>Name</label>
                <input type="text" placeholder="name" name="name" id="username">
                <p></p>
            </div>
            <div class="form-control">
                <label>Email</label>
                <input type="email" placeholder="email" name="email" id="email">
                <p></p>
            </div>
            <div class="form-group">
        <label for="name">Message</label>
        <textarea type="text" placeholder="message" class="form-control" name="message" rows="5" cols="40"></textarea>
        <p></p>
        </div>

            <button class="submit" name="submit" type="submit" value="submit">Submit</button>
        </form>
    </div>
</body>

</html>