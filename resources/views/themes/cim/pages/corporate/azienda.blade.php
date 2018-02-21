@extends('themes.'.$theme->slug.'.index')

@section('title')
    Azienda - CIM Italian Style
@endsection

@section('description')
    {{ $settings->desc }}
@endsection

@section('keywords')
    {{ $settings->keywords }}
@endsection

@section('content')

    <section id=hero-img>
        <div class="container-fluid hero-img-container">
            <img class=img-fluid src="{{ url('uploads/collections/day-collections.jpg') }}" alt=hero-image>
            <div class=collections-header>
                <h5>Azienda</h5>
            </div>
        </div>
    </section>
    <div class="container corporate">
        <div class=row>
            <div class=col-md-8>
                <div class=container>
                    <div class=row>
                        <div class=col-sm-12>
                            <h1>IL PROGETTO CIM</h1>
                            <h3>Progettiamo qualità. Nero su bianco.</h3>
                            <p>Il CIM offre servizi.
                                Opera nel settore del mobile per la casa, per ufficio e per la comunità, è in grado di seguire il cliente passo per passo proponendo
                                una serie di azioni complementari e trasversali. Queste azioni vanno a costituire un servizio a 360 gradi per soddisfare ogni esigenza,
                                sia essa di fornitura o di progettazione. E tutto nero su bianco.<br>Vediamo come:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container boxes no-padding">
                    <div class=row>
                        <div class=col-sm-6>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-survey.png') }}" alt="The research of the product"> </p>
                            <h3>Ricerca <span>del prodotto</span> </h3>
                            <p>Studio del mercato e della domanda locale. Scelta dei marchi e delle linee di prodotto con cui operare. Un progetto finanziario di massima.</p>
                        </div>
                        <div class=col-sm-6>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-sewing-tape.png') }}" alt=Supplies> </p>
                            <h3>La fornitura e gli approvvigionamenti</h3>
                            <p>Fornitura del prodotto originale Made in Italy con capacità d'acquisto a prezzi competitivi nel mercato.</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-sm-6>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-multichanel.png') }}" alt="The visual design of the point of sale"> </p>
                            <h3>Il visual <span>del punto vendita</span> </h3>
                            <p>Studio della comunicazione del punto vendita sul territorio.</p>
                        </div>
                        <div class=col-sm-6>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-trust.png') }}" alt=Supplies> </p>
                            <h3>Perché <span>crederci</span> </h3>
                            <p>Abbiamo in mente il mercato Mondiale. Lo conosciamo da tanti anni .
                                Ci proponiamo come i vs. interlocutori italiani nel settore commerciale, in quello amministrativo ed infine nel settore logistico.</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-sm-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-handshake.png') }}" alt="The visual design of the point of sale"> </p>
                            <h3>Patti <span>chiari</span> </h3>
                            <p>Proponiamo tutto questo consapevoli di offrirvi questi vantaggi: </p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-sm-6>
                            <ul>
                                <li>prodotto MADE IN ITALY</li>
                                <li>acquisto a prezzi competitivi</li>
                                <li>elevata qualità del prodotto</li>
                            </ul>
                        </div>
                        <div class=col-sm-6>
                            <ul class=second>
                                <li>servizio personalizzato ante e post vendita</li>
                                <li>notevole esperienza e competenza</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 corporate-images">
                <img src="{{ url($theme->slug.'/img/corporate-1.jpg') }}" alt="corporate 1">
                <img src="{{ url($theme->slug.'/img/corporate-2.jpg') }}" alt="corporate 2">
                <img src="{{ url($theme->slug.'/img/corporate-3.jpg') }}" alt="corporate 3">
            </div>
        </div>
    </div>

@endsection