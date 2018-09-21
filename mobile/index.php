<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/chn/header.php'); ?>
    <!-- Content -->
    <main id="content">
        <!-- intro -->
        <section class="intro">
            <div class="container">
                <div class="section-header">
                    <figure>
                        <img src="/mobile/assets/images/main/kita_logo.png" alt="">
                    </figure>
                    <figure>
                        <img src="/mobile/assets/images/main/img_import_expo.png" alt="">
                    </figure>
                </div>
                <div class="section-content">
                    <h2>
                        韩国企业馆
                        <small>KOREA COMPANY PAVILLION</small>
                    </h2>
                    <figure>
                        <img src="/mobile/assets/images/main/img_intro.png" class="img-fluid" alt="">
                    </figure>
                    <dl class="chn">
                        <dt>申请对接及咨询</dt>
                        <dd>
                            <ul>
                                <li><a href="tel:02162368289">021-6236-8289</a></li>
                                <li><a href="mailto:kitash01@kita.net">kitash01@kita.net</a></li>
                            </ul>
                        </dd>
                    </dl>
                    <dl class="eng">
                        <dt>Inquiries for business meeting</dt>
                        <dd>
                            <ul>
                                <li><a href="tel:+822162368289">+82-21-6236-8289</a></li>
                                <li><a href="mailto:kitash01@kita.net">kitash01@kita.net</a></li>
                            </ul>
                        </dd>
                    </dl>
                    <div class="btn-area">
                        <p>
                            <a href="#none" class="btn btn-chn" role="button">中文</a>
                            <a href="#none" class="btn btn-eng" role="button">ENGLISH</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/eng/location_guide.php'); ?>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/eng/service_trade.php'); ?>
    </main>
    
    <!-- modal-popup -->
    <div class="modal fade modal-popup" id="sevice-list" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">服务贸易展区</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="/mobile/assets/images/ico_modal_close.png" alt="닫기">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="map-area">
                        <a href="#" class="btn btn-expand" target="_blank">
                            <i class="icon-zoom-in">
                                <span class="sr-only">확대보기</span>
                            </i>
                        </a>
                        <img src="/mobile/assets/images/main/img_modal_popup.jpg" class="img-fluid" alt="">
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
                            <a href="/mobile/view_details.php" class="btn btn-more" role="button">了解更多</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/chn/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>