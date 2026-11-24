@extends('layouts.website')

@section('title', 'Home | ' . config('app.name'))
@section('meta_description', 'AY Electronics - Premium home appliances in Peshawar with cash and easy installment plans.')

@section('content')
    <!-- HERO SLIDER -->
    <section class="hero">
        <div class="hsl" id="hsl">
            <div class="hs s1">
                <div class="hl">
                    <span class="hlbl"><i class="fas fa-bolt"></i> Summer Sale 2025</span>
                    <h1 class="hh1">Premium <span>Electronics</span><br>For Your Home</h1>
                    <p class="hp">Cash &amp; easy installment plans on Pakistan's top appliance brands. Visit Darmangi Garden, Warsak Road, Peshawar.</p>
                    <div class="hbtns">
                        <a href="{{ route('website.products') }}" class="btn bp lg"><i class="fas fa-shopping-bag"></i> Shop Now</a>
                        <a href="{{ route('website.installments') }}" class="btn bo lg"><i class="fas fa-credit-card"></i> Easy Installments</a>
                    </div>
                    <div class="hbdgs">
                        <div class="hbdg"><i class="fas fa-check-circle"></i> Cash Available</div>
                        <div class="hbdg"><i class="fas fa-calendar-alt"></i> 3–12 Month Plans</div>
                        <div class="hbdg"><i class="fas fa-headset"></i> After-Sales Support</div>
                    </div>
                </div>
                <div class="hr">
                    <div class="hf f1"><i class="fas fa-wind"></i> Inverter ACs Available</div>
                    <div class="hf f2"><i class="fas fa-tag"></i> Up to 20% OFF</div>
                    <div class="hf f3"><i class="fas fa-star" style="color:#ffb300"></i> Top Brands</div>
                    <div class="hri">
                        <div class="hrc">
                            <div class="hrco"><i class="fas fa-plug"></i></div>
                            <div class="hrlt">{{ config('app.name') }}</div>
                            <div class="hrds">Darmangi Garden, Warsak Road, Peshawar</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs s2">
                <div class="hl">
                    <span class="hlbl"><i class="fas fa-snowflake"></i> Cool Deals</span>
                    <h1 class="hh1">Stay Cool<br><span>This Summer</span></h1>
                    <p class="hp">Haier, Gree, Dawlance &amp; Kenwood Inverter ACs — up to 20% off with easy monthly installments.</p>
                    <div class="hbtns">
                        <a href="{{ route('website.category', 'ac') }}" class="btn bp lg"><i class="fas fa-wind"></i> Browse ACs</a>
                        <a href="{{ route('website.contact') }}" class="btn bo lg"><i class="fas fa-phone"></i> Call Us</a>
                    </div>
                    <div class="hbdgs">
                        <div class="hbdg"><i class="fas fa-shipping-fast"></i> Free Delivery*</div>
                        <div class="hbdg"><i class="fas fa-tools"></i> Free Installation</div>
                    </div>
                </div>
                <div class="hr">
                    <div class="hf f1"><i class="fas fa-wind"></i> 1T &amp; 1.5T Available</div>
                    <div class="hf f2"><i class="fas fa-bolt"></i> Inverter Technology</div>
                    <div class="hri">
                        <div class="hrc">
                            <div class="hrco"><i class="fas fa-wind"></i></div>
                            <div class="hrlt">Inverter ACs</div>
                            <div class="hrds">Save up to 60% on electricity</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs s3">
                <div class="hl">
                    <span class="hlbl"><i class="fas fa-credit-card"></i> Easy Installments</span>
                    <h1 class="hh1">Own It Today,<br><span>Pay Monthly</span></h1>
                    <p class="hp">3, 6, or 12-month plans with minimal documentation. Upgrade your home affordably.</p>
                    <div class="hbtns">
                        <a href="{{ route('website.installments') }}" class="btn bp lg"><i class="fas fa-calendar-check"></i> Apply Now</a>
                        <a href="{{ route('website.products') }}" class="btn bo lg"><i class="fas fa-th-large"></i> All Products</a>
                    </div>
                    <div class="hbdgs">
                        <div class="hbdg"><i class="fas fa-percentage"></i> 0% Processing*</div>
                        <div class="hbdg"><i class="fas fa-file-alt"></i> Simple Docs</div>
                    </div>
                </div>
                <div class="hr">
                    <div class="hf f1"><i class="fas fa-calendar-alt"></i> 3–12 Month Plans</div>
                    <div class="hf f2"><i class="fas fa-shield-alt"></i> Trusted Process</div>
                    <div class="hri">
                        <div class="hrc">
                            <div class="hrco"><i class="fas fa-credit-card"></i></div>
                            <div class="hrlt">Easy Installments</div>
                            <div class="hrds">Flexible plans for every budget</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="sarr pv" id="prev" type="button"><i class="fas fa-chevron-left"></i></button>
        <button class="sarr nx" id="nxt" type="button"><i class="fas fa-chevron-right"></i></button>
        <div class="sdots">
            <button class="dot on" data-i="0" type="button"></button>
            <button class="dot" data-i="1" type="button"></button>
            <button class="dot" data-i="2" type="button"></button>
        </div>
    </section>

    <div class="fstrip">
        <div class="con">
            <div class="fgrid">
                <div class="fi"><i class="fas fa-money-bill-wave"></i>
                    <div>
                        <div class="fit">Cash &amp; Installment</div>
                        <div class="fid">Flexible payment options</div>
                    </div>
                </div>
                <div class="fi"><i class="fas fa-shipping-fast"></i>
                    <div>
                        <div class="fit">Free Delivery*</div>
                        <div class="fid">Within Peshawar city</div>
                    </div>
                </div>
                <div class="fi"><i class="fas fa-tools"></i>
                    <div>
                        <div class="fit">Free Installation</div>
                        <div class="fid">On all AC units</div>
                    </div>
                </div>
                <div class="fi"><i class="fas fa-headset"></i>
                    <div>
                        <div class="fit">After-Sales Support</div>
                        <div class="fid">Expert service team</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="sec">
        <div class="con">
            <div class="sh">
                <span class="lbl"><i class="fas fa-th-large"></i> Browse By</span>
                <h2 class="ttl">Shop By <span>Category</span></h2>
                <p class="sub">Explore our wide range of premium home appliances from top Pakistani brands</p>
                <div class="ln"></div>
            </div>
            <div class="cgrid">
                @foreach (($categories ?? []) as $slug => $cat)
                    <a href="{{ route('website.category', $slug) }}" class="cc" data-aos>
                        <div class="ci"><i class="{{ $cat['icon'] ?? 'fas fa-circle' }}"></i></div>
                        <div class="cn">{{ $cat['title'] ?? $slug }}</div>
                        <div class="cct">{{ $cat['home_count_label'] ?? 'View Products' }}</div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="seca" id="featured">
        <div class="con">
            <div class="sh">
                <span class="lbl"><i class="fas fa-star"></i> Top Picks</span>
                <h2 class="ttl">Featured <span>Products</span></h2>
                <p class="sub">Handpicked bestsellers with the best prices and installment options in Peshawar</p>
                <div class="ln"></div>
            </div>
            <div class="pgrid">
                @foreach ($featuredProducts ?? [] as $p)
                    @include('website.partials.product-card', ['p' => $p])
                @endforeach
            </div>
            <div style="text-align:center;margin-top:40px">
                <a href="{{ route('website.products') }}" class="btn bp lg"><i class="fas fa-th-large"></i> View All Products</a>
            </div>
        </div>
    </section>

    <div class="ib">
        <div class="con">
            <div class="ibin">
                <div>
                    <h2><i class="fas fa-credit-card"></i> Cash &amp; Easy Installments Available!</h2>
                    <p>Own any appliance today with flexible 3, 6, or 12-month plans. Minimal documentation, quick approval.</p>
                    <div class="ibf">
                        <div class="ibfi"><i class="fas fa-check-circle"></i> 3 Month Plan</div>
                        <div class="ibfi"><i class="fas fa-check-circle"></i> 6 Month Plan</div>
                        <div class="ibfi"><i class="fas fa-check-circle"></i> 12 Month Plan</div>
                        <div class="ibfi"><i class="fas fa-check-circle"></i> Zero Down Payment*</div>
                    </div>
                </div>
                <div><a href="{{ route('website.installments') }}" class="btn bw lg"><i class="fas fa-arrow-right"></i> Learn More</a></div>
            </div>
        </div>
    </div>

    <section class="sec">
        <div class="con">
            <div class="sh">
                <span class="lbl"><i class="fas fa-award"></i> Our Promise</span>
                <h2 class="ttl">Why Choose <span>{{ config('app.name') }}</span>?</h2>
                <p class="sub">Committed to providing the best electronics experience in Peshawar</p>
                <div class="ln"></div>
            </div>
            <div class="wgrid">
                <div class="wc" data-aos>
                    <div class="wico"><i class="fas fa-medal"></i></div>
                    <h3 class="wtl">Genuine Products</h3>
                    <p class="wds">100% original branded appliances with manufacturer warranty. No counterfeits ever.</p>
                </div>
                <div class="wc" data-aos>
                    <div class="wico"><i class="fas fa-credit-card"></i></div>
                    <h3 class="wtl">Easy Installments</h3>
                    <p class="wds">Flexible 3, 6 and 12-month plans with minimal paperwork and quick approval.</p>
                </div>
                <div class="wc" data-aos>
                    <div class="wico"><i class="fas fa-tags"></i></div>
                    <h3 class="wtl">Best Prices</h3>
                    <p class="wds">Competitive market prices with regular seasonal discounts on top brands.</p>
                </div>
                <div class="wc" data-aos>
                    <div class="wico"><i class="fas fa-shipping-fast"></i></div>
                    <h3 class="wtl">Fast Delivery</h3>
                    <p class="wds">Same-day delivery within Peshawar city. Free delivery on qualifying purchases.</p>
                </div>
                <div class="wc" data-aos>
                    <div class="wico"><i class="fas fa-tools"></i></div>
                    <h3 class="wtl">Expert Installation</h3>
                    <p class="wds">Professional installation by certified technicians at no extra cost.</p>
                </div>
                <div class="wc" data-aos>
                    <div class="wico"><i class="fas fa-headset"></i></div>
                    <h3 class="wtl">After-Sales Support</h3>
                    <p class="wds">Dedicated support for all after-sale queries, repairs, and warranty claims.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="seca">
        <div class="con">
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

    <section class="sec">
        <div class="con">
            <div class="sh">
                <span class="lbl"><i class="fas fa-comments"></i> Reviews</span>
                <h2 class="ttl">What Our <span>Customers Say</span></h2>
                <p class="sub">Real feedback from verified customers in Peshawar</p>
                <div class="ln"></div>
            </div>
            <div class="tgrid">
                <div class="tc" data-aos>
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="ttxt">"Bought a Haier Inverter AC on installment. The process was smooth, delivery was fast, and installation team was professional. Highly recommended!"</p>
                    <div class="tau">
                        <div class="tav">MA</div>
                        <div>
                            <div class="tnm">Muhammad Asif</div>
                            <div class="tct">Warsak Road, Peshawar</div>
                        </div>
                    </div>
                </div>
                <div class="tc" data-aos>
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="ttxt">"Great store with genuine products. Got a Dawlance refrigerator at the best price in Peshawar. Staff is very helpful and knowledgeable."</p>
                    <div class="tau">
                        <div class="tav">SK</div>
                        <div>
                            <div class="tnm">Shahid Khan</div>
                            <div class="tct">Hayatabad, Peshawar</div>
                        </div>
                    </div>
                </div>
                <div class="tc" data-aos>
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                    <p class="ttxt">"Excellent service! Samsung washing machine on installment was very convenient with minimal documentation. Will definitely shop here again."</p>
                    <div class="tau">
                        <div class="tav">FA</div>
                        <div>
                            <div class="tnm">Farhan Ali</div>
                            <div class="tct">Gulbahar, Peshawar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="con">
            <h2>Visit <span>{{ config('app.name') }}</span> Today!</h2>
            <p>Located at Darmangi Garden Street 1, Warsak Road, Peshawar. Open daily 9 AM – 9 PM.</p>
            <div class="ctab">
                <a href="https://wa.me/923001234567" class="btn bg lg" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i>
                    WhatsApp Us</a>
                <a href="tel:+923001234567" class="btn bw lg"><i class="fas fa-phone"></i> Call Now</a>
                <a href="{{ route('website.contact') }}" class="btn bo lg" style="border-color:#fff;color:#fff"><i class="fas fa-map-marker-alt"></i> Get Directions</a>
            </div>
        </div>
    </section>
@endsection
