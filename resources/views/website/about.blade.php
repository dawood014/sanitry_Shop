@extends('layouts.website')

@section('title', 'About Us | ' . config('app.name'))
@section('meta_description', 'AY Electronics - Premium home appliances Peshawar.')

@section('content')
    @include('website.partials.page-banner', [
        'title' => 'About AY Electronics',
        'icon' => 'fas fa-info-circle',
        'crumbs' => [['label' => 'About Us']],
    ])

    <section class="sec">
        <div class="con">
            <div class="abg">
                <div class="abim">
                    <div class="bi"><i class="fas fa-store"></i></div>
                    <h3>{{ config('app.name') }}</h3>
                    <p style="opacity:.82">Darmangi Garden Street 1<br>Warsak Road, Peshawar</p>
                </div>
                <div>
                    <span class="lbl">Our Story</span>
                    <h2 class="ttl">Peshawar's Trusted <span>Electronics Partner</span></h2>
                    <p>{{ config('app.name') }} has been serving the people of Peshawar since 2019. We are committed to providing
                        genuine, high-quality home appliances from Pakistan's top brands including Haier, Dawlance, PEL,
                        Gree, Kenwood, and Samsung.</p>
                    <p style="margin-top:14px">Located at Darmangi Garden, Warsak Road, we offer cash purchases and easy
                        3, 6, and 12-month installment plans with minimal documentation and quick approval.</p>
                    <div class="vgrid">
                        <div class="vi">
                            <div class="vico"><i class="fas fa-medal"></i></div>
                            <div>
                                <div class="vtl">100% Genuine Products</div>
                                <div class="vds">All products come with manufacturer warranty</div>
                            </div>
                        </div>
                        <div class="vi">
                            <div class="vico"><i class="fas fa-handshake"></i></div>
                            <div>
                                <div class="vtl">Customer First</div>
                                <div class="vds">Your satisfaction is our top priority</div>
                            </div>
                        </div>
                        <div class="vi">
                            <div class="vico"><i class="fas fa-credit-card"></i></div>
                            <div>
                                <div class="vtl">Easy Installments</div>
                                <div class="vds">Flexible plans for every budget</div>
                            </div>
                        </div>
                        <div class="vi">
                            <div class="vico"><i class="fas fa-tools"></i></div>
                            <div>
                                <div class="vtl">Expert Service</div>
                                <div class="vds">Professional installation and after-sales support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seca">
        <div class="con">
            <div class="sh"><span class="lbl">Numbers</span>
                <h2 class="ttl">Our <span>Achievements</span></h2>
                <div class="ln"></div>
            </div>
            <div class="sgrid">
                <div class="si2" data-aos>
                    <div class="sico"><i class="fas fa-users"></i></div><span class="snum" data-target="2000" data-suffix="+">0+</span>
                    <div class="slbl">Happy Customers</div>
                </div>
                <div class="si2" data-aos>
                    <div class="sico"><i class="fas fa-box"></i></div><span class="snum" data-target="500" data-suffix="+">0+</span>
                    <div class="slbl">Products Available</div>
                </div>
                <div class="si2" data-aos>
                    <div class="sico"><i class="fas fa-certificate"></i></div><span class="snum" data-target="10" data-suffix="+">0+</span>
                    <div class="slbl">Premium Brands</div>
                </div>
                <div class="si2" data-aos>
                    <div class="sico"><i class="fas fa-store"></i></div><span class="snum" data-target="5" data-suffix="+">0+</span>
                    <div class="slbl">Years in Business</div>
                </div>
            </div>
        </div>
    </section>
@endsection
