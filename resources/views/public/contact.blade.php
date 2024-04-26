@extends('layouts.public')
@section('content')
    <section class="contact-us-section layout-radius">
        <div class="boxcar-container">
            <!-- boxcar-title -->
            <div class="boxcar-title-three wow fadeInUp">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><span>Contact Us For More Info</span></li>
                </ul>
                <h2>Contact Us</h2>
            </div>
            <!-- End section title -->

            <!-- map-sec -->
            <div class="map-sec">
                <div class="goole-iframe">
                    <iframe
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
            </div>
            <!-- End map-section -->

            <!-- calculater-section -->
            <div class="calculater-sec">
                <div class="right-box">
                    <div class="row">
                        <!-- content-column -->
                        <div class="col-lg-6 content-column">
                            <div class="inner-column">
                                <div class="boxcar-title">
                                    <h2>Get In Touch</h2>
                                    <p>Etiam pharetra egestas interdum blandit viverra morbi consequat mi non bibendum
                                        egestas quam egestas nulla.</p>
                                </div>
                                <form class="row">
                                    <div class="col-lg-6">
                                        <div class="form_boxes">
                                            <label>First Name</label>
                                            <input type="text" name="name" placeholder="Ali">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_boxes">
                                            <label>Last Name</label>
                                            <input type="text" name="last-name" placeholder="Tufan">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_boxes">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="Creativelayers088@Gmail.Com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_boxes">
                                            <label>Phone</label>
                                            <input type="number" name="number" placeholder="+90 47458 27 3287 12">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_boxes v2">
                                            <label>Comment</label>
                                            <textarea name="message" placeholder="Lorem Ipsum Dolar Sit Amet" required="" style="color:#000; width: 100%;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <button type="submit" class="theme-btn">Send Message<img src="images/arrow.svg"
                                                alt="">
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- contact-column -->
                        <div class="contact-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="boxcar-title">
                                    <h6 class="title">Contact details</h6>
                                    <div class="text">Etiam pharetra egestas interdum blandit viverra morbi consequat
                                        mi non bibendum egestas quam egestas nulla.</div>
                                </div>
                                <div class="content-box">
                                    <h6 class="title">
                                        <span class="icon">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.9999 4.0625C8.67871 4.0625 5.14575 7.64734 5.14575 12.1068C5.14575 14.3555 6.04517 16.8458 7.5169 18.7689C8.99243 20.697 10.9454 21.9375 12.9999 21.9375C15.0545 21.9375 17.0074 20.697 18.483 18.7689C19.9547 16.8458 20.8541 14.3555 20.8541 12.1068C20.8541 7.64734 17.3211 4.0625 12.9999 4.0625ZM3.52075 12.1068C3.52075 6.78329 7.74819 2.4375 12.9999 2.4375C18.2516 2.4375 22.4791 6.78329 22.4791 12.1068C22.4791 14.7496 21.4384 17.5809 19.7735 19.7564C18.1123 21.9271 15.7319 23.5625 12.9999 23.5625C10.268 23.5625 7.8876 21.9271 6.22642 19.7564C4.56143 17.5809 3.52075 14.7496 3.52075 12.1068Z"
                                                    fill="#050B20" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.479 11.375C9.479 9.4305 11.0554 7.85417 12.9998 7.85417C14.9443 7.85417 16.5207 9.4305 16.5207 11.375C16.5207 13.3195 14.9443 14.8958 12.9998 14.8958C11.0554 14.8958 9.479 13.3195 9.479 11.375ZM12.9998 9.47917C11.9528 9.47917 11.104 10.328 11.104 11.375C11.104 12.422 11.9528 13.2708 12.9998 13.2708C14.0469 13.2708 14.8957 12.422 14.8957 11.375C14.8957 10.328 14.0469 9.47917 12.9998 9.47917Z"
                                                    fill="#E1E1E1" />
                                            </svg>
                                        </span>
                                        Address
                                    </h6>
                                    <div class="text">329 Queensberry Street, North <br>Melbourne VIC3051, Australia.
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h6 class="title">
                                        <span class="icon">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.7584 14.5869C12.0336 14.5869 11.3111 14.3474 10.7065 13.8686L5.84779 9.95128C5.49787 9.66962 5.44371 9.1572 5.72429 8.80837C6.00704 8.46062 6.51837 8.40537 6.86721 8.68595L11.7216 12.5989C12.3316 13.0821 13.1906 13.0821 13.8049 12.5946L18.6106 8.68812C18.9594 8.4032 19.4707 8.45737 19.7546 8.8062C20.0373 9.15395 19.9842 9.66528 19.6365 9.94912L14.8221 13.8621C14.2133 14.3453 13.4853 14.5869 12.7584 14.5869Z"
                                                    fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M18.0472 21.6667C18.0493 21.6645 18.058 21.6667 18.0645 21.6667C19.3006 21.6667 20.3969 21.2247 21.2376 20.3851C22.2137 19.4133 22.7499 18.0169 22.7499 16.4537V9.01333C22.7499 5.98758 20.7718 3.79166 18.0472 3.79166H7.411C4.68642 3.79166 2.70825 5.98758 2.70825 9.01333V16.4537C2.70825 18.0169 3.24558 19.4133 4.22058 20.3851C5.06125 21.2247 6.15867 21.6667 7.39367 21.6667H18.0472ZM7.39042 23.2917C5.71883 23.2917 4.226 22.685 3.07334 21.5367C1.78959 20.2562 1.08325 18.4513 1.08325 16.4537V9.01333C1.08325 5.11008 3.8035 2.16666 7.411 2.16666H18.0472C21.6547 2.16666 24.3749 5.11008 24.3749 9.01333V16.4537C24.3749 18.4513 23.6686 20.2562 22.3848 21.5367C21.2333 22.6839 19.7393 23.2917 18.0645 23.2917H7.39042Z"
                                                    fill="#050B20" />
                                            </svg>
                                        </span>
                                        Email
                                    </h6>
                                    <div class="text">ali@boxcars.com</div>
                                </div>
                                <div class="content-box">
                                    <h6 class="title">
                                        <span class="icon">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.5126 10.9886C23.1042 10.9886 22.7532 10.682 22.7066 10.2671C22.2949 6.60979 19.4533 3.77145 15.796 3.3652C15.3507 3.31537 15.029 2.91454 15.0788 2.4682C15.1276 2.02295 15.5273 1.69037 15.9758 1.75103C20.3926 2.2407 23.8246 5.66837 24.3207 10.0851C24.3717 10.5315 24.0499 10.9333 23.6047 10.9832C23.5743 10.9864 23.5429 10.9886 23.5126 10.9886Z"
                                                    fill="#E1E1E1" />
                                                <path
                                                    d="M19.676 11.0003C19.2947 11.0003 18.9556 10.7316 18.8798 10.3438C18.5678 8.74044 17.3317 7.50436 15.7305 7.19344C15.2896 7.10786 15.0025 6.68211 15.0881 6.24119C15.1737 5.80027 15.6103 5.51319 16.0403 5.59877C18.2948 6.03644 20.0357 7.77628 20.4744 10.0318C20.56 10.4738 20.2729 10.8995 19.8331 10.9851C19.78 10.9949 19.728 11.0003 19.676 11.0003Z"
                                                    fill="#E1E1E1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.10554 17.8102C13.2113 22.9171 16.6108 24.2561 18.758 24.2561C19.8175 24.2561 20.5737 23.93 21.0774 23.5681C21.1002 23.5551 23.4315 22.1295 23.8399 19.9715C24.0328 18.9586 23.7511 17.9565 23.0274 17.0725C20.0461 13.4531 18.5273 13.7911 16.8503 14.6068C15.82 15.1116 15.0064 15.5038 12.7087 13.2082C10.4122 10.9108 10.8084 10.0971 11.3099 9.06703C12.1267 7.39003 12.4628 5.87083 8.84221 2.88733C7.96038 2.16692 6.96479 1.88525 5.95296 2.07483C3.82638 2.47242 2.39421 4.76583 2.39421 4.76583C1.25454 6.36592 0.481047 10.1868 8.10554 17.8102ZM6.28446 3.66517C6.37979 3.65 6.47404 3.64133 6.56721 3.64133C6.99188 3.64133 7.40138 3.80708 7.80979 4.14292C10.7294 6.54789 10.36 7.30624 9.84864 8.35598C9.08055 9.93439 8.67863 11.4749 11.5593 14.3576C14.4431 17.2404 15.9847 16.8385 17.5609 16.0682L17.5635 16.0669C18.612 15.5573 19.37 15.1889 21.7718 18.1049C22.1824 18.6054 22.3395 19.1059 22.2507 19.6335C22.0459 20.8468 20.6354 21.9334 20.2086 22.1977C18.68 23.2876 14.9999 22.4068 9.25388 16.6619C3.51004 10.917 2.62821 7.23692 3.75704 5.64983C3.98238 5.28258 5.07329 3.86992 6.28446 3.66517Z"
                                                    fill="#050B20" />
                                            </svg>

                                        </span>
                                        Phone
                                    </h6>
                                    <div class="text">+76 956 039 967</div>
                                </div>
                                <div class="social-icons">
                                    <h6 class="title">Follow us</h6>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End calculater-section -->

            <!-- office-section -->
            <div class="ofice-section">
                <div class="boxcar-title">
                    <h2>Our Offices</h2>
                </div>
                <div class="row">
                    <!-- ofice-block -->
                    <div class="ofice-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <h6 class="title">San Francisco</h6>
                            <div class="text">329 Queensberry Street, North Melbourne
                                VIC3051, Australia.
                            </div>
                            <a href="#" class="ofice-btn">See on Map<svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" height="14" viewbox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_801_1108)">
                                        <path
                                            d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                            fill="#050B20"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_801_1108">
                                            <rect width="14" height="14" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                            <ul class="contact-list">
                                <li>
                                    <!-- <i class="fa-solid fa-envelope"></i> -->
                                    <span class="icon">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.7585 14.5869C12.0338 14.5869 11.3112 14.3474 10.7067 13.8686L5.84791 9.95128C5.49799 9.66962 5.44383 9.1572 5.72441 8.80837C6.00716 8.46062 6.5185 8.40537 6.86733 8.68595L11.7218 12.5989C12.3317 13.0821 13.1908 13.0821 13.805 12.5946L18.6107 8.68812C18.9595 8.4032 19.4709 8.45737 19.7547 8.8062C20.0374 9.15395 19.9843 9.66528 19.6366 9.94912L14.8223 13.8621C14.2134 14.3453 13.4854 14.5869 12.7585 14.5869Z"
                                                fill="#E1E1E1" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.0473 21.6667C18.0495 21.6645 18.0581 21.6667 18.0646 21.6667C19.3007 21.6667 20.397 21.2247 21.2377 20.3851C22.2138 19.4134 22.75 18.0169 22.75 16.4537V9.01335C22.75 5.9876 20.7719 3.79169 18.0473 3.79169H7.41112C4.68654 3.79169 2.70837 5.9876 2.70837 9.01335V16.4537C2.70837 18.0169 3.24571 19.4134 4.22071 20.3851C5.06137 21.2247 6.15879 21.6667 7.39379 21.6667H18.0473ZM7.39054 23.2917C5.71896 23.2917 4.22612 22.685 3.07346 21.5367C1.78971 20.2562 1.08337 18.4514 1.08337 16.4537V9.01335C1.08337 5.1101 3.80362 2.16669 7.41112 2.16669H18.0473C21.6548 2.16669 24.375 5.1101 24.375 9.01335V16.4537C24.375 18.4514 23.6687 20.2562 22.385 21.5367C21.2334 22.6839 19.7395 23.2917 18.0646 23.2917H7.39054Z"
                                                fill="#050B20" />
                                        </svg>
                                    </span>
                                    ali@boxcars.com
                                </li>
                                <li>
                                    <!-- <i class="fa-solid fa-phone"></i> -->
                                    <span class="icon">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.5124 10.9886C23.104 10.9886 22.753 10.6821 22.7064 10.2671C22.2948 6.6098 19.4532 3.77147 15.7959 3.36522C15.3506 3.31538 15.0289 2.91455 15.0787 2.46822C15.1274 2.02297 15.5272 1.69038 15.9757 1.75105C20.3924 2.24072 23.8244 5.66838 24.3206 10.0851C24.3715 10.5315 24.0498 10.9333 23.6045 10.9832C23.5742 10.9864 23.5428 10.9886 23.5124 10.9886Z"
                                                fill="#E1E1E1" />
                                            <path
                                                d="M19.676 11.0003C19.2947 11.0003 18.9556 10.7316 18.8798 10.3438C18.5678 8.74044 17.3317 7.50435 15.7305 7.19344C15.2896 7.10785 15.0025 6.6821 15.0881 6.24119C15.1737 5.80027 15.6103 5.51319 16.0403 5.59877C18.2948 6.03644 20.0357 7.77627 20.4744 10.0318C20.56 10.4738 20.2729 10.8995 19.8331 10.9851C19.78 10.9949 19.728 11.0003 19.676 11.0003Z"
                                                fill="#E1E1E1" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.10567 17.8102C13.2115 22.917 16.611 24.256 18.7581 24.256C19.8176 24.256 20.5738 23.9299 21.0776 23.5681C21.1003 23.5551 23.4316 22.1294 23.8401 19.9714C24.0329 18.9585 23.7512 17.9564 23.0276 17.0724C20.0462 13.453 18.5274 13.791 16.8504 14.6068C15.8201 15.1116 15.0066 15.5038 12.7088 13.2082C10.4124 10.9108 10.8085 10.0971 11.31 9.067C12.1268 7.39 12.4629 5.8708 8.84233 2.8873C7.9605 2.16689 6.96492 1.88522 5.95308 2.0748C3.8265 2.47239 2.39433 4.7658 2.39433 4.7658C1.25467 6.36589 0.481169 10.1868 8.10567 17.8102ZM6.28458 3.66514C6.37992 3.64997 6.47417 3.6413 6.56733 3.6413C6.992 3.6413 7.4015 3.80705 7.80992 4.14289C10.7295 6.54786 10.3601 7.30621 9.84876 8.35595C9.08068 9.93437 8.67875 11.4749 11.5594 14.3576C14.4432 17.2404 15.9848 16.8384 17.5611 16.0682L17.5637 16.0669C18.6121 15.5573 19.3701 15.1888 21.772 18.1049C22.1826 18.6054 22.3396 19.1059 22.2508 19.6334C22.0461 20.8468 20.6356 21.9334 20.2087 22.1977C18.6801 23.2875 15.0001 22.4068 9.254 16.6619C3.51016 10.9169 2.62833 7.23689 3.75716 5.6498C3.9825 5.28255 5.07342 3.86989 6.28458 3.66514Z"
                                                fill="#050B20" />
                                        </svg>
                                    </span>
                                    +76 956 039 967
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ofice-block -->
                    <div class="ofice-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <h6 class="title">New York</h6>
                            <div class="text">329 Queensberry Street, North Melbourne
                                VIC3051, Australia.
                            </div>
                            <a href="#" class="ofice-btn">See on Map<svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" height="14" viewbox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_801_1108)">
                                        <path
                                            d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                            fill="#050B20"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_801_1108">
                                            <rect width="14" height="14" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                            <ul class="contact-list">
                                <li>
                                    <span class="icon">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.7585 14.5869C12.0338 14.5869 11.3112 14.3474 10.7067 13.8686L5.84791 9.95128C5.49799 9.66962 5.44383 9.1572 5.72441 8.80837C6.00716 8.46062 6.5185 8.40537 6.86733 8.68595L11.7218 12.5989C12.3317 13.0821 13.1908 13.0821 13.805 12.5946L18.6107 8.68812C18.9595 8.4032 19.4709 8.45737 19.7547 8.8062C20.0374 9.15395 19.9843 9.66528 19.6366 9.94912L14.8223 13.8621C14.2134 14.3453 13.4854 14.5869 12.7585 14.5869Z"
                                                fill="#E1E1E1" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.0473 21.6667C18.0495 21.6645 18.0581 21.6667 18.0646 21.6667C19.3007 21.6667 20.397 21.2247 21.2377 20.3851C22.2138 19.4134 22.75 18.0169 22.75 16.4537V9.01335C22.75 5.9876 20.7719 3.79169 18.0473 3.79169H7.41112C4.68654 3.79169 2.70837 5.9876 2.70837 9.01335V16.4537C2.70837 18.0169 3.24571 19.4134 4.22071 20.3851C5.06137 21.2247 6.15879 21.6667 7.39379 21.6667H18.0473ZM7.39054 23.2917C5.71896 23.2917 4.22612 22.685 3.07346 21.5367C1.78971 20.2562 1.08337 18.4514 1.08337 16.4537V9.01335C1.08337 5.1101 3.80362 2.16669 7.41112 2.16669H18.0473C21.6548 2.16669 24.375 5.1101 24.375 9.01335V16.4537C24.375 18.4514 23.6687 20.2562 22.385 21.5367C21.2334 22.6839 19.7395 23.2917 18.0646 23.2917H7.39054Z"
                                                fill="#050B20" />
                                        </svg>
                                    </span>
                                    ali@boxcars.com
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.5124 10.9886C23.104 10.9886 22.753 10.6821 22.7064 10.2671C22.2948 6.6098 19.4532 3.77147 15.7959 3.36522C15.3506 3.31538 15.0289 2.91455 15.0787 2.46822C15.1274 2.02297 15.5272 1.69038 15.9757 1.75105C20.3924 2.24072 23.8244 5.66838 24.3206 10.0851C24.3715 10.5315 24.0498 10.9333 23.6045 10.9832C23.5742 10.9864 23.5428 10.9886 23.5124 10.9886Z"
                                                fill="#E1E1E1" />
                                            <path
                                                d="M19.676 11.0003C19.2947 11.0003 18.9556 10.7316 18.8798 10.3438C18.5678 8.74044 17.3317 7.50435 15.7305 7.19344C15.2896 7.10785 15.0025 6.6821 15.0881 6.24119C15.1737 5.80027 15.6103 5.51319 16.0403 5.59877C18.2948 6.03644 20.0357 7.77627 20.4744 10.0318C20.56 10.4738 20.2729 10.8995 19.8331 10.9851C19.78 10.9949 19.728 11.0003 19.676 11.0003Z"
                                                fill="#E1E1E1" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.10567 17.8102C13.2115 22.917 16.611 24.256 18.7581 24.256C19.8176 24.256 20.5738 23.9299 21.0776 23.5681C21.1003 23.5551 23.4316 22.1294 23.8401 19.9714C24.0329 18.9585 23.7512 17.9564 23.0276 17.0724C20.0462 13.453 18.5274 13.791 16.8504 14.6068C15.8201 15.1116 15.0066 15.5038 12.7088 13.2082C10.4124 10.9108 10.8085 10.0971 11.31 9.067C12.1268 7.39 12.4629 5.8708 8.84233 2.8873C7.9605 2.16689 6.96492 1.88522 5.95308 2.0748C3.8265 2.47239 2.39433 4.7658 2.39433 4.7658C1.25467 6.36589 0.481169 10.1868 8.10567 17.8102ZM6.28458 3.66514C6.37992 3.64997 6.47417 3.6413 6.56733 3.6413C6.992 3.6413 7.4015 3.80705 7.80992 4.14289C10.7295 6.54786 10.3601 7.30621 9.84876 8.35595C9.08068 9.93437 8.67875 11.4749 11.5594 14.3576C14.4432 17.2404 15.9848 16.8384 17.5611 16.0682L17.5637 16.0669C18.6121 15.5573 19.3701 15.1888 21.772 18.1049C22.1826 18.6054 22.3396 19.1059 22.2508 19.6334C22.0461 20.8468 20.6356 21.9334 20.2087 22.1977C18.6801 23.2875 15.0001 22.4068 9.254 16.6619C3.51016 10.9169 2.62833 7.23689 3.75716 5.6498C3.9825 5.28255 5.07342 3.86989 6.28458 3.66514Z"
                                                fill="#050B20" />
                                        </svg>
                                    </span>
                                    +76 956 039 967
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ofice-block -->
                    <div class="ofice-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <h6 class="title">London</h6>
                            <div class="text">329 Queensberry Street, North Melbourne
                                VIC3051, Australia.
                            </div>
                            <a href="#" class="ofice-btn">See on Map<svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" height="14" viewbox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_801_1108)">
                                        <path
                                            d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                            fill="#050B20"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_801_1108">
                                            <rect width="14" height="14" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                            <ul class="contact-list">
                                <li>
                                    <span class="icon">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.7585 14.5869C12.0338 14.5869 11.3112 14.3474 10.7067 13.8686L5.84791 9.95128C5.49799 9.66962 5.44383 9.1572 5.72441 8.80837C6.00716 8.46062 6.5185 8.40537 6.86733 8.68595L11.7218 12.5989C12.3317 13.0821 13.1908 13.0821 13.805 12.5946L18.6107 8.68812C18.9595 8.4032 19.4709 8.45737 19.7547 8.8062C20.0374 9.15395 19.9843 9.66528 19.6366 9.94912L14.8223 13.8621C14.2134 14.3453 13.4854 14.5869 12.7585 14.5869Z"
                                                fill="#E1E1E1" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.0473 21.6667C18.0495 21.6645 18.0581 21.6667 18.0646 21.6667C19.3007 21.6667 20.397 21.2247 21.2377 20.3851C22.2138 19.4134 22.75 18.0169 22.75 16.4537V9.01335C22.75 5.9876 20.7719 3.79169 18.0473 3.79169H7.41112C4.68654 3.79169 2.70837 5.9876 2.70837 9.01335V16.4537C2.70837 18.0169 3.24571 19.4134 4.22071 20.3851C5.06137 21.2247 6.15879 21.6667 7.39379 21.6667H18.0473ZM7.39054 23.2917C5.71896 23.2917 4.22612 22.685 3.07346 21.5367C1.78971 20.2562 1.08337 18.4514 1.08337 16.4537V9.01335C1.08337 5.1101 3.80362 2.16669 7.41112 2.16669H18.0473C21.6548 2.16669 24.375 5.1101 24.375 9.01335V16.4537C24.375 18.4514 23.6687 20.2562 22.385 21.5367C21.2334 22.6839 19.7395 23.2917 18.0646 23.2917H7.39054Z"
                                                fill="#050B20" />
                                        </svg>
                                    </span>
                                    ali@boxcars.com
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.5124 10.9886C23.104 10.9886 22.753 10.6821 22.7064 10.2671C22.2948 6.6098 19.4532 3.77147 15.7959 3.36522C15.3506 3.31538 15.0289 2.91455 15.0787 2.46822C15.1274 2.02297 15.5272 1.69038 15.9757 1.75105C20.3924 2.24072 23.8244 5.66838 24.3206 10.0851C24.3715 10.5315 24.0498 10.9333 23.6045 10.9832C23.5742 10.9864 23.5428 10.9886 23.5124 10.9886Z"
                                                fill="#E1E1E1" />
                                            <path
                                                d="M19.676 11.0003C19.2947 11.0003 18.9556 10.7316 18.8798 10.3438C18.5678 8.74044 17.3317 7.50435 15.7305 7.19344C15.2896 7.10785 15.0025 6.6821 15.0881 6.24119C15.1737 5.80027 15.6103 5.51319 16.0403 5.59877C18.2948 6.03644 20.0357 7.77627 20.4744 10.0318C20.56 10.4738 20.2729 10.8995 19.8331 10.9851C19.78 10.9949 19.728 11.0003 19.676 11.0003Z"
                                                fill="#E1E1E1" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.10567 17.8102C13.2115 22.917 16.611 24.256 18.7581 24.256C19.8176 24.256 20.5738 23.9299 21.0776 23.5681C21.1003 23.5551 23.4316 22.1294 23.8401 19.9714C24.0329 18.9585 23.7512 17.9564 23.0276 17.0724C20.0462 13.453 18.5274 13.791 16.8504 14.6068C15.8201 15.1116 15.0066 15.5038 12.7088 13.2082C10.4124 10.9108 10.8085 10.0971 11.31 9.067C12.1268 7.39 12.4629 5.8708 8.84233 2.8873C7.9605 2.16689 6.96492 1.88522 5.95308 2.0748C3.8265 2.47239 2.39433 4.7658 2.39433 4.7658C1.25467 6.36589 0.481169 10.1868 8.10567 17.8102ZM6.28458 3.66514C6.37992 3.64997 6.47417 3.6413 6.56733 3.6413C6.992 3.6413 7.4015 3.80705 7.80992 4.14289C10.7295 6.54786 10.3601 7.30621 9.84876 8.35595C9.08068 9.93437 8.67875 11.4749 11.5594 14.3576C14.4432 17.2404 15.9848 16.8384 17.5611 16.0682L17.5637 16.0669C18.6121 15.5573 19.3701 15.1888 21.772 18.1049C22.1826 18.6054 22.3396 19.1059 22.2508 19.6334C22.0461 20.8468 20.6356 21.9334 20.2087 22.1977C18.6801 23.2875 15.0001 22.4068 9.254 16.6619C3.51016 10.9169 2.62833 7.23689 3.75716 5.6498C3.9825 5.28255 5.07342 3.86989 6.28458 3.66514Z"
                                                fill="#050B20" />
                                        </svg>
                                    </span>
                                    +76 956 039 967
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
