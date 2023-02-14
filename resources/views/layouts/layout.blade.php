<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></link>
</head>
<body>
    <div class="header">
        <nav>
            <ul>
                <li>
                    <img  onclick="window.location='{{ url('/contents')}}'" class="imgLogo" src="{{ asset('images/logo.png') }}">
                </li>
                @if(Auth::user()->userType === 2)
                    <li>
                        <form action="{{url('/contents/teachercontrolpane')}}" method="GET">
                            <button type="submit">Painel de controle</button>
                        </form>
                    </li>
                @endif
                @if(Auth::user()->userType === 3)
                    <li>
                        <form action="{{url('/contents/admincontrolpanecont')}}" method="GET">
                            <button  type="submit">Painel de controle (conteúdos)</button>
                        </form>
                    </li>
                    <li>
                        <form action="{{url('/users')}}" method="GET">
                            <button  type="submit">Painel de controle (usuários)</button>
                        </form>
                    </li>
                @endif
                <li >
                    @php
                        $foto = Auth::user()->photo;
                        $full_path = Storage::path($foto);
                        $base64 = base64_encode(Storage::get($foto));
                        $image = 'data:' . mime_content_type($full_path) . ';base64,' . $base64;
                    @endphp
                    <div onclick="window.location='{{ url('/contents/editPhoto', ['id' => Auth::user()->id])}}'">
                        @if($foto)
                            <img class="rounded-circle border border-2" width="32px" src="{{$image}}">
                        @else
                            <img src="{{asset('images/person.png') }}" class="rounded-circle border border-2" width="32px">
                        @endif
                        <p>{{Auth::user()->name}}</p>
                    </div>
                </li>
                <li>
                    <form action="{{url('/logout')}}" method="POST">
                        @csrf
                        <button type="submit">Sair</button>
                    </form>
                </li>
            </ul>
        </nav>
        @yield('header')
    </div>
    @yield('body')
    @yield('footer')
    <div class="footer">
        <div class="redesSociais">
          <h2>Redes Sociais</h2>
          <i class="fa-brands fa-instagram-square"></i>
          <i class="fab fa-facebook-square"></i>
          <i class="fab fa-telegram-plane"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-whatsapp"></i>
        </div>
        <div class="atendimento">
          <h2>Contato</h2>
          <p>(84)00000-0000</p>
          <p>atendimento@iforma.com.br</p>
        </div>
        <div class="endereco">
          <h2>Endereço da empresa</h2>
          <p>Av. Seridó, n° 198, Centro, Caicó/RN - Brasil</p>
        </div>
      </div>
      <div class="detalheAbaixoFooter">
        <p class="p1">Ⓒ 2022. Todos os direitos reservados para o IForma</p>
        <p class="p2">Desenvolvido pelo grupo Romeirritados</p>
      </div>
</body>
</html>
