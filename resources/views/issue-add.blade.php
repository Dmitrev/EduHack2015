@extends('layout')


@section('content')
    <div class="container">
        <h1>Add a new issue</h1>

        <div class="row">
            <form class="col s12" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-field col s12">
                    <input name="title" id="first_name" type="text" class="validate">
                    <label for="first_name">Title</label>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                            <textarea name="description" id="icon_prefix2" class="materialize-textarea"></textarea>
                            <label for="icon_prefix2">Description</label>
                    </div>
                </div>

                <div class="row">
                    <button type="submit" class="btn-large right waves-effect">
                        <i class="material-icons left">add</i> create
                    </button>
                </div>

            </form>
        </div>

    </div>
@stop