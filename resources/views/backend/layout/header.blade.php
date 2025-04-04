<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg" data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Agriculture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <link rel="shortcut icon" href="{{url('backend/assets/images/favicon.ico')}}">
    <script src="{{url('backend/assets/js/layout.js')}}"></script>
    <link rel="stylesheet" href="{{url('backend/assets/css/tailwind2.css')}}">
</head>

@if(!session()->has('Adminid'))
    <script>
        window.location.href = "{{ route('admin.login') }}";
    </script>
@endif