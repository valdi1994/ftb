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
        <h3 style="display: flex; justify-content: center">Please select the package that you like</h3>
    </div>

    <!-- Portfolio Items
    ============================================= -->
    @if(Auth::user())
        <form action="{{route('profile.package')}}" method="post">
            {{csrf_field()}}
            @endif
            <div id="portfolio" class="portfolio grid-container clearfix">
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">
                        <div style="display:flex; justify-content: space-between">
                            <h3><a href="#">Starter</a>
                                <span><a href="#">0.2200 ETH</a></span>
                            </h3>
                            <input id="plastic-checkbox" type="checkbox" name="package[]" value="starter" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="plastic-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/plastic.jpg')}}')"></figure>
                        </a>
                        <div class="portfolio-overlay">

                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Watch and follow one market</h3>
                    </div>
                </article>

                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">
                        <div style="display:flex; justify-content: space-between">
                            <h3>
                                <a href="#">Intermediate</a>
                                <span><a href="#">0.4400 ETH</a></span>
                            </h3>
                            <input id="wood-checkbox" type="checkbox" name="package[]" value="intermediate" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="wood-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/wood.jpg')}}')"></figure>
                        </a>
                        <div class="portfolio-overlay">

                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Watch and follow 2 markets</h3>
                    </div>
                </article>
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">
                        <div style="display:flex; justify-content: space-between">
                            <h3><a href="#">Advanced</a>
                                <span><a href="#">1.100 ETH</a></span>
                            </h3>
                            <input id="iron-checkbox" type="checkbox" name="package[]" value="advanced" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="iron-checkbox"></label>
                        </div>
                        <div class="portfolio-image">
                            <a href="#">
                                <figure style="background-image: url('{{asset('currency/iron.jpg')}}')"></figure>
                            </a>
                            <div class="portfolio-overlay">

                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3>Watch and follow 3 markets</h3>
                        </div>
                    </div>
                </article>
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">

                        <div style="display:flex; justify-content: space-between">
                            <h3><a href="#">Bronze</a>
                                <span><a href="#">2.200 ETH</a></span></h3>
                            <input id="bronze-checkbox" type="checkbox" name="package[]" value="bronze" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="bronze-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/bronze.jpg')}}')"></figure>
                        </a>
                        <div class="portfolio-overlay">

                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Watch and follow up to 4 markets</h3>
                    </div>
                </article>
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">

                        <div style="display:flex; justify-content: space-between">
                            <h3><a href="#">Silver</a><span>
                            <a href="#">4.400 ETH</a></span>
                            </h3>
                            <input id="silver-checkbox" type="checkbox" name="package[]" value="silver" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="silver-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/silver.jpg')}}')"></figure>
                        </a>
                        <div class="portfolio-overlay">

                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Watch and follow all markets</h3>
                    </div>
                </article>
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">

                        <div style="display:flex; justify-content: space-between">
                            <h3><a href="#">Gold</a><span>
                            <a href="#">11.000 Eth</a></span></h3>
                            <input id="gold-checkbox" type="checkbox" name="package[]" value="gold" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="gold-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/gold.jpg')}}')"></figure>
                        </a>
                        <div class="portfolio-overlay">
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Watch and follow all markets and vote which markets to add</h3>
                    </div>
                </article>
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-desc">

                        <div style="display:flex; justify-content: space-between">
                            <h3><a href="#">Platinum</a>
                                <span style="font-size:14px">
                            <a href="#">22.000 ETH</a></span></h3>
                            <input id="platinum-checkbox" type="checkbox" name="package[]" value="platinum" class="checkbox-style"><label
                                    class="checkbox-style-3-label" for="platinum-checkbox"></label>
                        </div>
                    </div>
                    <div class="portfolio-image">
                        <a href="#">
                            <figure style="background-image: url('{{asset('currency/platinum.jpg')}}')"></figure>
                            <div class="portfolio-overlay">
                            </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Watch and follow all markets, vote and get a private
                            custom trading robot to trade private market</h3>
                    </div>
                </article>
            </div><!-- #portfolio end -->
            @if(Auth::user())
            <div class="col_full nobottommargin topmargin"
                 style="display:flex; justify-content:center; align-items:center;">
                <button id="register-form-submit" name="register-form-submit" value="register"
                        class="button button-desc button-3d button-rounded center">Purchase now
                </button>
            </div>
        </form>
    @else
        <div class="topmargin">
        <h3>Don't have an Account? Register Now.</h3>

        <form id="register-form" name="register-form" class="nobottommargin" action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <div class="col_half">
                <label for="email">Email Address:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half col_last">
                <label for="username">Username:</label>
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required
                       autofocus>

                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="clear"></div>

            <div class="col_half">
                <label for="password">Choose Password:</label>
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half col_last">
                <label for="password-confirm">Re-enter Password:</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="clear"></div>

            <div class="col_full nobottommargin">
                <button class="button button-3d nomargin" id="register-form-submit"
                        name="register-form-submit" value="register">Register Now
                </button>
            </div>

        </form>
        </div>
    @endif
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
    </script>
@stop