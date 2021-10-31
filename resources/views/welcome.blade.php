@extends('layouts.app')

@section('title')Добро пожаловать к нам@endsection

@section('content')
<section class="mb-3">
  <div class="container">
    <div class="row flex-sm-row-reverse align-items-center">
      <div class="col-sm-6 text-end">
        <img src="storage/images/pattern3.jpg" class="img-fluid shadow-lg rounded" alt="Bootstrap Themes" width="400" height="300" loading="lazy">
      </div>
      <div class="col-sm-6 mt-2 mt-sm-0">
        <h1 class="display-5 fw-bold lh-1 mb-3">Декоративно. Эффектно. Текстурно.</h1>
        <p class="lead" align="justify">Добро пожаловать на мой сайт! Меня зовут, Алексей, и я тот, кто превратит Ваши стены в изюминку Вашего интерьера. Я 10 лет делаю декоративную штукатурку.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-sm-between">
          <button type="button" class="btn btn-outline-primary btn-lg px-4 me-md-2">Связаться для заказа</button>
          <button type="button" class="btn btn-outline-dark btn-lg px-4">Познакомиться поближе</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="my-5">
  <div class="marquee" data-duration='15000' data-duplicated='true'>Декоративная. Декоративная. Декоративная. Декоративная. Декоративная. Декоративная. Декоративная. Декоративная. Декоративная.</div>
  <div class="marquee" data-duration='15000' data-duplicated='true' data-direction='right'>Штукатурка. Штукатурка. Штукатурка. Штукатурка. Штукатурка.  Штукатурка. Штукатурка. Штукатурка. Штукатурка. Штукатурка.</div>
</section>
<section class="my-5">
  <div class="container">
    <div class="row flex-sm-row-reverse align-items-center">
      <div class="col-sm-6 text-end">
        <img src="storage/images/me.jpg" class="img-fluid shadow-lg rounded" alt="Bootstrap Themes" width="400" height="300" loading="lazy">
      </div>
      <div class="col-sm-6 mt-2 mt-sm-0">
        <h1 class="display-5 fw-bold lh-1 mb-3">Обо мне</h1>
        <p class="lead" align="justify">Добро пожаловать на мой сайт! Меня зовут, Алексей, и я тот, кто превратит Ваши стены в изюминку Вашего интерьера. Я 10 лет делаю декоративную штукатурку. Я 10 лет делаю декоративную штукатурку. Я 10 лет делаю декоративную штукатурку.</p>

        <div class="d-flex flex-row justify-content-end mb-3">
          <div class="p-2"><a href="#" class="contact-link p-2 lead">Подробнее</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="my-5">
  <projects-component></projects-component>
</section>
@endsection
