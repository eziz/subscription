@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div class="container py-5">

                <header class="text-center mb-5 text-white">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <h1>Laravel 9 Cashier Stripe Subscription</h1>
                            <h3>PRICING</h3>
                        </div>
                    </div>
                </header>

                <div class="row text-center align-items-end">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="bg-white p-5 rounded-lg shadow">
                            <h1 class="h6 text-uppercase font-weight-bold mb-4">Mugt</h1>
                            <h2 class="h1 font-weight-bold">0man<span class="text-small font-weight-normal ml-2">/ tolegsiz</span>
                            </h2>

                            <div class="custom-separator my-4 mx-auto bg-primary"></div>

                            <ul class="list-unstyled my-5 text-small text-left">
                                <li class="mb-3">
                                    <i class="fa fa-check mr-2 text-primary"></i> Ayratynlyk 0
                                </li>
                                <li class="mb-3">
                                    <i class="fa fa-check mr-2 text-primary"></i> Ayratynlyk 1
                                </li>
                                <li class="mb-3">
                                    <i class="fa fa-check mr-2 text-primary"></i> At Ayratynlyk 2
                                </li>
                                <li class="mb-3 text-muted">
                                    <i class="fa fa-times mr-2"></i>
                                    <del>Ayratynlyk 3</del>
                                </li>
                                <li class="mb-3 text-muted">
                                    <i class="fa fa-times mr-2"></i>
                                    <del>Ayratynlyk 4</del>
                                </li>
                                <li class="mb-3 text-muted">
                                    <i class="fa fa-times mr-2"></i>
                                    <del>Ayratynlyk 5</del>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-block shadow rounded-pill">Satyn Al</a>
                        </div>
                    </div>
                    @foreach ($plans as $plan)
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="bg-white p-5 rounded-lg shadow">
                                <h1 class="h6 text-uppercase font-weight-bold mb-4">{{ $plan->name }}</h1>
                                <h2 class="h1 font-weight-bold">{{ $plan->price }}manat<span
                                        class="text-small font-weight-normal ml-2">/ aylyk</span></h2>

                                <div class="custom-separator my-4 mx-auto bg-primary"></div>

                                <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Ayratynlyk 1
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Ayratynlyk 2
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Ayratynlyk 3
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Ayratynlyk 4
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Ayratynlyk 5
                                    </li>
                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>Ayratynlyk 6</del>
                                    </li>
                                </ul>
                                <a href="{{ route('plans.show', $plan->slug) }}"
                                    class="btn btn-primary btn-block shadow rounded-pill">Satyn Al</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

    </div>
@endsection
