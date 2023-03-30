@extends('components.'.$layout)
@section('content')
<x-link-bar :linkgroup='$linkgroup'/>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <section class="team-one pt-0">
                <img src="/assets/images/shapes/team-shape-1.png" alt="" class="team-one__shape-1">
                <img src="/assets/images/shapes/team-shape-2.png" alt="" class="team-one__shape-2">
                <div class="container">
                    <div class="block-title text-center">
                        <div class="block-title__decor"></div>
                        <p>отряд специалистов</p>
                        <h3>Наша команда</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="/assets/images/team/team-1-1.png" alt="">
                                </div>
                                <div class="team-card__content">
                                    <h3>Ray Luna</h3>
                                    <div class="team-card__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="/assets/images/team/team-1-2.png" alt="">
                                </div>
                                <div class="team-card__content">
                                    <h3>Ora McLaughlin</h3>
                                    <div class="team-card__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="/assets/images/team/team-1-3.png" alt="">
                                </div>
                                <div class="team-card__content">
                                    <h3>Peter Ramsey</h3>
                                    <div class="team-card__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="/assets/images/team/team-1-4.png" alt="">
                                </div>
                                <div class="team-card__content">
                                    <h3>Eric Miller</h3>
                                    <div class="team-card__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="/assets/images/team/team-1-1.png" alt="">
                                </div>
                                <div class="team-card__content">
                                    <h3>Ray Luna</h3>
                                    <div class="team-card__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="/assets/images/team/team-1-2.png" alt="">
                                </div>
                                <div class="team-card__content">
                                    <h3>Ora McLaughlin</h3>
                                    <div class="team-card__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="/assets/images/team/team-1-3.png" alt="">
                                </div>
                                <div class="team-card__content">
                                    <h3>Peter Ramsey</h3>
                                    <div class="team-card__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="/assets/images/team/team-1-4.png" alt="">
                                </div>
                                <div class="team-card__content">
                                    <h3>Eric Miller</h3>
                                    <div class="team-card__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection