@if (isset($position))
    <a class="img-right gly" data-toggle="modal" data-target="#x-gallery-modal-img" data-title="{{ $gallery->name }}"
        data-gallery="{{ $gallery->id }}">
@else
    <a class="img-left gly" data-toggle="modal" data-target="#x-gallery-modal-img" data-title="{{ $gallery->name }}"
        data-gallery="{{ $gallery->id }}">
@endif

@if (isset($thumbail))
    <img src="{{ URL::asset( $gallery->ruta.'/thumbail-'.$thumbail.'.jpg') }}">
@else
    <img src="{{ URL::asset( $gallery->ruta.'/thumbail.jpg') }}">
@endif
</a>