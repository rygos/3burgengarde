<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Deine Beiträge im laufe der Jahre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @for($i=\Carbon\Carbon::parse(Auth::user()->start_membership)->year; $i < \Carbon\Carbon::now()->year+1; $i++)
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $i }}
                    <div class="grid grid-cols-12">
                        @if(\Carbon\Carbon::parse(Auth::user()->start_membership)->year == $i)
                            @for($i2=\Carbon\Carbon::parse(Auth::user()->start_membership)->month; $i2 < 13; $i2++)
                                @if(\App\Models\MonthlyFee::whereUserId(Auth::id())->where('year', $i)->where('month', $i2)->first())
                                    <div><img src="/images/month/green/{{$i2}}.png"></div>
                                @else
                                    <div><img src="/images/month/red/{{$i2}}.png"></div>
                                @endif
                            @endfor
                        @else
                            @for($i2=1; $i2 < 13; $i2++)
                                @if(\App\Models\MonthlyFee::whereUserId(Auth::id())->where('year', $i)->where('month', $i2)->first())
                                    <div><img src="/images/month/green/{{$i2}}.png"></div>
                                @else
                                    <div><img src="/images/month/red/{{$i2}}.png"></div>
                                @endif
                            @endfor
                        @endif
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</x-app-layout>
