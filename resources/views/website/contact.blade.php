@extends('layouts.website')

@section('title', 'Contact Us | ' . config('app.name'))
@section('meta_description', 'Contact AY Electronics Peshawar — showroom, WhatsApp & phone.')

@section('content')
    @include('website.partials.page-banner', [
        'title' => 'Contact Us',
        'icon' => 'fas fa-envelope',
        'crumbs' => [['label' => 'Contact']],
    ])

    <section class="sec">
        <div class="con">
            <div class="cgrid2">
                <div class="cic">
                    <h3>Get In Touch</h3>
                    <p>We're here to help with all your appliance needs</p>
                    <div class="cit">
                        <div class="cico"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <div class="cilb">Address</div>
                            <div class="civl">Darmangi Garden Street 1, Warsak Road, Peshawar</div>
                        </div>
                    </div>
                    <div class="cit">
                        <div class="cico"><i class="fas fa-phone"></i></div>
                        <div>
                            <div class="cilb">Phone</div>
                            <div class="civl"><a href="tel:+923001234567" style="color:#fff">+92-300-1234567</a></div>
                        </div>
                    </div>
                    <div class="cit">
                        <div class="cico"><i class="fab fa-whatsapp"></i></div>
                        <div>
                            <div class="cilb">WhatsApp</div>
                            <div class="civl"><a href="https://wa.me/923001234567" style="color:#fff">Chat Now</a></div>
                        </div>
                    </div>
                    <div class="cit">
                        <div class="cico"><i class="fas fa-clock"></i></div>
                        <div>
                            <div class="cilb">Hours</div>
                            <div class="civl">Open Daily: 9:00 AM – 9:00 PM</div>
                        </div>
                    </div>
                    <div class="cit">
                        <div class="cico"><i class="fas fa-envelope"></i></div>
                        <div>
                            <div class="cilb">Email</div>
                            <div class="civl">info@ayelectronics.pk</div>
                        </div>
                    </div>
                </div>
                <div class="cfc">
                    <h3 style="font-family:var(--fh);font-size:1.5rem;color:var(--dk);margin-bottom:6px">Send a Message</h3>
                    <p style="color:var(--tm);font-size:.9rem;margin-bottom:24px">We'll get back to you within 24 hours</p>
                    <form id="cf">
                        @csrf
                        <div class="fr">
                            <div class="fg"><label>Full Name</label><input class="fc" placeholder="Muhammad Ali"
                                    required></div>
                            <div class="fg"><label>Phone Number</label><input class="fc" placeholder="+92-300-..."
                                    required></div>
                        </div>
                        <div class="fg"><label>Email Address</label><input type="email" class="fc"
                                placeholder="you@example.com"></div>
                        <div class="fg"><label>Product Interest</label>
                            <select class="fc">
                                <option>Air Conditioner</option>
                                <option>Refrigerator</option>
                                <option>Washing Machine</option>
                                <option>Microwave Oven</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="fg"><label>Message</label><textarea class="fc" rows="4"
                                placeholder="Tell us what you need..."></textarea></div>
                        <button type="submit" class="btn bp" style="width:100%;justify-content:center">Send Message <i
                                class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:0 0 80px">
        <div class="con">
            <div class="mwrap">
                <iframe src="https://maps.google.com/maps?q=Warsak+Road+Peshawar+Pakistan&output=embed"
                    title="{{ config('app.name') }} Location"></iframe>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="con">
            <h2>Need Help? <span>Contact Us Now!</span></h2>
            <p>Darmangi Garden Street 1, Warsak Road, Peshawar. Open daily 9 AM – 9 PM.</p>
            <div class="ctab">
                <a href="https://wa.me/923001234567" class="btn bg lg" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i>
                    WhatsApp</a>
                <a href="tel:+923001234567" class="btn bw lg"><i class="fas fa-phone"></i> Call Now</a>
            </div>
        </div>
    </section>
@endsection
