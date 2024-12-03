@extends('frontend.layouts')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>News</li>
                </ul>
                <h2>News details</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="assets/images/blog/news-details-img-1.jpg" alt="">
                            <div class="news-details__date">
                                <p>18 april</p>
                            </div>
                        </div>
                        <div class="news-details__content">
                            <p class="news-details__author">by John Smith</p>
                            <h3 class="news-details__title">Let’s understand the different types of luxury spaces
                            </h3>
                            <p class="news-details__text-1">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim
                                exerci phaedrum. There are many variations of passages of Lorem Ipsum available, but
                                the majority have alteration in some injected or words which don't look even
                                slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                                be sure there isn't anything embarrang hidden in the middle of text. All the Lorem
                                Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over
                                200 Latin words, combined with a handful of model sentence structures, to generate
                                Lorem Ipsum which looks reasonable. </p>
                            <p class="news-details__text-2">Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                to make a type simen book. It has survived not only five centuries, but also the
                                leap into electronic typesetting.</p>
                            <p class="news-details__text-3">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. orem Ipsum has been the industry's standard dummy text ever
                                since the when an unknown printer took a galley of type and scrambled it to make a
                                type specimen book. It has survived not only five centuries, but also the leap into
                                unchanged.</p>
                        </div>
                        <div class="news-details__bottom">
                            <p class="news-details__tags">
                                <span>Tags</span>
                                <a href="#">Property</a>
                                <a href="#">Apartment</a>
                            </p>
                            <div class="news-details__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="news-details__pagenation-box">
                            <ul class="list-unstyled news-details__pagenation">
                                <li>How much a website cost to build</li>
                                <li>We love design the latest trendy websites</li>
                            </ul>
                        </div>
                        <div class="comment-one">
                            <h3 class="comment-one__title">2 comments</h3>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Kevin martin</h3>
                                    <p>It has survived not only five centuries, but also the leap into electronic
                                        typesetting simply fee text aunchanged. It was popularised in the sheets
                                        containing lorem ipsum is simply free text.</p>
                                    <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                </div>
                            </div>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Sarah albert</h3>
                                    <p>It has survived not only five centuries, but also the leap into electronic
                                        typesetting simply fee text aunchanged. It was popularised in the sheets
                                        containing lorem ipsum is simply free text.</p>
                                    <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form">
                            <h3 class="comment-form__title">Leave a comment</h3>
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Submit
                                                comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search here">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Latest posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-comments"></i>2 Comments</span>
                                            <a href="news-details.html">Luxury experiences
                                                that connect us</a>
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-comments"></i>2 Comments</span>
                                            <a href="news-details.html">There are many variations of</a>
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-comments"></i>2 Comments</span>
                                            <a href="news-details.html">Bring to the table win-win survival</a>
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="news-details.html">Single Property<span
                                            class="icon-right-arrow"></span></a>
                                </li>
                                <li class="active"><a href="news-details.html">Luxury Apartment<span
                                            class="icon-right-arrow"></span></a></li>
                                <li><a href="news-details.html">Modern Complex<span
                                            class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="news-details.html">Amazing Building<span
                                            class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="news-details.html">Sweet Home<span class="icon-right-arrow"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Tags</h3>
                            <div class="sidebar__tags-list">
                                <a href="#">Property</a>
                                <a href="#">apartment</a>
                                <a href="#">luxury</a>
                                <a href="#">Complexes</a>
                                <a href="#">marketing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->
@endsection
