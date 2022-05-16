<footer>
    <section class="main-footer container">
        <ul class="footer-links-container">
            @php
                $footermenu = config('footermenu')
            @endphp

            @foreach ($footermenu as $menucategory)
                <li>
                    <h3>{{ $menucategory['category'] }}</h3>
                    @foreach ($menucategory['subLinks'] as $sublink)
                        <li>
                            <a href="{{ $sublink['href'] }}">{{ $sublink['name'] }}</a>
                        </li>
                    @endforeach
                </li>
            @endforeach
        </ul>
    </section>

    <section class="footer-navbar">
        <div class="container">
            <button>Sign up now!</button>
            <div class="social-networks">
                <h3>Follow us</h3>

                @php
                    $footersocials = config('footersocials')
                @endphp

                @foreach ($footersocials['socials'] as $social)
                <a href="{{ $social['href'] }}"><img src="../images/{{ $social['icon'] }}" alt="{{ $social['name'] }}"></a>
                @endforeach
            </div>
        </div>
    </section>
</footer>
