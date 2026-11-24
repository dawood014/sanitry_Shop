@php($active = $activeNav ?? 'home')
<!-- NAVBAR -->
<nav class="nav" id="nav">
    <div class="con">
        <div class="nb2">
            <a href="{{ route('website.home') }}" class="nl">
                <img src="{{ asset('ay-electronics/images/logo.png') }}" alt="{{ config('app.name') }}"
                    style="height:46px" onerror="this.style.display='none'">
                <div class="lt">
                    <div class="br">{{ config('app.name') }}</div>
                    <div class="tg">Smart Technology. Powering Tomorrow.</div>
                </div>
            </a>
            <div class="nlinks">
                <a href="{{ route('website.home') }}" class="{{ $active === 'home' ? 'ac' : '' }}">Home</a>
                <a href="{{ route('website.about') }}" class="{{ $active === 'about' ? 'ac' : '' }}">About</a>
                <div class="hd">
                    <a href="{{ route('website.products') }}" class="{{ $active === 'products' ? 'ac' : '' }}">Products</a>
                    <div class="ddm">
                        <a href="{{ route('website.category', 'ac') }}"><i class="fas fa-wind"></i>Air Conditioners</a>
                        <a href="{{ route('website.category', 'refrigerators') }}"><i class="fas fa-snowflake"></i>Refrigerators</a>
                        <a href="{{ route('website.category', 'deepfreezers') }}"><i class="fas fa-cube"></i>Deep Freezers</a>
                        <a href="{{ route('website.category', 'washingmachines') }}"><i class="fas fa-tshirt"></i>Washing Machines</a>
                        <a href="{{ route('website.category', 'microwaves') }}"><i class="fas fa-fire"></i>Microwave Ovens</a>
                        <a href="{{ route('website.category', 'ovens') }}"><i class="fas fa-thermometer-half"></i>Electric Ovens</a>
                        <a href="{{ route('website.category', 'dispensers') }}"><i class="fas fa-tint"></i>Water Dispensers</a>
                        <a href="{{ route('website.category', 'aircoolers') }}"><i class="fas fa-fan"></i>Air Coolers</a>
                        <a href="{{ route('website.category', 'vacuumcleaners') }}"><i class="fas fa-broom"></i>Vacuum Cleaners</a>
                        <a href="{{ route('website.category', 'heaters') }}"><i class="fas fa-fire-alt"></i>Electric Heaters</a>
                    </div>
                </div>
                <a href="{{ route('website.offers') }}" class="{{ $active === 'offers' ? 'ac' : '' }}">Offers</a>
                <a href="{{ route('website.installments') }}" class="{{ $active === 'installments' ? 'ac' : '' }}">Installments</a>
                <a href="{{ route('website.contact') }}" class="{{ $active === 'contact' ? 'ac' : '' }}">Contact</a>
            </div>
            <div class="na">
                <div class="sw"><button type="button"><i class="fas fa-search"></i></button><input id="si"
                        placeholder="Search products..."></div>
                <a href="tel:+923001234567" class="nc"><i class="fas fa-phone"></i><span>Call Now</span></a>
                <a href="{{ route('login') }}" class="nc" style="margin-left:8px" title="Staff login"><i
                        class="fas fa-user-shield"></i><span class="hide-sm">Staff</span></a>
                <div class="ham" id="ham"><span></span><span></span><span></span></div>
            </div>
        </div>
    </div>
    <div class="mnav" id="mnav">
        <a href="{{ route('website.home') }}"><i class="fas fa-home"></i>Home</a>
        <a href="{{ route('website.about') }}"><i class="fas fa-info-circle"></i>About Us</a>
        <a href="{{ route('website.products') }}"><i class="fas fa-box"></i>All Products</a>
        <a href="{{ route('website.category', 'ac') }}" class="s"><i class="fas fa-wind"></i>Air Conditioners</a>
        <a href="{{ route('website.category', 'refrigerators') }}" class="s"><i class="fas fa-snowflake"></i>Refrigerators</a>
        <a href="{{ route('website.category', 'deepfreezers') }}" class="s"><i class="fas fa-cube"></i>Deep Freezers</a>
        <a href="{{ route('website.category', 'washingmachines') }}" class="s"><i class="fas fa-tshirt"></i>Washing Machines</a>
        <a href="{{ route('website.category', 'microwaves') }}" class="s"><i class="fas fa-fire"></i>Microwave Ovens</a>
        <a href="{{ route('website.category', 'ovens') }}" class="s"><i class="fas fa-thermometer-half"></i>Electric Ovens</a>
        <a href="{{ route('website.category', 'dispensers') }}" class="s"><i class="fas fa-tint"></i>Water Dispensers</a>
        <a href="{{ route('website.category', 'aircoolers') }}" class="s"><i class="fas fa-fan"></i>Air Coolers</a>
        <a href="{{ route('website.category', 'vacuumcleaners') }}" class="s"><i class="fas fa-broom"></i>Vacuum Cleaners</a>
        <a href="{{ route('website.category', 'heaters') }}" class="s"><i class="fas fa-fire-alt"></i>Electric Heaters</a>
        <a href="{{ route('website.offers') }}"><i class="fas fa-tag"></i>Special Offers</a>
        <a href="{{ route('website.installments') }}"><i class="fas fa-credit-card"></i>Installments</a>
        <a href="{{ route('website.contact') }}"><i class="fas fa-envelope"></i>Contact</a>
        <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>Staff Login</a>
    </div>
</nav>
<style>.hide-sm{display:inline} @media(max-width:1100px){.hide-sm{display:none}}</style>
