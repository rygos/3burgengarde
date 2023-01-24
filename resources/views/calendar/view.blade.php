<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $item->title }} <p class="text-xs">{{ $item->start_date->format('d.m.Y H:i') }} Uhr</p>
            <div class="inline-flex items-right text-base font-semibold text-gray-900 dark:text-white">
                @if(Auth::user()->perm_calendar == 1 or Auth::user()->perm_admin == 1)
                    <a href="{{ route('calendar.edit', $item->id) }}"><x-heroicons::mini.solid.pencil /></a>
                @endif
                @if($item->public == 0)
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Privat</span>
                @endif
                @if($item->only_active_members)
                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Nur Aktive</span>
                @endif
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {!! nl2br($item->description) !!}
                    @if($item->private_description)
                        <p class="text-sm text-red-500 truncate dark:text-red-400">
                            Intern: {!! nl2br($item->private_description) !!}
                        </p>
                    @endif
                </div>
            </div>
        </div>

            <br>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    @if($item->start_date >= now())
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            Hier kannst du zusagen oder absagen.
                            <div class="grid grid-cols-3">
                                {{ Form::open(['route' => 'set_commitment']) }}
                                {{ Form::hidden('calendar_id', $item->id) }}
                                <div></div>
                                <div>
                                    <ul class="grid w-full gap-6 md:grid-cols-3">
                                        <li>
                                            <input name="status" type="radio" id="react-option-1" value="1" class="hidden peer" required="" checked="checked">
                                            <label for="react-option-1" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                                <div class="block">
                                                    <x-heroicons::outline.hand-thumb-up class="text-green-600"/>
                                                    <div class="w-full text-sm">Komme</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input name="status" type="radio" id="react-option-0" value="0" class="hidden peer" required="">
                                            <label for="react-option-0" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                                <div class="block">
                                                    <x-heroicons::outline.hand-thumb-down class="text-red-500"/>
                                                    <div class="w-full text-sm">Bin raus</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input name="status" type="radio" id="react-option-2" value="2" class="hidden peer" required="">
                                            <label for="react-option-2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                                <div class="block">
                                                    <x-heroicons::outline.question-mark-circle class="text-blue-700"/>
                                                    <div class="w-full text-sm">Unklar</div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                    <br>
                                    <div class="flex items-center gap-4">
                                        {{ Form::submit('Submit', ['class' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800']) }}
                                    </div>
                                </div>
                                <div></div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    @endif
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        Zusagen und Absagen
                        <div class="grid grid-cols-4">
                            @foreach(\App\Models\User::wherePermActivated(1)->orderBy('name', 'asc')->get() as $i)
                                <div class="grid grid-cols-2">
                                    <div>
                                        @if($i->beername)
                                            {{ $i->beername }}
                                        @else
                                            {{ $i->name }}
                                        @endif
                                    </div>
                                    <div>
                                        @php
                                            $com = \App\Models\CalendarCommitment::whereUserId($i->id)->where('calendar_id', $item->id)->first();
                                        @endphp
                                        @if($com)
                                            @if($com->status == 1)
                                                <x-heroicons::outline.hand-thumb-up class="text-green-600" />
                                            @elseif($com->status == 0)
                                                <x-heroicons::outline.hand-thumb-down class="text-red-500"/>
                                            @elseif($com->status == 2)
                                                <x-heroicons::outline.question-mark-circle class="text-blue-700"/>
                                            @endif
                                        @else
                                            <x-heroicons::outline.face-frown class="text-orange-400"/>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

    </div>
</x-app-layout>
