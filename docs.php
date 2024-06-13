<?php
$title = 'Nutzerhandbuch'; 
include 'includes/header.php'; 
?>


<div class="h-full flex flex-col">
    <div class="w-full border-b-4 border-slate-200 flex flex-row justify-between">
        <h1 class="text-2xl font-bold m-8 leading-none"><?php echo $title; ?></h1>
    </div>
    <div class="h-full p-8 ">
    <div id="doc" class="markdown-body container-fluid comment-enabled comment-inner" data-hard-breaks="true"><h1 id="Projekt-Buchclub" data-id="Projekt-Buchclub"><a class="anchor hidden-xs" href="#Projekt-Buchclub" title="Projekt-Buchclub"><span class="octicon octicon-link"></span></a><span>Projekt Buchclub</span></h1><a href="https://github.com/ByJuix/buchladen/tree/main/" target="_blank" rel="noopener">
 <center>
    <img src="https://github.com/ByJuix/buchladen/blob/main/includes/img/Illuminati%20Logo%20Wappen.png?raw=true" width="400" class="offline-handled error-handled">
    </center>
</a><h1 id="Nutzerhandbuch" data-id="Nutzerhandbuch"><a class="anchor hidden-xs" href="#Nutzerhandbuch" title="Nutzerhandbuch"><span class="octicon octicon-link"></span></a><span>Nutzerhandbuch</span></h1><h2 id="Inhaltsverzeichnis" data-id="Inhaltsverzeichnis"><a class="anchor hidden-xs" href="#Inhaltsverzeichnis" title="Inhaltsverzeichnis"><span class="octicon octicon-link"></span></a><span>Inhaltsverzeichnis</span></h2><ol>
<li><span>Aufbau des Programmes</span></li>
<li><span>Funkionen</span></li>
<li><span>Step by Step zur Datenbank</span></li>
<li><span>Entfernen un Hinzufügen von Einträgen</span></li>
<li><span>Weiterführende Links</span></li>
<li><span>Credits und Hilfe</span></li>
</ol><br><br><h3 id="1-Aufbau-des-Programmes" data-id="1-Aufbau-des-Programmes"><a class="anchor hidden-xs" href="#1-Aufbau-des-Programmes" title="1-Aufbau-des-Programmes"><span class="octicon octicon-link"></span></a><p><span>1. Aufbau des Programmes</span></p></h3><a href="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_home.png" target="_blank" rel="noopener">
 <img src="https://raw.githubusercontent.com/ByJuix/buchladen/main/includes/img/doku_home.png" width="1920" class="offline-handled error-handled">
<pre><code class="code_block">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;Landing Page der Datenbank
</code></pre>
</a><p><span>Das ist die Homepage unsereres Dashboards. Wir haben hier Zugriff auf:</span></p><h4 id="Die-Buchladen-Tabelle" data-id="Die-Buchladen-Tabelle"><a class="anchor hidden-xs" href="#Die-Buchladen-Tabelle" title="Die-Buchladen-Tabelle"><span class="octicon octicon-link"></span></a><span>Die Buchladen Tabelle</span></h4><p><span>Sie bringt uns zur Übersicht unserer Tabelle</span></p><h4 id="SQL-Statement" data-id="SQL-Statement"><a class="anchor hidden-xs" href="#SQL-Statement" title="SQL-Statement"><span class="octicon octicon-link"></span></a><span>SQL Statement</span></h4><h4 id="Die-Nutzerhandbuch-Verlinkung" data-id="Die-Nutzerhandbuch-Verlinkung"><a class="anchor hidden-xs" href="#Die-Nutzerhandbuch-Verlinkung" title="Die-Nutzerhandbuch-Verlinkung"><span class="octicon octicon-link"></span></a><span>Die Nutzerhandbuch Verlinkung</span></h4><p><span>Verlinkt uns zu der Dokumentation die Sie in diesem Moment lesen</span></p><ul>
<li><span>In der oberen Leiste finden wir die selben Buttons nochmal um später damit zu navigieren.</span></li>
</ul><br><br><h3 id="2-Funktionen" data-id="2-Funktionen"><a class="anchor hidden-xs" href="#2-Funktionen" title="2-Funktionen"><span class="octicon octicon-link"></span></a><p><span>2. Funktionen</span></p></h3><h4 id="SQL-Statements" data-id="SQL-Statements"><a class="anchor hidden-xs" href="#SQL-Statements" title="SQL-Statements"><span class="octicon octicon-link"></span></a><span>SQL Statements</span></h4><a href="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_sql_01.png" target="_blank" rel="noopener">
 <img src="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_sql_01.png?raw=true" width="1920" class="offline-handled error-handled">
