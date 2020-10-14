@include('header.header')

<div class="main-container">
 @include('aside.aside')
 <main>
    @yield('content')  
</main>   
</div>

 

 @include('footer.footer')
