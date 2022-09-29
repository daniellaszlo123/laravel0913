<form action="/api/copy/{{$copy->copy_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <select>
        @foreach ($users as $user)
            <option value="{{$user->id}}" {{$user->id == $copy->user_id ? 'selected' : ''}}>{{$user->name}}</option>
        @endforeach
    </select>
    <select name="book_id" placeholder="book_id">
        @foreach ($books as $book)
        <option value="{{$book->book_id}}" {{$book->book_id == $copy->book_id ? 'selected' : '' }}>{{$book->author}}: {{$book->title}}</option>
        @endforeach
    </select>
    <select name="status" placeholder="status">
        <option value=0> In the store </option>
        <option value=1> At a user </option>
        <option value=2> Waste </option>
    </select>
    <input type="submit" value="Ok">
</form>