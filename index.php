<?
include $_SERVER['DOCUMENT_ROOT'].'/controllers/controller.php';
$templates->head("Squads");
$templates->links_head(["css"=>[
    'chunks-main',
    'advantages-section',
    'our-partners',
    'what-multisig',
    'features',
    'investor',
    'ecosystem-feedback',
]])?>

<!-- header -->
<?$templates->load('header')?>

<!-- Main screen -->
<section class="section-main">
    <div class="container-xl">
        <div class="grid-container">

            <div class="design-elements">
                <i class="icon plus icon-top-left"></i>
                <i class="icon plus icon-top-right"></i>
                <i class="icon plus icon-bottom-left"></i>
                <i class="icon plus icon-bottom-right"></i>
                <i class="icon graph-mark-vertical"></i>
            </div>

            <div class="title-label">
                <img src="/img/squads-text-white.svg" alt="logo">
            </div>

            <div class="rhomb-container rhomb-container_one">
                <div class="box-ratio">
                    <div class="content">
                        <div class="row-content">
                            <div class="top-col">
                                <p class="text-desc">Squads Protocol: the multisig standard you were looking for on Solana</p>
                            </div>
                            <div class="bottom-col">
                                <p class="text-secondary">Securely manage your treasury, program upgrades, and tokens with your Squad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="https://v3.squads.so/" target="_blank" class="rhomb-container rhomb-container_two">
                <div class="box-ratio">
                    <div class="content">
                        <div class="row-content">
                            <div class="top-col">
                                <p class="text-index">Launch App</p>
                            </div>
                            <div class="bottom-col">
                                <i class="icon arrow-diagonally"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>


<!-- advantages-section -->
<section class="advantages-section">
    <div class="container-lg">
        <div class="row-content">
            <div class="design-elements">
                <i class="icon plus icon-bottom-left"></i>
                <i class="icon plus icon-bottom-right"></i>
                <i class="icon graph-mark-gorizontal"></i>
            </div>
            <div class="top-col">
                <div class="grid-container">
                    <div class="item-col item-col_one">
                        <p class="text"><span class="count">2500+</span> multisigs deployed</p>
                    </div>
                    <div class="item-col item-col_two">
                        <p class="text">Live and tested on Solana mainnet since February 2022</p>
                    </div>
                    <div class="item-col item-col_three">
                        <p class="text">audited by OtterSec and Bramah Systems</p>
                        <div class="item-col_logo">
                            <img src="/img/hero-logo-1.svg" alt="logo">
                            <img src="/img/hero-logo-2.svg" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-col">
                <embed src="/img/preview-image-1.svg?v=2.136" alt="img" class="preview-photo">
            </div>
        </div>
    </div>
</section>

<!-- Our composable partners -->
<section class="section-our-partners">
    <div class="container-xl">
        <div class="grid-container">
            <div class="col-heading">
                <h2 class="title">Our composable partners</h2>
            </div>
            <div class="col-logo">
                <a href="https://www.cardinal.so/" target="_blank">
                    <img src="/img/logo-partner-1.svg?v=2.136" alt="logo">
                </a>
                <a href="https://www.dialect.to/" target="_blank">
                    <img src="/img/logo-partner-2.svg" alt="logo">
                </a>
                <a href="https://katana.so/" target="_blank">
                    <img src="/img/logo-partner-3.svg" alt="logo">
                </a>
                <a href="https://raydium.io/" target="_blank">
                    <img src="/img/logo-partner-4.svg" alt="logo">
                </a>
                <a href="https://bonfida.org/" target="_blank">
                    <img src="/img/logo-partner-5.svg" alt="logo">
                </a>
                <a href="https://pyth.network/" target="_blank">
                    <img src="/img/logo-partner-6.svg" alt="logo">
                </a>
                <a href="https://magiceden.io/" target="_blank">
                    <img src="/img/logo-partner-7.svg" alt="logo">
                </a>
            </div>
        </div>
        <div class="design-elements">
            <i class="icon plus icon-bottom-left"></i>
            <i class="icon plus icon-bottom-right"></i>
        </div>
    </div>
</section>


