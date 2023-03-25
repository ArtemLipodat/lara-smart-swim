@extends('layouts.app')

@section('content')
    @include('components/slider')
    <section class="section background section__indents">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h3 class="h3 h3__white">ПОЧЕМУ НАС ВЫБИРАЮТ</h3>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="d-flex flex-column align-items-center">
                        <div class="choose_us">
                            <div class="choose_us__img">
                                <img src="img/choose_us/choose_us01.svg">
                            </div>
                            <div class="choose_us__text">Квалифицированные тренеры</div>
                        </div>
                        <div class="choose_us">
                            <div class="choose_us__img">
                                <img src="img/choose_us/choose_us01.svg">
                            </div>
                            <div class="choose_us__text">Квалифицированные тренеры</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <div class="choose_us">
                            <div class="choose_us__img">
                                <img src="img/choose_us/choose_us01.svg">
                            </div>
                            <div class="choose_us__text">Квалифицированные тренеры</div>
                        </div>
                        <div class="choose_us">
                            <div class="choose_us__img">
                                <img src="img/choose_us/choose_us01.svg">
                            </div>
                            <div class="choose_us__text">Квалифицированные тренеры</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <div class="choose_us">
                            <div class="choose_us__img">
                                <img src="img/choose_us/choose_us01.svg">
                            </div>
                            <div class="choose_us__text">Квалифицированные тренеры</div>
                        </div>
                        <div class="choose_us">
                            <div class="choose_us__img">
                                <img src="img/choose_us/choose_us01.svg">
                            </div>
                            <div class="choose_us__text">Квалифицированные тренеры</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h3 class="h3 h3__blue">ОТЗЫВЫ КЛИЕНТОВ</h3>
            </div>
            @include('components/testimonials')
        </div>
    </section>
    <section class="section background section__indents">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h3 class="h3 h3__white">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h3>
            </div>
            <div class="faq">
                <div class="question">
                    <div class="img"><img src="img/testimonials.png" alt=""></div>
                    <div class="text">Добрый день! Подскажите, пожалуйста, у вас есть бассейн?</div>
                </div>
                <div class="answer">
                    <div class="text">Добрый день! Подскажите, пожалуйста, у вас есть бассейн?</div>
                    <div class="img"><img src="img/testimonials.png" alt=""></div>
                </div>
                <div class="question">
                    <div class="img"><img src="img/testimonials.png" alt=""></div>
                    <div class="text">Добрый день! Подскажите, пожалуйста, у вас есть бассейн?</div>
                </div>
                <div class="answer">
                    <div class="text">Добрый день! Подскажите, пожалуйста, у вас есть бассейн?</div>
                    <div class="img"><img src="img/testimonials.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h3 class="h3 h3__blue">статьи</h3>
            </div>
            @include('components/articles')
        </div>
    </section>
    <section class="section background section__indents">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h3 class="h3 h3__white">Документы</h3>
            </div>
            <div class="row justify-content-between documents">
                <div class="col-3">
                    <a href="" class="button button__white">ПУБЛИЧНАЯ ОФЕРТА</a>
                </div>
                <div class="col-3">
                    <a href="" class="button button__white">ПУБЛИЧНАЯ ОФЕРТА</a>
                </div>
                <div class="col-3">
                    <a href="" class="button button__white">ПУБЛИЧНАЯ ОФЕРТА</a>
                </div>
            </div>
            <div class="row justify-content-between documents">
                <div class="col-5">
                    <a href="" class="button button__white button_big">СОГЛАСИЕ НА ОБРАБОТКУ
                        КОНФИДЕНЦИАЛЬНОСТИ ДАННЫХ</a>
                </div>
                <div class="col-5">
                    <a href="" class="button button__white button_big">ПОЛИТИКА <br>КОНФИДЕНЦИАЛЬНОСТИ</a>
                </div>
            </div>
            <div class="d-flex justify-content-center documents__item">
                <h3 class="h3 h3__white">Согласие на обработку персональных данных для соревнований</h3>
            </div>
            <div class="row justify-content-between documents">
                <div class="col-6">
                    <a href="" class="button button__white button_big">СОГЛАСИЕ НА ОБРАБОТКУ
                        ПЕРСОНАЛЬНЫХ ДАННЫХ СПОРТСМЕНА
                        (ДЛЯ ЛИЦ СТАРШЕ 18 ЛЕТ)</a>
                </div>
                <div class="col-6">
                    <a href="" class="button button__white button_big">СОГЛАСИЕ НА ОБРАБОТКУ
                        ПЕРСОНАЛЬНЫХ ДАННЫХ СПОРТСМЕНА
                        (ДЛЯ ЛИЦ МЛАДШЕ 18 ЛЕТ)</a>
                </div>
            </div>
        </div>
    </section>
@endsection
