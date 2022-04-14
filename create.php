<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="leirasbazis.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Új Leírás - LeírásBázis</title>

    <style>
        .content {
            width: 60%;
        }
    </style>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="content">

        <h2 class="page-title">Új Leírás</h2>

        <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

        <form action="create.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Cím</label>
                <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
            </div>
            <div class="genyo">
                <label>Szöveg</label>
                <textarea name="body" id="body"><?php echo $body ?></textarea>
            </div>
            <div>
                <label>Kép</label>
                <input type="file" name="image" class="text-input">
            </div>
            <div>
                <label>Kategória</label>
                <select name="topic_id" class="text-input">
                    <option value=""></option>
                    <?php foreach ($topics as $key => $topic) : ?>
                        <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                            <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                        <?php else : ?>
                            <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                        <?php endif; ?>

                    <?php endforeach; ?>

                </select>
            </div>
            <div>
                <button type="submit" name="add-post" class="btn btn-big">Küldés</button>
            </div>
        </form>

    </div>


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>