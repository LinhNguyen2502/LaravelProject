<nav class="menu">
    <ul>
        <li><a href="" class="active">Home</a></li>
        @foreach ($categories as $category)
        <li><a href="{{ route('frontend.category.show', ['slug' => $category['slug']] ) }}">
                {{  $category['name']  }}</a></li>
        @endforeach
    </ul>
</nav>