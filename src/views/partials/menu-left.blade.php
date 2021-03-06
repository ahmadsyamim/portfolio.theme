@foreach($items as $menu_item)
    @php ($hasChildren = count($menu_item->children) > 0)
    <li>
        <a href="{{ url($menu_item->link()) }}">{{ $menu_item->title }}</a>
        @if ($hasChildren)
            <ul class="menu">
                @include('portfolio.partials.menu-left', ['items' => $menu_item->children])
            </ul>
        @endif
    </li>
@endforeach
