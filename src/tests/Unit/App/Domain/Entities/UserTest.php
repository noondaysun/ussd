<?php

namespace Tests\UnitApp\Domain\Entities;

use Tests\TestCase;
use App\Domain\Entities\Person;
use App\Domain\Entities\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @var User
     */
    protected $user;
    
    /**
     * {@inheritDoc}
     * @see \Illuminate\Foundation\Testing\TestCase::setUp()
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->user = new User();
        $this->createRecords();
    }
    
    /**
     * @test
     * @return void
     */
    public function testPerson()
    {
        $this->assertInstanceOf(BelongsTo::class, $this->user->person());
    }
    
    /**
     * @test
     * @return void
     */
    public function testToArray()
    {
        $this->assertInternalType('array', $this->user->toArray());
    }
    
    /**
     * Create the required data in sqlite
     *
     * @return void
     */
    private function createRecords()
    {
        factory(Person::class, 1)->create();
        factory(User::class, 1)->create([
            'person_id' => 1
        ]);
    }
}