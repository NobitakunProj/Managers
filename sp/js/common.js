$(function(){
    /* footer表示位置計算 */
    var window_height = $(window).height();
    var country_height = $('.country').outerHeight(true);
    var lsection_height = $('.location_section').outerHeight(true);

    var footer_position = window_height - (country_height + lsection_height);
    $('footer').css('top', footer_position + 'px');

    /* ログインボタンがクリックされたらアカウントアイコンを表示 */
    $('.item_login').on('click', function(){
        $('.item_logon').removeClass('item_login_hide');
        $('.item_login').addClass('item_login_hide');
        $('.menu_triangle').addClass('menu_triangle_change_posi');
    });

    /* アカウントアイコンがクリックされたらログインボタンを表示 */
    $('.item_logon').on('click',function(){
        $('.item_login').removeClass('item_login_hide');
        $('.item_logon').addClass('item_login_hide');
        $('.menu_triangle').removeClass('menu_triangle_change_posi');
    });

    //.メニューアイコンがクリックされたらメニューを展開、メニュー以外をクリックしたらメニューを閉じる
    $(document).on('click', function(event) {
        if(!$(event.target).closest('.menu, .item_menu_icon').length) {
            $('.menu').hide();
        }
        if($(event.target).closest('.item_menu_icon').length) {
            $('.menu').toggle();
        }
    });

    /* ハンバーガーアイコンがクリックされたら、ハンバーガーメニューを表示 */
    $('.item_humberger_menu').on('click', function(){
        $('.humberger').addClass('humberger_active');        
        $('.humberger_bkground').addClass('humberger_active');
    });

    /* ハンバーガーメニュー枠外がクリックされたら、ハンバーガーメニューを非表示 */
    $(document).on('click', function(event) {
        if(!$(event.target).closest('.humberger_section, .item_humberger_menu').length) {
            $('.humberger').removeClass('humberger_active');        
            $('.humberger_bkground').removeClass('humberger_active');
        }
    });

});