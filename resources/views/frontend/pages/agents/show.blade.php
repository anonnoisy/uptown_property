@extends('frontend.layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url( {{ asset('frontend/images/bg_1.jpg') }} );" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Agent <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Agent</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url( {{ asset('frontend/images/team-1.jpg') }} );">
      </div>
      <div class="col-md-6 wrap-about py-md-5 ftco-animate">
        <div class="heading-section p-md-5">
          <h2 class="mb-4">James Stallon</h2>

          <p>
            Partner - Rise Realty <br>
            jamesstallon@partner.com <br>
            203 - 0231 - 3332
          </p>
          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a 
            thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn 
            around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until 
            a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where 
            they abused her for their.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection