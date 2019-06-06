@extends('web.web')

@section('slider')
    <section class="slider-parallax dark full-screen">

        <div class="slider-parallax-inner" id="particles-js"
             style="background-image: url({{asset('images/slider-bg.png')}}); background-position: center center; background-size: cover; background-repeat: no-repeat">

            <div class="container clearfix">

                <div class="vertical-middle">

                    <div class="heading-block nobottomborder">
                        <div class="center">
                            <h1 data-animate="fadeInUp" style="text-transform: none">FinTechBit Coin (FTB) Pre-ICO token
                                sale starts in:</h1>
                            <div id="countdown-ex1" class="countdown countdown-large coming-soon divcenter"
                                 style="max-width:700px;"></div>
                            <span data-animate="fadeInUp" data-delay="300"><h3
                                        style="text-align: center; font-size:17px; text-transform: none">Price: 1FTB = $0.01 (one cent)</h3></span>
                        </div>
                        <div class="container clearfix">
                            <h3 style="font-size:17px; text-transform: none">Fintechbit coin is one of
                                the
                                few coins that is underpinned by an
                                existing
                                economic activity - trading: Fintechbit coin will enable you to transcend geopolitical
                                frontiers and become a member of an exclusive profitable trading club. <br> <br>
                                Meet PredicTrader&trade;: A Predictive Algorithmic Trading Robot.
                                The algorithmic automation tool is fully developed, tested and ready to go.
                                Join the Fintechbit token sale which grants membership to an exclusive and highly
                                regarded trading club. </h3>
                        </div>

                        <div class="container clearfix"
                             style="display: flex; justify-content: center; margin-top: 10px;">

                            <iframe src="//www.youtube.com/embed/PK6Gsogzchc?autoplay=1&loop=1&iv_load_policy=3&list=UUrPNovKrPx1IzwDgAXr6oZg"
                                    width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen
                                    allowfullscreen></iframe>
                        </div>

                        <div class="slide-buttons text-center" style="margin-top: 15px;">
                            <a href="{{route('auth')}}" class="btn btn-default" >Register
                            </a>

                        </div>
                    </div>

                </div>

                <a href="#" data-scrollto="#whatWe" class="one-page-arrow" style="position:absolute; bottom:85px;"><i
                            class="icon-angle-down infinite animated fadeInDown"></i></a>

            </div>

        </div>

    </section>
@stop

@section('content')
    <div id="whatWe" class="heading-block title-center page-section">
        <h2>The Problem</h2>
    </div>

    <div class="col_full">
        <div class="feature-box fbox-plain">
            For a long time healthcare, housing and education costs have been rising faster than
            inflation. Salaries and wages are no longer enough. Because of this
            everyone should have a side income. The easiest side income is from
            trading. Also, it is a fact of life that the bulk of wealth in the world
            is concentrated at the top. The rich are getting richer. According
            to a research study, more than 90% of the world's adult population
            own less than 5% of the entire global wealth. In US alone, it has
            been observed that about 10% of the population own around 90% of the
            wealth. Most of this wealth has been accumulated from investing and trading on  Wall Street.
            However the average person has been left
            out of this wealth building opportunity on Wall Street because trading is not easy. <br><br>
            The trading mavericks of Wall Street have a huge advantage over ordinary
            people. Almost all professional traders, hedge funds, money managers,
            proprietary trading firms, banks and institutional traders have the
            following which the ordinary person don't have or cannot afford. <br><br>

            1. Faster Computers (High-frequency trading)<br>
            2. Complex Algorithms<br>
            3. Better Social circles<br>
            4. Proximity to exchanges<br>
            5. They set the rules of engagement (trading)<br>
            6. Better capitalization<br>
            7. Better forex trading platforms.
            <br>
        </div>
    </div>

    <div id="solution" class="heading-block title-center page-section">
        <h2>The Solution</h2>
    </div>

    <div class="col_full">
        <div class="feature-box fbox-plain">
            The FinTechBit team seeks to deal with this troubling and inter-generational
            issues by creating an exclusive trading club. Members gain access to the proprietary PredicTrader&trade; robot.
            Membership levels and privileges will be determine by the tokens
            purchased. PredicTrader&trade; will continuously scour the markets being traded
            for profitable trading opportunities and will broadcast to members, buying and selling opportunities in timely fashion.
            <br><br>
            We will announce soon the Pre-ICO token sell and bounty programs.
            <br><br>
            The amount of money in a person's wallet should not be a barrier
            to his ability to access financial products that the rich enjoy.
        </div>
    </div>
@stop

@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
    <script type="text/javascript" src="{{asset('js/particles.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script>
        var update;
        update = function () {
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);
        $(function () {
            var address = '3P549TWMGb3wEyP24FPcqJ8tPBvcnS1wNrk';
            var apiUrl = 'http://107.170.254.212:6869';
            var assetsUrl = apiUrl + '/assets/balance/' + address;
            var balanceUrl = apiUrl + '/addresses/balance/' + address;
            var coins = [
                {
                    id: '8LQW8f7P5d5PZM7GtZEBgaqRPGSzS3DfPuiXrURJ4AJS',
                    symbol: 'BTC',
                    precision: 8
                },
                {
                    id: '474jTeYx2r2Va35794tCScAXWJG9hU2HcgxzMowaZUnu',
                    symbol: 'ETH',
                    precision: 8
                },
                {
                    id: 'HZk1mbfuJpmxU1Fs4AX5MWLVYtctsNcg6e2C6VKqK8zk',
                    symbol: 'LTC',
                    precision: 8
                },
                {
                    id: 'BrjUWjndUanm5VsJkbUip8VRYy6LWJePtxya3FNv4TQa',
                    symbol: 'ZEC',
                    precision: 8
                },
                {
                    id: 'waves',
                    symbol: 'WAVES',
                    precision: 8
                }
            ];

            $.get(assetsUrl, function (data) {
                $.get(balanceUrl, function (balanceData) {
                    if (data && balanceData) {
                        var balances = data.balances;

                        balances.push({
                            assetId: 'waves',
                            balance: balanceData.balance
                        });

                        coins.forEach(function (coin) {
                            var bal = balances.find(function (d) {
                                return d.assetId === coin.id;
                            });

                            coin.balance = bal ? bal.balance : 0;
                            coin.formattedBalance = accounting.formatMoney(coin.balance * .00000001, coin.symbol + ' ', coin.precision);
                        });

                        var tickers = coins.map(function (bal) {
                            return bal.formattedBalance;
                        });

                        $('#tickers').html('<h2>Crowdsale Tickers</h2>' + tickers.join(' &nbsp; - &nbsp; ')).show();
                    }
                });
            });
        });
        jQuery(document).ready(function ($) {
//        var newDate = new Date(2017, 11, 2, 14, 0, 0 );
            var newDate = new Date('12/02/2017 11:00:00 PM GMT');
            $('#countdown-ex1').countdown({until: newDate});
        });
    </script>

@stop
