<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        .receipt-container {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .order-info {
            margin-top: 20px;
        }
        .order-info p {
            margin: 5px 0;
        }
        .special-code {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="receipt-container">
        <h2>Reçu de Commande</h2>
        <div class="order-info">
            <p><strong>Nom:</strong> {{ $commande->first_name }} {{ $commande->last_name }}</p>
            <p><strong>Téléphone:</strong> {{ $commande->phone }}</p>
            <p><strong>Type de Livraison:</strong> {{ $commande->livraison }}</p>
            @if($commande->livraison == 'domicile')
                <p><strong>Adresse:</strong> {{ $commande->adresse }}, {{ $commande->ville }}</p>
            @endif
            <p><strong>Total:</strong> ${{ number_format($commande->total_price, 2) }}</p>
        </div>

        <div class="special-code">
            <p><strong>Code Spécial:</strong> {{ $special_code }}</p>
        </div>
    </div>

</body>
</html>
