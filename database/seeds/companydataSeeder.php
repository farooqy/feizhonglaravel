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
        for ($i = 0; $i < 10; $i++) {
            $type = env('APP_SEED_COMP_TYPE');
            $subtype = env("APP_SEED_SUBTYPE");
            echo "[*] Going round " . ($i + 1) . " for the seeder type of " . $type . " and subtype " . $subtype . "\n";
            $new_comp = factory(App\models\companies\companydataModel::class)->create();
            $ID = $new_comp->comp_id;
            $token = $new_comp->comp_token;
            $comp_addr = factory(App\models\companies\companyAddressModel::class)->create([
                "comp_id" => $ID,
                "comp_token" => $token,
            ]);
            echo "[*] Company Basic Information set \n";
            $comp_type = factory(App\models\companies\companyTypeModel::class)->create([
                "comp_id" => $ID,
                "comp_token" => $token,
                "comp_type" => $type,
                "comp_subtype" => $subtype,
            ]);
            echo "[*] Company Type Information set \n";

            $populatedSaver = factory(App\models\companies\populatedCompaniesModel::class)->create([
                "comp_id" => $ID,
                "comp_token" => $token,
            ]);
            echo "[*] Company Address Information set \n\n";

        }
    }
}
