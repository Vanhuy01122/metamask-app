@extends('layouts.frontend.header')

@section('content')
    <body>
    @include('components.loading_spinner')
    <div class="container">
        <x-install-metamask-overlay/>
        <x-initializing-metamask-modal/>
    </div>

    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <h1>You are logged in</h1>--}}
    {{--            <div class="col-12 text-center mt-3">--}}
    {{--                <div class="dropdown" style="float:right;">--}}
    {{--                    <a href="{{ route('logout') }}" class="btn btn-secondary">--}}
    {{--                        Logout--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="hm-bn">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12 hm-bn-left">
                    <div class="col-inner">
                        <h1>
                            <span>BITCOIN MINETRIX</span>
                            <span>STAKE TOKENS. <strong>MINE BITCOIN.</strong></span>
                        </h1>
                        <span>One Bitcoin mined in 2013 appreciated 27,300% in 10 years. Bitcoin Minetrix provides hassle-free BTC mining for the next 10 years. Buy $BTCMTX today for as little as $0.0123.</span>
                        <div class="hm-btn">
                            <a href="#">Audit</a>
                            <a class="btn-color" href="#">Whitepaper</a>
                        </div>
                        <div>
                            <img src="{{asset('assets/frontend/media/Cloud-Mining.svg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12 hm-bn-right">
                    <div class="col-inner">
                        <div class="walletBox">
                            <h4>BUY IN BEFORE PRICE INCREASES!</h4>
                            <div class="des-walletBox">
                                <div id="countdown">
                                    <ul>
                                        <li><span id="days"></span>days</li>
                                        <li><span id="hours"></span>Hours</li>
                                        <li><span id="minutes"></span>Minutes</li>
                                        <li><span id="seconds"></span>Seconds</li>
                                    </ul>
                                </div>
                                <span class="un-price">Until Price Increase</span>
                                <div class="usdt">
                                    <ul>
                                        <li><strong>USDT RAISED: </strong>$5,757,147.47 / $6,258,616</li>
                                        <li><strong>YOUR PURCHASED BTCMTX: </strong>= 0</li>
                                        <li><strong>YOUR STAKEABLE BTCMTX: </strong>= 0</li>
                                    </ul>
                                    <div class="dashtitle"><span>1 BTCMTX = $0.0123</span></div>
                                </div>
                                <div class="tab-usdt">
                                    <div class="tab">
                                        <button class="tablinks" onclick="openCity(event, 'eth')" id="defaultOpen">ETH
                                        </button>
                                        <button class="tablinks" onclick="openCity(event, 'usdt')">USDT</button>
                                        <button class="tablinks" onclick="openCity(event, 'card')">CARD</button>
                                    </div>
                                    <div class="dashtitle"><span id="account_balance"></span></div>
                                    <div class="dashtitle">BNB: <span id="bnb_num"></span></div>
                                    <div class="dashtitle">Chain ID: <span id="chain_id"></span></div>
                                    <div id="eth" style="display: block;" class="tabcontent">
                                        <div class="form-layout">
                                            <div class="input-control">
                                                <span>Pay with USD1</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                            <div class="input-control">
                                                <span>Receive BTCMTX</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="usdt" class="tabcontent">
                                        <div class="form-layout">
                                            <div class="input-control">
                                                <span>Pay with USD2</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                            <div class="input-control">
                                                <span>Receive BTCMTX</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="card" class="tabcontent">
                                        <div class="form-layout">
                                            <div class="input-control">
                                                <span>Pay with USD3</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                            <div class="input-control">
                                                <span>Receive BTCMTX</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="connect-wallet">
                                    {{--                                    <button class="connect-metamask" id="connectButton">Connect metamask</button>--}}
                                    <button class="connect-metamask" id="connectButton">@if(empty($eth_address))
                                            Connect metamask
                                        @else
                                            Buy now
                                        @endif</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-partner hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <h3>featured in</h3>
                        <div class="list-logo">
                            <img src="{{asset('assets/frontend/media/logo1.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo2.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo3.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo4.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo5.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo6.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo7.svg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bt-about hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>BITCOIN MINING made easy</h4>
                            <h2>What is Bitcoin Minetrix?</h2>
                            <p>Bitcoin Minetrix is a tokenized cloud mining platform that allows everyday people to mine
                                bitcoin (BTC) in a decentralized way. We’re tokenizing cloud mining to ensure a secure
                                and transparent experience.</p>
                            <p>We’re solving a huge problem by removing the risk of third party cloud mining scams and
                                putting the control into the hands of token holders. Simply stake BTCMTX to earn
                                credits, and use these to mine BTC.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-wrapper hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <img src="{{asset('assets/frontend/media/bn-small.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>DECENTRALIZED CLOUD MINING</h4>
                            <h2>The Bitcoin Minetrix Solution</h2>
                            <p>Bitcoin Minetrix presents a reliable cloud mining platform for everyday crypto users that
                                aims to fix the problem of high hardware costs and deceptive scams that have deterred
                                people from BTC mining.</p>
                            <p>With Bitcoin Minetrix, these concerns are a thing of the past. Users can simply stake
                                their BTCMTX tokens to gain cloud mining credits. This decentralized method safeguards
                                users' interests, ensuring a secure and transparent mining experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-wrapper hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>how it works</h4>
                            <h2>Stake-To-Mine BTC Mining</h2>
                            <p>The Stake-to-Mine concept is a novel idea that promises to bring bitcoin mining back into
                                the realm of possibility for ordinary crypto aficionados, for several reasons.</p>
                            <p>Users of Bitcoin Minetrix need only an Ethereum-compatible wallet such as MetaMask to
                                purchase and stake BTCMTX tokens, making things very simple. Staking BTCMTX earns
                                non-tradable ERC-20 token credits that must be burned in exchange for BTC cloud mining
                                power.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <img src="{{asset('assets/frontend/media/bn-small-2.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-wrapper hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <table>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>Bitcoin Minetrix</td>
                                <td>Traditional Cloud Mining</td>
                            </tr>
                            <tr>
                                <td><span><img src="{{asset('assets/frontend/media/table-img-1.svg')}}"> Cost Entry Point</span>
                                </td>
                                <td>Low - Presale (no minimum buy)</td>
                                <td>High - Large minimum amounts</td>
                            </tr>
                            <tr>
                                <td><span><img src="{{asset('assets/frontend/media/table-img-2.svg')}}"> Safety and Security</span>
                                </td>
                                <td>Decentralized, user-owned tradable tokens</td>
                                <td>Cash deposits required</td>
                            </tr>
                            <tr>
                                <td><span><img src="{{asset('assets/frontend/media/table-img-3.svg')}}"> Risk</span>
                                </td>
                                <td>Cash deposits required</td>
                                <td>No refunds, long-term commitments</td>
                            </tr>
                            <tr>
                                <td><span><img
                                            src="{{asset('assets/frontend/media/table-img-4.svg')}}"> Simplicity</span>
                                </td>
                                <td>Buy with ETH, BNB, USDT, or card and stake</td>
                                <td>Complicated contracts</td>
                            </tr>
                            <tr>
                                <td><span><img src="{{asset('assets/frontend/media/table-img-5.svg')}}"> Lock In Period</span>
                                </td>
                                <td>Variable dependent on staking</td>
                                <td>Fixed timeframe</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>The Case For Mining</h4>
                            <h2>Reasons To Cloud Mine BTC</h2>
                            <p>Although mostly run by corporations with huge physical mining rigs, cloud mining still
                                provides a legitimate way for individuals to obtain BTC without buying it. There are
                                several benefits:</p>
                            <p>Users of Bitcoin Minetrix need only an Ethereum-compatible wallet such as MetaMask to
                                purchase and stake BTCMTX tokens, making things very simple. Staking BTCMTX earns
                                non-tradable ERC-20 token credits that must be burned in exchange for BTC cloud mining
                                power.</p>
                            <p><strong>Ease of Entry</strong></p>
                            <p>Cloud mining eliminates the need for technical expertise, hardware setup, and
                                maintenance. It's user-friendly, making it accessible to beginners.</p>
                            <p><strong>Cost Efficiency</strong></p>
                            <p>By leveraging cloud mining companies' advanced equipment, individuals avoid high
                                electricity costs and hardware investments.</p>
                            <p><strong>Space & Noise</strong></p>
                            <p>Mining rigs are bulky, noisy, and produce heat. With cloud mining, users won't have these
                                disruptions in their homes.</p>
                            <p><strong>No Resale Worries</strong></p>
                            <p>The rapid ageing of mining hardware can make resale challenging. Cloud mining keeps the
                                responsibility to upgrade with the mining companies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="to-access bt-about hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>HOW TO BUY</h4>
                            <h2>How To Access BTC Mining</h2>
                            <p>Purchase BTCMTX tokens using ETH, USDT, BNB or bank card today and stake them to earn
                                cloud mining credits. Burn credits to increase your bitcoin mining power.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="list-buy">
                            <div class="box">
                                <div class="inner-box">
                                    <div class="buy-img"><img src="{{asset('assets/frontend/media/buy-now.svg')}}">
                                    </div>
                                    <div class="buy-text">
                                        <h4>Buy Tokens</h4>
                                        <p>Connect your wallet and use the presale widget at the top of the page to buy
                                            BTCMTX tokens. You can use ETH, BNB, USDT, or bank card. Make sure you have
                                            enough ETH or BNB to cover gas fees.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="buy-img"><img src="{{asset('assets/frontend/media/stake.svg')}}"></div>
                                    <div class="buy-text">
                                        <h4>Stake-to-Mine</h4>
                                        <p>If you select the ‘Buy & Stake’ option you can start staking immediately and
                                            earn more BTCMTX tokens. Staking for mining credits (Stake-to-Mine) will be
                                            available when the app is launched.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="buy-img"><img src="{{asset('assets/frontend/media/redeem.svg')}}"></div>
                                    <div class="buy-text">
                                        <h4>Earn BTC</h4>
                                        <p>Your staked BTCMTX will generate mining credits over time. Burn mining
                                            credits to purchase bitcoin cloud mining power. The more credits you burn,
                                            the more BTC you’ll earn through cloud mining.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-calculator">
        <div class="calculator-bgr hm-pd">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-inner">
                            <div class="hm-content">
                                <h2>Bitcoin Minetrix Stake-to-Mine Dashboard</h2>
                                <p><strong>Manage all your BTCMTX tokens and mining credits in one place with the
                                        Bitcoin Minetrix dashboard. Gain cloud mining power using your mining credits
                                        earned through staking.</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div style="text-align: center;" class="col-inner">
                            <img src="{{asset('assets/frontend/media/bitcoin-mining-calculator.svg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-join bt-about hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h2>Join Our $30K Minedrop!</h2>
                            <p>Enter our Gleam competition below to stand a chance to win one of 10 prize allocations,
                                each worth $3,000. We aim to reward our community with $30,000 worth of $BTCMTX tokens
                                in total. Terms and conditions apply.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-join2">
                            <h4><img src="{{asset('assets/frontend/media/favicon.ico')}}">gleam.io</h4>
                            <p>gleam.io needs to review the security of your connection before proceeding.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <img src="{{asset('assets/frontend/media/bitcoin-mining-competition.svg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="to-access to-roadmap bt-about hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h2>Roadmap</h2>
                            <p>Our project roadmap is set out in four phases, starting with a fair presale to raise the
                                necessary funds for marketing and cloud mining operations and ending with the fully
                                developed Bitcoin Minetrix platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="list-buy">
                            <div class="box">
                                <div class="inner-box">
                                    <div class="phase"><strong>Phase 1: </strong>Presale and token distribution</div>
                                    <div class="buy-text">
                                        <h3>Presale</h3>
                                        <ul>
                                            <li>Industry research and consultation</li>
                                            <li>Token, presale and staking contract development</li>
                                            <li>BTCMTX campaign - presale launch, claim and exchange listings</li>
                                            <li>Extensive multimedia marketing campaign launch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="phase"><strong>Phase 2: </strong>Platform development and facility setup
                                    </div>
                                    <div class="buy-text">
                                        <h3>Development</h3>
                                        <ul>
                                            <li>Industry research and consultation</li>
                                            <li>Token, presale and staking contract development</li>
                                            <li>BTCMTX campaign - presale launch, claim and exchange listings</li>
                                            <li>Extensive multimedia marketing campaign launch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="phase"><strong>Phase 3: </strong>Public launch of Stake-to-Mine platform
                                    </div>
                                    <div class="buy-text">
                                        <h3>Launch</h3>
                                        <ul>
                                            <li>Industry research and consultation</li>
                                            <li>Token, presale and staking contract development</li>
                                            <li>BTCMTX campaign - presale launch, claim and exchange listings</li>
                                            <li>Extensive multimedia marketing campaign launch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="phase"><strong>Phase 4: </strong>Mass adoption of the BTCMTX token</div>
                                    <div class="buy-text">
                                        <h3>Mass Adoption</h3>
                                        <ul>
                                            <li>Industry research and consultation</li>
                                            <li>Token, presale and staking contract development</li>
                                            <li>BTCMTX campaign - presale launch, claim and exchange listings</li>
                                            <li>Extensive multimedia marketing campaign launch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-token hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <img src="{{asset('assets/frontend/media/bn-small-3.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h2>Tokenomics</h2>
                            <p>42.5% of the BTCMTX tokens will be used to fund the bitcoin mining operations of Bitcoin
                                Minetrix. 35% of the tokens will be allocated to marketing efforts and growing BTCMTX.
                                12.5% is for BTCMTX staking rewards until the Bitcoin Minetrix cloud mining platform is
                                developed. 10% is allocated to community rewards for active participation in the
                                project.</p>
                        </div>
                        <table>
                            <tbody>
                            <tr>
                                <td>Funds</td>
                                <td>% Allocation</td>
                                <td>Token</td>
                            </tr>
                            <tr>
                                <td>Bitcoin Mining</td>
                                <td>42.5%</td>
                                <td>1,700,000,000</td>
                            </tr>
                            <tr>
                                <td>Marketing</td>
                                <td>35.0%</td>
                                <td>1,400,000,000</td>
                            </tr>
                            <tr>
                                <td>Staking</td>
                                <td>12.5%</td>
                                <td>500,000,000</td>
                            </tr>
                            <tr>
                                <td>Community</td>
                                <td>10.0%</td>
                                <td>400,000,000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-questions hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <h2>Frequently Asked Questions</h2>
                        <p>The answers to some of your most common questions are listed here. If you can't find the info
                            you're looking for, let our moderators know in Telegram. You can also contact us <strong>atinfo@btcminetrix.com.</strong>
                        </p>
                        <img src="{{asset('assets/frontend/media/what-is-bitcoin-mining.svg')}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <!-- <div class="hm-content">
                            <button class="accordion">What is Bitcoin mining?</button>
                            <div class="panel">
                            <p>Bitcoin mining is the process of creating new bitcoin. Thousands of mining rigs compete to solve complex equations that validate Bitcoin transactions and maintain the public ledger, and earn new bitcoin (BTC) for doing so.</p>
                            </div>

                            <button class="accordion">What is cloud mining?</button>
                            <div class="panel">
                            <p>Cloud mining is the same process as bitcoin mining but allows individuals to purchase or rent a stake in third party mining operations, to remove the need to set up their own hardware.</p>
                            </div>

                            <button class="accordion">Why do we need Bitcoin Minetrix?</button>
                            <div class="panel">
                            <p>Bitcoin (BTC) mining is prohibitively expensive for the ordinary person, but anybody can buy and stake BTCMTX tokens to secure a share in the BTC Minetrix cloud mining platform. Traditional cloud mining has unfortunately been soured by scams, but Bitcoin Minetrix removes this risk with a decentralized solution to cloud mining.</p>
                            </div>
                            <button class="accordion">What is Bitcoin mining?</button>
                            <div class="panel">
                            <p>Bitcoin mining is the process of creating new bitcoin. Thousands of mining rigs compete to solve complex equations that validate Bitcoin transactions and maintain the public ledger, and earn new bitcoin (BTC) for doing so.</p>
                            </div>

                            <button class="accordion">What is cloud mining?</button>
                            <div class="panel">
                            <p>Cloud mining is the same process as bitcoin mining but allows individuals to purchase or rent a stake in third party mining operations, to remove the need to set up their own hardware.</p>
                            </div>

                            <button class="accordion">Why do we need Bitcoin Minetrix?</button>
                            <div class="panel">
                            <p>Bitcoin (BTC) mining is prohibitively expensive for the ordinary person, but anybody can buy and stake BTCMTX tokens to secure a share in the BTC Minetrix cloud mining platform. Traditional cloud mining has unfortunately been soured by scams, but Bitcoin Minetrix removes this risk with a decentralized solution to cloud mining.</p>
                            </div>
                        </div> -->
                        <section class="faq-container" aria-label="Frequently Asked Questions">
                            <details>
                                <summary>
                                    <span class="faq-title">What is Bitcoin mining?</span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to
                                    complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">What is cloud mining?</span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to
                                    complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">Why do we need Bitcoin Minetrix?</span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to
                                    complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">How is this different to traditional cloud mining? </span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to
                                    complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">What is the difference between tokens and credits? </span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to
                                    complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">What is the difference between tokens and credits? </span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to
                                    complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">What is the difference between tokens and credits? </span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to
                                    complete.
                                </div>
                            </details>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        async function checkIfEverythingIsCorrect() {
            if (!isMetaMaskInstalled()) {
                // User after login deleted or disabled metamask extension
                logout('Metamask is not found. Turn it on or install it.');
            }

            const accounts = await ethereum.request({method: 'eth_accounts'});
            const ethAccount = accounts[0];

            if (ethAccount === "undefined") {
                // User must have locked metamask or disconnected wallet manually
                logout();
            }

            if (ethAccount != document.querySelector('meta[name="eth_address"]').content) {
                // User must have locked metamask or disconnected wallet manually while having one or multiple addresses (accounts) connected (session address does not match with current from wallet)
                logout('Your security token has changed.');
            }
        }

        function handleAccountsChanged(accounts) {
            if (accounts.length === 0) {
                // MetaMask is locked or a user has disconnected manually from the last account
                logout();
            } else if (accounts[0] !== currentAccount) {
                currentAccount = accounts[0];

                if (currentAccount != null) {
                    // This will be true if user connected manually with new account
                }
            }
            checkIfEverythingIsCorrect();
        }

        function logout(message = '') {
            console.log('logout:', message);
            ajax({
                url: "{{ route('logout') }}",
                type: 'GET',
                async: false,
                success: (xhr, data) => {
                    //window.location.refresh();
                },
            });
            //window.location = "{{ route('logout') }}";
        }

        async function displayInfo() {
            const accounts = await ethereum.request({method: 'eth_accounts'});
            let chain_id = await getChainId();
            let account_balance = await getMetaMaskBalance(document.querySelector('meta[name="eth_address"]').content);
            document.getElementById('ethAddress').innerHTML = accounts[0];
            document.getElementById('chain_id').innerHTML = chain_id;
            document.getElementById('account_balance').innerHTML = account_balance + ' ETH';

            const bnbBalance = await getBNBBalance(accounts[0]);
            document.getElementById('bnb_num').innerHTML = bnbBalance;
        }

        displayInfo();
        checkIfEverythingIsCorrect();
        startApp();
    </script>
    {{--    login--}}
    <script>
        // User needs to personal_sign to prove they own the wallet (public ETH address).
        async function signData() {
            const web3 = new Web3(window.ethereum);

            // Get all account addresses user selected through checkbox while connecting
            const accounts = await window.ethereum.request({method: 'eth_accounts'});
            const current_account_with_correct_checksum = Web3.utils.toChecksumAddress(accounts[0]);

            try {
                // Alternative:
                // web3.eth.personal.sign(MESSAGE_TO_SIGN, current_account_with_correct_checksum)
                //    .then(async (signature) => {});
                let signature = await web3.eth.personal.sign(MESSAGE_TO_SIGN, current_account_with_correct_checksum); // you can pass the third parameter (password)

                // The goal is to extract from the sign the wallet address that signed the request. In this way, there's no way to fake it.
                const ethAddressThatSignedMessage = await web3.eth.personal.ecRecover(MESSAGE_TO_SIGN, signature);

                // ethAddressThatSignedMessage is lowercase, so we use Web3.utils.toChecksumAddress() that will convert an upper or lowercase Ethereum address to a checksum address.
                if (current_account_with_correct_checksum != Web3.utils.toChecksumAddress(ethAddressThatSignedMessage)) {
                    // console.log('Failed to verify the signer');
                    return;
                }
                // console.log('Successfully verified the signer');
                sendLoginRequest(current_account_with_correct_checksum, MESSAGE_TO_SIGN, signature);
                hideModal();
            }
                // If user will reject to sign the message
            catch (error) {
                hideModal();
                //console.error(getErrorResponse(error, "personal.sign"));
                // You are connected but you refused to sign message and we can not log you in - Reload the page and try again!
                window.location.reload();
            }
        }

        function handleAccountsChanged(accounts) {
            // MetaMask is locked or the user has not connected any accounts
            if (accounts.length === 0) return;

            if (accounts[0] !== currentAccount) {
                currentAccount = accounts[0];
                signData();
            }
        }

        // This is function from MetaMask documentation
        function connect() {

            disableConnectButton();

            ethereum
                .request({method: "eth_requestAccounts", params: [{eth_accounts: {}}]})
                .then((accounts) => {
                    connectButton.innerHTML = "Connected but not verified";
                    handleAccountsChanged(accounts);
                })
                .catch((error) => {
                    // Some unexpected error.
                    // For backwards compatibility reasons, if no accounts are available,
                    // eth_accounts will return an empty array.

                    enableConnectButton();

                    // EIP-1193 userRejectedRequest error
                    // If this happens, the user rejected the connection request.
                    if (error.code === 4001) {
                        status.innerHTML = "You refused to connect Metamask"; //status.innerHTML = error.message;
                    } else {
                        console.error(getErrorResponse(error, "connect"));
                    }
                });
        }

        function sendLoginRequest(ethAddress, message, signature) {
            ajax({
                url: "{{ route('authenticate') }}",
                type: 'POST',
                async: false,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                data: {
                    'ethAddress': ethAddress,
                    'message': message,
                    'signature': signature,
                },
                success: (xhr, data) => {
                    window.location = "{{ route('home') }}";
                },
            });
        }

        function handleEthereum() {
            if (isMetaMaskInstalled()) {
                // Access the decentralized web!

                // You should only attempt to request the user's accounts in response to user interaction, such as a button click. Otherwise, you popup-spam the user like it's 1999.
                connectButton.onclick = connect;

                startApp();
            } else {
                informUserToInstallMetaMask();
            }
            hideSpinner();
        }

        function informUserToInstallMetaMask() {
            connectButton.innerHTML = "Install MetaMask!";
            connectButton.onclick = () => {
                window.open('https://metamask.io', '_blank');
            };
            document.getElementById('install_metamask_overlay').style.display = "block";
            document.getElementById('login_wrapper').style.display = "none";
        }

        function disableConnectButton() {
            document.body.style.cursor = "progress";
            initializing_metamask_modal.show();
            connectButton.disabled = true;
            connectButton.innerHTML = "Connecting...";
        }

        function enableConnectButton() {
            document.body.style.cursor = "auto";
            initializing_metamask_modal.hide();
            connectButton.disabled = false;
            connectButton.innerHTML = "Connect with MetaMask";
        }

        function showSpinner() {
            spinner_on_white.style.display = "block";
        }

        function hideSpinner() {
            spinner_on_white.style.display = "none";
        }

        function hideModal() {
            document.body.style.cursor = "auto";
            initializing_metamask_modal.hide();
        }
    </script>
    <script>
        let currentAccount = null;
        let spinner_on_white = document.getElementById('spinner_on_white');
        let connectButton = document.getElementById('connectButton');
        let status = document.getElementById('status');
        let initializing_metamask_modal = new bootstrap.Modal(document.getElementById('initializing_metamask_modal'), {});
        const MESSAGE_TO_SIGN =
            "Hi there from YOUR APP NAME! Sign this message to prove you have access to this wallet and we’ll log you in. This won’t cost you any Ether." +
            "\n\n" +
            "🔒 For security purposes, here’s a unique message ID: " +
            document.querySelector('meta[name="nonce"]').content +
            "\n " +
            "Note: you don't have to remember or write it down.";

        showSpinner();

        // Below if/else is to reliably detect both the mobile and extension provider.
        if (window.ethereum) {
            handleEthereum();
        } else {
            // if metamask is not detected it will take 3sec to be sure if is not installed
            window.addEventListener("ethereum#initialized", handleEthereum, {once: true});

            // If the event is not dispatched by the end of the timeout, the user probably doesn't have MetaMask installed.
            setTimeout(handleEthereum, 3000); // 3 seconds
        }
    </script>
    {{--    send transaction--}}
    <script>
        // const Web3 = require('web3');

        // Connect to MetaMask
        const web3 = new Web3(window.ethereum);

        window.ethereum.enable().then(function (accounts) {
            const fromAccount = accounts[0];

            // Contract address and ABI
            const contractAddress = fromAccount;
            const contractABI = [
                {
                    "constant": false,
                    "inputs": [
                        {
                            "name": "_to",
                            "type": "address"
                        },
                        {
                            "name": "_value",
                            "type": "uint256"
                        }
                    ],
                    "name": "transfer",
                    "outputs": [
                        {
                            "name": "",
                            "type": "bool"
                        }
                    ],
                    "payable": false,
                    "stateMutability": "nonpayable",
                    "type": "function"
                },
                // ... other functions and events
            ];

            // Create a contract instance
            const contract = new web3.eth.Contract(contractABI, contractAddress);

            // Your transaction parameters
            const toAddress = 'RECIPIENT_ADDRESS';
            const amount = web3.utils.toWei('1', 'ether'); // 1 ETH as an example

            // Send transaction
            contract.methods.transfer(toAddress, amount).send({ from: fromAccount })
                .on('transactionHash', function (hash) {
                    console.log('Transaction Hash:', hash);
                })
                .on('confirmation', function (confirmationNumber, receipt) {
                    console.log('Confirmation Number:', confirmationNumber);
                    console.log('Receipt:', receipt);
                })
                .on('error', function (error, receipt) {
                    console.error('Transaction Error:', error);
                    console.log('Receipt:', receipt);
                });
        });

    //     show token
    //     const fromAccount = accounts[0];
    //     const tokenAddress = '0x8af2301fc91097375ea09916240ace5adc19078f0ac5b871bf871d399fa05c9f';
    //     const tokenSymbol = 'TUT';
    //     const tokenDecimals = 18;
    //     const tokenImage = 'http://placekitten.com/200/300';
    //     console.log(tokenAddress)
    //     try {
    //         // 'wasAdded' is a boolean. Like any RPC method, an error can be thrown.
    //         const wasAdded = await window.ethereum.request({
    //             method: 'wallet_watchAsset',
    //             params: {
    //                 type: 'ERC20',
    //                 options: {
    //                     address: tokenAddress, // The address of the token.
    //                     symbol: tokenSymbol, // A ticker symbol or shorthand, up to 5 characters.
    //                     decimals: tokenDecimals, // The number of decimals in the token.
    //                     image: tokenImage, // A string URL of the token logo.
    //                 },
    //             },
    //         });
    //
    //         if (wasAdded) {
    //             console.log('Thanks for your interest!');
    //         } else {
    //             console.log('Your loss!');
    //         }
    //     } catch (error) {
    //         console.log(error);
    //     }
    </script>

    </body>
@endsection
