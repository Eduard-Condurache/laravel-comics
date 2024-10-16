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
                    <ul>
                        <h4>
                            {{ $footerinfo['title'] }}
                        </h4>
                        
                        @foreach($footerinfo['infos'] as $info)
                            <a href="{{ $footerinfo['url'] }}">
                                {{ $info }}
                            </a>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</footer>