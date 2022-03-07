<nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> BookStore </font> </ fuente> </a>
  <i class="fa fa-dashboard"></i> dashboard</p>

  
 

      <ul class="nav navbar-nav navbar-right"> 

      
      
     
      <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
      <ul class = "nav navbar-nav navbar-rigth">
        <li><a href="{{ route('category.index') }}" >Categorias</a></li>
        <li><a href="{{ route('product.index') }}">Productos</a></li>
        <li><a href="{{ route('user.index') }}">Usuarios</a></li>
      
     
    
	  
	   
<li class="dropdown">
    <a href="#"  class="dropdow-toggle"  data-toggle="dropdown"  role="button"  aria-expanded="false">
            <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Finalizar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
        



        
      </ul>
      </div>
    </nav>

