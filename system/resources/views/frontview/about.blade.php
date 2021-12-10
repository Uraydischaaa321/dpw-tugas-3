@extends ('frontview.template.base')

@section ('content')

  <section class="about_section ">
    <div class="about_bg_box">
      <img src="{{ url('public/shop') }}/images/about-bg.jpg" alt="">
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 ml-auto ">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Provide <br>
                Fresh Vegetables
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad ex, sequi amet similique necessitatibus quas minus repudiandae quae culpa optio ipsum quibusdam praesentium saepe qui dolore voluptate iure sit aut.
            </p>
            <a href="" class="mt_20">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection