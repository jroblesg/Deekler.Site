@extends('admin.template.main')

@section('Content')
    
    @include('admin.template.partials.navbar')
    
    @include('admin.template.partials.banner')
    
    @include('admin.template.partials.our_services')
    
    {{--@include('admin.template.partials.about')--}}
    
    @include('admin.template.partials.testimonials')
    
    @include('admin.template.partials.portafolio')
    
    @include('admin.template.partials.contact')
    
    @include('admin.template.partials.footer')

@stop
