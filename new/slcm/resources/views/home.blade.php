@extends('includes/master')
@section('title', 'Leader in Warehouse Management, Agriculture Financing, Collateral Management & Procurement')
@section('description', 'Sohan Lal Commodity Management Pvt. Ltd- An ISO certified cold storage Delhi NCR. We are leader in agriculture industry and know the value of ministry of agriculture.')
@section('keywords', 'Crop protection,cold storage delhi ncr,mentha warehousing, ministry of agriculture, leader in agriculture industry, leader in agri logistics')

@section('critical_css')
   <style>
     <style>*,::after,::before{box-sizing:border-box}body{margin:0;font-size:1rem;font-weight:400;line-height:1.5;color:rgb(33,37,41);background-color:rgb(255,255,255)}h2{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2}p{margin-top:0;margin-bottom:1rem}ul{padding-left:2rem}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}a{color:rgb(13,110,253);text-decoration:underline}img{vertical-align:middle}input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}*::-webkit-datetime-edit-day-field,*::-webkit-datetime-edit-fields-wrapper,*::-webkit-datetime-edit-hour-field,*::-webkit-datetime-edit-minute,*::-webkit-datetime-edit-month-field,*::-webkit-datetime-edit-text,*::-webkit-datetime-edit-year-field{padding:0}*::-webkit-inner-spin-button{height:auto}*::-webkit-search-decoration{-webkit-appearance:none}*::-webkit-color-swatch-wrapper{padding:0}*::-webkit-file-upload-button{font-family:inherit;font-size:inherit;font-style:inherit;font-variant:inherit;font-weight:inherit;line-height:inherit;-webkit-appearance:button}.list-unstyled{padding-left:0;list-style:none}.container,.container-fluid{width:100%;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}.row>*{width:100%;max-width:100%}@media (min-width:576px){.col-sm-6{width:50%}}.dropdown{position:relative}.clearfix::after{display:block;clear:both;content:''}.fa,.fab{-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-bars::before{content:'\f0c9'}.fa-download::before{content:'\f019'}.fa-envelope::before{content:'\f0e0'}.fa-facebook::before{content:'\f09a'}.fa-instagram::before{content:'\f16d'}.fa-linkedin::before{content:'\f08c'}.fa-times::before{content:'\f00d'}.fa-twitter::before{content:'\f099'}.fa-youtube::before{content:'\f167'}@font-face{font-family:'Font Awesome 5 Brands';font-style:normal;font-weight:400;src:url(../webfonts/fa-brands-400d41d.eot?#iefix) format('embedded-opentype'),url(../webfonts/fa-brands-400.woff2) format('woff2'),url(../webfonts/fa-brands-400.woff) format('woff'),url(../webfonts/fa-brands-400.ttf) format('truetype'),url(../webfonts/fa-brands-400.svg#fontawesome) format('svg')}.fab{font-family:'Font Awesome 5 Brands'}@font-face{font-family:'Font Awesome 5 Free';font-style:normal;font-weight:400;src:url(../webfonts/fa-regular-400d41d.eot?#iefix) format('embedded-opentype'),url(../webfonts/fa-regular-400.woff2) format('woff2'),url(../webfonts/fa-regular-400.woff) format('woff'),url(../webfonts/fa-regular-400.ttf) format('truetype'),url(../webfonts/fa-regular-400.svg#fontawesome) format('svg')}.fab{font-weight:400}@font-face{font-family:'Font Awesome 5 Free';font-style:normal;font-weight:900;src:url(../webfonts/fa-solid-900d41d.eot?#iefix) format('embedded-opentype'),url(../webfonts/fa-solid-900.woff2) format('woff2'),url(../webfonts/fa-solid-900.woff) format('woff'),url(../webfonts/fa-solid-900.ttf) format('truetype'),url(../webfonts/fa-solid-900.svg#fontawesome) format('svg')}.fa{font-family:'Font Awesome 5 Free'}.fa{font-weight:900}@font-face{font-family:swiper-icons;src:url(data:application/font-woff;charset=utf-8;base64,d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA) format('woff');font-weight:400;font-style:normal}.swiper-container{margin-left:auto;margin-right:auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;box-sizing:content-box}.swiper-slide{width:100%;height:100%;position:relative}.swiper-button-next,.swiper-button-prev{position:absolute;top:50%;z-index:10}.swiper-button-next::after,.swiper-button-prev::after{font-family:swiper-icons;letter-spacing:0;font-variant:initial;line-height:1;text-transform:none!important}.swiper-button-prev{left:10px;right:auto}.swiper-button-prev::after{content:prev}.swiper-button-next{right:10px;left:auto}.swiper-button-next::after{content:next}.swiper-pagination{position:absolute;text-align:center;z-index:10}@font-face{font-family:icomoon;src:url(../css/fonts/icomoon78ed.eot?orkqwr#iefix) format('embedded-opentype'),url(../css/fonts/icomoon78ed.ttf?orkqwr) format('truetype'),url(../css/fonts/icomoon78ed.woff?orkqwr) format('woff'),url(../css/fonts/icomoon78ed.svg?orkqwr#icomoon) format('svg');font-weight:400;font-style:normal}[class^="icon-"]{font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;font-family:icomoon!important}.icon-phone-call::before{content:'\e906'}.icon-mail::before{content:'\e927'}.icon-right-arrow-2::before{content:'\e92c'}body{font-size:18px;line-height:34px;font-weight:400}a{text-decoration:none}*::-webkit-input-placeholder{color:inherit;opacity:1}h2{font-weight:700;margin:0}p{margin:0}ul,li{list-style:none;margin:0;padding:0}ul{margin-top:0;margin-bottom:0}*::-webkit-input-placeholder{color:inherit;opacity:1}.auto-container{position:static;max-width:1200px;padding:0 15px;margin:0 auto}.page-wrapper{position:relative;margin:0 auto;width:100%;min-width:300px;overflow:hidden}.container{padding-left:15px;padding-right:15px}*::-webkit-input-placeholder{color:inherit;opacity:1}.thm-btn{position:relative;display:inline-block;vertical-align:middle;-webkit-appearance:none;border:none;font-size:14px;font-weight:700;text-transform:uppercase;padding:15px 50px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;letter-spacing:.1em;overflow:hidden;z-index:1;outline:none!important}.thm-btn::before{position:absolute;top:0;right:0;bottom:0;width:10px;height:100%;border-top-left-radius:10px;border-bottom-left-radius:10px;content:'';z-index:-1}.sec-title{position:relative;display:block;margin-top:-7px;margin-bottom:50px}.sec-title .icon{position:relative;display:block;margin-bottom:2px}.sec-title__tagline{position:relative;display:inline-block;font-size:14px;line-height:20px;font-weight:500;text-transform:uppercase;letter-spacing:.1em}.sec-title__title{font-size:35px;line-height:1em;font-weight:700;text-transform:none;letter-spacing:-.04em}.main-header{position:relative;display:block}.main-header--one{position:relative;left:0;top:0;width:100%;z-index:999}.main-menu{position:relative;z-index:91}.main-menu__inner{position:relative}.main-menu .main-menu__list,.main-menu .main-menu__list ul{margin:0;padding:0;list-style-type:none;display:none}.main-menu .main-menu__list>li{position:relative}.main-menu .main-menu__list>li+li{margin-left:45px}.logo-w{padding-top:.3em;width:auto;display:block;height:105px}.logo-mob{display:none}.main-menu .main-menu__list>li>a{position:relative;display:inline-block;font-size:16px;font-weight:500;text-transform:none;padding-top:1.4em;padding-bottom:1em;z-index:1}.main-menu .main-menu__list>li>a::before{content:'';position:absolute;bottom:1em;left:0;width:100%;height:2px;z-index:-1;display:none}.main-menu .main-menu__list>li.dropdown a{padding-right:0}.main-menu .main-menu__list li ul{position:absolute;top:88px;left:0;min-width:260px;background-color:rgb(255,255,255);opacity:0;visibility:hidden;z-index:99;box-shadow:rgba(0,0,0,.0980392) 0 0 65px 0;border-bottom-right-radius:10px;border-bottom-left-radius:10px;border-top-left-radius:0;border-top-right-radius:0}.main-menu .main-menu__list li ul li{width:100%;position:relative}.main-menu .main-menu__list li ul li+li{border-top-width:1px;border-top-style:solid;border-top-color:rgb(247,247,247)}.main-menu .main-menu__list li ul li a{position:relative;display:block;font-size:16px;line-height:28px;font-weight:500;padding:10px 20px}.main-menu .main-menu__list li ul li:last-child>a{border-bottom-left-radius:10px;border-bottom-right-radius:10px}.stricky-header{position:fixed;z-index:991;top:0;left:0;background-color:rgb(255,255,255);width:100%;visibility:hidden;box-shadow:rgba(0,0,0,.0470588) 0 10px 60px 0}.stricky-header.main-menu{padding:0}@media (max-width:1199px){.stricky-header{display:none!important}}.main-menu .mobile-nav__toggler{font-size:30px;margin-right:0}.mobile-nav__wrapper{position:fixed;top:0;left:0;width:100vw;height:100vh;opacity:0;z-index:999;visibility:hidden}.mobile-nav__overlay{position:absolute;top:0;left:0;right:0;bottom:0;background-color:rgb(0,0,0);opacity:.5}.mobile-nav__content{width:300px;z-index:10;position:relative;height:100%;overflow-y:auto;padding:30px 15px}.mobile-nav__content .logo-box{margin-bottom:40px}.mobile-nav__close{position:absolute;top:20px;right:15px;font-size:18px;color:rgb(255,255,255)}.mobile-nav__top{margin-top:20px;margin-bottom:30px}.mobile-nav__container{border-top-width:1px;border-top-style:solid;border-top-color:rgba(255,255,255,.0980392);border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:rgba(255,255,255,.0980392)}.mobile-nav__social a{font-size:16px}.mobile-nav__social a+a{margin-left:30px}.mobile-nav__contact{margin-top:20px;margin-bottom:20px}.mobile-nav__contact li{font-size:14px;font-weight:400;position:relative;letter-spacing:.07em}.mobile-nav__contact li+li{margin-top:15px}.mobile-nav__contact li a{color:rgb(255,255,255)}.mobile-nav__contact li>i{width:40px;height:40px;border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-right-radius:50%;border-bottom-left-radius:50%;text-align:center;font-size:16px;margin-right:10px;color:rgb(255,255,255)}.main-header--one{position:relative;display:block}.main-header--one__wrapper{position:relative;display:block}.main-header--one__top{position:relative;display:block;background-color:rgb(246,244,236);background-position:initial initial;background-repeat:initial initial}.main-header--one__top .auto-container{position:static;max-width:1755px;width:100%;padding:0 50px;margin:0 auto}.main-header--one__top-left{position:relative;float:left}.main-header--one__top-left .text{position:relative;display:block}.main-header--one__top-left .text p{color:rgb(110,118,115);font-size:12px;line-height:22px;font-weight:500}.main-header--one__top-left .social-link{position:relative;display:block;background-color:rgb(236,234,224);padding:5px 40px 4px;margin-left:40px;background-position:initial initial;background-repeat:initial initial}.main-header--one__top-left .social-link ul{position:relative;display:block;overflow:hidden}.main-header--one__top-left .social-link ul li{position:relative;display:inline-block;float:left;margin-left:25px}.main-header--one__top-left .social-link ul li:first-child{margin-left:0}.main-header--one__top-left .social-link ul li a{position:relative;display:inline-block;color:rgb(110,118,115);font-size:15px}.main-header--one__top-right{position:relative;display:block;float:right;padding-top:5px}.main-header--one__top-right ul{position:relative}.main-header--one__top-right ul li{position:relative}.main-header--one__top-right ul li+li{margin-left:30px}.main-header--one__top-right ul li .icon{position:relative;display:block}.main-header--one__top-right ul li .icon i::before{position:relative;display:inline-block;font-size:15px}.main-header--one__top-right ul li .text{position:relative;display:block;padding-left:10px}.main-header--one__top-right ul li .text p{font-size:12px;line-height:22px;font-weight:500}.main-header--one__top-right ul li .text p a{color:rgb(110,118,115)}.main-header--one__top-right ul li .text p{color:rgb(110,118,115);font-size:12px;line-height:22px;font-weight:500}.main-header--one__bottom{position:relative;display:block}.main-header--one__bottom .auto-container{position:static;max-width:1755px;width:100%;padding:0 50px;margin:0 auto}.main-header--one__bottom-inner{position:relative}.main-header--one__bottom .main-menu--1{position:relative;display:block}.main-header--one__bottom-left{position:relative;display:block;float:left}.main-slider-one{position:relative;display:block}.main-slider .swiper-slide{position:relative}.main-slider .image-layer{position:absolute;top:0;left:0;right:0;bottom:0;background-size:cover;z-index:1;background-position:50% 100%;background-repeat:no-repeat no-repeat}.main-slider .image-layer-overlay{position:absolute;top:0;left:0;width:100%;height:100%;content:'';z-index:2}.main-slider .container{position:relative;padding-top:2em;z-index:2}.main-slider-inner{position:relative;display:block}.main-slider__content{position:relative;display:block}.main-slider-tagline{position:relative;display:inline-block;color:rgb(255,255,255);font-size:16px;line-height:26px;font-weight:500;text-transform:uppercase;letter-spacing:.1em;opacity:0}.main-slider-tagline::before{position:absolute;left:0;bottom:-3px;right:0;width:0;background-color:rgb(255,255,255);height:1px;content:'';background-position:initial initial;background-repeat:initial initial}.main-slider__title{color:rgb(255,255,255);font-size:100px;line-height:1em;margin-top:22px;margin-bottom:34px;opacity:0}.main-slider__button-box{position:relative;display:inline-block;margin-top:38px;opacity:0}.main-slider__button-box .arrow-icon{position:absolute;top:-50px;right:-175px}.main-slider__nav{position:absolute;display:block;bottom:50px;right:0;width:150px;z-index:100}.main-slider__nav .swiper-button-next,.main-slider__nav .swiper-button-prev{position:relative;top:auto;left:auto;right:auto;bottom:auto;z-index:100;width:50px;height:50px;color:rgba(255,255,255,.4);font-size:15px;border:2px solid rgba(255,255,255,.4);margin:10px 0;text-align:center;border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-right-radius:50%;border-bottom-left-radius:50%;background-position:0 0;background-repeat:initial initial}.main-slider__nav .swiper-button-next::after,.main-slider__nav .swiper-button-prev::after{display:none}.main-slider__nav .swiper-button-prev{margin-bottom:0}.main-slider__nav .swiper-button-prev{position:relative}#main-slider-pagination{position:absolute;left:55px;bottom:60px;width:26px;z-index:10}.highlights_section .highlights_wrapper{padding:12px 120px}.highlights_section .highlights_wrapper .single_achieve_wrapper .achieve_icons{margin-right:20px}.highlights_section .highlights_wrapper .single_achieve_wrapper img{width:40px;height:40px}.highlights_section .highlights_wrapper .single_achieve_wrapper .description_wrapper{margin:10px 0}.highlights_section .highlights_wrapper .single_achieve_wrapper .description_wrapper p{font-size:.8em;color:rgb(0,0,0);line-height:24px}.highlights_section .highlights_wrapper .single_achieve_wrapper .description_wrapper p:first-child{font-size:17px;font-weight:600}.about-three{position:relative;display:block;background-color:rgb(255,255,255);padding:80px 0;background-position:initial initial;background-repeat:initial initial}.about-three__content-box{position:relative;display:block;width:100%}.about-three__content-box-inner{position:relative;display:block}.about-three__content-box-inner h2{font-size:22px;line-height:34px;margin-bottom:35px}h2.main-slider__title{font-size:46px;line-height:1.4em}.ttt{font-size:30px!important}.about-three__content-box-inner::after{content:'';height:98%;position:absolute;bottom:0;right:-15px;top:0;margin:auto}.about-three.style2 .about-three__content-box-inner::after{display:none}nav.main-menu.main-menu--1{width:90%}body{font-size:16px;line-height:32px}.sec-title__title{font-size:30px}.about-three__content-box-inner h2{font-size:22px}.main-header--one__top-left .text p,.main-header--one__top-right ul li .text p,.main-header--one__top-right ul li .icon i::before,.main-menu .main-menu__list>li>a,.main-header--one__top-right ul li .text p a{color:rgb(0,32,96)}.main-header--one__top-left .social-link ul li a.twitter_bg{color:rgb(29,161,242)}.main-header--one__top-left .social-link ul li a.linkedin_bg{color:rgb(14,118,168)}.main-header--one__top-left .social-link ul li a.insta_bg{background-image:linear-gradient(45deg,rgb(240,148,51) 0%,rgb(230,104,60) 25%,rgb(220,39,67) 50%,rgb(204,35,102) 75%,rgb(188,24,136) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-position:initial initial;background-repeat:initial initial}.main-header--one__top-left .social-link ul li a.fb_bg{color:rgb(66,103,178)}@media only screen and (max-width:1199px) and (min-width:992px){.main-header--one__top{display:none}.main-header--one__bottom{padding:22px 0 23px}.main-header--one__bottom-inner{min-height:55px}.main-header--one__bottom .main-menu--1{position:absolute;right:0;top:12px;bottom:0;width:30px;height:40px}.sec-title__title br{display:none}}@media only screen and (max-width:991px) and (min-width:768px){.main-header--one__top{display:none}.main-header--one__bottom{padding:22px 0 23px}.main-header--one__bottom-inner{min-height:55px}.main-header--one__bottom .main-menu--1{position:absolute;right:0;top:12px;bottom:0;width:30px;height:40px}.sec-title__title br{display:none}}@media only screen and (max-width:1200px){nav.main-menu.main-menu--1{width:100%}.logo-w{display:none}.logo-mob{display:block;position:absolute;left:-15px;width:auto;height:85px}.sec-title__title{font-size:30px}#main-slider-pagination{left:16px}.ttt{font-size:26px!important}.highlights_section .highlights_wrapper{padding:20px 40px}.col-xs-6{width:50%}.about-three{padding:50px 0}}@media only screen and (max-width:767px){body{font-size:14px;line-height:30px}.sec-title__title{font-size:25px;line-height:1.2em}.about-three__content-box-inner h2{font-size:20px;line-height:32px;margin-bottom:20px}.main-slider .container{padding-top:1em;padding-bottom:0}.logo-mob{width:auto;left:-18px;padding-top:5px;height:65px}.thm-btn{font-size:12px;padding:8px 25px;border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-right-radius:6px;border-bottom-left-radius:6px}.sec-title{margin-bottom:20px}h2.main-slider__title{font-size:35px}.main-header--one__top{display:none}.main-header--one__bottom{padding:10px 0 12px}.main-header--one__bottom .auto-container{padding:0 20px}.main-header--one__bottom-inner{min-height:55px}.main-header--one__bottom .main-menu--1{position:absolute;right:0;top:12px;bottom:0;width:30px;height:40px}.main-slider-tagline{font-size:14px}.main-slider__title{font-size:60px;line-height:1.2em}.main-slider__title br{display:none}.main-slider__button-box .arrow-icon{display:none}#main-slider-pagination{display:none}.main-slider__nav{width:100px;display:none}.highlights_section .highlights_wrapper{padding:10px 20px}.highlights_section .highlights_wrapper .col-xs-6{padding:0}.highlights_section .highlights_wrapper .single_achieve_wrapper .achieve_icons{margin-right:10px}.highlights_section .highlights_wrapper .single_achieve_wrapper img{width:28px;height:28px}.highlights_section .highlights_wrapper .single_achieve_wrapper .description_wrapper p{font-size:.6em;line-height:17px}.highlights_section .highlights_wrapper .single_achieve_wrapper .description_wrapper p:first-child{font-size:11px}.sec-title__title br{display:none}.about-three__content-box-inner h2{text-align:left}.about-three__content-box-inner p{text-align:left}.about-three__content-box{max-width:none}.about-three__content-box-inner{text-align:center}}@media only screen and (max-width:375px){h2.main-slider__title{font-size:28px;line-height:1.2em!important}.main-slider-tagline{font-size:12px}.thm-btn{padding:12px 50px!important}}@media only screen and (max-width:1300px) and (min-width:1200px){nav.main-menu.main-menu--1{width:100%}}</style>
   </style>
@endsection
@section('content')

<!--Main Slider Start-->
<section class="main-slider main-slider-one">
  <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
    "el": "#main-slider-pagination",
    "type": "bullets",
    "clickable": true
    },
    "navigation": {
    "nextEl": "#main-slider__swiper-button-next",
    "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
    "delay": 8000
    }}'>
    <div class="swiper-wrapper">
      <!--Start Single Swiper Slide-->
      <div class="swiper-slide">
        <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-v11.jpg);"></div>
        <div class="image-layer-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-slider-inner">
                <div class="main-slider__content">
                  <h2 class="main-slider__title ttt">Building Digitally Unified Agri Value Chain <br />and an INCLUSIVE
                    Economy</h2>
                  <span class="main-slider-tagline">Integrated Technology</span>
                </div>
                <div class="main-slider__button-box">
                  <div class="arrow-icon"><img src="assets/images/icon/main-slider__button-arrow.png" alt="" />
                  </div>
                  <a href="{{url('digitised-enterprise.html')}}" class="thm-btn">Discover more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Single Swiper Slide-->
      <!--Start Single Swiper Slide-->
      <div class="swiper-slide">
        <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-v1-7.jpg);"></div>
        <div class="image-layer-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-slider-inner">
                <div class="main-slider__content">
                  <h2 class="main-slider__title ttt">SLCM is one of India’s largest integrated<br /> post-harvest
                    agri-logistics platform</h2>
                  <span class="main-slider-tagline">Complete warehousing management solutions and collateral management</span>
                </div>
                <div class="main-slider__button-box">
                  <div class="arrow-icon"><img src="assets/images/icon/main-slider__button-arrow.png" alt="" />
                  </div>
                  <a href="{{url('collateral-management.html')}}" class="thm-btn">Discover more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Single Swiper Slide-->
      <!--Start Single Swiper Slide-->
      <div class="swiper-slide">
        <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-v1-33.jpg);"></div>
        <div class="image-layer-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-slider-inner">
                <div class="main-slider__content">
                  <h2 class="main-slider__title ttt">Empowering Agriculture Financing </h2>
                  <span class="main-slider-tagline">Farmers, Commodity Traders, SME’s, Agri Intermediaries</span>
                </div>
                <div class="main-slider__button-box">
                  <div class="arrow-icon"><img src="assets/images/icon/main-slider__button-arrow.png" alt="" />
                  </div>
                  <a href="{{url('agri-finance.html')}}" class="thm-btn">Discover more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Single Swiper Slide-->

      <!--Start Single Swiper Slide-->
      <div class="swiper-slide">
        <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-v1-2.jpg);"></div>
        <div class="image-layer-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-slider-inner">
                <div class="main-slider__content">
                  <h2 class="main-slider__title ttt">165 Commodities. All India Network</h2>
                  <span class="main-slider-tagline">Specialist in Direct Agri Procurement From Farmers or Agri Mandis</span>
                </div>
                <div class="main-slider__button-box">
                  <div class="arrow-icon"><img src="assets/images/icon/main-slider__button-arrow.png" alt="" />
                  </div>
                  <a href="{{url('procurement.html')}}" class="thm-btn">Discover more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Single Swiper Slide-->
    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-pagination" id="main-slider-pagination"></div>
    <div class="main-slider__nav">
      <div class="swiper-button-prev" id="main-slider__swiper-button-next">
        <span class="icon-right-arrow-2"></span>
      </div>
      <div class="swiper-button-next" id="main-slider__swiper-button-prev">
        <span class="icon-right-arrow-2"></span>
      </div>
    </div>
  </div>
