<?php

namespace Tests\UnitApp\Domain\Entities;

use Tests\TestCase;
use App\Domain\Entities\ContactDetail;
use App\Domain\Entities\Person;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactDetailsTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @var ContactDetail
     */
    protected $contactDetails;
    
    /**
     * {@inheritDoc}
     * @see \Illuminate\Foundation\Testing\TestCase::setUp()
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->contactDetails = new ContactDetail();
        $this->createRecords();
    }
    
    /**
     * @test
     * @return void
     */
    public function testPerson()
    {
        $this->assertInstanceOf(BelongsTo::class, $this->contactDetails->person());
    }
    
    /**
     * @test
     * @return void
     */
    public function testToArray()
    {
        $this->assertInternalType('array', $this->contactDetails->toArray());
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
    }
}