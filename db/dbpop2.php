<?php
//include "../model/Products.php";
//require_once "../vendor/autoload.php";
//
//$faker = Faker\Factory::create("de_DE");
//$faker->seed(100);
//
//// zufällige Kleidungsnamen
//function generateClothName($faker) {
//    $clothingTypes = ['Shirt', 'Pants', 'Jacket', 'Dress', 'Skirt', 'Sweater', 'Blouse', 'Jeans', 'Shorts'];
//    $adjectives = ['Stylish', 'Elegant', 'Casual', 'Formal', 'Sporty', 'Trendy', 'Classic', 'Chic', 'Modern'];
//
//    // zufällige Namen für Kleidungsstücke
//    $clothingType = $faker->randomElement($clothingTypes);
//    $adjective = $faker->randomElement($adjectives);
//    $brandName = $faker->company;
//
//    return "$adjective $clothingType by $brandName";
//}
//
//// zufällige Kleidungsbeschreibungen
//function generateClothDescription($faker) {
//    $materials = ['cotton', 'polyester', 'wool', 'silk', 'denim', 'leather', 'linen'];
//    $features = ['comfortable', 'breathable', 'durable', 'lightweight', 'stretchy', 'soft', 'warm'];
//    $styles = ['modern', 'vintage', 'boho', 'casual', 'formal', 'sporty', 'elegant'];
//    $occasions = ['everyday wear', 'office', 'evening', 'party', 'workout', 'vacation', 'special occasions'];
//
//    $material = $faker->randomElement($materials);
//    $feature = $faker->randomElement($features);
//    $style = $faker->randomElement($styles);
//    $occasion = $faker->randomElement($occasions);
//
//    return "Made from $material, this $style piece is $feature and perfect for $occasion.";
//}
//
//for ($i = 0; $i < 6; $i++) {
//
//    $p_name = generateClothName($faker);
//    $p_price = $faker->randomFloat(2, 0, 200);
//    $descrip = generateClothDescription($faker);
//
//    Products::createProducts($p_name,$p_price,'m',$descrip);
//}
//
//for ($i = 0; $i < 6; $i++) {
//
//    $p_name = generateClothName($faker);
//    $p_price = $faker->randomFloat(2, 0, 200);
//    $descrip = generateClothDescription($faker);
//
//    Products::createProducts($p_name,$p_price,'w',$descrip);
//}