</section>


<section class="highlights_section">
  <div class="highlights_wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6 wow slideInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
          <div class="single_achieve_wrapper"><span class="achieve_icons">
              <img src="assets/images/highlights/market.png" alt="mandis"></span>
            <div class="description_wrapper">
              <p>950+ mandis</p>
              <p>Access</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6 col-xs-6 wow slideInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
          <div class="single_achieve_wrapper">
            <span class="achieve_icons">
              <img src="assets/images/highlights/warehouse.png" alt="Warehouse">
            </span>
            <div class="description_wrapper">
              <p>9600 Warehouse</p>
              <p>Network</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6 col-xs-6 wow slideInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
          <div class="single_achieve_wrapper"><span class="achieve_icons">
              <img src="assets/images/highlights/aggregator.png" alt="Aggregators">
            </span>
            <div class="description_wrapper">
              <p>500+ Aggregators</p>
              <p>1090 Commodities</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6 col-xs-6 wow slideInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
          <div class="single_achieve_wrapper"><span class="achieve_icons">
              <img src="assets/images/highlights/loan.png" alt="Loan Disbursed">
            </span>
            <div class="description_wrapper">
              <p>&#8377; 25B+ Loan Disbursed</p>
              <p>2,500+ Mn MT Throughput</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Main Slider End-->

