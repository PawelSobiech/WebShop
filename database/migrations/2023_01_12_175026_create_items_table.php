<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Item;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa');
            $table->integer('cena');
            $table->integer('ilosc')->unsigned()->default(0);
            $table->timestamps();
        });

        $data =  array(
            [
                'nazwa' => 'wedka',
                'cena' => 80,
            ],
            [
                'nazwa' => 'wedka2',
                'cena' => 120,
            ],
            [
                'nazwa' => 'kolowrotek',
                'cena' => 120,
            ],
            [
                'nazwa' => 'zylka',
                'cena' => 120,
            ],
            [
                'nazwa' => 'przyneta',
                'cena' => 120,
            ],
            [
                'nazwa' => 'plecak',
                'cena' => 80,
            ],
            [
                'nazwa' => 'haczyk',
                'cena' => 120,
            ],
            [
                'nazwa' => 'podbierak',
                'cena' => 120,
            ],
            [
                'nazwa' => 'splawik',
                'cena' => 120,
            ],
            [
                'nazwa' => 'kalosze',
                'cena' => 80,
            ],
            [
                'nazwa' => 'swietlik',
                'cena' => 80,
            ],
            [
                'nazwa' => 'kolowrotek2',
                'cena' => 80,
            ],
        );
        foreach ($data as $przedmiot){
            $item = new Item(); //The Category is the model for your migration
            $item->nazwa =$przedmiot['nazwa'];
            $item->cena =$przedmiot['cena'];
            $item->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
