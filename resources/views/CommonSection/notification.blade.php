
<section class="container">
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@elseif (session('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session('error')}}
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
</section>
