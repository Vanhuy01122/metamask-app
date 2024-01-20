@extends('layouts.frontend.header')

@section('content')
    <body>
    @include('components.loading_spinner')
    <div class="container">
        <x-install-metamask-overlay/>
        <x-initializing-metamask-modal/>
    </div>
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
                                        <button class="tablinks" onclick="openCity(event, 'eth')" id="defaultOpen">BNB
                                        </button>
                                        <button class="tablinks" onclick="openCity(event, 'usdt')">USDT</button>
                                        <button class="tablinks" onclick="openCity(event, 'card')">CARD</button>
                                    </div>
                                    {{--show usdt--}}
                                    <div class="dashtitle"><span id="account_balance"></span></div>
                                    <div class="dashtitle"><span id="ustdShow"></span></div>
                                    {{-- bnb--}}
                                    <div id="eth" style="display: block;" class="tabcontent">
                                        <div class="form-layout">
                                            <div class="input-control">
                                                <span>Địa chỉ nhận BNB</span>
                                                <input type="text" id="recipientAddressInput" placeholder="BNB Address">
                                            </div>
                                            <div class="input-control">
                                                <span>Số lượng BNB</span>
                                                <input type="number" id="amountInput" placeholder="Quantity">
                                            </div>
                                        </div>
                                    </div>
                                    {{--Token VH--}}
                                    <div id="usdt" class="tabcontent">
                                        <div class="form-layout">
                                            <div class="input-control">
                                                <span>Địa chỉ nhận VH</span>
                                                <input type="text" id="recipientAddress" placeholder="VH Address">
                                            </div>
                                            <div class="input-control">
                                                <span>Số lượng VH</span>
                                                <input type="number" id="usdtAmount" placeholder="Quantity">
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

