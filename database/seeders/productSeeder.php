<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [ 'name' => 'SteelSeries Arctis 7X Wireless Gaming Headset',
            'price'=>'149.99',
            'description'=>"The SteelSeries Arctis 7X Wireless Gaming Headset is your gateway to a world of immersive gaming. Designed for Xbox and PC gaming, this headset offers lossless 2.4 GHz wireless audio for lag-free performance. With its signature ClearCast noise-canceling microphone and powerful 40mm drivers, you'll experience incredible sound and crystal-clear communication. The Arctis 7X is renowned for its comfort, thanks to the AirWeave ear cushions and a suspension headband that ensures a perfect fit. Get ready to elevate your gaming with the SteelSeries Arctis 7X.",
            "category"=>"Headset",
            "gallery"=>""


        ],

           [
            'name' => 'Logitech G Pro Gaming Headset',
            'price'=>'99.99',
            'description' =>"Immerse yourself in the world of gaming with the Logitech G Pro Gaming Headset. This premium headset is designed for pro-level performance, featuring 50mm audio drivers that deliver clear, detailed sound. With comfortable memory foam ear cups and a lightweight, 
            durable build, it's perfect for extended gaming sessions. The detachable noise-canceling microphone ensures crystal-clear communication with your team, and the versatile compatibility allows you to use it with PCs, consoles, 
            and more. Elevate your gaming experience with the Logitech G Pro Gaming Headset.
            ",
            "category"=>"Headset",
            "gallery"=>""


           ],

           [ 'name' => 'Razer Kraken Gaming Headset',
            'price'=>'79.99',
            'description'=>"The Razer Kraken Gaming Headset is your key to superior gaming audio. With large 50mm drivers, 
            this headset delivers rich, immersive sound that will transport you into the heart of your game. The plush ear cushions 
            and adjustable headband provide unmatched comfort, even during long gaming sessions. The retractable unidirectional microphone ensures your voice comes through crystal-clear for team communication. Whether you're battling 
            foes or immersing yourself in epic adventures, the Razer Kraken headset is your perfect gaming companion. Elevate your gaming experience with Razer's legendary quality and style.
            ",
            "category"=>"Headset",
            "gallery"=>""


        ],

        [ 'name' => ' HyperX Cloud II Gaming Headset',
            'price'=>'99.99',
            'description'=> "Unleash the power of precision audio with the HyperX Cloud II Gaming Headset. This headset takes your gaming to 
            the next level with its 53mm drivers, delivering immersive, high-quality sound. The memory foam ear cushions and durable aluminum frame ensure hours of comfort during 
            intense gaming sessions. Equipped with a detachable noise-canceling microphone, it guarantees clear communication with your team. The HyperX Cloud II is compatible with various platforms, making it the ideal choice for gamers on the 
            go. Elevate your gaming experience and immerse yourself in every detail with this outstanding headset",
            "category"=>"Headset",
            "gallery"=>""


        ],


        [ 'name' => 'Turtle Beach Stealth 700 Pro Wireless ',
            'price'=>'149.99',
            'description'=> "Get ready to conquer the gaming world with the Turtle Beach Stealth 700 Pro Wireless Gaming Headset. 
            With high-quality 50mm speakers and DTS Headphone:X 7.1 Surround Sound, you'll experience incredible audio immersion. This headset 
            boasts ProSpecs™ glasses-friendly design and plush memory foam ear cushions, ensuring you can game comfortably for hours. The high-sensitivity microphone and Superhuman Hearing™ 
            technology allow for crystal-clear communication and a competitive edge. Compatible with multiple platforms, the Stealth 700 Pro is your ultimate gaming companion, delivering premium sound and comfort. 
            Elevate your gaming experience with Turtle Beach.",
            "category"=>"Headset",
            "gallery"=>""


        ],

        [ 'name' => 'Razer Huntsman Gaming Keyboard',
        'price'=>'129.99',
        'description'=> "Unleash lightning-fast gaming precision with the Razer Huntsman Gaming Keyboard. This revolutionary keyboard is equipped with Razer's innovative Opto-Mechanical switches, providing instantaneous keypress response and greater durability. 
        The customizable RGB Chroma backlighting adds a stunning visual dimension to your gaming setup. With a sleek, aluminium matte top plate and dedicated media controls, the Huntsman delivers both style and functionality. Get ready to elevate your gaming experience and dominate your competition with the 
        Razer Huntsman Gaming Keyboard.",
        "category"=>"Keyboards",
        "gallery"=>""


    ],

    [ 'name' => 'Logitech G Pro Mechanical Gaming Keyboard',
        'price'=>'129.99',
        'description'=> "The Logitech G Pro Mechanical Gaming Keyboard is the ultimate choice for competitive gamers. Featuring pro-grade Romer-G switches for faster response times and durability, this keyboard ensures you stay ahead of the competition. With customizable RGB lighting, you can match your setup's aesthetics, and its tenkeyless design maximizes desk space for precision gaming. 
        The compact, portable design is perfect for esports tournts and LAN parties. Elevate your gaming experience with the Logitech G Pro Mechanical Gaming Keyboard and gain the edge you need to succeed.
        ",
        "category"=>"Keyboards",
        "gallery"=>""


    ],

    [ 'name' => 'Ducky One 2 Mini Mechanical Gaming Keyboard',
    'price'=>'119.99',
    'description'=> "TThe Ducky One 2 Mini Mechanical Gaming Keyboard is a compact powerhouse that's ready to revolutionize your gaming experience. Featuring customizable, high-quality Cherry MX switches, 
    you'll enjoy precise, tactile keypresses. This 60% keyboard's compact design is perfect for tight desk spaces and gamers on the move. With full RGB backlighting and extensive programmability, you can create a personalized gaming setup that matches your style. Get ready to elevate your gaming performance with the Ducky One 2 Mini, 
    the keyboard of choice for both casual and professional gamers alike.",
    "category"=>"Keyboards",
    "gallery"=>""


],

