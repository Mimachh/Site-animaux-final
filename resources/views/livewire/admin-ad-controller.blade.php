    <div class="w-full mx-auto px-2">
		<!--Title-->
		<h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
			Table des annonces ({{ $annonces->count() }} annonces en ligne)
		</h1>

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Id</th>
						<th data-priority="2">Statut</th>
						<th data-priority="3">Nom</th>
						<th data-priority="4">Type de Garde</th>
						<th data-priority="5">Ville</th>
						<th data-priority="6">Prix</th>
                        <th data-priority="7">Prix avec commission</th>
                        <th data-priority="8">Création</th>
                        <th data-priority="9">Crud</th>
					</tr>
				</thead>
				<tbody>
                @foreach($annonces as $annonce)
                    <tr>
						<td>{{ $annonce->id }}</td>
						<td>{{ $annonce->status }}</td>
						<td>{{ $annonce->user->name}}</td>
						<td>{{ $annonce->garde->garde }}</td>
						<td>{{ $annonce->ville->id }}</td>
                        <td>{{ $annonce->getPrice() }}</td>
                        <td>{{ $annonce->getRealPrice() }}</td>
						<td>{{ $annonce->created_at }}</td>
                        <td>
                            <x-jet-danger-button wire:click="deleteAdmin( {{ $annonce->id }} )" type="button">Supprimer</x-jet-danger-button>
                            <x-jet-button type="button"><a href="">Editer</a> </x-jet-button>
                        </td>
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
		<!--/Card-->


	</div>
