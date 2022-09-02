<?
include $_SERVER['DOCUMENT_ROOT'].'/controllers/controller.php';
$templates->head("About");
$templates->links_head(["css"=>['about']])?>

<!-- header -->
<?$templates->load('header')?>

<div id="app">
    <section class="section-main">
        <div class="container-xl">
            <div class="grid-container">
                <div class="heading-text">
                    <h1>About</h1>
                    <p class="text-desc">The Squad is on a mission to unlock the full potential of self-custody, co-ownership, and coordination for teams emerging in web3</p>
                </div>
                <div class="design-elements">
                    <i class="icon plus icon-top-left"></i>
                    <i class="icon plus icon-top-right"></i>
                    <i class="icon plus icon-bottom-left"></i>
                    <i class="icon plus icon-bottom-right"></i>
                    <i class="icon graph-mark-vertical"></i>
                </div>
                <div class="title-label">
                    <img src="/img/about-text-white.svg" alt="logo">
                </div>
            </div>
        </div>
    </section>

    <section class="section-teams">
        <div class="container-xl">
            <div class="col-heading">
                <h2 class="title">Meet the team which brings you the best multi-sig wallet experience on Solana</h2>
            </div>
            <div class="grid-container">

            </div>
        </div>
    </section>

</div>

<!-- footer -->
<?$templates->load('footer')?>

<?$templates->script_head()?>
