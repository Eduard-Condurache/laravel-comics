@php
    $links = [
        [
            'url' => '/',
            'route_name' => 'index',
            'label' => 'Home',
            'active' => true
        ],
        [
            'url' => '/about',
            'route_name' => 'about',
            'label' => 'About',
            'active' => true
        ],
        [
            'url' => '/contact',
            'route_name' => 'contact',
            'label' => 'Contact',
            'active' => true
        ]
];
@endphp

<header>
    <nav>
        <ul>
            @foreach($links as $link) 
            <li>
                @if($link['active'])
                    <a href="{{ route($link['route_name']) }}">
                        {{ $link['label'] }}
                    </a>
                @else
                    <del>
                        {{ $link['label'] }}
                    </del>
                @endif    
            </li>
            @endforeach
        </ul>
    </nav>
</header>