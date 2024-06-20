<!DOCTYPE html>
<html>
<head>
    <title>Gadgets</title>
    <style>
        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Gadgets</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>${{ $product['price'] }}</td>
                    <td>{{ $product['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
