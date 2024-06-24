<?php

use App\Models\Employer;
use App\Models\Job;

// In this context, makes more sense to use "it" rather than "test"
it('belongs to an employer', function () {
    // Arrange (setup the World), Act, Assert - AAA
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act & Assert
    expect($job->employer->is($employer))->toBeTrue();
});

// A post can have tags
it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});