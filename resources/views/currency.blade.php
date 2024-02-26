<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ISO-4217 Page</title>
    <meta name="description" content="My Application Description">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Alex V">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/currency.js'])

</head>
<body>
<div class="mt-0 -mb-3">
    <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
        <div class="relative rounded-xl overflow-auto p-8">
            <div class="grid grid-cols-12 gap-2 font-mono text-white text-sm text-center font-bold leading-6 bg-stripes-fuchsia rounded-lg">
                @if(count($data)<1)
                    <p class="bg-danger text-white p-1">no data found</p>
                @endif
                @foreach ($data as $row)
                    <div class="p-4 rounded-lg shadow-lg bg-gray-500">
                        <input
                            id="currency-{{ $row->id }}"
                            name="currency-{{ $row->alphabetic_code }}-{{ $row->id }}"
                            {{  ($row->status === 1 ? ' checked' : '') }}
                        type="checkbox" value="{{ $row->status ?? 0 }}"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ms-3 text-sm font-medium text-white ">{{ $row->alphabetic_code }}
                            ({{ $row->numeric_code }})</label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5"></div>
    </div>
</div>


</body>
</html>
