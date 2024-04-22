<header>
    <nav>
        <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}">About</a>
        <!--class, se mi restituisce l'estringa 'products' allora vuol dire che la route ativa é questa e la voglio attivare-->
        <!-- se "Route::currentRouteName()" mi restituisce una sringa con il nome della Route che in questo caso é products (questa Route é in web.php), quindi se questa stringa é = 'products' allora questa class sará 'active', altrimente niente. ---- visto che active ha un style css de background queto fa l'effetto de aparire su ogni pagina quando stiamo la-->
        <a href="{{ route('contacts') }}"
            class="{{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}">Contacts</a>
    </nav>
</header>
