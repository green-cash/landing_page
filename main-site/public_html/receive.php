<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JMWLZPBN0B"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JMWLZPBN0B');
    </script>
    
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Green Cash | Thank You!</title>
    <meta name="description" content="Green Cash - Thank you page">

    <!-- Open Graph -->
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Green Cash | Thank You!"/>
    <meta property="og:description" content="While we save the planet, you got savings from your purchases - Green Cash, turning waste into money."/>
    <meta property="og:url" content="https://greencash.tech/receive.php"/>
    <meta property="og:image" content="https://greencash.tech/assets/images/logo.jpg"/>
    <meta property="og:locale" content="en_us"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSSs -->
    <link rel="stylesheet" href="assets/css/normalize-reset.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/receive.css" type="text/css"/>

    <!-- Icon -->
    <link rel="icon" href="icon.png" type="image/x-icon"/>
</head>
<body class="center">   
    <main class="container center">
        <div class="title center">
            <!-- Logo Green Cash -->
            <a href="index.html" class="logo" title="Home"><img class="img" src="assets/images/logo-transparent.png" alt="Logo - Go To Home"></a>
            <!-- Success Message -->
            <img class="img-success" src="assets/images/success.png" alt="Success"/>
            <h1>Thank You!</h1>
            <span class="msg">We're glad to have you on board. Soon new updates are coming.</span>
        </div>
    </main>
</body>
</html>

<!-- PHP -->
<?php

// Gets user data
$nome = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if ($nome && $email) {

    // Store the data on the file
    $users = file_get_contents("../data/user_data_from_landing_page_1.txt");
    $users .= $nome."/".$email.";";
    file_put_contents("../data/user_data_from_landing_page_1.txt", $users);

} else {
    // Store is that is any error
    file_put_contents("../data/error_list.txt", "error;");
}
?>
