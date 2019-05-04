
@extends ('layouts.app')
  <body>
    @section ('content')
<h1 align="Center"> Welcome to Crowdsourcing</h1>

<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src={{ asset('img/android.jpg')}} alt="aaa" style="width:100%;height:225px;" >
            <div class="card-body">

              <p class= "card-text">
                <a href="" >Text - Text Challenge </a>
              </p>
                         


              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src={{ asset('img/thumbprint.png')}} alt="thumbprint" style="width:100%;height:225px;" >
            <div class="card-body">
              <p class="card-text">Image - Image Challenge</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src={{ asset('img/mountain.jpg')}} alt="mountain" style="width:100%;height:225px;" >
            <div class="card-body">
              <p class="card-text">Text - Image Challenge</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
    @endsection


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
