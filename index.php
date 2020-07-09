<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>履歷表BIO-new</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif, "微軟正黑體";
            margin: 0px;
            padding: 0px;
        }

        .flex {
            display: inline-flex;
            height: 60px;
            width: 100%;
            background-color: #0d1217;
        }

        .flex li {
            display: inline-flex;
            font-size: 1.2em;
            float: center;
            padding: 4px;
        }

        .button {
            background-color: navy;
            /* royal blue */
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .drop-shadow {
            -webkit-filter: drop-shadow(12px 12px 7px rgba(0, 0, 0, 0.7));
            filter: drop-shadow(12px 12px 7px rgba(0, 0, 0, 0.7))
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="flex">
        <?php include "./include/header.php"; ?>
    </div>
    <div>
        <div class="w3-container">
            <div class="page-wrap">

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="index.php" class="active"><span class="icon fa-home"></span></a></li>
                        <li><a href="gallery.php"><span class="icon fa-camera-retro"></span></a></li>
                        <li><a href="generic.php"><span class="icon fa-file-text-o"></span></a></li>
                    </ul>
                </nav>

                <!-- Main -->
                <section id="main">

                    <!-- Banner -->
                    <section id="banner">
                        <div class="inner">
                            <h1>一位學術期刊14.7年資深編輯</h1>
                            <p>2005年6月參與<a href="https://journal.naer>edu.tw">《教育研究與發展期刊》 創刊與出版</a></p>
                            <p>2010年10月參與 <a href="https://epaper.naer>edu.tw">《國家教育研究院電子報》</a>創刊與出版</p>
                            <div class="drop-shadow">
                                <p style="font-size:2em;">2020年，與您一起開創新的領域！</p>
                            </div>
                            <ul class="actions">
                                <li><a href="#galleries" class="button alt scrolly big">繼續探索</a></li>
                            </ul>
                        </div>
                    </section>

                    <!-- Gallery -->
                    <section id="galleries">

                        <!-- Photo Galleries -->
                        <div class="gallery">
                            <header class="special">
                                <h2>最新分享</h2>
                            </header>
                            <div class="content">
                                <div class="media">
                                    <a href="images/fulls/01.png"><img src="images/thumbs/01.png" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="images/fulls/05.jpg"><img src="images/thumbs/05.png" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="images/fulls/09.jpg"><img src="images/thumbs/09.png" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="images/fulls/02.jpg"><img src="images/thumbs/02.png" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="images/fulls/06.jpg"><img src="images/thumbs/06.png" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="images/fulls/10.png"><img src="images/thumbs/10.png" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="images/fulls/03.jpg"><img src="images/thumbs/03.png" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="images/fulls/07.jpg"><img src="images/thumbs/07.png" alt="" title="This right here is a caption." /></a>
                                </div>
                            </div>
                            <hr>
                            <footer>
                                <a href="gallery.php" class="button big">作品集</a>
                            </footer>
                        </div>
                    </section>

                    <!-- Contact -->
                    <section id="contact">
                        <!-- Social -->
                        <div class="social column">
                            <div class="drop-shadow">
                            <h3 id="bluebee">Blubee 陳璵皙</h3>
                            </div>
                            <!-- 插入自傳 -->
                            <p>一位從小喜歡看各式各樣書籍、對自己不設框架的資深編輯人員！在國家教育研究院工作14.7年，熟悉學術期刊出版、學者專業領域、歷史沿革與各項細節。數位時代，稱職的編輯更要大量閱讀本科內外的書籍，時刻訓練自己的邏輯思考。面對未來出版數位化，編輯要有敏銳的網路與電子知識，以應付未來電子書、有聲書的發展。</p>
                            <p>2020年，很幸運有機會全心全力到泰山職訓中心增權賦能半年，學習專業網頁設計相關技術，正準備報考網頁設計乙級證照。目前正加強PHP撰寫網站能力＋MySQL建立資料庫，同時了解HTML、CSS、jquery相關語法，做出讓使用者驚喜的畫面；希望能結合傳統與科技，。</p>
                            <!-- 求職條件 -->

                            <h3>Follow Me</h3>
                            <ul class="icons">
                                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            </ul>
                        </div>

                        <!-- Form -->
                        <div class="column">
                        <div class="drop-shadow">
                            <h3>和我聯繫</h3>
                            </div>
                            <input name="name" id="name" type="text" placeholder="Name">
                               
                            <form action="#" method="post">
                                <div class="field half first">
                                    <label for="name">姓名</label>
                                    <input name="name" id="name" type="text" placeholder="Name">
                                </div>
                                <div class="field half">
                                    <label for="email">電子郵件</label>
                                    <input name="email" id="email" type="email" placeholder="Email">
                                </div>
                                <div class="field">
                                    <label for="message">留言訊息</label>
                                    <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                                </div>
                                <ul class="actions">
                                    <li><input value="Send Message" class="button" type="submit"></li>
                                </ul>
                            </form>
                        </div>

                    </section>

                    <!-- Footer -->
                    <footer id="footer">
                        <div class="copyright">
                            &copy; Bluebee Design: <a href="http://220.128.133.15/s1090209/">2020年7月</a>. Images: <a href="./images/logo3.png"></a>.
                        </div>
                    </footer>
                </section>
            </div>
        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>

</html>