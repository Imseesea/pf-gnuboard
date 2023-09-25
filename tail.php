<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
    <footer id="footer">
        <div class="address-lst">
          <div class="address-box inner">
            <address>
              <strong class="addre"> 전주사무처 </strong>
              <span>
                전북 전주시 완산구 전주객사3길 22 전주영화제작소 2층 (54999)
              </span>
              <p>T. (063)288-5433 F. (063)288-5411</p>
            </address>
            <address>
              <strong class="addre"> 서울사무소 </strong>
              <span>서울특별시 마포구 양화로15길 16 동극빌딩 4층 (04031)</span>
              <p>T. (02)2285-0562 F. (02)2285-0560</p>
            </address>
            <address>
              <strong> 전주영화제작소 </strong>
              <span
                >전북 전주시 완산구 전주객사3길 22 전주영화제작소 (54999)</span
              >
              <p>T. (063)231-3377</p>
            </address>
          </div>
        </div>
        <div class="copyright-wrap">
          <div class="copyright inner">
            <div class="copyright-box">
              <div class="cr1-member">
                <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
                <a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a>
              </div>
              <p class="cr2">
                홈페이지는 운영체제(OS)：Windows 7이상, 인터넷 브라우저：IE
                9이상, 파이어 폭스, 크롬, 사파리에 최적화 되어있습니다.
              </p>
              <p class="cr3">
                COPYRIGHT © JEONJU International Film Festival ALL RIGHTS
                RESERVED (New Server)
              </p>
            </div>
            <div class="cr-sns-box">
              <ul>
                <li>
                  <a href="#" class="ft-sns-1">
                  <!-- instagram -->
                    <!-- <img src="./images/main/ft-sns-1.png" alt="instagram" /> -->
                  </a>
                </li>
                <li>
                  <a href="#"class="ft-sns-2">
                  <!-- facebook -->
                    <!-- <img src="./images/main/ft-sns-2.png" alt="facebook" /> -->
                  </a>
                </li>
                <li>
                  <a href="#" class="ft-sns-3">
                  <!-- twitter -->
                    <!-- <img src="./images/main/ft-sns-3.png" alt="twitter" /> -->
                  </a>
                </li>
                <li>
                  <a href="#" class="ft-sns-4">
                  <!-- youtube -->
                    <!-- <img src="./images/main/ft-sns-4.png" alt="youtube" /> -->
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <button type="button" id="top_btn">
            <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
        </button>
        <script>
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
      </footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");