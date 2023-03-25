@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page">
        <h1 class="page__title">соревнования</h1>
        <div class="competitions">
            <div class="row">
                <div class="col-6">
                    <div class="competitions__item">
                        <img src="img/competitions.png" alt="">
                        <div class="info">
                            <div class="name">SmartSwimCup</div>
                            <div class="desc">Участники 2005 - 2014 г.р.</div>
                            <div class="actions">
                                <a href="" class="button button__white__transparent">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="competitions__item">
                        <img src="img/competitions.png" alt="">
                        <div class="info">
                            <div class="name">SmartSwimCup</div>
                            <div class="desc">Участники 2005 - 2014 г.р.</div>
                            <div class="actions">
                                <a href="" class="button button__white__transparent">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