<!-- What is a multisig? -->
<section class="what-multisig" id="section-multisig">
    <div class="container-xl">
        <div class="grid-container">
            <div class="title-label">
                <img src="/img/text-multisig.svg" alt="logo">
            </div>
            <div class="left-col">
                <a href="https://v3.squads.so/" target="_blank" class="rhomb-container rhomb-container_two">
                    <div class="box-ratio">
                        <div class="content">
                            <div class="row-content">
                                <div class="top-col">
                                    <p class="text-index">Launch App</p>
                                </div>
                                <div class="bottom-col">
                                    <i class="icon arrow-diagonally"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="right-col">
                <ul class="list-desc">
                    <li class="list-desc_item">
                       <div class="heading-line">
                           <span class="count">01</span>
                           <div class="line"></div>
                           <div class="square"></div>
                       </div>
                       <div class="row-content">
                           <p class="head">Multi-signature</p>
                           <p class="desc">A multisig requires multiple digital signatures in order to approve transactions. This is opposed to individual web3 wallets, which only require one signature. </p>
                       </div>
                   </li>
                    <li class="list-desc_item">
                       <div class="heading-line">
                           <span class="count">02</span>
                           <div class="line"></div>
                           <div class="square"></div>
                       </div>
                       <div class="row-content">
                           <p class="head">Security</p>
                           <p class="desc">Multisigs spread the attack vector necessary for your assets to be compromised. By requiring confirmations from multiple private keys, a single point of failure is eliminated.</p>
                       </div>
                   </li>
                    <li class="list-desc_item">
                       <div class="heading-line">
                           <span class="count">03</span>
                           <div class="line"></div>
                           <div class="square"></div>
                       </div>
                       <div class="row-content">
                           <p class="head">Collective Ownership</p>
                           <p class="desc">Multisigs allow teams to own and manage their on-chain assets together. You get to choose who is on your multisig.</p>
                       </div>
                   </li>
                    <li class="list-desc_item">
                       <div class="heading-line">
                           <span class="count">04</span>
                           <div class="line"></div>
                           <div class="square"></div>
                       </div>
                       <div class="row-content">
                           <p class="head">Self-Custody</p>
                           <p class="desc">Your on-chain assets are always in your team’s control. By securing them in a multisig, you forego the risk of centralized entities losing your funds.</p>
                       </div>
                   </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- Features -->
