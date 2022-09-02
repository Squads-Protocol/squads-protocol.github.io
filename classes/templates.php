<?php
class Templates{

    private $path="", $v;
    function __construct($path=false){
         $this->v=2.7352;
//        $this->v = mt_rand(10000, 99999999);
        if($path){
            $this->path=$path;
        }
    }

    public function head($title, $metadesc=false, $metakeys=false, $css=false, $js=false, $jquery=false, $jqueryeffects=false, $arr=array() ){ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$title?> | Solana Multisig Standard</title>
    <meta name="description" content="The multisig standard you were looking for on Solana">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="/img/favicon.ico?123">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#252525">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#252525">
    <meta property="og:title" content="Squads">
    <meta property="og:site_name" content="Squads.so">
    <meta property="og:url" content="https://squads.so/">
    <meta property="og:image" content="/logo-ssr.jpeg">
    <meta property="og:description" content="The multisig standard you were looking for on Solana">
    <meta property="og:type" content="product">
    <meta name="twitter:title" content="Squads">
    <meta name="twitter:image" content="/logo-ssr.jpeg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="The multisig standard you were looking for on Solana">
    <meta name="next-head-count" content="12">
    <meta property="og:updated_time" content="1660657933">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- CSS variables -->
    <link rel="stylesheet" href="/css/variables.css?v=<?=$this->v?>">
    <!-- font "Druk Wide" -->
    <link rel="stylesheet" href="/fonts/Druk Wide/stylesheet.css?v=<?=$this->v?>">
    <!-- font "Neue Plak" -->
    <link rel="stylesheet" href="/fonts/Neue Plak/stylesheet.css?v=<?=$this->v?>">
    <!-- reset CSS -->
    <link rel="stylesheet" href="/css/reset.css?v=<?=$this->v?>">
    <!-- Icons -->
    <link rel="stylesheet" href="/css/icons.css?v=<?=$this->v?>">
    <!-- Style Global -->
    <link rel="stylesheet" href="/css/style.css?v=<?=$this->v?>">
    <!-- Header -->
    <link rel="stylesheet" href="/css/chunks-header.css?v=<?=$this->v?>">
    <!-- Footer -->
    <link rel="stylesheet" href="/css/footer.css?v=<?=$this->v?>">

    <!-- Splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/themes/splide-default.min.css">

    <?}

    public function links_head($arr=array()) {
        if(isset($arr['css'])){

            echo"\n\t<!-- ------- include css ------- -->";
            foreach($arr['css'] as $c){
                switch($c){
                    default: echo"\n\t<link rel='stylesheet' href='/css/{$c}.css?v={$this->v}'>";
                }
            }
        }?>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3PLKNT0QYT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-3PLKNT0QYT');
    </script>

</head>
<body>

    <?}

    public function script_head($arr=array()){
    ?>

    <!-- Jquery -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <!-- Index Script -->
    <script src="/js/script.js?v=2.136"></script>


    <?if($arr['js']){

        echo "\n\t<!-- ------- include scripts ------- -->";
        foreach($arr['js'] as $j){
            switch($j){
                default: echo"\n\t<script src='/js/{$j}.js?v={$this->v}'></script>";
            }
        }
    }?>


</body>
</html>
    <?}

    public function load($name,$params=false){
        if(is_array($params)){
            foreach($params as $k=>$v){
                $$k=$v;
            }
        }
        if(strpos($name, "./")){
            $name=str_replace("../", "", $name);
            include "../components/".$name.".php";
        }
        else{
            include $_SERVER['DOCUMENT_ROOT'].$this->path."/components/".$name.".php";
        }
    }
}
