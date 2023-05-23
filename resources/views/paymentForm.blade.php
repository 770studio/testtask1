<div style="text-align: center;">
    <form method="POST" action="{{ route('process_payment') }}">
        @csrf

        <div>
            <label>
                <input name="cc" type="text" placeholder="номер карты" style=" width: 400px; height: 30px;">
            </label>
        </div>
        <br>
        <div>
            <label>
                <input name="expire_date" type="text" placeholder="mm/yyyy" style=" width: 200px; height: 30px;">
            </label>

            <label>
                <input name="cvv" type="text" placeholder="cvv" style=" width: 200px; height: 30px;">
            </label>
        </div>
        <br>
        <label>
            <input name="fullName" type="text" placeholder="{{  Session::get('fullName') }}"
                   style=" width: 400px; height: 30px;">
        </label>
        <br> <br>
        <button type="submit" style=" width: 200px;height: 50px;">Оплатить</button>
    </form>


</div>
