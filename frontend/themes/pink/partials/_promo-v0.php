<style>
    #timer2 {
        font: bold 46px "Roboto Slab", Arial, Helvetica, sans-serif;
        color: #fff;
    }

    #timer2 .countdown-section {
        position: relative;
    }

    #timer2 .countdown-amount {
        position: relative;
    }

    #timer2 .countdown-amount:after {
        content: ":";
        font: bold 40px "Trebuchet MS", Helvetica, sans-serif;
        color: #000;
        position: absolute;
        left: 82px;
        top: 17px;
    }

    #timer2 .countdown-section:last-child .countdown-amount:after {
        display: none;
    }

    #timer2 .countdown-amount {
        display: inline-block;
        *display: inline;
        *zoom: 1;
        width: 89px;
        height: 93px;
        background: url('/assets/pink/img/bg-timer.png') no-repeat transparent;
        text-align: center;
        line-height: 83px;
        margin: 0 -10px 0 0;
    }

    .promo-timer p{
        text-align: center;
        font: 700 italic 14px "Trebuchet MS", Helvetica, sans-serif;
        margin: 0;
    }

    .promo-popup{
        width: 949px;
        height: 141px;
    }

</style>
<div class="promo-popup" id="promo-popup" style="display: none;">
    <img src="/assets/pink/img/promo-v0.png">
    <div class="promo-timer" style="width: 300px; height: 110px; position: absolute; right: 0; top: 12px;">
        <p>До конца акции осталось</p>
        <div id="timer2" class="is-countdown"></div>
    </div>
</div>