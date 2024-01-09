<aside class="min-h-screen col-span-1 px-8 bg-white shadow">
    <div class="py-6 space-y-7">
        {{-- Dashboard --}}
        <div>
            <x-sidenav.title>
                {{ __('Account') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    <x-zondicon-user class="w-3 text-green-400" />
                    <span>{{ __('Profile') }}</span>
                </x-sidenav.link>
            </div>

        </div>

        @if(auth()->user()->isAdmin())
        {{-- Counsellors --}}
        <div>
            <x-sidenav.title>
                {{ __('Counselor') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('admin.counsellors.index') }}" :active="request()->routeIs('admin.counsellors.index')">
                    <x-zondicon-view-tile class="w-3 text-green-400" />
                    <span>{{ __('Main') }}</span>
                </x-sidenav.link>
            </div>
            <div>
                <x-sidenav.link href="{{ route('admin.counsellors.create') }}" :active="request()->routeIs('admin.counsellors.create')">
                    <x-zondicon-compose class="w-3 text-green-400" />
                    <span>{{ __('Create') }}</span>
                </x-sidenav.link>
            </div>
        </div>
        @endif

        {{-- Threads --}}
        <div>
            <x-sidenav.title>
                {{ __('Confessions') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('pages.threads.index') }}" :active="request()->routeIs('pages.threads.index')">
                    <x-zondicon-document class="w-3 text-green-400" />
                    <span>{{ __('View') }}</span>
                </x-sidenav.link>
            </div>
        </div>
        
        @if(auth()->user()->isDefault())
        {{-- Personal Journal --}}
        <div>
            <x-sidenav.title>
                {{ __('Yours') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('pages.journals.index') }}" :active="request()->routeIs('pages.journals.index')">
                    <x-zondicon-book-reference class="w-3 text-green-400" />
                    <span>{{ __('View') }}</span>
                </x-sidenav.link>
            </div>

            <div>
                <x-sidenav.link href="{{ route('pages.journals.create') }}" :active="request()->routeIs('pages.journals.create')">
                    <x-zondicon-add-outline class="w-3 text-green-400" />
                    <span>{{ __('Add') }}</span>
                </x-sidenav.link>
            </div>

        </div>
        @endif            

        @if(auth()->user()->isAdmin())
        {{-- Podcasts for Admin --}}
        <div>
            <x-sidenav.title>
                {{ __('Podcast') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('admin.podcasts.index') }}" :active="request()->routeIs('admin.podcasts.index')">
                    <x-zondicon-view-tile class="w-3 text-green-400" />
                    <span>{{ __('Main') }}</span>
                </x-sidenav.link>
            </div>
            <div>
                <x-sidenav.link href="{{ route('admin.podcasts.create') }}" :active="request()->routeIs('admin.podcasts.create')">
                    <x-zondicon-add-outline class="w-3 text-green-400" />
                    <span>{{ __('Add') }}</span>
                </x-sidenav.link>
            </div>
        </div>
        @endif

        @if(auth()->user()->isDefault())
        {{-- Podcasts --}}
        <div>
            <x-sidenav.title>
                {{ __('Podcast') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('pages.podcasts.index') }}" :active="request()->routeIs('pages.podcasts.index')">
                    <x-zondicon-music-playlist class="w-3 text-green-400" />
                    <span>{{ __('View') }}</span>
                </x-sidenav.link>
            </div>
        </div>
        @endif

        @if(auth()->user()->isCounsellor())
        {{-- Mental Health Assessment --}}
        <div>
            <x-sidenav.title>
                {{ __('Assessment') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('pages.questions.index') }}" :active="request()->routeIs('pages.questions.index')">
                    <x-zondicon-book-reference class="w-3 text-green-400" />
                    <span>{{ __('View') }}</span>
                </x-sidenav.link>
            </div>

            <div>
                <x-sidenav.link href="{{ route('pages.questions.create') }}" :active="request()->routeIs('pages.questions.create')">
                    <x-zondicon-add-outline class="w-3 text-green-400" />
                    <span>{{ __('Add Question') }}</span>
                </x-sidenav.link>
            </div>

        </div>
        @endif

        @if(auth()->user()->isDefault())
        {{-- Mental Health Assessment for user--}}
        <div>
            <x-sidenav.title>
                {{ __('Quick Assessment') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('pages.answers.create') }}" :active="request()->routeIs('pages.answers.create')">
                    <x-zondicon-book-reference class="w-3 text-green-400" />
                    <span>{{ __('Start') }}</span>
                </x-sidenav.link>
            </div>
        </div>
        @endif

        @if(auth()->user()->isDefault())
        {{-- Messaging --}}
        <div>
            <x-sidenav.title>
                {{ __('Session') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('vendor.Chatify.pages.app') }}" :active="request()->routeIs('vendor.Chatify.pages.app')">
                    <x-zondicon-book-reference class="w-3 text-green-400" />
                    <span>{{ __('Start') }}</span>
                </x-sidenav.link>
            </div>
        </div>
        @endif

        @if(auth()->user()->isCounsellor())
        {{-- Messaging --}}
        <div>
            <x-sidenav.title>
                {{ __('Session') }}
            </x-sidenav.title>
            <div>
                <x-sidenav.link href="{{ route('vendor.Chatify.pages.app') }}" :active="request()->routeIs('vendor.Chatify.pages.app')">
                    <x-zondicon-book-reference class="w-3 text-green-400" />
                    <span>{{ __('Start') }}</span>
                </x-sidenav.link>
            </div>
        </div>
        @endif

        {{-- Authentication --}}
        <div>
            <x-sidenav.title>
                {{ __('Authentication') }}
            </x-sidenav.title>
            <div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-sidenav.link href="{{ route('logout') }}" onclick="event.preventDefault();                                               this.closest('form').submit();">
                        <x-heroicon-o-logout class="w-4 text-green-400" />
                        <span>{{ __('Logout') }}</span>
                    </x-sidenav.link>

                </form>

            </div>
        </div>

    </div>
</aside>
