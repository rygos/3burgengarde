<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Persönliche Daten') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Bitte geb hier folgende Informationen an. Diese werden entweder mit der Kommandantur oder allen geteilt. Je nach Einstellung.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update_profile') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="adr_street" :value="__('Straße & Hausnummer')" />
            <x-text-input id="adr_street" name="adr_street" type="text" class="mt-1 block w-full" :value="old('adr_street', $user->adr_street)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('adr_street')" />
        </div>

        <div>
            <x-input-label for="adr_zip" :value="__('PLZ')" />
            <x-text-input id="adr_zip" name="adr_zip" type="text" class="mt-1 block w-full" :value="old('adr_zip', $user->adr_zip)" required autocomplete="zip" />
            <x-input-error class="mt-2" :messages="$errors->get('adr_zip')" />
        </div>

        <div>
            <x-input-label for="adr_city" :value="__('Ort')" />
            <x-text-input id="adr_city" name="adr_city" type="text" class="mt-1 block w-full" :value="old('adr_city', $user->adr_city)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('adr_city')" />
        </div>

        {{--
        <div>
            <x-input-label for="adr_public" :value="__('Adresse nur sichtbar für Kommandantur')" />
            <x-toggle id="adr_public" name="adr_public" class="mt-1 block w-full" :value="old('adr_public', $user->adr_public)" />
            <x-input-error class="mt-2" :messages="$errors->get('adr_public')" />
        </div>
        --}}

        <div>
            <x-input-label for="phone_home" :value="__('Festnetznummer')" />
            <x-text-input id="phone_home" name="phone_home" type="text" class="mt-1 block w-full" :value="old('phone_home', $user->phone_home)" autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_home')" />
        </div>

        <div>
            <x-input-label for="phone_mobile" :value="__('Handynummer')" />
            <x-text-input id="phone_mobile" name="phone_mobile" type="text" class="mt-1 block w-full" :value="old('phone_mobile', $user->phone_mobile)" required autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_mobile')" />
        </div>

        {{--
        <div>
            <x-input-label for="phone_public" :value="__('Telefonnummern nur sichtbar für Kommandantur')" />
            <x-toggle id="phone_public" name="phone_public" class="mt-1 block w-full" :value="old('phone_public', $user->phone_public)" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_public')" />
        </div>
        --}}

<div class="flex items-center gap-4">
    <x-primary-button>{{ __('Speichern') }}</x-primary-button>

    @if (session('status') === 'profile-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="text-sm text-gray-600 dark:text-gray-400"
        >{{ __('Senden.') }}</p>
    @endif
</div>
</form>
</section>
