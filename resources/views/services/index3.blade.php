<h1>Liste des services</h1>
<ul>
@foreach($services as $service)
<li>
{{ $service->nom_service }}
<a href="#" class="view-employes" data-service-id="{{$service->id }}">Voir les employés</a>
<ul class="employes-list" style="display:none;">
<!-- Employés seront ajoutés ici -->
</ul>
</li>
@endforeach
</ul>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('.view-employes').click(function(e){
e.preventDefault();
var serviceId = $(this).data('service-id');
var employesList = $(this).siblings('.employes-list');
if (employesList.children().length === 0) {
$.ajax({
url: '/services/employes/' + serviceId,
method: 'GET',
dataType: 'json',
success: function(response) {
$.each(response, function(index, employe) {
employesList.append('<li>' + employe.nom + ', ' +
employe.ville + '</li>');
});
employesList.slideDown();
},
error: function(xhr, status, error) {
console.error(error);
}
});
} else {
employesList.slideToggle();
}
});
});
</script>