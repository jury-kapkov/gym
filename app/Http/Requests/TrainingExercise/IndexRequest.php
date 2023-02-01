<?php

namespace App\Http\Requests\TrainingExercise;

use App\Models\Training;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $training = Training::query()->find($this->get('training_id'));

        return $training && $training->user_id = $this->user()->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'training_id' => 'integer|required|exists:trainings,id',
        ];
    }
}
