<div id="main-navbar">
    <div>
        <label for="sidebar-toggle"><i class="fa fa-bars"></i></label>
        <div class="btn-group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <figure>
                    <img src="{{ asset('img/usuarios/padrao.jpg') }}" alt="" class="rounded-circle float-right">
                    <caption class="float-left">
                        {{ Auth::user()->getNome() }}
                    </caption>
                </figure>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Editar perfil</a>
                <a class="dropdown-item" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>