<pre><code class="code_block">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;SQL Dashboard
</code></pre>
</a><p><span>Hier kann man direkt mit selbstgeschriebenen SQL-Statements mit der Datenbank interagieren.</span><br>
<span>z.B mit dem Begriff "Show Tables;"</span></p><a href="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_sql_02.png" target="_blank" rel="noopener">
 <img src="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_sql_02.png?raw=true" width="1920" class="offline-handled error-handled">
<pre><code class="code_block">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;Beispiel SQL Statement
</code></pre>
</a><h4 id="Tabellenübersicht" data-id="Tabellenübersicht"><a class="anchor hidden-xs" href="#Tabellenübersicht" title="Tabellenübersicht"><span class="octicon octicon-link"></span></a><span>Tabellenübersicht</span></h4><a href="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_01.png" target="_blank" rel="noopener">
 <img src="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_01.png?raw=true" width="1920" class="offline-handled error-handled"> 
<pre><code class="code_block">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;Tabellenübersicht
</code></pre>
</a><p><span>Hier haben wir eine Übersicht aller Datenbank-Einträge.</span><br>
<span>Mit einem Klick auf einem dieser Einträge landen wir direkt bei der Tabelle hinter dem ausgewählten Eintrag.</span></p><a href="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_02.png" target="_blank" rel="noopener">
 <img src="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_02.png?raw=true" width="1920" class="offline-handled error-handled">
<pre><code class="code_block">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;Übersicht der Inhalte
</code></pre>
</a><p><span>Hier sehen wir nun eine komplette Übersicht aller Datensätze der Tabelle.</span><br>
<span>Wenn man auf die Überschrift einer Spalte klickt, lässt sich diese auf- oder absteigend </span><b><span>sortieren</span></b><span>.</span></p><br><br><h3 id="3-Entfernen-un-Hinzufügen-von-Einträgen" data-id="3-Entfernen-un-Hinzufügen-von-Einträgen"><a class="anchor hidden-xs" href="#3-Entfernen-un-Hinzufügen-von-Einträgen" title="3-Entfernen-un-Hinzufügen-von-Einträgen"><span class="octicon octicon-link"></span></a><p><span>3. Entfernen un Hinzufügen von Einträgen</span></p></h3><h4 id="Erstellen-eines-neuen-Eintrags" data-id="Erstellen-eines-neuen-Eintrags"><a class="anchor hidden-xs" href="#Erstellen-eines-neuen-Eintrags" title="Erstellen-eines-neuen-Eintrags"><span class="octicon octicon-link"></span></a><span>Erstellen eines neuen Eintrags</span></h4><a href="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_03.png" target="_blank" rel="noopener">
 <img src="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_03.png?raw=true" class="offline-handled error-handled">
<pre><code class="code_block">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;Hinzufügen von neuen Einträgen
</code></pre>
</a><p><span>Mit einem Klick auf das grüne Plus, das sich an der linken oberen Ecke der Tabelle befindet, öffnet sich eine neue Maske. Diese ermöglicht es einem den Eintrag zu erstellen. Einzutragende Werte sind:</span></p><ul>
<li><span>Autoren ID</span></li>
<li><span>Vorname</span></li>
<li><span>Nachname</span></li>
<li><span>Geburtsdatum</span></li>
</ul><h4 class="raw"><span>Bearbeiten von Einträgen</span></h4><a href="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_03.png" target="_blank" rel="noopener">
 <img src="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_03.png?raw=true" class="offline-handled error-handled">
<pre><code class="code_block">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;bearbeiten von Einträgen
</code></pre>
</a><p><span>Mit einem Klick auf den gelben Bleistift lässt sich der Eintrag editieren:</span></p><a href="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_04.png" target="_blank" rel="noopener">
 <img src="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_04.png?raw=true" class="offline-handled error-handled">
<pre><code class="code_block">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;editieren eines Eintrags
</code></pre>
</a><h4 class="raw"><span>Vernichten eines Eintrags</span></h4><a href="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_03.png" target="_blank" rel="noopener">
 <img src="https://github.com/ByJuix/buchladen/blob/main/includes/img/doku_table_03.png?raw=true" class="offline-handled error-handled">
