<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
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

        <title>Leírások - LeírásBázis</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Leírás létrehozása</a>
                    <a href="index.php" class="btn btn-big">Leírás szerkesztése</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Leírások</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                    <table>
                        <thead>
                            <th>#</th>
                            <th>Cím</th>
                            <th>Létrehozta</th>
                            <th colspan="3"></th>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $key => $post): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $post['title'] ?></td>
                                    <td><?php echo $post['username'] ?></td>
                                    <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">szerkesztés</a></td>
                                    <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">törlés</a></td>

                                    <?php if ($post['published']): ?>
                                        <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">elrejtés</a></td>
                                    <?php else: ?>
                                        <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">közzététel</a></td>
                                    <?php endif; ?>
                                    
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

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