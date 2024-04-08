<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2 bg-grey-100 border border-blue-300 rounded-md font-semibold text-xs dark:text-gray-800 uppercase tracking-widest hover:bg-sky-700 hover:text-white dark:focus:bg-blue-200 active:bg-sky-700 dark:active:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-700 focus:ring-offset-2 dark:focus:ring-offset-sky-700 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
