<?php
use Illuminate\Database\Seeder;
class companydataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $new_comp = factory(App\models\companies\companydataModel::class)->create();
        $ID = $new_comp->comp_id;
        $token =$new_comp->comp_token;
        $comp_addr = factory(App\models\companies\companyAddressModel::class)->create([
        	"comp_id" => $ID,
        	"comp_token" => $token,
        ]);
        $comp_type = factory(App\models\companies\companyTypeModel::class)->create([
        	"comp_id" => $ID,
        	"comp_token" => $token
        ]);

        $populatedSaver = factory(App\models\companies\populatedCompaniesModel::class)->create([
            "comp_id" => $ID,
            "comp_token" => $token
        ]);

    }
}
