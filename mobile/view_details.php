<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/chn/header.php'); ?>
    <!-- Content -->
    <main id="content">
        <section class="view-details">
            <div class="container">
                <div class="section-header">
                    <h2>
                        服务贸易展区
                        <small>(1A7-024)</small>
                    </h2>
                </div>
                <div class="section-content">
                    <nav class="trade-tab">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>1H</span> 服务贸易展区
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                <a class="dropdown-item" href="#">1H 服务贸易展区</a>
                                <a class="dropdown-item" href="#">2H 服务贸易</a>
                                <a class="dropdown-item" href="#">3H 贸智易能展及区高端装备展区</a>
                                <a class="dropdown-item" href="#">4.1H 贸智易能展及区高端装备展区</a>
                                <a class="dropdown-item" href="#">5.1H 消费及电子家电展区•</a>
                                <a class="dropdown-item" href="#">6.1H 服装服饰及日用消费品展区</a>
                                <a class="dropdown-item" href="#">7.1H 医疗器械及医药保健展区</a>
                                <a class="dropdown-item" href="#">7.2H 食品及农产品展区</a>
                                <a class="dropdown-item" href="#">8.2H 食品及农产品展区</a>
                            </div>
                        </div>
                    </nav>
                    <article class="company-information">
                        <div class="article-header">
                            <h3>ECOBIZNET INC.</h3>
                        </div>
                        <div class="article-content">
                            <figure>
                                <img src="/mobile/assets/images/main/img_logo01.jpg" class="img-fluid" alt="">
                            </figure>
                            <ul class="information">
                                <li>
                                    <dl>
                                        <dt>CEO</dt>
                                        <dd>曺政燮</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>地址</dt>
                                        <dd>
                                            Bioplaza 4F, 56 Soyanggangro, Chuncheonsi, Gangwondo, Korea
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>电话</dt>
                                        <dd><a href="tel:+82332586400">+82-33-258-6400</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>邮箱</dt>
                                        <dd>
                                            <a href="mailto:thomas@ecobizne.t.com">thomas@ecobizne.t.com</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>企业网址</dt>
                                        <dd>
                                            <a href="www.ecobiznet.com" target="_blank">www.ecobiznet.com</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>商品</dt>
                                        <dd>自我培养系统</dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <ul class="content-list">
                        <li>
                            <h4 class="list-title">商品图片</h4>
                            <ul class="row">
                                <li class="col-6">
                                    <a href="#" data-toggle="modal" data-target="#product-modal">
                                        <figure>
                                            <img src="/mobile/assets/images/sub/img_product01.jpg" class="img-fluid" alt="">
                                        </figure>
                                    </a>
                                </li>
                                <li class="col-6">
                                    <a href="#" data-toggle="modal" data-target="#product-modal">
                                        <figure>
                                            <img src="/mobile/assets/images/sub/img_product01.jpg" class="img-fluid" alt="">
                                        </figure>
                                    </a>
                                </li>
                                <li class="col-6">
                                    <a href="#" data-toggle="modal" data-target="#product-modal">
                                        <figure>
                                            <img src="/mobile/assets/images/sub/img_product01.jpg" class="img-fluid" alt="">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4 class="list-title">认证(许可)</h4>
                            <ul class="row">
                                <li class="col-6">
                                    <a href="#" data-toggle="modal" data-target="#product-modal">
                                        <figure>
                                            <img src="/mobile/assets/images/sub/img_certificate01.jpg" class="img-fluid" alt="">
                                        </figure>
                                    </a>
                                </li>
                                <li class="col-6">
                                    <a href="#" data-toggle="modal" data-target="#product-modal">
                                        <figure>
                                            <img src="/mobile/assets/images/sub/img_certificate01.jpg" class="img-fluid" alt="">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="maps">
                            <h4 class="list-title">展区位置</h4>
                            <figure>
                                <img src="/mobile/assets/images/sub/maps.jpg" class="img-fluid" alt="">
                            </figure>
                        </li>
                    </ul>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-red" role="button">名单</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>        
    </main>
    
    <!-- Modal -->
    <div class="modal sub-modal-popup fade" id="product-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">商品图片</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="sr-only">팝업 닫기</span>
                    </button>
                </div>
                <div class="modal-body">
                    <figure>
                        <img src="/mobile/assets/images/sub/img_product01.jpg" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
   
   
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/chn/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>