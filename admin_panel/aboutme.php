<?php include'aboutmeclass.php';

$profile = new aboutmeclass($info);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<section id="infoPage">

    <img src="<?php echo $profile->photoURL()?>" alt="<?php echo $profile->fullName()?>" width="164" height="164" />

    <header>
        <h1><?php echo $profile->fullName()?></h1>
        <h2><?php echo $profile->tags()?></h2>
    </header>

    <p class="description"><?php echo nl2br($profile->description())?></p>

    <a href="<?php echo $profile->facebook()?>" class="grayButton facebook">Find me on Facebook</a>
    <a href="<?php echo $profile->twitter()?>" class="grayButton twitter">Follow me on Twitter</a>

    <ul class="vcard">
        <li class="fn"><?php echo $profile->fullName()?></li>
        <li class="org"><?php echo $profile->company()?></li>
        <li class="tel"><?php echo $profile->cellphone()?></li>
        <li><a class="url" href="<?php echo $profile->website()?>"><?php echo $profile->website()?></a></li>
    </ul>

</section>


</body>
</html>