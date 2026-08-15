$(function() {
  console.log('layout.js');
  // タブレットレイアウトをPCと統一
  var metaDiscre = document.head.children;
  var metaLength = metaDiscre.length;
  if(window.outerWidth > 700 && window.outerWidth < 1200){
    for(var i = 0;i < metaLength;i++){
       var proper = metaDiscre[i].getAttribute('name');
        if(proper === 'viewport'){
          var dis = metaDiscre[i];
          dis.setAttribute('content','width=1200');
        }
    }
  }

  $(window).on('load', function() {
	   const url = $(location).attr('href'),
	   headerHeight = 100;

     if(url.indexOf("#") != -1){
       const anchor = url.split("#"),
       target = $('#' + anchor[anchor.length - 1]),
		   position = Math.floor(target.offset().top) - headerHeight;
		   $("html, body").animate({scrollTop:position}, 500);
	   }
  });


  //トップに戻るボタン + スクロール + ウィンドウサイズ系の対策処理
  function scrollAnimationSet(target) {
    const scButtonWrap = $('#scrollTopWrap');
    const indexProducts = document.getElementById("indexProducts");
    const position = document.documentElement;
    let wHeight = window.innerHeight;
    let preSetWidth = window.innerWidth;
    let scrollCount = 0;

    function setHeightProperty() {
      wHeight = window.innerHeight;
      position.style.setProperty('--wHeight', window.innerHeight);
      position.style.setProperty('--wHeightPx', window.innerHeight + 'px');
      position.style.setProperty('--scroll', window.scrollY);
      requestAnimationFrame(setHeightProperty);

      $(".effect").each(function() {
        var imgPos = $(this).offset().top;
        var windowHeight = $(window).height();
        var scroll = $(window).scrollTop();
        if (scroll > imgPos - windowHeight + windowHeight / 7) {
          $(this).removeClass('effect');
        };
      });

    }

    function setProperties() {
      setHeightProperty();
    }

    function init() {
      if (document.getElementById('mainMovie')) {
        setTimeout(function() {
          $('#mainMovie').addClass('loaded');
        }, 1000);
      }

      /*const scrollButton = document.querySelector('#returnTop');
      scrollButton.addEventListener( 'click' , scrollTop );*/
      function scrollTop(){
        window.scroll({top: 0, behavior: 'smooth'});
      };
      var timer = false;
      setProperties();
      position.style.setProperty('--wHeightFixedPx', window.innerHeight + 'px');
      setProperties();
    }

    init();

  }

  scrollAnimationSet($('article'));


  // ハンバーガーメニューの開閉
  function humMenuControll(target){
    var header = $('header')
    var humButton = $('#humButton button');
    var closeButton = $('#humClose');
    var humState = 0;

    function hummenuMove(){
      if(humState == 0){
        target.addClass('open');
        header.addClass('hum_open');
        humState = 1;
      }else{
        target.removeClass('open');
        header.removeClass('hum_open');
        humState = 0;
      }
    }

    function init(){
      humButton.on({
        'click': function() {
          hummenuMove();
        }
      });
      closeButton.on({
        'click': function() {
          hummenuMove();
        }
      });
    }

    init();
  }

  humMenuControll($('#hummenu'));

  function mainKvShifter() {
    var slider = $('#indexMainKv');
    var sliderLength = $('#indexMainKv').find('.slide_item').length;
    var objSelect;
    var timeId;
    var duration = 3000;
    var interval = 3000;
    var current = 0;
    var objBox = [];
    var btnList = [];

    function changeState() {
      if (current < sliderLength - 1) {
        current++;
      } else {
        current = 0;
      }
      slideChange(current)
    }

    function startAuto() {
      timeId = setTimeout(changeState, interval);
    }

    function stopAuto() {
      clearTimeout(timeId)
    }

    function complete() {
      startAuto();
    }

    function slideChange(e) {
      $('.display_slide').removeClass('display_slide');
      $('.slide' + e).addClass('display_slide');
      complete();
      current = e;
    };

    function init() {
      slider.find('li').each(function(index) {
        if (index == 0) {
          $(this).addClass('display_slide');
        }
        $(this).addClass('slide' + index);
      });
      startAuto();
    };

    init();
  }

  if (document.getElementById('index')) {
    mainKvShifter();
  }


  function articleIndexControll(target){

    var indexNum = 0;
    var ankerButton = [];
    var ankerTitle = [];
    var caseIndexSp = $('#caseIndexSp');
    var caseIndexPc = $('#caseIndexPc');

    var buttonAnker = [];
    var scrollTarget = [];


    function windowMove(e) {
      var headerHeight = $('header').outerHeight();
      var scrollHeight = $(scrollTarget[e]).offset().top;
      var adScroll = scrollHeight - headerHeight - 20;
      $("html, body").animate({
        scrollTop: adScroll
      }, 500);
    }

    function setAnkerButton(wrapper){
      wrapper.find('button').each(function(index) {
        console.log('index:' + index);
        buttonAnker[index] = $(this);
        scrollTarget[index] = $(this).attr('jump');
        buttonAnker[index].on({
          'click': function() {
            windowMove(index);
          }
        });
      });
    }

    function init(){

      target.find('.article_ttl').each(function(index) {
        $(this).attr('id', 'title' + index);
        ankerTitle[index] = $(this).html();
        ankerButton[index] = '<div class="index_item"><button jump="#title' + index + '"><span class="txt">'+ ankerTitle[index] +'</span><span class="caret"></span></button></div>';
        caseIndexPc.append(ankerButton[index]);
        caseIndexSp.append(ankerButton[index]);
      });

      setAnkerButton(caseIndexSp);
      setAnkerButton(caseIndexPc);

    }

    init();

  }

  if (document.getElementById('caseArticle')) {
    articleIndexControll($('#caseArticle'));
  }

  // 記事コンテンツのHTML整形
  function arrangeArticleHTML(target){

    console.log('arrangeArticleHTML');

    function addTextLink(){
      $('.content_desc').each(function (idx, elem) {
        console.log('content_desc');
        let str = $(elem).html();
        let regexp_url = /((h?)(ttps?:\/\/[a-zA-Z0-9.\-_@:/~?%&;=+#',()*!]+))/g;
        let regexp_makeLink = function(all, url, h, href) {
          return '<a href="h' + href + '" target="_blank">' + url + '</a>';
        }
        let textWithLink = str.replace(regexp_url, regexp_makeLink);
        $(elem).html(textWithLink);
      });
    }

    function init(){
      target.find('a').each(function(index) {
        var hrefLink = $(this).attr('href');
        var replaceTxt = hrefLink.replace("https:", '');
        $(this).attr('href', replaceTxt);
      });
      addTextLink();
    }

    init();

  }

  if (document.getElementById('articleContent')) {
    arrangeArticleHTML($('#articleContent'));
  }

  // 動画再生処理
  function playMovieButton(target) {
    var playButton = $('#playButton');
    var moviePop = $('#moviePop');
    var closeButton = $('#closeButton');
    var movieButton = [];
    var movieThumb = [];
    var movieLength = [];
    var movieContent = [];
    var targetMovie = [];

    function moviePlay() {
      moviePop.addClass('open');
      document.getElementById('conceptMovie').play();
    };

    function movieStop() {
      moviePop.removeClass('open');
      document.getElementById('conceptMovie').pause();
    };

    function init() {

      console.log('playMovieButton');

      playButton.on({
        'click': function() {
          moviePlay();
        }
      });
      closeButton.on({
        'click': function() {
          movieStop();
        }
      });
    }

    init();
  }

  if (document.getElementById('about')) {
    playMovieButton($('article'));
  }

  /* お問い合わせフォームのGAS連動とバリデーション */
  function setMyForm(target){
    console.log('setMyForm');
    var ERROR_MESSAGE_CLASSNAME = 'errorMsg'; //エラー時のメッセージ要素のclass名
    var ERROR_INPUT_CLASSNAME = 'errorInput'; //エラー時のinput要素のclass名
    var errorCount = 0;
    var submitWrap = $('#submit');
    var submitButton = $('#submitButton input');
    var items = []; //チェック対象となるテキスト入力要素を格納した配列

    //項目チェックする
    var checkAll = function(){
      errorCount = 0;

      //input,textareaのチェック
      for( var i=0; i<items.length; i++ ){
        if( items[i].prop('isSuccess') == false ){
          errorCount++;
          console.log('error:' + i);
        };
      };

      if( errorCount == 0 ){
      }else{
      };
    };

    function hankaku2Zenkaku(target) {
      var str = target.val();
      str = str.replace( /[Ａ-Ｚａ-ｚ０-９－！”＃＄％＆’（）＝＜＞，．？＿［］｛｝＠＾～￥]/g, function(s) {
        return String.fromCharCode(s.charCodeAt(0) - 65248);
      }).replace(/[ー]/g, '').replace(/[−]/g, '');

      target.val(str.trim().replace(/\s+/g, ''));
    }

    //エラーメッセージの追加
    var addErrorMessage = function(selector, msg){
      removeErrorMessage(selector);
      selector.parent('div').append('<span class="attention '+ERROR_MESSAGE_CLASSNAME+'">'+msg+'</span>');
      selector.addClass(ERROR_INPUT_CLASSNAME);
      selector.parent('label').parent('div').parent('div').append('<span class="attention '+ERROR_MESSAGE_CLASSNAME+'">'+msg+'</span>');
      selector.addClass(ERROR_INPUT_CLASSNAME);
    };

    //エラーメッセージの削除
    var removeErrorMessage = function(selector){
      var msgSelector = selector.parent().parent('div').find('.'+ERROR_MESSAGE_CLASSNAME);
      var msgSelector2 = selector.parent().parent('.radio_box').parent('div').find('.'+ERROR_MESSAGE_CLASSNAME);
      if( msgSelector.length != 0 ){
        msgSelector.remove();
        selector.removeClass(ERROR_INPUT_CLASSNAME);
      };
      if( msgSelector2.length != 0 ){
        msgSelector2.remove();
        selector.removeClass(ERROR_INPUT_CLASSNAME);
      };
    };

    //input,textareaの未入力チェック
    var checkEmptyText = function(selector, msg){
      if( selector.val() == '' ||  selector.val() == null){
        addErrorMessage(selector, msg);
        selector.prop('isSuccess', false);
      }else{
        removeErrorMessage(selector);
        selector.prop('isSuccess', true);
      };
    };

    var emptyThrough = function(selector){
      if( selector.val() == '' ||  selector.val() == null){
        removeErrorMessage(selector);
        selector.prop('isSuccess', true);
      }
    };

    //radioの未入力チェック
    var checkRadioBox = function(selector, msg){
      if( selector.prop("checked")){
        removeErrorMessage(selector);
        selector.prop('isSuccess', true);
      }else{
        addErrorMessage(selector, msg);
        selector.prop('isSuccess', false);
      };
    };

    //文字列のフォーマットチェック
    function checkFormatText(selector, _mode, msg){
      var value = selector.val();
      switch(_mode){
        //全角のみ
        case 0:
          if(value.match(/^[^ -~｡-ﾟ]*$/)){
            selector.prop('isSuccess', true);
            removeErrorMessage(selector);
          }else{
            selector.prop('isSuccess', false);
          };
          break;
        //ふりがなのみ
        case 1:
          if(value.match(/^[\u3040-\u309F]+$/)){
            selector.prop('isSuccess', true);
          }else{
            selector.prop('isSuccess', false);
          };
          break;
        //半角数字のみ
        case 2:
          if(value.match(/^[0-9\-]+$/) || value.length < 1 ){
            selector.prop('isSuccess', true);
          }else{
            selector.prop('isSuccess', false);
          };
          break;
        //メールアドレスかどうか
        case 3:
          if(value.match(/^[a-zA-Z0-9!$&*.=^`|~#%'+\/?_{}-]+@([a-zA-Z0-9_-]+\.)+[a-zA-Z]{2,6}$/)){
            selector.prop('isSuccess', true);
          }else{
            selector.prop('isSuccess', false);
          };
          break;
        //カタカナのみ
        case 4:
          if(value.match(/^[\u30A0-\u30FF]+$/) || value.match(/^[\uFF61-\uFF9F]+$/)){
            selector.prop('isSuccess', true);
          }else{
            selector.prop('isSuccess', false);
          };
          break;
        //全てエラーにする
        case 5:
          selector.prop('isSuccess', false);
          break;
      };
      if( selector.prop('isSuccess') == false ){
        addErrorMessage(selector, msg);
      }else{
        removeErrorMessage(selector);
      };
    };

    //初期設定
    var init = function(){
      //submitイベントの設定
      target.on({
        'submit': function(){
          checkAll();
        }
      });
      //input要素を配列に格納
      items = [
        target.find('input[name="yourname"]'), //0 お名前
        target.find('input[name="useremail"]'), //1 メールアドレス
        target.find('input[name="useremail2"]'), //2 メールアドレス確認用
        target.find('input[name="corpname"]'), //3 会社名
        target.find('input[name="category"]'), //4 業種
        target.find('input[name="corpname2"]'), //5 部署名
        target.find('input[name="corpname3"]'), //6 役職
        target.find('input[name="userphone"]'), //7 電話番号
        target.find('input[name="timing"]'), //8 検討タイミング
        target.find('input[name="homeNum"]'), //9 住宅
        target.find('input[name="otherNum"]'), //10 非住宅
        target.find('input[name="background"]'), //11 お問い合わせの背景
        target.find('input[name="route"]'), //12 zenshotのことをどこで知りましたか？
        target.find('textarea[name="content"]'), //13 ご相談内容
        target.find('input[name=agreement]'), //14 プラポリへの合意
      ];
      //input要素のプロパティを設定
      $.each(items, function(index){
        items[index].prop('isSuccess', false);
      });

      //enterキーでsubmitしてしまうのを防止する
      target.find('input[type=text]').on({
        'keypress': function(e){
          if( (e.keyCode == 13) ) return false;
        }
      });

      //0 お名前
      items[0].on({
        'blur': function(){
          checkEmptyText( items[0], '※お名前を入力してください。' );
        }
      });

      //1 メールアドレス
      items[1].on({
        'blur': function(){
          checkEmptyText( items[1], '※メールアドレスをご入力ください。' );
          if( items[1].prop('isSuccess') ) checkFormatText( items[1], 3, 'アドレスの形式をご確認ください' );
        }
      });

      //2 メールアドレス(確認用)
      items[2].on({
        'blur': function(){
          checkEmptyText( items[2], '※確認用メールアドレスは必須です。');
          if( items[2].prop('isSuccess') ){
            checkFormatText( items[2], 3, '※確認用メールアドレスの形式をご確認ください' );
            if(items[1].val() != items[2].val()){
              checkFormatText( items[2], 5, '※メールアドレスが一致しません。' );
            }
          }
        }
      });

      //3 会社名
      items[3].on({
        'blur': function(){
          checkEmptyText( items[3], '※会社名を入力してください。' );
        }
      });

      //4 業種
      items[4].prop('isSuccess', true);
      items[4].on({
        'click': function(){
          items[4].prop('isSuccess', true);
          removeErrorMessage(items[4]);
        }
      });

      //5 部署名
      items[5].on({
        'blur': function(){
          checkEmptyText( items[5], '※部署名を入力してください。' );
        }
      });

      //6 役職
      items[6].on({
        'blur': function(){
          checkEmptyText( items[6], '※役職を入力してください。' );
        }
      });

      //7 電話番号
      items[7].on({
        'blur': function(){
          hankaku2Zenkaku($(this));
          checkEmptyText( items[7], '※電話番号を入力してください。' );
          if( items[7].prop('isSuccess') ) checkFormatText( items[7], 2, '※電話番号は数字で入力してください。');
        }
      });

      //8 検討タイミング
      items[8].prop('isSuccess', true);
      items[8].on({
        'click': function(){
          items[8].prop('isSuccess', true);
          removeErrorMessage(items[8]);
        }
      });

      //9 住宅の棟数
      items[9].on({
        'blur': function(){
          checkEmptyText( items[9], '※住宅の棟数を入力してください。' );
        }
      });

      //10 非住宅の棟数
      items[10].on({
        'blur': function(){
          checkEmptyText( items[10], '※非住宅の棟数を入力してください。' );
        }
      });

      //11 お問い合わせの背景
      items[11].prop('isSuccess', true);
      items[11].on({
        'click': function(){
          items[11].prop('isSuccess', true);
          removeErrorMessage(items[11]);
        }
      });

      //12 zenshotのことをどこで知りましたか？
      items[12].prop('isSuccess', true);
      items[12].on({
        'click': function(){
          items[12].prop('isSuccess', true);
          removeErrorMessage(items[12]);
        }
      });

      //13 ご相談内容
      items[13].prop('isSuccess', true);


      //14 プラポリへの合意
      items[14].on({
        'change': function(){
          console.log('check!');
          var agreeState = $('input[name=agreement]:checked').val();
          if(agreeState == 1){
            items[14].prop('isSuccess', true);
            $('#submitButton').removeClass('disabled');
          }else{
            items[14].prop('isSuccess', false);
            $('#submitButton').addClass('disabled');
          }
        }
      });

      submitButton.on({
        'click': function(){
          checkEmptyText( items[0], '※お名前を入力してください。' );
          checkEmptyText( items[1], '※メールアドレスをご入力ください。' );
          if( items[1].prop('isSuccess') ) checkFormatText( items[1], 3, 'アドレスの形式をご確認ください' );
          checkEmptyText( items[2], '※確認用メールアドレスは必須です。');
          if( items[2].prop('isSuccess') ){
            checkFormatText( items[2], 3, '※確認用メールアドレスの形式をご確認ください' );
            if(items[1].val() != items[2].val()){
              checkFormatText( items[2], 5, '※メールアドレスが一致しません。' );
            }
          }
          checkEmptyText( items[3], '※会社名を入力してください。' );
          if($('input[name="timing"]:checked').val()){
            console.log('true:4');
            items[4].prop('isSuccess', true);
            removeErrorMessage(items[4]);
          }else{
            console.log('false:4');
            items[4].prop('isSuccess', false);
            addErrorMessage(items[4], '※業種を選択してください。');
          }
          checkEmptyText( items[5], '※部署名を入力してください。' );
          checkEmptyText( items[6], '※役職を入力してください。' );
          checkEmptyText( items[7], '※電話番号を入力してください。' );
          if( items[7].prop('isSuccess') ) checkFormatText( items[7], 2, '※電話番号は数字で入力してください。');
          if($('input[name="timing"]:checked').val()){
            console.log('true!');
            items[8].prop('isSuccess', true);
            removeErrorMessage(items[8]);
          }else{
            console.log('false');
            items[8].prop('isSuccess', false);
            addErrorMessage(items[8], '※検討タイミングを選択してください。');
          }
          checkEmptyText( items[9], '※住宅の棟数を入力してください。' );
          checkEmptyText( items[10], '※非住宅の棟数を入力してください。' );
          if($('input[name="background"]:checked').val()){
            console.log('true:11');
            items[11].prop('isSuccess', true);
            removeErrorMessage(items[11]);
          }else{
            console.log('false:11');
            items[11].prop('isSuccess', false);
            addErrorMessage(items[11], '※お問い合わせの背景を選択してください。');
          }
          if($('input[name="route"]:checked').val()){
            items[12].prop('isSuccess', true);
            removeErrorMessage(items[12]);
          }else{
            console.log('false:12');
            items[12].prop('isSuccess', false);
            addErrorMessage(items[12], '※知った経緯を選択してください。');
          }
          checkAll();
          if( errorCount == 0 ){
            processOrderContent();
          }else{
            alert('入力内容に不備があります。入力内容を確認いただき、再度送信ボタンを押してください。');
            var scrollHeight = $('#contact').offset().top;
            $("html, body").animate({
              scrollTop: scrollHeight
            }, 300);
          };
        }
      })
    };

    function processOrderContent(){
      $('#submitButton').addClass('disabled');
      $('#ajaxLoader').addClass('loading_state');
      var usermail = target.find('input[name="useremail"]').val();
      var yourname = target.find('input[name="yourname"]').val();
      var corpname = target.find('input[name="corpname"]').val();
      var categoryProp = [];
      $('input:checkbox[name=category]:checked').each(function() {
        categoryProp.push($(this).val());
        console.log(categoryProp.join());
      });
      var corpname2 = target.find('input[name="corpname2"]').val();
      var corpname3 = target.find('input[name="corpname3"]').val();
      var userphone = target.find('input[name="userphone"]').val();
      var timing = target.find('input[name="timing"]:checked').val();
      var homeNum = target.find('input[name="homeNum"]').val();
      var otherNum = target.find('input[name="otherNum"]').val();
      var bgProp = [];
      $('input:checkbox[name=background]:checked').each(function() {
        bgProp.push($(this).val());
        console.log(bgProp.join());
      });
      var route = target.find('input[name="route"]:checked').val();
      var content = target.find('textarea[name="content"]').val();
      console.log('usermail:' + usermail);
      console.log('yourname:' + yourname);
      console.log('corpname:' + corpname);
      console.log('category:' + categoryProp.join());
      console.log('corpname2:' + corpname2);
      console.log('corpname3:' + corpname3);
      console.log('userphone:' + userphone);
      console.log('timing:' + timing);
      console.log('homeNum:' + homeNum);
      console.log('otherNum:' + otherNum);
      console.log('bgProp:' + bgProp.join());
      console.log('route:' + route);
      console.log('content:' + content);
      $.ajax({
        url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSefhv3koqB5HfLEpeKxY-DHI5AxtMHrnlt8HS2CHONXM2L3PA/formResponse",
        data: {
          "entry.2091452797": usermail, // メールアドレス
          "entry.595095070": yourname, // お名前
          "entry.172362249": corpname, //会社名
          "entry.1832607930": categoryProp.join(), //業種
          "entry.588712185": corpname2, //部署名
          "entry.1909669773": corpname3, //役職名
          "entry.346629700": userphone, //電話番号
          "entry.480191659": timing, //検討タイミング
          "entry.1932366580": homeNum, //住宅
          "entry.1333973061": otherNum, //非住宅
          "entry.1928361028": bgProp.join(), //背景
          "entry.597337210": route, //知った経緯
          "entry.1122464732": content, //その他ご質問
        },
        type: "POST",
        dataType: "xml",
        statusCode: {
          0: function () {
            setTimeout(function() {
              $('#ajaxLoader').removeClass('loading_state');
              $('#statusMessage').addClass('complete').html('<span class="text">メッセージは送信されました。<br>自動返信メールをご確認ください。</span>');
            }, 1000);
          },
          200: function () {
            $('#ajaxLoader').removeClass('loading_state');
            alart('送信に失敗しました。お手数ではございますが、時間を置いてもう一度お試しください。');
            setTimeout(function() {
              location.href = 'https://' + location.hostname + '/'
            }, 3000);
          }
        }
      });
  }

    init();

  };

  if (document.getElementById('contactWrap')) {
    setMyForm($('#contactWrap'));
  }


  var prevButtonHTML = '<button class="comp-slider-caret prev-arrow"><span class="circle"><svg viewBox="0 0 22.6 19.69"><path class="cls-1" d="M9.33.35L.96,8.72c-.62.62-.62,1.63,0,2.25l8.37,8.37M.73,9.85h21.88"/></svg></span></button>';
  var nextButtonHTML = '<button class="comp-slider-caret next-arrow"><span class="circle"><svg viewBox="0 0 22.6 19.69"><path class="cls-1" d="M13.27.35l8.37,8.37c.62.62.62,1.63,0,2.25l-8.37,8.37M21.88,9.85H0"/></svg></span></button>';

  // バナースライダー
  if (document.getElementById('officeSlider')) {
    $('#officeSlider').slick({
    accessibility: false,
    infinite: true,
    dots: false,
    slidesToShow: 1,
    centerMode: false,
    autoplay: true,
    speed: 600,
    prevArrow: prevButtonHTML,
    nextArrow: nextButtonHTML,
    responsive: [
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 1,
          centerPadding: '0',
          centerMode: false,
          autoplay: true,
        }
      }
    ]
    });
  }




});