<!--About Three Start-->
<section class="about-three style2">
  <div class="container">
    <div class="row">
      <!--Start About Three Content Box-->
      <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
      <div class="sec-title">
                    <div class="icon">
                        <img src="assets/images/resources/sec-title-icon3.png" alt="">
                    </div>
                    <span class="sec-title__tagline">get to know about us</span>
                    <h2 class="sec-title__title">About SLCM - Our Brands</h2>
                </div>
        <div class="about-three__content-box">
          <div class="about-three__content-box-inner">
            <h2>One Stop Post-Harvest Agri-Logistics Platform</h2>
            <p>
            Founded in 2009, Sohan Lal Commodity Management Pvt. Ltd. (SLCM) Group offers technology-driven warehousing services such as scientific storage for agriculture commodities, fumigation, testing and certification and funding against storage receipts in India and Myanmar. A player in the global post-harvest space, SLCM is ISO 9001: 2015, ISO 22000: 2018, ISO 33000, ISO 14001:2015 and ISO 45001:2018 certified group. SLCM warehouse management service is equipped with state-of-the-art technology to offer storage and protection services for the entire range of agricultural commodities. <br /><br />The company provides services to the entire agriculture ecosystem including farmers, processors, millers, traders, importers, exporters, commodity exchanges and the central and state governments. SLCM till date has handled more than 950 agricultural commodities including Cotton, Barley, Bajra, Castor Seeds, Wheat, Pulses, Maize, Spices, Aloe Vera, etc.
            </p>
            <a style="color:#002950" href="{{url('company-overview.html')}}">READ MORE...</a>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
        <div class="about-three__products-list" style="margin-top: 0px;">
          <div class="aboutItems">
            <div class="aboutItem">
              <div class="icons">
                <img loading="lazy" style="width: 135px; height: 95px;" src="assets/images/resources/agrireach.jpg" alt="">
              </div>
              <p>Digitally Enabled Professional Warehouse Management Solution. <span class="industry_first">Industry FIRST</span></p>
            </div>
            <div class="aboutItem">
              <a target="_blank" href="https://kissandhan.com/">
              <div class="icons">
                <img loading="lazy" style="width: 135px; height: 95px;" src="assets/images/resources/kd.png" alt="">
              </div>
              <p>Multi-Asset NBFC Empowering Agriculture Financing.</p>
            </a>
            </div>
            <div class="aboutItem">
              <div class="icons">
                <img loading="lazy" style="width: 135px; height: 95px;" src="assets/images/resources/as.jpg" alt="">
              </div>
              <p>Digital Real Time Warehouse Monitoring 24X7X365 <span class="industry_first">Industry FIRST</span></p>
            </div>
            <div class="aboutItem">
            <div class="icons">
                                <p style="font-weight: bold;color:#334b35">Digitally Unified Procurement Platform </p>
                            </div>
                            <p>Unified Post Harvest Agri Value Chain.
                            <span class="industry_first">Industry FIRST</span> Mobile APP based solution.
