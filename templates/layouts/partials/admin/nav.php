<nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 20px;">
    <a class="navbar-brand" href="<?= route('homepage')?>">
        <img src="/images/laventure_red.png" width="40" height="40" alt="">
        <?= env('APP_NAME')?>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= route('admin.dashboard') ?>">панель управления</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= route('admin.users') ?>">пользователи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Привет, админ!</a>
            </li>
        </ul>
    </div>
</nav>