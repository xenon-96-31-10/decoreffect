<nav class="navbar navbar-expand-sm">
  <div class="container bg-transparent align-items-center">
    <div class="justify-content-start">
      <a class="brandText h4" href="{{route('welcome')}}">Декор. Эффект.</a>
    </div>
    <div class="justify-content-center">
      <div class="d-none d-sm-flex justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Обо мне</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('projects')}}">Проекты</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Каталог
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Текстуры</a></li>
              <li><a class="dropdown-item" href="{{route('projects')}}">Проекты</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Партнеры</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Отзывы</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="justify-content-end">
      <button class="btn my-1" id="humburgerIcon" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu">
        <i class="bi bi-three-dots display-4" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu"></i>
      </button>
    </div>
  </div>
</nav>
<div class="offcanvas bg-dark offcanvas-end border-0" tabindex="-1" id="menu" aria-labelledby="menuLabel">
  <div class="offcanvas-header">
    <h1 class="brandLogo"><span class="d-block d-sm-none">Меню.</span><span class="d-none d-sm-block">Меню. Меню. Меню.</span></h1>
    <button type="button" class="btn-close btn-close-white" id="menuClose" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="container">
      <div class="row g-1">
        <div class="col-sm-4">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">01 / Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">02 / Обо мне</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">03 / Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('projects')}}">04 / Проекты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">05 / Контакты</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul class="nav flex-column submenu">
            <li class="nav-item">
              <a class="nav-link" href="#">06 / Этапы работ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">07 / Текстуры</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">08 / Блог</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">09 / FAQ</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4">
          <div class="alert alert-secondary d-none d-sm-block" role="alert">
            <div class="text-center">
              <i class="bi bi-signpost-2-fill h2"></i>
            </div>
            <div>
              Я рад видеть Вас на моем сайте.
              В меню можно не только соориентироваться по структуре сайта, но найти быстрые способы связаться со мной, если Вы хотите задать вопрос или оформить заказ.
              Буду рад помочь Вам!
            </div>
          </div>
          <div class="my-2 text-end">
            <p><a href="mailto:info@decor.ru" class="contact-link p-2 lead">info@decor.ru</a></p>
            <p><a href="tel:+79094561788" class="contact-link p-2 lead">+7-(909)-456-17-88</a></p>
            <p><a href="#" class="contact-link p-2 lead">Оставить заявку онлайн</a></p>
          </div>
          <div class="d-flex flex-row justify-content-end mb-3">
            <div class="p-2"><a href="#" class="contact-link p-2 lead">Telegram</a></div>
            <div class="p-2"><a href="#" class="contact-link p-2 lead">VK</a></div>
            <div class="p-2"><a href="#" class="contact-link p-2 lead">Facebook</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
