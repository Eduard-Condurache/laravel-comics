@php 
    $footerlinks = [
        [
            'label' => 'DIGITAL COMICS',
            'url' => '#',
            'icon' => 'buy-comics-digital-comics.png',
        ],
        [
            'label' => 'DC MERCHANDISE',
            'url' => '#',
            'icon' => 'buy-comics-merchandise.png',
        ],
        [
            'label' => 'SUBSCRIPTION',
            'url' => '#',
            'icon' => 'buy-comics-subscriptions.png',
        ],
        [
            'label' => 'COMIC SHOP LOCATOR',
            'url' => '#',
            'icon' => 'buy-comics-shop-locator.png',
        ],
        [
            'label' => 'DC POWER VISA',
            'url' => '#',
            'icon' => 'buy-dc-power-visa.svg',
        ],
];

    $footerinfos = [
        [
            'title' => 'DC COMICS',
            'url' => '#',
            'infos' => [
                'Characters',
                'Comics',
                'Movies',
                'Tv',
                'Games',
                'Videos',
                'News',
            ],
        ],
        [
            'title' => 'DC',
            'url' => '#',
            'infos' => [
                'Terms Of Use',
                'Privacy policy (New)',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscriptions',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us',
            ],
        ],
        [
            'title' => 'SITES',
            'url' => '#',
            'infos' => [
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa',
            ],
        ],
        [
            'title' => 'SHOP',
            'url' => '#',
            'infos' => [
                'Shop DC',
                'Shop DC Collectibles',
            ],
        ],
    ];

@endphp

<footer>
    <div class="footer-links">
        <div class="container">
            <div>
                <ul>
                    @foreach($footerlinks as $footerlink)
                    <li>
                        <img src="{{ Vite::asset('resources/img/' . $footerlink['icon']) }}" alt="{{ $footerlink['label'] }}">
                        <a href="{{ $footerlink['url'] }}">
                            {{ $footerlink['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-infos-bg">
        <div class="container">
            <div class="footer-infos">
                @foreach ($footerinfos as $footerinfo)
                <div>
                    <ul> 
                        <h4>
                            {{ $footerinfo['title'] }}
                        </h4>
                        
                        @foreach($footerinfo['infos'] as $info)
                        <li>
                            <a href="{{ $footerinfo['url'] }}">
                                {{ $info }}
                            </a>
                        </li>
                        @endforeach  
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="footer-socials">
        <div class="container">
            <div>
                <button>
                    <a href="#">
                        SIGN-UP NOW
                    </a>
                </button>
            </div>

            <div class="socials">
                <h2>
                    FOLLOW US
                </h2>
                <div class="social-icons">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook">
                    </a>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter">
                    </a>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube">
                    </a>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope">
                    </a>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>