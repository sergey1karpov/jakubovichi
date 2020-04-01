
<form action="{{route('calc')}}" method="POST">
    @csrf
    <div class="form-group">
        <h4>Сколько метров?</h2>
            <input type="text" name="number" class="form-control" style="width: 200px;">
    </div>
    <input type="submit" name="btn" value="Рассчитать">
</form>
<hr>