[ 'name' => 'SteelSeries Apex Pro Mechanical Gaming Keyboard',
    'price'=>'199.99',
    'description'=> "Elevate your gaming to new heights with the SteelSeries Apex Pro Mechanical Gaming Keyboard. Featuring OmniPoint switches, this keyboard allows you to adjust the actuation point of each key, giving you unprecedented control and precision. 
    The customizable RGB illumination and aluminum frame provide a premium, personalized gaming experience. With a magnetic wrist rest and dedicated multimedia controls, it offers the utmost comfort and convenience. Dominate your competition and take your gaming to the next 
    level with the SteelSeries Apex Pro.",
    "category"=>"Keyboards",
    "gallery"=>""


],

[ 'name' => 'Redragon K585 DITI One-Handed Mechanical Gaming Keyboard',
    'price'=>'49.99',
    'description'=> "The Redragon K585 DITI One-Handed Mechanical Gaming Keyboard is your ultimate tool for streamlined gaming performance. Designed for single-handed control, this compact keyboard features customizable RGB lighting, tactile mechanical switches, and dedicated macro keys to give you the edge in any game. The ergonomic wrist rest ensures comfort during long gaming sessions. Whether you're into MOBAs or FPS, the Redragon K585 has your back, enhancing your gaming experience with efficiency and style.
    ",
    "category"=>"Keyboards",
    "gallery"=>""


],

[ 'name' => 'PlayStation 4 DualShock 4 Wireless Controller',
    'price'=>'59.99',
    'description'=> "The PlayStation 4 DualShock 4 Wireless Controller is your gateway to immersive gaming on the PS4. This controller boasts responsive analog sticks, a built-in touchpad, and a light bar that changes colors in sync with the game. With precision controls and an ergonomic design, it provides a comfortable and intuitive gaming experience. The DualShock 4 controller is an essential companion for every PS4 gamer, delivering seamless gameplay and interaction with your favorite titles.",
    "category"=>"Controllers",
    "gallery"=>""


],

[ 'name' => 'PlayStation 5 DualSense Wireless Controller',
    'price'=>'69.99',
    'description'=> "The PlayStation 5 DualSense Wireless Controller redefines your gaming experience. With haptic feedback and adaptive triggers, you'll feel every action in unprecedented detail. The built-in microphone and rechargeable battery enhance convenience, while the innovative Create button opens up new ways to share your gaming moments. Its sleek design and precise controls make the DualSense controller an essential component for PS5 gamers, allowing you to dive deep into the next generation of gaming. Elevate your gameplay to new heights with the PlayStation 5 DualSense Wireless Controller.",
    "category"=>"Controllers",
    "gallery"=>""


],

[ 'name' => 'Logitech G29 Driving Force Racing Wheel for PlayStation',
    'price'=>'249.99',
    'description'=> "Immerse yourself in the world of racing with the Logitech G29 Driving Force Racing Wheel for PlayStation. This high-quality racing wheel and pedal set is designed to provide a realistic racing experience on your PlayStation console. With dual-motor force feedback, leather-wrapped steering wheel, and responsive pedals, you'll feel every turn and bump on the track. The Logitech G29 is compatible with popular racing games and offers precise control and realism for both casual and professional racers. Take your virtual racing adventures to the next level with the Logitech G29 Driving Force Racing Wheel.",
    "category"=>"Controllers",
    "gallery"=>""


],

[ 'name' => 'Logitech G 3D Pro Joystick',
    'price'=>'39.99',
    'description'=> "The Logitech G 3D Pro Joystick is your ticket to experiencing flight simulation like never before. This joystick is built for precision control and realism, making it the perfect choice for flight enthusiasts and gamers. With 12 programmable buttons, an eight-way hat switch, and a comfortable hand grip, you'll have everything you need to take command of your virtual aircraft. Whether you're soaring through the skies in a combat simulator or exploring the world in a flight sim, the Logitech G 3D Pro Joystick delivers an immersive and responsive flying experience.",
    "category"=>"Controllers",
    "gallery"=>""


    

],


