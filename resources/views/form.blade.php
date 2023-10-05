<a href="{{route('order.show',['19-02-2022','5555'])}}">
    test
</a>
<form action="{{route('order.post')}}" method="post">
@csrf
<label for="date">Date :</label>
<input type="date" name="date" id="date" required>

<label for="num">Num :</label>
<input type="number" name="num" id="num" required>

<button type="submit">Envoyer</button>
</form>