@extends('layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="container-fluid">
    <div class="container">
        <div class="tf-breadcrumb" style="margin-top: 6%;">
            <div class="container">
                <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
                    <div class="tf-breadcrumb-list">
                        <a href="index.html" class="text">Products</a>
                        <i class="icon icon-arrow-right"></i>
                        <span class="text">{{ $product->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /breadcrumb -->
<!-- default -->
<section class="flat-spacing-4 pt_0">
    <div class="tf-main-product section-image-zoom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tf-product-media-wrap sticky-top">
                        <div class="thumbs-slider">
                            <div class="swiper tf-product-media-thumbs other-image-zoom"
                                data-direction="vertical">
                                <div class="swiper-wrapper stagger-wrap">
                                    <div class="swiper-slide stagger-item">
                                        <div class="item">
                                            <img class="lazyload"
                                                data-src="{{ asset('uploads/products/' . $product->image) }}"
                                                src="{{ asset('uploads/products/' . $product->image) }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper tf-product-media-main" id="gallery-swiper-started">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="images/shop/products/p-d1.png" target="_blank" class="item"
                                            data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload"
                                                data-zoom="{{ asset('uploads/products/' . $product->image) }}"
                                                data-src="{{ asset('uploads/products/' . $product->image) }}"
                                                src="{{ asset('uploads/products/' . $product->image) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tf-product-info-wrap position-relative">
                        <div class="tf-zoom-main"></div>
                        <div class="tf-product-info-list other-image-zoom">
                            <div class="tf-product-info-title">
                                <h5>{{ $product->name }}</h5>
                            </div>
                            <div class="tf-product-info-badges">
                                <div class="product-status-content">
                                    <i class="icon-lightning"></i>
                                    <!-- <p class="fw-6">Selling fast! 56 people have this in their carts.</p> -->
                                </div>
                                <div class="badges">Best seller</div>
                            </div>
                            <div class="tf-product-info-price">
                                <div class="price-on-sale">${{ $product->price }}</div>
                                <!-- <div class="badges-on-sale"><span>20</span>% OFF</div> -->
                            </div>
                            <!-- <div class="tf-product-info-liveview">
                                <div class="liveview-count">20</div>
                                <p class="fw-6">People are viewing this right now</p>
                            </div> -->
                            <!-- <div class="tf-product-info-countdown">
                                <div class="countdown-wrap">
                                    <div class="countdown-title">
                                        <i class="icon-time tf-ani-tada"></i>
                                        <p>HURRY UP! SALE ENDS IN:</p>
                                    </div>
                                    <div class="tf-countdown style-1">
                                        <div class="js-countdown" data-timer="1007500"
                                            data-labels="Days :,Hours :,Mins :,Secs"></div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="tf-product-info-quantity">
                                <div class="quantity-title fw-6">Quantity</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity minus-btn">-</span>
                                    <input type="text" name="number" value="1">
                                    <span class="btn-quantity plus-btn">+</span>
                                </div>
                            </div>
                            <div class="tf-product-info-buy-button">
                                <form class="">
                                    <a href="#"
                                        class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn "><span>Add
                                            to cart -&nbsp;</span><span class="tf-qty-price">$8.00</span></a>

                                    <div class="w-100">
                                        <a href="#" class="btns-full">Buy with <img
                                                src="images/payments/paypal.png" alt=""></a>
                                        <a href="#" class="payment-more-option">More payment options</a>
                                    </div>
                                </form>
                            </div>
                            <div class="tf-product-info-extra-link">
                                <a href="#ask_question" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <i class="icon-question"></i>
                                    </div>
                                    <div class="text fw-6">Ask a question</div>
                                </a>
                                <a href="#delivery_return" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg"
                                            width="22" height="18" viewBox="0 0 22 18" fill="currentColor">
                                            <path
                                                d="M21.7872 10.4724C21.7872 9.73685 21.5432 9.00864 21.1002 8.4217L18.7221 5.27043C18.2421 4.63481 17.4804 4.25532 16.684 4.25532H14.9787V2.54885C14.9787 1.14111 13.8334 0 12.4255 0H9.95745V1.69779H12.4255C12.8948 1.69779 13.2766 2.07962 13.2766 2.54885V14.5957H8.15145C7.80021 13.6052 6.85421 12.8936 5.74468 12.8936C4.63515 12.8936 3.68915 13.6052 3.33792 14.5957H2.55319C2.08396 14.5957 1.70213 14.2139 1.70213 13.7447V2.54885C1.70213 2.07962 2.08396 1.69779 2.55319 1.69779H9.95745V0H2.55319C1.14528 0 0 1.14111 0 2.54885V13.7447C0 15.1526 1.14528 16.2979 2.55319 16.2979H3.33792C3.68915 17.2884 4.63515 18 5.74468 18C6.85421 18 7.80021 17.2884 8.15145 16.2979H13.423C13.7742 17.2884 14.7202 18 15.8297 18C16.9393 18 17.8853 17.2884 18.2365 16.2979H21.7872V10.4724ZM16.684 5.95745C16.9494 5.95745 17.2034 6.08396 17.3634 6.29574L19.5166 9.14894H14.9787V5.95745H16.684ZM5.74468 16.2979C5.27545 16.2979 4.89362 15.916 4.89362 15.4468C4.89362 14.9776 5.27545 14.5957 5.74468 14.5957C6.21392 14.5957 6.59575 14.9776 6.59575 15.4468C6.59575 15.916 6.21392 16.2979 5.74468 16.2979ZM15.8298 16.2979C15.3606 16.2979 14.9787 15.916 14.9787 15.4468C14.9787 14.9776 15.3606 14.5957 15.8298 14.5957C16.299 14.5957 16.6809 14.9776 16.6809 15.4468C16.6809 15.916 16.299 16.2979 15.8298 16.2979ZM18.2366 14.5957C17.8853 13.6052 16.9393 12.8936 15.8298 12.8936C15.5398 12.8935 15.252 12.943 14.9787 13.04V10.8511H20.0851V14.5957H18.2366Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="text fw-6">Delivery & Return</div>
                                </a>
                                <a href="#share_social" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <i class="icon-share"></i>
                                    </div>
                                    <div class="text fw-6">Share</div>
                                </a>
                            </div>
                            <div class="tf-product-info-delivery-return">
                                <div class="row">
                                    <div class="col-xl-6 col-12">
                                        <div class="tf-product-delivery">
                                            <div class="icon">
                                                <i class="icon-delivery-time"></i>
                                            </div>
                                            <p>Estimate delivery times: <span class="fw-7">12-26 days</span>
                                                (International), <span class="fw-7">3-6 days</span> (United
                                                States).</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="tf-product-delivery mb-0">
                                            <div class="icon">
                                                <i class="icon-return-order"></i>
                                            </div>
                                            <p>Return within <span class="fw-7">30 days</span> of purchase.
                                                Duties & taxes are non-refundable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-trust-seal">
                                <div class="tf-product-trust-mess">
                                    <i class="icon-safe"></i>
                                    <p class="fw-6">Guarantee Safe <br> Checkout</p>
                                </div>
                                <div class="tf-payment">
                                    <img src="images/payments/visa.png" alt="">
                                    <img src="images/payments/img-1.png" alt="">
                                    <img src="images/payments/img-2.png" alt="">
                                    <img src="images/payments/img-3.png" alt="">
                                    <img src="images/payments/img-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /default -->
<!-- tabs -->
<section class="flat-spacing-17 pt_0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="widget-tabs style-has-border">
                    <ul class="widget-menu-tab">
                        <li class="item-title active">
                            <span class="inner">Description</span>
                        </li>
                        <li class="item-title">
                            <span class="inner">Review</span>
                        </li>
                        <li class="item-title">
                            <span class="inner">Shipping</span>
                        </li>
                        <li class="item-title">
                            <span class="inner">Return Policies</span>
                        </li>
                    </ul>
                    <div class="widget-content-tab">
                        <div class="widget-content-inner active">
                            <div class="">
                                <p class="mb_30">
                                    Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey,
                                    crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                                    responsibly
                                    sourced wood-based
                                    fibres produced through a process that reduces impact on forests,
                                    biodiversity and
                                    water supply.
                                </p>
                                <div class="tf-product-des-demo">
                                    <div class="right">
                                        <h3 class="fs-16 fw-5">Features</h3>
                                        <ul>
                                            <li>Front button placket</li>
                                            <li> Adjustable sleeve tabs</li>
                                            <li>Babaton embroidered crest at placket and hem</li>
                                        </ul>
                                        <h3 class="fs-16 fw-5">Materials Care</h3>
                                        <ul class="mb-0">
                                            <li>Content: 100% LENZING™ ECOVERO™ Viscose</li>
                                            <li>Care: Hand wash</li>
                                            <li>Imported</li>
                                        </ul>
                                    </div>
                                    <div class="left">
                                        <h3 class="fs-16 fw-5">Materials Care</h3>
                                        <div class="d-flex gap-10 mb_15 align-items-center">
                                            <div class="icon">
                                                <i class="icon-machine"></i>
                                            </div>
                                            <span>Machine wash max. 30ºC. Short spin.</span>
                                        </div>
                                        <div class="d-flex gap-10 mb_15 align-items-center">
                                            <div class="icon">
                                                <i class="icon-iron"></i>
                                            </div>
                                            <span>Iron maximum 110ºC.</span>
                                        </div>
                                        <div class="d-flex gap-10 mb_15 align-items-center">
                                            <div class="icon">
                                                <i class="icon-bleach"></i>
                                            </div>
                                            <span>Do not bleach/bleach.</span>
                                        </div>
                                        <div class="d-flex gap-10 mb_15 align-items-center">
                                            <div class="icon">
                                                <i class="icon-dry-clean"></i>
                                            </div>
                                            <span>Do not dry clean.</span>
                                        </div>
                                        <div class="d-flex gap-10 align-items-center">
                                            <div class="icon">
                                                <i class="icon-tumble-dry"></i>
                                            </div>
                                            <span>Tumble dry, medium hear.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner">
                            <table class="tf-pr-attrs">
                                <tbody>
                                    <tr class="tf-attr-pa-color">
                                        <th class="tf-attr-label">Color</th>
                                        <td class="tf-attr-value">
                                            <p>White, Pink, Black</p>
                                        </td>
                                    </tr>
                                    <tr class="tf-attr-pa-size">
                                        <th class="tf-attr-label">Size</th>
                                        <td class="tf-attr-value">
                                            <p>S, M, L, XL</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="widget-content-inner">
                            <div class="tf-page-privacy-policy">
                                <div class="title">The Company Private Limited Policy</div>
                                <p>The Company Private Limited and each of their respective subsidiary, parent
                                    and affiliated companies is deemed to operate this Website (“we” or “us”)
                                    recognizes that you care how information about you is used and shared. We
                                    have created this Privacy Policy to inform you what information we collect
                                    on the Website, how we use your information and the choices you have about
                                    the way your information is collected and used. Please read this Privacy
                                    Policy carefully. Your use of the Website indicates that you have read and
                                    accepted our privacy practices, as outlined in this Privacy Policy.</p>
                                <p>Please be advised that the practices described in this Privacy Policy apply
                                    to information gathered by us or our subsidiaries, affiliates or agents: (i)
                                    through this Website, (ii) where applicable, through our Customer Service
                                    Department in connection with this Website, (iii) through information
                                    provided to us in our free standing retail stores, and (iv) through
                                    information provided to us in conjunction with marketing promotions and
                                    sweepstakes.</p>
                                <p>We are not responsible for the content or privacy practices on any websites.
                                </p>
                                <p>We reserve the right, in our sole discretion, to modify, update, add to,
                                    discontinue, remove or otherwise change any portion of this Privacy Policy,
                                    in whole or in part, at any time. When we amend this Privacy Policy, we will
                                    revise the “last updated” date located at the top of this Privacy Policy.
                                </p>
                                <p>If you provide information to us or access or use the Website in any way
                                    after this Privacy Policy has been changed, you will be deemed to have
                                    unconditionally consented and agreed to such changes. The most current
                                    version of this Privacy Policy will be available on the Website and will
                                    supersede all previous versions of this Privacy Policy.</p>
                                <p>If you have any questions regarding this Privacy Policy, you should contact
                                    our Customer Service Department by email at marketing@company.com</p>
                            </div>
                        </div>
                        <div class="widget-content-inner">
                            <ul class="d-flex justify-content-center mb_18">
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222"
                                        margin="5px">
                                        <path fill="currentColor"
                                            d="M8.7 30.7h22.7c.3 0 .6-.2.7-.6l4-25.3c-.1-.4-.3-.7-.7-.8s-.7.2-.8.6L34 8.9l-3-1.1c-2.4-.9-5.1-.5-7.2 1-2.3 1.6-5.3 1.6-7.6 0-2.1-1.5-4.8-1.9-7.2-1L6 8.9l-.7-4.3c0-.4-.4-.7-.7-.6-.4.1-.6.4-.6.8l4 25.3c.1.3.3.6.7.6zm.8-21.6c2-.7 4.2-.4 6 .8 1.4 1 3 1.5 4.6 1.5s3.2-.5 4.6-1.5c1.7-1.2 4-1.6 6-.8l3.3 1.2-3 19.1H9.2l-3-19.1 3.3-1.2zM32 32H8c-.4 0-.7.3-.7.7s.3.7.7.7h24c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zm0 2.7H8c-.4 0-.7.3-.7.7s.3.6.7.6h24c.4 0 .7-.3.7-.7s-.3-.6-.7-.6zm-17.9-8.9c-1 0-1.8-.3-2.4-.6l.1-2.1c.6.4 1.4.6 2 .6.8 0 1.2-.4 1.2-1.3s-.4-1.3-1.3-1.3h-1.3l.2-1.9h1.1c.6 0 1-.3 1-1.3 0-.8-.4-1.2-1.1-1.2s-1.2.2-1.9.4l-.2-1.9c.7-.4 1.5-.6 2.3-.6 2 0 3 1.3 3 2.9 0 1.2-.4 1.9-1.1 2.3 1 .4 1.3 1.4 1.3 2.5.3 1.8-.6 3.5-2.9 3.5zm4-5.5c0-3.9 1.2-5.5 3.2-5.5s3.2 1.6 3.2 5.5-1.2 5.5-3.2 5.5-3.2-1.6-3.2-5.5zm4.1 0c0-2-.1-3.5-.9-3.5s-1 1.5-1 3.5.1 3.5 1 3.5c.8 0 .9-1.5.9-3.5zm4.5-1.4c-.9 0-1.5-.8-1.5-2.1s.6-2.1 1.5-2.1 1.5.8 1.5 2.1-.5 2.1-1.5 2.1zm0-.8c.4 0 .7-.5.7-1.2s-.2-1.2-.7-1.2-.7.5-.7 1.2.3 1.2.7 1.2z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222"
                                        margin="5px">
                                        <path fill="currentColor"
                                            d="M36.7 31.1l-2.8-1.3-4.7-9.1 7.5-3.5c.4-.2.6-.6.4-1s-.6-.5-1-.4l-7.5 3.5-7.8-15c-.3-.5-1.1-.5-1.4 0l-7.8 15L4 15.9c-.4-.2-.8 0-1 .4s0 .8.4 1l7.5 3.5-4.7 9.1-2.8 1.3c-.4.2-.6.6-.4 1 .1.3.4.4.7.4.1 0 .2 0 .3-.1l1-.4-1.5 2.8c-.1.2-.1.5 0 .8.1.2.4.3.7.3h31.7c.3 0 .5-.1.7-.4.1-.2.1-.5 0-.8L35.1 32l1 .4c.1 0 .2.1.3.1.3 0 .6-.2.7-.4.1-.3 0-.8-.4-1zm-5.1-2.3l-9.8-4.6 6-2.8 3.8 7.4zM20 6.4L27.1 20 20 23.3 12.9 20 20 6.4zm-7.8 15l6 2.8-9.8 4.6 3.8-7.4zm22.4 13.1H5.4L7.2 31 20 25l12.8 6 1.8 3.5z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222"
                                        margin="5px">
                                        <path fill="currentColor"
                                            d="M5.9 5.9v28.2h28.2V5.9H5.9zM19.1 20l-8.3 8.3c-2-2.2-3.2-5.1-3.2-8.3s1.2-6.1 3.2-8.3l8.3 8.3zm-7.4-9.3c2.2-2 5.1-3.2 8.3-3.2s6.1 1.2 8.3 3.2L20 19.1l-8.3-8.4zM20 20.9l8.3 8.3c-2.2 2-5.1 3.2-8.3 3.2s-6.1-1.2-8.3-3.2l8.3-8.3zm.9-.9l8.3-8.3c2 2.2 3.2 5.1 3.2 8.3s-1.2 6.1-3.2 8.3L20.9 20zm8.4-10.2c-1.2-1.1-2.6-2-4.1-2.6h6.6l-2.5 2.6zm-18.6 0L8.2 7.2h6.6c-1.5.6-2.9 1.5-4.1 2.6zm-.9.9c-1.1 1.2-2 2.6-2.6 4.1V8.2l2.6 2.5zM7.2 25.2c.6 1.5 1.5 2.9 2.6 4.1l-2.6 2.6v-6.7zm3.5 5c1.2 1.1 2.6 2 4.1 2.6H8.2l2.5-2.6zm18.6 0l2.6 2.6h-6.6c1.4-.6 2.8-1.5 4-2.6zm.9-.9c1.1-1.2 2-2.6 2.6-4.1v6.6l-2.6-2.5zm2.6-14.5c-.6-1.5-1.5-2.9-2.6-4.1l2.6-2.6v6.7z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222"
                                        margin="5px">
                                        <path fill="currentColor"
                                            d="M35.1 33.6L33.2 6.2c0-.4-.3-.7-.7-.7H13.9c-.4 0-.7.3-.7.7s.3.7.7.7h18l.7 10.5H20.8c-8.8.2-15.9 7.5-15.9 16.4 0 .4.3.7.7.7h28.9c.2 0 .4-.1.5-.2s.2-.3.2-.5v-.2h-.1zm-28.8-.5C6.7 25.3 13 19 20.8 18.9h11.9l1 14.2H6.3zm11.2-6.8c0 1.2-1 2.1-2.1 2.1s-2.1-1-2.1-2.1 1-2.1 2.1-2.1 2.1 1 2.1 2.1zm6.3 0c0 1.2-1 2.1-2.1 2.1-1.2 0-2.1-1-2.1-2.1s1-2.1 2.1-2.1 2.1 1 2.1 2.1z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222"
                                        margin="5px">
                                        <path fill="currentColor"
                                            d="M20 33.8c7.6 0 13.8-6.2 13.8-13.8S27.6 6.2 20 6.2 6.2 12.4 6.2 20 12.4 33.8 20 33.8zm0-26.3c6.9 0 12.5 5.6 12.5 12.5S26.9 32.5 20 32.5 7.5 26.9 7.5 20 13.1 7.5 20 7.5zm-.4 15h.5c1.8 0 3-1.1 3-3.7 0-2.2-1.1-3.6-3.1-3.6h-2.6v10.6h2.2v-3.3zm0-5.2h.4c.6 0 .9.5.9 1.7 0 1.1-.3 1.7-.9 1.7h-.4v-3.4z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222"
                                        margin="5px">
                                        <path fill="currentColor"
                                            d="M30.2 29.3c2.2-2.5 3.6-5.7 3.6-9.3s-1.4-6.8-3.6-9.3l3.6-3.6c.3-.3.3-.7 0-.9-.3-.3-.7-.3-.9 0l-3.6 3.6c-2.5-2.2-5.7-3.6-9.3-3.6s-6.8 1.4-9.3 3.6L7.1 6.2c-.3-.3-.7-.3-.9 0-.3.3-.3.7 0 .9l3.6 3.6c-2.2 2.5-3.6 5.7-3.6 9.3s1.4 6.8 3.6 9.3l-3.6 3.6c-.3.3-.3.7 0 .9.1.1.3.2.5.2s.3-.1.5-.2l3.6-3.6c2.5 2.2 5.7 3.6 9.3 3.6s6.8-1.4 9.3-3.6l3.6 3.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9l-3.8-3.6z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222"
                                        margin="5px">
                                        <path fill="currentColor"
                                            d="M34.1 34.1H5.9V5.9h28.2v28.2zM7.2 32.8h25.6V7.2H7.2v25.6zm13.5-18.3a.68.68 0 0 0-.7-.7.68.68 0 0 0-.7.7v10.9a.68.68 0 0 0 .7.7.68.68 0 0 0 .7-.7V14.5z">
                                        </path>
                                    </svg>
                                </li>
                            </ul>
                            <p class="text-center text-paragraph">LT01: 70% wool, 15% polyester, 10% polyamide,
                                5% acrylic 900 Grms/mt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /tabs -->

<!-- recent -->
<section class="flat-spacing-4 pt_0">
    <div class="container">
        <div class="flat-title">
            <span class="title">Recently Added</span>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div class="swiper tf-sw-recent wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2"
                data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1"
                data-pagination-lg="1">
                <div class="swiper-wrapper">
                    @foreach ($allproducts as $product)
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="" class="product-img d-flex justify-content-center align-items-center" style="height: 200px;">
                                    <img class="lazyload img-product"
                                        data-src="{{ asset('uploads/products/' . $product->image) }}"
                                        src="{{ asset('uploads/products/' . $product->image) }}" alt="image-product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                    <img class="lazyload img-hover"
                                        data-src="{{ asset('uploads/products/' . $product->image) }}"
                                        src="{{ asset('uploads/products/' . $product->image) }}" alt="image-product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="#quick_add" data-bs-toggle="modal"
                                        class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="{{ route('product.quick.view', ['product' => $product->slug]) }}"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">{{ $product->name }}</a>
                                @if ($product->available == 1)
                                    <div class="w-25 badge bg-success">Available</div>
                                @else
                                    <div class="w-25 badge bg-danger">Out of stock</div>
                                @endif
                                <span class="price">${{ $product->price }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span
                    class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span
                    class="icon icon-arrow-right"></span></div>
            <div class="sw-dots style-2 sw-pagination-recent justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /recent -->
</div>
<!-- modal ask_question -->
<div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="ask_question">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Ask a question</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="overflow-y-auto">
                <form class="">
                    <fieldset class="">
                        <label for="">Name *</label>
                        <input type="text" placeholder="" class="" name="text" tabindex="2" value=""
                            aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <label for="">Email *</label>
                        <input type="email" placeholder="" class="" name="text" tabindex="2" value=""
                            aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <label for="">Phone number</label>
                        <input type="number" placeholder="" class="" name="text" tabindex="2" value=""
                            aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <label for="">Message</label>
                        <textarea name="message" rows="4" placeholder="" class="" tabindex="2" aria-required="true"
                            required=""></textarea>
                    </fieldset>
                    <button type="submit"
                        class="tf-btn w-100 btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn"><span>Send</span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal ask_question -->

<!-- modal delivery_return -->
<div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="delivery_return">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Shipping & Delivery</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="overflow-y-auto">
                <div class="tf-product-popup-delivery">
                    <div class="title">Delivery</div>
                    <p class="text-paragraph">All orders shipped with UPS Express.</p>
                    <p class="text-paragraph">Always free shipping for orders over US $250.</p>
                    <p class="text-paragraph">All orders are shipped with a UPS tracking number.</p>
                </div>
                <div class="tf-product-popup-delivery">
                    <div class="title">Returns</div>
                    <p class="text-paragraph">Items returned within 14 days of their original shipment date in same
                        as new condition will be eligible for a full refund or store credit.</p>
                    <p class="text-paragraph">Refunds will be charged back to the original form of payment used for
                        purchase.</p>
                    <p class="text-paragraph">Customer is responsible for shipping charges when making returns and
                        shipping/handling fees of original purchase is non-refundable.</p>
                    <p class="text-paragraph">All sale items are final purchases.</p>
                </div>
                <div class="tf-product-popup-delivery">
                    <div class="title">Help</div>
                    <p class="text-paragraph">Give us a shout if you have any other questions and/or concerns.</p>
                    <p class="text-paragraph">Email: <a href="mailto:contact@domain.com"
                            aria-describedby="a11y-external-message"><span
                                class="__cf_email__">contact@domain.com</span></a></p>
                    <p class="text-paragraph mb-0">Phone: +1 (23) 456 789</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal delivery_return -->
<!-- modal share social -->
<div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="share_social">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Share</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="overflow-y-auto">
                <ul class="tf-social-icon d-flex gap-10">
                    <li><a href="#" class="box-icon social-facebook bg_line"><i class="icon icon-fb"></i></a></li>
                    <li><a href="#" class="box-icon social-twiter bg_line"><i class="icon icon-Icon-x"></i></a></li>
                    <li><a href="#" class="box-icon social-instagram bg_line"><i
                                class="icon icon-instagram"></i></a></li>
                    <li><a href="#" class="box-icon social-tiktok bg_line"><i class="icon icon-tiktok"></i></a></li>
                    <li><a href="#" class="box-icon social-pinterest bg_line"><i
                                class="icon icon-pinterest-1"></i></a></li>
                </ul>
                <form class="form-share" method="post" accept-charset="utf-8">
                    <fieldset>
                        <input type="text" value="https://themesflat.co/html/ecomus/" tabindex="0"
                            aria-required="true">
                    </fieldset>
                    <div class="button-submit">
                        <button class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn"
                            type="button">Copy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal share social -->
@endsection