[ 'name' => 'HTC Vive Controller',
    'price'=>'129.99',
    'description'=> "The HTC Vive Controller is your portal to an incredible virtual reality experience. Designed to work seamlessly with HTC Vive and Vive Pro VR systems, these controllers offer precise tracking, haptic feedback, and an ergonomic design that feels natural in your hand. Whether you're engaging in high-intensity action, creative exploration, or immersive storytelling, the HTC Vive Controller lets you interact with the virtual world in a way that blurs the line between reality and imagination. Elevate your VR adventures with the HTC Vive Controller.",
    "category"=>"Controllers",
    "gallery"=>""


],

[ 'name' => ' Logitech MX Master 3 Wireless Mouse',
    'price'=>'99.99',
    'description'=> "The Logitech MX Master 3 is a productivity powerhouse. Its ergonomic design, customizable buttons, and precise Darkfield high-precision sensor make it perfect for work or creative tasks. Unleash your potential with this wireless mouse.",
    "category"=>"Mice",
    "gallery"=>""


],

[ 'name' => 'Razer DeathAdder V2 Pro Gaming Mouse',
    'price'=>'89.99',
    'description'=> "Elevate your gaming experience with the Razer DeathAdder V2 Pro. Featuring Razer's optical switches and Focus+ Optical Sensor, this wireless gaming mouse offers unrivaled speed and precision for competitive gaming.",
    "category"=>"Mice",
    "gallery"=>""


],

[ 'name' => 'Razer DeathAdder V2 Pro Gaming Mouse',
    'price'=>'79.99',
    'description'=> "The SteelSeries Rival 600 is a game-changer for serious gamers. Its dual optical sensors, customizable weight system, and split-trigger buttons provide ultimate control, ensuring you stay ahead of the competition.",
    "category"=>"Mice",
    "gallery"=>""


],


[ 'name' => 'Corsair Dark Core RGB/SE Wired/Wireless Gaming Mouse',
    'price'=>'69.99',
    'description'=> "The Corsair Dark Core RGB/SE is a versatile gaming mouse with customizable side grips and customizable RGB lighting. Wired or wireless, it adapts to your playstyle for a competitive edge.",
    "category"=>"Mice",
    "gallery"=>""


],


[ 'name' => 'Logitech M720 Triathlon Multi-Device Wireless Mouse',
    'price'=>'49.99',
    'description'=> " The Logitech M720 is your multitasking companion. It allows seamless switching between three devices and features hyper-fast scrolling. Whether at work or home, stay efficient with this versatile wireless mouse.",
    "category"=>"Mice",
    "gallery"=>""


],

[ 'name' => 'ASUS ROG Swift PG279QZ 27" Gaming Monitor',
    'price'=>'499.99',
    'description'=> "The ASUS ROG Swift PG279QZ is a 27-inch gaming monitor designed for performance and immersion. With a 1440p resolution, 165Hz refresh rate, G-Sync technology, and an IPS panel, it offers stunning visuals and ultra-smooth gaming.",
    "category"=>"Monitors",
    "gallery"=>""


],

[ 'name' => 'Acer Predator X27 27" 4K Gaming Monitor',
    'price'=>'1299.99',
    'description'=> "The Acer Predator X27 is a premium 4K gaming monitor. With a 27-inch IPS panel, 144Hz refresh rate, G-Sync HDR, and local dimming, it provides a jaw-dropping gaming experience with HDR support.",
    "category"=>"Monitors",
    "gallery"=>""


],

[ 'name' => 'Alienware 34" Curved Ultrawide Gaming Monitor',
    'price'=>'899.99',
    'description'=> 'The Alienware 34" Curved Ultrawide Gaming Monitor is a massive 34-inch display with a 1440p resolution and a 144Hz refresh rate. The curved design and AlienFX customizable lighting create an immersive gaming atmosphere',
    "category"=>"Monitors",
    "gallery"=>""


],

[ 'name' => 'MSI Optix MAG341CQ 34" Ultrawide Gaming Monitor',
    'price'=>'399.99',
    'description'=> "The MSI Optix MAG341CQ is a value-packed 34-inch ultrawide gaming monitor. With a 3440x1440 resolution, 100Hz refresh rate, and AMD FreeSync, it offers a stunning gaming experience without breaking the bank.",
    "category"=>"Monitors",
    "gallery"=>""


],


[ 'name' => ' AOC CQ32G1 32" Curved Gaming Monitor',
    'price'=>'299.99',
    'description'=> "The AOC CQ32G1 is a budget-friendly 32-inch curved gaming monitor. With a 1440p resolution, 144Hz refresh rate, and AMD FreeSync, it delivers smooth gameplay and an immersive curved screen experience.",
    "category"=>"Monitors",
    "gallery"=>""


],
        ]);
    }
}
