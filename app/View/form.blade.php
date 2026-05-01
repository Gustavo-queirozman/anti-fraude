@csrf

<label>Nome:</label>
<input type="text" name="name" value="{{ old('name', $cheater->name ?? '') }}">
<br>

<label>CPF:</label>
<input type="text" name="cpf" value="{{ old('cpf', $cheater->cpf ?? '') }}">
<br>

<label>CEP:</label>
<input type="text" name="zipcode" value="{{ old('zipcode', $cheater->zipcode ?? '') }}">
<br><br>
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<button type="submit">Salvar</button>