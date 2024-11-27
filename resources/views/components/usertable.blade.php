@props(['users','nom'])
<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->

<table class="table">
    <tr>
        <td>
            Id
        </td>
        <td>
            NOM
        </td>
        <td>
            metier
        </td>

    </tr>

    @foreach ($users as $users)
        <tr>
            <td>{{ $users['id'] }}</td>
            <td>{{ $users['nom'] }}</td>
            <td>{{ $users['metier'] }}</td>
        </tr>
    @endforeach
</table>
</div>
