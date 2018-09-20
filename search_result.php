<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/chn/header.php'); ?>
    <!-- main Content Start -->
    <main id="content">
        <section class="search-result">
            <div class="container">
                <div class="section-header">
                    <h2 class="arial">SEARCH</h2>
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" id="search" class="form-control" placeholder="검색어를 입력해주세요">
                                <label for="search" class="sr-only">검색영역</label>
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
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo01.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo02.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo03.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo04.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo05.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo06.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo07.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo08.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo09.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo10.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo11.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#sevice-list" data-toggle="modal" data-target="#sevice-list">
                                    <figure>
                                        <img src="/assets/images/main/img_logo12.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </article>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left">
                                        <span class="sr-only">첫페이지</span>
                                    </i>
                                </a>
                            </li>
                            <li class="prev">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left">
                                        <span class="sr-only">이전페이지</span>
                                    </i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1 <span></span></a></li>
                            <li><a href="#">2 <span></span></a></li>
                            <li><a href="#">3 <span></span></a></li>
                            <li><a href="#">4 <span></span></a></li>
                            <li><a href="#">5 <span></span></a></li>
                            <li><a href="#">6 <span></span></a></li>
                            <li><a href="#">7 <span></span></a></li>
                            <li><a href="#">8 <span></span></a></li>
                            <li><a href="#">9 <span></span></a></li>
                            <li><a href="#">10 <span></span></a></li>
                            <li class="next">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right">
                                        <span class="sr-only">다음페이지</span>
                                    </i>
                                </a>
                            </li>
                            <li class="last">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right">
                                        <span class="sr-only">마지막페이지</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/chn/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>