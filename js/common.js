$(function(){
    /* ------------------------------ */
    /* header                         */ 
    /* ------------------------------ */
    var timeout_fuki1 = null;

    let context nil;

    //メニューアイコンをhoverしたら吹き出しを表示する
    $('.m_icon').hover(function(){
        timeout_fuki1 = setTimeout(function(){
            $('.fuki1').fadeIn(100);
        }, 500);
        $('.m_icon').on('click', function(){
            $('.fuki1').fadeOut(100);
        });
    }, function(){
        $('.fuki1').fadeOut(100);
        if(timeout_fuki1 !== null){
            clearTimeout(timeout_fuki1);
            timeout_fuki1 = null;
            //console.log("timeout_fuki1がキャンセルされました");
        }
    });

    //.menu_section以外をクリックされたら、メニューを非表示にする
    $(document).on('click', function(event) {
        if(!$(event.target).closest('.m_icon, .menu_section').length) {
            $('.menu_section').hide();
        }
        if($(event.target).closest('.m_icon').length) {
            $('.menu_section').toggle();
            $('.account_section').hide();
        }
    });

    //アカウントアイコンをhoverしたら吹き出しを表示する
    var timeout_fuki2 = null;

    $('.circle_name').hover(function(){
        timeout_fuki2 = setTimeout(function(){
            $('.fuki2').fadeIn(100);
        }, 500);
    }, function(){
        $('.fuki2').fadeOut(100);
        if(timeout_fuki2 !== null){
            clearTimeout(timeout_fuki2);
            timeout_fuki2 = null;
            //console.log("timeout_fuki2がキャンセルされました");
        }
    });

    //ログインアイコンがクリックされたら、Googleアカウントアイコンへ表示を切り替える
    $('.login_off').on('click', function(){
        $('.login_off').addClass('login_hide');
        $('.login_on').removeClass('login_hide');
        $('.triangle2').removeClass('triangle2_change_posi');
    });

    //.menu_section以外をクリックされたら、メニューを非表示にする
    $(document).on('click', function(event) {
        if(!$(event.target).closest('.login_on, .account_section').length) {
            $('.account_section').hide();
        }
        if($(event.target).closest('.login_on').length) {
            $('.account_section').toggle();
            $('.fuki2').fadeOut(200);
            if(timeout_fuki2 !== null){
                clearTimeout(timeout_fuki2);
                timeout_fuki2 = null;
                //console.log("timeout_fuki2がキャンセルされました");
            }    
        }
    });

    //ログアウトボタンがクリックされたら、ポップアップを非表示、アカウントアイコンをログインアイコンへ切り替える
    $('.logout_btn').on('click', function(){
        $('.account_section').hide();
        $('.login_on').addClass('login_hide');
        $('.login_off').removeClass('login_hide');        
        $('.triangle2').addClass('triangle2_change_posi');
    });

/* ------------------------------ */
    /* contents                       */ 
    /* ------------------------------ */

    //音声入力アイコンがhoverされたら、吹き出しを表示する
    var timeout_fuki_mic = null;

    $('.mic_icon').hover(function(){
        timeout_fuki_mic = setTimeout(function(){
            $('.fuki_mic').fadeIn(100);
        }, 500);
    }, function(){
        $('.fuki_mic').hide();
        if(timeout_fuki_mic !== null){
            clearTimeout(timeout_fuki_mic);
            timeout_fuki_mic = null;
            //console.log("timeout_fuki_micがキャンセルされました");
        }
    });

});