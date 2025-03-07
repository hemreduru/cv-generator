@extends('layouts.app')

@section('title', trans('Common.personal_information'))

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <!-- Kullanıcı Bilgileri -->
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user"></i> @lang('Common.personal_information')</h3>
                    </div>
                    <div class="card-body">
                        <p><i class="fas fa-user"></i> <strong> @lang('Common.name'):</strong> {{ $user->name }}</p>
                        <p><i class="fas fa-envelope"></i> <strong> @lang('Common.email'):</strong> {{ $user->email }}</p>
                        <p><i class="fas fa-venus-mars"></i> <strong> @lang('Common.gender'):</strong> {{ ucfirst($user->gender) }}</p>
                        <p><i class="fas fa-birthday-cake"></i> <strong> @lang('Common.birthdate'):</strong> {{ $user->birth_date ? \Carbon\Carbon::parse($user->birth_date)->format('d.m.Y') : '-' }}</p>
                        <p><i class="fas fa-briefcase"></i> <strong> @lang('Common.occupation'):</strong> {{ $user->occupation }}</p>
                        <p><i class="fas fa-flag"></i> <strong> @lang('Common.nationality'):</strong> {{ $user->nationality }}</p>
                        <p><i class="fas fa-map-marker-alt"></i> <strong> @lang('Common.location'):</strong> {{ $user->location }}</p>
                    </div>
                </div>
            </div>

            <!-- İletişim Bilgileri -->
            <div class="col-md-6">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-address-book"></i> @lang('Common.contacts')</h3>
                    </div>
                    <div class="card-body">
                        @if($user->contact)
                            <p><i class="fab fa-facebook"></i> <strong> Facebook:</strong> <a href="{{ $user->contact->facebook }}" target="_blank">{{ $user->contact->facebook }}</a></p>
                            <p><i class="fab fa-twitter"></i> <strong> Twitter:</strong> <a href="{{ $user->contact->twitter }}" target="_blank">{{ $user->contact->twitter }}</a></p>
                            <p><i class="fab fa-linkedin"></i> <strong> LinkedIn:</strong> <a href="{{ $user->contact->linkedin }}" target="_blank">{{ $user->contact->linkedin }}</a></p>
                            <p><i class="fab fa-github"></i> <strong> GitHub:</strong> <a href="{{ $user->contact->github }}" target="_blank">{{ $user->contact->github }}</a></p>
                            <p><i class="fas fa-phone"></i> <strong> Telefon:</strong> {{ $user->contact->phone }}</p>
                        @else
                            <p>@lang('Common.no_contact_info')</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Deneyimler -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-briefcase"></i> @lang('Common.experiences')</h3>
                    </div>
                    <div class="card-body">
                        @if($user->experiences->count())
                            @foreach($user->experiences as $experience)
                                <div class="mb-4 p-3 border rounded bg-light">
                                    <h5><i class="fas fa-building"></i> {{ $experience->company_name }}</h5>
                                    <p><i class="fas fa-user-tie"></i> <strong> @lang('Common.position'):</strong> {{ $experience->position }}</p>
                                    <p><i class="fas fa-calendar-alt"></i> <strong> @lang('Common.start_date'):</strong> {{ $experience->start_date ? \Carbon\Carbon::parse($experience->start_date)->format('d.m.Y') : '-' }}</p>
                                    <p><i class="fas fa-calendar-check"></i> <strong> @lang('Common.end_date'):</strong> {{ $experience->end_date ? \Carbon\Carbon::parse($experience->end_date)->format('d.m.Y') : '-' }}</p>

                                    <!-- Sorumlular -->
                                    @if($experience->responsibles->count())
                                        <h6><i class="fas fa-user-check"></i> @lang('Common.responsibles')</h6>
                                        <ul class="list-group">
                                            @foreach($experience->responsibles as $responsible)
                                                <li class="list-group-item">
                                                    <i class="fas fa-comment"></i> {{ $responsible->comment }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <p>@lang('Common.no_experiences')</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Eğitimler -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-graduation-cap"></i> @lang('Common.education')</h3>
                    </div>
                    <div class="card-body">
                        @if($user->educations->count())
                            <ul class="list-group">
                                @foreach($user->educations as $education)
                                    <li class="list-group-item">
                                        <i class="fas fa-university"></i> <strong>{{ $education->institution_name }}</strong>
                                        - {{ $education->type }}
                                        ({{ $education->start_date ? \Carbon\Carbon::parse($education->start_date)->format('d.m.Y') : '-' }} -
                                        {{ $education->end_date ? \Carbon\Carbon::parse($education->end_date)->format('d.m.Y') : '-' }})
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>@lang('Common.no_education')</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Yetenekler -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-tools"></i> @lang('Common.skills')</h3>
                    </div>
                    <div class="card-body">
                        @if($user->skills->count())
                            <ul class="list-inline">
                                @foreach($user->skills as $skill)
                                    <li class="list-inline-item badge badge-primary p-2 m-1">
                                        <i class="fas fa-star"></i> {{ $skill->skill }} ({{ $skill->level }})
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>@lang('Common.no_skills')</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
