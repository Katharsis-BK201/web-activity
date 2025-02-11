@extends('layouts.app')
@section('content')
<h2 class="text-2xl font-bold mb-4">Product Inventory</h2>
<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-6 py-3 border-b border-gray-300">Product Name</th>
                <th class="px-6 py-3 border-b border-gray-300">Price</th>
                <th class="px-6 py-3 border-b border-gray-300">Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $productTypes = ['Laptop', 'Smartphone', 'Headphones', 'Mouse', 'Keyboard', 'Monitor', 'Tablet', 
                            'Printer', 'Speaker', 'Camera'];
            
            for ($i = 1; $i <= 150; $i++) {
                $productType = $productTypes[array_rand($productTypes)];
                $productName = $productType . " Model " . chr(65 + ($i % 26)) . "-" . rand(100, 999);
                $price = number_format(rand(99, 10000) + (rand(0, 99) / 100), 2);
                $quantity = rand(0, 100);
                
                echo "<tr class='hover:bg-gray-50'>";
                echo "<td class='px-6 py-4 border-b border-gray-300'>" . $productName . "</td>";
                echo "<td class='px-6 py-4 border-b border-gray-300'>₱" . $price . "</td>";
                echo "<td class='px-6 py-4 border-b border-gray-300'>" . $quantity . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
@endsection