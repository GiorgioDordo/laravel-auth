
@extends("layouts.app")

@section("page-title", "Projects")

@section("content")
<main class="container">
    <div class="row">
        <h1>projects</h1>
        @foreach ($projects as $index => $project)
        <div class="col-4 card">
            <div class="card-body">
                <p><strong>{{$project["name"]}}</strong></p>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection
