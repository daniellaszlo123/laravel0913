<form action="/api/users/{{$user->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="Name" value="{{$user->name}}">
    <input type="text" name="email" placeholder="Email" value="{{$user->email}}">
    <input type="submit" value="Ok">
</form>