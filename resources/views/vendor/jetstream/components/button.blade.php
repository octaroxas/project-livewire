<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-lg font-bold text-xs text-white tracking-widest hover:bg-indigo-700 active:bg-indigo-500 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
