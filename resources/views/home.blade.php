@extends('layouts.app')

@section('content')
    {{-- <!-- Hero image section --> --}}
    <section class="position-relative bg-body-tertiary overflow-hidden"
        style="border-bottom-right-radius: 48px; border-bottom-left-radius: 48px; margin-top: -80px; padding-top: 80px">

        {{-- <!-- Content --> --}}
        <div class="position-relative z-1 pb-sm-5 container pb-4 pt-5">
            <div class="row py-md-4 py-lg-5 mt-xl-2 mb-xl-5">
                <div class="col-lg-6 pt-xxl-4">
                    <h1 class="d-flex flex-column text-uppercase fst-italic pb-lg-3 mb-lg-4 text-white"
                        style="font-weight: 800; text-shadow: 5px 12px 5px rgba(0, 0, 0, 0.5)">
                        <span class="d-none d-lg-block" style="font-size: 90px">Connect</span>
                        <span class="d-none d-lg-block" style="font-size: 90px">Share</span>
                        <span class="d-none d-lg-block" style="font-size: 90px">Grow</span>
                        <span class="d-none d-md-block d-lg-none" style="font-size: 80px">Connect</span>
                        <span class="d-none d-md-block d-lg-none" style="font-size: 80px">Share</span>
                        <span class="d-none d-md-block d-lg-none" style="font-size: 80px">Grow</span>
                        <span class="d-md-none" style="font-size: 60px">Connect</span>
                        <span class="d-md-none" style="font-size: 60px">Share</span>
                        <span class="d-md-none" style="font-size: 60px">Grow</span>
                    </h1>
                </div>
                <div class="col-lg-6 d-flex justify-content-end pt-4">
                    <div class="vstack justify-content-end align-items-end gap-lg-3 gap-2">
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            <i class="ci-send fs-5 me-2"></i>
                            <div class="fw-medium">Instantly share contact details</div>
                        </div>
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            {{-- <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor">
                                <path
                                    d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                </path>
                            </svg> --}}
                            <i class="ci-leaf fs-5 me-2"></i>
                            <div class="fw-medium">Eco-friendly, paperless solution</div>
                        </div>
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            <i class="ci-settings fs-5 me-2"></i>
                            <div class="fw-medium">Customizable and professional design
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Foreground image --> --}}
        <img src="assets/img/home/single-product/hero/foreground2.png"
            class="position-absolute w-100 h-100 object-fit-cover z-2 d-none d-md-block start-0 top-0"
            alt="Foreground image">

        {{-- <!-- Background image --> --}}
        <img src="assets/img/home/single-product/hero/background2.jpg"
            class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Background image">
    </section>


    {{-- <!-- Features --> --}}
    <section class="pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3 container pb-5 pt-2">
        <div class="row justify-content-center pb-lg-5 mb-md-3 mb-lg-0 pb-4 pt-5">
            <div class="col-lg-6 text-center">
                <h2 class="display-4 mb-0">The Smart Way to Network.</h2>
                <p>Say goodbye to paper business cards and hello to a smarter, more efficient way to share your
                    professional identity. With BisDos Digital Business Cards, you can instantly share your contact
                    information by simply tapping on NFC-enabled phones or by using a QR code for non-NFC devices.</p>
            </div>
        </div>
        <div class="row align-items-center justify-content-center pb-lg-0 mb-lg-5 mb-4 pb-3">
            <div class="col-md-4 mb-md-0 mb-4">
                <div class="vstack gap-lg-5 gap-4">
                    <div class="vstack align-items-center gap-2 text-center">
                        <i class="ci-rss fs-5 mb-3 me-2" style="color: white; font-size: 1.5rem !important;"> </i>
                        <h3 class="h6 mb-0">Instant Contact Sharing</h3>
                        <p class="mb-0">Effortlessly share your contact information with just a tap. Say goodbye to
                            paper
                            cards and connect instantly.</p>
                    </div>
                    <div class="vstack align-items-center gap-2 text-center">
                        <i class="ci-settings fs-5 mb-3 me-2" style="color: white; font-size: 1.5rem !important;"> </i>
                        <h3 class="h6 mb-0">Customizable Designs</h3>
                        <p class="mb-0">Reflect your personal or business brand with customizable digital card designs
                            that stand out.</p>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-6 col-md-4 mb-md-0 mb-4">
                <div class="ratio" style="--cz-aspect-ratio: calc(465 / 416 * 100%)">
                    <img src="assets/img/home/single-product/01.png" alt="Image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="vstack gap-lg-5 gap-4">
                    <div class="vstack align-items-center gap-2 text-center">
                        <i class="ci-lock fs-5 mb-3 me-2" style="color: white; font-size: 1.5rem !important;"> </i>
                        <h3 class="h6 mb-0">Secure and Private</h3>
                        <p class="mb-0">Your information is safe with us. Share only what you want, keeping your data
                            secure and private.</p>
                    </div>
                    <div class="vstack align-items-center gap-2 text-center">
                        <i class="ci-activity fs-5 mb-3 me-2" style="color: white; font-size: 1.5rem !important;"> </i>
                        <h3 class="h6 mb-0">Analytics and Insights</h3>
                        <p class="mb-0">Track views and interactions to understand how your card is performing and follow
                            up effectively.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-lg btn-dark rounded-pill" onclick="window.location.href='/contact'">Get
                Your Digital Business Card</button>
        </div>
    </section>


    {{-- <!-- Features --> --}}
    <section class="pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3 container pb-5 pt-2">
        <div class="row mb-4">
            <div class="col-md-5 order-md-2 mb-md-0 mb-4">
                <div class="position-relative h-100 bg-body-tertiary rounded-5 overflow-hidden">
                    <div class="d-none d-md-block" style="height: 440px"></div>
                    <div class="d-none d-sm-block d-md-none" style="height: 350px"></div>
                    <div class="d-sm-none" style="height: 250px"></div>
                    <img src="assets/img/home/single-product/feature_01.png"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4">Sustainable & Smart</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Say goodbye to paper waste and embrace seamless, eco-friendly
                            networking. With just a tap, you can share unlimited contact details effortlessly, eliminating
                            the need for traditional business cards. Make a smarter choice for the planet while simplifying
                            your connections.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-leaf me-2"> </i>
                                <div class="fs-sm fw-medium">Go Green with Zero Paper Waste</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-sun me-2"></i>
                                <div class="fs-sm fw-medium">Smart, Effortless Networking</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-5 mb-md-0 mb-4">
                <div class="position-relative h-100 bg-body-tertiary rounded-5 overflow-hidden">
                    <div class="d-none d-md-block" style="height: 440px"></div>
                    <div class="d-none d-sm-block d-md-none" style="height: 350px"></div>
                    <div class="d-sm-none" style="height: 250px"></div>
                    <img src="assets/img/home/single-product/feature_02.png"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4 pt-lg-3">Your Personal Digital Hub</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Take networking to the next level with your own customizable
                            portfolio website and a built-in lead generation tool. Showcase your work, capture new
                            opportunities, and grow your professional presence—all in one powerful platform designed to help
                            you stand out.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-globe me-2"></i>
                                <div class="fs-sm fw-medium">Stand Out with a Personal Website</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-activity me-2"></i>
                                <div class="fs-sm fw-medium">Capture & Track New Leads</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-5 order-md-2 mb-md-0 mb-4">
                <div class="position-relative h-100 bg-body-tertiary rounded-5 overflow-hidden">
                    <div class="d-none d-md-block" style="height: 440px"></div>
                    <div class="d-none d-sm-block d-md-none" style="height: 350px"></div>
                    <div class="d-sm-none" style="height: 250px"></div>
                    <img src="assets/img/home/single-product/feature_03.png"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4">Built to Last, Rain or Shine</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Crafted for durability, these high-quality, water-resistant cards
                            are designed to withstand any environment. Whether in a busy office, an outdoor event, or on the
                            go, your card remains intact, ensuring long-term use without wear and tear.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-umbrella me-2"></i>
                                <div class="fs-sm fw-medium">Water & Scratch Resistant</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-zap me-2"></i>
                                <div class="fs-sm fw-medium">Perfect for Any Setting</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-md-0 mb-4">
                <div class="position-relative h-100 bg-body-tertiary rounded-5 overflow-hidden">
                    <div class="d-none d-md-block" style="height: 440px"></div>
                    <div class="d-none d-sm-block d-md-none" style="height: 350px"></div>
                    <div class="d-sm-none" style="height: 250px"></div>
                    <img src="assets/img/home/single-product/feature_04.png"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4 pt-lg-3">Instant & Effortless Sharing</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Connect instantly with a single tap—no apps, no typing, no hassle.
                            Your details are shared seamlessly in seconds, making networking faster, smarter, and more
                            convenient than ever before.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-rss me-2"></i>
                                <div class="fs-sm fw-medium">Tap & Connect Instantly</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-rocket me-2"></i>
                                <div class="fs-sm fw-medium">No Apps, No Extra Steps</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Color options --> --}}
    <section class="pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3 container pb-5 pt-2">
        <div class="row align-items-end justify-content-center">
            <div class="col-md-5 mb-md-0 mb-4">
                <h2 class="display-4 pb-sm-2 pb-lg-3 pb-xl-4 pb-1">Express yourself with a rainbow of colors</h2>
                <div class="list-group list-group-borderless pb-sm-2 pb-lg-3 pb-xl-4 mb-3 gap-2 pb-1" role="tablist">
                    <a class="list-group-item list-group-item-action d-flex align-items-center fs-xl fw-normal px-sm-4 active"
                        href="#freshness" data-bs-toggle="list" role="tab" aria-controls="freshness"
                        id="freshness-color" aria-selected="true" style="--cz-list-group-border-radius: 25px">
                        <span class="rounded-circle me-3 border border-2"
                            style="width: 24px; height: 24px; --cz-border-color: var(--cz-body-bg); background: linear-gradient(0deg, rgba(106,168,162,1) 0%, rgba(237,237,213,1) 100%)"></span>
                        Classic White
                        <span class="fw-semibold ms-auto ps-3">3490.00</span>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center fs-xl fw-normal px-sm-4"
                        href="#sunflower" data-bs-toggle="list" role="tab" aria-controls="sunflower"
                        id="sunflower-color" aria-selected="false" tabindex="-1"
                        style="--cz-list-group-border-radius: 25px">
                        <span class="rounded-circle me-3 border border-2"
                            style="width: 24px; height: 24px; --cz-border-color: var(--cz-body-bg); background: linear-gradient(0deg, rgba(195,72,82,1) 0%, rgba(250,227,152,1) 100%)"></span>
                        Onyx Black
                        <span class="fw-semibold ms-auto ps-3">3990.00</span>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center fs-xl fw-normal px-sm-4"
                        href="#heavenly " data-bs-toggle="list" role="tab" aria-controls="heavenly"
                        id="heavenly-color" aria-selected="false" tabindex="-1"
                        style="--cz-list-group-border-radius: 25px">
                        <span class="rounded-circle me-3 border border-2"
                            style="width: 24px; height: 24px; --cz-border-color: var(--cz-body-bg); background: linear-gradient(0deg, rgba(56,125,154,1) 0%, rgba(237,244,243,1) 100%)"></span>
                        Sapphire Blue
                        <span class="fw-semibold ms-auto ps-3">4490.00</span>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center fs-xl fw-normal px-sm-4"
                        href="#darkness" data-bs-toggle="list" role="tab" aria-controls="darkness"
                        id="darkness-color" aria-selected="false" tabindex="-1"
                        style="--cz-list-group-border-radius: 25px">
                        <span class="rounded-circle me-3 border border-2"
                            style="width: 24px; height: 24px; --cz-border-color: var(--cz-body-bg); background: linear-gradient(0deg, rgba(72,93,195,1) 0%, rgba(214,170,251,1) 100%)"></span>
                        Platinum Edition
                        <span class="fw-semibold ms-auto ps-3">6490.00</span>
                    </a>
                </div>
                <p class="fs-sm mb-sm-4">We are currently not accepting orders and are only taking preorders until we
                    launch our business. Click the button below to place a preorder and enjoy discounts <strong>upto
                        20%</strong> when our
                    products are available.</p>

                <button type="button" class="btn btn-lg btn-dark rounded-pill"
                    onclick="window.location.href='/contact'">Get Your Digital Card</button>
            </div>
            <div class="col-10 col-sm-8 col-md-7 col-xl-6 offset-xl-1">
                <div class="tab-content">
                    <div class="tab-pane show active" id="freshness" role="tabpanel" aria-labelledby="freshness-color">
                        <div class="ratio" style="--cz-aspect-ratio: calc(562 / 636 * 100%)">
                            <img src="assets/img/home/single-product/colors/freshness.png" alt="Freshness">
                        </div>
                    </div>
                    <div class="tab-pane" id="sunflower" role="tabpanel" aria-labelledby="sunflower-color">
                        <div class="ratio" style="--cz-aspect-ratio: calc(562 / 636 * 100%)">
                            <img src="assets/img/home/single-product/colors/sunflower.png" alt="Sunflower">
                        </div>
                    </div>
                    <div class="tab-pane" id="heavenly" role="tabpanel" aria-labelledby="heavenly-color">
                        <div class="ratio" style="--cz-aspect-ratio: calc(562 / 636 * 100%)">
                            <img src="assets/img/home/single-product/colors/heavenly.png" alt="Heavenly">
                        </div>
                    </div>
                    <div class="tab-pane" id="darkness" role="tabpanel" aria-labelledby="darkness-color">
                        <div class="ratio" style="--cz-aspect-ratio: calc(562 / 636 * 100%)">
                            <img src="assets/img/home/single-product/colors/darkness.png" alt="Darkness">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if user has already submitted the form
            if (!localStorage.getItem('preorderSubmitted')) {
                // Show the modal after 10 seconds
                setTimeout(function() {
                    var myModal = new bootstrap.Modal(document.getElementById('modalCentered'));
                    myModal.show();
                }, 10000);
            }

            // Handle form submission
            document.querySelector('#modalCentered form').addEventListener('submit', function() {
                localStorage.setItem('preorderSubmitted', 'true');
            });
        });
    </script>

    <style>
        .modal-content,
        .modal-body img,
        .overlay {
            border-radius: 20px;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }

        .split-modal {
            display: flex;
            max-height: 80vh;
            overflow: auto;
        }

        .image-side {
            flex: 1;
            position: relative;
            min-height: 400px;
        }

        .form-side {
            flex: 1;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .image-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1.5rem;
            color: white;
            z-index: 2;
            overflow-y: auto;
        }

        .price-tag {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 1rem;
            border-radius: 15px;
            margin-top: 1rem;
        }

        .original-price {
            text-decoration: line-through;
            opacity: 0.7;
        }

        .discounted-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4CAF50;
        }

        .badge-limited {
            background: #FF5722;
            font-size: 1.25rem;
            padding: 0.3rem 0.6rem;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .feature-list {
            list-style-type: none;
            padding-left: 0;
            margin: 1rem 0;
        }

        .feature-list li {
            margin-bottom: 0.4rem;
            position: relative;
            padding-left: 1.5rem;
            font-size: 0.9rem;
        }

        .feature-list li:before {
            content: "✓";
            color: #4CAF50;
            position: absolute;
            left: 0;
        }

        @media (max-width: 992px) {
            .split-modal {
                flex-direction: column;
                max-height: 90vh;
            }

            .image-side,
            .form-side {
                min-height: auto;
            }

            .image-content {
                position: relative;
                padding: 1rem;
            }
        }

        @media (max-width: 576px) {
            .modal-dialog {
                margin: 0.5rem auto;
            }

            .image-content h4 {
                font-size: 1.2rem;
            }

            .form-side h3 {
                font-size: 1.3rem;
            }
        }
    </style>

    <div class="modal fade" id="modalCentered" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded-5 border-0 p-0">
                <div class="modal-body p-0">
                    <div class="split-modal">
                        <!-- Left Side - Image and Offer Details -->
                        <div class="image-side">
                            <!-- Background Image -->
                            <img src="assets/img/bamboo-card.jpg" class="w-100 h-100 object-fit-cover"
                                alt="Premium Bamboo NFC Card">

                            <!-- Transparent Overlay -->
                            <div class="overlay position-absolute w-100 h-100 start-0 top-0"
                                style="background: rgba(0, 0, 0, 0.7);"></div>

                            <!-- Content -->
                            <div class="image-content">
                                <span class="badge-limited">🚨 BisDos Bamboo NFC Card</span>
                                <p class="mb-2 mt-2">🔥<strong>Special offer 3900/= </strong> <span
                                        style="text-decoration: line-through; font-size: 0.7rem;">6500/=</span> </p>

                                <ul class="feature-list">
                                    <li>Premium NFC-powered bamboo card with laser engraving</li>
                                    <li><strong>Lifetime</strong> free updates & support</li>
                                    <li>Connect <strong>6 social media profiles</strong></li>
                                    <li>Built-in <strong>lead capture system</strong></li>
                                    <li><strong>Free personal portfolio website</strong></li>
                                    <li>No hidden fees - <strong>ever</strong></li>
                                </ul>

                                <div class="mt-1">
                                    <p class="text-warning mb-0">⏳ Only 100 Personal Cards & 20 Team Cards Left!</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side - Form -->
                        <div class="form-side bg-dark text-white">
                            <h3 class="mb-3 text-center">Claim Your 40% Discount Now!</h3>
                            <p class="small mb-3 text-center">Fill this form to lock in your lifetime deal</p>

                            <!-- Pre-Order Form -->
                            <form action="{{ route('preorder.submit') }}" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <input type="text"
                                        class="form-control rounded-pill border-white bg-transparent text-white"
                                        placeholder="Your Name" name="name" required>
                                </div>
                                <div class="mb-2">
                                    <input type="email"
                                        class="form-control rounded-pill border-white bg-transparent text-white"
                                        placeholder="Email Address" name="email" required>
                                </div>
                                <div class="mb-2">
                                    <input type="tel"
                                        class="form-control rounded-pill border-white bg-transparent text-white"
                                        placeholder="Phone Number" name="phone" required>
                                </div>
                                <div class="mb-2">
                                    <select class="form-control rounded-pill border-white bg-transparent text-white"
                                        name="card_type" required>
                                        <option value="" disabled selected>Select Card Type</option>
                                        <option value="personal" class="bg-dark text-white">Personal Card (₹3,900)
                                        </option>
                                        <option value="team" class="bg-dark text-white">Team Card (₹3,900)</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <textarea style="border-radius: 1.5pc;" class="form-control border-white bg-transparent text-white"
                                        placeholder="Your Message" name="message" rows="2" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success w-100 rounded-pill fw-bold py-2">
                                    🔥 GET 40% OFF - LIMITED TIME
                                </button>
                                <p class="small mt-2 text-center">100% secure. We'll contact you to confirm details.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
