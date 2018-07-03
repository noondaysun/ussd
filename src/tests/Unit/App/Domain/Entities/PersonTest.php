<?php

namespace Tests\UnitApp\Domain\Entities;

use App\Domain\Entities\ContactDetail;
use App\Domain\Entities\Person;
use App\Domain\Entities\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PersonTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @var Person
     */
    protected $person;
    
    /**
     * {@inheritDoc}
     * @see \Illuminate\Foundation\Testing\TestCase::setUp()
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->person = new Person();
        $this->createRecords();
    }
    
    /**
     * @test
     * @return void
     */
    public function testContactDetails()
    {
        $this->assertInstanceOf(HasMany::class, $this->person->contactDetails());
    }
    
    /**
     * @test
     * @return void
     */
    public function testUser()
    {
        $this->assertInstanceOf(HasMany::class, $this->person->users());
    }
    
    /**
     * Create the required data in sqlite
     *
     * @return void
     */
    private function createRecords()
    {
        factory(Person::class, 1)->create();
        factory(ContactDetail::class, 1)->create([
            'person_id' => 1
        ]);
        factory(User::class, 1)->create([
            'person_id' => 1
        ]);
    }
}