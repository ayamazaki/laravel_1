@extends('layouts.hello')
@section('title')
    Index
@endsection

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>本文だぞ</p>
    @component('components.message')
        @slot('msg_title1')
        1番
        @endslot
        @slot('msg_content1')
        2番
        @endslot
        @slot('msg_2')
        3番
        @endslot
    @endcomponent
@endsection

@section('footer')
copyright 2020
<ul>
@each('components.item',$data2,'item')
</ul>
@endsection