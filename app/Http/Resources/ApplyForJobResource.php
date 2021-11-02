<?php

namespace App\Http\Resources;

use App\Models\Job;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplyForJobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'status' => $this->status,
            'job_title' => Job::where('id', $this->job_id)->first()->title,
            'slug' => Job::where('id', $this->job_id)->first()->slug,
            'category' => Job::where('id', $this->job_id)->first()->category,
            'fully_remote' => Job::where('id', $this->job_id)->first()->fully_remote,
            'description' => Job::where('id', $this->job_id)->first()->description,
            'work_region' => Job::where('id', $this->job_id)->first()->work_region,
            'salary' => Job::where('id', $this->job_id)->first()->salary,
            'experience' => Job::where('id', $this->job_id)->first()->experience,
            'education' => Job::where('id', $this->job_id)->first()->education,
        ];
    }
}
