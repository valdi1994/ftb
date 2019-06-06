@extends('web.web')

@section('css')

    <link rel="stylesheet" href="{{asset('css/components/radio-checkbox.css')}}" type="text/css"/>
    <style>
        .checkbox-style-3-label {
            vertical-align: text-top;
        }

        h3 {
            display: flex;
            flex: 2;
            justify-content: space-between;
        }

        h3 > span {
            font-size: 14px;
        }

        figure {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            width: 100%;
            height: 180px;
        }

        #particles {
            width: 100%;
            min-height: 100vh;
            height: 100%;
            overflow: hidden;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
            z-index: -2;
        }

        .portfolio article:before {
            height: 100%;
            top: 0;
            left: -2px;
            border-left: 2px dashed #DDD;
        }

        .portfolio article:after {
            content: '';
            position: absolute;
        }

        .portfolio article:after {
            width: 100%;
            height: 0;
            top: auto;
            left: 0;
            bottom: -2px;
            border-bottom: 2px dashed #DDD;
        }

        .portfolio article:before {
            content: '';
            position: absolute;
        }

        span > a {
            line-height: 30px;
        }

        .portfolio-item{
            padding: 12px;
        }
        .checkbox-style-3-label:before{
            margin-right: 0;
        }
    </style>
@stop

@section('content')
    <div class="promo nopadding bottommargin">
        <h3 style="display: flex; justify-content: center">Choose Payment Type</h3>
        <p>
            We accept the following tokens. Copy this address <b>Fl3rdlfofjj4jl!49jfkfJtllE3IP</b> and go to your digital wallet/exchange and paste it in the "Send Text Area"
        </p>
    </div>

    <!-- Portfolio Items
    ============================================= -->

        <form action="{{route('save.payment')}}" method="post">
            {{csrf_field()}}
            <div id="portfolio" class="portfolio grid-container clearfix">
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">
                        <div style="display:flex; justify-content: flex-end">
                            <input id="plastic-checkbox" type="checkbox" name="payment_method" value="bitcoin" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="plastic-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/Bitcoin.jpg')}}')"></figure>
                        </a>
                        <div class="portfolio-overlay">

                        </div>
                    </div>
                </article>

                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">
                        <div style="display:flex; justify-content: flex-end">
                            <input id="wood-checkbox" type="checkbox" name="payment_method" value="ethereum" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="wood-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/Ethereum.png')}}')"></figure>
                        </a>
                        <div class="portfolio-overlay">

                        </div>
                    </div>
                </article>
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">
                        <div style="display:flex; justify-content: flex-end">
                            <input id="iron-checkbox" type="checkbox" name="payment_method" value="litecoin" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="iron-checkbox"></label>
                        </div>
                        <div class="portfolio-image">
                            <a href="#">
                                <figure style="background-image: url('{{asset('currency/Litecoin.jpg')}}')"></figure>
                            </a>
                            <div class="portfolio-overlay">

                            </div>
                        </div>
                    </div>
                </article>
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">

                        <div style="display:flex; justify-content: flex-end">
                            <input id="bronze-checkbox" type="checkbox" name="payment_method" value="waves" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="bronze-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/Waves.PNG')}}')"></figure>
                        </a>
                        <div class="portfolio-overlay">

                        </div>
                    </div>
                </article>
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">

                        <div style="display:flex; justify-content: flex-end">
                            <input id="silver-checkbox" type="checkbox" name="payment_method" value="silver" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="silver-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/Zcash.png')}}')"></figure>
                        </a>
                        <div class="portfolio-overlay">

                        </div>
                    </div>
                </article>
            </div><!-- #portfolio end -->
            <div class="col-full">
                <h3><b>Send us your address so we send you Wave which you will need to send your payment</b></h3>
                <label for="wallet">Copy your wallet address and paste it here so we can send you Wave which you will need to send in our payment for the package</label>
                <input id="wallet" type="text" class="form-control" name="wallet" value="{{ old('wallet') }}" autofocus>

                @if ($errors->has('wallet'))
                    <span class="help-block">
                        <strong>{{ $errors->first('wallet') }}</strong>
                    </span>
                @endif
            </div>
                <div class="col_full nobottommargin topmargin"
                     style="display:flex; justify-content:center; align-items:center;">
                    <button id="register-form-submit" name="register-form-submit" value="register"
                            class="button button-desc button-3d button-rounded center">Purchase now
                    </button>
                </div>
        </form>
@stop

@section('js')
    <script>
        equalheight = function (container) {

            var currentTallest = 0,
                    currentRowStart = 0,
                    rowDivs = new Array(),
                    $el,
                    topPosition = 0;
            $(container).each(function () {

                $el = $(this);
                $($el).height('auto')
                topPostion = $el.position().top;

                if (currentRowStart != topPostion) {
                    for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                        rowDivs[currentDiv].height(currentTallest);
                    }
                    rowDivs.length = 0; // empty the array
                    currentRowStart = topPostion;
                    currentTallest = $el.height();
                    rowDivs.push($el);
                } else {
                    rowDivs.push($el);
                    currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
                }
                for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }
            });
        };

        $(window).load(function () {
            equalheight('article');
        });


        $(window).resize(function () {
            equalheight('article');
        });

        $("input:checkbox").change(function(){
            var group = ":checkbox[name='payment_method']";
            if($(this).is(':checked')){
                $(group).not($(this)).attr("checked",false);
            }
        });
    </script>
@stop