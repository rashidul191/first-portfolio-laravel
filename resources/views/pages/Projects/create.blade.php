@extends('Layout.layout')
@section('page-content')


<section class="py-5 my-5">
    <div class="container">
        <form action="{{route('projects.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Project Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Project Title" required>
            </div>
            <div class="mb-3">
                <label for="previewLink" class="form-label">Preview Link</label>
                <input type="text" class="form-control" name="previewLink" id="previewLink" value="www.facebook.com">
            </div>
            <div class="mb-3">
                <label for="thumbnailLink" class="form-label">Thumbnail Link</label>
                <input type="text" class="form-control" name="thumbnailLink" id="thumbnailLink" value="https://placehold.co/600x400/png">
            </div>

            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <textarea class="ckeditor form-control" name="details" id="content" rows="3" placeholder="Description" required></textarea>

            </div>
            <input class="btn btn-primary" type="submit" value="Create">
        </form>
    </div>
</section>




@endsection