<pre><code class="code_block">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;Eintrag vernichten
</code></pre>
</a><p><span>Um einen Eintrag zu vernichten, genügt der Klick auf das rote X.</span></p><h3 class="raw"><p><span>4. Weiterführende Links</span></p></h3><p><a href="https://www.w3schools.com/php/" target="_blank" rel="noopener"><span>https://www.w3schools.com/php/</span></a><br>
<a href="https://www.apachefriends.org/de/index.html" target="_blank" rel="noopener"><span>https://www.apachefriends.org/de/index.html</span></a><br>
<a href="https://code.visualstudio.com/" target="_blank" rel="noopener"><span>https://code.visualstudio.com/</span></a><br>
<a href="https://github.com/" target="_blank" rel="noopener"><span>https://github.com/</span></a></p><br><br><h3 class="raw"><p><span>5.Credits</span></p></h3><p><span>Dieses Projekt wurde im Rahmen der EFI23d erstellt. Genutze Programmier-/Sprachen sind:</span></p><ul>
<li><span>PHP</span>
<ul>
<li><span>PHP-PDO</span></li>
</ul>
</li>
<li><span>Tailwind CSS</span></li>
<li><span>Javascript</span>
<ul>
<li><span>JQuery</span></li>
<li><span>JQuery Tablesorter</span></li>
</ul>
</li>
<li><span>HTML</span></li>
</ul><p><span>Datenbank: MySQL</span></p><br><br><h3 class="raw"><span>Projekt erstellt von:</span></h3><ul>
<li><span>Lukas Voullieme</span></li>
<li><span>Julian Haas</span></li>
<li><span>Moritz Freytag</span></li>
<li><span>Christopher Becker</span></li>
</ul><br><br><h3 class="raw"><span>Open Source</span></h3><p><span>Der Code zu allen Dateien ist zu finden auf folgendem Link:</span></p><a href="https://github.com/ByJuix/buchladen/tree/main/" target="_blank" rel="noopener">
 <img src="https://github.githubassets.com/assets/GitHub-Logo-ee398b662d42.png" width="90" class="offline-handled error-handled">
</a></div>
    <div class="ui-toc dropup unselectable hidden-print" style="display: none; right: 310px;">
        <div class="pull-right dropdown">
            <a id="tocLabel" class="ui-toc-label btn btn-default" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Table of content">
                <i class="fa fa-bars"></i>
            </a>
            <ul id="ui-toc" class="ui-toc-dropdown dropdown-menu" aria-labelledby="tocLabel">
                <div class="toc"><ul class="nav">
<li class=""><a href="#Projekt-Buchclub" title="Projekt Buchclub">Projekt Buchclub</a></li>
<li class=""><a href="#Nutzerhandbuch" title="Nutzerhandbuch">Nutzerhandbuch</a><ul class="nav">
<li class=""><a href="#Inhaltsverzeichnis" title="Inhaltsverzeichnis">Inhaltsverzeichnis</a><ul class="nav">
<li class=""><a href="#1-Aufbau-des-Programmes" title="1. Aufbau des Programmes">1. Aufbau des Programmes</a></li>
<li class=""><a href="#2-Funktionen" title="2. Funktionen">2. Funktionen</a></li>
<li class=""><a href="#3-Entfernen-un-Hinzufügen-von-Einträgen" title="3. Entfernen un Hinzufügen von Einträgen">3. Entfernen un Hinzufügen von Einträgen</a></li>
<li><a href="#4-Weiterführende-Links" title="4. Weiterführende Links">4. Weiterführende Links</a></li>
<li><a href="#5Credits" title="5.Credits">5.Credits</a></li>
<li><a href="#Projekt-erstellt-von" title="Projekt erstellt von:">Projekt erstellt von:</a></li>
<li><a href="#Open-Source" title="Open Source">Open Source</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</div><div class="toc-menu"><a class="expand-toggle" href="#">Expand all</a><a class="back-to-top" href="#">Back to top</a><a class="go-to-bottom" href="#">Go to bottom</a></div>
            </ul>
        </div>
    </div>
    <div id="ui-toc-affix" class="ui-affix-toc ui-toc-dropdown unselectable hidden-print affix" data-spy="affix" style="top: 17px; left: 1043px;">
        <div class="toc"><ul class="nav">
