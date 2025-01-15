<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;

class ProjectController extends Controller
{
    public function show($id)
    {
        $bill = Bill::findOrFail($id); // Retrieve the specific bill
        return view('bill_detail', compact('bill')); // Pass data to the detail view
    }

    public function index()
    {
        $bills = Bill::all(); // Retrieve all bills
        return view('project', compact('bills')); // Pass data to the view
    }

    public function createpage(){
        // return view('bills.create', [
        //     "pagetitle" => "Test Create Bill"
        // ]);
        $bill = Bill::findOrFail(1); // Retrieve the specific bill
        return view('bill_detail', compact('bill')); // Pass data to the detail view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subscription' => 'required|string|max:255',
            'price' => 'required|numeric|max:999999.99', // Sesuaikan batas maksimum jika perlu
            'date' => 'required|date',
            'frequency' => 'required|integer|max:20',
            'payment_method' => 'required|string|max:20',
            'note' => 'required|string|max:255' // Ubah text menjadi string
        ]);
        
        // Proceed with storing data
        Bill::create($validated);

        return redirect()->route('bill.index')->with('success', 'Bill created successfully.');

    }
}
