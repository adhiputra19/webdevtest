<x-mylayout>
<x-slot:headerTitle>Bill Detail</x-slot:headerTitle>
    <h1>Bill Detail</h1>
    <p><strong>Subscription:</strong> {{ $bill->subscription }}</p>
    <p><strong>Price:</strong> {{ $bill->price }}</p>
    <p><strong>Date:</strong> {{ $bill->date }}</p>
    <p><strong>Frequency:</strong> {{ $bill->frequency }}</p>
    <p><strong>Payment Method:</strong> {{ $bill->payment_method }}</p>
    <p><strong>Note:</strong> {{ $bill->note }}</p>
    <x-buttonbackproject></x-buttonbackproject>
        <a href="{{ route('bill.edit', $bill->id) }}"

           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create Bill
        </a>
</x-mylayout>
