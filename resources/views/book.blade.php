@extends('layout')

@section('content')
@include('books.book-details', $book)
@endsection

@section('form')
@include('books.comment-form', $book)
@endsection

@section('comments')
@include('books.comments',$book)
@endsection
