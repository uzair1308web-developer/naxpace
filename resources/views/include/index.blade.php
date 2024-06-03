@extends('include.main')
@section('main-section')
    <main>
      <!--      hero-->

      <section class="hero-area w-full relative">
        <div
          class="h-full flex xl:justify-center justify-start items-center relative z-20"
        >
          <div class="theme-container xl:mx-auto">
            <h1
              data-aos="fade-up"
              class="text-primary-900 xl:text-[96px] sm:text-6xl text-5xl font-bold xl:leading-[95px] mb-5"
            >
              Secure your <br />
              future with us
            </h1>
            <p class="text-primary-900 text-base leading-7 mb-9">
              lorem ipsum dolor sit amet consectetur. Facilisi cursus vulputate
              <br />
              vestibulum etiam rhoncus
            </p>
            <div
              class="flex flex-col sm:flex-row sm:space-x-10 space-y-10 sm:space-y-0 sm:items-center"
            >
              <a href="project.html">
                <div
                  class="px-[46px] py-[20px] bg-primary-500 rounded-lg text-white text-lg spline-sans leading-none hover:bg-primary-900 common-trans inline"
                >
                  <span>Get Started</span>
                </div>
              </a>
              <button
                data-aos="fade-left"
                onclick="videoPopup()"
                type="button"
                class="sm:flex hidden space-x-5 items-center"
              >
                <div class="w-[55px] h-[55px] relative">
                  <div
                    class="w-full h-full rounded-full flex justify-center items-center bg-primary-500 relative z-10"
                  >
                    <span>
                      <svg
                        width="12"
                        height="16"
                        viewBox="0 0 12 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M11.2812 6.71875C11.7188 7 12 7.5 12 8C12 8.53125 11.7188 9.03125 11.2812 9.28125L2.28125 14.7812C1.8125 15.0625 1.21875 15.0938 0.75 14.8125C0.28125 14.5625 0 14.0625 0 13.5V2.5C0 1.96875 0.28125 1.46875 0.75 1.21875C1.21875 0.9375 1.8125 0.9375 2.28125 1.25L11.2812 6.71875Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="button-outer-circle has-scale-animation"></div>
                  <div
                    class="button-outer-circle has-scale-animation has-delay-short"
                  ></div>
                </div>
                <span class="font-semibold text-lg spline-sans text-primary-900"
                  >Watch Video</span
                >
              </button>
            </div>
          </div>
        </div>
        <div
          data-aos="fade-left"
          data-aos-duration="1000"
          class="hero-image-1 w-full h-full absolute left-0 top-0 z-10 bg-no-repeat bg-cover"
          style="background-image: url('assets/img/hero-img.png')"
        ></div>
      </section>
      <!--      about-->
      <section class="about-area w-full lg:py-[120px] py-[60px]">
        <div class="theme-container mx-auto">
          <div
            class="w-full grid xl:grid-cols-2 grid-cols-1 lg:gap-[66px] gap-[30px] items-center relative"
          >
            <div class="">
              <div
                class="thumbnail-area 2xl:w-[721px] w-full 2xl:absolute 2xl:-left-[150px] -top-8 relative"
              >
                <img
                  src="assets/img/about-thumb.png"
                  alt="about"
                  class="relative z-10 w-full h-full"
                />
                <div
                  class="about-shape gear-2 xl:w-[385px] xl:h-[385px] md:w-[500px] md:h-[500px] w-[250px] h-[250px]"
                ></div>
                <div
                  class="w-[250px] h-[94px] rounded-[16px] bg-primary-500 flex justify-center items-center absolute sm:top-[432px] top-[200px] sm:right-[156px] right-5 z-10"
                >
                  <div>
                    <div class="flex space-x-6 items-center">
                      <span>
                        <svg
                          width="40"
                          height="40"
                          viewBox="0 0 40 40"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <circle cx="20" cy="20" r="20" fill="white" />
                          <path
                            d="M26.332 25.7943C25.544 25.5133 24.258 25.4943 23.688 25.2813C23.2492 25.1672 22.8347 24.974 22.465 24.7113C22.3097 24.0566 22.2424 23.3839 22.265 22.7113C22.558 22.4302 22.7955 22.0964 22.965 21.7273C23.1351 21.0941 23.2479 20.4468 23.302 19.7933C23.302 19.7933 23.766 19.9933 23.949 19.0623C24.104 18.2623 24.399 17.8393 24.322 17.2483C24.245 16.6573 23.914 16.7983 23.914 16.7983C24.273 15.9711 24.4135 15.0655 24.322 14.1683C24.3166 13.591 24.1924 13.0209 23.9571 12.4935C23.7218 11.9662 23.3806 11.493 22.9545 11.1032C22.5285 10.7135 22.0268 10.4156 21.4806 10.2281C20.9345 10.0406 20.3556 9.96749 19.78 10.0133C19.2044 9.96746 18.6254 10.0402 18.0789 10.227C17.5324 10.4138 17.0301 10.7107 16.603 11.0994C16.1758 11.4881 15.833 11.9603 15.5956 12.4868C15.3583 13.0133 15.2315 13.5829 15.223 14.1603C15.1325 15.0567 15.2701 15.9614 15.623 16.7903C15.623 16.7903 15.293 16.6493 15.215 17.2403C15.137 17.8313 15.427 18.2603 15.586 19.0603C15.769 19.9953 16.233 19.7913 16.233 19.7913C16.2878 20.4447 16.4005 21.092 16.57 21.7253C16.7396 22.0944 16.9771 22.4282 17.27 22.7093C17.2927 23.3819 17.2254 24.0546 17.07 24.7093C16.7014 24.9723 16.2865 25.1633 15.847 25.2723C15.285 25.4903 13.998 25.5183 13.203 25.7993C12.2445 26.1586 11.4205 26.8055 10.844 27.6514C10.2676 28.4973 9.96683 29.5008 9.98304 30.5243H29.545C29.5643 29.5005 29.2656 28.4958 28.6902 27.6487C28.1148 26.8017 27.2909 26.1538 26.332 25.7943Z"
                            fill="#028835"
                          />
                          <path
                            d="M11.63 22.3684C12.4561 22.3573 13.2651 22.132 13.978 21.7144C12.888 20.0624 13.478 18.1354 13.254 16.3354C13.243 15.9259 13.1472 15.5231 12.9728 15.1524C12.7983 14.7817 12.549 14.4511 12.2405 14.1816C11.9319 13.912 11.5709 13.7093 11.1801 13.5862C10.7894 13.4631 10.3773 13.4224 9.97 13.4664H9.942C9.53708 13.428 9.12858 13.4729 8.74171 13.5985C8.35485 13.7241 7.99783 13.9276 7.69271 14.1966C7.38758 14.4655 7.14083 14.7942 6.96768 15.1622C6.79453 15.5303 6.69866 15.9299 6.686 16.3364C6.461 18.1294 7.086 20.2744 5.969 21.7154C6.68409 22.1261 7.49988 22.3284 8.324 22.2994C8.36668 22.6942 8.34302 23.0934 8.254 23.4804C8.01199 23.682 7.72069 23.8156 7.41 23.8674C6.79373 24.0008 6.18571 24.1697 5.589 24.3734C5.1109 24.6233 4.71018 24.999 4.43013 25.4601C4.15007 25.9212 4.00134 26.45 4 26.9894H9.647C10.1603 26.0724 10.9468 25.3383 11.897 24.8894C12.4477 24.6587 13.0371 24.5345 13.634 24.5234C13.634 24.5234 13.901 24.1014 13.022 23.9394C12.5548 23.8369 12.1016 23.6787 11.672 23.4684C11.538 23.3184 11.63 22.3684 11.63 22.3684Z"
                            fill="#028835"
                          />
                          <path
                            d="M27.9417 22.3684C27.1157 22.3573 26.3066 22.132 25.5938 21.7144C26.6838 20.0624 26.0937 18.1354 26.3177 16.3354C26.3288 15.9259 26.4245 15.5231 26.599 15.1524C26.7734 14.7817 27.0227 14.4511 27.3313 14.1816C27.6398 13.912 28.0009 13.7093 28.3916 13.5862C28.7824 13.4631 29.1944 13.4224 29.6017 13.4664H29.6297C30.0347 13.428 30.4432 13.4729 30.83 13.5985C31.2169 13.7241 31.5739 13.9276 31.879 14.1966C32.1842 14.4655 32.4309 14.7942 32.6041 15.1622C32.7772 15.5303 32.8731 15.9299 32.8857 16.3364C33.1107 18.1294 32.4857 20.2744 33.6027 21.7154C32.8877 22.1261 32.0719 22.3284 31.2477 22.2994C31.2051 22.6942 31.2287 23.0934 31.3177 23.4804C31.5598 23.682 31.8511 23.8156 32.1617 23.8674C32.778 24.0008 33.386 24.1697 33.9827 24.3734C34.4608 24.6233 34.8616 24.999 35.1416 25.4601C35.4217 25.9212 35.5704 26.45 35.5717 26.9894H29.9247C29.4115 26.0724 28.6249 25.3383 27.6747 24.8894C27.1241 24.6587 26.5347 24.5345 25.9377 24.5234C25.9377 24.5234 25.6707 24.1014 26.5497 23.9394C27.0169 23.8369 27.4702 23.6787 27.8997 23.4684C28.0337 23.3184 27.9417 22.3684 27.9417 22.3684Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                      <div>
                        <p class="text-white text-xl font-bold leading-[26px]">
                          5000+
                        </p>
                        <p class="text-base leading-5 text-white">
                          Satisfied Client
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="about-article-area">
              <h2 class="headline-default text-primary-900 mb-10">
                Insurance that fits your <br class="lg:block hidden" />
                lifestyle
              </h2>
              <div
                class="xl:w-full max-w-4xl sm:p-[30px] p-5 border border-primaryBorder rounded-[10px] flex flex-col space-y-5 mb-5"
              >
                <div class="item sm:flex sm:space-x-5 sm:items-center">
                  <div
                    class="w-[60px] h-[60px] bg-primary-50 sm:flex hidden justify-center items-center rounded"
                  >
                    <span>
                      <svg
                        width="18"
                        height="13"
                        viewBox="0 0 18 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M17.3594 0.640625C17.8672 1.10938 17.8672 1.92969 17.3594 2.39844L7.35938 12.3984C6.89062 12.9062 6.07031 12.9062 5.60156 12.3984L0.601562 7.39844C0.09375 6.92969 0.09375 6.10938 0.601562 5.64062C1.07031 5.13281 1.89062 5.13281 2.35938 5.64062L6.5 9.74219L15.6016 0.640625C16.0703 0.132812 16.8906 0.132812 17.3594 0.640625Z"
                          fill="#028835"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="flex-1">
                    <div class="flex justify-between items-center mb-2.5">
                      <span class="text-lg text-gray-900 font-bold spline-sans"
                        >Fast Response Insurance</span
                      >
                      <span class="text-lg text-gray-900 font-bold spline-sans"
                        >95%</span
                      >
                    </div>
                    <div
                      class="w-full relative overflow-hidden h-[5px] rounded-[10px] bg-gray-100"
                    >
                      <div
                        style="width: 95%"
                        class="absolute left-0 top-0 bg-primary-500 h-full rounded-[10px]"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="item sm:flex sm:space-x-5 sm:items-center">
                  <div
                    class="w-[60px] h-[60px] bg-primary-50 sm:flex hidden justify-center items-center rounded"
                  >
                    <span>
                      <svg
                        width="18"
                        height="13"
                        viewBox="0 0 18 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M17.3594 0.640625C17.8672 1.10938 17.8672 1.92969 17.3594 2.39844L7.35938 12.3984C6.89062 12.9062 6.07031 12.9062 5.60156 12.3984L0.601562 7.39844C0.09375 6.92969 0.09375 6.10938 0.601562 5.64062C1.07031 5.13281 1.89062 5.13281 2.35938 5.64062L6.5 9.74219L15.6016 0.640625C16.0703 0.132812 16.8906 0.132812 17.3594 0.640625Z"
                          fill="#028835"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="flex-1">
                    <div class="flex justify-between items-center mb-2.5">
                      <span class="text-lg text-gray-900 font-bold spline-sans"
                        >Awesome Auto Coverage</span
                      >
                      <span class="text-lg text-gray-900 font-bold spline-sans"
                        >90%</span
                      >
                    </div>
                    <div
                      class="w-full relative overflow-hidden h-[5px] rounded-[10px] bg-gray-100"
                    >
                      <div
                        style="width: 90%"
                        class="absolute left-0 top-0 bg-primary-500 h-full rounded-[10px]"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="xl:w-full max-w-4xl text-base text-primary-100 mb-14">
                Lorem ipsum dolor sit amet consectetur. Gravida vulputate vel
                necsit nunc Hendrerit sagittis donec eleifend ipsum quam. A
                lectus sit enim euismod urna. Mattis aliquam ac eget sit
                pharetra diam. Orci adipiscing adipiscing donec auctor.
              </p>
              <div>
                <a href="service-details.html">
                  <div
                    class="px-[42px] py-[23px] bg-primary-500 hover:bg-primary-900 common-trans rounded-lg inline"
                  >
                    <span class="text-lg text-white">Read More</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--      service-->
      <section class="service-area w-full lg:py-[120px] py-[60px]">
        <div class="theme-container mx-auto h-full items-center">
          <div
            class="w-full grid xl:grid-cols-2 grid-cols-1 gap-[60px] xl:gap-0 items-center"
          >
            <div class="grid-item">
              <h2 class="headline-default text-primary-900 mb-5">
                Safeguarding your <br />
                future today
              </h2>
              <p class="text-base text-primary-100 mb-14">
                Lorem ipsum dolor sit amet consectetur. Sapien in adipiscing
                duis <br />
                orci. Rhoncus nunc consectetur nibh auctor porta tincidunt ac
                <br />
                porttitor amet. Proin ac viverra condiment um venenatis pulvinar
                <br />
                tortor ullamcorper aliquam morbi. Sem vulputat
              </p>
              <div>
                <a href="service-details.html">
                  <div
                    class="px-[42px] py-[23px] bg-primary-500 hover:bg-primary-900 common-trans rounded-lg inline"
                  >
                    <span class="text-lg text-white">Read More</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="grid-item">
              <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-[30px] gap-5">
                <div
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  class="service-item p-[30px] rounded-[10px] bg-white group"
                >
                  <a href="service-details.html">
                    <div class="flex justify-center mb-5">
                      <div
                        class="w-[60px] h-[60px] rounded flex justify-center items-center bg-primary-50"
                      >
                        <img src="assets/img/service-1.svg" alt="" />
                      </div>
                    </div>
                    <h2
                      class="text-lg leading-7 font-bold spline-sans text-center text-primary-900 mb-5 group-hover:underline"
                    >
                      Rock Solid Insurance
                    </h2>
                    <p class="text-base leading-7 text-center text-primary-100">
                      Lorem ipsum dolor sit amet consectetur. Nibh viverra dolor
                      diam accumsan consequat.
                    </p>
                  </a>
                </div>
                <div
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  class="service-item p-[30px] rounded-[10px] bg-white group"
                >
                  <a href="service-details.html">
                    <div class="flex justify-center mb-5">
                      <div
                        class="w-[60px] h-[60px] rounded flex justify-center items-center bg-primary-50"
                      >
                        <img src="assets/img/service-2.svg" alt="" />
                      </div>
                    </div>
                    <h2
                      class="text-lg leading-7 font-bold spline-sans text-center text-primary-900 mb-5 group-hover:underline"
                    >
                      Reliable Protection
                    </h2>
                    <p class="text-base leading-7 text-center text-primary-100">
                      Lorem ipsum dolor sit amet consectetur. Nibh viverra dolor
                      diam accumsan consequat.
                    </p>
                  </a>
                </div>
                <div
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  class="service-item p-[30px] rounded-[10px] bg-white group"
                >
                  <a href="service-details.html">
                    <div class="flex justify-center mb-5">
                      <div
                        class="w-[60px] h-[60px] rounded flex justify-center items-center bg-primary-50"
                      >
                        <img src="assets/img/service-3.svg" alt="" />
                      </div>
                    </div>
                    <h2
                      class="text-lg leading-7 font-bold spline-sans text-center text-primary-900 mb-5 group-hover:underline"
                    >
                      Value Insurance
                    </h2>
                    <p class="text-base leading-7 text-center text-primary-100">
                      Lorem ipsum dolor sit amet consectetur. Nibh viverra dolor
                      diam accumsan consequat.
                    </p>
                  </a>
                </div>
                <div
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  class="service-item p-[30px] rounded-[10px] bg-white group"
                >
                  <a href="service-details.html">
                    <div class="flex justify-center mb-5">
                      <div
                        class="w-[60px] h-[60px] rounded flex justify-center items-center bg-primary-50"
                      >
                        <img src="assets/img/service-4.svg" alt="" />
                      </div>
                    </div>
                    <h2
                      class="text-lg leading-7 font-bold spline-sans text-center text-primary-900 mb-5 group-hover:underline"
                    >
                      Flexible Medsurance
                    </h2>
                    <p class="text-base leading-7 text-center text-primary-100">
                      Lorem ipsum dolor sit amet consectetur. Nibh viverra dolor
                      diam accumsan consequat.
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--      life insurence-->
      <section class="life-insu-area w-full lg:py-[120px] pt-[60px] pb-[100px] overflow-hidden">
        <div class="text-center">
          <h2 class="headline-default text-primary-900 lg:mb-[60px] mb-[30px]">
            Fill your life with <br />
            security and joy
          </h2>
          <div class="insu-swiper relative">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div
                  class="w-full lg:h-[550px] h-[300px] flex justify-center items-center group"
                  style="
                    background-image: url(assets/img/insu-1.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                  "
                >
                  <a href="#">
                    <div
                      class="px-[30px] py-[20px] bg-primary-500 rounded text-lg spline-sans font-semibold text-white opacity-0 group-hover:opacity-100 common-trans"
                    >
                      Life Insurance
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div
                  class="w-full lg:h-[550px] h-[300px] flex justify-center items-center group"
                  style="
                    background-image: url(assets/img/insu-2.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                  "
                >
                  <a href="#">
                    <div
                      class="px-[30px] py-[20px] bg-primary-500 rounded text-lg spline-sans font-semibold text-white opacity-0 group-hover:opacity-100 common-trans"
                    >
                      Life Insurance
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div
                  class="w-full lg:h-[550px] h-[300px] flex justify-center items-center group"
                  style="
                    background-image: url(assets/img/insu-3.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                  "
                >
                  <a href="#">
                    <div
                      class="px-[30px] py-[20px] bg-primary-500 rounded text-lg spline-sans font-semibold text-white opacity-0 group-hover:opacity-100 common-trans"
                    >
                      Life Insurance
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div
                  class="w-full lg:h-[550px] h-[300px] flex justify-center items-center group"
                  style="
                    background-image: url(assets/img/insu-1.png);
                    background-size: cover;
                    background-repeat: no-repeat;
                  "
                >
                  <a href="#">
                    <div
                      class="px-[30px] py-[20px] bg-primary-500 rounded text-lg spline-sans font-semibold text-white opacity-0 group-hover:opacity-100 common-trans"
                    >
                      Life Insurance
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!--      fun fact-->
      <section class="fun-fact-area lg:pt-[120px] xl:pb-0 lg:pb-[120px] py-[60px] xl:min-h-[1000px]" style="
          background-image: url(assets/img/fun-fact-bg.png);
          background-repeat: no-repeat;
          background-size: cover;
        "
        >
        <div class="theme-container mx-auto relative">
          <div
            class="w-full flex flex-wrap lg:flex-nowrap gap-[30px] lg:gap-0 justify-between items-center xl:mb-[100px] lg:mb-[60px] mb-[30px]"
          >
            <div class="item flex space-x-5 items-center">
              <div
                class="xl:w-[80px] xl:h-[80px] w-16 h-16 rounded-full bg-primary-500 flex justify-center items-center"
              >
                <img src="assets/img/project.svg" alt="" />
              </div>
              <div class="flex-1">
                <p
                  class="xl:text-[40px] font-bold text-white text-2xl xl:leading-[55px]"
                >
                  <span
                    class="purecounter"
                    data-purecounter-duration="1"
                    data-purecounter-end="30"
                  ></span
                  >K+
                </p>
                <p class="xl:text-base text-sm text-white leading-7">
                  Complete Projects
                </p>
              </div>
            </div>
            <div class="w-[5px] h-[160px] bg-[#1A5E52] xl:block hidden"></div>
            <div class="item flex space-x-5 items-center">
              <div
                class="xl:w-[80px] xl:h-[80px] w-16 h-16 rounded-full bg-primary-500 flex justify-center items-center"
              >
                <img src="assets/img/client.svg" alt="" />
              </div>
              <div class="flex-1">
                <p
                  class="xl:text-[40px] font-bold text-white text-2xl xl:leading-[55px]"
                >
                  <span
                    class="purecounter"
                    data-purecounter-duration="1"
                    data-purecounter-end="24"
                  ></span
                  >K+
                </p>
                <p class="xl:text-base text-sm text-white leading-7">
                  Client Satisfaction
                </p>
              </div>
            </div>
            <div class="w-[5px] h-[160px] bg-[#1A5E52] xl:block hidden"></div>
            <div class="item flex space-x-5 items-center">
              <div
                class="xl:w-[80px] xl:h-[80px] w-16 h-16 rounded-full bg-primary-500 flex justify-center items-center"
              >
                <img src="assets/img/members.svg" alt="" />
              </div>
              <div class="flex-1">
                <p
                  class="xl:text-[40px] font-bold text-white text-2xl xl:leading-[55px]"
                >
                  <span
                    class="purecounter"
                    data-purecounter-duration="1"
                    data-purecounter-end="12"
                  ></span
                  >K+
                </p>
                <p class="xl:text-base text-sm text-white leading-7">
                  Active Members
                </p>
              </div>
            </div>
            <div class="w-[5px] h-[160px] bg-[#1A5E52] xl:block hidden"></div>
            <div class="item flex space-x-5 items-center">
              <div
                class="xl:w-[80px] xl:h-[80px] w-16 h-16 rounded-full bg-primary-500 flex justify-center items-center"
              >
                <img src="assets/img/award.svg" alt="" />
              </div>
              <div class="flex-1">
                <p
                  class="xl:text-[40px] font-bold text-white text-2xl xl:leading-[55px]"
                >
                  <span
                    class="purecounter"
                    data-purecounter-duration="1"
                    data-purecounter-end="5"
                  ></span
                  >K+
                </p>
                <p class="xl:text-base text-sm text-white leading-7">
                  Winning Award
                </p>
              </div>
            </div>
          </div>
          <div class="faq-wrapper w-full xl:absolute xl:flex items-center">
            <div class="w-[740px] xl:block hidden rounded-[10px]">
              <div class="w-full h-[888px]">
                <img
                  src="assets/img/fun-fact-thum.png"
                  alt=""
                  class="w-full h-full object-cover"
                />
              </div>
            </div>
            <div class="flex-1">
              <div
                data-aos="fade-up"
                data-aos-duration="1000"
                class="faq-main-wrapper xl:w-[630px] sm:px-[60px] sm:py-[80px] px-3 py-10 bg-white rounded xl:absolute top-20 xl:right-10"
              >
                <h2 class="headline-default text-primary-900 mb-[42px]">
                  For a secured lifetime
                </h2>
                <div class="w-full flex flex-col space-y-5">
                  <div
                    class="faq-item active w-full overflow-hidden rounded border border-primaryBorder"
                  >
                    <button
                      type="button"
                      class="faq-btn p-5 flex justify-between group hover:bg-primary-500 items-center w-full common-trans sm:text-center text-start"
                    >
                      <span
                        class="sm:text-lg text-sm spline-sans font-semibold group-hover:text-white"
                        >What are some unique insurance slogan examples?</span
                      >
                      <span class="group-hover:text-white">
                        <svg
                          width="14"
                          height="9"
                          viewBox="0 0 14 9"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M7.6875 7.6875C7.3125 8.09375 6.65625 8.09375 6.28125 7.6875L1.28125 2.6875C0.875 2.3125 0.875 1.65625 1.28125 1.28125C1.65625 0.875 2.3125 0.875 2.6875 1.28125L7 5.5625L11.2812 1.28125C11.6562 0.875 12.3125 0.875 12.6875 1.28125C13.0938 1.65625 13.0938 2.3125 12.6875 2.6875L7.6875 7.6875Z"
                          />
                        </svg>
                      </span>
                    </button>
                    <div class="faq-body w-full bg-secondary">
                      <p
                        class="sm:text-base text-sm leading-7 text-primary-100"
                      >
                        Lorem ipsum dolor sit amet consectetur. Aliquam
                        ullamcorper id pretium diam ame lacus. Et lectus sem
                        vitae feugiat arcu velit massa.
                      </p>
                    </div>
                  </div>
                  <div
                    class="faq-item w-full overflow-hidden rounded border border-primaryBorder"
                  >
                    <button
                      type="button"
                      class="faq-btn p-5 flex justify-between group hover:bg-primary-500 items-center w-full common-trans sm:text-center text-start"
                    >
                      <span
                        class="sm:text-lg text-sm spline-sans font-semibold group-hover:text-white"
                        >How does the insurance slogan generator work?</span
                      >
                      <span class="group-hover:text-white">
                        <svg
                          width="14"
                          height="9"
                          viewBox="0 0 14 9"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M7.6875 7.6875C7.3125 8.09375 6.65625 8.09375 6.28125 7.6875L1.28125 2.6875C0.875 2.3125 0.875 1.65625 1.28125 1.28125C1.65625 0.875 2.3125 0.875 2.6875 1.28125L7 5.5625L11.2812 1.28125C11.6562 0.875 12.3125 0.875 12.6875 1.28125C13.0938 1.65625 13.0938 2.3125 12.6875 2.6875L7.6875 7.6875Z"
                          />
                        </svg>
                      </span>
                    </button>
                    <div class="faq-body w-full bg-secondary">
                      <p
                        class="sm:text-base text-sm leading-7 text-primary-100"
                      >
                        Lorem ipsum dolor sit amet consectetur. Aliquam
                        ullamcorper id pretium diam ame lacus. Et lectus sem
                        vitae feugiat arcu velit massa.
                      </p>
                    </div>
                  </div>
                  <div
                    class="faq-item w-full overflow-hidden rounded border border-primaryBorder"
                  >
                    <button
                      type="button"
                      class="faq-btn p-5 flex justify-between group hover:bg-primary-500 items-center w-full common-trans sm:text-center text-start"
                    >
                      <span
                        class="sm:text-lg text-sm spline-sans font-semibold group-hover:text-white"
                        >How do I come up with insurance slogan ideas?</span
                      >
                      <span class="group-hover:text-white">
                        <svg
                          width="14"
                          height="9"
                          viewBox="0 0 14 9"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M7.6875 7.6875C7.3125 8.09375 6.65625 8.09375 6.28125 7.6875L1.28125 2.6875C0.875 2.3125 0.875 1.65625 1.28125 1.28125C1.65625 0.875 2.3125 0.875 2.6875 1.28125L7 5.5625L11.2812 1.28125C11.6562 0.875 12.3125 0.875 12.6875 1.28125C13.0938 1.65625 13.0938 2.3125 12.6875 2.6875L7.6875 7.6875Z"
                          />
                        </svg>
                      </span>
                    </button>
                    <div class="faq-body w-full bg-secondary">
                      <p
                        class="sm:text-base text-sm leading-7 text-primary-100"
                      >
                        Lorem ipsum dolor sit amet consectetur. Aliquam
                        ullamcorper id pretium diam ame lacus. Et lectus sem
                        vitae feugiat arcu velit massa.
                      </p>
                    </div>
                  </div>
                  <div
                    class="faq-item w-full overflow-hidden rounded border border-primaryBorder"
                  >
                    <button
                      type="button"
                      class="faq-btn p-5 flex justify-between group hover:bg-primary-500 items-center w-full common-trans sm:text-center text-start"
                    >
                      <span
                        class="sm:text-lg text-sm spline-sans font-semibold group-hover:text-white"
                        >Is the insurance slogan generator free?</span
                      >
                      <span class="group-hover:text-white">
                        <svg
                          width="14"
                          height="9"
                          viewBox="0 0 14 9"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M7.6875 7.6875C7.3125 8.09375 6.65625 8.09375 6.28125 7.6875L1.28125 2.6875C0.875 2.3125 0.875 1.65625 1.28125 1.28125C1.65625 0.875 2.3125 0.875 2.6875 1.28125L7 5.5625L11.2812 1.28125C11.6562 0.875 12.3125 0.875 12.6875 1.28125C13.0938 1.65625 13.0938 2.3125 12.6875 2.6875L7.6875 7.6875Z"
                          />
                        </svg>
                      </span>
                    </button>
                    <div class="faq-body w-full bg-secondary">
                      <p
                        class="sm:text-base text-sm leading-7 text-primary-100"
                      >
                        Lorem ipsum dolor sit amet consectetur. Aliquam
                        ullamcorper id pretium diam ame lacus. Et lectus sem
                        vitae feugiat arcu velit massa.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--      progress-->
      <section class="progress-step xl:pt-[340px] lg:pt-[60px]">
        <div class="progress-step-wrapper py-[60px]">
          <div class="theme-container mx-auto">
            <h2
              class="text-center headline-default text-primary-900 lg:mb-[60px] mb-[30px]"
            >
              Confident financially <br />
              while you age
            </h2>
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 sm:gap-[30px] gap-5">
              <div
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-delay="100"
                class="item p-[30px] bg-white rounded"
              >
                <div class="flex justify-between items-center mb-5">
                  <div
                    class="w-[60px] h-[60px] rounded-full bg-secondary flex items-center justify-center"
                  >
                    <img src="assets/img/progress-1.svg" alt="progress" />
                  </div>
                  <h2 class="counter spline-sans">01</h2>
                </div>
                <h2
                  class="xl:text-lg text-md font-bold spline-sans text-gray-700 mb-5"
                >
                  Planning & Analysis
                </h2>
                <p class="xl:text-base text-sm xl:leading-7 text-primary-100">
                  This stage involves identifying the needs and requirements of
                  the client.
                </p>
              </div>
              <div
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-delay="200"
                class="item p-[30px] bg-white rounded"
              >
                <div class="flex justify-between items-center mb-5">
                  <div
                    class="w-[60px] h-[60px] rounded-full bg-secondary flex items-center justify-center"
                  >
                    <img src="assets/img/progress-2.svg" alt="progress" />
                  </div>
                  <h2 class="counter spline-sans">02</h2>
                </div>
                <h2
                  class="xl:text-lg text-md font-bold spline-sans text-gray-700 mb-5"
                >
                  Protector Insurance
                </h2>
                <p class="xl:text-base text-sm xl:leading-7 text-primary-100">
                  This stage involves identifying the needs and requirements of
                  the client.
                </p>
              </div>
              <div
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-delay="300"
                class="item p-[30px] bg-white rounded"
              >
                <div class="flex justify-between items-center mb-5">
                  <div
                    class="w-[60px] h-[60px] rounded-full bg-secondary flex items-center justify-center"
                  >
                    <img src="assets/img/progress-3.svg" alt="progress" />
                  </div>
                  <h2 class="counter spline-sans">03</h2>
                </div>
                <h2
                  class="xl:text-lg text-md font-bold spline-sans text-gray-700 mb-5"
                >
                  Trust Insured
                </h2>
                <p class="xl:text-base text-sm xl:leading-7 text-primary-100">
                  This stage involves identifying the needs and requirements of
                  the client.
                </p>
              </div>
              <div
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-delay="400"
                class="item p-[30px] bg-white rounded"
              >
                <div class="flex justify-between items-center mb-5">
                  <div
                    class="w-[60px] h-[60px] rounded-full bg-secondary flex items-center justify-center"
                  >
                    <img src="assets/img/progress-4.svg" alt="progress" />
                  </div>
                  <h2 class="counter spline-sans">04</h2>
                </div>
                <h2
                  class="xl:text-lg text-md font-bold spline-sans text-gray-700 mb-5"
                >
                  Secure Coverage
                </h2>
                <p class="xl:text-base text-sm xl:leading-7 text-primary-100">
                  This stage involves identifying the needs and requirements of
                  the client.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--      financial -->
      <section class="financ-section py-[60px]">
        <div class="theme-container mx-auto">
          <div class="w-full relative">
            <h2
              class="headline-default text-primary-900 lg:mb-[60px] mb-[30px]"
            >
              The road to financial <br />
              freedom
            </h2>
            <div class="financ-swiper overflow-hidden">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div
                    class="item sm:p-10 p-5 border border-primaryBorder rounded"
                  >
                    <div class="flex justify-between items-start mb-5">
                      <div class="flex space-x-5 items-center">
                        <div
                          class="w-[80px] h-[80px] rounded-full border border-primary-500"
                        >
                          <img
                            src="assets/img/testimonial-1.png"
                            alt=""
                            class="w-full h-full object-cover"
                          />
                        </div>
                        <div class="flex-1">
                          <div class="flex items-center mb-2.5">
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                          </div>
                          <h2
                            class="text-gray-700 text-lg spline-sans font-semibold"
                          >
                            Esther Howard
                          </h2>
                          <span class="text-base leading-7 text-primary-100"
                            >Ux Architect</span
                          >
                        </div>
                      </div>
                      <span class="sm:inline-block hidden">
                        <svg
                          width="35"
                          height="26"
                          viewBox="0 0 35 26"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M35 16.125C35 21.3594 30.7812 25.5 25.625 25.5H25C23.5938 25.5 22.5 24.4062 22.5 23C22.5 21.6719 23.5938 20.5 25 20.5H25.625C27.9688 20.5 30 18.5469 30 16.125V15.5H25C22.1875 15.5 20 13.3125 20 10.5V5.5C20 2.76562 22.1875 0.5 25 0.5H30C32.7344 0.5 35 2.76562 35 5.5V8V10.5V16.125ZM15 16.125C15 21.3594 10.7812 25.5 5.625 25.5H5C3.59375 25.5 2.5 24.4062 2.5 23C2.5 21.6719 3.59375 20.5 5 20.5H5.625C7.96875 20.5 10 18.5469 10 16.125V15.5H5C2.1875 15.5 0 13.3125 0 10.5V5.5C0 2.76562 2.1875 0.5 5 0.5H10C12.7344 0.5 15 2.76562 15 5.5V8V10.5V16.125Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                    </div>
                    <p class="text-primary-100 text-base leading-7">
                      Lorem ipsum dolor sit amet consectetur. In non sodales
                      elementum et te pus ac platea velit semper. Non morbi
                      aliqu alesuada.
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="item sm:p-10 p-5 border border-primaryBorder rounded"
                  >
                    <div class="flex justify-between items-start mb-5">
                      <div class="flex space-x-5 items-center">
                        <div
                          class="w-[80px] h-[80px] rounded-full border border-primary-500"
                        >
                          <img
                            src="assets/img/testimonial-2.png"
                            alt=""
                            class="w-full h-full object-cover"
                          />
                        </div>
                        <div class="flex-1">
                          <div class="flex items-center mb-2.5">
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                          </div>
                          <h2
                            class="text-gray-700 text-lg spline-sans font-semibold"
                          >
                            Ralph Edwards
                          </h2>
                          <span class="text-base leading-7 text-primary-100"
                            >Ux Architect</span
                          >
                        </div>
                      </div>
                      <span class="sm:inline-block hidden">
                        <svg
                          width="35"
                          height="26"
                          viewBox="0 0 35 26"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M35 16.125C35 21.3594 30.7812 25.5 25.625 25.5H25C23.5938 25.5 22.5 24.4062 22.5 23C22.5 21.6719 23.5938 20.5 25 20.5H25.625C27.9688 20.5 30 18.5469 30 16.125V15.5H25C22.1875 15.5 20 13.3125 20 10.5V5.5C20 2.76562 22.1875 0.5 25 0.5H30C32.7344 0.5 35 2.76562 35 5.5V8V10.5V16.125ZM15 16.125C15 21.3594 10.7812 25.5 5.625 25.5H5C3.59375 25.5 2.5 24.4062 2.5 23C2.5 21.6719 3.59375 20.5 5 20.5H5.625C7.96875 20.5 10 18.5469 10 16.125V15.5H5C2.1875 15.5 0 13.3125 0 10.5V5.5C0 2.76562 2.1875 0.5 5 0.5H10C12.7344 0.5 15 2.76562 15 5.5V8V10.5V16.125Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                    </div>
                    <p class="text-primary-100 text-base leading-7">
                      Lorem ipsum dolor sit amet consectetur. In non sodales
                      elementum et te pus ac platea velit semper. Non morbi
                      aliqu alesuada.
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="item sm:p-10 p-5 border border-primaryBorder rounded"
                  >
                    <div class="flex justify-between items-start mb-5">
                      <div class="flex space-x-5 items-center">
                        <div
                          class="w-[80px] h-[80px] rounded-full border border-primary-500"
                        >
                          <img
                            src="assets/img/testimonial-3.png"
                            alt=""
                            class="w-full h-full object-cover"
                          />
                        </div>
                        <div class="flex-1">
                          <div class="flex items-center mb-2.5">
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                          </div>
                          <h2
                            class="text-gray-700 text-lg spline-sans font-semibold"
                          >
                            Annette Black
                          </h2>
                          <span class="text-base leading-7 text-primary-100"
                            >Ux Architect</span
                          >
                        </div>
                      </div>
                      <span class="sm:inline-block hidden">
                        <svg
                          width="35"
                          height="26"
                          viewBox="0 0 35 26"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M35 16.125C35 21.3594 30.7812 25.5 25.625 25.5H25C23.5938 25.5 22.5 24.4062 22.5 23C22.5 21.6719 23.5938 20.5 25 20.5H25.625C27.9688 20.5 30 18.5469 30 16.125V15.5H25C22.1875 15.5 20 13.3125 20 10.5V5.5C20 2.76562 22.1875 0.5 25 0.5H30C32.7344 0.5 35 2.76562 35 5.5V8V10.5V16.125ZM15 16.125C15 21.3594 10.7812 25.5 5.625 25.5H5C3.59375 25.5 2.5 24.4062 2.5 23C2.5 21.6719 3.59375 20.5 5 20.5H5.625C7.96875 20.5 10 18.5469 10 16.125V15.5H5C2.1875 15.5 0 13.3125 0 10.5V5.5C0 2.76562 2.1875 0.5 5 0.5H10C12.7344 0.5 15 2.76562 15 5.5V8V10.5V16.125Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                    </div>
                    <p class="text-primary-100 text-base leading-7">
                      Lorem ipsum dolor sit amet consectetur. In non sodales
                      elementum et te pus ac platea velit semper. Non morbi
                      aliqu alesuada.
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="item sm:p-10 p-5 border border-primaryBorder rounded"
                  >
                    <div class="flex justify-between items-start mb-5">
                      <div class="flex space-x-5 items-center">
                        <div
                          class="w-[80px] h-[80px] rounded-full border border-primary-500"
                        >
                          <img
                            src="assets/img/testimonial-1.png"
                            alt=""
                            class="w-full h-full object-cover"
                          />
                        </div>
                        <div class="flex-1">
                          <div class="flex items-center mb-2.5">
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                            <span>
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                          </div>
                          <h2
                            class="text-gray-700 text-lg spline-sans font-semibold"
                          >
                            Esther Howard
                          </h2>
                          <span class="text-base leading-7 text-primary-100"
                            >Ux Architect</span
                          >
                        </div>
                      </div>
                      <span class="sm:inline-block hidden">
                        <svg
                          width="35"
                          height="26"
                          viewBox="0 0 35 26"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M35 16.125C35 21.3594 30.7812 25.5 25.625 25.5H25C23.5938 25.5 22.5 24.4062 22.5 23C22.5 21.6719 23.5938 20.5 25 20.5H25.625C27.9688 20.5 30 18.5469 30 16.125V15.5H25C22.1875 15.5 20 13.3125 20 10.5V5.5C20 2.76562 22.1875 0.5 25 0.5H30C32.7344 0.5 35 2.76562 35 5.5V8V10.5V16.125ZM15 16.125C15 21.3594 10.7812 25.5 5.625 25.5H5C3.59375 25.5 2.5 24.4062 2.5 23C2.5 21.6719 3.59375 20.5 5 20.5H5.625C7.96875 20.5 10 18.5469 10 16.125V15.5H5C2.1875 15.5 0 13.3125 0 10.5V5.5C0 2.76562 2.1875 0.5 5 0.5H10C12.7344 0.5 15 2.76562 15 5.5V8V10.5V16.125Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                    </div>
                    <p class="text-primary-100 text-base leading-7">
                      Lorem ipsum dolor sit amet consectetur. In non sodales
                      elementum et te pus ac platea velit semper. Non morbi
                      aliqu alesuada.
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div
                class="lg:flex hidden space-x-5 items-center absolute right-0 top-[45px]"
              >
                <button
                  type="button"
                  class="swiper-button-prev w-[67px] h-[67px] flex justify-center items-center bg-primary-50 text-primary-500 rounded-full focus:text-white focus:bg-primary-500"
                >
                  <svg
                    width="16"
                    height="14"
                    viewBox="0 0 16 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-current"
                  >
                    <path
                      d="M1.29883 5.89453L6.61133 0.582031C7.00977 0.150391 7.70703 0.150391 8.10547 0.582031C8.53711 0.980469 8.53711 1.67773 8.10547 2.07617L4.61914 5.5625H14.8125C15.377 5.5625 15.875 6.06055 15.875 6.625C15.875 7.22266 15.377 7.6875 14.8125 7.6875H4.61914L8.10547 11.207C8.53711 11.6055 8.53711 12.3027 8.10547 12.7012C7.70703 13.1328 7.00977 13.1328 6.61133 12.7012L1.29883 7.38867C0.867188 6.99023 0.867188 6.29297 1.29883 5.89453Z"
                    />
                  </svg>
                </button>
                <button
                  type="button"
                  class="swiper-button-next w-[67px] h-[67px] flex justify-center items-center bg-primary-50 text-primary-500 rounded-full focus:text-white focus:bg-primary-500"
                >
                  <svg
                    width="15"
                    height="14"
                    viewBox="0 0 15 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-current"
                  >
                    <path
                      d="M14.543 7.38867C14.9746 6.99023 14.9746 6.29297 14.543 5.89453L9.23047 0.582031C8.83203 0.150391 8.13477 0.150391 7.73633 0.582031C7.30469 0.980469 7.30469 1.67773 7.73633 2.07617L11.2227 5.5625H1.0625C0.464844 5.5625 0 6.06055 0 6.625C0 7.22266 0.464844 7.6875 1.0625 7.6875H11.2227L7.73633 11.207C7.30469 11.6055 7.30469 12.3027 7.73633 12.7012C8.13477 13.1328 8.83203 13.1328 9.23047 12.7012L14.543 7.38867Z"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--      get in touch-->
      <section class="getin-touch-wrapper w-full lg:py-[120px] py-[60px]">
        <div class="w-full relative">
          <div class="w-full grid grid-cols-2 absolute">
            <div class="img-1 w-full h-full">
              <img
                src="assets/img/get-in-thumb.png"
                alt="thumb-1"
                class="w-full h-full"
              />
            </div>
            <div class="img-1 w-full h-full">
              <img
                src="assets/img/get-in-thumb-2.png"
                alt="thumb-2"
                class="w-full h-full"
              />
            </div>
          </div>
        </div>
        <div
          class="theme-container mx-auto relative z-10 lg:top-[120px] top-[60px]"
        >
          <div class="w-full flex xl:justify-end justify-center">
            <div
              class="sm:w-[630px] w-full sm:px-[60px] sm:py-[80px] px-5 py-8 rounded-[10px] bg-white relative xl:left-[35px]"
              style="box-shadow: 0px 16px 52px rgba(0, 0, 0, 0.07)"
            >
              <h2 class="headline-default text-primary-900 mb-10 font-bold">
                Fill your life with security <br class="sm:block hidden" />
                and joy
              </h2>
              <div class="w-full">
                <form action="#" class="w-full">
                  <label class="w-full mb-5 block">
                    <input
                      type="text"
                      name=""
                      class="border border-primaryBorder rounded h-[68px] w-full focus:outline-none focus:ring-0 placeholder:text-primary-100 p-5 text-base"
                      placeholder="Your Name"
                    />
                  </label>
                  <label class="w-full mb-5 block">
                    <input
                      type="text"
                      name=""
                      class="border border-primaryBorder rounded h-[68px] w-full focus:outline-none focus:ring-0 placeholder:text-primary-100 p-5 text-base"
                      placeholder="Phone Number"
                    />
                  </label>
                  <label class="w-full mb-5 block">
                    <input
                      type="email"
                      name=""
                      class="border border-primaryBorder rounded h-[68px] w-full focus:outline-none focus:ring-0 placeholder:text-primary-100 p-5 text-base"
                      placeholder="E-mail"
                    />
                  </label>
                  <label class="w-full mb-5 block">
                    <textarea
                      placeholder="Your Message"
                      class="border border-primaryBorder rounded h-[160px] w-full focus:outline-none focus:ring-0 placeholder:text-primary-100 p-5 text-base"
                    ></textarea>
                  </label>
                  <button
                    type="submit"
                    class="w-full h-[68px] rounded text-white text-lg font-semibold spline-sans bg-primary-500 hover:bg-primary-900 common-trans"
                  >
                    Submit Now
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--      blog-->
      <section class="blog-area w-full lg:py-[120px] py-[60px]">
        <div class="theme-container mx-auto">
          <h2
            class="headline-default text-center text-primary-900 lg:mb-[60px] mb-[30px]"
          >
            Affordable insurance plans <br class="sm:block hidden" />
            just for you
          </h2>
          <div
            class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 xl:gap-[30px] gap-5"
          >
            <div
              class="blog-item group w-full overflow-hidden rounded bg-secondary hover:bg-white transition-all duration-300 ease-in-out"
            >
              <div>
                <div class="w-full h-[286px] relative">
                  <div class="w-full h-full">
                    <img
                      src="assets/img/blog-1.png"
                      alt="blog"
                      class="w-full h-full object-cover"
                    />
                  </div>
                  <div
                    class="px-5 py-2.5 rounded bg-primary-500 absolute left-10 bottom-10"
                  >
                    <div class="flex space-x-2.5 items-center">
                      <span>
                        <svg
                          width="14"
                          height="16"
                          viewBox="0 0 14 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7 8C4.78125 8 3 6.21875 3 4C3 1.8125 4.78125 0 7 0C9.1875 0 11 1.8125 11 4C11 6.21875 9.1875 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z"
                            fill="white"
                          />
                        </svg>
                      </span>
                      <span class="text-lg spline-sans font-semibold text-white"
                        >Admin</span
                      >
                    </div>
                  </div>
                </div>
                <div class="xl:p-7 p-3">
                  <a href="blog-details.html">
                    <h2
                      class="xl:text-lg xl:leading-7 text-md font-bold spline-sans text-primary-900 mb-5"
                    >
                      Never worry about accidents <br />
                      anymore
                    </h2>
                  </a>
                  <p class="xl:text-base text-sm text-primary-100 mb-5">
                    Lorem ipsum dolor consectetur. Posue sem ultrices feugiat
                    feugiat diam elementumm lacus lectus in lopren ipsum.
                  </p>
                  <div class="w-full h-[1px] bg-primaryBorder mb-5"></div>
                  <div class="w-full flex justify-between items-center mb-14">
                    <div class="flex space-x-2.5 items-center">
                      <span
                        ><svg
                          width="14"
                          height="16"
                          viewBox="0 0 14 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M4.75 2H9.25V0.75C9.25 0.34375 9.5625 0 10 0C10.4062 0 10.75 0.34375 10.75 0.75V2H12C13.0938 2 14 2.90625 14 4V14C14 15.125 13.0938 16 12 16H2C0.875 16 0 15.125 0 14V4C0 2.90625 0.875 2 2 2H3.25V0.75C3.25 0.34375 3.5625 0 4 0C4.40625 0 4.75 0.34375 4.75 0.75V2ZM1.5 7.75H4V6H1.5V7.75ZM1.5 9.25V11.25H4V9.25H1.5ZM5.5 9.25V11.25H8.5V9.25H5.5ZM10 9.25V11.25H12.5V9.25H10ZM12.5 6H10V7.75H12.5V6ZM12.5 12.75H10V14.5H12C12.25 14.5 12.5 14.2812 12.5 14V12.75ZM8.5 12.75H5.5V14.5H8.5V12.75ZM4 12.75H1.5V14C1.5 14.2812 1.71875 14.5 2 14.5H4V12.75ZM8.5 6H5.5V7.75H8.5V6Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                      <span class="xl:text-base text-sm text-primary-100"
                        >October 19, 2022</span
                      >
                    </div>
                    <div class="flex space-x-2.5 items-center">
                      <span
                        ><svg
                          width="22"
                          height="16"
                          viewBox="0 0 22 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11C6.90625 11 6.34375 10.9375 5.78125 10.8125C4.84375 11.4062 3.46875 12 1.75 12C1.4375 12 1.15625 11.8438 1.0625 11.5312C0.9375 11.25 0.96875 10.9375 1.1875 10.6875C1.21875 10.6875 1.90625 9.9375 2.40625 8.9375C1.53125 8 1 6.8125 1 5.5C1 2.46875 3.90625 0 7.5 0ZM6.125 9.34375C6.59375 9.46875 7.03125 9.5 7.5 9.5C10.25 9.5 12.5 7.71875 12.5 5.5C12.5 3.3125 10.25 1.5 7.5 1.5C4.71875 1.5 2.5 3.3125 2.5 5.5C2.5 6.625 3.03125 7.4375 3.5 7.90625L4.25 8.6875L3.75 9.65625C3.625 9.84375 3.5 10.0625 3.375 10.2812C3.9375 10.125 4.46875 9.875 5 9.53125L5.53125 9.21875L6.125 9.34375ZM14.7812 4.03125C18.25 4.15625 21 6.5625 21 9.5C21 10.8125 20.4375 12 19.5625 12.9375C20.0625 13.9375 20.75 14.6875 20.7812 14.6875C21 14.9375 21.0312 15.25 20.9062 15.5312C20.8125 15.8438 20.5312 16 20.2188 16C18.5 16 17.125 15.4062 16.1875 14.8125C15.625 14.9375 15.0625 15 14.5 15C11.9375 15 9.71875 13.75 8.65625 11.9375C9.1875 11.875 9.71875 11.75 10.1875 11.5625C11.0625 12.75 12.6562 13.5 14.5 13.5C14.9375 13.5 15.375 13.4688 15.8438 13.3438L16.4375 13.2188L16.9688 13.5312C17.5 13.875 18.0312 14.125 18.5938 14.2812C18.4688 14.0625 18.3438 13.8438 18.2188 13.6562L17.7188 12.6875L18.4688 11.9062C18.9375 11.4375 19.5 10.625 19.5 9.5C19.5 7.4375 17.5 5.75 14.9688 5.53125L15 5.5C15 5 14.9062 4.5 14.7812 4.03125Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                      <span class="xl:text-base text-sm text-primary-100"
                        >Comments (05)</span
                      >
                    </div>
                  </div>
                  <div class="mb-7">
                    <a href="blog-details.html">
                      <div
                        class="px-[30px] py-[14px] border border-primary-500 group-hover:bg-primary-500 common-trans rounded-lg inline"
                      >
                        <span
                          class="text-lg text-primary-900 group-hover:text-white common-trans font-semibold spline-sans"
                          >Read More</span
                        >
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="blog-item group w-full overflow-hidden rounded bg-secondary hover:bg-white transition-all duration-300 ease-in-out"
            >
              <div>
                <div class="w-full h-[286px] relative">
                  <div class="w-full h-full">
                    <img
                      src="assets/img/blog-2.png"
                      alt="blog"
                      class="w-full h-full object-cover"
                    />
                  </div>
                  <div
                    class="px-5 py-2.5 rounded bg-primary-500 absolute left-10 bottom-10"
                  >
                    <div class="flex space-x-2.5 items-center">
                      <span>
                        <svg
                          width="14"
                          height="16"
                          viewBox="0 0 14 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7 8C4.78125 8 3 6.21875 3 4C3 1.8125 4.78125 0 7 0C9.1875 0 11 1.8125 11 4C11 6.21875 9.1875 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z"
                            fill="white"
                          />
                        </svg>
                      </span>
                      <span class="text-lg spline-sans font-semibold text-white"
                        >Admin</span
                      >
                    </div>
                  </div>
                </div>
                <div class="xl:p-7 p-3">
                  <a href="blog-details.html">
                    <h2
                      class="xl:text-lg xl:leading-7 text-md font-bold spline-sans text-primary-900 mb-5"
                    >
                      The insurance company that you <br />
                      can trust
                    </h2>
                  </a>
                  <p class="xl:text-base text-sm text-primary-100 mb-5">
                    Lorem ipsum dolor consectetur. Posue sem ultrices feugiat
                    feugiat diam elementumm lacus lectus in lopren ipsum.
                  </p>
                  <div class="w-full h-[1px] bg-primaryBorder mb-5"></div>
                  <div class="w-full flex justify-between items-center mb-14">
                    <div class="flex space-x-2.5 items-center">
                      <span
                        ><svg
                          width="14"
                          height="16"
                          viewBox="0 0 14 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M4.75 2H9.25V0.75C9.25 0.34375 9.5625 0 10 0C10.4062 0 10.75 0.34375 10.75 0.75V2H12C13.0938 2 14 2.90625 14 4V14C14 15.125 13.0938 16 12 16H2C0.875 16 0 15.125 0 14V4C0 2.90625 0.875 2 2 2H3.25V0.75C3.25 0.34375 3.5625 0 4 0C4.40625 0 4.75 0.34375 4.75 0.75V2ZM1.5 7.75H4V6H1.5V7.75ZM1.5 9.25V11.25H4V9.25H1.5ZM5.5 9.25V11.25H8.5V9.25H5.5ZM10 9.25V11.25H12.5V9.25H10ZM12.5 6H10V7.75H12.5V6ZM12.5 12.75H10V14.5H12C12.25 14.5 12.5 14.2812 12.5 14V12.75ZM8.5 12.75H5.5V14.5H8.5V12.75ZM4 12.75H1.5V14C1.5 14.2812 1.71875 14.5 2 14.5H4V12.75ZM8.5 6H5.5V7.75H8.5V6Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                      <span class="xl:text-base text-sm text-primary-100"
                        >October 19, 2022</span
                      >
                    </div>
                    <div class="flex space-x-2.5 items-center">
                      <span
                        ><svg
                          width="22"
                          height="16"
                          viewBox="0 0 22 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11C6.90625 11 6.34375 10.9375 5.78125 10.8125C4.84375 11.4062 3.46875 12 1.75 12C1.4375 12 1.15625 11.8438 1.0625 11.5312C0.9375 11.25 0.96875 10.9375 1.1875 10.6875C1.21875 10.6875 1.90625 9.9375 2.40625 8.9375C1.53125 8 1 6.8125 1 5.5C1 2.46875 3.90625 0 7.5 0ZM6.125 9.34375C6.59375 9.46875 7.03125 9.5 7.5 9.5C10.25 9.5 12.5 7.71875 12.5 5.5C12.5 3.3125 10.25 1.5 7.5 1.5C4.71875 1.5 2.5 3.3125 2.5 5.5C2.5 6.625 3.03125 7.4375 3.5 7.90625L4.25 8.6875L3.75 9.65625C3.625 9.84375 3.5 10.0625 3.375 10.2812C3.9375 10.125 4.46875 9.875 5 9.53125L5.53125 9.21875L6.125 9.34375ZM14.7812 4.03125C18.25 4.15625 21 6.5625 21 9.5C21 10.8125 20.4375 12 19.5625 12.9375C20.0625 13.9375 20.75 14.6875 20.7812 14.6875C21 14.9375 21.0312 15.25 20.9062 15.5312C20.8125 15.8438 20.5312 16 20.2188 16C18.5 16 17.125 15.4062 16.1875 14.8125C15.625 14.9375 15.0625 15 14.5 15C11.9375 15 9.71875 13.75 8.65625 11.9375C9.1875 11.875 9.71875 11.75 10.1875 11.5625C11.0625 12.75 12.6562 13.5 14.5 13.5C14.9375 13.5 15.375 13.4688 15.8438 13.3438L16.4375 13.2188L16.9688 13.5312C17.5 13.875 18.0312 14.125 18.5938 14.2812C18.4688 14.0625 18.3438 13.8438 18.2188 13.6562L17.7188 12.6875L18.4688 11.9062C18.9375 11.4375 19.5 10.625 19.5 9.5C19.5 7.4375 17.5 5.75 14.9688 5.53125L15 5.5C15 5 14.9062 4.5 14.7812 4.03125Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                      <span class="xl:text-base text-sm text-primary-100"
                        >Comments (05)</span
                      >
                    </div>
                  </div>
                  <div class="mb-7">
                    <a href="blog-details.html">
                      <div
                        class="px-[30px] py-[14px] border border-primary-500 group-hover:bg-primary-500 common-trans rounded-lg inline"
                      >
                        <span
                          class="text-lg text-primary-900 group-hover:text-white common-trans font-semibold spline-sans"
                          >Read More</span
                        >
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="blog-item lg:block hidden group w-full overflow-hidden rounded bg-secondary hover:bg-white transition-all duration-300 ease-in-out"
            >
              <div>
                <div class="w-full h-[286px] relative">
                  <div class="w-full h-full">
                    <img
                      src="assets/img/blog-3.png"
                      alt="blog"
                      class="w-full h-full object-cover"
                    />
                  </div>
                  <div
                    class="px-5 py-2.5 rounded bg-primary-500 absolute left-10 bottom-10"
                  >
                    <div class="flex space-x-2.5 items-center">
                      <span>
                        <svg
                          width="14"
                          height="16"
                          viewBox="0 0 14 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7 8C4.78125 8 3 6.21875 3 4C3 1.8125 4.78125 0 7 0C9.1875 0 11 1.8125 11 4C11 6.21875 9.1875 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z"
                            fill="white"
                          />
                        </svg>
                      </span>
                      <span class="text-lg spline-sans font-semibold text-white"
                        >Admin</span
                      >
                    </div>
                  </div>
                </div>
                <div class="xl:p-7 p-3">
                  <a href="blog-details.html">
                    <h2
                      class="xl:text-lg xl:leading-7 text-md font-bold spline-sans text-primary-900 mb-5"
                    >
                      The next big thing in the insurance <br />
                      industry
                    </h2>
                  </a>
                  <p class="xl:text-base text-sm text-primary-100 mb-5">
                    Lorem ipsum dolor consectetur. Posue sem ultrices feugiat
                    feugiat diam elementumm lacus lectus in lopren ipsum.
                  </p>
                  <div class="w-full h-[1px] bg-primaryBorder mb-5"></div>
                  <div class="w-full flex justify-between items-center mb-14">
                    <div class="flex space-x-2.5 items-center">
                      <span
                        ><svg
                          width="14"
                          height="16"
                          viewBox="0 0 14 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M4.75 2H9.25V0.75C9.25 0.34375 9.5625 0 10 0C10.4062 0 10.75 0.34375 10.75 0.75V2H12C13.0938 2 14 2.90625 14 4V14C14 15.125 13.0938 16 12 16H2C0.875 16 0 15.125 0 14V4C0 2.90625 0.875 2 2 2H3.25V0.75C3.25 0.34375 3.5625 0 4 0C4.40625 0 4.75 0.34375 4.75 0.75V2ZM1.5 7.75H4V6H1.5V7.75ZM1.5 9.25V11.25H4V9.25H1.5ZM5.5 9.25V11.25H8.5V9.25H5.5ZM10 9.25V11.25H12.5V9.25H10ZM12.5 6H10V7.75H12.5V6ZM12.5 12.75H10V14.5H12C12.25 14.5 12.5 14.2812 12.5 14V12.75ZM8.5 12.75H5.5V14.5H8.5V12.75ZM4 12.75H1.5V14C1.5 14.2812 1.71875 14.5 2 14.5H4V12.75ZM8.5 6H5.5V7.75H8.5V6Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                      <span class="xl:text-base text-sm text-primary-100"
                        >October 19, 2022</span
                      >
                    </div>
                    <div class="flex space-x-2.5 items-center">
                      <span
                        ><svg
                          width="22"
                          height="16"
                          viewBox="0 0 22 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11C6.90625 11 6.34375 10.9375 5.78125 10.8125C4.84375 11.4062 3.46875 12 1.75 12C1.4375 12 1.15625 11.8438 1.0625 11.5312C0.9375 11.25 0.96875 10.9375 1.1875 10.6875C1.21875 10.6875 1.90625 9.9375 2.40625 8.9375C1.53125 8 1 6.8125 1 5.5C1 2.46875 3.90625 0 7.5 0ZM6.125 9.34375C6.59375 9.46875 7.03125 9.5 7.5 9.5C10.25 9.5 12.5 7.71875 12.5 5.5C12.5 3.3125 10.25 1.5 7.5 1.5C4.71875 1.5 2.5 3.3125 2.5 5.5C2.5 6.625 3.03125 7.4375 3.5 7.90625L4.25 8.6875L3.75 9.65625C3.625 9.84375 3.5 10.0625 3.375 10.2812C3.9375 10.125 4.46875 9.875 5 9.53125L5.53125 9.21875L6.125 9.34375ZM14.7812 4.03125C18.25 4.15625 21 6.5625 21 9.5C21 10.8125 20.4375 12 19.5625 12.9375C20.0625 13.9375 20.75 14.6875 20.7812 14.6875C21 14.9375 21.0312 15.25 20.9062 15.5312C20.8125 15.8438 20.5312 16 20.2188 16C18.5 16 17.125 15.4062 16.1875 14.8125C15.625 14.9375 15.0625 15 14.5 15C11.9375 15 9.71875 13.75 8.65625 11.9375C9.1875 11.875 9.71875 11.75 10.1875 11.5625C11.0625 12.75 12.6562 13.5 14.5 13.5C14.9375 13.5 15.375 13.4688 15.8438 13.3438L16.4375 13.2188L16.9688 13.5312C17.5 13.875 18.0312 14.125 18.5938 14.2812C18.4688 14.0625 18.3438 13.8438 18.2188 13.6562L17.7188 12.6875L18.4688 11.9062C18.9375 11.4375 19.5 10.625 19.5 9.5C19.5 7.4375 17.5 5.75 14.9688 5.53125L15 5.5C15 5 14.9062 4.5 14.7812 4.03125Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                      <span class="xl:text-base text-sm text-primary-100"
                        >Comments (05)</span
                      >
                    </div>
                  </div>
                  <div class="mb-7">
                    <a href="blog-details.html">
                      <div
                        class="px-[30px] py-[14px] border border-primary-500 group-hover:bg-primary-500 common-trans rounded-lg inline"
                      >
                        <span
                          class="text-lg text-primary-900 group-hover:text-white common-trans font-semibold spline-sans"
                          >Read More</span
                        >
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection

