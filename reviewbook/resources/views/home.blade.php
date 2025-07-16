@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <h1>SanberBook</h1>
    <h2>Social Media Developer Santai Berkualitas</h2>
    <p>Belajar dan Berbagi agar hidup ini semakakin santai berkualitas</p>
    
    <h2>Benefit Join SanberBook</h2>
    <p>Belajar dan Berbagi agar hidup ini semakakin santai berkualitas</p>
     <ul>
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>Sharing knowledger dari para master Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
     </ul>
    
     <h2>Cara Bergabung ke SanberBook</h2>
     <ol>
        <li>Mengunjungi website ini</li>
        <li>Mendaftar di <a href="{{ url('/register') }}">Form Sign Up</a></li> 
        <li>Selesai</li>
    </ol>
@endsection
