<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/fullpage/fullpage.css">
<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/chn/header.php'); ?>
    <!-- main Content Start -->
    <main id="fullpage">
        <!-- intro -->
        <section class="section intro">
            <div class="section-header">
                <div class="container-fulid">
                    <figure>
                        <img src="/assets/images/main/kita_logo.png" alt="">
                    </figure>
                    <figure>
                        <img src="/assets/images/main/img_import_expo.png" alt="">
                    </figure>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <h2>
                        韩国企业馆
                        <small>KOREA COMPANY PAVILLION</small>
                    </h2>
                    <figure>
                        <img src="/assets/images/main/img_intro.png" alt="">
                    </figure>
                    <div class="details">
                        <dl class="chn">
                            <dt>申请对接及咨询</dt>
                            <dd>021-6236-8289 , <a href="mailto:kitash01@kita.net">kitash01@kita.net</a></dd>
                        </dl>
                        <dl class="eng">
                            <dt>Inquiries for business meeting</dt>
                            <dd>+82-21-6236-8289 , <a href="mailto:kitash01@kita.net">kitash01@kita.net</a></dd>
                        </dl>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="javascript:;" class="moveBtn btn btn-chn" role="button" data-type="chn">中文</a>
                            <a href="javascript:;" class="moveBtn btn btn-eng" role="button" data-type="eng">ENGLISH</a>
                        </p>
                    </div>
                    <figure class="ico-scroll">
                        <img src="/assets/images/main/ico_scroll.png" alt="">
                    </figure>
                </div>
            </div>
        </section>

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/chn/location_guide.php'); ?>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/chn/service_trade.php'); ?>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/chn/footer.php'); ?>
    </main>

    <!-- Modal popup -->
    <div class="modal fade modal-popup" id="sevice-list" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">服务贸易展区</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="/assets/images/ico_modal_close.png" alt="닫기">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="map-area">
                        <a href="#" class="btn btn-expand" target="_blank">
                            <i class="icon-zoom-in-1">
                                <span class="sr-only">확대보기</span>
                            </i>
                        </a>
                        <img src="/assets/images/main/img_modal_popup.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="table-wrap">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>企业名</th>
                                    <td>ECOBIZNET INC.</td>
                                </tr>
                                <tr>
                                    <th>展位号</th>
                                    <td class="number">1C1-19</td>
                                </tr>
                                <tr>
                                    <th>商品</th>
                                    <td>自我培养系统</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="/view_details.php" class="btn btn-more" role="button">了解更多</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/fullpage/vendors/easings.min.js"></script>
    <script src="/assets/fullpage/vendors/scrolloverflow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.js"></script>
</body>
</html>