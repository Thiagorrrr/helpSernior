    <footer class="footer"> 
        <nav class="footer__navigation hs-container"> 
            <div class="footer__scroll-to-top"> </div>
            <ul class="footer__list" >
                @foreach ($links as $item)
                
                <li class="footer__item" >
                    <a class="footer__link" href="/{{$item->url}}">{{$item->nome}} </a>
                </li>
                @endforeach
                
            </ul>
        </nav>


    </footer>


</body>


</html>

