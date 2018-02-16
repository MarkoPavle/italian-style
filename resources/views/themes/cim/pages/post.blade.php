@extends('themes.'.$theme->slug.'.index')

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            <img class="desktop-image" src="{{ url('uploads/collections/day-collections.jpg') }}" alt="post">
        </div>
    </section>
    <section>
        <div class=container>
            <div class="row news-open-row">
                <div class=news-open>
                    <div class="news-open-heading col-md-12">
                        <h5>Salone del Mobile Milano 2017&nbsp&nbsp&nbsp&nbsp<span>/&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp23. januar 2018.</span></h5>
                    </div>
                    <div class="news-open-image-wrapper col-md-12">
                        <a href=""><img src="{{ url($theme->slug . '/img/news-open-1.jpg') }}" class="img-fluid" alt=news-image></a> </div>
                    <div class=news-open-paragraph>
                        <p>Varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis, dapibus id dolor.
                            Morbi venenatis lacinia rhoncus.Nullam ornare, sem in malesuada sagittis, quam sapien ornare massa, id pulvinar quam augue vel orci. Praesent leo orci, cursus ac malesuada et, sollicitudin eu erat. Pellentesque ornare mi
                            vitae sem consequat ac bibendum neque adipiscing. Donec tellus nunc, tincidunt sed faucibus a, mattis eget purus.</p>
                        <h6>Luctus fermentum commodo</h6>
                        <p>Nulla sed mi leo, sit amet molestie nulla. Phasellus lobortis blandit ipsum, at adipiscing eros porta quis. Phasellus in nisi ipsum, quis dapibus magna. Phasellus odio dolor, pretium sit amet aliquam a, gravida eget dui. Pellentesque
                            eu ipsum et quam faucibus scelerisque vitae ut ligula. Ut luctus fermentum commodo.</p>
                        <div class="news-open-image-wrapper col-md-12"> <a href=""><img src="{{ url($theme->slug . '/img/news-open-2.jpg') }}" alt=news-image></a> </div>
                        <p>Mauris eget justo turpis, eget fringilla mi. Duis lobortis cursus mi vel tristique. Maecenas eu lorem hendrerit neque dapibus cursus id sit amet nisi. Proin rhoncus semper sem nec aliquet.Integer vel libero arcu, egestas tempor
                            ipsum. Vestibulum id dolor aliquet dolor fringilla ornare. Nunc non massa erat. Vivamus odio sem, rhoncus vel bibendum vitae, euismod a urna. Aliquam erat volutpat. Aenean non lorem arcu. Phasellus in neque nulla, sed sodales
                            ipsum. Morbi a massa sed sapien vulputate lacinia. Vivamus et urna vitae felis malesuada aliquet sit amet et metus.Nulla sed mi leo, sit amet molestie nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Nam at velit nisl. Aenean vitae est nisl. Cras molestie molestie nisl vel imperdiet donec vel mi sem.</p>
                    </div>
                </div>
                <div class=news-open-social>
                    <div class=news-open-social-heading>
                        <a href="">
                            <h5>share</h5>
                        </a>
                    </div>
                    <div class=news-open-social-icons>
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(count($related)>0)
    <section>
        <div class=container>
            <div class="row related">
                @foreach($related as $post)
                <div class="item col-md-4 col-sm-6">
                    <div class=img-wrapper> <a href=#> <img class=img-fluid src="{{ url($theme->slug . '/img/first-carousel.jpg') }}" alt="first carousel"> </a> </div>
                    <div class=text-holder>
                        <h5> <a href=#>Lorem ipusum dolor</a> </h5>
                        <p class=date> <span>23 jan 2018</span> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid commodi delectus ducimus eius explicabo ipsa iste obcaecati possimus.</p>
                    </div>
                </div>
                @endforeach

                <div class=col-md-12>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class=page-item> <a class=page-link href=# aria-label=Previous> <span aria-hidden=true>❮</span> <span class=sr-only>Previous</span> </a> </li>
                            <li class=page-item><a class=page-link href=#>1</a></li>
                            <li class=page-item><a class=page-link href=#>2</a></li>
                            <li class=page-item><a class=page-link href=#>3</a></li>
                            <li class=page-item> <a class=page-link href=# aria-label=Next> <span aria-hidden=true>❯</span> <span class=sr-only>Next</span> </a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection