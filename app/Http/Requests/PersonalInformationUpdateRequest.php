<?php

     namespace App\Http\Requests;

     use Illuminate\Foundation\Http\FormRequest;

     class PersonalInformationUpdateRequest extends FormRequest
     {
         /**
          * Determine if the user is authorized to make this request.
          */
         public function authorize(): bool
         {
             return true;
         }

         /**
          * Get the validation rules that apply to the request.
          *
          * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
          */
         public function rules(): array
         {
             $userId = $this->route('user') ? $this->route('user')->id : $this->user()->id;
             return [
                 'name'        => 'required|string|max:255',
                 'email'       => 'required|email|unique:users,email,' . $userId,
                 'gender'      => 'required|in:male,female,other',
                 'birth_date'  => 'nullable|date_format:Y-m-d',
                 'occupation'  => 'nullable|string|max:255',
                 'nationality' => 'nullable|string|max:255',
                 'location'    => 'nullable|string|max:255',
                 'contact.facebook'  => 'nullable|url',
                 'contact.twitter'   => 'nullable|url',
                 'contact.linkedin'  => 'nullable|url',
                 'contact.github'    => 'nullable|url',
                 'contact.phone'     => 'nullable|string|max:20',
                 'contact.other'     => 'nullable|string',
                 'experiences'                             => 'nullable|array',
                 'experiences.*.company_name'              => 'required_with:experiences|string|max:255',
                 'experiences.*.position'                  => 'required_with:experiences|string|max:255',
                 'experiences.*.start_date'                => 'required_with:experiences|date_format:Y-m-d',
                 'experiences.*.end_date'                  => 'nullable|date_format:Y-m-d',
                 'experiences.*.responsibles'              => 'nullable|array',
                 'experiences.*.responsibles.*.comment_en'   => 'required_with:experiences|string',
                 'experiences.*.responsibles.*.comment_tr'   => 'required_with:experiences|string',
                 'educations'                              => 'nullable|array',
                 'educations.*.institution_name'           => 'required_with:educations|string|max:255',
                 'educations.*.start_date'                 => 'required_with:educations|date_format:Y-m-d',
                 'educations.*.end_date'                   => 'nullable|date_format:Y-m-d',
                 'skills'                                  => 'nullable|array',
                 'skills.*.skill'                          => 'required_with:skills|string|max:255',
                 'skills.*.level'                          => 'required_with:skills|string|max:255',
             ];
         }

         /**
          * Get the error messages for the defined validation rules.
          *
          * @return array<string, string>
          */
         public function messages(): array
         {
             return [
                 'name.required' => __('validation.required', ['attribute' => __('Common.name')]),
                 'email.required' => __('validation.required', ['attribute' => __('Common.email')]),
                 'email.email' => __('validation.email', ['attribute' => __('Common.email')]),
                 'email.unique' => __('validation.unique', ['attribute' => __('Common.email')]),
                 'gender.required' => __('validation.required', ['attribute' => __('Common.gender')]),
                 'gender.in' => __('validation.in', ['attribute' => __('Common.gender')]),
                 'birth_date.date_format' => __('validation.date_format', ['attribute' => __('Common.birth_date'), 'format' => 'Y-m-d']),
                 'occupation.string' => __('validation.string', ['attribute' => __('Common.occupation')]),
                 'nationality.string' => __('validation.string', ['attribute' => __('Common.nationality')]),
                 'location.string' => __('validation.string', ['attribute' => __('Common.location')]),
                 'contact.facebook.url' => __('validation.url', ['attribute' => __('Common.facebook')]),
                 'contact.twitter.url' => __('validation.url', ['attribute' => __('Common.twitter')]),
                 'contact.linkedin.url' => __('validation.url', ['attribute' => __('Common.linkedin')]),
                 'contact.github.url' => __('validation.url', ['attribute' => __('Common.github')]),
                 'contact.phone.string' => __('validation.string', ['attribute' => __('Common.phone')]),
                 'experiences.*.company_name.required_with' => __('validation.required_with', ['attribute' => __('Common.company_name'), 'values' => __('Common.experiences')]),
                 'experiences.*.position.required_with' => __('validation.required_with', ['attribute' => __('Common.position'), 'values' => __('Common.experiences')]),
                 'experiences.*.start_date.required_with' => __('validation.required_with', ['attribute' => __('Common.start_date'), 'values' => __('Common.experiences')]),
                 'experiences.*.start_date.date_format' => __('validation.date_format', ['attribute' => __('Common.start_date'), 'format' => 'Y-m-d']),
                 'experiences.*.end_date.date_format' => __('validation.date_format', ['attribute' => __('Common.end_date'), 'format' => 'Y-m-d']),
                 'experiences.*.responsibles.*.comment_en.required_with' => __('validation.required_with', ['attribute' => __('Common.comment_en'), 'values' => __('Common.experiences')]),
                 'experiences.*.responsibles.*.comment_tr.required_with' => __('validation.required_with', ['attribute' => __('Common.comment_tr'), 'values' => __('Common.experiences')]),
                 'educations.*.institution_name.required_with' => __('validation.required_with', ['attribute' => __('Common.institution_name'), 'values' => __('Common.educations')]),
                 'educations.*.start_date.required_with' => __('validation.required_with', ['attribute' => __('Common.start_date'), 'values' => __('Common.educations')]),
                 'educations.*.start_date.date_format' => __('validation.date_format', ['attribute' => __('Common.start_date'), 'format' => 'Y-m-d']),
                 'educations.*.end_date.date_format' => __('validation.date_format', ['attribute' => __('Common.end_date'), 'format' => 'Y-m-d']),
                 'skills.*.skill.required_with' => __('validation.required_with', ['attribute' => __('Common.skill'), 'values' => __('Common.skills')]),
                 'skills.*.level.required_with' => __('validation.required_with', ['attribute' => __('Common.level'), 'values' => __('Common.skills')]),
             ];
         }
     }
