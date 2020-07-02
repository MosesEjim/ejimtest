<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Transaction completed Successfully
    The Transaction details are as follows
    <table>
        <tr>
            <th>Name</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Transaction Ref</td>
            <td>{{$transaction->transaction_ref}}</td>
        </tr>
        <tr>
            <td>Product</td>
            <td>{{$transaction->product_name}}</td>
        </tr>
        <tr>
            <td>Vendor</td>
            <td>{{$transaction->vendor_name}}</td>
        </tr>
        <tr>
            <td>Vendor Phone</td>
            <td>{{$transaction->vendor_phone}}</td>
        </tr>
        <tr>
            <td>Dispatched By</td>
            <td>{{$transaction->user->username}}</td>
        </tr>
    </table>
</body>
</html>