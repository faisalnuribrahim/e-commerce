@extends('layouts.app')

@section('title')
    Store Home Page
@endsection

@section('content')
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    data-target="#storeCarousel"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="/images/banner.jpg"
                      class="d-block w-100"
                      alt="Carousel"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.jpg"
                      class="d-block w-100"
                      alt="Carousel"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.jpg"
                      class="d-block w-100"
                      alt="Carousel"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>New Products</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/beras.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Beras 10kg
                </div>
                <div class="products-price">
                  Rp.500.000
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/beras.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Beras 20kg
                </div>
                <div class="products-price">
                  Rp.1.000.000
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/beras.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Beras 10kg
                </div>
                <div class="products-price">
                  Rp.500.000
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/beras.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Beras 20kg
                </div>
                <div class="products-price">
                  Rp.1.000.000
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/beras.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Beras 10kg
                </div>
                <div class="products-price">
                  Rp.500.000
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/beras.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Beras 20kg
                </div>
                <div class="products-price">
                  Rp.1.000.000
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/beras.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Beras 10kg
                </div>
                <div class="products-price">
                  Rp.500.000
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/beras.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Beras 20kg
                </div>
                <div class="products-price">
                  Rp.1.000.000
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
