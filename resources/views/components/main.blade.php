<!DOCTYPE html>
<html lang="en">

<x-header/>

<body>
<x-navigation/>

<div class="container">



    <div class="container" style="padding-top:100px;">


        {{$slot ?? ''}}

    </div> <!-- Container -->
    <x-footer/>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>