<li class=""><a href="#Projekt-Buchclub" title="Projekt Buchclub">Projekt Buchclub</a></li>
<li class=""><a href="#Nutzerhandbuch" title="Nutzerhandbuch">Nutzerhandbuch</a><ul class="nav">
<li class=""><a href="#Inhaltsverzeichnis" title="Inhaltsverzeichnis">Inhaltsverzeichnis</a><ul class="nav">
<li class=""><a href="#1-Aufbau-des-Programmes" title="1. Aufbau des Programmes">1. Aufbau des Programmes</a></li>
<li class=""><a href="#2-Funktionen" title="2. Funktionen">2. Funktionen</a></li>
<li class=""><a href="#3-Entfernen-un-Hinzufügen-von-Einträgen" title="3. Entfernen un Hinzufügen von Einträgen">3. Entfernen un Hinzufügen von Einträgen</a></li>
<li><a href="#4-Weiterführende-Links" title="4. Weiterführende Links">4. Weiterführende Links</a></li>
<li><a href="#5Credits" title="5.Credits">5.Credits</a></li>
<li><a href="#Projekt-erstellt-von" title="Projekt erstellt von:">Projekt erstellt von:</a></li>
<li><a href="#Open-Source" title="Open Source">Open Source</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</div><div class="toc-menu"><a class="expand-toggle" href="#">Expand all</a><a class="back-to-top" href="#">Back to top</a><a class="go-to-bottom" href="#">Go to bottom</a></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous" defer=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gist-embed/2.6.0/gist-embed.min.js" integrity="sha256-KyF2D6xPIJUW5sUDSs93vWyZm+1RzIpKCexxElmxl8g=" crossorigin="anonymous" defer=""></script>
    <script>
        var markdown = $(".markdown-body");
        //smooth all hash trigger scrolling
        function smoothHashScroll() {
            var hashElements = $("a[href^='#']").toArray();
            for (var i = 0; i < hashElements.length; i++) {
                var element = hashElements[i];
                var $element = $(element);
                var hash = element.hash;
                if (hash) {
                    $element.on('click', function (e) {
                        // store hash
                        var hash = this.hash;
                        if ($(hash).length <= 0) return;
                        // prevent default anchor click behavior
                        e.preventDefault();
                        // animate
                        $('body, html').stop(true, true).animate({
                            scrollTop: $(hash).offset().top
                        }, 100, "linear", function () {
                            // when done, add hash to url
                            // (default click behaviour)
                            window.location.hash = hash;
                        });
                    });
                }
            }
        }

        smoothHashScroll();
        var toc = $('.ui-toc');
        var tocAffix = $('.ui-affix-toc');
        var tocDropdown = $('.ui-toc-dropdown');
        //toc
        tocDropdown.click(function (e) {
            e.stopPropagation();
        });

        var enoughForAffixToc = true;

        function generateScrollspy() {
            $(document.body).scrollspy({
                target: ''
            });
            $(document.body).scrollspy('refresh');
            if (enoughForAffixToc) {
                toc.hide();
                tocAffix.show();
            } else {
                tocAffix.hide();
                toc.show();
            }
            $(document.body).scroll();
        }

        function windowResize() {
            //toc right
            var paddingRight = parseFloat(markdown.css('padding-right'));
            var right = ($(window).width() - (markdown.offset().left + markdown.outerWidth() - paddingRight));
            toc.css('right', right + 'px');
            //affix toc left
            var newbool;
            var rightMargin = (markdown.parent().outerWidth() - markdown.outerWidth()) / 2;
            //for ipad or wider device
            if (rightMargin >= 133) {
                newbool = true;
                var affixLeftMargin = (tocAffix.outerWidth() - tocAffix.width()) / 2;
                var left = markdown.offset().left + markdown.outerWidth() - affixLeftMargin;
                tocAffix.css('left', left + 'px');
            } else {
                newbool = false;
            }
            if (newbool != enoughForAffixToc) {
                enoughForAffixToc = newbool;
                generateScrollspy();
            }
        }
        $(window).resize(function () {
            windowResize();
        });
        $(document).ready(function () {
            windowResize();
            generateScrollspy();
        });

        //remove hash
        function removeHash() {
            window.location.hash = '';
        }

        var backtotop = $('.back-to-top');
        var gotobottom = $('.go-to-bottom');

        backtotop.click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (scrollToTop)
                scrollToTop();
            removeHash();
        });
        gotobottom.click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (scrollToBottom)
                scrollToBottom();
            removeHash();
        });

        var toggle = $('.expand-toggle');
        var tocExpand = false;

        checkExpandToggle();
        toggle.click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            tocExpand = !tocExpand;
            checkExpandToggle();
        })

        function checkExpandToggle () {
            var toc = $('.ui-toc-dropdown .toc');
            var toggle = $('.expand-toggle');
            if (!tocExpand) {
                toc.removeClass('expand');
                toggle.text('Expand all');
            } else {
                toc.addClass('expand');
                toggle.text('Collapse all');
            }
        }

        function scrollToTop() {
            $('body, html').stop(true, true).animate({
                scrollTop: 0
            }, 100, "linear");
        }

        function scrollToBottom() {
            $('body, html').stop(true, true).animate({
                scrollTop: $(document.body)[0].scrollHeight
            }, 100, "linear");
        }
    </script>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
