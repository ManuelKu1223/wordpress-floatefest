@extends('layouts.app')

@section('content')

  @include('sections.home')
  @include('sections.lineup')
  @include('sections.tickets') 
  @include('sections.vipExp')
  @include('sections.schedule')
  @include('sections.sponsors')
  @include('sections.floating')
  @include('sections.tubing')
  @include('sections.camping')
  {{-- @include('sections.glamping') --}}
  @include('sections.rv')
  @include('sections.frigid')
  @include('sections.parking')
  @include('sections.location')
  @include('sections.shuttles')
  @include('sections.maps')
  @include('sections.generalInformation')
  @include('sections.faq')
  @include('sections.vendors')
  @include('sections.volounteers')
  @include('sections.health')
  @include('sections.blog')
  @include('sections.pictures')
  @include('sections.watch')

  {{-- Useless --}}
  {{-- @include('sections.how')
  @include('sections.coolertubes')
  @include('sections.tubingInfo')
  @include('sections.videoPlayer')
  @include('sections.contact') --}}
@endsection
