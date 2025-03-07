@extends('layouts.app')

@section('title', trans('Common.edit_personal_information'))

@section('content')
    <div class="container-fluid p-3">
        <form action="{{ route('personal-information.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Row 1: Personal Information and Contact Information -->
            <div class="row">
                <!-- Personal Information -->
                <div class="col-lg-6 col-sm-12">
                    <div class="card mb-3 card-outline card-primary">
                        <div class="card-header">
                            <i class="fas fa-user"></i> @lang('Common.personal_information')
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">@lang('Common.name')</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}">
                            </div>
                            <div class="form-group">
                                <label for="email">@lang('Common.email')</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $user->email) }}">
                            </div>
                            <div class="form-group">
                                <label for="gender">@lang('Common.gender')</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="male" {{ old('gender', $user->gender)=='male' ? 'selected' : '' }}>@lang('Common.male')</option>
                                    <option value="female" {{ old('gender', $user->gender)=='female' ? 'selected' : '' }}>@lang('Common.female')</option>
                                    <option value="other" {{ old('gender', $user->gender)=='other' ? 'selected' : '' }}>@lang('Common.other')</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="birth_date">@lang('Common.birth_date')</label>
                                <input type="date" class="form-control" name="birth_date" id="birth_date"
                                       value="{{ old('birth_date', $user->birth_date ? \Carbon\Carbon::parse($user->birth_date)->format('Y-m-d') : '') }}">
                            </div>
                            <div class="form-group">
                                <label for="occupation">@lang('Common.occupation')</label>
                                <input type="text" class="form-control" name="occupation" id="occupation" value="{{ old('occupation', $user->occupation) }}">
                            </div>
                            <div class="form-group">
                                <label for="nationality">@lang('Common.nationality')</label>
                                <input type="text" class="form-control" name="nationality" id="nationality" value="{{ old('nationality', $user->nationality) }}">
                            </div>
                            <div class="form-group">
                                <label for="location">@lang('Common.location')</label>
                                <input type="text" class="form-control" name="location" id="location" value="{{ old('location', $user->location) }}">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-6 col-sm-12">
                    <div class="card mb-3 card-outline card-success">
                        <div class="card-header">
                            <i class="fas fa-address-book"></i> @lang('Common.contacts')
                        </div>
                        <div class="card-body">
                            @php $contact = $user->contact; @endphp
                            <div class="form-group">
                                <label for="facebook">@lang('Common.facebook')</label>
                                <input type="text" class="form-control" name="contact[facebook]" id="facebook" value="{{ old('contact.facebook', $contact->facebook ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="twitter">@lang('Common.twitter')</label>
                                <input type="text" class="form-control" name="contact[twitter]" id="twitter" value="{{ old('contact.twitter', $contact->twitter ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="linkedin">@lang('Common.linkedin')</label>
                                <input type="text" class="form-control" name="contact[linkedin]" id="linkedin" value="{{ old('contact.linkedin', $contact->linkedin ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="github">@lang('Common.github')</label>
                                <input type="text" class="form-control" name="contact[github]" id="github" value="{{ old('contact.github', $contact->github ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">@lang('Common.phone')</label>
                                <input type="text" class="form-control" name="contact[phone]" id="phone" value="{{ old('contact.phone', $contact->phone ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="other">@lang('Common.other')</label>
                                <textarea class="form-control" name="contact[other]" id="other">{{ old('contact.other', $contact->other ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: Experiences and Education -->
            <div class="row">
                <!-- Experiences -->
                <div class="col-lg-6 col-sm-12">
                    <div class="card mb-3 card-outline card-info">
                        <div class="card-header">
                            <i class="fas fa-briefcase"></i> @lang('Common.experiences')
                        </div>
                        <div class="card-body" id="experiences-container">
                            @foreach($user->experiences as $expIndex => $experience)
                                <div class="experience-block border p-3 mb-3" data-index="{{ $expIndex }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>@lang('Common.company_name')</label>
                                            <input type="text" class="form-control" name="experiences[{{ $expIndex }}][company_name]" value="{{ old("experiences.$expIndex.company_name", $experience->company_name) }}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>@lang('Common.position')</label>
                                            <input type="text" class="form-control" name="experiences[{{ $expIndex }}][position]" value="{{ old("experiences.$expIndex.position", $experience->position) }}">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>@lang('Common.start_date')</label>
                                            <input type="date" class="form-control" name="experiences[{{ $expIndex }}][start_date]"
                                                   value="{{ old("experiences.$expIndex.start_date", $experience->start_date ? \Carbon\Carbon::parse($experience->start_date)->format('Y-m-d') : '') }}">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>@lang('Common.end_date')</label>
                                            <input type="date" class="form-control" name="experiences[{{ $expIndex }}][end_date]"
                                                   value="{{ old("experiences.$expIndex.end_date", $experience->end_date ? \Carbon\Carbon::parse($experience->end_date)->format('Y-m-d') : '') }}">
                                        </div>
                                    </div>

                                    <!-- Experience Responsibles -->
                                    <div class="responsibles-container" data-index="{{ $expIndex }}">
                                        <h6>@lang('Common.responsibles')</h6>
                                        @if($experience->responsibles->count())
                                            @foreach($experience->responsibles as $rIndex => $responsible)
                                                <div class="form-group responsible-block" data-rindex="{{ $rIndex }}">
                                                    <label>@lang('Common.comment')</label>
                                                    <input type="text" class="form-control" name="experiences[{{ $expIndex }}][responsibles][{{ $rIndex }}][comment]" value="{{ old("experiences.$expIndex.responsibles.$rIndex.comment", $responsible->comment) }}">
                                                    <button type="button" class="btn btn-danger btn-sm remove-responsible mt-1">@lang('Common.remove_responsible') </button>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm add-responsible" data-index="{{ $expIndex }}">@lang('Common.add_responsible') </button>
                                    <hr>
                                    <button type="button" class="btn btn-danger btn-sm remove-experience">@lang('Common.remove_experience') </button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-primary" id="add-experience">@lang('Common.add_experience')</button>
                    </div>
                </div>

                <!-- Education -->
                <div class="col-lg-6 col-sm-12">
                    <div class="card mb-3 card-outline card-warning">
                        <div class="card-header">
                            <i class="fas fa-graduation-cap"></i> @lang('Common.education')
                        </div>
                        <div class="card-body" id="educations-container">
                            @foreach($user->educations as $eduIndex => $education)
                                <div class="education-block border p-3 mb-3" data-index="{{ $eduIndex }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>@lang('Common.institution_name')</label>
                                            <input type="text" class="form-control" name="educations[{{ $eduIndex }}][institution_name]" value="{{ old("educations.$eduIndex.institution_name", $education->institution_name) }}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>@lang('Common.start_date')</label>
                                            <input type="date" class="form-control" name="educations[{{ $eduIndex }}][start_date]" value="{{ old("educations.$eduIndex.start_date", $education->start_date ? \Carbon\Carbon::parse($education->start_date)->format('Y-m-d') : '') }}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>@lang('Common.end_date')</label>
                                            <input type="date" class="form-control" name="educations[{{ $eduIndex }}][end_date]" value="{{ old("educations.$eduIndex.end_date", $education->end_date ? \Carbon\Carbon::parse($education->end_date)->format('Y-m-d') : '') }}">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-sm remove-education">@lang('Common.remove_education')</button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-primary" id="add-education">@lang('Common.add_education') </i></button>
                    </div>
                </div>
            </div>

            <!-- Row 3: Skills -->
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="card mb-3 card-outline card-dark">
                        <div class="card-header">
                            <i class="fas fa-tools"></i> @lang('Common.skills')
                        </div>
                        <div class="card-body" id="skills-container">
                            @foreach($user->skills as $skillIndex => $skill)
                                <div class="skill-block border p-3 mb-3" data-index="{{ $skillIndex }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>@lang('Common.skill')</label>
                                            <input type="text" class="form-control" name="skills[{{ $skillIndex }}][skill]" value="{{ old("skills.$skillIndex.skill", $skill->skill) }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>@lang('Common.level')</label>
                                            <input type="text" class="form-control" name="skills[{{ $skillIndex }}][level]" value="{{ old("skills.$skillIndex.level", $skill->level) }}">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-sm remove-skill">@lang('Common.remove_skill')</button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-primary" id="add-skill">@lang('Common.add_skill')</button>
                    </div>
                </div>
                <!-- Empty column -->
                <div class="col-lg-6 col-sm-12"></div>
            </div>

            <button type="submit" class="btn btn-success">@lang('Common.save')</button>
        </form>
    </div>

    <!-- Dynamic Field Templates -->
    <div id="experience-template" class="d-none">
        <div class="experience-block border p-3 mb-3" data-index="__INDEX__">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>@lang('Common.company_name')</label>
                    <input type="text" class="form-control" name="experiences[__INDEX__][company_name]">
                </div>
                <div class="form-group col-md-4">
                    <label>@lang('Common.position')</label>
                    <input type="text" class="form-control" name="experiences[__INDEX__][position]">
                </div>
                <div class="form-group col-md-2">
                    <label>@lang('Common.start_date')</label>
                    <input type="date" class="form-control" name="experiences[__INDEX__][start_date]">
                </div>
                <div class="form-group col-md-2">
                    <label>@lang('Common.end_date')</label>
                    <input type="date" class="form-control" name="experiences[__INDEX__][end_date]">
                </div>
            </div>
            <div class="responsibles-container" data-index="__INDEX__">
                <h6>@lang('Common.responsibles')</h6>
            </div>
            <button type="button" class="btn btn-secondary btn-sm add-responsible" data-index="__INDEX__">@lang('Common.add_responsible')</button>
            <hr>
            <button type="button" class="btn btn-danger btn-sm remove-experience">@lang('Common.remove_experience')</button>
        </div>
    </div>

    <div id="responsible-template" class="d-none">
        <div class="form-group responsible-block" data-rindex="__RINDEX__">
            <label>@lang('Common.comment')</label>
            <input type="text" class="form-control" name="experiences[__INDEX__][responsibles][__RINDEX__][comment]">
            <button type="button" class="btn btn-danger btn-sm remove-responsible mt-1">@lang('Common.remove_responsible')</button>
        </div>
    </div>

    <div id="education-template" class="d-none">
        <div class="education-block border p-3 mb-3" data-index="__EDU_INDEX__">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>@lang('Common.institution_name')</label>
                    <input type="text" class="form-control" name="educations[__EDU_INDEX__][institution_name]">
                </div>
                <div class="form-group col-md-3">
                    <label>@lang('Common.start_date')</label>
                    <input type="date" class="form-control" name="educations[__EDU_INDEX__][start_date]">
                </div>
                <div class="form-group col-md-3">
                    <label>@lang('Common.end_date')</label>
                    <input type="date" class="form-control" name="educations[__EDU_INDEX__][end_date]">
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-sm remove-education">@lang('Common.remove_education')</button>
        </div>
    </div>

    <div id="skill-template" class="d-none">
        <div class="skill-block border p-3 mb-3" data-index="__SKILL_INDEX__">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>@lang('Common.skill')</label>
                    <input type="text" class="form-control" name="skills[__SKILL_INDEX__][skill]">
                </div>
                <div class="form-group col-md-6">
                    <label>@lang('Common.level')</label>
                    <input type="text" class="form-control" name="skills[__SKILL_INDEX__][level]">
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-sm remove-skill">@lang('Common.remove_skill')</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            // Deneyim ekleme
            var experienceIndex = {{ $user->experiences->count() }};
            $('#add-experience').click(function(){
                var template = $('#experience-template').html();
                template = template.replace(/__INDEX__/g, experienceIndex);
                $('#experiences-container').append(template);
                experienceIndex++;
            });

            // Deneyim kaldırma
            $(document).on('click', '.remove-experience', function(){
                $(this).closest('.experience-block').remove();
            });

            // Deneyim içindeki sorumlu ekleme
            $(document).on('click', '.add-responsible', function(){
                var parent = $(this).closest('.experience-block');
                var index = parent.data('index');
                var responsibleContainer = parent.find('.responsibles-container');
                var currentCount = responsibleContainer.find('.responsible-block').length;
                var template = $('#responsible-template').html();
                template = template.replace(/__INDEX__/g, index).replace(/__RINDEX__/g, currentCount);
                responsibleContainer.append(template);
            });

            // Sorumlu kaldırma
            $(document).on('click', '.remove-responsible', function(){
                $(this).closest('.responsible-block').remove();
            });

            // Eğitim ekleme
            var educationIndex = {{ $user->educations->count() }};
            $('#add-education').click(function(){
                var template = $('#education-template').html();
                template = template.replace(/__EDU_INDEX__/g, educationIndex);
                $('#educations-container').append(template);
                educationIndex++;
            });

            // Eğitim kaldırma
            $(document).on('click', '.remove-education', function(){
                $(this).closest('.education-block').remove();
            });

            // Beceri ekleme
            var skillIndex = {{ $user->skills->count() }};
            $('#add-skill').click(function(){
                var template = $('#skill-template').html();
                template = template.replace(/__SKILL_INDEX__/g, skillIndex);
                $('#skills-container').append(template);
                skillIndex++;
            });

            // Beceri kaldırma
            $(document).on('click', '.remove-skill', function(){
                $(this).closest('.skill-block').remove();
            });
        });
    </script>
@endsection
