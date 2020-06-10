<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <!-- profile links -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="{{ asset('css/userProfileStyle.css')}}" rel="stylesheet">
    <!-- chat liks -->
    <link rel="stylesheet" href="../../css/chatstyle.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/emilcarlsson/pen/ZOQZaV?limit=all&page=74&q=contact+" /> --}}
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
    <script src="https://use.typekit.net/hoy3lrg.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    
</head>

<body>
    <a href="{{ route('logout') }}" class="btn " style="background-color:0000FF; color:#0000FF !important;margin:10px;padding:10px;font-size:20px;display:absolute;float:right;" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div class="container">
        <div class="page-header">
            <h1 class="text-center" style="color:#0000FF;font-weight: bold;font-family: Times New Roman">
                Welcome {{$userName}} To Your Profile<span class="pull-right label label-default"></span></h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel with-nav-tabs panel-success">
                    <div class="panel-body">
                        <div class="tab-content">
                            @if(Auth::check() && Auth::user()->state == 1)
                            @foreach($orderList as $order)
                            <div class="container-fluid my-5 d-sm-flex justify-content-center">
                                <div class="card px-2">
                                    <div class="card-header bg-white">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p class="text-muted"> Order ID <span class="font-weight-bold text-dark">{{ $order->id }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="media flex-column flex-sm-row">
                                            <div class="media-body ">
                                                <h5 class="bold">Description: {{ $order->description }}</h5>
                                                <p class="text-muted">Cost: {{ $order->cost }}$</p>
                                            </div><img class="align-self-center img-fluid" src="/images/AdminOrderImages/{{$order->contractImg}}" width="180 " height="180">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col">
                                            <ul id="progressbar">
                                                <li class="step0 active " id="step1">{{ $order->state }}</li>
                                                <li class="step0 active text-center" id="step2">{{ $order->state }}</li>
                                                <li class="step0 text-muted text-right" id="step3">{{ $order->state }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        @elseif(!$quizData->isEmpty())
                        <h2 class="text-center text-info">Your Quiz</h2>
                        <div class="row text-center">
                            @foreach($quizData as $data)
                            <div class="col-md-6">
                                <p class="lead"> Your Area: <span class="text-info">{{ $data ->area}}</span></p>
                                <p class="lead"> Your Name: <span class="text-info">{{ $data ->customerName}}</span></p>
                            </div>
                            <div class="col-md-6">
                                <p class="lead"> Contact Via: <span class="text-info">{{ $data ->contactTybe}}</span></p>
                                <p class="lead"> Your Design: <span class="text-info">{{ $data ->design}}</span></p>
                            </div>
                            @endforeach
                        </div>

                        @else
                        <h4 style="color:0000FF;font-weight: bold;"> You Didn't Apply the Quiz , apply <a href="/"> Now </a></h4>
                        @endif
                        <div class="tab-pane fade" id="tab2default">Default 2</div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Chat modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="position: absolute;left:50%;top: 80%;">
        Chat with Admin
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Yassmin chat -->
                    <div id="frame">
                        <div class="content">
                            <div class="contact-profile">
                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                <p>Admin</p>
                            </div>
                            <div class="messages">
                                <ul>
                                    <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>Hello, Iam the admin .. You can talk to me ; i will reply soon</p>
                                    </li>
                                    @forelse ($chatData as $item)
                                    @if ($item->img)
                                    <li class="sent">
                                        <img src="/chatfiles/{{$item->img}}" alt="" />

                                        <p style="font-size:22; ">
                                            <img src="/chatfiles/{{$item->img}}" style="width: 200px;height:200px;" alt="" srcset="">
                                            <br>
                                            {{$item->body}}</br>
                                    </li>
                                    @else
                                    <li class="sent">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>{{$item->body}}</p>
                                    </li>
                                    @endif

                                    @empty
                                    <!-- <div class="danger bg-primary">No Data</div> -->
                                    @endforelse
                                </ul>
                            </div>
                            <div class="message-input">
                                <div class="wrap">
                                    <input type="text" placeholder="Write your message..." />
                                    <input type="file" id="file1" style="display:none">
                                    <i id='attachment' class="fa fa-paperclip attachment" aria-hidden="true"> </i>

                                    <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End chat -->
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- chat scripts -->
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="../../js/chat.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </div>
</body>

</html>