<p>Press "The Button" to get a movie suggestion</p>
<form action="/movies" method="post">
    <input type="hidden" value="suggestion">
    <button type="submit">The Button</button>
    {{ csrf_field() }}
</form>