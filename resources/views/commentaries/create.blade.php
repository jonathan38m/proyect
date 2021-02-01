@extends('interna2')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection



@section('content-interna')
<form action="{{ route('commentaries.store') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="fName">
            * Name
        </label>
        <input class="form-control" id="fName" name="name" placeholder=" Name" required="required" value="{{ old('name') }}" type="text"/>
    </div>
    <div class="form-group">
        <label for="nacionality">
            * Nacionality
        </label>
        @include('form.country', ['name' => 'nacionality', 'value' => old('nacionality')])
    </div>
    <div class="form-group">
        <label for="nacionality">
            * Program
        </label>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" id="quito" name="program1" type="checkbox" value="1"/>
            <label class="custom-control-label" for="quito">
                Quito
            </label>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" id="otavalo" name="program2" type="checkbox" value="1"/>
            <label class="custom-control-label" for="otavalo">
                Otavalo
            </label>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" id="amazon" name="program3" type="checkbox" value="1"/>
            <label class="custom-control-label" for="amazon">
                Amazon Jungle
            </label>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" id="indigenous" name="program4" type="checkbox" value="1"/>
            <label class="custom-control-label" for="indigenous">
                Indigenous Community
            </label>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" id="galapagos" name="program5" type="checkbox" value="1"/>
            <label class="custom-control-label" for="galapagos">
                Galapagos Islands
            </label>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" id="travelling" name="program6" type="checkbox" value="1"/>
            <label class="custom-control-label" for="travelling">
                Travelling Classroom
            </label>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------PHOTO ---------------------------------------------------------->
    <div class="form-group">
        <label id="from">
            Photo
        </label>
        <div class="custom-file">
            <input class="custom-file-input" id="customFile" type="file" name="photo" />
            <label class="custom-file-label" for="customFile">
                Choose file
            </label>
        </div>
    </div>
    <!-- --------------------------------------------------------------------- Period of Learning ---------------------------------------------------------->
    <div class="form-group">
        <label id="from">
            * From
        </label>
        @include('form.date', ['name' => 'from', 'required' => true, 'disabled' => false, 'message' => 'You forgot to put your Period of Learning?'])
    </div>
    <div class="form-group">
        <label id="from">
            * To
        </label>
        @include('form.date', ['name' => 'to', 'required' => true, 'disabled' => false, 'message' => 'You forgot to put your Period of Learning?'])
    </div>
    <div class="form-group">
        <label id="comment">
            * Comment
        </label>
        <textarea class="form-control" id="comment" maxlength="500" name="comment" placeholder="Comment (Minimum 500 characters!)" required="required">{{ old('comment') }}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">
        Send
    </button>
</form>
@endsection

@push('script')
<script src="{{ asset('js/datepicker.js') }}" type="text/javascript">
</script>
@endpush
