<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/core/db/db.global.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/core/functions.php";

?>
<!doctype html>
<!--
	Photogenic by FreeHTML5.co
	URL: https://freehtml5.co
-->
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">

    <!-- Opengraph Tags -->
    <meta property="og:title" content="美波 (Minami) Fan Zone" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://minami.fan" />
    <meta property="og:image" content="https://minami.fan/images/favicon-96x96.png" />
    <meta name="theme-color" content="#E09CE9">
    <meta property="og:description" content="美波 (Minami) Fan Zone, a website dedicated to Minami (the creator of DomeKano's OP Kawaki wo ameku), where anime fans, music lovers, and people of all sorts can get together through our passions and have a wonderful time. We have a collection of Minami's albums, including harder to find ones, as well as an archive of her covers/twitcasts, and more!" />
    <meta property="og:site_name" content="Minami Fan Zone" />
    <link type="application/json+oembed" href="https://minami.fan/assets/oembed.json" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="美波 (Minami) Fan Zone" />
    <meta name="twitter:description" content="美波 (Minami) Fan Zone, a website dedicated to Minami (the creator of DomeKano's OP Kawaki wo ameku), where anime fans, music lovers, and people of all sorts can get together through our passions and have a wonderful time. We have a collection of Minami's albums, including harder to find ones, as well as an archive of her covers/twitcasts, and more!" />
    <meta property="twitter:url" content="https://minami.fan" />
    <meta property="twitter:image" content="https://minami.fan/images/favicon-96x96.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="images/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="images/favicon-96x96.png" sizes="96x96" type="image/png">

    <title>美波 (Minami) Fan Zone</title>
</head>

