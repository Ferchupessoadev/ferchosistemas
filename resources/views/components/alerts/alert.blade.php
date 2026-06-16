@if (session()->has('success') || session()->has('error'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         x-transition:enter="transition ease-out duration-300"
         x-transition:leave="transition ease-in duration-200"
         class="fixed bottom-5 right-5 z-50 p-4 rounded-xl shadow-lg border {{ session()->has('success') ? 'bg-emerald-900/90 border-emerald-500/50 text-emerald-100' : 'bg-red-900/90 border-red-500/50 text-red-100' }}"
    >
        <div class="flex items-center gap-2">
            <i data-lucide="{{ session()->has('success') ? 'check-circle' : 'alert-circle' }}" class="size-5"></i>
            <p class="font-medium text-sm">{{ session('success') ?? session('error') }}</p>
        </div>
    </div>
@endif
