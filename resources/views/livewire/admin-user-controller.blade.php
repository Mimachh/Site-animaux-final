    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
		<!--Title-->
		<h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
			Table des utilisateurs ({{ $users->count() }} Utilisateurs inscripts)
		</h1>

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Id</th>
						<th data-priority="2">Nom</th>
						<th data-priority="3">Mail</th>
						<th data-priority="4">Role</th>
						<th data-priority="5">Création</th>
                        <th data-priority="6">Crud</th>
					</tr>
				</thead>
				<tbody>
                @foreach($users as $user)
                    <tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name}}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->role->name }}</td>
						<td>{{ $user->created_at }}</td>
                        <td>
                            <x-jet-danger-button  type="button" wire:click="adminDeleteUser( {{ $user->id }} )">Supprimer</x-jet-danger-button>
                            <x-jet-button type="button">Editer</x-jet-button>
                        </td>
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
		<!--/Card-->


	</div>
