<!DOCTYPE html>
<html lang="en">

    @extends('layouts.head-index')

<body>
    <header>
        <img src="" alt="">
        <h1>E-commerse</h1>
        <div>
            <img src="" alt="">
            <span>Nombres</span>
        </div>
    </header>

<nav >
    <div >
        <a  href="#">E-commerce</a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div >
            <ul >
                <li >
                    <a href="{{ route('index') }}">Inicio</a>
                </li>
                <li >
                    <a href="{{ route('Products') }}">Productos</a>
                </li>
                <li >
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

