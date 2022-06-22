<<<<<<< HEAD
<<<<<<< HEAD
<h3>Principal (view) </h3>
=======
<h2>Principal</h2>
<ul>
    <li>
        <a href="{{ route('site.index') }}">PRINCIPAL</a>
    </li>
    <li>
        <a href="{{ route('site.sobrenos') }}">SOBRE-NOS</a>
    </li>
    <li>
        <a href="{{ route('site.contato') }}">CONTATO</a>
    </li>
    <li>
        <a href="{{ route('site.login') }}">LOGIN</a>
    </li>
    <li>
        <a href="{{ route('app.clientes') }}">CLIENTES</a>
    </li>
    <li>
        <a href="{{ route('app.fornecedores') }}">FORNECEDORES</a>
    </li>
    <li>
        <a href="{{ route('app.produtos') }}">PRODUTOS</a>
    </li>
</ul>
>>>>>>> 521a829 (first app_gestão)
=======
@extends('site.layouts.basico')

@section('titulo', 'Principal')

{{-- tem que definir a secção para o sistema renderizar e o nome --}}
@section('conteudo')



    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.
                <p>
                <div class="chamada">
                    <img src="{{ asset('/img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
                <p>
                    @component('site.layouts._components.form_contato', ['classe' => 'borda-branca'])
                    @endcomponent
            </div>
        </div>
    </div>
@endsection
>>>>>>> 10a83d9 (des app_gestao)
