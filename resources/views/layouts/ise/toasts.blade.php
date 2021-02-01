@if ($errors->any())
<div class="notification mt-2 mr-3">
    @foreach ($errors->all() as $error)
    <div aria-atomic="true" aria-live="assertive" class="bg-danger text-white toast" data-delay="{{ $loop->iteration * 2000 }}" role="alert">
        <div class="toast-header">
            <h6 class="mr-auto">
                <span aria-hidden="true" class="glyphicon glyphicon-exclamation-sign">
                </span>
                Error
            </h6>
            <button aria-label="Close" class="ml-2 mb-1 close" data-dismiss="toast" type="button">
                <span aria-hidden="true">
                    ×
                </span>
            </button>
        </div>
        <div class="toast-body">
            {{ $error }}
        </div>
    </div>
    @endforeach
</div>
@push('script')
<script type="text/javascript">
    $('.toast').toast('show')
</script>
@endpush

@endif
