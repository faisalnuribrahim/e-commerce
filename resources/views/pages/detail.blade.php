@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Product Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :key="photos[activePhoto].id"
                  :src="photos[activePhoto].url"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Beras 10kg</h1>
                <div class="owner">By Faisal Nur Ibrahim</div>
                <div class="price">Rp.500.000</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  class="btn btn-success nav-link px-4 text-white btn-block mb-3"
                  href="/cart.html"
                  >Tambah ke Keranjang</a
                >
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                </p>
                <p>
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                  Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg Beras 10kg
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Customer Review (3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="/images/icon-testimonial-1.png"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Hazza Risky</h5>
                      I thought it was not good for living room. I really happy
                      to decided buy this product last week now feels like
                      homey.
                    </div>
                  </li>
                  <li class="media my-4">
                    <img
                      src="/images/icon-testimonial-2.png"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                      Color is great with the minimalist concept. Even I thought
                      it was made by Cactus industry. I do really satisfied with
                      this.
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icon-testimonial-3.png"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Dakimu Wangi</h5>
                      When I saw at first, it was really awesome to have with.
                      Just let me know if there is another upcoming product like
                      this.
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 3,
          photos: [
            {
              id: 1,
              url: "/images/product-details-1.jpg",
            },
            {
              id: 2,
              url: "/images/product-details-2.jpg",
            },
            {
              id: 3,
              url: "/images/product-details-3.jpg",
            },
            {
              id: 4,
              url: "/images/product-details-4.jpg",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
@endpush
