<x-master title="Page d'accueil">
<h3>Request/Response</h3>
<form method="post"action="{{route ('form')}}">
    @csrf
    <input type="date" name="input_field" class="form_control">
    <input type="submit" value="Envoyer"  class="btn btn-sm btn-primary">
</form>

</x-master>