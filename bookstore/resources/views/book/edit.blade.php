<form action="/api/books/{{$book->book_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="title" placeholder="Title" value="{{$book->title}}">
    <input type="text" name="author" placeholder="Author" value="{{$book->author}}">
    <input type="submit" value="Ok">
</form>