<body>

    <div id="fh5co-hero-carousel" class="carousel slide header" data-ride="carousel">
        <nav class="navbar fixed-top navbar-expand-xl">
            <div class="container">
                <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
                <a class="navbar-brand mobile-logo" href="#"><img src="images/logo.png" alt="Vista Pro" /></a>

                <div id="my-nav" class="collapse navbar-collapse">

                    <div>
                        <p class="text-left follow">Follow Minami:</p>
                        <ul class="navbar-nav float-left social-links">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.youtube.com/c/%E7%BE%8E%E6%B3%A2minami373writer"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://twitter.com/373STAFF"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://instagram.com/373off"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://twitcasting.tv/373staff"><i class="fab fa-twitch"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.373official.com//"><i class="fas fa-home"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://open.spotify.com/artist/1KXJUpTiNeMv93LrJbbm7G"><i class="fab fa-spotify"></i></a>
                            </li>

                        </ul>
                    </div>

                    <ul class="navbar-nav mx-auto logo-desktop">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><img src="images/logo.png" alt="Vista Pro" /></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav float-right menu-links">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-minami">Wiki</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#groups">Our groups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">News</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="carousel-inner">
            <div class="carousel-item active">

                <img class="d-block w-100 home-bg" alt="home-bg" src="images/home-bg.png">

                <div class="carousel-caption d-md-block">
                    <h5>It is also rainy today.</h5>
                    <h4>Collapse the umbrella.</h4>
                    <h4>Going home in the rain.</h4>

                </div>


            </div>
            <div class="scroll-button">
                <a href="#groups" class="page-scroll">
                    <img src="images/arrows-down.png" alt="arrow down" />
                </a>

            </div>
        </div>
        <!-- <ul class="carousel-indicators">
            <li class="active" data-target="#fh5co-hero-carousel" data-slide-to="0" aria-current="location"></li>
        </ul> -->
    </div>


    <div class="container-fluid fh5co-about-us" id="about-minami">
        <div class="container" align="center">
            <h2>Wiki</h2>

	        <h4>Minami (美波, born September 14, 1997) is a Japanese singer and songwriter from Saitama, signed to FlyingDog under Victor Entertainment.
	        <br>
	        She won the Grand Prix in the second FlyingDog Audition in 2017.</h4>

	        <br>

	        <h2>Biography</h2>
	        <h4>Minami was born in the city of Saitama in Saitama Prefecture.
	        <br>
			Influenced by the live performances of Yutaka Ozaki in high school, she took up guitar and participated in music activities.
			<br>
			In 2017, the first mini-album "ETERNAL BLUE" and the first single "main actor" were released.
			<br>
			On Tower Records in Shibuya, Sapporo, Sendai, Nagoya, Osaka, Hiroshima, Fukuoka, limited sales were made.</h4>

			<br>

			<h2>Discography</h2>
	        <h4>
	        • Astor (アスター)<br>
			• ハル-あと3cmの冬-<br>
			• F and B (FとB)<br>
			• groping<br>
			• Monologue<br>
			• issue<br>
			• プレッシャーボーイズ<br>
			• Deep-sea fish<br>
			• 放課後オレンジヒーロー<br>
			• ETERNAL BLUE<br>
			• 留年確定<br>
			• カレーライス<br>
			• Like a cider (サイダーみたいだ)<br>
			• 傘を忘れた日<br>
			• Summer time game!!<br>
			• 星屑のうた<br>
			• 雪見だいふくの歌<br>
			• Honest Diary<br>
			• Prologue<br>
			• main actor<br>
			• Lilac<br>
			• Kawaki wo Ameku (Crying for Rain)<br>
			• アメヲマツ (Ame wo Matsu)<br>
			• ヘナ (Henna)<br>
            • Drop<br>
			• フライハイト (Freiheit)<br>
            • この街に晴れはこない (Kono machi ni hare ha konai)<br>
            • 君と僕の154小節戦争 (Kimi to boku no 154 shousetsu sensou)</h4>
        </div>
    </div>


    <div class="container-fluid fh5co-news" id="groups">
        <div class="container" align="center">
        	<h2>OFFICIAL SOURCES</h2>


        	<h4>
                <div>
                    <a href="https://www.373official.com/">Official Website of 美波 (Minami)</a>
                    <br>
                    <br>
                    <a href="https://twitter.com/373STAFF">Team 373 Twitter</a>
                    <br>
                    <br>
                    <a href="https://twitcasting.tv/373staff">Minami's TwitCasting</a>
                    <br>
                    <br>
                    <a href="https://www.youtube.com/c/%E7%BE%8E%E6%B3%A2minami373writer">Minami's official Youtube channel</a>
                    <br>
                    <br>
                    <a href="https://instagram.com/373off">Minami's Instagram</a>
                    <br>
                    <br>
                    <a href="https://minami-goods.com/">Minami's Goods Store</a>
                    <br>
                    <br>
                    <a href="https://www.cdjapan.co.jp/person/700823407">Minami's CDs Store</a>
                   </div>
        	</h4>

        	<br>
        	<br>

            <h2>OUR GROUPS</h2>

           <h4>
                <div class="spoiler">
                   <input type="checkbox" id="international">
                   <label for="international">🌐 International Groups 🌐</label>
                   <div>
                        <a href="https://discord.gg/VANfh7D">Discord</a>
                        <br>
                        <br>
                        <a href="https://www.reddit.com/r/minami">Reddit (r/minami)</a>
                        <br>
                        <br>
                        <a href="https://www.facebook.com/groups/2607461685962651">Facebook</a>
                        <br>
                        <br>
                        <a href="mailto:373@minami.fan">Mailbox (373@minami.fan)</a>
                        <br>
                        <br>
                        <a href="https://instagram.com/osakana373fans">Instagram</a>
                        <br>
                        <br>
                        <a href="https://instagram.com/osakana373">Not Minami's Instagram (@osakana373)</a>
                        <br>
                        <br>
                        <a href="https://chat.whatsapp.com/Fxzr5RK3ueRJvivnHOO4H5">WhatsApp Chat</a>
                   </div>
                </div>

                <br>

                <div class="spoiler">
                   <input type="checkbox" id="chinese">
                   <label for="chinese">Chinese Groups</label>
                   <div>
                        <a href="https://www.facebook.com/osakana373FANS">Facebook (by Teemok Kang)</a>
                        <br>
                        <br>
                        <a href="http://space.bilibili.com/40578163">BiliBili</a>
                        <br>
                        <br>
                        <a href="https://www.weibo.com/u/5539056271">Weibo</a>
                   </div>
                </div>

                <br>

                <div class="spoiler">
                   <input type="checkbox" id="german">
                   <label for="german">German Groups</label>
                   <div>
                        <a href="https://discord.gg/nhGNkya">Discord Chat</a>
                   </div>
                </div>

                <br>

                <div class="spoiler">
                   <input type="checkbox" id="indonesian">
                   <label for="indonesian">Indonesian Groups</label>
                   <div>
                        <a href="https://www.facebook.com/groups/454800305303222/">Facebook (by Meilinda Kurniati)</a>
                        <br>
                        <br>
                        <a href="https://discord.gg/M3HCx8k">Discord Chat</a>
                   </div>
                </div>

                <br>

                <div class="spoiler">
                   <input type="checkbox" id="russian">
                   <label for="russian">Russian Groups</label>
                   <div>
                        <a href="https://mon.lv/minami_ru">Discord Chat</a>
                        <br>
                        <br>
                        <a href="https://vk.com/minami_fan">VK Group</a>
                   </div>
                </div>

                <br>

                <div class="spoiler">
                   <input type="checkbox" id="armenian">
                   <label for="armenian">Armenian Groups</label>
                   <div>
                        <a href="https://vk.com/minami373arm">VK Group</a>
                   </div>
                </div>

                <br>

                <div class="spoiler">
                   <input type="checkbox" id="youtube">
                   <label for="youtube">YouTube Channels</label>
                   <div>
                        <a href="https://www.youtube.com/channel/UC9PrmA4Oo8kcUs9Z2BOZs7g">Minami Indonesia</a>
                   </div>
                </div>
        	</h4>

        <br>
        <br>

        <h2>MEDIA</h2>


           <h4>
                <div class="spoiler">
                   <input type="checkbox" id="media_streams">
                   <label for="media_streams">Streams</label>
                   <div>
                        <a href="https://soundcloud.com/pineapple-cookie-316808615/sets/twitcasting-streams">SoundCloud playlist</a>
                        <br>
                        <br>
                        <a href="https://www.youtube.com/playlist?list=PLopfCoEs4qKfNixtO4-3jzdASx5Nvs5KJ">YouTube playlist</a>
                   </div>
                </div>

                <br>

                <div class="spoiler">
                   <input type="checkbox" id="media_covers">
                   <label for="media_covers">Covers by Minami</label>
                   <div>
                        <a href="https://soundcloud.com/pineapple-cookie-316808615/sets/covers-by-minami">SoundCloud playlist</a>
                        <br>
                        <br>
                        <a href="https://www.youtube.com/playlist?list=PLopfCoEs4qKcO975Se-1bU_3-yRQKqT69">YouTube playlist</a>
                   </div>
                </div>

                <br>

                <div class="spoiler">
                   <input type="checkbox" id="media_related_sources">
                   <label for="media_related_sources">Related sources</label>
                   <div>
                        <a href="https://minami-collections.netlify.app/">美波 Minami Collections</a>
                   </div>
                </div>
        	</h4>


        </div>
    </div>


    <div class="container-fluid fh5co-news" id="news">
        <div class="container">
            <h2>OUR NEWS</h2>
            <div class="row">
                <div class="owl-carousel owl-carousel2 owl-theme">
					<?php while($news_data = $news->fetch()): ?>
                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="<?= $news_data['icon_url']; ?>" alt="<?= $news_data['title']; ?>">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5><?= $news_data['title']; ?></h5>
                                <p class="card-text"><?= make_text_clickable_links(htmlspecialchars_decode($news_data['description'])); ?></p>
								<p class="card-text"><?= gmdate("jS F Y g:ia", strtotime($news_data['created_at'])) . ' UTC'; ?></p>
                            </div>
                        </div>
                    </div>
					<?php endwhile; ?>

                    <div>
                        <div class="card text-center">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- <div class="mfz-stats" id="mfz-stats">
        <div class="container fh5co-mfz-stats" align="center">
            <h2>Minami Fan Zone - Discord Server</h2>

          <div class="server_chart">
		     <div class="tab">
		      <button class="tablinks" onclick="openTab(event, '#users')" id="defaultOpen">Users</button>
		      <button class="tablinks" onclick="openTab(event, '#online')">Activity</button>
		      <button class="tablinks" onclick="openTab(event, '#messages')">Messages</button>
		    </div>

		    <<iframe id="#users" class="tabcontent" src="https://discordserver.info/662239124845101066/widgets/chart/users" width="100%" height="100%" frameborder="0" style="overflow:hidden;height:100%;width:100%"></iframe>

		    <iframe id="#online" class="tabcontent" src="https://discordserver.info/662239124845101066/widgets/chart/online" width="100%" height="100%" frameborder="0" style="overflow:hidden;height:100%;width:100%"></iframe>

		    <iframe id="#messages" class="tabcontent" src="https://discordserver.info/662239124845101066/widgets/chart/messages" width="100%" height="100%" frameborder="0" style="overflow:hidden;height:100%;width:100%"></iframe>
		  </div>

        </div>
    </div> -->



    <div class="container-fluid copy">
        <div class="col-lg-12">
            <p>&copy; 2020 Photogenic. All rights Reserved. Design by <a href="https://freehtml5.co" target="_blank">FreeHTML5.co</a>.</p>
        </div>
    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148806695-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-148806695-1');
	</script>

	<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(55501711, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55501711" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>
    <script src="js/isotope-docs.min.js?6"></script>
    <script src="js/main.js"></script>


    <script>

  // Tabs
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  document.getElementById("defaultOpen").click();


  // Users
  Chart.defaults.global.defaultFontColor = '#7e8597';
  var ctx = document.getElementById('#users').getContext('2d');

  // Online
  var ctx = document.getElementById('#online').getContext('2d');

  // Messages
  var ctx = document.getElementById('#messages').getContext('2d');

  </script>

</body>

</html>
