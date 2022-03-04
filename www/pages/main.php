  <!-- 헤더시작 -->
  <header id="header">
    <a href="/" class="logo_wrap">
      <img src="/img/main/logo.jpg" alt="">
    </a>
    <div class="w-1000">
      <ul class="gnb">
        <li>
          <a href="#part01">
            사은품혜택
          </a>
        </li>
        <li>
          <a href="#part02">
            요금계산기
          </a>
        </li>
        <li>
          <a href="#part03">
            설치가능지역조회
          </a>
        </li>
        <li>
          <a href="#part04">
            가입신청서
          </a>
        </li>
        <li>
          <a href="#part05">
            문의게시판
          </a>
        </li>
        <li>
          <a href="#part06">
            후기게시판
          </a>
        </li>
      </ul>
    </div>
    <a href="tel:1833-4438" class="call_anchor">
      <img src="/img/main/call.jpg" alt="">
    </a>
  </header>
  <!-- 헤더 끝 -->
  <!-- 사이드 퀵메뉴 시작 -->
  <div class="quick_menu_wrap">
    <ul class="quick_menu">
      <li>
        <a href="">
          <div class="img_wrap">
            <img src="/img/main/kakao_icon.png" alt="">
          </div>
          <p>카톡상담</p>
        </a>
      </li>
      <li>
        <a href="tel:">
          <div class="img_wrap">
            <img src="/img/main/call_counsel_icon.png" alt="">
          </div>
          <p>전화상담</p>
        </a>
      </li>
      <li>
        <a href="#part02">
          <div class="img_wrap">
            <img src="/img/main/calculator_icon.png" alt="">
          </div>
          <p>요금계산기</p>
        </a>
      </li>
      <li>
        <a href="#part05">
          <div class="img_wrap">
            <img src="/img/main/ask_board_icon.png" alt="">
          </div>
          <p>문의게시판</p>
        </a>
      </li>
    </ul>
    <a href="" class="top_btn">
      <p>TOP</p>
    </a>
  </div>
  <!-- 사이드 퀵메뉴 끝 -->
  
  <!-- 슬라이드 1 시작 -->
  <section class="swiper slide01">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="/img/main/silde01_01.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/img/main/slide01_02.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/img/main/slide01_03.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/img/main/slide01_04.jpg" alt="">
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </section>
  <!-- 슬라이드 1 끝 -->
  <!-- 슬라이드 2 시작  -->
  <section class="swiper slide02">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="/img/main/slide02_01.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/img/main/slide02_02.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/img/main/slide02_03.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/img/main/slide02_04.jpg" alt="">
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </section>
  <!-- 슬라이드 2 끝 -->

  <!-- 사은품혜택 시작 -->
  <section class="section_style bg01" id="part01">
    <img src="/img/main/landing_01.jpg" alt="" class="hidden-xs">
    <img src="/img/main/landing_m_01.jpg" alt="" class="visible-xs">
  </section>
  <!-- 사은품 혜택 끝 -->

  <!-- 요금계산기 시작 -->
  <section class="section_style" id="part02">
    <img src="/img/main/landing_02.jpg" alt="" class="hidden-xs">
    <img src="/img/main/landing_m_02.jpg" alt="" class="visible-xs">
    <div class="calculator">

      <style>
        .calc_wrap{width:100%; max-width:1200rem; margin:0 auto;}
        .calc_wrap .inner{width:95%; margin:0 auto; max-width:1000rem; position:relative;}
        .calc_wrap ul{width:100%; text-align:center;}
        .calc_wrap ul span{width:25%; height:70rem; line-height:70rem; text-align:center; float:left; display:inline-block; background:#b6b6b6; font-size:19rem; color:#fff;}
        .phone_inc span{font-weight:700;}
        .calc_division{padding:4rem 0; width:100%; display:flex; align-items:center; line-height:30rem;}
        .calc_division label{width:80rem; font-size:16rem; display:inline-flex; line-height:30rem;}
        .calc_division ul{float:left;}
        .calc_division ul span{height:30rem; line-height:30rem; font-size:15rem; text-align:center; width:90rem; margin-right:8rem; margin-bottom:8rem;}
        .calc_div_wrap{width:auto; position:relative; display:inline-block; padding:33rem;}
        .calc_line{width:100%; height:1rem; background:#e0e1e3; margin-top:20rem; margin-bottom:20rem;}
        .calc_submit{width:100%; margin:0 auto; text-align:center; margin-top:40rem;}
        .calc_submit a{display:inline-block; padding:11rem 44rem; margin:0 3rem; font-size:16rem;}
        .calc_submit a.btn1{background:#ffd93f; color:#282828; letter-spacing:-1.5rem;}
        .calc_submit a.btn2{background:#282828; color:#ffd93f; letter-spacing:-1.5rem;}
        .calc_price{padding:33rem; width:100%; background:#f7f7f7; display:flex; margin-top:50rem;}
        .calc_price div{display:inline-block; padding:11rem;}
        .calc_price .k1{font-size:16rem; margin-bottom:10rem;}
        .calc_price .k1 span{float:right;}
        .position_calc{width:320rem; position:absolute; right:0; top:0%;  padding:33rem 22rem; border-radius:30rem; background:#ffd93f;}
        .position_calc .t1{font-size:17rem; margin-bottom:5rem;}
        .position_calc .t1 span{float:right;}
        .position_calc .t2{background:#fff; font-size:21rem; margin-bottom:5rem; padding:11rem 11rem; margin-top:10rem; margin-bottom:10rem;}
        .position_calc .t2 span{float:right;}
        .position_calc .t3{font-size:14rem; line-height:22rem;}
        .settops{display:none;}
        .sk_calc .calc_price .k1{color:#ff7113;}
        .sk_calc .position_calc .t2 span{color:#ff7113;}
        .sk_calc ul a.on span{background:#ff7113;}
        
        
      
        @media (max-width: 800rem){
          
          .sk .sub_txtwr1{padding:44rem 0;}
          .sk .sub_txtwr1 ul li{width:98%; float:none; height:inherit; margin-bottom:10rem;}
          .sk .sub_txtwr1 ul li .t1{font-size:16rem;}
          .sk .sub_txtwr1 ul li .t2{font-size:19rem;}
          .sk .sub_txtwr1 ul li .t3{font-size:15rem; letter-spacing:-1.5rem}	
          .sk .sub_table{margin-bottom:30rem;}
          .sk .sub_table .tit1{margin-bottom:20rem;}
          .sk .sub_table li{font-size:14rem;}
          .sk .sub_table li span{width:80%;}
          .sk .sub_table li span+span{display:none;}
          .sk .sub_table li span+span+span{display:none;}
          .sk .sub_table li span+span+span+span{display:block; width:20%;}
          
          .pg_calc_btn{margin-bottom:40rem;}
          .gnb-btn{top:15rem; position: absolute; right: 12rem; display:block;}
          .gnb-btn button{width:45rem; height:45rem; border: none; background:#fff;}
        }

      </style>
              
      <div class="calc_wrap sk_calc">
        <div class="inner">
          
          <div class="calc_div_wrap">
            <div class="calc_division">
              <label class="f700">인터넷</label>
              <ul class="internet">
                <a  class="on" href="#" onclick="return false;" data-value='0'><span>100MB</span></a>
                <a href="#" onclick="return false;" data-value='1'><span>500MB</span></a>
              </ul>
            </div>
            <div class="calc_division">
              <label class="f700">TV</label>
              <ul class="tv">
                <a class="on" href="#" onclick="return false;" data-value='0'><span>미신청</span></a>
                <a href="#" onclick="return false;" data-value='1'><span>스탠다드</span></a>
                <a href="#" onclick="return false;" data-value='2'><span>ALL</span></a>
              </ul>
            </div>
            <div class="calc_division settops">
              <label class="f700">셋탑박스</label>
              <ul class="settop">
                <a class="on" href="#" onclick="return false;" data-value='0'><span>SMART3</span></a>
                <a href="#" onclick="return false;" data-value='1'><span>애플셋탑</span></a>
              </ul>
            </div>
            <div class="calc_division">
              <label class="f700">WIFI</label>
              <ul class="wifi">
                <a class="on" href="#" onclick="return false;" data-value='0'><span>신청</span></a>
              </ul>
            </div>
            <div class="calc_line"></div>
            <div class="calc_division">
              <label class="f700">결합유형</label>
              <ul class="type">
                <a href="#" onclick="return false;" class="on" data-value='0'><span>홈결합</span></a>
                <a href="#" onclick="return false;" data-value='1'><span>온프리</span></a>
                <a href="#" onclick="return false;" data-value='2'><span>온플랜</span></a>
                <a href="#" onclick="return false;" data-value='3'><span>온가족할인</span></a>
              </ul>
            </div>
          </div>
          <div class="sk_calc">
            <div class="position_calc">
              <p class="t1">선택이용요금 <span id="value1">0 원</span></p>
              <p class="t1">약정할인요금 <span id="value2">0 원</span></p>
              <p class="t2 f900">
                월 예상 납부액 <span id="value3" class="f900">0 원</span>
              </p>
              <p class="t3">
                * 초간단 계산 기능은 미리보기 용으로 실제 납부액과 차이가 있을 수 있습니다.
              </p>
            </div>
          </div>
          <div class="calc_submit">
            <a class="btn1 f700" href="#">위 상품으로 가입하기</a>
            <a class="btn2 f700" href="#">상담신청</a>
          </div>
          
        </div>
      </div>

    <script>
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    </script>

    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script>

      //var get_category = ['phone_inc','type','internet','tv','wifi']; // ul 배열 설정
      var get_category = ['phone_inc','internet','tv','settop','wifi','type']; // ul 배열 설정
      
      /* SKT */
      var phone_inc = ['23100','34100']; // 기본금액 설정
      var type_array_0 = ['0','-3300','-5610','-11550']; // 100메가 결합할인
      var type_array_1 = ['0','-7700','-11110','-17050']; // 500메가 결합할인	
      /* TV - 홈결합시 */
      var tv_array_0 = ['0','-1100','-7700']; // tv 100메가 할인	
      /* TV - 100or500 */
      var tv_array1_1 = ['0','0','-2200','-2200']; // 500메가 결합할인
      
      var tv_default = ['13200','15400'];
      var set_top = ['4400','6600'];
      var tv_plus_dis = '-1100';
      
      var step = new Array();	
      var int_value = '0';
      var dis_count_value = '0';
      var total_value = '0';
      
      $(document).ready(function(){
        $('.calc_wrap ul a').on('click',function(){
          var select_tab = $(this).closest('ul').attr('class');
          $('.'+select_tab+' a').removeClass('on');
          $(this).addClass('on');
        
          var i = '0';
          get_category.forEach(function(item){
            var value = $('.'+item+' a.on').data('value');
            step[i] = value;
            i++;
          });			
          int_value = parseInt(0);
          dis_count_value = parseInt(0);
          total_value = parseInt(0);			
          
          if( step[1] == '0' ){
            if( step[2] == '2' ){
              alert('100MB과 ALL은 결합이 불가능합니다');
              $('.internet a:nth-child(2)').trigger('click');				
            }
          }
          
          if( step[1] == '1' ){
            if( step[2] == '1' ){
              alert('500MB과 스탠다드는 결합이 불가능합니다');
              $('.internet a:nth-child(1)').trigger('click');				
            }
          }
          
          int_value += parseInt(phone_inc[step[1]]);			
          if(step[1] == '0') dis_count_value += parseInt(type_array_0[step[5]]);
          else dis_count_value += parseInt(type_array_1[step[5]]);	
          
          if( step[2] != '0'){
            $('.settops').css('display','flex');
            int_value += parseInt(tv_default[step[1]]);
            int_value += parseInt(set_top[step[3]]);
            if(step[5] == '0') dis_count_value += parseInt(tv_array_0[step[2]]);
            else dis_count_value += parseInt(tv_array1_1[step[2]])
            if( (step[5] == '1') || (step[5] == '2') ){
              dis_count_value += parseInt(tv_plus_dis);
            }		
          }
          else $('.settops').css('display','none');
                      
          
          total_value = parseInt(int_value) + parseInt(dis_count_value);
          int_value = numberWithCommas(int_value);
          dis_count_value = numberWithCommas(dis_count_value);
          $('#value1').empty().html(int_value+" 원");
          $('#value2').empty().html(dis_count_value+" 원");			
          total_value = numberWithCommas(total_value);
          $('#value3').empty().html(total_value+" 원");
          int_value = parseInt(0);
          dis_count_value = parseInt(0);
          total_value = parseInt(0);
          
        });
        $('.internet a:first').trigger('click');
      });
      
      function go_counsel(){
        var k = '0';
        get_category.forEach(function(item){
          var value = $('.'+item+' a.on').text();
          if(k == '0') get0 = value;
          if(k == '1') get1 = value;
          if(k == '2') get2 = value;
          if(k == '3') get3 = value;
          if(k == '4') get4 = 'WIFI';
          if(k == '5') get5 = value;
          k++;
        });	
        get6 = $('#value3').text();
        if(get2 == '미신청'){
          location.href='/counsel.php?get0='+get0+'&get1='+get1+'&get4='+get4+'&get5='+get5+'&get6='+get6;
        }else{
          location.href='/counsel.php?get0='+get0+'&get1='+get1+'&get2='+get2+'&get3='+get3+'&get4='+get4+'&get5='+get5+'&get6='+get6;
        }
      }

    </script>

    </div>
  </section>
  <!-- 요금계산기 끝 -->

  <!-- 서비스가능지역 조회 시작 -->
  <section class="section_style" id="part03">
    <img src="/img/main/landing_03.jpg" alt="" class="hidden-xs">
    <img src="/img/main/landing_m_03.jpg" alt="" class="visible-xs">
    <a href="#" class="service_check"></a>
  </section>
  <!-- 서비스가능지역조회 끝 -->

  <!-- 인터넷가입 진행과정 시작 -->
  <section class="section_style" id="part04">
    <img src="/img/main/landing_04.jpg" alt="" class="hidden-xs">
    <img src="/img/main/landing_m_04.jpg" alt="" class="visible-xs">
    <div class="sign_up">
    
      <style>
        .main02{width:100%; background:url('/img/main_bg.png') center bottom no-repeat; background-size:cover;}
        .main03{width:100%; max-width:1000px; }
        .main03 .img{width:100%; max-width:1000px; margin:0 auto; padding:0 0 44px;}
        .main03 .t1{font-size:32px; margin-bottom:10px; text-align:center;}
        .main03 .t2{font-size:21px; margin-bottom:20px; text-align:center;}
        .main03 ul{width:100%; display:flex; flex-wrap:wrap; margin:0 auto;}
        .main03 ul li{width:31.3333%; position:relative; float:left; transition: all 0.5s ease; border-radius:20px; margin:0 1%; margin-top:10px; margin-bottom:10px; background:#f7f7f7; text-align:center; padding:22px 33px;}
        .main03 ul li .k1{margin:0 auto; margin-bottom:10px; width:58px; height:53px;}
        .main03 ul li .k2{font-size:16px; margin-bottom:10px; color:#a1a1a1;}
        .main03 ul li .k3{font-size:17px;letter-spacing:-1.5rem}
        .main03 ul li.active {background: #0082d4;transition: all 0.5s ease;}
        .main03 ul li.active .k2{color:#fff;}
        .main03 ul li.active .k3{color:#fff;}
        .main03 ul li::after{position:absolute; transform:translate(-50%,-50%); top:50%; right:-28px; background: url(/img/small_arr1.png) no-repeat 0px 0px; content: ""; display: inline-block; height: 15px; width: 15px; margin: 0 3px 0 8px;}
        .main03 ul li.rev::after{position:absolute; transform:translate(-50%,-50%); top:50%; right:-28px; background: url(/img/small_arr1.png) no-repeat 0px 0px; content: ""; display: inline-block; height: 15px; width: 15px; margin: 0 3px 0 8px;}
        .main03 ul li.no::after{display:none;}
        .main03 ul li .k1#ico1{background:url('/img/220214_3.png') center center no-repeat;}
        .main03 ul li .k1#ico2{background:url('/img/220214_4.png') center center no-repeat;}
        .main03 ul li .k1#ico3{background:url('/img/220214_5.png') center center no-repeat;}
        .main03 ul li .k1#ico4{background:url('/img/220214_6.png') center center no-repeat;}
        .main03 ul li .k1#ico5{background:url('/img/220214_7.png') center center no-repeat;}
        .main03 ul li .k1#ico6{background:url('/img/220214_8.png') center center no-repeat;}
        .main03 ul li.active .k1#ico1{background:url('/img/220215_001.png') center center no-repeat;}
        .main03 ul li.active .k1#ico2{background:url('/img/220215_002.png') center center no-repeat;}
        .main03 ul li.active .k1#ico3{background:url('/img/220215_003.png') center center no-repeat;}
        .main03 ul li.active .k1#ico4{background:url('/img/220215_004.png') center center no-repeat;}
        .main03 ul li.active .k1#ico5{background:url('/img/220215_005.png') center center no-repeat;}
        .main03 ul li.active .k1#ico6{background:url('/img/220215_006.png') center center no-repeat;}
        .ne_1{width:100%; max-width:980px; padding:44px 0 88px; margin:0 auto; display:inline-block;}
        .ne_1 .ln{width:50%; float:left;}
        .ne_2{width:100%; margin:0 auto;}
        .ne_2 .pcm{display:block;}
        .ne_2 .mbm{display:none;}
        .ne_3{width:100%; margin:0 auto;}
        .ne_3 .pcm{display:block;}
        .ne_3 .mbm{display:none;}
        @media (max-width: 1000px){
          .main03{padding:22px 0;}
          .main03 .img{padding:22px 0;}
          .main03 ul li .k3{font-size:15px;}
          .main03 ul li{padding:22px 11px;}
          .ne_1{padding:22px 0;}
        }
        @media (max-width: 800px){
          .main03 .img{padding:22px 0;}
          .main03 .t1{font-size:21px;}
          .main03 .t2{font-size:18px;}
          .main03 ul li{width:48%;}
          .main03 ul li::after{display:none;}
          .main03 ul li.rev::after{display:none;}
          .ne_1 .ln{width:100%;}
          .ne_2 .pcm{display:none;}
          .ne_2 .mbm{display:block;}
          .ne_3 .pcm{display:none;}
          .ne_3 .mbm{display:block;}
        }
        @media (max-width: 500px){
          .main03 ul li{width:98%;}
        }

      </style>
      <div class="main02">
        <div class="main03">
          <ul id="tester">
            <li class="active">
              <p class="k1" id="ico1"></p>
              <p class="k2 f700">1단계</p>
              <p class="k3 f700">유선 가입 상담</p>
            </li>
            <li>
              <p class="k1" id="ico2"></p>
              <p class="k2 f700">2단계</p>
              <p class="k3 f700">견적서 발송 및 계약 내용 확인 통화</p>
            </li>
            <li class="no">
              <p class="k1" id="ico3"></p>
              <p class="k2 f700">3단계</p>
              <p class="k3 f700">본사 해피콜 이후 설치 일정 조율</p>
            </li>
            <li class="rev">
              <p class="k1" id="ico4"></p>
              <p class="k2 f700">4단계</p>
              <p class="k3 f700">기존 사용중인 상품 해지 및 결합</p>
            </li>
            <li class="rev">
              <p class="k1" id="ico5"></p>
              <p class="k2 f700">5단계</p>
              <p class="k3 f700">상품권 및 현금 지급</p>
            </li>
            <li class="no">
              <p class="k1" id="ico6"></p>
              <p class="k2 f700">6단계</p>
              <p class="k3 f700">설치 완료</p>
            </li>
          </ul>
        </div>
      </div>

      <script>
        var $sq = $('.main03 ul li'),
          $idx = $sq.length,
          i=0;
        
        setInterval(function(){
          $sq.removeClass('active');
          $sq.eq(i).addClass('active');
          i++;
          if ( i === $idx) i=0;
        }, 2500);
      </script>

    </div>
  </section>
  <!-- 인터넷가입 진행과정 끝 -->

  <!-- 일대일 맞춤상담 신청 시작 -->
  <section class="section_style" >
    <img src="/img/main/landing_05.jpg" alt="" class="hidden-xs">
    <img src="/img/main/landing_m_05.jpg" alt="" class="visible-xs">
    <div class="call_counsel">
      <form action="" class="db_form">
        <div class="upper">
          <input type="text" class="input_txt" placeholder="연락처">
          <button class="submit">가입상담신청</button>
        </div>
        <div class="lower">
          <input type="checkbox" name="" id="a1">
          <label for="a1"><span></span> 개인정보 수집 및 이용에 동의합니다.</label>
        </div>
      </form>
    </div>
  </section>
  <!-- 일대일 맞춤상담 신청 끝 -->

  <!-- 문의게시판 시작 -->
  <section class="section_style" id="part05">
    <img src="/img/main/landing_06.jpg" alt="" class="hidden-xs">
    <img src="/img/main/landing_m_06.jpg" alt="" class="visible-xs">
    <div class="ask_board">
      <table class="table">
        <tr class="table_title">
          <th class="white_txt board_title">제목</th>
          <th class="white_txt">고객명</th>
          <th class="white_txt">접수일</th>
          <th class="white_txt">상태</th>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>접수일</td>
          <td>상태</td>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>접수일</td>
          <td>상태</td>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>접수일</td>
          <td>상태</td>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>접수일</td>
          <td>상태</td>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>접수일</td>
          <td>상태</td>
        </tr>
      </table>
    </div>
  </section>
  <!-- 문의게시판 끝 -->

  <!-- 후기게시판 시작 -->
  <section class="section_style" id="part06">
    <img src="/img/main/landing_07.jpg" alt="" class="hidden-xs">
    <img src="/img/main/landing_m_07.jpg" alt="" class="visible-xs">
    <div class="review_board">
    <table class="table">
        <tr class="table_title">
          <th class="white_txt board_title">제목</th>
          <th class="white_txt">고객명</th>
          <th class="white_txt">가입일</th>
          <th class="white_txt">추천</th>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>가입일</td>
          <td>추천</td>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>가입일</td>
          <td>추천</td>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>가입일</td>
          <td>추천</td>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>가입일</td>
          <td>추천</td>
        </tr>
        <tr>
          <td>제목</td>
          <td>고객명</td>
          <td>가입일</td>
          <td>추천</td>
        </tr>
      </table>
    </div>
  </section>
  <!-- 후기게시판 끝 -->

  <!-- 확인사항 시작 -->
  <section class="section_style">
    <img src="/img/main/landing_08.jpg" alt="" class="hidden-xs">
    <img src="/img/main/landing_m_08.jpg" alt="" class="visible-xs">
  </section>
  <!-- 확인사항 끝 -->

  <!-- 푸터 시작 -->
  <section class="section_style" id="footer">
    
  </section>
  <!-- 푸터 끝 -->

  <script>
    // 슬라이드 01
    var swiper = new Swiper(".slide01", {
      // spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      loop : true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    // 슬라이드 02
    var swiper = new Swiper(".slide02", {
      // spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      loop : true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>