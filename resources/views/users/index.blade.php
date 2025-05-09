<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project - Importar CSV</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>

    <div class="container">
        <div class="card my-5 border-light shadow">
            <h3 class="card-header">Laravel 11 - Importar Excel </h3>
            <div class="card-body">
                @session('success')
                    <div class="alert alert-success" role="alert">{!! $value !!}</div>
                @endsession

                @session('error')
                    <div class="alert alert-danger" role="alert">{!! $value !!}</div>
                @endsession

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('user.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group my-4">
                        <input type="file" name="file" class="form-control" id="file" accept=".csv">
                        <button type="submit" class="btn btn-outline-success" id="fileBtn"><i
                                class="fa-solid fa-upload"></i> Importar</button>
                    </div>

                </form>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>