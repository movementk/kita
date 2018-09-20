<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/chn/header.php'); ?>
    <!-- Content -->
    <main id="content">
        <section class="search-result">
            <div class="container">
                <div class="section-header">
                    <h2 class="">SEARCH</h2>
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" id="search-form" class="form-control" placeholder="검색어를 입력해주세요">
                                <label for="search-form" class="sr-only">검색영역</label>
                                <button type="submit" class="btn btn-search">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="section-content">
                    <p class="none-result">검색된 결과가 없습니다.</p>
                    <article class="trade-list">
                        <ul class="row">
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo01.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo02.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo03.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo04.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo05.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo06.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo07.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo08.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo09.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo10.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo11.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/mobile/assets/images/main/img_logo12.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-more" role="button">더보기</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>        
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/chn/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>