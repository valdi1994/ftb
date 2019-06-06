@extends('web.web')

@section('content')
    <ul class="clients-grid grid-2 bottommargin clearfix">
        <li>
            <a href="https://twitter.com/Fintechbit_FTB" target="_blank">
                <div style="background-repeat: no-repeat; background-image: url({{asset('logos/twitter.png')}}); background-position: center; background-size: contain; height: 150px; width: 100%;"></div>
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/fintechbit.ftb.3" target="_blank">
                <div style="background-repeat: no-repeat; background-image: url({{asset('logos/facebook.png')}}); background-position: center; background-size: contain; height: 150px; width: 100%;"></div>
            </a>
        </li>
    </ul>
    <ul class="clients-grid grid-3 bottommargin clearfix">
        <li>
            <a href="https://medium.com/@fintechbit" target="_blank">
                <div style="background-repeat: no-repeat; background-image: url({{asset('logos/medium.png')}}); background-position: center; background-size: contain; height: 150px; width: 100%;"></div>
            </a>
        </li>
        <li>
            <a href="https://steemit.com/" target="_blank">
                <div style="background-repeat: no-repeat; background-image: url({{asset('logos/steemit.png')}}); background-position: center; background-size: contain; height: 150px; width: 100%;"></div>
            </a>
        </li>
        <li>
            <a href="https://bitcointalk.org" target="_blank">
                <div style="background-repeat: no-repeat; background-image: url({{asset('logos/bitcointalk.png')}}); background-position: center; background-size: contain; height: 150px; width: 100%;"></div>
            </a>
        </li>
    </ul>
    <ul class="clients-grid grid-2 bottommargin clearfix">
        <li>
            <a href="https://wavestalk.org/index.php" target="_blank">
                <div style="background-repeat: no-repeat; background-image: url({{asset('logos/wavestalk.jpg')}}); background-position: center; background-size: contain; height: 150px; width: 100%;"></div>
            </a>
        </li>
        <li>
            <a href="https://www.reddit.com/user/Fintechbi" target="_blank">
                <div style="background-repeat: no-repeat; background-image: url({{asset('logos/reddit.png')}}); background-position: center; background-size: contain; height: 150px; width: 100%;"></div>
            </a>
        </li>
    </ul>
@stop