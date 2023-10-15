@extends('frontend.layout')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">Jika Anda memiliki pertanyaan atau masukan, jangan ragu untuk menghubungi kami.</p>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
</div>
@endsection