<section class="section-features" id="section-features">
    <div class="container-xl">
        <div class="row-heading">
            <h2 class="title">Features</h2>
        </div>
        <div class="grid-container">

            <div class="item-card item-card_one">
                <div class="design-elements">
                    <span class="count">01</span>
                    <i class="icon plus icon-top-right"></i>
                    <i class="icon square icon-bottom-left"></i>
                    <i class="icon square icon-bottom-right"></i>
                </div>
                <div class="rhomb-background">
                    <img src="/img/features-rhomb-1.svg" alt="vector">
                </div>
                <div class="row-content">
                    <div class="block-text">
                        <p class="heading">Multisig wallet</p>
                        <p class="desc" style="max-width: 260px">Spin up a multi-signature wallet on Solana in a few clicks. Secure, powerful and user-friendly.</p>
                    </div>

                    <picture>
                        <source srcset="/img/f_1.svg?v=1.129" media="(max-width: 767px)" class="features-screen">
                        <img src="/img/f_1.svg?v=1.129" alt="image" class="features-screen" style="max-height: 294px">
                    </picture>
                </div>
            </div>

            <div class="item-card item-card_two">
                <div class="design-elements">
                    <span class="count">02</span>
                    <i class="icon plus icon-top-right"></i>
                    <i class="icon square icon-bottom-left"></i>
                    <i class="icon square icon-bottom-right"></i>
                </div>
                <div class="rhomb-background">
                    <img src="/img/features-rhomb-2.svg" alt="vector">
                </div>
                <div class="row-content">
                    <div class="block-text">
                        <p class="heading">Treasury management</p>
                        <p class="desc" style="max-width: 310px">Securely store your treasury in the multisig vault. You can do swaps, invest in yield generating strategies, borrow, lend, stream, and vest tokens directly from the Squads interface.</p>
                    </div>
                    <picture>
                        <source srcset="/img/f_2.svg?v=1.129" media="(max-width: 767px)" class="features-screen">
                        <img src="/img/f_2.svg?v=1.129" alt="image" class="features-screen" style="max-height: 346px">
                    </picture>

                </div>
            </div>

            <div class="item-card item-card_three">
                <div class="design-elements">
                    <span class="count">03</span>
                    <i class="icon plus icon-top-right"></i>
                    <i class="icon square icon-bottom-left"></i>
                    <i class="icon square icon-bottom-right"></i>
                </div>
                <div class="rhomb-background">
                    <img src="/img/features-rhomb-3.svg" alt="vector">
                </div>
                <div class="row-content">
                    <div class="block-text">
                        <p class="heading">Program management</p>
                        <p class="desc" style="max-width: 290px">Upgrade Solana programs with a multisig instead of relying on a single key. View upgrade history, change upgrade authority, and manage program upgrades together with your Squad.</p>
                    </div>
                    <picture>
                        <source srcset="/img/f_3.svg?v=1.130" media="(max-width: 767px)" class="features-screen">
                        <img src="/img/f_3.svg?v=1.130" alt="image" class="features-screen" style="max-height: 323px">
                    </picture>
                </div>
            </div>

            <div class="item-card item-card_four">
                <div class="design-elements">
                    <span class="count">04</span>
                    <i class="icon plus icon-top-right"></i>
                    <i class="icon square icon-bottom-left"></i>
                    <i class="icon square icon-bottom-right"></i>
                </div>
                <div class="rhomb-background">
                    <img src="/img/features-rhomb-4.svg" alt="vector">
                </div>
                <div class="row-content">
                    <div class="block-text">
                        <p class="heading">TX Builder</p>
                        <p class="desc" style="max-width: 310px">Create custom transactions and interact with Anchor and pure Rust Solana programs directly from your Squad. Populate custom transactions with arbitrary instructions and approve them together.</p>
                    </div>
                    <picture>
                        <source srcset="/img/features-screen-4_mob.svg?v=1.133" media="(max-width: 767px)" class="features-screen">
                        <img src="/img/features-screen-4_mob.svg?v=1.133" alt="image" class="features-screen" style="max-height: 330px">
                    </picture>
                </div>
            </div>

            <div class="item-card white-card">
                <div class="design-elements">
                    <i class="icon plus icon-top-right"></i>
                    <i class="icon square icon-bottom-left"></i>
                    <i class="icon square icon-bottom-right"></i>
                </div>
                <div class="row-content">

                    <div class="rhomb-container">
                        <span class="count">05</span>
                        <div class="box-ratio">
                            <div class="content">
                                <div class="row-content">
                                    <div class="top-col">
                                        <p class="text-index">Buy NFTs from Magic Eden together</p>
                                    </div>
                                    <div class="bottom-col">
                                        <img src="/img/features-logo-1.svg" alt="logo" class="features-logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rhomb-container">
                        <span class="count">06</span>
                        <div class="box-ratio">
                            <div class="content">
                                <div class="row-content">
                                    <div class="top-col">
                                        <p class="text-index">Link your Twitter identity with Cardinal</p>
                                    </div>
                                    <div class="bottom-col">
                                        <img src="/img/features-logo-2.svg" alt="logo" class="features-logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rhomb-container">
                        <span class="count">07</span>
                        <div class="box-ratio">
                            <div class="content">
                                <div class="row-content">
                                    <div class="top-col">
                                        <p class="text-index">Send assets to Bonfida’s .sol domains</p>
                                    </div>
                                    <div class="bottom-col">
                                        <img src="/img/features-logo-3.svg" alt="logo" class="features-logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rhomb-container">
                        <span class="count">08</span>
                        <div class="box-ratio">
                            <div class="content">
                                <div class="row-content">
                                    <div class="top-col">
                                        <p class="text-index">Keep up with your Squad’s activity with Dialect notifications</p>
                                    </div>
                                    <div class="bottom-col">
                                        <img src="/img/features-logo-4.svg" alt="logo" class="features-logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rhomb-container">
                        <span class="count">09</span>
                        <div class="box-ratio">
                            <div class="content">
                                <div class="row-content">
                                    <div class="top-col">
                                        <p class="text-index" style="max-width: 178px">Swap tokens with Jupiter as a Squad</p>
                                    </div>
                                    <div class="bottom-col">
                                        <img src="/img/features-logo-5.svg" alt="logo" class="features-logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- ************************ empty block ************************ -->

                    <div class="rhomb-container mob-hidden">
                        <span class="count"></span>
                        <div class="box-ratio">
                            <div class="content">
                                <div class="row-content">
                                    <div class="top-col">
                                        <p class="text-index empty" style="max-width: 178px">Loading...</p>
                                    </div>
                                    <div class="bottom-col">
<!--                                        <img src="/img/features-logo-4.svg" alt="logo" class="features-logo">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rhomb-container mob-hidden">
                        <span class="count"></span>
                        <div class="box-ratio">
                            <div class="content">
                                <div class="row-content">
                                    <div class="top-col">
                                        <p class="text-index empty" style="max-width: 178px">Loading...</p>
                                    </div>
                                    <div class="bottom-col">
<!--                                        <img src="/img/features-logo-4.svg" alt="logo" class="features-logo">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rhomb-container mob-hidden">
                        <span class="count"></span>
                        <div class="box-ratio">
                            <div class="content">
                                <div class="row-content">
                                    <div class="top-col">
                                        <p class="text-index empty" style="max-width: 178px">Loading...</p>
                                    </div>
                                    <div class="bottom-col">
