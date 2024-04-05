@extends('layouts.app')

@section('title', 'lista projects')

@section('content')
    <div class="container">

        <button class=" btn btn-primary my-4">
            <a class="text-light" href="{{ 'admin.projects.create' }}"><i class="fa-solid fa-plus"></i> crea nuovo project</a>


        </button>


        <h2 class=" my-4">
            lista progetti
        </h2>

        <div class="row justify-content-center g-3">
            @forelse ($projects as $project)
                <div class="col-4">
                    <div class="card h-100">

                        <h2>{{ $project['title'] }}</h2>
                        <p>{{ $project['slug'] }}</p>
                        <p>{{ $project->getAbstract(200) }}</p>

                        <div class="d-flex justify-content-around">

                            <button class=" btn btn-primary my-4">
                                <a class="text-light" href="{{ route('admin.projects.show', $project) }}">
                                    dettaglio</a>
                            </button>

                            <button class=" btn btn-primary my-4">
                                <a class="text-light" href="{{ route('admin.projects.edit', $project) }}">
                                    modifica</a>
                            </button>

                            <button class=" btn btn-danger my-4">
                                <a class="text-light" href="{{ route('admin.projects.destroy', $project) }}">
                                    elimina</a>
                            </button>
                        </div>
                    </div>
                </div>

            @empty
            @endforelse
        </div>
        <div class="my-4">
            {{ $projects->links('pagination::bootstrap-5') }}

        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
