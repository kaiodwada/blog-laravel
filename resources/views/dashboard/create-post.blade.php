@extends('layouts.admin')

@section('title-adm', 'Knowledge Poster')

@section('content-dashboard')

<section class="flex items-center justify-center h-screen container mx-auto" style="width: 790px">
    <x-forms.tinymce-editor/>
</section>

@endsection
