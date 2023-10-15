@extends('frontend.layout')

@section('content')
<div class="container">
      <nav aria-label="breadcrumb" class="mt-5">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail</li>
          <li class="breadcrumb-item active" aria-current="page">
           {{ $job->title}}
          </li>
        </ol>
      </nav>

      <div class="row justify-content-center my-5">
        <div class="col-lg-8">
          <div class="card">
            <img
              src="{{ Storage::url($job->thumbnail) }}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title"> {{ $job->title}}</h5>
              <p class="card-text my-5">
              {!! $job->description!!}
              </p>
              <a href="mailto:{{ $job->email }}" class="btn mt-3 btn-dark d-block">Apply</a>
            </div>
          </div>
        </div>
      </div>
      <h3 class="text-center" style="margin-top: 170px">
        Pekerjaan Yang Serupa
      </h3>
      <div class="row my-5">
        <div class="col-lg-4 mb-5">
          <div class="card">
            <img
              src="https://images.unsplash.com/photo-1529400971008-f566de0e6dfc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8am9ifGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title mb-4 mt-3">Expert Html</h5>
              <a href="detail.html" class="btn btn-success d-block">Detail</a>
              <a href="#" class="btn mt-3 btn-dark d-block">Apply</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card">
            <img
              src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8am9ifGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title mb-4 mt-3">Expert CSS</h5>
              <a href="detail.html" class="btn btn-success d-block">Detail</a>
              <a href="#" class="btn mt-3 btn-dark d-block">Apply</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card">
            <img
              src="https://images.unsplash.com/photo-1598257006626-48b0c252070d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8am9ifGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title mb-4 mt-3">Expert Javascript</h5>
              <a href="detail.html" class="btn btn-success d-block">Detail</a>
              <a href="#" class="btn mt-3 btn-dark d-block">Apply</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-5">
          <div class="card">
            <img
              src="https://images.unsplash.com/photo-1598257006626-48b0c252070d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8am9ifGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title mb-4 mt-3">Expert Backend Developer</h5>
              <a href="detail.html" class="btn btn-success d-block">Detail</a>
              <a href="#" class="btn mt-3 btn-dark d-block">Apply</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card">
            <img
              src="https://images.unsplash.com/photo-1529400971008-f566de0e6dfc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8am9ifGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title mb-4 mt-3">Expert Frontend Developer</h5>
              <a href="detail.html" class="btn btn-success d-block">Detail</a>
              <a href="#" class="btn mt-3 btn-dark d-block">Apply</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card">
            <img
              src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8am9ifGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title mb-4 mt-3">Expert Designer</h5>
              <a href="detail.html" class="btn btn-success d-block">Detail</a>
              <a href="#" class="btn mt-3 btn-dark d-block">Apply</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection    