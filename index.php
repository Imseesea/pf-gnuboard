<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<!-- 본인코드삽입 -->

      <!-- <div class="fixed-blank"></div> -->
      

      <div class="slide-wrap">
        <div class="swiper slide-intro">
          <div class="swiper swiper-intro">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="#">
                  <img
                    src="./images/main/slide-1.png"
                    alt="제24회 전주국제영화제 지난 열흘 동안 함께할 수 있어 매 순간 즐거웠습니다. 새로 맞은 봄날을 우리와 함께해 주셔서 고맙습니다.
                  내년에 다시 만나요!"
                  />
                  <section class="slide-txt">
                    <strong>제24회</strong>
                    <h2>전주국제영화제</h2>
                    <p>
                      지난 열흘 동안 함께할 수 있어 매 순간 즐거웠습니다. <br />
                      새로 맞은 봄날을 우리와 함께해 주셔서 고맙습니다. <br />
                      내년에 다시 만나요!
                    </p>
                  </section>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#">
                  <img
                    src="./images/main/slide-2.png"
                    alt="개막작 토리와 로키타 Tori et Lokita 장 피에르 다르덴, 뤽 다르덴 Jean-Pierre DARDENNE, Luc DARDENNE  Belgium,France | 2022 | 89min"
                  />
                  <section class="slide-txt">
                    <strong>개막작</strong>
                    <h2>토리와 로키타 <span>Tori et Lokita</span></h2>

                    <p>
                      장 피에르 다르덴, 뤽 다르덴
                      <br />Jean-Pierre DARDENNE, Luc DARDENNE <br />
                      Belgium,France | 2022 | 89min
                    </p>
                  </section>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#">
                  <img
                    src="./images/main/slide-3.png"
                    alt="폐막작 어디로 가고 싶으신가요 김희정 KIM Hee-Jung Korea, Poland | 2023 | 104min "
                  />
                  <section class="slide-txt">
                    <strong>폐막작</strong>
                    <h2>어디로 가고 싶으신가요</h2>
                    <p>
                      김희정 <br />
                      KIM Hee-Jung <br />
                      Korea, Poland | 2023 | 104min
                    </p>
                  </section>
                </a>
              </div>
            </div>

            <div class="main-pagination">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
              <div class="wrap-autoplay-control">
                <button
                  aria-pressed="false"
                  aria-label="자동 재생 일시정지"
                ></button>
              </div>
              <!-- <button>
                <i class="las la-pause">
                  i {
                    content: "\f04c";
                    font-family: "Line Awesome Free";
                    font-weight: 900;
                  }
                </i>
              </button> -->
            </div>
          </div>
        </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <!-- <script>
            var swiper = new Swiper(".swiper-intro", {
                loop: true,
                speed: 1000,
                pagination: {
                    el: ".swiper-pagination",
                    type: "fraction",
                },
                // autoplay: {
                //   delay: 2500,
                //   disableOnInteraction: false,
                // },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                on: {
                    init: function () {
                    thisSlide = this;
                    autoPlayBtn = document.querySelector(".wrap-autoplay-control > button");
                    autoPlayBtn.addEventListener("click", (e) => {
                        autoPlayState = autoPlayBtn.getAttribute("aria-pressed");
                        if (autoPlayState === "false") {
                        autoPlayBtn.setAttribute("aria-pressed", "true");
                        thisSlide.autoplay.stop();
                        } else if (autoPlayState === "true") {
                        autoPlayBtn.setAttribute("aria-pressed", "false");
                        thisSlide.autoplay.start();
                        }
                    });
                    },
                },
                });
        </script> -->
      </div>

      <main id="main">
        <div class="screen-wrap l_section inner">
          <h2 class="main-sec-tit">PROGRAM</h2>
          <div class="screen-tab-menu">
            <ul class="tab-menu-contents">
              <li><a href="#">개막작</a></li>
              <li><a href="#">폐막작</a></li>
              <li class="on"><a href="#">국제경쟁</a></li>
              <li><a href="#">한국단편경쟁</a></li>
              <li><a href="">전주시네마프로젝트</a></li>
              <li><a href="#">프론트라인</a></li>
              <li><a href="#">월드시네마</a></li>
              <li><a href="#">마스터즈</a></li>
              <li><a href="#">코리안시네마</a></li>
              <li><a href="#">영화보다낯선</a></li>
              <li><a href="#">시네마천국</a></li>
              <li><a href="#">불면의 밤</a></li>
              <li><a href="#">시네필전주</a></li>
              <li><a href="#">전주시네마프로젝트: 프로듀서로서의 영화제</a></li>
              <li><a href="#">KAFA 40주년 특별전</a></li>
              <li><a href="#">J 스페셜: 올해의 프로그래머</a></li>
              <li><a href="#">특별상영</a></li>
            </ul>
          </div>
          <div class="screen-tab-contents">
            <h3 class="sub-sec-tit">국제경쟁</h3>
            <div>
              <ul class="screen_content picture-zoom">
                <li>
                  <a href="#">
                    <div class="photo-box">
                      <img src="./images/main/program-1.png" alt="" />
                    </div>
                    <strong> 돌을 찾아서 </strong>
                    <p>
                      There is a Stone <br />
                      오타 타츠나리 (OTA Tatsunari) <br />
                      Japan | 2022 | 104min
                    </p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="photo-box">
                      <img src="./images/main/program-2.png" alt="" />
                    </div>
                    <strong> 구름에 대하여 </strong>
                    <p>
                      About the Clouds <br />
                      마리아 아파리시오 (María APARICIO) <br />
                      Argentina | 2022 | 146min
                    </p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="photo-box">
                      <img src="./images/main/program-3.png" alt="" />
                    </div>

                    <strong> 올란도, 나의 정치적 자서전</strong>
                    <p>
                      Orlando, My Political Biography <br />
                      폴 B. 프레시아도 (Paul B. PRECIADO) <br />
                      France | 2023 | 99min
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="j-screen_wrap">
          <div class="j-screen">
            <div class="ani-logo">
              <img
                src="./images/main/ani-logo1-.png"
                alt="JEONJU24 intl. film festival 2023.4.27 - 5.6 제24회 전주국제영화제"
              />
            </div>
            <div class="ani-motion">
              <div class="ocean">
                <div class="wave"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="jiff-news-wrap inner">
          <h3 class="jiff-news-tit">JIFF NEWS</h3>
          <div class="news-wrap picture-zoom">
            <div class="main-news">
              <a href="#" class="main-news-content">
                <div class="img-box photo-box">
                  <img src="./images/main/main-news.png" alt="" />
                </div>
                <div class="txt-box">
                  <h3 class="main-news-tit">
                    다시 성장세에 접어든 전주국제영화제, 경제적 파급효과 204억
                    원 웃돌아
                  </h3>
                  <p class="main-news-txt">
                    42개국 247편 71,693명 관람, 좌석 판매율 83.1%, 매진율 68.8%
                    기록
                  </p>
                  <span class="short_cut_btn"> 바로가기 </span>
                </div>
              </a>
            </div>
            <div class="sub-news swiper swiper-news">
              <ul class="sub-news-section swiper-wrapper">
                <li class="swiper-slide">
                  <a href="#">
                    <div class="photo-box">
                      <img src="./images/main/sub-news1.png" alt="" />
                    </div>
                    <div class="sub-txt-box">
                      <strong>
                        도전과 확장의 축제! 제24회 전주국제영화제, 전북대학교
                        삼성문화회관에서 열흘간의 大축제 마무리
                      </strong>
                      <p>2023-05-10</p>
                    </div>
                  </a>
                </li>
                <li class="swiper-slide">
                  <a href="#">
                    <div class="photo-box">
                      <img src="./images/main/sub-news2.png" alt="" />
                    </div>
                    <div class="sub-txt-box">
                      <strong>
                        전주국제영화제 산업 프로그램, 제15회 전주프로젝트 수상작
                        공개
                      </strong>
                      <p>2023-05-05</p>
                    </div>
                  </a>
                </li>
                <li class="swiper-slide">
                  <a href="#">
                    <div class="sub-img-box">
                      <img src="./images/main/sub-news3.png" alt="" />
                    </div>
                    <div class="sub-txt-box">
                      <strong>
                        제24회 전주국제영화제 국제경쟁 &lt;돌을 찾아서&gt;,
                        한국경쟁 &lt;당신으로부터&gt; 대상 수상!
                      </strong>
                      <p>2023-05-04</p>
                    </div>
                  </a>
                </li>
                <li class="swiper-slide">
                  <a href="#">
                    <div class="photo-box">
                      <img src="./images/main/sub-news1.png" alt="" />
                    </div>
                    <div class="sub-txt-box">
                      <strong>
                        도전과 확장의 축제! 제24회 전주국제영화제, 전북대학교
                        삼성문화회관에서 열흘간의 大축제 마무리
                      </strong>
                      <p>2023-05-10</p>
                    </div>
                  </a>
                </li>
                <li class="swiper-slide">
                  <a href="#">
                    <div class="photo-box">
                      <img src="./images/main/sub-news2.png" alt="" />
                    </div>
                    <div class="sub-txt-box">
                      <strong>
                        전주국제영화제 산업 프로그램, 제15회 전주프로젝트 수상작
                        공개
                      </strong>
                      <p>2023-05-05</p>
                    </div>
                  </a>
                </li>
                <li class="swiper-slide">
                  <a href="#">
                    <div class="sub-img-box">
                      <img src="./images/main/sub-news3.png" alt="" />
                    </div>
                    <div class="sub-txt-box">
                      <strong>
                        제24회 전주국제영화제 국제경쟁 &lt;돌을 찾아서&gt;,
                        한국경쟁 &lt;당신으로부터&gt; 대상 수상!
                      </strong>
                      <p>2023-05-04</p>
                    </div>
                  </a>
                </li>
                <li class="swiper-slide">
                  <a href="#">
                    <div class="photo-box">
                      <img src="./images/main/sub-news1.png" alt="" />
                    </div>
                    <div class="sub-txt-box">
                      <strong>
                        도전과 확장의 축제! 제24회 전주국제영화제, 전북대학교
                        삼성문화회관에서 열흘간의 大축제 마무리
                      </strong>
                      <p>2023-05-10</p>
                    </div>
                  </a>
                </li>
                <li class="swiper-slide">
                  <a href="#">
                    <div class="photo-box">
                      <img src="./images/main/sub-news2.png" alt="" />
                    </div>
                    <div class="sub-txt-box">
                      <strong>
                        전주국제영화제 산업 프로그램, 제15회 전주프로젝트 수상작
                        공개
                      </strong>
                      <p>2023-05-05</p>
                    </div>
                  </a>
                </li>
                <li class="swiper-slide">
                  <a href="#">
                    <div class="sub-img-box">
                      <img src="./images/main/sub-news3.png" alt="" />
                    </div>
                    <div class="sub-txt-box">
                      <strong>
                        제24회 전주국제영화제 국제경쟁 &lt;돌을 찾아서&gt;,
                        한국경쟁 &lt;당신으로부터&gt; 대상 수상!
                      </strong>
                      <p>2023-05-04</p>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="main-pagination">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <!-- <button>
                  <i class="las la-pause">
                    i {
                      content: "\f04c";
                      font-family: "Line Awesome Free";
                      font-weight: 900;
                    }
                  </i>
                </button> -->
              </div>
              <div class="swiper-scrollbar"></div>
            </div>
          </div>
        </div>
        <!-- <script>
            var swiper = new Swiper(".swiper-news", {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                // autoplay: {
                //   delay: 2500,
                //   disableOnInteraction: false,
                // },
                pagination: {
                    el: ".swiper-pagination",
                    type: "fraction",
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                scrollbar: {
                    el: ".swiper-scrollbar",
                    hide: false,
                },
            });
        </script> -->

        <div class="photo-wrap inner">
          <h3 class="jiff-news-tit">사진/동영상</h3>
          <ul class="photo-section picture-zoom">
            <li>
              <a href="#">
                <div class="photo-box">
                  <img src="./images/main/photo1.png" alt="" />
                </div>
                <strong>전주씨네투어 전주영화X마중</strong>
                <p>2023-05-02</p>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="photo-box">
                  <img src="./images/main/photo2.png" alt="" />
                </div>
                <strong>J 스페셜 클래스, 백현진&박해일</strong>
                <p>2023-04-29</p>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="photo-box">
                  <img src="./images/main/photo3.png" alt="" />
                </div>

                <strong>마스터 클래스, 다르덴 형제 감독</strong>
                <p>2023-04-29</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="notice-wrap inner">
          <!-- <div class="etc-link">
            <h3 class="notice-wrap-tit">NOTICE</h3>
          </div> -->
          <div class="col">
            <?php
                echo latest('basic', 'notice', 5, 30);	// 최소설치시 자동생성되는 질문답변게시판
                ?>
                
            <!-- <h3 class="notice-wrap-tit">NOTICE</h3>
            <div class="box">
                
              <ul class="list-txt">
                <li>
                  <a href="#">
                    <strong>
                      [공고] (재)전주국제영화제조직위원회 계약직 스태프 모집
                      (해외영화팀장)</strong
                    >
                    <p>2023-08-09</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <strong>
                      [공고] (재)전주국제영화제조직위원회 계약직 스태프 모집
                      (전주프로젝트팀장)</strong
                    >
                    <p>2023-07-03</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <strong>
                      [공고] 2023년 K-DOC CLASS &lt;퍼스트컷 완성&gt; 지원
                      공고</strong
                    >
                    <p>2023-06-19</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <strong>[공고] (재)전주국제영화제조직위원회</strong>
                    <p>2023-06-02</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <strong>[공지] 제15회 전주프로젝트 수상작 발표</strong>
                    <p>2023-05-04</p>
                  </a>
                </li>
              </ul>
              <a href="#" class="etc-btn">more</a>
            </div> -->
          </div>
          <div class="col col2">
          
            <h2 class="notice-wrap-tit">CUSTOMER SERVICE</h2>
            <div class="box col2 cs-wrap">
              <p class="cs-number">
                <strong>문의처</strong>
                <span>(063)288-5433</span>
              </p>
              <p class="cs-time">
                <strong>문의 시간</strong>
                <span>09:00-18:00 </span>
              </p>
              <ul class="cs-btn">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">1:1게시판</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="sponsor-wrap inner">
          <h4>SPONSOR</h4>
          <div class="sponsor-swiper">
            <div class="swiper swiper-sponsor">
              <div class="swiper-wrapper">
                <div class="swiper-slide s1">전북은행</div>
                <div class="swiper-slide s2">씨지브이</div>
                <div class="swiper-slide s3">월트디즈니</div>
                <div class="swiper-slide s4">fujufilm</div>
                <div class="swiper-slide s5">진모터스</div>
                <div class="swiper-slide s6">씨제이 제일제당</div>
                <div class="swiper-slide s7">현대</div>
                <div class="swiper-slide s8">대한항공</div>
                <div class="swiper-slide s9">하이트진로</div>
                <div class="swiper-slide s10">포스코홀딩스</div>
                <div class="swiper-slide s11">HBAF</div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
        <!-- <script>
            var swiper = new Swiper(".swiper-sponsor", {
                slidesPerView: 7,
                spaceBetween: 20,
                slidesPerGroup: 3,
                loop: true,
                loopAdditionalSlides: 1,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        </script> -->
        <div class="sns-app-wrap inner">
          <div class="sns-sec s-a_sec">
            <h4>JIFF SNS</h4>
            <ul>
              <li>
                <a href="#">
                  <img src="./images/main/sns-1.png" alt="instagram" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="./images/main/sns-2.png" alt="facebook" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="./images/main/sns-3.png" alt="twitter" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="./images/main/sns-4.png" alt="youtube" />
                </a>
              </li>
            </ul>
          </div>
          <div class="app-sec s-a_sec">
            <h4>JIFF APPLICATION</h4>
            <ul>
              <li>
                <a href="#">
                  <img src="./images/main/app1.png" alt="Google Play" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="./images/main/app2.png" alt="App Store" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </main>




<!-- <div class="latest_top_wr">
    <div class="inner">

    <?php
   
	// echo latest('basic', 'notice', 4, 23);		
	// echo latest('basic', 'qa', 4, 23);		
    ?>
    </div>
</div> -->

<?php
include_once(G5_PATH.'/tail.php');