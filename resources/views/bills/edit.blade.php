<x-mylayout>
    <x-slot:headerTitle>{{ $pagetitle }}</x-slot:headerTitle>

    <form action="{{ route('bill.update', $bill) }}" method="POST">
        @method('PUT')
        @csrf
        {{-- Subscription field --}}
        <div class="mb-4">
            <label for="subscription" class="block text-gray-700 text-sm font-bold mb-2">Subscription</label>
            <input type="text" name="subscription" id="subscription" value="{{ old('subscription') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('subscription') border-red-500 @enderror">
            @error('subscription')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        
        {{-- Price field --}}
        <div class="mb-4">
            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') border-red-500 @enderror">
            @error('price')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        {{-- Date field --}}
        <div class="mb-4">
            <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date</label>
            <input type="date" name="date" id="date" value="{{ old('date') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('date') border-red-500 @enderror">
            @error('date')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        {{-- Frequency field --}}
        <div class="mb-4">
            <label for="frequency" class="block text-gray-700 text-sm font-bold mb-2">Frequency</label>
            <input type="number" name="frequency" id="frequency" value="{{ old('frequency') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('frequency') border-red-500 @enderror">
            @error('frequency')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        {{-- Payment Method field --}}
        <div class="mb-4">
            <label for="payment_method" class="block text-gray-700 text-sm font-bold mb-2">Payment Method</label>
            <input type="text" name="payment_method" id="payment_method" value="{{ old('payment_method') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('payment_method') border-red-500 @enderror">
            @error('payment_method')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        {{-- Note field --}}
        <div class="mb-4">
            <label for="note" class="block text-gray-700 text-sm font-bold mb-2">Note</label>
            <textarea name="note" id="note"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('note') border-red-500 @enderror">{{ old('note') }}</textarea>
            @error('note')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit button --}}
        <button type="submit"
            class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Submit
        </button>
    </form>

    <x-buttonhome>Back to Home</x-buttonhome>
</x-mylayout>
