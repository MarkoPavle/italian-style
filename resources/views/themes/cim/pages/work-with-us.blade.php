@extends('themes.'.$theme->slug.'.index')

@section('title')
    @if(app()->getLocale() == 'en') Work with us @else Lavora con noi @endif - CIM Italian Style
@endsection

@section('description')
    {!! $settings->desc !!}
@endsection

@section('keywords')
    {{ $settings->keywords }}
@endsection

@section('seo_social_stuff')
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="CIM Italian Style">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ url($theme->slug.'/img/fb.jpg') }}">
    @if(app()->getLocale() == 'en')
        <meta property="og:title" content="Cim offers services. It works out the sector of furniture for the house, offices and communities, it assists its customers step by step..." />
    @else
        <meta property="og:title" content="Il CIM offre servizi. Opera nel settore del mobile per la casa, per ufficio e per la comunità, è in grado di seguire il cliente passo per passo..." />
    @endif
    <meta property="og:description" content="{{ \App\Helper::removePTag($settings->footer) }}" />
    <link rel="canonical" href="{{ url('/') }}" />
@endsection

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            <img class="img-fluid desktop-image" src="{{ url('uploads/hero/hero-pic-WorkWithUs.jpg') }}" alt="partnership">
            <div class=collections-header>
                <h5>work with us</h5>
            </div>
        </div>
    </section>
    <section>
        <div class="container partners">
            <div class=row>
                <div class="col-md-12 list-of-partners">
                    @if(app()->getLocale() == 'en')
                        <h3>Join us and create your home, office or any other kind of place from your dreams!</h3>
                        <p>Turn your fantasies into reality with our help and enjoy in all the luxuries high-quality Made in Italy furniture can offer. We guarantee you will be more than just satisfied! </p>
                        <h3>If you are interested in working with us in a creative and innovative surroundings, in the global market, send us your CV and we will contact you.</h3>
                        {!! Form::open(['action' => ['PagesController@uploadCv'], 'method' => 'POST', 'class' => 'cv-form', 'files' => true]) !!}
                            <div class="fileUpload btn btn-primary">
                                <span>Upload your CV</span>
                                <input type=file name="file" class=upload />
                            </div>
                            @if ($errors->has('file'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('file') }}</strong>
                                </div>
                            @endif
                        {!! Form::close() !!}
                    @else
                        <h3>Unisciti a noi e crea la tua casa, ufficio o qualsiasi altro tipo di luogo dai tuoi sogni!</h3>
                        <p>Trasforma le tue fantasie in realtà con il nostro aiuto e goditi tutti i lussi di alta qualità che i mobili Made in Italy possono offrire. Ti garantiamo che sarai più che soddisfatto!</p>
                        <p>Se siete interessati a lavorare con noi in un ambiente creativo e innovativo, nel mondo globale, inviaci il tuo CV e vi contatteremo</p>
                        {!! Form::open(['action' => ['PagesController@uploadCv'], 'method' => 'POST', 'class' => 'cv-form', 'files' => true]) !!}
                            <div class="fileUpload btn btn-primary">
                                <span>Inviateci il CV</span>
                                <input type=file name="file" class=upload />
                            </div>
                            @if ($errors->has('file'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('file') }}</strong>
                                </div>
                            @endif
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer_scripts')
    <script>
        $(function(){
            $('.upload').change(function(){
                $('.cv-form').submit();
            });
        });
    </script>
@endsection