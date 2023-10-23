@extends('site.layout.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-página">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contrato-principal">
                @component('site.layout._components.form_contato')
                <p> LOGO ENTRAREMOS EM CONTATO </p>
                <p> NOSSO TEMPO MÉDIO DE RESPOSTAS É DE 48 HORAS </p>
                @endcomponent
            </div>
        </div>
    </div>
    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes Sociais</h2>
            <img src="{{ asset('img/facebook.jpg') }}">
            <img src="{{ asset('img/linkedin.jpg') }}">
            <img src="{{ asset('img/youtube.jpg') }}">
        </div>
        <div class="area-contato">
            <h2> CONTATO </h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.jpg') }}">
        </div>
    </div>
@endsection