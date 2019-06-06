@extends('web.web')

@section('content')
    <div class="row clearfix">

        <div class="col-sm-9">

            <div class="heading-block noborder">
                <h3>{{ Auth::user()->name }}</h3>
                <span>Your Profile</span>
            </div>

        </div>
        <div class="col-sm-3 clearfix">

            <div class="list-group">
                <a href="#" class="list-group-item clearfix">{{Auth::user()->package_count}} Packages Purchased <i class="icon-box pull-right"></i></a>
                <a href="#" class="list-group-item clearfix">{{Auth::user()->total_sum}} FTB = {{Auth::user()->total_usd}} USD <i class="icon-credit-cards pull-right"></i></a>
                <hr>
                <a href="#" class="list-group-item clearfix">{{Auth::user()->unpaid_package_count}} Packages waiting for payment <i class="icon-box pull-right"></i></a>
                <a href="#" class="list-group-item clearfix">{{Auth::user()->unpaid_sum}} FTB = {{Auth::user()->unpaid_usd}} USD <i class="icon-credit-cards pull-right"></i></a>
            </div>

        </div>
        <div>

            <div class="clear"></div>

            <div class="row clearfix">

                <div class="col-md-12">

                    <div class="tabs tabs-alt clearfix" id="tabs-profile">

                        <ul class="tab-nav clearfix">
                            <li><a href="#tab-info"><i class="icon-info-sign"></i> Information</a></li>
                            {{--<li><a href="#tab-wallet"><i class="icon-wallet"></i> Wallet</a></li>--}}
                            <li><a href="#tab-package"><i class="icon-box"></i> Packages</a></li>
                        </ul>

                        <div class="tab-container">

                            <div class="tab-content clearfix" id="tab-info">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <colgroup>
                                            <col class="col-xs-2">
                                            <col class="col-xs-6">
                                        </colgroup>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <code>Name</code>
                                            </td>
                                            <td>{{Auth::user()->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>Username</code>
                                            </td>
                                            <td>{{Auth::user()->username}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>Email Address</code>
                                            </td>
                                            <td>{{Auth::user()->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>Wallet</code>
                                            </td>
                                            <td>{{Auth::user()->wallet}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <form id="register-form" name="register-form" class="nobottommargin"
                                      action="{{ route('profile.update') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="col_full">
                                        <label for="email">Email Address:</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}"
                                               autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col_half">
                                        <label for="name">Name:</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                               value="{{ old('name') }}"
                                               autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="username">Username:</label>
                                        <input id="username" type="text" class="form-control" name="username"
                                               value="{{ old('username') }}"
                                               autofocus>

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full">
                                        <label for="wallet">Wallet Address:</label>
                                        <input id="wallet" type="text" class="form-control" name="wallet"
                                               value="{{ old('wallet') }}">

                                        @if ($errors->has('wallet'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('wallet') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="clear"></div>

                                    <div class="clear"></div>

                                    <div class="col_full nobottommargin">
                                        <button class="button button-3d nomargin" id="register-form-submit"
                                                name="register-form-submit" value="register">Update
                                        </button>
                                    </div>

                                </form>


                                {{--<div class="col_half">--}}
                                {{--<label for="password">Choose Password:</label>--}}
                                {{--<input id="password" type="password" class="form-control" name="password"--}}
                                {{--required>--}}

                                {{--@if ($errors->has('password'))--}}
                                {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                                {{--</div>--}}

                                {{--<div class="col_half col_last">--}}
                                {{--<label for="password-confirm">Re-enter Password:</label>--}}
                                {{--<input id="password-confirm" type="password" class="form-control"--}}
                                {{--name="password_confirmation" required>--}}
                                {{--</div>--}}

                            </div>
                            {{--<div class="tab-content clearfix" id="tab-wallet">--}}

                            {{--<div class="row topmargin-sm clearfix">--}}

                            {{--<div class="col-xs-12 bottommargin-sm">--}}
                            {{--<div class="ipost clearfix">--}}
                            {{--<div class="row clearfix">--}}
                            {{--<div class="col-sm-4">--}}
                            {{--<div class="entry-image">--}}
                            {{--<a href="images/portfolio/full/17.jpg"--}}
                            {{--data-lightbox="image"><img class="image_fade"--}}
                            {{--src="images/blog/grid/17.jpg"--}}
                            {{--alt="Standard Post with Image"></a>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-8">--}}
                            {{--<div class="entry-title">--}}
                            {{--<h3><a href="blog-single.html">This is a Standard post with a--}}
                            {{--Preview Image</a></h3>--}}
                            {{--</div>--}}
                            {{--<ul class="entry-meta clearfix">--}}
                            {{--<li><i class="icon-calendar3"></i> 10th Feb 2014</li>--}}
                            {{--<li><a href="blog-single.html#comments"><i--}}
                            {{--class="icon-comments"></i> 13</a></li>--}}
                            {{--<li><a href="#"><i class="icon-camera-retro"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--<div class="entry-content">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                            {{--Cupiditate, asperiores quod est tenetur in.</p>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-xs-12 bottommargin-sm">--}}
                            {{--<div class="ipost clearfix">--}}
                            {{--<div class="row clearfix">--}}
                            {{--<div class="col-sm-4">--}}
                            {{--<div class="entry-image">--}}
                            {{--<iframe src="http://player.vimeo.com/video/87701971" width="500"--}}
                            {{--height="281" frameborder="0" webkitallowfullscreen--}}
                            {{--mozallowfullscreen allowfullscreen></iframe>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-8">--}}
                            {{--<div class="entry-title">--}}
                            {{--<h3><a href="blog-single.html">This is a Standard post with a--}}
                            {{--Embed Video</a></h3>--}}
                            {{--</div>--}}
                            {{--<ul class="entry-meta clearfix">--}}
                            {{--<li><i class="icon-calendar3"></i> 10th Feb 2014</li>--}}
                            {{--<li><a href="blog-single.html#comments"><i--}}
                            {{--class="icon-comments"></i> 13</a></li>--}}
                            {{--<li><a href="#"><i class="icon-camera-retro"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--<div class="entry-content">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                            {{--Cupiditate, asperiores quod est tenetur in.</p>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-xs-12 bottommargin-sm">--}}
                            {{--<div class="ipost clearfix">--}}
                            {{--<div class="row clearfix">--}}
                            {{--<div class="col-sm-4">--}}
                            {{--<div class="entry-image">--}}
                            {{--<div class="fslider" data-arrows="false">--}}
                            {{--<div class="flexslider">--}}
                            {{--<div class="slider-wrap">--}}
                            {{--<div class="slide"><img class="image_fade"--}}
                            {{--src="images/blog/grid/10.jpg"--}}
                            {{--alt="Standard Post with Gallery">--}}
                            {{--</div>--}}
                            {{--<div class="slide"><img class="image_fade"--}}
                            {{--src="images/blog/grid/20.jpg"--}}
                            {{--alt="Standard Post with Gallery">--}}
                            {{--</div>--}}
                            {{--<div class="slide"><img class="image_fade"--}}
                            {{--src="images/blog/grid/21.jpg"--}}
                            {{--alt="Standard Post with Gallery">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-8">--}}
                            {{--<div class="entry-title">--}}
                            {{--<h3><a href="blog-single.html">This is a Standard post with a--}}
                            {{--Slider Gallery</a></h3>--}}
                            {{--</div>--}}
                            {{--<ul class="entry-meta clearfix">--}}
                            {{--<li><i class="icon-calendar3"></i> 10th Feb 2014</li>--}}
                            {{--<li><a href="blog-single.html#comments"><i--}}
                            {{--class="icon-comments"></i> 13</a></li>--}}
                            {{--<li><a href="#"><i class="icon-camera-retro"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--<div class="entry-content">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                            {{--Cupiditate, asperiores quod est tenetur in.</p>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--</div>--}}

                            {{--</div>--}}
                            <div class="tab-content clearfix" id="tab-package">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <colgroup>
                                            <col class="col-xs-2">
                                            <col class="col-xs-6">
                                        </colgroup>
                                        <tbody>
                                        @foreach(Auth::user()->packages as $package)
                                        <tr>
                                            <td>
                                                <code>{{ucfirst($package->name)}}</code>
                                            </td>
                                            <td>{{\Carbon\Carbon::parse($package->created_at)->diffForHumans()}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col_full nobottommargin topmargin"
                                     style="display:flex; justify-content:center; align-items:center;">
                                    <a href="{{route('package')}}"
                                            class="button button-desc button-3d button-rounded center">Purchase packages
                                    </a>
                                </div>





                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="line visible-xs-block"></div>

    </div>
@stop

@section('js')
    <script>

        $('.portfolio-item').height('349')

    </script>

@stop


@section('css')

    <link rel="stylesheet" href="{{asset('css/components/radio-checkbox.css')}}" type="text/css"/>
    <style>
        body {
            height: 100%;
        }

        figure {
            background-position: center;
            width: 100%;
            height: 180px;
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
    {{--<style>--}}

    {{--/*article.portfolio-item.pf-media.pf-icons {*/--}}
    {{--/*padding: 0;*/--}}
    {{--/*}*/--}}
    {{--.portfolio-desc {--}}
    {{--z-index: 3;--}}
    {{--padding: 15px !important;--}}
    {{--}--}}
    {{--.checkbox-style-3-label{--}}
    {{--margin-top: 0;--}}
    {{--}--}}
    {{--.checkbox-style-3-label:before{--}}
    {{--margin-right: 0;--}}
    {{--}--}}
    {{--h3{--}}
    {{--display:flex;--}}
    {{--flex: 2;--}}
    {{--justify-content: space-between;--}}
    {{--}--}}
    {{--h3>span{--}}
    {{--font-size:14px;--}}
    {{--}--}}
    {{--#portfolio{--}}
    {{--margin-bottom:30px;--}}
    {{--}--}}
    {{--figure{--}}
    {{--background-position: center center;--}}
    {{--background-repeat: no-repeat;--}}
    {{--background-size: contain;--}}
    {{--width: 100%;--}}
    {{--height: 180px;--}}
    {{--}--}}

    {{--</style>--}}
@stop
