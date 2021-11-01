<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = [
            'Engineering Fellow',
            'CEO',
            "CTO",
            'Chief Digital Officer',
            'Chief Innovation Officer',
            'VP of Engineering',
            'Director of Engineering',
            'Chief Designer',
            'Designer',
            'Chief Architect',
            'Software Architect',
            'Engineering Project Manager',
            'Project Manager',
            'Support Staff',
            'Technical Lead',
            'Team Lead',
            'Engineering Lead',
            'Principal Software Engineer',
            'Senior Software Engineer',
            'Senior App Developer',
            'Laravel Developer',
            'Wordpress Developer',
            'Fluter Developer',
            'Junior Software Developer',
            'Junior Web Developer',
            'Senior Game Developer',
            'Design Specialist',
            'Intern Software Developer',
            'Intern Designer',
            'Intern App Developer'
        ];

        $category = [
            'design', 
            'full-stack-programming',
            'front-end-programming', 
            'back-end-programming', 
            'game-dev', 
            'app-dev', 
            'customer-support', 
            'devops-sysadmin', 
            'sales-and-marketing', 
            'management-and-finance', 
            'product', 
            'others'
        ];

        $url = [
            'https://www.webfx.com/',
            'https://www.boostability.com/',
            'https://delante.co/',
            'https://www.wolfgangdigital.com/',
            'https://thisiscrowd.com/',
            'https://www.uplers.com/',
            'https://www.letsnurture.com/',
            'https://engineerbabu.com/',
            'https://studiomosaicapps.com/',
            'http://www.seoexpertsindia.com/'
        ];

        $type = [
            'Full-Time',
            'Part-Time',
            'Contract',
            'Internship',
            'Temporary'
        ];

        $fully_remote = [
            'yes',
            'no'
        ];

        $work_region = [
            "Kathmandu",
            "Pokhara",
            "Lalitpur",
            "Bhaktapur",
            "Biratnagar",
            "Birgunj",
            "Bharatpur",
            "Hetauda",
            "Dharan",
            "Butwal",
            "Dhangadi",
            "Nepalgunj",
            "Itahari",
            "Kirtipur",
            "Tulsipur",
            "Bhimdatta",
            "Siddharthanagar",
            "Birendranagar",
            "Madhyapur Thimi",
            "Dhankuta",
            "Banepa",
            "Rajbiraj",
            "Lahan",
            "Inaruwa",
            "Tansen",
            "Damak",
            "Bhadrapur"
        ];

        $experience_level = [
            'Mid Level',
            'Entry Level',
            'Senior Level'
        ];

        $education_level = [
            'Bachelor Data Science',
            'Bachelor in Computer Science',
            'BSc Computer Science and Digitisation',
            'Bachelor in Software Engineering',
            'Bachelor of Business Administration',
            'Bachelor in Artificial Intelligence fo Business',
            'Bsc (Hons) Computing',
            'Bachelor in Telecommunication systems and computer networks',
            'BSc in Computer Science',
            'International Bachelor of Computer Science (IB)',
            'Bachelor in Computer Engineering',
            'Bachelor\'s in Applied Computer Science and Artificial Intelligence',
            'Bachelor of Business Administration - Computer Applications (BBA)',
            'Software Development and Entrepreneurship (Professional Higher Education)',
            'Bachelor of Engineering in Computer Science',
            'Bachelor in Computer Engineering',
            'Not Needed'
        ];

        return [
            'title' => $title[rand(0, 29)],
            'slug' => preg_replace('/\s+/', '-', $title[rand(0, 29)]).'-'.Str::random(10),
            'category' => $category[rand(0, 11)],
            'type' => $type[rand(0, 4)],
            'fully_remote' => $fully_remote[rand(0,1)],
            'work_region' => $work_region[rand(0, 26)],
            'description' => $this->faker->paragraph(10),
            'salary' => rand(30000, 300000),
            'experience' => $experience_level[rand(0, 2)],
            'education' => $education_level[rand(0, 15)],
            'uploaded_by' => rand(1, 100),
            'status' => 'approve',
        ];
    }
}
