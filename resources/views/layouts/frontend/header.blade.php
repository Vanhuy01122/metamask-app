<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="nonce" content="{{ $nonce ?? null }}"/>
    <meta name="eth_address" content="{{ $eth_address ?? null }}"/>
    <title>MetaMask</title>

    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    @include('components.web3_js')
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
    <script src="{{ asset('ajax.js') }}"></script>
    <script src="{{ asset('metamask-utils.js') }}"></script>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="logo"><a href="#"><img src="{{asset('assets/frontend/media/logo.png')}}"></a></div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 hdr-right">
                    <div class="col-inner">
                        <div class="nav-menu">
                            <ul class="nav">
                                <li class="item">
                                    <a href="#">Stake to mine</a>
                                </li>
                                <li class="item">
                                    <a href="#">About</a>
                                </li>
                                <li class="item">
                                    <a href="#">Minedrop</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-bottom">
                            @if(!empty($eth_address))
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="logged"
                                            id="ethAddress">{{$eth_address}} </button>
                                </form>
                            @else
                                <button class="not-logged" id="buyNow">Buy now</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</head>
<body>
@yield('content')
</body>
<footer>
    <div class="as-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="logo"><a href="#"><img src="{{asset('assets/frontend/media/logo.png')}}"></a></div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="nav">
                        <ul>
                            <li><a href="#">stake to mine</a></li>
                            <li><a href="#">what is it</a></li>
                            <li><a href="#">How to Buy</a></li>
                            <li><a href="#">Roadmap</a></li>
                            <li><a href="">FAQS</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">terms of use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ftr-bot">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-16 text-left">
                        <p><strong>Copyright 2023 BTC Minetrix. All Rights Reserved.</strong></p>
                        <p><strong>Disclaimer: Cryptocurrency may be unregulated in your jurisdiction. The value of
                                cryptocurrencies may go down as well as up. Profits may be subject to capital gains or
                                other taxes applicable in your jurisdiction.</strong></p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                        <p><strong>Cloud Tech X23 Ltd. Registration Number: 122422</strong></p>
                        <p><strong>Trust Company Complex, Ajeltake Road, Ajeltake Island, Majuro, Marshall Islands
                                MH96960</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>
