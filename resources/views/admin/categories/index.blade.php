@extends('layout.base')

@section('subheader')
@endsection


@section('content')
    <div>>
    toutes les categories
    <a href="{{ route('categorie_habibe.create') }}" class="btn btn-primary">cree une nouvelle categorie</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">nom</th>
            <th scope="col">actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $categorie)
            <tr>
                <td>{{ $categorie->name }}</td>
                <td>
                    <a href="{{route('categorie_habibe.edit',['categorie_habibe'=>$categorie->id])}}">modifier</a>
                    <form action="{{ route('categorie_habibe.destroy',['categorie_habibe'=>$categorie->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit">supprimer</button>
                    </form>
                </td>
            </tr>
        @empty
            0 donnée
        @endforelse
        </tbody>
    </table>
    </div
@endsection


@section('script')
@endsection