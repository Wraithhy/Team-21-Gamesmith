@extends('layouts.app')
@section("content")
<div class="custom-product">
    <div class="trending-wrapper">
        <div class="card">
        <a id="#MonitorJump"><h3>Monitors</h3></a>
            <img src="images/1.png" class="img-top">
        </div>

        <div class="card">
        <a id="#HeadsetJump"><h3>Headset</h3>
            <img src="images/6.png" class="img-top">
        </div>

        <div class="card">
            <h3>Keyboards</h3>
            <a id="#KeyboardsJump"><img src="images/11.png" class="img-top">
        </div>

        <div class="card">
        <a id="#MiceJump"> <h3>Mice</h3>
            <img src="images/16.png" class="img-top">
        </div>

        <div class="card">
        <a id="#ControllersJump"> <h3>Controllers</h3>
            <img src="images/21.png" class="img-top">
        </div>
    </div>
</div>

<style>
 *{
    color: #98D831;

 }
    .trending-wrapper {
        display: flex;
        overflow-x: auto; /* Enable horizontal scrolling if needed */
        justify-content: space-around;
        text-align: center;
    }

    .card {
        flex: 0 0 auto;
        margin: 10px; /* Adjust margin as needed */
    }

    .img-top {
        display: block;
        max-width: 100%;
        height: auto;
        width: 200px; /* Adjust the desired width */
    }
</style>

@endsection
