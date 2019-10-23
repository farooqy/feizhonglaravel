<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $num_files = rand(1,10);
        $tokenGenerator = factory(App\models\tokenStatusGeneratorModel::class)->create();
        $generated_token = $tokenGenerator->generated_token;
        $comp_id = $tokenGenerator->generated_for_id;
        $comp_token = $tokenGenerator->generated_for_token;
        $dir = 'uploads/comp/'.$comp_token.'/status';
        if(env("APP_ENV") ==="local")
          $path = public_path($dir);
        else
          $path = env("APP_ROOT").$dir;
        if(!is_dir($path))
          mkdir($path, 765, true);
        for($i=0; $i < $num_files; $i++)
        {

          $image_url = '/'.$dir.'/'.$faker->image($path, 640, 480, 'business', false);
          $uploaded_files = factory(App\models\uploadedFilesModel::class)->create([
            'file_url' => $image_url,
            'file_uploaded_by_id' => $comp_id,
            'file_uploaded_by_who' => $comp_token,
            'file_generated_token' => $generated_token
          ]);
        }
        $status_content = factory(App\models\compStatusModel::class)->create([
          'comp_id' => $comp_id,
          'comp_token' => $comp_token,
          'status_generated_token' => $generated_token
        ]);
    }
}
