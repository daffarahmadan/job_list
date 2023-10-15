@extends('frontend.layout')

@section('content')
<div class="container">
      <ul class="list-group list-group-horizontal mt-5 flex-wrap">
        @foreach($categories as $cat)
        <li class="list-group-item m-1 {{ isset($category) ? $category->id === $cat->id ? 'border-success' : null : null }}">
          <a href="{{ route('by-category', $cat->slug) }}" class="text-dark text-decoration-none"> {{ $cat->title }} </a
          ><span class="badge bg-dark rounded-pill">{{ $cat->jobs->count() }}</span>
        </li>
        @endforeach   
      </ul>

      <div class="row my-5">
        @foreach ($jobs as $job)
        <div class="col-lg-4 mb-5">
          <div class="card">
            <img
                src="{{ Storage::url($job->thumbnail) }}"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title mb-4 mt-3">{{ $job->title }}</h5>
                <a href="{{ route('detail', $job->slug) }}" class="btn btn-success d-block">Detail</a>
                <a href="mailto:{{ $job->email }}" class="btn mt-3 btn-dark d-block">Apply</a> 
            </div>
          </div>

        </div>
        @endforeach
      </div>
    </div>
@endsection