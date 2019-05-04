@extends('challengeLayout')

@section('title')
Text-Image
@endsection

@section('challengeDesc')
    <h1 align="Center"> Text-Image Challenge</h1>
    <h3 align="Center"> Which of the following is a latent fingerprint? </h3>
  
@endsection

@section('content')
    <br> <br> <br> <br>
      <div class="container">
  
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <div class="card-body">
                <img src={{ asset('img/latentfingerprint.png')}} alt="aaa" style="width:100%;height:150px;" >
                
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
  
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <div class="card-body">
                <img src={{ asset('img/nonlatentfingerprint.png')}} alt="aaa" style="width:100%;height:150px;" >
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

@endsection