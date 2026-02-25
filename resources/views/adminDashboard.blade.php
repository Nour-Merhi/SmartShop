<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>Admin Dashborad</title>
</head>
<body>
    <header>
        <h3>SmartShop</h3>
        <h3>Welcome, {{ $admin->user->full_name }}!</h3>
        <div id="btn">
            <button type="button" onclick="toggleProductForm()">Product Form</button>
            <button type="button" onclick="toggleCustomerTable()">Customer Table</button>
            <button type="button" onclick="toggleDeliveryTable()">Delivery Table</button>
        </div>
        <hr>
    </header>
    <section id="product-form" class="form" style="display: block;">
        <form action="{{ route('admin.product.add')}}" method="POST">
            @csrf
    
            <label for="name">Product Name:</label>
            <input id="name" name="name" type="text" required>

            <label for="price">Product Price:</label>
            <input id="price" name="price" type="text" required>

            <label for="description">Product Description:</label>
            <input id="description" name="description" type="text" required>

            <label for="image1">Product Image 1:</label>
            <input id="image1" name="image1" type="url" required>
            
            <label for="image2">Product Image 2: (optional)</label>
            <input id="image2" name="image2" type="url" required>

            <label for="image3">Product Image 3: (optional)</label>
            <input id="image3" name="image3" type="url" required>

            <label for="image4">Product Image 4: (optional)</label>
            <input id="image4" name="image4" type="url" required>

            <label for="isFeatured">Is product Featured?</label>
            <input id="isFeatured" name="isFeatured" type="text" placeholder="Yes or No.." required>

            <label for="sales_count">Sale Count:</label>
            <input id="sales_count" name="sales_count" type="number" min="0" required>

            <button type="submit" class="btn" onclick="showAddProductConfirm()">Add Product</button>
        </form>
    </section>

    <section id="customer_table" style="display: none;">
        <h2>Logged-in Customers</h2>

        <table>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Status</th>
            </tr>

            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->user->full-name}}</td>
                <td>{{ $customer->user->email }}</td>
                <td>{{ $customer->user->created_at }}</td>
                <td>{{ $customer->user->updated_at }}</td>
                <td>{{ $customer->user->user_status }}</td>
            </tr>
            @endforeach
        </table>
    </section>

    <section id="delivery_table" style="display: none;">
        <h2>Logged-in Delivery Men</h2>
        <button type="button" onclick="openCreateDeliveryForm()">Create Account For Delivery Man</button>
        <br>

        <div id="create-delivery-form" class="form" style="display: none;">
            <form action="{{ route('admin.create.delivery.account') }}" method="POST">
                <label for="full-name">Full Name:</label>
                <input id="full-name" name="full-name" type="text" required>

                <label for="email">Email:</label>
                <input id="email" name="email" type="email" required>

                <label for="password">Password:</label>
                <input id="password" name="password" type="password" required>

                <label for="vehicle-type">Vehicle Type:</label>
                <input id="vehicle-type" name="vehicleType" type="text" required>

                <label for="phoneNb">Vehicle Type:</label>
                <input id="phoneNb" name="phoneNb" type="tel" required>

                <label for="status">Delivery Man Status:</label>
                <input id="status" name="status" type="text" required>

                <button id="delivery-btn" type="submit">Add Delivery Man</button>
            </form>
        </div>

        <div id="delivery-user-table">
            <table>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>vehicle Type</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Status</th>
                </tr>

                @foreach($deliveryMan as $delivery)
                <tr>
                    <td>{{ $delivery->user->full-name}}</td>
                    <td>{{ $delivery->user->email }}</td>
                    <td>{{ $delivery->user->created_at }}</td>
                    <td>{{ $delivery->user->updated_at }}</td>
                    <td>{{ $delivery->user->user_status }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
</body>
</html>