Digitally Unified Agri Ecosystem Listing; Agri Trading and Agri Fintech.
</p>
            </div>
          </div>
        </div>
      </div>
      <!--End About Three Content Box-->
    </div>
  </div>
</section>
<!--About Three End-->

<!--Services One Start-->
<section class="services-one">
  <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
  <div class="container">
    <div class="sec-title text-center">
      <div class="icon">
        <img src="assets/images/resources/sec-title-icon3.png" alt="">
      </div>
      <span class="sec-title__tagline">What we’re doing</span>
      <h2 class="sec-title__title">Services We Offer</h2>
    </div>
    <div class="row">
      <!--Start Single Services One-->
      <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
        <div class="services-one__single">
        <a href="{{url('commodity.html')}}">
          <div class="services-one__single-img">
            <div class="services-one__single-img-inner">
              <img loading="lazy" src="assets/images/services/services-v1-img1.jpg" alt="" />
            </div>
            <div class="services-one__single-img-icon">
              <span class="icon-agriculture"></span>
            </div>
          </div>
          <div class="services-one__single-content text-center">
            <h3><a href="{{url('commodity.html')}}">Agri Warehousing <br> Management</a></h3>
            <p>Complete warehousing solutions. <br />9,500 warehouses network. <br /> 78 Mn Sq Ft Capacity Agri
              Warehouse. </p>
              <a href="{{url('commodity.html')}}" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
          </div>
          </a>
        </div>
      </div>
      <!--End Single Services One-->

      <!--Start Single Services One-->
      <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
        <div class="services-one__single">
        <a href="{{url('collateral-management.html')}}">
          <div class="services-one__single-img">
            <div class="services-one__single-img-inner">
              <img loading="lazy" src="assets/images/services/services-v1-img2.jpg" alt="" />
            </div>
            <div class="services-one__single-img-icon">
              <span class="icon-farm"></span>
            </div>
          </div>
          <div class="services-one__single-content text-center">
            <h3><a href="{{url('collateral-management.html')}}">Collateral <br>Management</a></h3>
            <p>SLCM Provides Collateral Management services to Banks & Financial Institutions. </p>
            <a href="{{url('collateral-management.html')}}" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
          </div>
  </a>
        </div>
      </div>
      <!--End Single Services One-->

      <!--Start Single Services One-->
      <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
        <div class="services-one__single">
        <a href="{{url('agri-finance.html')}}">
          <div class="services-one__single-img">
            <div class="services-one__single-img-inner">
              <img loading="lazy" src="assets/images/services/services-v1-img3.jpg" alt="" />
            </div>
            <div class="services-one__single-img-icon">
              <span class="icon-investment"></span>
            </div>
          </div>
          <div class="services-one__single-content text-center">
            <h3><a href="{{url('agri-finance.html')}}">Agri <br>Financing</a></h3>
            <p>Provides loans to aggregators/ traders against storage receipts based on the value of the underlying commodity.</p>
            <a href="{{url('agri-finance.html')}}" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
          </div>
        </a>
        </div>
      </div>
      <!--End Single Services One-->
      <!--Start Single Services One-->
      <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
        <div class="services-one__single">
        <a href="{{url('procurement.html')}}">
          <div class="services-one__single-img">
            <div class="services-one__single-img-inner">
              <img loading="lazy" src="assets/images/services/services-v1-img40.jpg" alt="" />
            </div>
            <div class="services-one__single-img-icon">
              <span class="icon-shopping-cart"></span>
            </div>
          </div>
          <div class="services-one__single-content text-center">
            <h3><a href="{{url('procurement.html')}}">Procurement<br> &nbsp;</a></h3>
            <p>SLCM manages a complex supply chain to ensure that the delivery is of the RIGHT Quality, Quanity, at the agreed Price and ON time.</p>
            <a href="{{url('procurement.html')}}" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
          </div>
  </a>
        </div>
      </div>
      <!--End Single Services One-->
      <!--Start Single Services One-->
      <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
        <div class="services-one__single">
        <a href="{{url('analytical-central-laboratory.html')}}">
          <div class="services-one__single-img">
            <div class="services-one__single-img-inner">
              <img loading="lazy" src="assets/images/services/services-v1-img5.jpg" alt="" />
            </div>
            <div class="services-one__single-img-icon">
              <span class="icon-conveyor"></span>
            </div>
          </div>
          <div class="services-one__single-content text-center">
            <h3><a href="{{url('analytical-central-laboratory.html')}}">The Central Analytical <br> Agri Laboratory</a></h3>
            <p> Quality Control and Quality Assurance.<br />Physical and chemical testing.<br />NABL Accredited laboratories for agricultural and food.</p>
            <a href="{{url('analytical-central-laboratory.html')}}" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
          </div>
  </a>
        </div>
      </div>
      <!--End Single Services One-->
      <!--Start Single Services One-->
      <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
        <div class="services-one__single">
        <a href="{{url('risk-management.html')}}">
          <div class="services-one__single-img">
            <div class="services-one__single-img-inner">
              <img loading="lazy" src="assets/images/services/services-v1-img6.jpg" alt="" />
            </div>
            <div class="services-one__single-img-icon">
              <span class="icon-setting"></span>
            </div>
          </div>
          <div class="services-one__single-content text-center">
            <h3><a href="{{url('risk-management.html')}}">Risk Mitigation <br /> &nbsp;</a></h3>
            <p>Our USP would be to suggest the possible solution or the ways to evade bigger problems related to soil fertility, water levels, crop patterns.</p>
            <a href="{{url('risk-management.html')}}" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
          </div>
  </a>
        </div>
      </div>
      <!--End Single Services One-->
    </div>
  </div>
