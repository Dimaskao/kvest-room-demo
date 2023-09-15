<header data-bs-theme="dark">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="main">NewsPortal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="main">Головна</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kvestrooms">Квест кімнати</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">Про сайт</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts">Контакти</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="" style="margin-right: 50px; color: bisque">
                Вітаємо Вас, <span style="color: lime"><?= $this->user ?>!</span>
              </a>
            </li>
          <?php if ($this->user === 'Гість'): ?>
            <li class="nav-item">
              <a class="nav-link" href="signin">Вхід</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup">Рєєстрація</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="signout">Вихід</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile">Профіль</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</header>