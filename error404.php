<?
include $_SERVER['DOCUMENT_ROOT'].'/controllers/controller.php';
$templates->head("Error 404");
$templates->links_head(["css"=>['error404']])?>

<!-- header -->
<?$templates->load('header')?>

<section class="section-main" id="section-overview">
    <div class="container-xl">
        <div class="design-elements">
            <i class="icon plus icon-top-left"></i>
            <i class="icon plus icon-top-right"></i>
            <i class="icon plus icon-bottom-left"></i>
            <i class="icon plus icon-bottom-right"></i>
        </div>

        <img class="error404" src="/img/error404.svg">
        <div class="notFound">Page not found</div>
    </div>
</section>

<!-- footer -->
<?$templates->load('footer')?>

<?$templates->script_head()?>