</section>
<!--Services One End-->



<!--Projects One Start-->
<section class="projects-one digitised" style="padding-top:20px">
  <div class="auto-container">
    <div class="sec-title text-center">
      <div class="icon">
        <img loading="lazy" src="assets/images/resources/sec-title-icon3.png" alt="">
      </div>
      <h2 class="sec-title__title">Digitised Enterprise
      </h2>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="projects-one__carousel owl-carousel owl-theme owl-dot-type1">
          <!--Start Single Projects One-->
          <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
          <a href="{{url('ai-ml-based-quality-check-app.html')}}">
            <div class="projects-one__single-img">
              <img loading="lazy" src="assets/images/project/mobilityApp.jpg" alt="" />
              <div class="overlay-content">
                <p> AI/ML Based Quality Check APP</p>
                <div class="h3">
                  <ul>
                    <li>The FIRST of its kind Quality Check Solution</li>
                    <li>DISCOVER the RIGHT Quality & RIGHT Price.</li>
                    <li>Instant, Transparent, Auditable Quality Reports</li>
                    <li>First in Industry & a game changer.</li>
                  </ul>
                </div>
              </div>
            </div>
  </a>
          </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
          <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
          <a href="{{url('digitally-unified-agri-value-chain-app.html')}}">
            <div class="projects-one__single-img">
              <img loading="lazy" src="assets/images/project/digitalUnified.jpg" alt="" />
              <div class="overlay-content">
                <p>Digitally Unified Agri Value Chain - APP</p>
                <div class="h3">
                  <ul>
                    <li>Digitally Unifed Agri Eco System.</li>
                    <li>Unified Post Harvest AgriValue Chain.</li>
                    <li>Mobile APP based Solution.</li>
                    <li>First in Industry.</li>
                  </ul>
                </div>
              </div>
            </div>
  </a>
          </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
          <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
          <a href="{{url('mobility-app-and-midware.html')}}">
            <div class="projects-one__single-img">
              <img loading="lazy" src="assets/images/project/qualityCheck.jpg" alt="" />
              <div class="overlay-content">
                <p>Mobility App & Middleware</p>
                <div class="h3">
                  <ul>
                    <li>Mobility APP based solution</li>
                    <li>Manpower, Business Process & Operations
                      Management, across SLCM’s managed
                      Warehouse Network, all over India</li>
                    <li>First in Industry.</li>
                  </ul>
                </div>
              </div>
            </div>
  </a>
          </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
          <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
          <a href="{{url('agri-suraksha.html')}}">
            <div class="projects-one__single-img">
              <img loading="lazy" src="assets/images/project/agrisec.jpg" alt="" />
              <div class="overlay-content">
                <p>Agri Suraksha</p>
                <div class="h3">
                  <ul>
                    <li>Digital real-time Warehouse Surveillance
                      24x7x365.</li>
                    <li>Centrally Controlled & Monitored.</li>
                    <li>First in Industry.</li>
                  </ul>
                </div>
              </div>
            </div>
  </a>
          </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
          <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
          <a href="{{url('customized-solutions-for-agri-industry.html')}}">
            <div class="projects-one__single-img">
              <img loading="lazy" src="assets/images/project/saps.jpg" alt="" />
              <div class="overlay-content">
                <p>Customized Solution For Agri Industry</p>
                <div class="h3">
                  <ul>
                    <li>SLCM’s Customized Solution For Agri Industry.</li>
                    <li>Digitally Enabled & Automated Inventory Management & Business Processes.</li>
                    <li>First in Agri Industry.</li>
                  </ul>
                </div>
              </div>
            </div>
  </a>
          </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
          <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
          <a href="{{url('call-center.html')}}">
            <div class="projects-one__single-img">
              <img loading="lazy" src="assets/images/project/contactCenter.jpg" alt="" />
              <div class="overlay-content">
                <p>Call Center</p>
                <div class="h3">
                  <ul>
                    <li>Automated Voice Based Processes 24x7.</li>
                    <li>Recording, Tracking, Monitoring of Real time transactions</li>
                  </ul>
                </div>
              </div>
            </div>
  </a>
          </div>
          <!--End Single Projects One-->
        </div>
      </div>
    </div>
  </div>
