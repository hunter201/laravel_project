<aside>
    
    <div class="categories">
        <ul>
            @foreach ($categories as $item)
               <li><a class = "main-menu main-menu-elem" href="{{$item->link}}">{{$item->category}}
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                  </svg></a>
                </li>   
            @endforeach
                   
        </ul>
        <div class="submenu-fridges">
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