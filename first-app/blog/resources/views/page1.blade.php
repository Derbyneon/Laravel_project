<!DOCTYPE html>
<html>
<body style="background-color: #242424; color: #ffffff;">

<h1 style="color: #ffffff;">TEST 2</h1>

    <div class = 'container' style='color: #ffffff;'>
    @isset($nom)
    
        <h2>
            nom : {{$nom}}
        </h2>
        
        @endisset
        @empty($nom)
        <p>Pas de nom</p>
        @endempty($nom)
        <h2>
            prenom : {{$prenom}}
        </h2>
        <h2>Les cours qui peuvent intervenir</h2>
        @if (count($cours) > 0)
            <table border = "1", width = "100%">
                <tr><th style="background-color:blue;">Cours</th></tr>
                @foreach ($cours as $cour)
                    <tr>
                        <th>{{$cour}}</th>
                    </tr>
                    @endforeach
            </table>
        @else
            <h3>Pas de cours</h3>
        @endif
        
    </div>

</body>
</html>
