<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/background.css">
    <link rel="stylesheet" href="/css/experience.css">
    <link rel="stylesheet" href="/css/hobbie.css">

    <script src="/js/experiences.js"></script>
    <script src="/js/formations.js"></script>
    
    <title>Background</title>
</head>

<body>

    <?php include("./template/header.php"); ?>

    <!-- formation -->
    <article class="p-5">
        <?php include("./content/formation.php"); ?>
    </article>

    <!-- experience -->
    <article class="p-5 bg-light">
        <?php include("./content/experience.php") ?>
    </article>

    <!-- hobbie -->
    <article class="p-5">
        <?php include("./content/hobbie.php") ?>
    </article>
    
    <?php include("./template/footer.php"); ?>

</body>

</html>