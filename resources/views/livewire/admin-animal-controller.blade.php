<div class="w-full mx-auto px-2">
		<!--Title-->
		<h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
			Table des animaux({{ $animals->count() }} animaux en ligne)
		</h1>

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Id</th>
						<th data-priority="2">Nom</th>
						<th data-priority="3">Age</th>
						<th data-priority="4">Espece</th>
						<th data-priority="5">Race</th>
                        <th data-priority="6">Propriétaire</th>
                        <th data-priority="7">Création</th>
                        <th data-priority="8">Crud</th>
					</tr>
				</thead>
				<tbody>
                @foreach($animals as $animal)
                    <tr>
						<td>{{ $animal->id }}</td>
						<td>{{ $animal->animal_name}}</td>
                        <td>{{ $animal->age->age }}</td>
						<td>{{ $animal->espece->espece }}</td>
						<td>{{ $animal->race->race_animal }}</td>
                        <td>{{ $animal->user->id}} / {{$animal->user->name }}</td>
						<td>{{ $animal->created_at }}</td>
                        <td>
                        <x-jet-danger-button type="button">Delete</x-jet-danger-button>                         
                        <x-jet-button type="button"><a href="">Editer</a> </x-jet-button>
                        </td>
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
		<!--/Card-->


	</div>
    
