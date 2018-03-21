@extends('themes.'.$theme->slug.'.index')

@section('title')
    Azienda - CIM Italian Style
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
            <img class=img-fluid src="{{ url('uploads/hero/hero-CORPORATE.jpg') }}" alt=hero-image>
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
                        <div class=col-12>
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
                        <div class=col-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-survey.png') }}" alt="The research of the product"> </p>
                            <h3>Ricerca <span>del prodotto</span> </h3>
                            <p>Studio del mercato e della domanda locale. Scelta dei marchi e delle linee di prodotto con cui operare. Un progetto finanziario di massima.</p>
                        </div>
                        <div class=col-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-sewing-tape.png') }}" alt=Supplies> </p>
                            <h3>La fornitura e gli approvvigionamenti</h3>
                            <p>Fornitura del prodotto originale Made in Italy con capacità d'acquisto a prezzi competitivi nel mercato.</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-multichanel.png') }}" alt="The visual design of the point of sale"> </p>
                            <h3>Il visual <span>del punto vendita</span> </h3>
                            <p>Studio della comunicazione del punto vendita sul territorio.</p>
                        </div>
                        <div class=col-12>
                            <p class=icon> <img src="{{ url($theme->slug.'/img/icon-trust.png') }}" alt=Supplies> </p>
                            <h3>Perché <span>crederci</span> </h3>
                            <p>Abbiamo in mente il mercato Mondiale. Lo conosciamo da tanti anni .
                                Ci proponiamo come i vs. interlocutori italiani nel settore commerciale, in quello amministrativo ed infine nel settore logistico.</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class=col-12>
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
                                    <!-- new stuff -->
                    <div class="container the-cim-project mt-4">
                      <div class="row">
                        <div class="col-12">
                          <h1>PROFILO AZIENDALE</h1>
                          <p>
                            L’azienda, C.I.M. ITALIAN STYLE S.R.L. è nata il 19 Gennaio 2005, è ubicata nel Veneto, ad un’ora dalla città di Venezia e dall’ aeroporto internazionale Marco Polo.
                          </p>
                        </div>
                          <!-- .col-xs-12 -->
                      </div>
                    </div>
                    <div class="container boxes no-padding">
                      <div class="row">
                        <div class="col-12">
                          <p class="icon">
                            <img src="img/corporate/RESEARCH.png" alt="The research of the product">
                          </p>
                          <h3>PRODOTTI</h3>
                          <p>Lavoriamo nel settore del mobile da più di 30 anni.
                            La ns. esperienza è maturata nel tempo, con le vendite di mobili moderni e classici, per la casa, per l’ufficio e per la comunità, nei più importantii mercati mondiali di esportazione del Made in Italy, dove il design italiano, la qualità del prodotto, abbinati ad un servizio accurato, sono ricercati.</p>
                        </div>
                        <div class="col-12">
                          <p class="icon">
                            <img src="img/corporate/SUPPLIES.png" alt="Supplies">
                          </p>
                          <h3>I <span>MARCHI</span></h3>
                          <p>Siamo in grado di fornire le collezioni italiane dei più importanti brands nel settore  dell’arredamento classico e moderno, a condizioni di vendita molto vantaggiose.
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <p class="icon">
                              <img src="img/corporate/RESEARCH.png" alt="The research of the product">
                          </p>
                          <h3>Logistica</h3>
                          <p>L’azienda fornisce un servizio di logistica Inbound/Outbound ai nostri partner/clienti con un magazzino di oltre 500 s. m. situato a Castagnole, in Provincia di Treviso, vicino all’autostrada A-27 Treviso Nord. <br/>
                          Il nostro servizio è quello di caricare la merce ritirata dai diversi fornitori, consegnarla ed immagazzinarla nel nostro deposito. Offriamo un servizio di consolidata, attraverso lo scarico e il carico dei camion/container, con una sola fattura per l’esportazione dei diversi ordini dai fornitori italiani. 
                          </p>
                        </div>
                        <div class="col-12">
                          <p class="icon">
                              <img src="img/corporate/SUPPLIES.png" alt="Supplies">
                          </p>
                          <h3>OPERAZIONI <span>DOGANALI</span></h3>
                          <p>C.I.M. ITALIAN STYLE S.R.L. ha la possibilità di effettuare le operazioni doganali domiciliate , (Cad) riducendo ulteriormente i costi doganali di esportazione, con il vantaggio di accelerare le procedure di esportazione al confine italiano.<br/>
                          Per ulteriori dettagli e informazioni non esitate a contattarci, sarete i benvenuti in qualsiasi momento!
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- /new stuff -->
            </div>
            <div class="col-md-4 corporate-images">
                <img src="{{ url($theme->slug.'/img/corporate-1.jpg') }}" alt="corporate 1">
                <img src="{{ url($theme->slug.'/img/corporate-2.jpg') }}" alt="corporate 2">
                <img src="{{ url($theme->slug.'/img/corporate-3.jpg') }}" alt="corporate 3">
            </div>
        </div>
    </div>

@endsection