</section>
<!--Projects One End-->


<!--Video One Start-->
<section class="video-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
  style="background-image: url(assets/images/backgrounds/video-one-bg.jpg);">
  <div class="video-one-border"></div>
  <div class="video-one-border video-one-border-two"></div>
  <div class="video-one-border video-one-border-three"></div>
  <div class="video-one-border video-one-border-four"></div>
  <div class="video-one-border video-one-border-five"></div>
  <div class="video-one-border video-one-border-six"></div>

  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="video-one__wrpper">
          <div class="video-one__left">
            <h2 class="video-one__title">Sohan Lal is one of India’s largest integrated post harvest agri-logistics
              platform</h2>
            <h4 class="video-one__title4">Unlocking Value through Agri Technology</h4>
            <div class="video-one__btn">
              <a href="{{url('company-overview.html')}}" class="thm-btn">Discover more</a>
            </div>
          </div>
          <div class="video-one__right">
            <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
              <a class="video-popup" title=" Video" href="https://www.youtube.com/watch?v=R6u6W9OryGo">
                <span class="icon-play-button-1"></span>
              </a>
              <span class="border-animation border-1"></span>
              <span class="border-animation border-2"></span>
              <span class="border-animation border-3"></span>
            </div>
            <div class="title">
              <h2>Watch the video</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Video One End-->

