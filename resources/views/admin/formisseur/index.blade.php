@extends('layout.base')

@section('content')
    <div>
        <h1>Liste de tout les fournisseurs</h1>
        <div>
            <button class="btn btn-primary">Creation de fournisseur</button>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($fournisseurs as $fournisseur)
                <tr>
                    <th scope="row">
                        <img src="{{ $fournisseur->imagePath }}" width="50" alt="">
                    </th>
                    <td>{{ $fournisseur->name }}</td>
                    <td>{{ $fournisseur->email }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('fournisseur.edit',['fournisseur'=>$fournisseur->id]) }}">modifier</a>
                        <form action="{{ route('fournisseur.destroy',['fournisseur'=>$fournisseur->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                aucune donnée
            @endforelse
            </tbody>
        </table>
    </div>
@endsection