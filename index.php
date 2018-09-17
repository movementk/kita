<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
    </head>
    <body>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/chn/header.php'); ?>
        <!-- main Content Start -->
        <main id="fullpage">
            <!-- intro -->
            <section class="section intro">
                <div class="container">
                    <h1>
                        2018 CHINA<br>INTERNATIONAL<br>IMPORT EXPO
                    </h1>
                    <a href="javascript:;" class="moveBtn" data-type="eng">ENG</a>
                    <a href="javascript:;" class="moveBtn" data-type="chn">CHN</a>
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
                            <i class="icon-cancel-1">
                                <span class="sr-only">닫기</span>
                            </i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="map-area">
                            <button type="button" class="btn btn-expand">
                                <i class="icon-zoom-in-1">
                                    <span class="sr-only">확대보기</span>
                                </i>
                            </button>
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
                                        <th>부스번호</th>
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
                                <a href="#" class="btn btn-more" role="button">자세히보기</a>
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
        <script>
            
        </script>
    </body>
</html>