<!--Company Logos One Start-->
 <section class="company-logos-one">
  <div class="container">
    <h2 class="sec-title__title" style="padding-bottom: 20px;">Integrated Unified Agri Value Chain</h2>
    <br />
    <img src="assets/images/feauters/agrichain.gif" style="width:100%" loading="lazy" />
  </div>
</section>
<!--Unified Agrichaing  End-->



<!--Features One Start-->
<section class="features-two jarallax ourinvestor" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
  style="background-image: url(assets/images/backgrounds/features-v2-bg.jpg);">
  <div class="container">
    <div class="row">
      <h2 class="sec-title__title" style="padding-bottom: 40px;">Our Investors</h2>

      <!--Start Single Features One-->
      <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="features-two__singlewa">
          <div class="features-two__single-top">
            <div class="icon">
              <img width="251px" loading="lazy" src="assets/images/investor/incofin.jpg" />
            </div>
            <div class="count-box"></div>
          </div>
          <div class="features-two__single-title">
            <h3>Incofin <br />Investment Management</h3>
          </div>
        </div>
      </div>
      <!--End Single Features One-->
      <!--Start Single Features One-->
      <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
        <div class="features-two__singlewa">
          <div class="features-two__single-top">
            <div class="icon">
              <img width="251px" loading="lazy" src="assets/images/investor/responsability.jpg" />
            </div>
            <div class="count-box"></div>
          </div>
          <div class="features-two__single-title">
            <h3>Responsibility <br />Investments AG</h3>
          </div>
        </div>
      </div>
      <!--End Single Features One-->
      <!--Start Single Features One-->
      <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
        <div class="features-two__singlewa">
          <div class="features-two__single-top">
            <div class="icon">
              <img width="251px" loading="lazy" src="assets/images/investor/creationInvestment.jpg" />
            </div>
            <div class="count-box"></div>
          </div>
          <div class="features-two__single-title">
            <h3>Creation Investments<br /> Capital Management, LLC</h3>
          </div>
        </div>
      </div>
      <!--End Single Features One-->

      <!--Start Single Features One-->
      <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="800ms" data-wow-duration="1500ms">
        <div class="features-two__singlewa">
          <div class="features-two__single-top">
            <div class="icon">
              <img width="251px" loading="lazy" src="assets/images/investor/nexus.jpg" />
            </div>
            <div class="count-box"></div>
          </div>
          <div class="features-two__single-title">
            <h3>NEXUS <br />Venture Partners</h3>
          </div>
        </div>
      </div>
      <!--End Single Features One-->
      <!--Start Single Features One-->

      <div class="col-xl-3 margin-offset col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="0ms"
        data-wow-duration="1500ms">
        <div class="features-two__singlewa">
          <div class="features-two__single-top">
            <div class="icon">
              <img width="251px" loading="lazy" src="assets/images/investor/mayfield.jpg" />
            </div>
            <div class="count-box"></div>
          </div>
          <div class="features-two__single-title">
            <h3>Mayfield Fund</h3>
          </div>
        </div>
      </div>

      <!--End Single Features One-->
      <!--Start Single Features One-->
      <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="features-two__singlewa">
          <div class="features-two__single-top">
            <div class="icon">
              <img width="251px" loading="lazy" src="assets/images/investor/Everstone.jpg" />
            </div>
            <div class="count-box"></div>
          </div>
          <div class="features-two__single-title">
            <h3>Everstone Capital</h3>
          </div>
        </div>
      </div>
      <!--End Single Features One-->
      <!--Start Single Features One-->
      <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="features-two__singlewa">
          <div class="features-two__single-top">
            <div class="icon">
              <!-- <span class="icon-information"></span> -->
              <img width="251px" loading="lazy" src="assets/images/investor/emerginIndia.jpg" />
            </div>
            <div class="count-box"></div>
          </div>
          <div class="features-two__single-title">
            <h3>Emerging India Fund</h3>
          </div>
        </div>
      </div>
      <!--End Single Features One-->
    </div>
    <div class="features-two__call-box  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
      <div class="row">
        <div class="col-xl-12">
          <div class="features-two__call-box-inner">
            <!-- <div class="img-box">
              <div class="icon">
                <span class="icon-phone-call-2"></span>
              </div>
              <div class="inner">
                <img src="assets/images/resources/features-v2-call-box-img.jpg" alt="" />
              </div>
            </div>
            <div class="title">
              <p>Getting Future Ready NOW</p>
              <h2>Unlocking Value through Agri Technology.</h2>
            </div> -->
            <a href="{{url('investors.html')}}" class="thm-btn">View More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Features One End-->

