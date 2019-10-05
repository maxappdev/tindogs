<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Dog::class, function (Faker $faker) {

    $breeds = array(
        'Airedale Terrier',
        'Akbash',
        'Alpine Spaniel',
        'American Bully',
        'Bulldog',
        'Cocker Spaniel'
    );

    $colors = array(
        'Brown',
        'Red',
        'Yellow'
    );

    $countries = array(
        'Ukraine',
        'Russia',
        'USA',
        'Austria'
    );

    $photos = [
        "https://random.dog/4bd3f722-8acc-4eb3-9572-7b516edebc93.jpg",
        "https://random.dog/0f889a7e-562b-4824-b521-b7aaf1757b9c.jpeg",
        "https://random.dog/b9fc3482-f834-4247-8192-0d1f001d5d0b.jpg",
        "https://random.dog/1d9b4b44-e168-4b18-80d0-4919ad0e6fab.jpg",
        "https://random.dog/faaba8fb-a33a-431d-870c-7d49957652d3.jpg",
        "https://random.dog/faaba8fb-a33a-431d-870c-7d49957652d3.jpg",
        "https://random.dog/90d51c23-dd69-4de7-8e76-05e6219c5350.JPG",
        "https://random.dog/ba629adf-770f-4586-bb1e-e33969677310.jpg",
        "https://random.dog/479bf871-206d-4729-8950-a214d6f2ed9a.jpg",
        "https://random.dog/e393aeb5-4fb9-4e2d-bd43-8c5b04135677.jpg",
        "https://random.dog/f856b11f-6d47-4089-9edf-aad8107161d0.jpg",
        "https://random.dog/63fa22bc-5aa9-4d41-9323-15c467f29440.jpg",
        "https://random.dog/c61a3df2-abe3-4b0a-84ee-d036f8696814.jpg",
        "https://random.dog/b775c9ae-205a-47ad-96e5-bea4d78628c5.jpg",
        "https://random.dog/2b77643c-d180-463b-9572-510bec7e04fa.jpg",
        "https://random.dog/c5841007-73ab-4794-82e4-48a4763b0aec.jpg",
        "https://random.dog/47bab7ec-84da-4def-801e-1c3d82c9ac66.jpg",
        "https://random.dog/1d3ca62c-4c19-4d6b-b9ef-87716b3eccf5.png",
        "https://random.dog/b031bb2e-7dfa-4d76-83b7-369e2f4ff454.jpg",
        "https://random.dog/06c96920-38c5-4883-95ac-0968a4ecd4f1.JPG",
        "https://random.dog/d7ae7fc7-e254-45da-8ac4-6afb898b6cc2.png",
        "https://random.dog/1e10906f-aead-49fb-9b39-ad8540847e24.jpg",
        "https://random.dog/image10_1.jpg",
        "https://random.dog/a1eba572-e557-474b-a023-e48ead3c2786.jpeg",
        "https://random.dog/34677f19-e1f2-4210-9d23-5de40e202b1a.JPG",
        "https://random.dog/3bc8b410-8ebe-4c9d-85ba-d3677f031ac6.jpg",
        "https://random.dog/70cdbfcc-ad31-4a15-a306-03b95540f6c7.jpg",
        "https://random.dog/57b5e2ea-a790-4235-9910-ba692b08c211.jpg",
        "https://random.dog/de674643-9f77-477c-89dd-e8043976db87.jpg",
        "https://random.dog/258e44d2-14df-4b46-b032-52754c3d0d3e.jpg",
        "https://random.dog/affbb84a-f293-4bac-a9fb-dcf2f3dd3f0d.jpg",
        "https://random.dog/69728193-e0aa-444a-84d4-715e460ba627.JPG",
        "https://random.dog/1326984c-39b0-492c-a773-f120d747a7e2.jpg",
        "https://random.dog/eebec262-2c4a-4883-9c75-32f9315eb045.jpg",
        "https://random.dog/08630019-c6ae-43ef-b075-4fe5b2077c90.jpg",
        "https://random.dog/93ade0d8-ab54-4074-b7ba-89db44ec3b24.jpg",
        "https://random.dog/1bc616d0-d15d-4b7c-a089-42617d9af334.jpg",
        "https://random.dog/44e216cc-237f-4403-83b6-d7dbe803644b.jpg",
        "https://random.dog/6edac66e-c0de-4e69-a9d6-b2e6f6f9001b.jpg",
        "https://random.dog/28d44524-33b7-457c-a4f6-32b3294ea160.JPG",
        "https://random.dog/ef01ebc6-501a-4e5f-96f7-23180cdd9f3e.JPG",
        "https://random.dog/57b5e2ea-a790-4235-9910-ba692b08c211.jpg",
        "https://random.dog/b3b24c5f-2c21-4b94-a68f-3b06d4432a04.JPG",
        "https://random.dog/f049b6a6-e9b9-4849-8da8-91cb303229e2.jpg",
        "https://random.dog/46be3661-2d29-4119-8841-baa86c4a73ba.jpg",
        "https://random.dog/fb5524fa-28f5-42e2-a60c-ddc413f099d1.jpg",
        "https://random.dog/11ce071b-acb8-4ede-87fa-8cb4fe204d2a.jpg",
        "https://random.dog/61853b55-a00d-4cb8-afdc-ee9df5875d66.jpg",
        "https://random.dog/1573beb6-6c9f-4705-95c9-7878c7c2e8d8.jpg",
        "https://random.dog/b3d18975-1146-457f-a95c-5eae994c2e9e.jpg",
        "https://random.dog/12297f35-1812-4a63-9e17-64dd05c7a759.jpg",
        "https://random.dog/ba2a3ac0-65e1-4955-9aea-85cfed9cc325.jpg",
        "https://random.dog/b85472ed-141e-4a38-b5ee-d286a67e5681.JPG",
        "https://random.dog/a3be892d-c184-4722-99ab-3478e6d2cee4.jpg",
        "https://random.dog/07e51206-2967-4632-ad03-a7f12675bc55.jpg",
        "https://random.dog/15038-13875-14202.jpg",
        "https://random.dog/bc1d0b93-34bb-4ce7-8b15-5adad0359213.jpg",
        "https://random.dog/1800eefa-6a30-48b8-9c3f-ad1eb6fd9abe.jpg",
        "https://random.dog/0415ca3e-0e99-4afa-bec6-bd8a4a7ff6ff.PNG",
        "https://random.dog/99922971-447f-4785-b5fe-db96f9938994.jpg",
        "https://random.dog/63fa22bc-5aa9-4d41-9323-15c467f29440.jpg",
        "https://random.dog/de8cefc2-3be8-46ab-9d12-12198bfaa60d.jpg",
        "https://random.dog/2ae2870c-8827-41dd-b732-fc695f6f1e3e.jpg",
        "https://random.dog/886c5960-5345-48f0-bf3c-9fd5145a62aa.jpg",
        "https://random.dog/ff0b26d5-0ea3-4971-b2cf-9f904f301eef.jpg",
        "https://random.dog/80a8c758-1ee8-4460-96c6-cb31716a269c.jpg",
        "https://random.dog/44e216cc-237f-4403-83b6-d7dbe803644b.jpg",
        "https://random.dog/aa4277d4-ffdc-45f5-b87e-2b28b7f23f2e.jpg",
        "https://random.dog/191091b2-7d69-47af-9f52-6605063f1a47.jpg",
        "https://random.dog/b8acf898-dc54-4ff3-973b-a0e00e567b8c.jpg",
        "https://random.dog/2d22fa37-ea40-4496-a9af-58ae57ef65bd.jpg",
        "https://random.dog/0f3c6ec3-1e6e-4b06-9a23-ed4292dca5eb.jpg",
        "https://random.dog/315ee1d5-57b1-4899-beac-8cd96327f285.JPG",
        "https://random.dog/08630019-c6ae-43ef-b075-4fe5b2077c90.jpg",
        "https://random.dog/a3242397-ade0-4887-93bd-5390853b7f55.jpg",
        "https://random.dog/08b34a90-ffc6-4f80-829a-2c3e7414f26e.jpg",
        "https://random.dog/4bd3f722-8acc-4eb3-9572-7b516edebc93.jpg"
    ];

    return [
        'name' => $faker->firstname,
        'age' => $faker->numberBetween(2,180),
        'breed' => $breeds[rand(0, sizeof($breeds)-1)],
        'color' => $colors[rand(0, sizeof($colors)-1)],
        'origin' => $countries[rand(0, sizeof($countries)-1)],
        'description' => $faker->text,
        'family_friendly' => $faker->numberBetween(0,1),
        'pet_friendly' => $faker->numberBetween(0,1),
        'photo' => $photos[rand(0, sizeof($photos)-1)]
    ];
});
