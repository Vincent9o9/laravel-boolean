@extends('layouts.app')
@section('titolo', 'home page')
@section('content')
    <div class="container">
        <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-4">Cambia la tua vita. Entra in Boolean.</h1>
                    <p class="lead"><strong>Segui il corso, diventi un web developer e trovi lavoro.</strong> </p>
                    <ul>
                        <li><i class="fa fa-chevron-right"> 6 mesi di corso full time, online e in diretta</i></li>
                        <li><i class="fa fa-chevron-right">Nessuna competenza di programmazione richiesta</i></li>
                        <li><i class="fa fa-chevron-right">Se non trovi lavoro ti rimborsiamo</i></li>
                    </ul>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Candidati ora</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://www.boolean.careers/images/visual/homeHeader.gif" alt="">
                </div>
        </div>
    </div>
@endsection
