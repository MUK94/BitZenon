@extends('layouts.admin')
@section('content')
	<div class="dashboard-container admin-layout">
		<div class="mx-4 py-4">
			<div class="my-8">
				<h2 class="text-2xl">My Profile</h2>
			</div>
			<div class=" space-y-6">
					<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
						<div class="max-w-xl">
							@include('admin.profile.partials.update-profile-information-form')
						</div>
					</div>

					<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
						<div class="max-w-xl">
							@include('admin.profile.partials.update-password-form')
						</div>
					</div>

					<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
						<div class="max-w-xl">
							@include('admin.profile.partials.delete-user-form')
						</div>
					</div>
			</div>
		</div>
	</div>
@endsection
