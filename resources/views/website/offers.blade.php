@extends('layouts.website')

@section('title', 'Special Offers | ' . config('app.name'))
@section('meta_description', 'AY Electronics — seasonal promotions and installments in Peshawar.')

@section('content')
    @include('website.partials.page-banner', [
        'title' => 'Special Offers',
        'icon' => 'fas fa-tag',
        'crumbs' => [['label' => 'Offers']],
    ])

    <div class="cdsec">
        <div class="con">
            <div class="cdg">
                <div class="cdt">
                    <h2>Summer Sale <span>Ends In!</span></h2>
                    <p>Don't miss out on our biggest sale of the year. Limited time offers on ACs, refrigerators, and
                        more.</p>
                    <a href="{{ route('website.products') }}" class="btn bw lg"><i class="fas fa-shopping-bag"></i> Shop Now</a>
                </div>
                <div class="cdtmr">
                    <div class="cdi"><span class="cdn" id="cd">07</span>
                        <div class="cdl">Days</div>
                    </div>
                    <div class="cdi"><span class="cdn" id="ch">23</span>
                        <div class="cdl">Hours</div>
                    </div>
                    <div class="cdi"><span class="cdn" id="cm">59</span>
                        <div class="cdl">Mins</div>
                    </div>
                    <div class="cdi"><span class="cdn" id="cs">59</span>
                        <div class="cdl">Secs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="sec">
        <div class="con">
            <div class="sh"><span class="lbl">Current Deals</span>
                <h2 class="ttl">Active <span>Promotions</span></h2>
                <div class="ln"></div>
            </div>
            <div class="ofl">
                <div class="ofv">
                    <div class="ofp">20%<span>OFF</span></div>
                </div>
                <div class="ofb"><span class="ofbdg">AC Sale</span>
                    <div class="oftl">Summer AC Sale – Up to 20% Off!</div>
                    <div class="ofds">On all Haier, Gree, and Kenwood Inverter ACs. Limited stock available.</div>
                    <div class="ofvl"><i class="fas fa-clock"></i> Valid until June 30, 2025</div>
                </div>
            </div>
            <div class="ofl">
                <div class="ofv" style="background:linear-gradient(135deg,#1a1a2e,#2d3748)">
                    <div class="ofp">15%<span>OFF</span></div>
                </div>
                <div class="ofb"><span class="ofbdg">Fridge Deal</span>
                    <div class="oftl">Refrigerator Mega Deal</div>
                    <div class="ofds">Get 15% off on all Dawlance and PEL refrigerators. Cash and installment both available.</div>
                    <div class="ofvl"><i class="fas fa-clock"></i> Valid until July 15, 2025</div>
                </div>
            </div>
            <div class="ofl">
                <div class="ofv" style="background:linear-gradient(135deg,var(--ad),var(--a))">
                    <div class="ofp">0%<span>Processing</span></div>
                </div>
                <div class="ofb"><span class="ofbdg">Installment Offer</span>
                    <div class="oftl">Zero Processing Fee – This Month Only!</div>
                    <div class="ofds">Apply for any installment plan this month and pay zero processing fee.</div>
                    <div class="ofvl"><i class="fas fa-clock"></i> Valid until {{ now()->format('F t, Y') }}</div>
                </div>
            </div>
            <div class="ofl">
                <div class="ofv">
                    <div class="ofp">Free<span>Delivery</span></div>
                </div>
                <div class="ofb"><span class="ofbdg">Free Delivery</span>
                    <div class="oftl">Free Delivery on Orders Above Rs. 25,000</div>
                    <div class="ofds">Free same-day delivery within Peshawar city on qualifying purchases.</div>
                    <div class="ofvl"><i class="fas fa-clock"></i> Ongoing Offer</div>
                </div>
            </div>
            <div style="text-align:center;margin-top:44px">
                <a href="{{ route('website.category', 'ac') }}" class="btn bp lg"><i class="fas fa-wind"></i> View AC Offers</a>
                <a href="{{ route('website.installments') }}" class="btn bo lg"><i class="fas fa-credit-card"></i> Installment Plans</a>
            </div>
        </div>
    </section>
@endsection
