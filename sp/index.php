<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta name="description" content="世界中のあらゆる情報を検索するためのツールを提供しています。さまざまな検索機能を活用して、お探しの情報を見つけてください。">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Google</title>
<link rel="stylesheet" href="css/common.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>
    <!---------------------------------------------->
    <!-- header                                   -->
    <!---------------------------------------------->
    <header class="flexbox_header">
        <a href="#"><div class="item_humberger_menu"><i class="fas fa-bars"></i></div></a>
        <a class="active" href="#"><div class="item_all_search search_txt_style">すべて</div></a>
        <a class="deactive" href="#"><div class="item_image_search search_txt_style">画像</div></a>
        <div class="item_empty_box"></div>
        <a href="#"><div class="item_menu_icon"><i class="fas fa-th"></i></div></a>
        <div class="item_login"><a class="item_login_btn" href="#">ログイン</a></div>
        <div class="item_logon item_login_hide"><a class="circle_account" href="#">清水</a></div>
    </header>

    <!---------------------------------------------->
    <!-- humberger menu                           -->
    <!---------------------------------------------->
    <div class="humberger_bkground"></div>
    <div class="humberger">
        <div class="humberger_section">
            <a class="humberger_box" href="#"><img class="humberger_logo" src="img/logo.png"></a>
            <a class="humberger_box" href="#"><img class="humberger_list_img" src="img/home_icon.png"><span class="humberger_list_title">ホーム</span></a>
            <a class="humberger_box" href="#"><img class="humberger_list_img" src="img/save_icon.png"><span class="humberger_list_title">コレクション</span></a>
            <div class="humberger-border"></div>
            <a class="humberger_box" href="#"><img class="humberger_list_img" src="img/settings_icon.png"><span class="humberger_list_title">設定</span></a>
            <a class="humberger_box" href="#"><img class="humberger_list_img" src="img/privacy_advisor_icon.png"><span class="humberger_list_title">検索におけるデータ</span></a>
            <a class="humberger_box" href="#"><img class="humberger_list_img" src="img/help_icon.png"><span class="humberger_list_title">ヘルプ</span></a>
            <a class="humberger_box" href="#"><img class="humberger_list_img" src="img/feedback_icon.png"><span class="humberger_list_title">フィードバックを送信</span></a>
        </div>
    </div>

    <!---------------------------------------------->
    <!-- menu                                     -->
    <!---------------------------------------------->
    <div class="menu">
        <div class="menu_section">
            <div class="menu_box">
                <div class="menu_icon_list menu_icon_account"><img src="img/menu_account.png"><span class="menu_title">Google アカウント</span></div>
                <div class="menu_icon_list menu_icon_search"><img src="img/menu_search.png"><span class="menu_title">検索</span></div>
                <div class="menu_icon_list menu_icon_map"><img src="img/menu_map.png"><span class="menu_title">マップ</span></div>
                <div class="menu_icon_list menu_icon_youtube"><img src="img/menu_youtube.png"><span class="menu_title">YouTube</span></div>
                <div class="menu_icon_list menu_icon_play"><img src="img/menu_play.png"><span class="menu_title">Play</span></div>
                <div class="menu_icon_list menu_icon_news"><img src="img/menu_news.png"><span class="menu_title">ニュース</span></div>
                <div class="menu_icon_list menu_icon_gmail"><img src="img/menu_gmail.png"><span class="menu_title">Gmail</span></div>
                <div class="menu_icon_list menu_icon_address"><img src="img/menu_address.png"><span class="menu_title">連絡先</span></div>
                <div class="menu_icon_list menu_icon_drive"><img src="img/menu_drive.png"><span class="menu_title">ドライブ</span></div>
                <div class="menu_icon_list menu_icon_calender"><img src="img/menu_calender.png"><span class="menu_title">カレンダー</span></div>
                <div class="menu_icon_list menu_icon_translate"><img src="img/menu_translate.png"><span class="menu_title">翻訳</span></div>
                <div class="menu_icon_list menu_icon_photo"><img src="img/menu_photo.png"><span class="menu_title">フォト</span></div>
                <div class="menu_icon_list menu_icon_shopping"><img src="img/menu_shopping.png"><span class="menu_title">ショッピング</span></div>
            </div>
            <div class="menu_box menu_box_border">
                <div class="menu_icon_list menu_icon_doc"><img src="img/menu_doc.png"><span class="menu_title">ドキュメント</span></div>
                <div class="menu_icon_list menu_icon_books"><img src="img/menu_books.png"><span class="menu_title">ブックス</span></div>
                <div class="menu_icon_list menu_icon_blogger"><img src="img/menu_blogger.png"><span class="menu_title">Blogger</span></div>
                <div class="menu_icon_list menu_icon_duo"><img src="img/menu_duo.png"><span class="menu_title">Duo</span></div>
                <div class="menu_icon_list menu_icon_hangout"><img src="img/menu_hangout.png"><span class="menu_title">ハングアウト</span></div>
                <div class="menu_icon_list menu_icon_jamboard"><img src="img/menu_jamboard.png"><span class="menu_title">Jamboard</span></div>
                <div class="menu_icon_list menu_icon_classroom"><img src="img/menu_classroom.png"><span class="menu_title">Classroom</span></div>
                <div class="menu_icon_list menu_icon_correction"><img src="img/menu_correction.png"><span class="menu_title">コレクション</span></div>
            </div>
            <a class="menu_box_more" href="#">さらにもっと</a>        
        </div>
        <div class="menu_triangle"></div>
    </div>

    <!---------------------------------------------->
    <!-- contents                                 -->
    <!---------------------------------------------->
    <div class="contents">
        <img src="img/logo.png" width="160" height="56">

        <form>
            <div class="search_box">
                <div class="search_section">
                    <input class="search_txt_box" type="text" name="search">
                    <i class="fas fa-microphone"></i>
                </div>
                <input class="search_btn" type="submit" name="search_btn" value="">
            </div>
        </form>
    </div>
    <!---------------------------------------------->
    <!-- footer                                   -->
    <!---------------------------------------------->
    <footer>
        <p class="country">日本</p>

        <p class="location_section"><span class="circle"></span>不明<a class="location" href="#"> - 正確な現在地を使用</a></p>

        <div class="flexbox_setting">
            <div class="footer_item item_setting">設定</div>
            <div class="footer_item item_privacy">プライバシー</div>
            <div class="footer_item item_rule">規約</div>
        </div>

        <div class="flexbox_advertise">
            <div class="footer_item item_ad">広告</div>
            <div class="footer_item item_business">ビジネス</div>
            <div class="footer_item item_whatami">Googleについて</div>
        </div>        

    </footer>

    <!---------------------------------------------->
    <!-- js read                                  -->
    <!---------------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</body>

</html>


