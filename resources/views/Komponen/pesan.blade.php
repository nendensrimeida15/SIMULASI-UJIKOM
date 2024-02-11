{{-- //////////////////////////////////////////////////////////// --}}
{{-- ///////////////// CREATED BY SANDY RIFALDI ///////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}

@if($errors->any()) <div class="alert alert-danger"
    role="alert">
    <button aria-label="Close" class="btn-close"
    data-bs-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <ul> @foreach ($errors->all() as $item)<li>{{ $item }}</li> @endforeach</ul>
</div>
@endif


@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    <button aria-label="Close" class="btn-close"
    data-bs-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>{!!session('success')!!}</strong>
</div>
@endif

@if(session()->has('info'))
<div class="alert alert-info" role="alert">
    <button aria-label="Close" class="btn-close"
    data-bs-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>{!!session('info')!!}</strong>
</div>
@endif

@if(session()->has('failed'))
<div class="alert alert-warning" role="alert">
    <button aria-label="Close" class="btn-close"
    data-bs-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>{!!session('failed')!!}</strong>
</div>
@endif

<script type="text/javascript">
    ${function(){
        $(document).on('click', '#delete', function(e){
            e.preventDefault();
            var link = $(this).attr("href");

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                    });
                }
            });
        });
    }};
</script>
