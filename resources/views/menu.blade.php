<ul>
    @php
    $nom="wajdi";
    @endphp
    
    <li><a href="{{route('home.accueil',$nom)}}">Accueil</a></li>
    <li><a href="{{route('home.contact')}}">contact</a></li>

    <li><a href="{{url('/accueil/'.$nom)}}">Accueil</a></li>
    <li><a href="{{url('/contact')}}">contact</a></li>

</ul>