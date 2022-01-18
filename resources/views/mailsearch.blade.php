@extends('layouts.home')
@section('content')
<table class="table table-bordered">
    <tr>
        <th>Email</th>
        <th>Date d'ajout</th>
        <th>Action</th>
    </tr>
    @foreach ($search as $item)
    <tr>
        <td>{{ $item->email }}</td>
        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y à H:i:s') }}</td>
        <td>
            <form action="{{ route('destroymail', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

<script>
// autologout.js

$(document).ready(function () {
    const timeout = 900000;  // 900000 ms = 15 minutes
    var idleTimer = null;
    $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {
        clearTimeout(idleTimer);

        idleTimer = setTimeout(function () {
            document.getElementById('form_id').submit();
        }, timeout);
    });
    $("body").trigger("mousemove");
});
</script>

@endsection