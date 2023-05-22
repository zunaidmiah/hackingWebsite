
@if ( $errors -> any())

<p class="alert alert-danger"> {{ $errors -> first() }} <button class="close" data-dismiss="alert" >&times;</button></p>
                   
@endif

@if ( Session::has('success'))

<p style="padding: 10px!important; text-align:center; font-size:12px;" class="alert alert-success"> {{ $errors -> first() }} <button class="close" data-dismiss="alert" >&times;</button></p>

@endif