<!--                                        <img src="/img/features-logo-4.svg" alt="logo" class="features-logo">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>


<!-- Meet the investor Squad -->
<!--<section class="section-investor">-->
<!--    <div class="container-xl">-->
<!--        <div class="grid-container">-->
<!--            <div class="col-heading">-->
<!--                <h2 class="title">Meet the <br> investor Squad</h2>-->
<!--            </div>-->
<!--            <div class="col-logo">-->
<!--                <img src="/img/investor-logo-1.svg" alt="logo">-->
<!--                <img src="/img/investor-logo-2.svg" alt="logo">-->
<!--                <img src="/img/investor-logo-3.svg" alt="logo">-->
<!--                <img src="/img/investor-logo-4.svg" alt="logo">-->
<!--                <img src="/img/investor-logo-5.svg" alt="logo">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="design-elements">-->
<!--            <i class="icon plus icon-bottom-left"></i>-->
<!--            <i class="icon plus icon-bottom-right"></i>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<!-- Ecosystem feedback -->
<section class="ecosystem-feedback">
    <div class="container-xl">
        <div class="grid-container">
            <div class="col-heading">
                <h2 class="title">Ecosystem <br>feedback</h2>
            </div>

            <div class="container-carousel">

                <div class="splide splide-feedback">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <!-- feedback -->
                                <div class="item">
                                    <div class="header">
                                        <div class="avatar">
                                            <img src="/img/avatar-1.png" alt="avatar">
                                        </div>
                                        <div class="name-user">
                                            <p class="name">Kash Dhanda</p>
                                            <p class="nickname">@kashdhanda</p>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="text-md">DAMN! <br>Squads Protocol v3 is bananas.</p>
                                        <p class="text-md">- ~$0.10 deployment cost <br> - Gorgeous new UX/UI (incl mobile!) <br> - Integrations with <b>Dialect, Bonfida, MagicEden, Cardinal & Pyth</b>
                                            <br>- Open source + <b>Anchor</b> verified</p>
                                        <p class="text-md">Huge shout out to Simkin Stepan and the team!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <!-- feedback -->
                                <div class="item">
                                    <div class="header">
                                        <div class="avatar">
                                            <img src="/img/avatar-2.png" alt="avatar">
                                        </div>
                                        <div class="name-user">
                                            <p class="name">Mike Dudas (🏌️‍♂️, ⛳️)</p>
                                            <p class="nickname">@mdudas</p>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="text-md">Love to see the <b>Solana</b> ecosystem maturing via impressive products like <b>Squads Protocol.</b></p>
                                        <p class="text-md">This ecosystem growth is happening extremely fast on any time scale relative to historical blockchain app & infra development.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <!-- feedback -->
                                <div class="item">
                                    <div class="header">
                                        <div class="avatar">
                                            <img src="/img/avatar-3.png" alt="avatar">
                                        </div>
                                        <div class="name-user">
                                            <p class="name">edgar</p>
                                            <p class="nickname">@edgarpavlovsky</p>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="text-md">4/ The v3 product suite is kind of ridiculous. On top of basic multisig functionality sits:</p>
                                        <p class="text-md">👉 A custom transaction builder <br>👉 Program management <br>👉 A suite of third-party integrations</p>
                                        <p class="text-md">I don't know how else to say it: it's everything you need, and all the things you want.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <!-- feedback -->
                                <div class="item">
                                    <div class="header">
                                        <div class="avatar">
                                            <img src="/img/avatar-4.png" alt="avatar">
                                        </div>
                                        <div class="name-user">
                                            <p class="name">PsyDO</p>
                                            <p class="nickname">@PsyOptions</p>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="text-md">Excited for Simkin Stepan and team! We’re excited to have had early access and are excited to see an ecosystem of products flourish using this new standard.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <!-- feedback -->
                                <div class="item">
                                    <div class="header">
                                        <div class="avatar">
                                            <img src="/img/avatar-5.png" alt="avatar">
                                        </div>
                                        <div class="name-user">
                                            <p class="name">buffalu 🤖💦</p>
                                            <p class="nickname">@buffalu__</p>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="text-md">We're super excited to use this!!! huge step forward for multisigs. check out that sexy UI too!</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="splide__arrows control-panel-btn">
                        <button type="button" class="splide__arrows btn splide__arrow--prev"><i class="icon arrow-left"></i></button>
                        <button type="button" class="splide__arrows btn splide__arrow--next"><i class="icon arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?$templates->load('footer')?>



<!-- Splide -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.4.2/dist/js/splide-extension-auto-scroll.min.js"></script>

<?$templates->script_head(["js"=>['ecosystem-feedback']])?>
