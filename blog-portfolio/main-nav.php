<nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 0px;">
    <div class="container">
        <!-- BRAND -->
         <!-- ！！！！！ダッシュボードで良いか確認！！！！！ -->
        <a href="dashboard.php" class="navbar-brand">
            <h1 class="h4 mb-0 text-uppercase">Bloggen</h1>
        </a>
        <!-- LINKS -->
        <ul class="navbar-nav">
            <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashbord</a></li>
            <li class="nav-item"><a href="users.php" class="nav-link">Users</a></li>
            <li class="nav-item"><a href="posts.php" class="nav-link">Posts</a></li>
            <li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="profile.php" class="nav-link fw-bold"><?= $_SESSION['full_name'] ?></a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Log out</a></li>
        </ul>
    </div>
</nav>