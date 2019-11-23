@extends('layouts.app')

@section('content')
    <header class="masthead overlay" id="mast">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center mast-text">
                <h1 class="text-uppercase text-light"><i class="fas fa-ship"></i><br>Caravan</h1>
                <p class="lead text-light">The all-in-one business manager for import-export professionals.</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-light text-primary">Learn More</a>
                </p>
            </div>
        </div>
    </header>
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-3">
                <h1>Features</h1>
                <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card my-4 border-rd text-center">
                        <div class="card-body bg-bedazzle text-light border-rd">
                            <h3 class="card-title">
                                <i class="fas fa-address-card"></i>
                                <br>
                                Client Manager
                            </h3>
                            <p class="card-text">
                                Caravan comes with a cloud-based address book so you can access your clients' information anywhere.
                            </p>
                            <a href="#" class="btn btn-lg btn-light text-primary text-center mt-4">Learn More</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                        <div class="card my-4 border-rd text-center">
                                <div class="card-body bg-bedazzle text-light border-rd">
                                    <h3 class="card-title text-center">
                                        <i class="fas fa-list-alt"></i>
                                        <br>
                                        Stay Organized
                                    </h3>
                                    <p class="card-text">
                                        Never miss a deadline or forget to do something ever again. Track your project, deal, or daily routine with our task manager.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-light text-primary text-center">Learn More</a>

                                </div>
                            </div>
                </div>
                <div class="col-md-4 col-sm-12">
                        <div class="card my-4  mb-5 border-rd text-center">
                                <div class="card-body bg-bedazzle text-light border-rd">
                                    <h3 class="card-title text-center">
                                        <i class="fas fa-yen-sign"></i>
                                        <i class="fas fa-dollar-sign"></i>
                                        <i class="fas fa-pound-sign"></i>
                                        <br>
                                        FOREX Monitoring
                                    </h3>
                                    <p class="card-text">
                                        No more opening new tabs or windows. Caravan comes with a convenient, up-to-date currency rate tracker right on your dashboard.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-light text-primary text-center">Learn More</a>

                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="radial">
        <div class="container d-flex h-100 align-items-center py-4">
            <div class="row mx-auto">
                <div class="col-12 text-center text-light my-3">
                <h1>About</h1>
                <hr class="bg-light">
                </div>
                <div class="col-12 text-center text-light">
                    <p class="font-weight-bold big-font mb-3">
                        Caravan is a content management system (CMS) with built-in productivity tools for the intrepid trader who is looking for an all-in-one application to help organize his or her business.
                    </p>
                    <a href="{{url('/register')}}"class="btn btn-lg btn-light text-primary">Try It Today</a>
                </div>
            </div>
        </div>
    </section>
    
@endsection
