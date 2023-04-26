<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/public/assets/images/logo_IcedRoast.png">
    <link type="text/css" rel="stylesheet" href="/public/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title><?php if(isset($page_title)) echo $page_title; else echo 'IcedRoast'; ?></title>
</head>
<body>
    <?php
        $adminContent['user'] = $user;
        $adminContent['content'] = $content;
        $adminContent['sub_content'] = $sub_content;
        $this->render('blocks/header', $user);
        $this->render('blocks/adminNav', $adminContent);
        $this->render('blocks/footer');
    ?>
    <script type="text/javascript" src="/public/assets/js/script.js"></script>
</body>
</html>