<!--Company Logos One Start-->
<section class="company-logos-one">
  <div class="container">
    <h2 class="sec-title__title" style="padding-bottom: 20px;">Our Clients</h2>
    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 1000 }, "breakpoints": {
        "0": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "375": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 3
        },
        "767": {
            "spaceBetween": 50,
            "slidesPerView": 4
        },
        "991": {
            "spaceBetween": 25,
            "slidesPerView": 5
        },
        "1199": {
            "spaceBetween": 25,
            "slidesPerView": 5
        }
    }}'>
      <div class="swiper-wrapper">
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/1.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/2.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/3.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/4.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/5.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/6.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/7.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/8.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/9.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/10.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/11.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/12.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
        <div class="swiper-slide clogo">
          <img src="assets/images/resources/kotak.jpg" alt="" loading="lazy">
        </div><!-- /.swiper-slide -->
      </div>
    </div>
  </div>
</section>
<!--Company Logos One End-->



<!--Testimonials One Start-->
<section class="testimonials-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
  style="background-image: url(assets/images/backgrounds/Testimonials-v1-bg.jpg);">
  <div class="container">
    <div class="row">
      <!--Start Testimonials One Left-->
      <div class="col-xl-4">
        <div class="testimonials-one__left">
          <div class="testimonials-one__left-bg"></div>
          <div class="sec-title">
            <div class="icon">
              <img loading="lazy" src="assets/images/resources/sec-title-icon3.png" alt="">
            </div>
            <span class="sec-title__tagline">SLCM in NEWS</span>
            <h2 class="sec-title__title">What They’re <br>Talking About <br> SLCM</h2>
            <a href="{{url('media.html')}}" class="thm-btn btn-sm">Read More</a>
          </div>
        </div>
      </div>
      <!--End Testimonials One Left-->

      <!--Start Testimonials One Right-->
      <div class="col-xl-8">
        <div class="testimonials-one__right">
          <div class="row">
            <div class="col-xl-12">
              <div class="testimonials-one__carousel owl-carousel owl-theme">
                <!--Start Single Testimonials One-->
                @foreach($news as $new)
                <div class="testimonials-one__single">
                  <p class="testimonials-one__single-text"><a target="_blank" href="{{$new->file ?? $new->link}}">{{$new->name}}</a></p>
                  <p class="testimonials-one__single-text text-right text-news-home">{{date("d F, Y", strtotime($new->date))}}</p>
                </div>
                @endforeach
                <!--Start Single Testimonials One-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Testimonials One Right-->
    </div>
  </div>
</section>
<!--Testimonials One End-->


<!--Trophy One Start-->
<section class="projects-one digitised1" style="padding-top:80px">
  <div class="auto-container">
    <div class="sec-title text-center">
      <div class="icon">
        <img loading="lazy" src="assets/images/resources/sec-title-icon3.png" alt="">
      </div>
      <h2 class="sec-title__title">Achievements </h2>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="projects-one__carousel owl-carousel owl-theme owl-dot-type1">
          <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
              <div class="projects-one__single-img">
                <img src="assets/images/achievment/1.jpg" alt="" />
                <div class="overlay-content">
                  <p class> ELSC Leadership Awards 2019
                    <!-- <span class="icon-right-arrow-2"></span> -->
                  </p>
                </div>
              </div>
            </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
              <div class="projects-one__single-img">
                <img loading="lazy" src="assets/images/achievment/2.jpg" alt="" />
                <div class="overlay-content">
                  <p>CPAI New Delhi 2014
                    <!-- <span class="icon-right-arrow-2"></span> -->
                  </p>
                </div>
              </div>
            </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
              <div class="projects-one__single-img">
                <img loading="lazy" src="assets/images/achievment/4.jpg" alt="" />
                <div class="overlay-content">
                  <p>DPFF Awards 2018
                    <!-- <span class="icon-right-arrow-2"></span> -->
                  </p>
                </div>
              </div>
            </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
              <div class="projects-one__single-img">
                <img loading="lazy" src="assets/images/achievment/5.jpg" alt="" />
                <div class="overlay-content">
                  <p>Global Logistics 2017
                    <!-- <span class="icon-right-arrow-2"></span> -->
                  </p>
                </div>
              </div>
            </div>
          <!--End Single Projects One-->
          <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
              <div class="projects-one__single-img">
                <img loading="lazy" src="assets/images/achievment/6.jpg" alt="" />
                <div class="overlay-content">
                  <p>DIGIMARCOM Leadership 2021</p>
                </div>
              </div>
            </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
              <div class="projects-one__single-img">
                <img loading="lazy" src="assets/images/achievment/7.jpg" alt="" />
                <div class="overlay-content">
                  <p>ESR Excellence 2018</p>
                </div>

              </div>
            </div>
          <!--End Single Projects One-->

          <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
              <div class="projects-one__single-img">
                <img loading="lazy" src="assets/images/achievment/8.jpg" alt="" />
                <div class="overlay-content">
                  <p>UVCT 2017</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-4"><a href="{{url('Achievements.html')}}" class="thm-btn">View All</a></div>
  </div>
</section>
<!--Trophy One End-->


<!--Company Logos One Start-->
 <section class="company-logos-one" style="padding:30px 0 30px">
  <div class="container text-center blink-image">
    <a href="https://slcm.s3.ap-south-1.amazonaws.com/downloads/YvXkDvLUEnDjbVeXTffbMdtJMmnWKsXfsQZnk6D5.pdf" target="_blank"><img src="assets/images/resources/ficci.png"  loading="lazy" /></a>
  </div>
</section>
<!--Unified Agrichaing  End-->



<!--Cta One Start-->
<section class="cta-one wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1000ms" style="background-image: url(assets/images/backgrounds/cta-v1-bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="cta-one__wrapper">
          <div class="cta-one__left">
            <div class="cta-one__left-icon">
              <span class="icon-farm"></span>
            </div>
            <div class="cta-one__left-title">
              <h2>Modernising India’s post-harvest agricultural value chain </h2>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--Cta One End-->

@endsection
