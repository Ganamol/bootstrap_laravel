@extends('frontend.layouts.app')
@section('content')
<!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

      <form method="POST" action="{{route('admindo.login') }}">
                @csrf
                <div class="form-outline mb-4">
                    <input name="email" type="email" class="form-control" required />
                    <label class="form-label">Email address</label>
                </div>

                <div class="form-outline mb-4">
                    <input name="password" type="password" class="form-control" required />
                    <label class="form-label">Password</label>
                </div>

                <div class="text-center mb-4">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>

                <div class="text-center">
                    {{-- <p>Not a member? <a href="{{ route('users.create') }}">Register</a></p> --}}
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
@stop