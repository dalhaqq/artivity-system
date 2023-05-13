<?php

namespace Database\Seeders;

use App\Models\Stock;
use App\Models\Machine;
use App\Models\Category;
use App\Models\Finishing;
use App\Models\OrderStatus;
use App\Models\StockCategory;
use App\Models\MachineCategory;
use Illuminate\Database\Seeder;
use App\Models\MetodePembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StarterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Finishing::create(
        [
            'name' => 'Tanpa Finishing',
            'description' => '-',
            'price' => 0
        ]);
        Finishing::create(
        [
            'name' => 'Laminasi Gloosy',
            'description' => 'Melapisi kertas dengan plastik mengkilap',
            'price' => 4000
        ]);
        Finishing::create(
        [
            'name' => 'Laminasi Doff',
            'description' => 'Melapisi kertas dengan plastik doff',
            'price' => 4000
        ]);
        Finishing::create(
        [
            'name' => 'Kiss cut',
            'description' => 'Memotong stiker',
            'price' => 4000
        ]);
        Finishing::create(
        [
            'name' => 'Die cut',
            'description' => 'Memotong stiker sampe lepas',
            'price' => 4000
        ]);

        MachineCategory::create([
            'name' => 'Mesin Produksi'
        ]);
        MachineCategory::create(
        [
            'name' => 'Mesin Finishing'
        ]);

        Category::create([
            'category' => 'Digital Printing'
        ]);
        Category::create(
        [
            'category' => 'Stiker'
        ]);

        StockCategory::create([
            'name' => 'Produksi'
        ]);

        Stock::create(
        [
        'material_categories_id' => 1,
        'name' => 'Ivory 210',
        'merk' => '-',
        'jumlah' => 500,
        'price' => 1800,
        'description' => 'Kertas tebal dan mengkilap',
        ]);
        Stock::create(
        [
        'material_categories_id' => 1,
        'name' => 'Chromo',
        'merk' => '-',
        'jumlah' => 500,
        'price' => 1800,
        'description' => 'Cocok untuk stiker label',
        ]);
        Stock::create(
        [
        'material_categories_id' => 1,
        'name' => 'Vinyl',
        'merk' => '-',
        'jumlah' => 500,
        'price' => 2000,
        'description' => 'Kertas stiker anti air',
        ]);
        Stock::create(
        [
        'material_categories_id' => 1,
        'name' => 'Art Paper 120',
        'merk' => '-',
        'jumlah' => 500,
        'price' => 1200,
        'description' => 'Kertas mengkilap',
        ]
        );
        Machine::create([
            'machine_categories_id'=>1,
            'name'=> 'Konica',
            'click_count'=> '500',
            'click_price'=> '1500'
        ]);
        Machine::create(
        [
            'machine_categories_id'=>2,
            'name'=> 'Mesin Potong',
            'click_count'=> 0,
            'click_price'=> 0
        ]);
        OrderStatus::create([
            'name' => 'Paid'
        ]);
        OrderStatus::create([
            'name' => 'On Proses'
        ]);
        OrderStatus::create([
            'name' => 'Done'
        ]);
        OrderStatus::create([
            'name' => 'Cancel'
        ]);
        MetodePembayaran::create([
            'name' => 'Qris'
        ]);
        MetodePembayaran::create([
            'name' => 'Bank Transfer'
        ]);
    }
}