{{--                                    <label for="recipientAddress">Recipient's Ethereum Address:</label>--}}
{{--                                    <input type="text" id="recipientAddress" placeholder="0xRecipientEthereumAddress">--}}

{{--                                    <label for="usdtAmount">Quantity of USDT:</label>--}}
{{--                                    <input type="text" id="usdtAmount" placeholder="Enter quantity in USDT">--}}

                                    <div class="d-flex gap-lg-2 mt-2">
                                        @if(empty($eth_address))
                                            <button class="connect-metamask" id="connectButton">Connect metamask
                                            </button>
                                        @else
                                            <button class="connect-metamask" id="sendBnb">send</button>
                                            <button class="connect-metamask" id="sendUSDTButton">Send USDT</button>
                                        @endif
                                    </div>
                                    {{--                                    <button class="connect-metamask" id="connectButton">--}}
                                    {{--                                            Connect metamask--}}
                                    {{--                                            Buy now--}}
                                    {{--                                        </button>--}}
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
    {{--transaction--}}
    <script>
        if (typeof window.ethereum !== 'undefined') {
            window.web3 = new Web3(window.ethereum);

            // Request account access
            window.ethereum.enable()
                .then(function (accounts) {
                    if (accounts.length === 0) {
                        console.error('User not logged in. Please log in to MetaMask.');
                        // You may want to redirect the user to a login page or display a message.
                    } else {
                        console.log('User logged in:', accounts[0]);
                        // Continue with the application logic or call the sendBNB function, etc.
                    }
                })
                .catch(function (error) {
                    console.error('Error connecting to MetaMask:', error);
                    // Handle the error (display a message to the user, etc.)
                });
        } else {
            document.getElementById('connectButton').addEventListener('click', function () {
                alert('Hãy cài đặt ứng dụng metamask trên trình duyệt này !');
            })
        }

        // function to send BNB

        async function sendBNB(toAddress, amount) {
            const accounts = await window.web3.eth.getAccounts();

            const transactionParameters = {
                to: toAddress,
                value: window.web3.utils.toHex(window.web3.utils.toWei(amount, 'ether')),
                // gas: '0', // adjust gas limit accordingly
                // gasPrice: '0', // adjust gas price accordingly
                gasLimit: '0x5028', // Customizable by the user during MetaMask confirmation.
                maxPriorityFeePerGas: '0x3b9aca00', // Customizable by the user during MetaMask confirmation.
                maxFeePerGas: '0x2540be400', // Customizable by the user during MetaMask confirmation.
                from: accounts[0],
            };

            try {
                const transactionHash = await window.web3.eth.sendTransaction(transactionParameters);
                console.log('Transaction Hash:', transactionHash);
            } catch (error) {
                console.error('Transaction Error:', error);
            }
        }

        document.getElementById('sendBnb').addEventListener('click', function () {
            // Get the recipient address and amount from the input fields
            const recipientAddress = document.getElementById('recipientAddressInput').value;
            const amount = document.getElementById('amountInput').value;

            // Check if the recipient address and amount are valid
            if (!recipientAddress || isNaN(amount) || amount <= 0) {
                console.error('Invalid recipient address or amount');
                return;
            }

            // Replace the amount with the user-entered value
            sendBNB(recipientAddress, amount);
        });
    </script>
    {{--login--}}
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
            document.getElementById('account_balance').innerHTML = 'BNB: ' + account_balance;
        }

        displayInfo();
        checkIfEverythingIsCorrect();
        startApp();

        async function signData() {
            const web3 = new Web3(window.ethereum);

            // Get all account addresses user selected through checkbox while connecting
            const accounts = await window.ethereum.request({method: 'eth_accounts'});
            const current_account_with_correct_checksum = Web3.utils.toChecksumAddress(accounts[0]);

            try {
                let signature = await web3.eth.personal.sign(MESSAGE_TO_SIGN, current_account_with_correct_checksum); // you can pass the third parameter (password)
                const ethAddressThatSignedMessage = await web3.eth.personal.ecRecover(MESSAGE_TO_SIGN, signature);
                if (current_account_with_correct_checksum != Web3.utils.toChecksumAddress(ethAddressThatSignedMessage)) {
                    return;
                }
                sendLoginRequest(current_account_with_correct_checksum, MESSAGE_TO_SIGN, signature);
                hideModal();
            } catch (error) {
                hideModal();
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
                connectButton.onclick = connect;
                startApp();
            } else {
                // informUserToInstallMetaMask();
            }
            // hideSpinner();
        }

        // function informUserToInstallMetaMask() {
        //     connectButton.innerHTML = "Install MetaMask!";
        //     connectButton.onclick = () => {
        //         window.open('https://metamask.io', '_blank');
        //     };
        //     document.getElementById('install_metamask_overlay').style.display = "block";
        //     document.getElementById('login_wrapper').style.display = "none";
        // }

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

        // function showSpinner() {
        //     spinner_on_white.style.display = "block";
        // }
        //
        // function hideSpinner() {
        //     spinner_on_white.style.display = "none";
        // }

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

        // showSpinner();

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
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            // ustdShow
            // Request MetaMask to enable the Ethereum provider
            await window.ethereum.enable();

            // Create a Web3 instance
            const web3 = new Web3(window.ethereum);

            // USDT contract address on the Ethereum mainnet
            const usdtContractAddress = '0xFfB3827A67820332c8c5E6eED8EE9718e5E3E5ab';

            // USDT contract ABI (Application Binary Interface)
            const usdtContractABI = [
                // Include the relevant contract methods and events here
                {
                    "constant": true,
                    "inputs": [{"name": "_owner", "type": "address"}],
                    "name": "balanceOf",
                    "outputs": [{"name": "balance", "type": "uint256"}],
                    "type": "function"
                }
            ];

            // Create a contract instance
            const usdtContract = new web3.eth.Contract(usdtContractABI, usdtContractAddress);

            // Ethereum address to check the USDT balance
            const addressToCheck = '0x86f5Ad2584f9f5979c831a66688D2058c653ca03';

            // Get USDT balance for the specified address
            const usdtBalance = await usdtContract.methods.balanceOf(addressToCheck).call();
            document.getElementById('ustdShow').innerHTML = 'Token: ' + usdtBalance + ' VH';
            console.log(`USDT Balance for ${addressToCheck}: ${usdtBalance}`);
        });

        document.getElementById('sendUSDTButton').addEventListener('click', async (toAddress, amount) => {
            await window.ethereum.enable();

            // Create a Web3 instance
            const web3 = new Web3(window.ethereum);

            // USDT contract address on the Ethereum mainnet
            const usdtContractAddress = '0xFfB3827A67820332c8c5E6eED8EE9718e5E3E5ab';

            // USDT contract ABI
            const usdtContractABI = [
                // Include the relevant contract methods and events here
                {
                    "constant": false,
                    "inputs": [
                        {"name": "_to", "type": "address"},
                        {"name": "_value", "type": "uint256"}
                    ],
                    "name": "transfer",
                    "outputs": [{"name": "", "type": "bool"}],
                    "type": "function"
                }
            ];


            // Create a contract instance
            const usdtContract = new web3.eth.Contract(usdtContractABI, usdtContractAddress);

            // Sender's Ethereum address (MetaMask address)
            const senderAddress = (await web3.eth.getAccounts())[0];

            const recipientAddress = document.getElementById('recipientAddress').value;

            // Quantity of USDT to send (in wei)
            const usdtAmount = document.getElementById('usdtAmount').value;
            const usdtAmountWei = web3.utils.toWei(usdtAmount, 'ether');
            // Send USDT transaction
            try {
                const transactionReceipt = await usdtContract.methods.transfer(recipientAddress, usdtAmountWei).send({from: senderAddress});
                console.log('Transaction Receipt:', transactionReceipt);
                alert('VH sent successfully!');
            } catch (error) {
                console.error('Error sending VH:', error.message);
                alert('Error sending VH. Please check the console for details.');
            }
        });
    </script>
    </body>
@endsection
