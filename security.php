<?
include $_SERVER['DOCUMENT_ROOT'].'/controllers/controller.php';
$templates->head("Security");
$templates->links_head(["css"=>['security']])?>

<!-- header -->
<?$templates->load('header')?>

<div id="app">
    <section class="section-main">
        <div class="container-xl">
            <div class="grid-container">
                <div class="heading-text">
                    <h1>Security</h1>
                    <p class="text-desc">Security is of course our top priority, so here are all the things we do to ensure that Squads is the most secure multisig standard on Solana</p>
                </div>
                <div class="design-elements">
                    <i class="icon plus icon-top-left"></i>
                    <i class="icon plus icon-top-right"></i>
                    <i class="icon plus icon-bottom-left"></i>
                    <i class="icon plus icon-bottom-right"></i>
                    <i class="icon graph-mark-vertical"></i>
                </div>
                <div class="title-label">
                    <img src="/img/security-text-white.svg" alt="logo">
                </div>
            </div>
        </div>
    </section>

    <section class="section-grid-advantages">
        <div class="container-xl">
            <div class="grid-container">

                <div class="item-adv">
                    <div class="row-content">
                        <div class="block-text">
                            <p class="heading">Multiple Independent Audits</p>
                            <p class="desc" style="max-width: 300px">We work with some of the best security audit firms in the space.</p>
                        </div>
                        <div class="img-block" style="max-width: none; position: relative; right: auto; width: auto">
                            <img src="/img/security/background-advantages-block_1.svg" alt="img">
                            <img src="/img/security/background-advantages-block_1_2.svg" alt="img">
                        </div>
                    </div>
                    <div class="design-elements">
                        <i class="icon square icon-top-left"></i>
                        <i class="icon square icon-top-right"></i>
                        <i class="icon square icon-bottom-left"></i>
                        <i class="icon square icon-bottom-right"></i>
                    </div>
                </div>

                <div class="item-adv">
                    <div class="row-content">
                        <div class="block-text">
                            <p class="heading">Open <br>source</p>
                            <p class="desc" style="max-width: 230px">We strongly believe in the power of open source so we open sourced our codebase from day one. </p>
                        </div>
                        <div class="img-block">
                            <img src="/img/security/background-advantages-block_2.svg" alt="img">
                        </div>
                    </div>
                    <div class="design-elements">
                        <i class="icon plus icon-top-left"></i>
                        <i class="icon plus icon-top-right"></i>
                        <i class="icon square icon-bottom-left"></i>
                        <i class="icon square icon-bottom-right"></i>
                    </div>
                </div>

                <div class="item-adv">
                    <div class="row-content">
                        <div class="block-text">
                            <p class="heading">Anchor</p>
                            <p class="desc" style="max-width: 330px">Anchor is a development framework that allows to build more secure programs on Solana, developed by the great Armani Ferrante and the Coral team. Naturally, our on-chain program is written in Anchor and is Anchor verified (link). One simply does not fade Armani.</p>
                        </div>
                        <div class="img-block" style="max-width: 325px">
                            <img src="/img/security/background-advantages-block_3.svg" alt="img">
                        </div>
                    </div>
                    <div class="design-elements">
                        <i class="icon plus icon-top-left"></i>
                        <i class="icon plus icon-top-right"></i>
                        <i class="icon square icon-bottom-left"></i>
                        <i class="icon square icon-bottom-right"></i>
                    </div>
                </div>

                <div class="item-adv">
                    <div class="row-content">
                        <div class="block-text">
                            <p class="heading">Peer-reviewed</p>
                            <p class="desc" style="max-width: 313px">We purposely made our on-chain codebase minimal to make share that peer reviews were easy and accessible. Thus, our on-chain code is regularly being peer reviewed by the established teams in the Solana ecosystem.</p>
                        </div>
                        <div class="img-block" style="max-width: 300px">
                            <img src="/img/security/background-advantages-block_4.svg" alt="img">
                        </div>
                    </div>
                    <div class="design-elements">
                        <i class="icon plus icon-top-left"></i>
                        <i class="icon plus icon-top-right"></i>
                        <i class="icon square icon-bottom-left"></i>
                        <i class="icon square icon-bottom-right"></i>
                    </div>
                </div>

                <div class="item-adv">
                    <div class="row-content">
                        <div class="block-text">
                            <p class="heading">On-going security checks</p>
                            <p class="desc" style="max-width: 248px">Any changes to the on-chain codebase are monitored by the Sec3 premium tool to make sure no new vulnerabilities are introduced.</p>
                        </div>
                        <div class="img-block" style="max-width: 315px">
                            <img src="/img/security/background-advantages-block_5.svg" alt="img">
                        </div>
                    </div>
                    <div class="design-elements">
                        <i class="icon plus icon-top-left"></i>
                        <i class="icon plus icon-top-right"></i>
                        <i class="icon square icon-bottom-left"></i>
                        <i class="icon square icon-bottom-right"></i>
                    </div>
                </div>

            </div>

            <div class="design-elements">
                <i class="icon plus icon-bottom-left"></i>
                <i class="icon plus icon-bottom-right"></i>
                <i class="icon graph-mark-gorizontal"></i>
            </div>

        </div>
    </section>

    <section class="section-start">
        <div class="container-xl">
            <div class="grid-container">
                <a href="https://v3.squads.so/" target="_blank" class="rhomb-container rhomb-container_two">
                    <div class="box-ratio">
                        <div class="content">
                            <div class="row-content">
                                <div class="top-col">
                                    <p class="text-index">Ok, that does sound secure, lets try it</p>
                                </div>
                                <div class="bottom-col">
                                    <i class="icon arrow-diagonally2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="design-elements">
                    <i class="icon plus icon-bottom-left"></i>
                    <i class="icon plus icon-bottom-right"></i>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- footer -->
<?$templates->load('footer')?>

<?$templates->script_head()?>
