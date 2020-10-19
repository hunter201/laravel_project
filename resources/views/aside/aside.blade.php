<aside>
    
    <div class="categories">
        <ul>
            @foreach ($categories as $item)
               <li><a class = "categories__elem" href="{{$item->link}}">{{$item->category}}
                <i class="fas fa-angle-down"></i></a>
                </li>   
            @endforeach
                   
        </ul>
        <div class="submenu">
        <ul>
            <li><a href="#">Ariston</a></li>
            <li><a href="#">Indesit</a></li>
            <li><a href="#">LG</a></li>
            <li><a href="#">Samsung</a></li>
            <li><a href="#">Bosch</a></li>
        </ul>
    </div>
    </div>
    
    @for ($i=0; $i<5; $i++)
    <div class="ads">
        Здесь могла бы быть Ваша реклама.
    </div>
    @endfor
</aside>