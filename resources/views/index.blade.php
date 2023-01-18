<x-layout>

    <h1>Antrag auf Beklebung stellen</h1>

    <!-- make sticker request via form -->
    <form method="post" action="/submit"> <!-- form adds data to database -->
        @csrf <!-- prevents cross side scripting -->
        
        <label for="firstname">Vorname:</label>
        <input placeholder="Vorname" value="{{old('firstname')}}" type="text" name="firstname">
        @error('firstname')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="surname">Nachname:</label>
        <input placeholder="Nachname" value="{{old('surname')}}" type="text" name="surname">
        @error('surname')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="brand">Automarke:</label>
        <input placeholder="Automarke" value="{{old('brand')}}" type="text" name="brand">
        @error('brand')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="model">Modell:</label>
        <input placeholder="Modell" value="{{old('model')}}" type="text" name="model">
        @error('model')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="hstn">Herstellernummer:</label>
        <input placeholder="Herstellernummer" value="{{old('hstn')}}" type="text" name="hstn"> <!-- optional TODO: add ? button for description -->
        @error('hstn')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="type">Typ:</label>
        <input placeholder="Typ" value="{{old('type')}}" type="text" name="type">
        @error('type')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="cnstrYear">Baujahr:</label>
        <input placeholder="Baujahr" value="{{old('cnstrYear')}}" type="text" name="cnstrYear">
        @error('cnstrYear')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="color">Farbe (Farbcode):</label>
        <input placeholder="Farbe" value="{{old('color')}}" type="text" name="color"> <!-- optional TODO: add ? button for description -->
        @error('color')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <!-- to make actual request form has to be submitted by pressing the submit button -->
        <button type="submit">Beantragen</button>
    </form>

</x-layout>
