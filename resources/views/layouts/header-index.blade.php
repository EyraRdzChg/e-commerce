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

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">E-commerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Products') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('conocenos') }}">Conocenos</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactanos') }}">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

