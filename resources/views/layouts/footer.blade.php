<footer class="footer footer-black  footer-white ">
    <div class="container">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    @foreach($pages as $page)
                        <li>
                            <a href="{{ route('front.page' , ['id' => $page->id , 'slug' => slug($page->name)]) }}" >{{ $page->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <div class="credits ml-auto">
            <span class="copyright">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script>, made with <i class="fa fa-heart heart"></i> 5dmat-web.com
            </span>
            </div>
        </div>
    </div>
</footer>