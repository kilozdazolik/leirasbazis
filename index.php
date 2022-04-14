<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Felkapott leírások';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "Erre kerestél rá - '" . $_GET['name'] . "'";
  $paginatedPosts = getPaginatedPosts();
} else if (isset($_POST['search-term'])) {
  $postsTitle = "Erre kerestél rá - '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
  $paginatedPosts = getPaginatedPosts();
}elseif(isset($_GET['username'])) {
  $username = $_GET['username'];
  $postsTitle = "'" . $username . "' leírásai";
  $posts = getPostsByUsername($username);
  $paginatedPosts = getPaginatedPosts();
} else {
  $posts = getPublishedPosts();
  $paginatedPosts = getPaginatedPosts();
}

if (isset($_GET['page']) && isset($_GET['ajax'])) {
  $paginatedPosts = getPaginatedPosts($_GET['page']);
  echo json_encode($paginatedPosts);
  exit();
}

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

  <title>LeírásBázis</title>
</head>

<body>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>



  <div class="page-wrapper">

    <div class="post-slider">
      <h1 class="slider-title"><?= $postsTitle ?></h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <?php foreach ($posts as $post) : ?>
          <div class="post">
            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
              <a href="index.php?username=<?= $post['username']; ?>">
                <i class="far fa-user"> <?php echo $post['username']; ?></i>
              </a>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
            </div>
          </div>
        <?php endforeach; ?>


      </div>

    </div>

    <!-- fő flex -->
    <div class="content clearfix">

      <!-- main -->
      <div class="main-content">
        <div class="post-list">
          <h1 class="recent-post-title">Friss leírások</h1>

          <?php foreach ($paginatedPosts['posts'] as $post) : ?>
            <div class="post clearfix">
              <img src="<?php echo $post['image']; ?>" alt="" class="post-image">
              <div class="post-preview">
                <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                <a href="index.php?username=<?= $post['username']; ?>">
                  <i class="far fa-user"> <?php echo $post['username']; ?></i>
                </a>

                &nbsp;
                <i class="far fa-calendar"> <?php echo $post['created_at']; ?></i>
                <p class="preview-text">
                  <?php echo $post['body']; ?>
                </p>
                <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Tovább...</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="pagination-links" style="display: flex; justify-content: center;">
          <button type="button" class="btn read-more load-more-btn">Mutass többet...</button>
        </div>

      </div>
      <!-- // main vége -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Keresés</h2>
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Keresés...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Kategóriák</h2>
          <ul>
            <?php foreach ($topics as $key => $topic) : ?>
              <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

    </div>
    <!-- // fő flex vége -->

  </div>
  <!-- // page wrapper vége -->

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="assets/js/scripts.js"></script>

  <script>
    const loadMoreBtn = document.querySelector('.load-more-btn');
    const postList = document.querySelector('.post-list');
    const paginationLinks = document.querySelector('.pagination-links');

    function displayPosts(posts) {
      posts.forEach(post => {
        let postHtmlString = `
        <div class="post clearfix">
              <img src="${post.image}" alt="" class="post-image">
              <div class="post-preview">
                <h2><a href="single.php?id=${post.id}">${post.title}</a></h2>
                <a href="index.php?username=${post.username}">
                <i class="far fa-user"> ${post.username}</i>
                </a>
                &nbsp;
                <i class="far fa-calendar"> ${post.created_at}</i>
                <p class="preview-text">
                  ${post.body}
                </p>
                <a href="single.php?id=${post.id}" class="btn read-more">Tovább...</a>
              </div>
          </div>`;

        const domParser = new DOMParser();
        const doc = domParser.parseFromString(postHtmlString, 'text/html');
        const postNode = doc.body.firstChild;
        postList.appendChild(postNode);
      });
    }

    let nextPage = 2;

    loadMoreBtn.addEventListener('click', async function(e) {
      loadMoreBtn.textContent = 'Betöltés...';
      const response = await fetch(`index.php?page=${nextPage}&ajax=1`);
      const data = await response.json();

      displayPosts(data.posts);
      nextPage = data.nextPage;
      if (!data.nextPage) {
        paginationLinks.innerHTML = '<div style="color: gray;"> Nincs több leírás! </div>'
      } else {
        loadMoreBtn.textContent = 'Mutass többet...'
      }
    });
  </script>
</body>

</html>