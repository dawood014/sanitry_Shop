@extends('layouts.website')

@section('title', 'Installment Plans | ' . config('app.name'))

@section('content')
    @include('website.partials.page-banner', [
        'title' => 'Installment Plans',
        'icon' => 'fas fa-credit-card',
        'crumbs' => [['label' => 'Installments']],
    ])

    <section class="sec">
        <div class="con">
            <div class="sh"><span class="lbl">How It Works</span>
                <h2 class="ttl">Simple <span>4-Step Process</span></h2>
                <div class="ln"></div>
            </div>
            <div class="isteps">
                <div class="isp">
                    <div class="isn">1</div>
                    <div class="istl">Choose Product</div>
                    <p class="isds">Browse our range and select your desired appliance</p>
                </div>
                <div class="isp">
                    <div class="isn">2</div>
                    <div class="istl">Select Plan</div>
                    <p class="isds">Choose 3, 6, or 12 month installment option</p>
                </div>
                <div class="isp">
                    <div class="isn">3</div>
                    <div class="istl">Submit Docs</div>
                    <p class="isds">Provide CNIC copy and proof of income</p>
                </div>
                <div class="isp">
                    <div class="isn">4</div>
                    <div class="istl">Get Delivery</div>
                    <p class="isds">Same-day delivery and installation arranged</p>
                </div>
            </div>
        </div>
    </section>

    <section class="seca">
        <div class="con">
            <div class="sh"><span class="lbl">Plans</span>
                <h2 class="ttl">Monthly <span>Installment Plans</span></h2>
                <div class="ln"></div>
            </div>
            <table class="itbl">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Cash Price</th>
                        <th>3 Months/mo</th>
                        <th>6 Months/mo</th>
                        <th>12 Months/mo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Haier 1.5T Inverter AC</td><td>Rs. 95,000</td><td class="g">Rs. 33,250</td><td class="g">Rs. 17,100</td><td class="g">Rs. 8,867</td></tr>
                    <tr><td>Haier 14 CFT Refrigerator</td><td>Rs. 55,000</td><td class="g">Rs. 19,250</td><td class="g">Rs. 9,900</td><td class="g">Rs. 5,133</td></tr>
                    <tr><td>Haier 8KG Auto Washer</td><td>Rs. 45,000</td><td class="g">Rs. 15,750</td><td class="g">Rs. 8,100</td><td class="g">Rs. 4,200</td></tr>
                    <tr><td>Samsung 7KG Eco Bubble</td><td>Rs. 65,000</td><td class="g">Rs. 22,750</td><td class="g">Rs. 11,700</td><td class="g">Rs. 6,067</td></tr>
                    <tr><td>Dawlance 25L Microwave</td><td>Rs. 18,000</td><td class="g">Rs. 6,300</td><td class="g">Rs. 3,240</td><td class="g">Rs. 1,680</td></tr>
                    <tr><td>Kenwood 2T Inverter AC</td><td>Rs. 125,000</td><td class="g">Rs. 43,750</td><td class="g">Rs. 22,500</td><td class="g">Rs. 11,667</td></tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="sec">
        <div class="con">
            <div class="sh"><span class="lbl">Requirements</span>
                <h2 class="ttl">Required <span>Documents</span></h2>
                <div class="ln"></div>
            </div>
            <div class="dgrid">
                <div class="di"><div class="dico"><i class="fas fa-id-card"></i></div><div><div class="dtl">CNIC Copy</div><div class="dnt">Original + 2 photocopies required</div></div></div>
                <div class="di"><div class="dico"><i class="fas fa-file-invoice"></i></div><div><div class="dtl">Proof of Income</div><div class="dnt">Salary slip or business docs</div></div></div>
                <div class="di"><div class="dico"><i class="fas fa-home"></i></div><div><div class="dtl">Utility Bill</div><div class="dnt">Recent electricity or gas bill</div></div></div>
                <div class="di"><div class="dico"><i class="fas fa-camera"></i></div><div><div class="dtl">Passport Photo</div><div class="dnt">2 recent passport-size photos</div></div></div>
                <div class="di"><div class="dico"><i class="fas fa-mobile-alt"></i></div><div><div class="dtl">Active SIM</div><div class="dnt">Same as CNIC name</div></div></div>
                <div class="di"><div class="dico"><i class="fas fa-money-check-alt"></i></div><div><div class="dtl">Down Payment</div><div class="dnt">Optional – reduces monthly amount</div></div></div>
            </div>
        </div>
    </section>

    <div class="ib">
        <div class="con">
            <div class="ibin">
                <div>
                    <h2><i class="fas fa-credit-card"></i> Apply for Installment Today!</h2>
                    <p>Visit our store or WhatsApp us to start your installment plan application.</p>
                    <div class="ibf">
                        <div class="ibfi"><i class="fas fa-check-circle"></i> Quick Approval</div>
                        <div class="ibfi"><i class="fas fa-check-circle"></i> Minimal Docs</div>
                        <div class="ibfi"><i class="fas fa-check-circle"></i> Same-Day Delivery</div>
                    </div>
                </div>
                <div><a href="https://wa.me/923001234567?text=I+want+to+apply+for+installment" class="btn bg lg"
                        target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Apply on WhatsApp</a></div>
            </div>
        </div>
    </div>
@endsection
