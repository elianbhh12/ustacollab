
<div class="bg-white  px-8 rounded-md  w-full">
	<div class=" flex items-center justify-between px-6">
		<div>
			<h1 class="text-gray-600  text-center  items-center font-semibold">Estudiantes Registrados</h1>
		</div>
		<div class="flex items-center justify-between">

			</div>
		</div>
		<div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Nombre
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Semestre
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Correo
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Estado
								</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($users as $user)
							<div>
								<tr>
									
										<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
											<div class="flex items-center">
													<div class="ml-3">
														<p class="text-gray-900 whitespace-no-wrap">
															{{ $user->name }}
														</p>
													</div>
												</div>
										</td>
									
									<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
										<p class="text-gray-900 whitespace-no-wrap">{{ $user->semestre }}</p>
									</td>
									<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
										<p class="text-gray-900 whitespace-no-wrap">
											{{ $user->email }}
										</p>
									</td>

									<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
										<span
											class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
											<span aria-hidden
												class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
										<span class="relative">Activo</span>
										</span>
									</td>
								</tr>
							</div>
							@endforeach
						</tbody>
					</table>
					{{-- <div
						class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
						<span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
						<div class="inline-flex mt-2 xs:mt-0">
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
							&nbsp; &nbsp;
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
	</div>
