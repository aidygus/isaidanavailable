<!DOCTYPE html>
<html>
    <head>
    <!--
        Standard Laravel template.  Nothing to see here.  Some stack overflow and libraries.

        God I hate front end development
    -->
        <title>Is Aidan Available for hire?</title>

        <link href="https://fonts.googleapis.com/css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/flipclock.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0 auto;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-size:cover;
                background-repeat: no-repeat;
                background-position: center center;
                content: @foreach($images as $image) "url('{{$image}}')" @endforeach;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: text-top;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                color: #123;
                font-weight: bolder;
                text-shadow: 0px 0px 30px #fff;
                opacity: rgba(0, 0, 0, 1);
            }

            .subtitle1 {
                font-size: 36px;
                color:#123;
                font-weight: bolder;
                text-shadow: 0px 0px 25px #eee;
            }

            .subtitle2 {
                font-size: 26px;
                color:#123;
                font-weight: bolder;
                text-shadow: 0px 0px 25px #eee;
            }

            .transparent {
              background:#7f7f7f;
              background:rgba(255,255,255,0.6);
            }

            .clock-container {
                margin:20px;
              display:inline-block;
              width:auto;
            }
            .clock-builder-output {
              text-align: center;
            }

        </style>


    </head>
    <body>
        <div class="container">
            <div class="content transparent">
                <div class="title">Aidan is currently actively seeking next role</div>
                <div class="subtitle1">Current contract is due to expire on March 25th 2016 and am now actively looking for positions with a start date of 28th March onwards</div>
                <div class="subtitle2">Here are some pictures of Northumberland while you are waiting</div>
                <div class="subtitle2">
                    <table align="center">
                        <tr>
                            <td><a href="https://twitter.com/AidanGustard"><img src="/img/twitter-icon.png" /></a></td>
                            <td><a href="https://uk.linkedin.com/in/aidangustard"><img src="/img/LinkedIn_IN_Icon_35px.jpg" /></a></td>
                            <td><a href="https://github.com/aidygus"><img src="/img/github.png" /></a></td>
                            <td><a href="https://www.dropbox.com/s/9h5av5gbx56ahmx/Aidan%20Gustard%20CV%20dev.doc?dl=0"><img src="/img/dropbox.png" width="35" height="35" /> Latest CV on Dropbox</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="clock-container">
              <div class="clock-builder-output"></div>
              <a href="http://www.dwuser.com/education/content/easy-javascript-jquery-countdown-clock-builder/">flipclock</a>
            </div>
        </div>




<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="clock_assets/flipclock.js"></script>
<style text="text/css">body .flip-clock-wrapper ul li a div div.inn, body .flip-clock-small-wrapper ul li a div div.inn { color: #CCCCCC; background-color: #333333; } body .flip-clock-dot, body .flip-clock-small-wrapper .flip-clock-dot { background: #323434; } body .flip-clock-wrapper .flip-clock-meridium a, body .flip-clock-small-wrapper .flip-clock-meridium a { color: #323434; }</style>
<script type="text/javascript">
$(function(){
	FlipClock.Lang.Custom = { days:'Days', hours:'Hours', minutes:'Minutes', seconds:'Seconds' };
	var opts = {
		clockFace: 'DailyCounter',
		countdown: true,
		language: 'Custom'
	};
	$('.clock-builder-output').FlipClock({{$seconds}}, opts);
});

        /**
        http://stackoverflow.com/a/21760491
        */
        $(function () {
            var body = $('body');
            var backgrounds = [
            @foreach($images as $image)
              "url('{{$image}}')",
            @endforeach]
            var current = 0;

            function nextBackground() {
                console.log("Changing");
                $('body').css(
                    'background-image',
                backgrounds[current = ++current % backgrounds.length]);

                setTimeout(nextBackground, 30000);
            }
            setTimeout(nextBackground, 30000);
            $('body').css('background-image', backgrounds[0]);
        });

        </script>
    </body>
</html>
