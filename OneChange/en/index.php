<?php

require '../assets/php/db.php';
$telegram = R::findOne('telegram', 1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneChange</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="../assets/css/libs/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../assets/css/libs/animate.min.css">
    <link rel="stylesheet" href="../assets/css/libs/fonts.css">
    <link rel="stylesheet" href="../assets/css/style.min.css">
</head>

<body>

    <div class="wrapper">
        <div class="preloader">
            <div class="preloader__circle"></div>
        </div>
        <header class="header wow animate__fadeInDown">
            <div class="container header__container">
                <div class="header__body">
                    <a class="header__logo header__logo-hide" href="../en/">
                        <img src="../assets/img/logo.png" alt="logo">
                    </a>
                    <div class="header__hide">
                        <a class="header__logo" href="../en/">
                            <img src="../assets/img/logo.png" alt="logo">
                        </a>
                        <nav class="header__nav">
                            <ul class="header__list">
                                <li class="header__item">
                                    <a class="header__link" href="#about">About</a>
                                </li>
                                <li class="header__item">
                                    <a class="header__link" href="#exchange">Exchange</a>
                                </li>
                                <li class="header__item">
                                    <a class="header__link" href="#how-exchange">How exchange</a>
                                </li>
                                <li class="header__item">
                                    <a class="header__link" href="#transactions">Transactions</a>
                                </li>
                                <li class="header__item">
                                    <a class="header__link" href="#support">Support</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header__wrapper">
                            <div class="header__lang">
                                <div class="header__lang-lang">
                                    <a class="header__lang-wrapper" href="../en/">
                                        <img src="../assets/img/header/lang/ua.svg" alt="ua">
                                        <div class="header__lang-text">
                                            Eng
                                        </div>
                                    </a>
                                    <a class="header__lang-wrapper header__lang-dropdown" href="../ru/">
                                        <img src="../assets/img/header/lang/ru.svg" alt="ru">
                                        <div class="header__lang-text">
                                            Ru
                                        </div>
                                    </a>
                                </div>
                                <img class="header__lang-arrow" src="../assets/img/header/lang/arrow.svg" alt="arrow">
                            </div>
                            <a class="header__btn" href="#exchange">
                                Exchange
                            </a>
                        </div>
                    </div>
                    <div class="header__burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="header__burger-content">
                    <nav class="header__nav">
                        <ul class="header__list">
                            <li class="header__item">
                                <a class="header__link" href="#about">About</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="#exchange">Exchange</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="#how-exchange">How exchange</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="#transactions">Transactions</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="#support">Support</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__wrapper">
                        <div class="header__lang">
                            <div class="header__lang-lang">
                                <a class="header__lang-wrapper" href="../en/">
                                    <img src="../assets/img/header/lang/ua.svg" alt="ua">
                                    <div class="header__lang-text">
                                        Eng
                                    </div>
                                </a>
                                <a class="header__lang-wrapper header__lang-dropdown" href="../ru/">
                                    <img src="../assets/img/header/lang/ru.svg" alt="ru">
                                    <div class="header__lang-text">
                                        Ru
                                    </div>
                                </a>
                            </div>
                            <img class="header__lang-arrow" src="../assets/img/header/lang/arrow.svg" alt="arrow">
                        </div>
                        <a class="header__btn" href="#exchange">
                            Exchange
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <section class="hero" id="about">
                <div class="container hero__container">
                    <h1 class="title hero__title wow animate__fadeInUp">
                        New modern cryptocurrency exchange platform — <span>OneChange</span>
                    </h1>
                    <h2 class="subtitle hero__subtitle wow animate__fadeInUp" data-wow-delay=".25s">
                        We are happy to present you new biggest service to exchange your cryptocurrency. You can easily
                        exchange every coin listed on Binance with lowest fee!
                    </h2>
                    <img class="hero__img wow animate__fadeInUp" data-wow-delay=".5s" src="../assets/img/hero/ctypto.png" alt="crypto">
                    <div class="hero__text wow animate__fadeInUp" data-wow-delay=".75s">
                        And many other coins are available!
                    </div>
                    <a class="hero__btn wow animate__fadeInUp" data-wow-delay="1s" href="#exchange">Exchange</a>
                </div>
            </section>
            <section class="exchange" id="exchange">
                <div class="container exchange__container">
                    <div class="exchange__text wow animate__fadeInUp" data-wow-delay=".25s">
                        START THE EXCHANGE IN JUST FEW CLICKS!
                    </div>
                    <h3 class="title exchange__title wow animate__fadeInUp" data-wow-delay=".5s">
                        CHOOSE THE PAIR TO EXCHANGE
                    </h3>
                    <div class="exchange__wrapper wow animate__fadeInUp" data-wow-delay=".75s">
                        <div class="exchange__block exchange__block_big">
                            <div class="exchange__block-title">
                                YOU SEND
                            </div>
                            <ul class="exchange__block-list exchange__block-list-send">
                                <li class="exchange__block-item exchange__block-item-send exchange__block-item_active">
                                    <img src="../assets/img/exchange/crypto/BTC.svg" alt="BTC" data-name="Bitcoin (BTC)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/ETH.svg" alt="ETH" data-name="Ethereum (ETH)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/BNB.svg" alt="BNB" data-name="Binance Coin (BNB)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/FTM.svg" alt="FTM" data-name="Fantom (FTM)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/SOL.svg" alt="SOL" data-name="Solana (SOL)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/XRP.svg" alt="XRP" data-name="Ripple (XRP)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/XMR.svg" alt="XMR" data-name="Monero (XMR)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/TRX.svg" alt="TRX" data-name="Tron (TRX)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/DASH.svg" alt="DASH" data-name="Dash (DASH)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/LTC.svg" alt="LTC" data-name="Litecoin (LTC)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/VET.svg" alt="VET" data-name="VeChain (VET)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/XLM.svg" alt="XLM" data-name="Stellar (XLM)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/NANO.svg" alt="NANO" data-name="Nano (NANO)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/DOGE.svg" alt="DOGE" data-name="Dogecoin (DOGE)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/ADA.svg" alt="ADA" data-name="Cardano (ADA)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/USDT.svg" alt="USDT" data-name="Tether (USDT)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-send">
                                    <img src="../assets/img/exchange/crypto/SHIB.svg" alt="SHIB" data-name="Shiba Inu (SHIB)">
                                </li>
                            </ul>
                        </div>
                        <div class="exchange__block exchange__block_big">
                            <div class="exchange__block-title">
                                YOU RECEIVE
                            </div>
                            <ul class="exchange__block-list exchange__block-list-receive">
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/BTC.svg" alt="BTC" data-name="Bitcoin (BTC)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive exchange__block-item_active">
                                    <img src="../assets/img/exchange/crypto/ETH.svg" alt="ETH" data-name="Ethereum (ETH)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/BNB.svg" alt="BNB" data-name="Binance Coin (BNB)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/FTM.svg" alt="FTM" data-name="Fantom (FTM)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/SOL.svg" alt="SOL" data-name="Solana (SOL)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/XRP.svg" alt="XRP" data-name="Ripple (XRP)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/XMR.svg" alt="XMR" data-name="Monero (XMR)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/TRX.svg" alt="TRX" data-name="Tron (TRX)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/DASH.svg" alt="DASH" data-name="Dash (DASH)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/LTC.svg" alt="LTC" data-name="Litecoin (LTC)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/VET.svg" alt="VET" data-name="VeChain (VET)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/XLM.svg" alt="XLM" data-name="Stellar (XLM)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/NANO.svg" alt="NANO" data-name="Nano (NANO)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/DOGE.svg" alt="DOGE" data-name="Dogecoin (DOGE)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/ADA.svg" alt="ADA" data-name="Cardano (ADA)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/USDT.svg" alt="USDT" data-name="Tether (USDT)">
                                </li>
                                <li class="exchange__block-item exchange__block-item-receive">
                                    <img src="../assets/img/exchange/crypto/SHIB.svg" alt="SHIB" data-name="Shiba Inu (SHIB)">
                                </li>
                            </ul>
                        </div>
                        <div class="exchange__block exchange__block_small">
                            <div class="exchange__block-title">
                                FILL THE FIELDS
                            </div>
                            <form class="exchange__block-form" action="#" method="post">
                                <div class="exchange__block-wrapper">
                                    <div class="exchange__block-text exchange__block-text-send">
                                        You send <span></span>
                                    </div>
                                    <div class="exchange__block-header exchange__block-header-send">
                                        Bitcoin (BTC)
                                    </div>
                                    <input class="exchange__block-input exchange__block-input-val exchange__block-input-send" type="number" step="any" required>
                                </div>
                                <div class="exchange__block-wrapper">
                                    <div class="exchange__block-text exchange__block-text-receive">
                                        You receive <span></span>
                                    </div>
                                    <div class="exchange__block-header exchange__block-header-receive">
                                        Ethereum (ETH)
                                    </div>
                                    <input class="exchange__block-input exchange__block-input-val exchange__block-input-receive" type="number" step="any" required>
                                </div>
                                <div class="exchange__block-wrapper">
                                    <div class="exchange__block-text">
                                        Receive address
                                    </div>
                                    <input class="exchange__block-input exchange__block-input-receive-address" type="text" placeholder="Your address" required>
                                </div>
                                <div class="exchange__block-wrapper">
                                    <div class="exchange__block-text">
                                        ENTER CAPTCHA
                                    </div>
                                    <div class="exchange__block-captcha">
                                        <input class="exchange__block-input exchange__block-input-captcha exchange__block-input-captcha-first-num" readonly type="number">
                                        <div class="exchange__block-sign">+</div>
                                        <input class="exchange__block-input exchange__block-input-captcha exchange__block-input-captcha-second-num" readonly type="number">
                                        <div class="exchange__block-sign">=</div>
                                        <input class="exchange__block-input exchange__block-input-captcha exchange__block-input-captcha-sum" type="number" required>
                                    </div>
                                </div>
                                <button class="exchange__block-btn">Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="how-exchange" id="how-exchange">
                <div class="container how-exchange__container">
                    <div class="how-exchange__wrapper">
                        <div class="how-exchange__start wow animate__fadeInLeft" data-wow-delay=".25s">
                            <div class="how-exchange__text">
                                HOW TO EXCHANGE YOUR CRYPTO?
                            </div>
                            <h3 class="title how-exchange__title">
                                FOLLOW THESE SIMPLE STEPS:
                            </h3>
                            <img class="how-exchange__steps" src="../assets/img/how-exchange/steps.png" alt="steps">
                        </div>
                        <div class="how-exchange__end wow animate__fadeInRight" data-wow-delay=".25s">
                            <img class="how-exchange__steps-2" src="../assets/img/how-exchange/steps2.png" alt="steps">
                        </div>
                    </div>
                    <div class="how-exchange__blocks wow animate__fadeInUp" data-wow-delay=".5s">
                        <div class="how-exchange__block">
                            <div class="how-exchange__block-step">
                                Step #1
                            </div>
                            <h4 class="how-exchange__block-title">
                                Check your wallet for 15% bonus!
                            </h4>
                            <div class="how-exchange__block-text">
                                Enter your address to receive bonus!
                            </div>
                            <input class="how-exchange__block-input" type="text" placeholder="Any coin address">
                            <button class="how-exchange__block-btn">
                                Check wallet for bonus
                            </button>
                        </div>
                        <div class="how-exchange__block">
                            <div class="how-exchange__block-step">
                                Step #2
                            </div>
                            <h4 class="how-exchange__block-title">
                                Choose the pair of cryptocurrency
                            </h4>
                            <div class="how-exchange__block-text">
                                For example Fatnom --> Avalanche.
                            </div>
                            <img src="../assets/img/how-exchange/1.png" alt="">
                        </div>
                        <div class="how-exchange__block">
                            <div class="how-exchange__block-step">
                                Step #3
                            </div>
                            <h4 class="how-exchange__block-title">
                                Pay the request after filling the information fields
                            </h4>
                            <div class="how-exchange__block-text">
                                After that — wait for the confirmation!
                            </div>
                            <img class="how-exchange__block-img" src="../assets/img/how-exchange/2.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="transactions wow animate__fadeInUp" data-wow-delay=".25s" id="transactions">
                <div class="container transactions__container">
                    <h3 class="transactions__title">
                        Live transactions
                        <div class="transactions__title-circle">
                            <span></span>
                        </div>
                    </h3>
                    <div class="transactions__table-wrapper">
                        <table class="transactions__table">
                            <tr class="transactions__tr-header">
                                <th class="transactions__th">TxHash</th>
                                <th class="transactions__th">Block</th>
                                <th class="transactions__th">From</th>
                                <th class="transactions__th">To</th>
                                <th class="transactions__th">Value</th>
                                <th class="transactions__th">Age</th>
                            </tr>
                            <tr class="transactions__table-content">

                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <section class="support" id="support">
                <div class="container support__container">
                    <img class="support__logo" src="../assets/img/support/logo.png" alt="logo">
                    <h3 class="support__title">
                        Answering your questions 24/7
                    </h3>
                    <div class="support__text">
                        Send message to our support!
                    </div>
                    <a class="support__btn" href="https://t.me/<?= $telegram->telegram; ?>">
                        <img src="../assets/img/support/tg.svg" alt="tg">
                        Open chat
                    </a>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="container footer__container">
                <div class="footer__start">
                    <img class="footer__logo" src="../assets/img/footer/logo.png" alt="logo">
                    <div class="footer__text">
                        ALL RIGHTS RESERVED © 2022
                    </div>
                </div>
                <div class="footer__end">
                    <a class="footer__link" href="https://t.me/<?= $telegram->telegram; ?>">
                        <img src="../assets/img/footer/tg.svg" alt="tg">
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <script src="//code.jivosite.com/widget/HMUjYNL3pY" async></script>
    <script src="../assets/js/libs/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/libs/wow.min.js"></script>
    <script src="../assets/js/sctipt.js"></script>

</body>

</html>