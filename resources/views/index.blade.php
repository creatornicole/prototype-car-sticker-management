<x-layout>

    <!-- make sticker request via form -->
    <form method="post" action="/submit"> <!-- form adds data to database -->
        @csrf <!-- prevents cross side scripting -->
        
        <label for="firstname">Vorname:</label>
        <input placeholder="Vorname" type="text" name="firstname">
        @error('firstname')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="surname">Nachname:</label>
        <input placeholder="Nachname" type="text" name="surname">
        @error('surname')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="brand">Automarke:</label>
        <input placeholder="Automarke" type="text" name="brand">
        @error('brand')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="model">Modell:</label>
        <input placeholder="Modell" type="text" name="model">
        @error('model')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="hstn">Herstellernummer:</label>
        <input placeholder="Herstellernummer" type="text" name="hstn"> <!-- optional TODO: add ? button for description -->
        @error('hstn')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="type">Typ:</label>
        <input placeholder="Typ" type="text" name="type">
        @error('type')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="cnstrYear">Baujahr:</label>
        <input placeholder="Baujahr" type="text" name="cnstrYear">
        @error('cnstrYear')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="color">Farbe (Farbcode):</label>
        <input placeholder="Farbe" type="text" name="color"> <!-- optional TODO: add ? button for description -->
        @error('color')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <!-- to make actual request form has to be submitted by pressing the submit button -->
        <button type="submit">Beantragen</button>
    </form>

</x-layout>
