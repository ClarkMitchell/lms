<?php

namespace spec\App\Entity;

use App\Entity\Course;
use PhpSpec\ObjectBehavior;

class CourseSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Course::class);
    }
}
