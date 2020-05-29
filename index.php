<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta name="description" content="世界中のあらゆる情報を検索するためのツールを提供しています。さまざまな検索機能を活用して、お探しの情報を見つけてください。">
<title>Google</title>
<link rel="stylesheet" href="css/common.css"/>

</head>

<body>
    <!---------------------------------------------->
    <!-- header                                   -->
    <!---------------------------------------------->
    <div class="a">TEST</div>
    <header>
        <ul>
            <li><a class="mover_text" href="#">Gmail</a></li>
            <li><a class="mover_text" href="#">画像</a></li>
            <li><a href="#"><img class="m_icon" src="img/menu_icon.png" alt="メニューアイコン"><span class="fukidasi fuki1">Google アプリ</span></a></li>
            <li class="login_off"><a class="login_btn" href="#">ログイン</a></li>
            <li class="login_on login_hide"><a class="circle_name" href="#">清水</a><span class="fukidasi  fuki2">Google アカウント：清水隆久<br>(tshimizu_allconnect@gmail.com)</span></li>
        </ul>
        <div class="menu_section">
            <div class="menu_box">
                    <div class="menu_icon_list menu_icon_account"><span>Google アカウント</span></div>
                    <div class="menu_icon_list menu_icon_search"><span>検索</span></div>
                    <div class="menu_icon_list menu_icon_map"><span>マップ</span></div>
                    <div class="menu_icon_list menu_icon_youtube"><span>YouTube</span></div>
                    <div class="menu_icon_list menu_icon_play"><span>Play</span></div>
                    <div class="menu_icon_list menu_icon_news"><span>ニュース</span></div>
                    <div class="menu_icon_list menu_icon_gmail"><span>Gmail</span></div>
                    <div class="menu_icon_list menu_icon_address"><span>連絡先</span></div>
                    <div class="menu_icon_list menu_icon_drive"><span>ドライブ</span></div>
                    <div class="menu_icon_list menu_icon_calender"><span>カレンダー</span></div>
                    <div class="menu_icon_list menu_icon_translate"><span>翻訳</span></div>
                    <div class="menu_icon_list menu_icon_photo"><span>フォト</span></div>
                    <div class="menu_icon_list menu_icon_shopping"><span>ショッピング</span></div>
                    <div class="triangle2 triangle2_change_posi"></div>
                    <div class="clear"></div>
            </div>
             <a href="#">もっと見る</a>        
        </div>
        <div class="account_section">
            <div class="triangle3"></div>
            <div class="account_box">
                <div class="account_circle_name"><span>清水</span><span>変更</span></div>
                <p><span>清水隆久</span><br>
                   tshimizu.allconnect@gmail.com<br>
                   <a href="#">プライバシー</a>
                </p>
                <div class="google_account_btn">Google アカウント</div>
            </div>
            <div class="logout_box">
                <div class="btn_style add_account_btn">アカウントを追加</div>
                <div class="btn_style logout_btn">ログアウト</div>
            </div>
        </div>

    </header>

    <!---------------------------------------------->
    <!-- contents                                 -->
    <!---------------------------------------------->
    <div class="contents">
        <p><img src="img/logo.png" class="logo"></p>

        <form>
            <div class="search_section">
                <input class="search_box" type="text" name="search">
                <div class="mic_icon_box">
                    <p><a class="mic_icon" href="#"><img src="img/icon-mic.png"></a></p>
                </div>
                <div class="fuki_mic">
                    <p>音声で検索</p>
                    <div class="triangle"></div>
                </div>
            </div>
            <ul>
                <li><input class="center_link" type="submit" value="Google 検索" name="google_search_btn"></li>
                <li><input class="center_link" type="submit" value="I'm Feeling Lucky" name="google_search_btn2"></li>
            </ul>
        </form>
    </div>

    <!---------------------------------------------->
    <!-- footer                                   -->
    <!---------------------------------------------->
    <footer>
        <p>日本</p>

        <ul class="f_left">
            <li><a class="ft_rink" href="#">広告</a></li>
            <li><a class="ft_rink" href="#">ビジネス</a></li>
            <li><a class="ft_rink" href="#">Googleについて</a></li>
        </ul>
        
        <ul class="f_right">
            <li><a class="ft_rink" href="#">プライバシー</a></li>
            <li><a class="ft_rink" href="#">規約</a></li>
            <li><a class="ft_rink" href="#">設定</a></li>
        </ul>
    </footer>

    <!---------------------------------------------->
    <!-- js read                                  -->
    <!---------------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</body>

</html>


