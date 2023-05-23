@foreach ($errors->all() as $error)
    <div>{{ $error }}</div>
@endforeach
<div style="text-align: center;">
    <form method="POST" action="{{ route('process_payment') }}">
        @csrf

        <div>
            <label>
                <input name="cc" type="number" minlength="15" placeholder="номер карты" style=" width: 400px; height:
                 30px;"
                       value="{{ old('cc') }}">
            </label>
        </div>
        <br>
        <div>
            <label>
                <input name="expire_date" type="text" placeholder="mm/yyyy" style=" width: 200px; height: 30px;"
                       value="{{ old('expire_date') }}">
            </label>

            <label>
                <input name="cvv" type="number" placeholder="cvv" minlength="3" style=" width: 200px; height: 30px;"
                       value="{{ old
                ('cvv') }}">
            </label>
        </div>
        <br>
        <label>
            <input name="full_name" type="text" placeholder="{{  Session::get('fullName') }}"
                   value="{{ old('cvv',  Session::get('fullName'))   }}"
                   style=" width: 400px; height: 30px;">
        </label>
        <br> <br>
        <input type="submit" style=" width: 200px;height: 50px;" value="Оплатить">
    </form>


</div>
