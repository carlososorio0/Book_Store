<nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('home') }}"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> BookStore </font> </ fuente> </a>


  <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
      <ul class = "nav navbar-nav navbar-rigth">

      <li><a href="{{ route('info') }}">Informacion</a></li>
        
        <li><a href="{{ route('contact') }}">Contacto</a></li>

     
    </ul>

      <ul class="nav navbar-nav navbar-right"> 
      
      <li><a href="{{ route('cart-show')}}"> <img src="https://img.icons8.com/color/27/000000/shopping-cart.png"/> </a> </li> 
        @include('store.partials.menu-user')

        



        
      </ul>
      </div>
    </nav>


