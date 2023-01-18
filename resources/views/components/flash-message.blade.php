<!-- display flash message if message exists -->
@if(session()->has('message'))
    <div class="flash-message">
        <p>{{session('message')}}</p>
    </div>    
@endif