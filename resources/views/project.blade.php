<x-mylayout>
    <x-slot:headerTitle>Bill List</x-slot:headerTitle>

    <h1>Bill List</h1>
    <div class="mb-4">
        <a href="{{ route('bill.create') }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create Bill
        </a>
    </div>

    <table class="min-w-full border-collapse border border-gray-400">
        <thead class="bg-blue-500 text-white mt-10">
            <tr>
                <th class="border border-gray-300 px-4 py-2">Subscription</th>
                <th class="border border-gray-300 px-4 py-2">Harga</th>
                <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                <th class="border border-gray-300 px-4 py-2">Frekuensi</th>
                <th class="border border-gray-300 px-4 py-2">Payment Method</th>
                <th class="border border-gray-300 px-4 py-2">Catatan</th>
                <th class="border border-gray-300 px-4 py-2">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bills as $bill)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $bill->subscription }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $bill->price }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $bill->date }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $bill->frequency }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $bill->payment_method }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                    @if ($bill->note === 'Sudah Diperpanjang')
                            <span class="text-green-500 font-bold">{{ $bill->note }}</span>
                        @else
                            <span class="text-red-500 font-bold">{{ $bill->note }}</span>
                        @endif
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('bill.show', $bill->id) }}" class="text-blue-500">View Details</a>
                  <form action="{{ route('bill.destroy', $bill) }}" method="POST">
                  @method('DELETE')
                  @csrf
                      <button type="submit" class ="bg-red-600 p-4 text-white">
                        Delete
                      </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-mylayout>
