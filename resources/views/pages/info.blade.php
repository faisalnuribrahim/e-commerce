@extends('layouts.app')

@section('title')
    Info Petani
@endsection

@section('content')
    <div class="page-content page-categories">
      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Info Petani</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-20 col-md-6 col-lg-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                <p class="products-text">
                  Beras 10kg
                </p>
                <p class="products-price">
                  Rp.500.000
                </p>
                </div>
              </a>
            </div>
            <div
              class="col-12 col-md-15 col-lg-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                  <p class="products-text">
                  Beras 10kg
                </p>
                <p class="products-price">
                  Rp.500.000
                </p>
                </div>
              </a>
            </div>
</div>
          </div>
        </div>
      </section>
    </div>
@endsection
