<header>
    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
      <h1 class="logo-text"><span>Leírás</span>Bázis</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">

      <?php if (isset($_SESSION['id'])): ?>
        <li><a href="<?php echo BASE_URL . '/create.php' ?>">Új leírás</a></li>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Admin</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Kijelentkezés</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL . '/register.php' ?>">Regisztráció</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>">Bejelentkezés</a></li>
      <?php endif; ?>
    </ul>
</header>