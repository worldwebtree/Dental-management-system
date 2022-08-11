<div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0">
    <div class="w-full sm:max-w-md px-6 py-4 text-center text-white">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
