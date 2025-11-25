    @include('layouts.header')

    <section id="book-a-table" class="book-a-table section">
    <!-- Section Title -->
    <div class="container section-title">
    <h2>Book A Table</h2>
    <p><span>Book Your</span> <span class="description-title">Stay With Us</span></p>
    </div>

    <div class="container">
    <div class="row g-0">
    <div class="col-lg-4 reservation-img" style="background-image: url('{{ asset('assets/img/reservation.jpg') }}'); min-height: 500px;"></div>

    <div class="col-lg-8 d-flex align-items-center bg-light p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
       
    </div>


    <form action="{{ route('booking.store') }}" method="POST" class="w-100">
    @csrf
    <div class="row gy-3">
        @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger mt-3">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
    </div>
    @endif
        <div class="col-md-4">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-4">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="col-md-4">
            <input type="text" name="phone" class="form-control" placeholder="Your Phone" required>
        </div>
        <div class="col-md-4">
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="col-md-4">
            <input type="time" name="time" class="form-control" required>
        </div>
        <div class="col-md-4">
            <input type="number" name="people" class="form-control" placeholder="# of people" required>
        </div>
    </div>

    <div class="mt-3">
        <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
    </div>

    <div class="mt-3 text-center">
    <button type="submit" class="btn-get-started" style=" background: #ce1212;  color: white;padding: 12px 30px; border-radius: 50px;border: none;cursor: pointer;transition: 0.3s;">Book a Table</button>

    </div>
    </form>
    </div>
    </div>
    </div>

    </section>
    <a href="{{ url()->previous() }}" class="btn btn-outline-danger rounded-pill px-4">Retour</a>

  
