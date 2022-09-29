<form action="/api/copies" method="post">
    {{csrf_field()}}
    {{method_field('POST')}}
    <select name="book_id" placeholder="book_id">
        @foreach ($books as $book)
        <option value="{{$book->book_id}}">{{$book->author}}: {{$book->title}}</option>
        @endforeach
    </select>
    <input type="submit" value="Ok">
</form>