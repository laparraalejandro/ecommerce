@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

   <div class="thank-you-section">
       <h1>Gracias por <br> su Orden!</h1>
       <p>Se ha enviado un mail de confirmación</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="button">Home</a>
       </div>
   </div>




@endsection
