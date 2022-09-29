<h1>A példányok száma: {{$copies->count()}}</h1>
<h2>A kölcsönöhető példányok száma: {{$copies->where('status', '=', '0')->count()}}</h2>
<h2>A kikölcsönzött példányok száma: {{$copies->where('status', '=', '1')->count()}}</h2>
<h2>A selejtezésre váró példányok száma: {{$copies->where('status', '2')->count()}}</h2>
@foreach ($copies as $copy)
    <form action="/api/copies/{{$copy->copy_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div>
            <input type="submit" value="{{$copy->copy_id}}">
        </div>
    </form>
@endforeach