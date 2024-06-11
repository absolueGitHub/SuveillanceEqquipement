<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Equipment Movements</h1>
        <a href="{{ route('transactions.create') }}" class="btn btn-primary">Record New Movement</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Equipment</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->equipment->name }}</td>
                        <td>{{ ucfirst($transaction->type) }}</td>
                        <td>{{ $transaction->date }}</td>
                        <td>{{ $transaction->note }}</td>
                        <td>
                            <a href="{{ route('transactions.show', $transaction->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
