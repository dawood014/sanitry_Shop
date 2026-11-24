<footer>
    <div class="con">
        <div class="ftg">
            <div>
                <img src="{{ asset('ay-electronics/images/logo.png') }}" alt=""
                    style="height:50px;margin-bottom:14px" onerror="this.style.display='none'">
                <div style="font-family:var(--fh);font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:4px">
                    {{ config('app.name') }}</div>
                <div
                    style="font-size:.62rem;color:#8AA3BD;letter-spacing:2px;text-transform:uppercase;margin-bottom:16px">
                    Smart Technology. Powering Tomorrow.</div>
                <p style="color:rgba(255,255,255,.6);font-size:.87rem;line-height:1.75;margin-bottom:20px">Trusted home
                    appliance partner in Peshawar. Premium brands, cash &amp; easy installment plans.</p>
                <div style="display:flex;gap:10px">
                    <a href="#" class="sa" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="sa" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="sa" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="https://wa.me/923001234567" class="sa" aria-label="WhatsApp" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div>
                <h4 class="fhd">Quick Links</h4>
                <ul class="fl">
                    <li><a href="{{ route('website.home') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="{{ route('website.about') }}"><i class="fas fa-chevron-right"></i> About Us</a></li>
                    <li><a href="{{ route('website.products') }}"><i class="fas fa-chevron-right"></i> All Products</a></li>
                    <li><a href="{{ route('website.offers') }}"><i class="fas fa-chevron-right"></i> Special Offers</a></li>
                    <li><a href="{{ route('website.installments') }}"><i class="fas fa-chevron-right"></i> Installments</a></li>
                    <li><a href="{{ route('website.contact') }}"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                    <li><a href="{{ route('login') }}"><i class="fas fa-chevron-right"></i> Admin Login</a></li>
                </ul>
            </div>
            <div>
                <h4 class="fhd">Categories</h4>
                <ul class="fl">
                    <li><a href="{{ route('website.category', 'ac') }}"><i class="fas fa-chevron-right"></i> Air Conditioners</a></li>
                    <li><a href="{{ route('website.category', 'refrigerators') }}"><i class="fas fa-chevron-right"></i>
                            Refrigerators</a></li>
                    <li><a href="{{ route('website.category', 'deepfreezers') }}"><i class="fas fa-chevron-right"></i> Deep
                            Freezers</a></li>
                    <li><a href="{{ route('website.category', 'washingmachines') }}"><i class="fas fa-chevron-right"></i>
                            Washing Machines</a></li>
                    <li><a href="{{ route('website.category', 'microwaves') }}"><i class="fas fa-chevron-right"></i>
                            Microwave Ovens</a></li>
                    <li><a href="{{ route('website.category', 'heaters') }}"><i class="fas fa-chevron-right"></i> Electric
                            Heaters</a></li>
                </ul>
            </div>
            <div>
                <h4 class="fhd">Contact Us</h4>
                <div class="fci"><i class="fas fa-map-marker-alt"></i><span>Darmangi Garden Street 1, Warsak Road,
                        Peshawar, Pakistan</span></div>
                <div class="fci"><i class="fas fa-phone"></i><span><a href="tel:+923001234567">+92-300-1234567</a></span></div>
                <div class="fci"><i class="fab fa-whatsapp"></i><span><a href="https://wa.me/923001234567">Chat on
                            WhatsApp</a></span></div>
                <div class="fci"><i class="fas fa-envelope"></i><span>info@ayelectronics.pk</span></div>
                <div class="fci"><i class="fas fa-clock"></i><span>Open Daily: 9:00 AM – 9:00 PM</span></div>
            </div>
        </div>
    </div>
    <div style="border-top:1px solid rgba(255,255,255,.1);padding:18px 0">
        <div class="con">
            <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px">
                <p style="font-size:.83rem;color:rgba(255,255,255,.45)">&copy; {{ date('Y') }}
                    {{ config('app.name') }}. All rights reserved. | Darmangi Garden, Warsak Road,
                    Peshawar</p>
                <div style="display:flex;gap:18px">
                    <a href="#" style="font-size:.83rem;color:rgba(255,255,255,.45)">Privacy Policy</a>
                    <a href="#" style="font-size:.83rem;color:rgba(255,255,255,.45)">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
