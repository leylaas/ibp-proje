@foreach($children as $subcategory)

    @if(count($rs->children))
        <li><a href="{{route('categoryproducts',['id' => $subcategory->id, 'slug' => $subcategory->title] )}}">{{$subcategory->title}}</a></li>

        <ul>
            @include('home.categorytree',['children' => $subcategory->children])
        </ul>
            @else
        <li>
            <a href="{{route('categoryproducts',['id' => $subcategory->id, 'slug' => $subcategory->title] )}}">{{$subcategory->title}}</a>
        </li>
    @endif
@endforeach
