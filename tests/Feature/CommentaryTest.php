<?php

namespace Tests\Feature;

use App\Commentary;
use App\User;
use Faker\Factory;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CommentaryTest extends TestCase
{
    /**
     * verifica que la pagina del index cargue correctamente
     *
     * @group commentary
     * @return void
     */
    public function test_commentary_index()
    {
        $response = $this->get(route('commentaries.index'));

        $response->assertOk();
        $response->assertSessionHasNoErrors();
        $response->assertSee(__('about-us.reviews.title'));
        $response->assertSeeInOrder([
            __('footer.title_map'),
            __('footer.copy_right'),
        ]);
    }

    /**
     * verifica que la pagina del show cargue correctamente
     *
     * @group commentary
     * @return void
     */
    public function test_commentary_show()
    {
        $commetnary = factory(Commentary::class)->create();
        $response   = $this->get(route('commentaries.show', $commetnary));

        $response->assertOk();
        $response->assertSessionHasNoErrors();
        $response->assertSee($commetnary->name);
        $response->assertSee($commetnary->commentary);
    }

    /**
     * verifica que la pagina del create sea rediriguida
     *
     * @group commentary
     * @return void
     */
    public function test_commentary_create_no_admin()
    {
        $response = $this->get(route('commentaries.create'));

        $response->assertRedirect(route('login'));
        $response->assertSessionHasNoErrors();
    }

    /**
     * verifica que la pagina del create cargue correctamente
     * si está logeado
     *
     * @group commentary
     * @return void
     */
    public function test_commentary_create_admin()
    {

        $user     = factory(User::class)->create();
        $response = $this->actingAs($user)->get(route('commentaries.create'));

        $response->assertOk();
        $response->assertSessionHasNoErrors();
    }

    /**
     * verifica que la creacion de commentary redireccione
     *
     * @group commentary
     * @return void
     */
    public function test_commentary_store_no_admin()
    {
        $response = $this->post(route('commentaries.store'), []);

        $response->assertRedirect(route('login'));
        $response->assertSessionHasNoErrors();
    }

    /**
     * verifica que la creacion de commentary funcione correctamente
     *
     * @group commentary
     * @return void
     */
    public function test_commentary_store_admin()
    {
        $user  = factory(User::class)->create();
        $faker = Factory::create();
        Storage::fake();

        $file     = UploadedFile::fake()->image('avatar.jpg');
        $response = $this->actingAs($user)->post(route('commentaries.store'), [
            'name'        => $faker->name,
            'nacionality' => $faker->country,
            'from'        => '2020-May-25',
            'to'          => '2020-Jul-26',
            'program1'    => '1',
            'comment'     => $faker->text,
            'photo'       => $file,
        ]);

        $response->assertRedirect(route('commentaries.create'));
        Storage::disk()->assertExists('images/about-us/students/'.$file->hashName());
        $response->assertSessionHasNoErrors();
    }
}
