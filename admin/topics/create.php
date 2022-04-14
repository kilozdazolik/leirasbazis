<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="leirasbazis.png" type="image/x-icon">
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">
        <link rel="stylesheet" href="../../assets/css/style.css">

        <link rel="stylesheet" href="../../assets/css/admin.css">

        <title>Létrehozás - LeírásBázis</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Kategória hozzáadása</a>
                    <a href="index.php" class="btn btn-big">Kategória szerkesztése</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Kategória hozzáadása</h2>
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="create.php" method="post">
                        <div>
                            <label>Név</label>
                            <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
                        </div>
                        <div>
                            <label>Leírás</label>
                            <textarea name="description" id="body"><?php echo $description ?></textarea>
                        </div>

                        <div>
                            <button type="submit" name="add-topic" class="btn btn-big">Létrehozás</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <script src="../../assets/js/scripts.js"></script>

    </body>

</html>