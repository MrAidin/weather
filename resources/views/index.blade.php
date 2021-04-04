<ul>
    <table border="1px">
        <tr>
            <th>speed</th>
            <th>deg</th>
        </tr>
        <tr>
            @foreach($response['wind'] as $item)
                <td>{{$item}}</td>
            @endforeach
        </tr>
    </table>
    <br><br><br>
    <table border="1px">
        <tr>
            <th>temp</th>
            <th>feels-like</th>
            <th>temp-min</th>
            <th>temp-max</th>
            <th>pressure</th>
            <th>humidity</th>
        </tr>
        <tr>
            @foreach($response['main'] as $item)
                <td>{{$item}}</td>
            @endforeach
        </tr>
    </table>
    <br><br><br>
    <table border="1px">
        <tr>
            <th>id</th>
            <th>main</th>
            <th>desc</th>
            <th>icon</th>
        </tr>
        <tr>
        @foreach($response['weather'] as $item)
            @foreach($item as $i)
               <td> {{$i}}</td>
            @endforeach

        @endforeach
        </tr>
    </table>
    time zone : {{$response['timezone']}} <br>
    city name : {{$response['name']}}   <br>
    city id : {{$response['id']}}  <br>
    visibility : {{$response['visibility']}}  <br>
    base : {{$response['base']}}  <br>
</ul>
