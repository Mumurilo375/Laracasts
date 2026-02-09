<x-layout>
    <x-slot:heading class="border-b border-slate-200">
        Create Job
    </x-slot:heading>
    <x-slot:main>
        <form method="POST" action="/jobs" class="mx-auto mt-6 max-w-2xl space-y-6 rounded-lg bg-[#FAD070] p-8 shadow-lg">
        @csrf
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700">Title</label>
                    <div class="mt-2">
                        <input type="text" name="title" id="title" class="block w-full rounded-md border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm focus:border-brand focus:outline-none focus:ring-2 focus:ring-brand" placeholder="Laravel DEV" required />
                    </div>
                </div>        
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="salary" class="block text-sm font-medium text-slate-700">salary</label>
                    <div class="mt-2">
                        <input type="text" name="salary" id="salary" class="block w-full rounded-md border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm focus:border-brand focus:outline-none focus:ring-2 focus:ring-brand" placeholder="R$ 3.000" required />
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="inline-flex items-center rounded-md bg-slate-800 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-800 focus:ring-offset-2">Submit</button>
            </div>
        </form>
    </x-slot:main>
</x-layout>