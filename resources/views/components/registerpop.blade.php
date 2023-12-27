<!-- Register modal -->
<div id="register-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
	<div class="relative p-4 w-full max-w-2xl max-h-full">
			<!-- Register Modal content -->
			<div class="relative   rounded-lg shadow dark:bg-gray-700 border border-blue-200">
					<!-- Register Modal header -->
					<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
						<header class="text-left text-white">
							<h2 class="text-2xl font-bold uppercase mb-1">
								{{__('auth.register.h2')}}
							</h2>
							<p class="mb-4">
								{{__('auth.register.subtitle')}}
							</p>
						</header>
							<button type="button" class="text-white-400 bg-transparent hover:bg-gray-200 hover:text-white-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="register-modal">
								<i class="fa-solid fa-xmark text-white text-lg"></i>
									<span class="sr-only">Close modal</span>
							</button>
					</div>
					<!-- Register Modal body -->
					<div class="p-10 max-w-lg mx-auto text-white ">
						<form method="POST" action="/users">
							@csrf
							<div class="mb-6">
								<label for="name" class="inline-block text-sm mb-2"> 
									{{__('auth.register.label-name')}}	
								</label>
								<input type="text" class="text-blue-800 border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />
				
								@error('name')
								<p class="text-red-500 text-xs mt-1">{{$message}}</p>
								@enderror
							</div>
				
							<div class="mb-6">
								<label for="email" class="inline-block text-sm mb-2">
									{{__('auth.register.label-email')}}	
								</label>
								<input type="email" class="text-blue-800 border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
				
								@error('email')
								<p class="text-red-500 text-xs mt-1">{{$message}}</p>
								@enderror
							</div>
				
							<div class="mb-6">
								<label for="password" class="inline-block text-sm mb-2">
									{{__('auth.register.label-pwd')}}	
								</label>
								<input type="password" class="text-blue-800 border border-gray-200 rounded p-2 w-full" name="password"
									value="{{old('password')}}" />
				
								@error('password')
								<p class="text-red-500 text-xs mt-1">{{$message}}</p>
								@enderror
							</div>
				
							<div class="mb-6">
								<label for="password2" class="inline-block text-sm mb-2">
									{{__('auth.register.label-confirm-pwd')}}	
								</label>
								<input type="password" class="text-blue-800 border border-gray-200 rounded p-2 w-full" name="password_confirmation"
									value="{{old('password_confirmation')}}" />
				
								@error('password_confirmation')
								<p class="text-red-500 text-xs mt-1">{{$message}}</p>
								@enderror
							</div>
				
							<div class="mb-6 text-right">
								<button type="submit" class="bg-blue-700 text-white rounded py-2 px-4 hover:bg-blue-400">
									{{__('auth.register.signup')}}	
								</button>
							</div>
							<div class="mt-8 flex w-full  justify-end">
								<p>
									{{__('auth.register.have_account')}}	
									<a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" data-modal-hide="register-modal" href="javascript:void(0))" class="text-blue-300 hover:text-blue-500">
										<i class="fa-regular fa-address-card mr-1"></i>
										{{__('auth.register.login')}}	
									</a>
								</p>
							</div>
						</form>
					</div>
			</div>
	</div>
</div>