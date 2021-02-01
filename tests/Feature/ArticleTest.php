<?php

namespace Tests\Feature;

use Tests\TestCase;

class ArticleTest extends TestCase
{

    /*public function setUp(): void
    {
    parent::setUp();
    $this->artisan('db:seed');
    }*/

    public function testHome()
    {
        //$this->withoutExceptionHandling();
        $response = $this->get(route('home'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee('Welcome to Our Spanish School in Ecuador');
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_spanish_courses()
    {
        $response = $this->get(route('item-2'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_approach()
    {
        $response = $this->get(route('item-2-1'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.approach.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_academic_placement()
    {
        $response = $this->get(route('item-2-2'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.academic.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_test_online()
    {
        $response = $this->get(route('item-2-3'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.test.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_group_courses()
    {
        $response = $this->get(route('item-2-4'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.group.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_private_courses()
    {
        $response = $this->get(route('item-2-5'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.private.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_semi_private_courses()
    {
        $response = $this->get(route('item-2-6'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.semi-private.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_combined_courses()
    {
        $response = $this->get(route('item-2-7'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.combined.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_dele_exam_preparation()
    {
        $response = $this->get(route('item-2-8'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.dele.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_university_courses()
    {
        $response = $this->get(route('item-2-9'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.university.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_travel_spanish()
    {
        $response = $this->get(route('item-2-10'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.travel.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_spanish_for_professionals()
    {
        $response = $this->get(route('item-2-11'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('courses.professionals.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    //------------------------------------------------------------------------DESTINATIONS---------------------------------------------

    public function test_destinations()
    {
        $response = $this->get(route('destinations'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('destinations.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_learn_quito()
    {
        $response = $this->get(route('learn-quito'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('destinations.quito.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_learn_otavalo()
    {
        $response = $this->get(route('learn-otavalo'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('destinations.otavalo.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_learn_amazon()
    {
        $response = $this->get(route('learn-amazon'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('destinations.amazon.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_learn_galapagos()
    {
        $response = $this->get(route('learn-galapagos'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('destinations.galapagos.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_learn_shuar_community()
    {
        $response = $this->get(route('learn-shuar-community'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('destinations.indigenous.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_learn_south_america()
    {
        $response = $this->get(route('learn-south-america'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('destinations.packages.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    //----------------------------------------------------------------------TRAVELLING------------------------------------------------------------

    public function test_traveling_classroom()
    {
        $response = $this->get(route('traveling-classroom'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('travelling.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_andes_amazon_7()
    {
        $response = $this->get(route('andes-amazon-7'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('travelling.andes-amazon-7.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_andes_amazon_12()
    {
        $response = $this->get(route('andes-amazon-12'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('travelling.andes-amazon-12.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_walking_andes_12()
    {
        $response = $this->get(route('walking-andes-12'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('travelling.andes-walking.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_experience_ecuador_16()
    {
        $response = $this->get(route('experience-ecuador-16'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('travelling.experience.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_travelling_explore()
    {
        $response = $this->get(route('travelling-explore'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('travelling.explore.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_secret_evolution()
    {
        $response = $this->get(route('secret-evolution'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('travelling.secret.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    //---------------------------------------------------------------------------Volunteering------------------------------------------------------

    public function test_volunteering()
    {
        $response = $this->get(route('volunteering'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('volunteering.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_aplication_volunteer()
    {
        $response = $this->get(route('aplication-volunteer'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('volunteering.application.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    //---------------------------------------------------------------------ABOUT US----------------------------------------------------------------

    public function test_about_us()
    {
        $response = $this->get(route('about-us'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('about-us.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_welcome_ise()
    {
        $response = $this->get(route('welcome-ise'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('about-us.ise.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_ourteam()
    {
        $response = $this->get(route('ourteam'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('about-us.team.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_ourfacilities()
    {
        $response = $this->get(route('ourfacilities'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('about-us.facilities.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_work_ise()
    {
        $response = $this->get(route('work-ise'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('about-us.work.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_students_reviews()
    {
        $response = $this->get(route('students-reviews'));
        $response->assertRedirect(route('commentaries.index'));
    }

    //---------------------------------------------------------------------FAQS----------------------------------------------------------------

    public function test_faqs()
    {
        $response = $this->get(route('faqs'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('faqs.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    //---------------------------------------------------------------------PRICES----------------------------------------------------------------

    public function test_prices()
    {
        $response = $this->get(route('faqs'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('prices.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_prices_quito_otavalo()
    {
        $response = $this->get(route('price-quito-otavalo'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('prices.quito_otavalo.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_prices_amazon()
    {
        $response = $this->get(route('price-amazon'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('prices.amazon.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_prices_galapagos()
    {
        $response = $this->get(route('price-galapagos'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('prices.galapagos.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_prices_indigenous()
    {
        $response = $this->get(route('price-communities'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('prices.indigenous.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_prices_travelling()
    {
        $response = $this->get(route('price-travelling'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('prices.travelling.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_prices_packages()
    {
        $response = $this->get(route('price-packages'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('prices.packages.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_prices_volunteer()
    {
        $response = $this->get(route('price-volunteer'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('prices.volunteer.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_booking()
    {
        $response = $this->get(route('booking'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('booking.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    public function test_contact_us()
    {
        $response = $this->get(route('contact'));
        $response->assertSuccessful();
        $response->assertSessionHasNoErrors();
        $response->assertSee('Contact Us');
        $response->assertSee('Online Classes');
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    
}
