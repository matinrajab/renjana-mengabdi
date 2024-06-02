<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomepageRequest extends FormRequest
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
        return [
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'about_us' => ['required', 'string'],
            'vision' => ['required', 'string'],
            'cta_label' => ['required', 'string', 'max:255'],
            'cta_url' => ['required', 'string', 'max:255'],
            'years_count' => ['required', 'integer'],
            'volunteers_count' => ['required', 'integer'],
            'registrants_count' => ['required', 'integer'],
            'destinations_count' => ['required', 'integer'],
            'image_1' => ['file', 'mimes:png,jpg,jpeg,webp,gif,svg', 'max:2048'],
            'image_2' => ['file', 'mimes:png,jpg,jpeg,webp,gif,svg', 'max:2048'],
        ];
    }
}
