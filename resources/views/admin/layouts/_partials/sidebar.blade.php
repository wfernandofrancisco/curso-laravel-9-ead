<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">ETI EAD</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        @foreach (config('template.menus') as $menu)
            <a href="{{ $menu['url'] }}"  class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="{{ $menu['icon'] }} mr-3"></i>
                {{ $menu['name'] }}
            </a>
        @endforeach
</aside>