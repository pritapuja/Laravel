<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use App\Models\Scopes\IsActiveScope;
use Database\Seeders\CategorySeeder;
use Database\Seeders\CustomerSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ReviewSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class CategoryTest extends TestCase
{
    public function testInsert()
    {
        $category = new Category();
        $category->id = "GADGET";
        $category->name = "Gadget";
        $result = $category->save();

        self::assertTrue($result);
    }

    // public function testInsertMany()
    // {
    //     $categories = [];
    //     for ($i = 0; $i < 10; $i++) {
    //         $categories[] = [
    //             "id" => "ID $i",
    //             "name" => "Name $i",
    //             'is_active' => true
    //         ];
    //     }

    //     // $result = Category::query()->insert($categories);
    //     $result = Category::insert($categories);

    //     self::assertTrue($result);

    //     // $total = Category::query()->count();
    //     $total = Category::count();

    //     self::assertEquals(10, $total);

    // }

    // public function testFind()
    // {
    //     $this->seed(CategorySeeder::class);

    //     // $category = Category::query()->find("FOOD");
    //     $category = Category::find("FOOD");

    //     self::assertNotNull($category);
    //     self::assertEquals("FOOD", $category->id);
    //     self::assertEquals("Food", $category->name);
    //     self::assertEquals("Food Category", $category->description);
    // }

    // public function testUpdate()
    // {
    //     $this->seed(CategorySeeder::class);

    //     $category = Category::find("FOOD");
    //     $category->name = "Food Updated";

    //     $result = $category->update();
    //     self::assertTrue($result);

    // }

    // public function testSelect()
    // {
    //     for ($i = 0; $i < 5; $i++) {
    //         $category = new Category();
    //         $category->id = "ID $i";
    //         $category->name = "Name $i";
    //         $category->is_active = true;
    //         $category->save();
    //     }

    //     $categories = Category::whereNull("description")->get();
    //     self::assertEquals(5, $categories->count());
    //     $categories->each(function ($category) {
    //         self::assertNull($category->description);

    //         $category->description = "Updated";
    //         $category->update();
    //     });

    // }

    // public function testUpdateMany()
    // {
    //     $categories = [];
    //     for ($i = 0; $i < 10; $i++) {
    //         $categories[] = [
    //             "id" => "ID $i",
    //             "name" => "Name $i",
    //             'is_active' => true
    //         ];
    //     }

    //     $result = Category::insert($categories);
    //     self::assertTrue($result);

    //     Category::whereNull("description")->update([
    //         "description" => "Updated"
    //     ]);
    //     $total = Category::where("description", "=", "Updated")->count();
    //     self::assertEquals(10, $total);

    // }

    // public function testDelete()
    // {
    //     $this->seed(CategorySeeder::class);

    //     $category = Category::find("FOOD");
    //     $result = $category->delete();
    //     self::assertTrue($result);

    //     $total = Category::count();
    //     self::assertEquals(0, $total);
    // }

    // public function testDeleteMany()
    // {
    //     $categories = [];
    //     for ($i = 0; $i < 10; $i++) {
    //         $categories[] = [
    //             "id" => "ID $i",
    //             "name" => "Name $i",
    //             'is_active' => true
    //         ];
    //     }

    //     $result = Category::insert($categories);
    //     self::assertTrue($result);

    //     $total = Category::count();
    //     assertEquals(10, $total);

    //     Category::whereNull("description")->delete();

    //     $total = Category::count();
    //     assertEquals(0, $total);

    // }

    // public function testCreate()
    // {
    //     $request = [
    //         "id" => "FOOD",
    //         "name" => "Food",
    //         "description" => "Food Category"
    //     ];

    //     $category = new Category($request);
    //     $category->save();

    //     self::assertNotNull($category->id);
    // }

    // public function testCreateUsingQueryBuilder()
    // {
    //     $request = [
    //         "id" => "FOOD",
    //         "name" => "Food",
    //         "description" => "Food Category"
    //     ];

    //     // $category = Category::query()->create($request);
    //     $category = Category::create($request);

    //     self::assertNotNull($category->id);

    // }

    // public function testUpdateMass()
    // {
    //     $this->seed(CategorySeeder::class);

    //     $request = [
    //         "name" => "Food Updated",
    //         "description" => "Food Category Updated"
    //     ];

    //     $category = Category::find("FOOD");
    //     $category->fill($request);
    //     $category->save();

    //     self::assertNotNull($category->id);
    // }

    

}
