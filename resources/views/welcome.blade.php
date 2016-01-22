<!DOCTYPE html>
<html>
    <head>
        <title>Is Aidan Available for hire?</title>

        <link href="https://fonts.googleapis.com/css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/flipclock.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <META HTTP-EQUIV="refresh" CONTENT="15">

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
                background-image: url('/{{ $image }}');
                background-size:cover;
                background-repeat: no-repeat;
                background-position: center center;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: text-top;
            }

            .footer {
                text-align: center;
                display: table-cell;
                vertical-align: text-bottom;
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
                <div class="title">Aidan is not currently available</div>
                <div class="subtitle1">Current contract is due to expire on March 25th 2016</div>
                <div class="subtitle2">Here are some pictures of Northumberland while you are waiting</div>
            </div>
            <div class="clock-container">
              <div class="clock-builder-output"></div>
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
</script>
    </body>
</html>
