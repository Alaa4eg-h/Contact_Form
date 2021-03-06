<?php
// CHECK IF USER COMMING FROM REQUEST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ASSIGN VARIABLES
    $user = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['cellphone'];
    $message = $_POST['message'];

    // CREATING ARRAY OF ERRORS
    $formErrors = array();

    if (strlen($user) <= 3) {
        $formErrors[] = 'Username Must Be Larger Than' . " " . '<strong>' . strlen($user) . '</strong>' . " Character";
    }

    if (strlen($message) < 10) {
        $formErrors[] = 'Messgae Can\'t Be Less Than' . " " . '<strong>' . strlen($message) .  '</strong>' . " Character";
    }
}




?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form | PRO</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- START FORM -->

    <div class="container">
        <h1 class="text-center">Contact Me</h1>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="contact-form">
            <div class="alert alert-danger" role="strat">
                <?php
                if (isset($formErrors)) {
                    foreach ($formErrors as $error) {
                        echo $error . "<br>";
                    }
                }
                ?>
            </div>
            <input type="text" name="username" id="" placeholder="Type Your Username" class="form-control">
            <i class="fa fa-user fa-fw form__icon"></i>

            <input type="email" name="email" id="" placeholder="Type Your Valid E-mail" class="form-control">
            <i class="fa fa-envelope fa-fw form__icon"></i>
            <input type="text" name="cellphone" id="" placeholder="Type Your Mobile" class="form-control">
            <i class="fa fa-phone fa-fw form__icon"></i>
            <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Your Message"></textarea>

            <input type="submit" value="Send Message" class="btn btn-primary">
            <i class="fa fa-paper-plane fa-fw form__icon"></i>
        </form>
    </div>







    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js//bootstrap.bundle.min.js"></script>
    <script src="./js/all.min.js"></script>
</body>

</html>