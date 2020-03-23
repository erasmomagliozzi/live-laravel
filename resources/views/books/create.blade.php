<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('books.store')}}" method="post">
      @csrf
      <input type="text" name="isbn" value="" placeholder="isbn">
      <input type="text" name="title" value="" placeholder="title">
      <input type="text" name="author" value="" placeholder="author">
      <input type="text" name="price" value="" placeholder="price">
      <input type="text" name="genre" value="" placeholder="genre">
      <input type="text" name="year" value="" placeholder="year">

      <button type="submit" name="button">Salva</button>
      @method('POST')

    </form>

  </body>
</html>
