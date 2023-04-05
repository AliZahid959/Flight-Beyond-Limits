<?php

namespace Database\Seeders;

use App\Models\AcademySlider;
use App\Models\BlogCategory;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Customer;
use App\Models\HomeSlider;
use App\Models\Industry;
use App\Models\IndustryCategory;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use App\Models\Setting;
use App\Models\SiteContent;
use App\Models\Software;
use App\Models\Support;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FreshStart extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'create-role',
            ],
            [
                'name' => 'read-role',
            ],
            [
                'name' => 'update-role',
            ],
            [
                'name' => 'delete-role',
            ],
            [
                'name' => 'crud-role',
            ],
            [
                'name' => 'create-permission',
            ],
            [
                'name' => 'read-permission',
            ],
            [
                'name' => 'update-permission',
            ],
            [
                'name' => 'delete-permission',
            ],
            [
                'name' => 'crud-permission',
            ],
            [
                'name' => 'create-user',
            ],
            [
                'name' => 'read-user',
            ],
            [
                'name' => 'update-user',
            ],
            [
                'name' => 'delete-user',
            ],
            [
                'name' => 'crud-user',
            ],
            [
                'name' => 'create-service',
            ],
            [
                'name' => 'read-service',
            ],
            [
                'name' => 'update-service',
            ],
            [
                'name' => 'delete-service',
            ],
            [
                'name' => 'crud-service',
            ],
            [
                'name' => 'create-product',
            ],
            [
                'name' => 'read-product',
            ],
            [
                'name' => 'update-product',
            ],
            [
                'name' => 'delete-product',
            ],
            [
                'name' => 'crud-product',
            ],
            [
                'name' => 'create-blog',
            ],
            [
                'name' => 'read-blog',
            ],
            [
                'name' => 'update-blog',
            ],
            [
                'name' => 'delete-blog',
            ],
            [
                'name' => 'crud-blog',
            ],
            [
                'name' => 'create-team',
            ],
            [
                'name' => 'read-team',
            ],
            [
                'name' => 'update-team',
            ],
            [
                'name' => 'delete-team',
            ],
            [
                'name' => 'crud-team',
            ],
            [
                'name' => 'create-industry',
            ],
            [
                'name' => 'read-industry',
            ],
            [
                'name' => 'update-industry',
            ],
            [
                'name' => 'delete-industry',
            ],
            [
                'name' => 'crud-industry',
            ],
            [
                'name' => 'create-software',
            ],
            [
                'name' => 'read-software',
            ],
            [
                'name' => 'update-software',
            ],
            [
                'name' => 'delete-software',
            ],
            [
                'name' => 'crud-software',
            ],
            [
                'name' => 'crud-home-slider',
            ],
            [
                'name' => 'crud-quotation',
            ],
            [
                'name' => 'create-course',
            ],
            [
                'name' => 'read-course',
            ],
            [
                'name' => 'update-course',
            ],
            [
                'name' => 'delete-course',
            ],
            [
                'name' => 'crud-course',
            ],
            [
                'name' => 'crud-course-application',
            ],
            [
                'name' => 'crud-academy-slider',
            ],
            [
                'name' => 'product-setting',
            ],
            [
                'name' => 'blog-setting',
            ],
            [
                'name' => 'service-setting',
            ],
            [
                'name' => 'team-setting',
            ],
            [
                'name' => 'academy-setting',
            ],
            [
                'name' => 'crud-setting',
            ],
        ];
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
        $admin_permissions = [
            [
                'name' => 'create-role',
            ],
            [
                'name' => 'read-role',
            ],
            [
                'name' => 'update-role',
            ],
            [
                'name' => 'delete-role',
            ],
            [
                'name' => 'crud-role',
            ],
            [
                'name' => 'create-user',
            ],
            [
                'name' => 'read-user',
            ],
            [
                'name' => 'update-user',
            ],
            [
                'name' => 'delete-user',
            ],
            [
                'name' => 'crud-user',
            ],
            [
                'name' => 'create-service',
            ],
            [
                'name' => 'read-service',
            ],
            [
                'name' => 'update-service',
            ],
            [
                'name' => 'delete-service',
            ],
            [
                'name' => 'crud-service',
            ],
            [
                'name' => 'create-product',
            ],
            [
                'name' => 'read-product',
            ],
            [
                'name' => 'update-product',
            ],
            [
                'name' => 'delete-product',
            ],
            [
                'name' => 'crud-product',
            ],
            [
                'name' => 'create-blog',
            ],
            [
                'name' => 'read-blog',
            ],
            [
                'name' => 'update-blog',
            ],
            [
                'name' => 'delete-blog',
            ],
            [
                'name' => 'crud-blog',
            ],
            [
                'name' => 'create-team',
            ],
            [
                'name' => 'read-team',
            ],
            [
                'name' => 'update-team',
            ],
            [
                'name' => 'delete-team',
            ],
            [
                'name' => 'crud-team',
            ],
            [
                'name' => 'create-industry',
            ],
            [
                'name' => 'read-industry',
            ],
            [
                'name' => 'update-industry',
            ],
            [
                'name' => 'delete-industry',
            ],
            [
                'name' => 'crud-industry',
            ],
            [
                'name' => 'create-software',
            ],
            [
                'name' => 'read-software',
            ],
            [
                'name' => 'update-software',
            ],
            [
                'name' => 'delete-software',
            ],
            [
                'name' => 'crud-software',
            ],
            [
                'name' => 'crud-home-slider',
            ],
            [
                'name' => 'crud-quotation',
            ],
            [
                'name' => 'create-course',
            ],
            [
                'name' => 'read-course',
            ],
            [
                'name' => 'update-course',
            ],
            [
                'name' => 'delete-course',
            ],
            [
                'name' => 'crud-course',
            ],
            [
                'name' => 'crud-course-application',
            ],
            [
                'name' => 'crud-academy-slider',
            ],
            [
                'name' => 'product-setting',
            ],
            [
                'name' => 'blog-setting',
            ],
            [
                'name' => 'service-setting',
            ],
            [
                'name' => 'team-setting',
            ],
            [
                'name' => 'academy-setting',
            ],
            [
                'name' => 'crud-setting',
            ],
        ];

        $writer_permissions = [
            [
                'name' => 'create-blog',
            ],
            [
                'name' => 'read-blog',
            ],
            [
                'name' => 'update-blog',
            ],
            [
                'name' => 'delete-blog',
            ],
            [
                'name' => 'crud-blog',
            ],
            [
                'name' => 'blog-setting',
            ],
        ];

        $super_admin_role = Role::create(['name' => 'super-admin']);
        $admin_role = Role::create(['name' => 'admin']);
        $writer_role = Role::create(['name' => 'writer']);

        $super_admin_user = User::create([
            'user_name' => 'Abdul Rauf',
            'slug' => 'abdul-rauf',
            'email' => 'abdulrauf735@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $super_admin_role->givePermissionTo($permissions);
        $super_admin_user->assignRole($super_admin_role);
        $admin_user = User::create([
            'user_name' => 'Admin',
            'slug' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $admin_role->givePermissionTo($admin_permissions);
        $admin_user->assignRole($admin_role);



        $writer_user = User::create([
            'user_name' => 'writer',
            'slug' => 'writer',
            'email' => 'writer@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $writer_role->givePermissionTo($writer_permissions);
        $writer_user->assignRole($writer_role);


        $supports = [
            [
                'support_name' => 'Drone Training',
                'slug' => Str::slug('Drone Training'),
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
            [
                'support_name' => 'Service After',
                'slug' => Str::slug('Service After'),
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
            [
                'support_name' => 'Certification',
                'slug' => Str::slug('Certification'),
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
            [
                'support_name' => 'Repair Service',
                'slug' => Str::slug('Repair Service'),
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
            ],
            [
                'support_name' => 'Simulation Training',
                'slug' => Str::slug('Simulation Training'),
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
            ],
        ];

        foreach ($supports as $item) {
            Support::create($item);
        }


        $services = [
            [
                'service_name' => 'Government',
                'slug' => Str::slug('Government'),
                'description' => 'Drone inspection makes it possible to access areas that may pose health, safety and environmental risks in a fast and safe way',
                'body' => 'Inspection service using drones has become a popular solution for various industries in recent years. This is because drones can provide quick and efficient inspection services for a variety of applications, such as roof inspections, tower inspections, pipeline inspections, and power line inspections.
                One of the benefits of using drones for inspections is their ability to access hard-to-reach areas safely and quickly. Traditional inspection methods, such as manual inspections or rope access, can be dangerous and time-consuming. Drones, on the other hand, can quickly fly over an area and capture high-resolution images and video footage of the area in question. This allows inspectors to get a close-up view of potential issues, such as cracks, corrosion, or damage, without putting themselves or others in harms way',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],
            [
                'service_name' => 'Environmental',
                'slug' => Str::slug('Environmental'),
                'description' => 'The benefits that drones offer the fields of environmental monitoring and conservation are being realized by an ever-increasing number of researchers, students and environmental engineers. Drones (or UAVs/UAS) offer quick, easy and cost-effective insights, on demand. Their application meanwhile varies widely, from glacial modelling to coastal erosion tracking, species identification and population assessments.',
                'body' => 'Environmental services using drones have become increasingly popular in recent years as a way to monitor and assess various aspects of the environment. Drones equipped with high-resolution cameras, sensors, and other technologies allow for quick and efficient data collection in remote or hard-to-reach areas. This information can be used to assess the health of forests, monitor wildlife populations, track the spread of invasive species, and much more',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],
            [
                'service_name' => 'Medias',
                'slug' => Str::slug('Medias'),
                'description' => 'High quality aerial photography and filming for events  and campaigns',
                'body' => 'Media services using drones have become a popular solution for capturing stunning aerial footage and images. Drones equipped with high-resolution cameras and other technologies provide media companies with a unique perspective on events, landscapes, and people.

                One of the key benefits of using drones for media services is their ability to provide a birds eye view of events and locations. For example, drones can be used to capture aerial footage of sporting events, providing audiences with a unique perspective on the action. They can also be used to capture stunning images of landscapes and cityscapes, providing media companies with the material they need to create engaging content',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'


            ],
            [
                'service_name' => 'Training',
                'slug' => Str::slug('Training'),
                'description' => 'Advanced ground school and flight training for UAS-Multirotor incurrent with best organizational policies  procedures and content for the commercial level RPAS  certification.',
                'body' => 'Drone training services have become increasingly popular as the use of drones continues to grow in various industries. These services provide individuals and organizations with the knowledge and skills they need to operate drones safely and effectively.

                One of the key benefits of drone training services is their ability to provide hands-on experience with flying drones. This is critical for individuals and organizations looking to use drones for business purposes, as it allows them to develop the skills and confidence they need to operate drones safely and effectively',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'


            ],

            [
                'service_name' => 'Maintenance',
                'slug' => Str::slug('Maintenance'),
                'description' => 'Advanced ground school and flight Maintenance for UAS-Multirotor incurrent with best organizational policies  procedures and content for the commercial level RPAS  certification.',
                'body' => 'Drone training services have become increasingly popular as the use of drones continues to grow in various industries. These services provide individuals and organizations with the knowledge and skills they need to operate drones safely and effectively.

                One of the key benefits of drone Maintenance services is their ability to provide hands-on experience with flying drones. This is critical for individuals and organizations looking to use drones for business purposes, as it allows them to develop the skills and confidence they need to operate drones safely and effectively',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'


            ],

            [
                'service_name' => 'Industrial Survey',
                'slug' => Str::slug('Industrial Survey'),
                'description' => 'Advanced ground school and flight Industrial Survey for UAS-Multimotored incurrent with best organizational policies  procedures and content for the commercial level RPAS  certification.',
                'body' => 'Drone training services have become increasingly popular as the use of drones continues to grow in various industries. These services provide individuals and organizations with the knowledge and skills they need to operate drones safely and effectively.

                One of the key benefits of drone Industrial Survey services is their ability to provide hands-on experience with flying drones. This is critical for individuals and organizations looking to use drones for business purposes, as it allows them to develop the skills and confidence they need to operate drones safely and effectively',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'


            ],
        ];

        foreach ($services as $item) {
            Service::create($item);
        }

        $product_category = [
            [
                'category_name' => 'Drones ',
                'slug' => Str::slug('drones'),

            ],
            [
                'category_name' => 'Payloads',
                'slug' => Str::slug('payloads'),

            ],

            [
                'category_name' => 'Inspection Solution',
                'slug' => Str::slug('Inspection Solution'),

            ],
        ];
        foreach ($product_category as $item) {
            ProductCategory::create($item);
        }

        $products = [
            [
                'product_name' => 'DJI Terra',
                'slug' => Str::slug('Zenmuse'),
                'product_category_id' => 2,
                'description' => 'DJI Terra is a PC application software',
                'price' => 12200,
                'product_video' => 'images/products/zenmuse.mp4',
                'body' => 'DJI Terra is a PC application software that mainly relies on 2D orthophotos and 3D model reconstruction, with functions such as 2D multispectral reconstruction, LiDAR point cloud processing, and detailed inspection missions. It is a one- stop solution that delivers unparalleled efficiency to industry users, with comprehensive reconstruction models catering to verticals such as land mapping, power transmission, emergency services, construction, transportation, and agriculture.',

                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],
            [
                'product_name' => 'Matrice 300 RTK',
                'slug' => Str::slug('Matrice'),
                'product_category_id' => 1,
                'description' => 'The Matrice 300 RTK is DJI s latest commercial drone platform that takes inspiration from modern aviation systems. Offering up to 55 minutes of flight time, advanced Al capabilities, 6 Directional Sensing & Positioning and more, the M300 RTK sets a whole new standard by combining intelligence with high-performance and unrivaled reliabilityThe Matrice 300 RTK is DJIs latest commercial drone platform that takes inspiration from modern aviation systems. Offering up to 55 minutes of flight time, advanced Al capabilities, 6 Directional Sensing & Positioning and more, the M300 RTK sets a whole new standard by combining intelligence with high-performance and unrivaled reliability',
                'price' => 13700,
                'product_video' => 'images/products/matrice.mp4',
                'body' => '
                Improved Transmission System
                The all-new OcuSync Enterprise enables transmission up to 15 km away and supports triple-channel3 1080p video. Real-time auto-switching between 2.4 GHz and 5.8 GHz4 enables more reliable flight near high-interference environments, while AES-256 encryption offers secure data transmission.

                Multiple Payload Configurations
                Configure your M300 RTK to fit your mission needs. Mount up to 3 payloads simultaneously, with a maximum payload capacity of 2.7 kg.

                Smart Inspection
                Live Mission Recording
                Record mission actions such as aircraft movement, gimbal orientation, photo shooting, and zoom level to create sample mission files for future automated inspections.


                Smart Inspection
                Live Mission Recording
                Record mission actions such as aircraft movement, gimbal orientation, photo shooting, and zoom level to create sample mission files for future automated inspections.

                AI Spot-Check7
                Automate routine inspections and capture consistent results every time. Onboard AI recognizes the subject of interest and identifies it in subsequent automated missions to ensure consistent framing

                Waypoints 2.0
                Create up to 65,535 waypoints and set multiple actions for one or more payloads, including 3rd party ones, at each waypoint. Flightpath planning is also optimized to maximize flexibility and efficiency for your missions.
                ',

                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],
            [
                'product_name' => 'DJI GS Pro',
                'slug' => Str::slug('DJIGS'),
                'product_category_id' => 1,
                'description' => 'DJI GS Pro (Ground Station Pro) is an iPad app for drone operations',
                'price' => 13700,
                'product_video' => 'images/default/default.mp4',
                'body' => 'DJI GS Pro (Ground Station Pro) is an iPad app for drone operations to help you plan automated flights, manage flight data on
                the cloud, and collaborate across
                projects to efficiently run your drone program.
                ',

                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],
            [
                'product_name' => 'FlightHub 2',
                'slug' => Str::slug('FlightHub'),
                'product_category_id' => 1,
                'product_video' => 'images/default/default.mp4',

                'description' => 'FlightHub 2 is an all-in-one cloud- based drone operations',                'price' => 13700,
                'body' => 'FlightHub 2 is an all-in-one cloud-based drone operations management platform that helps you achieve comprehensive',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],

            [

                'product_name' => 'VTOL-FX M',
                'product_category_id' => 2,
                'slug' => Str::slug('VTOL'),
                'product_image' => 'images/products/default.png',
                'description' => 'Medium size VTOL',
                'price' => 1700,

                'product_video' => 'images/default/default.mp4',
                'body' => 'Medium size VTOL system capable of performing mapping and surveillance missions with up to 3 simultaneous cameras. It’s a flexible system than can be also adapted to perform real time surveillance, inspection or delivery applications.',

                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'


            ],

            [

                'product_name' => 'Atmos-8 Light',
                'product_category_id' => 2,
                'slug' => Str::slug('Atmos'),

                'product_image' => 'images/products/default.png',
                'description' => 'Low weight and portable',
                'price' =>1200 ,
                'product_video' => 'images/default/default.mp4',

                'body' => 'Low weight and portable fixed-wing designed and prepared for mapping missions with one camera. Best option if looking for a light-weight and affordable platform
',

                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ]



        ];

        foreach ($products as $item) {
            Product::create($item);
        }


        $industries = [
            [
                'industry_name' => 'Government',
                'slug' => Str::slug('Government'),
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
            [
                'industry_name' => 'Agriculture',
                'slug' => Str::slug('Agriculture'),
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],
            [
                'industry_name' => 'Energy',
                'slug' => Str::slug('Energy'),
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
            [
                'industry_name' => 'Public Safety',
                'slug' => Str::slug('Public Safety'),
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'
            ],
        ];


        foreach ($industries as $item) {
            Industry::create($item);
        }

        $course_category = [
            [
                'category_name' => 'Commercial ',
            ],
            [
                'category_name' => 'Recrational',
            ],
        ];

        foreach ($course_category as $item) {
            CourseCategory::create($item);
        }

        $courses = [    

            [

                'course_category_id' => 1,
                'course_name' => 'Drone Pilot Test Prep 107',
                'slug' => Str::slug('DronePilot'),
                'course_image' => 'images/products/default.png',
                'course_detail' => 'Coordination with airport towers for landing and take off',
                'price' => '2000',
                'start_date' => '2023-04-10',
                'end_date' => '2023-09-10',
                'strength' => '14',
                'course_type' => 'Physical',
                'price' => '2000',
                'body' => 'It includes:

                Laws and regulations

                restricted areas

                Read maps

                Coordination with airport towers for landing and take off

                Weather factors

                Radio communication

                Pre-flight steps

                Aircraft registration on the platform

                Theoretical training of test questions

                Risk management for drones

                Obtaining operational permits

                theoretical training only',
                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],


        ];

        foreach ($courses as $item) {
            Course::create($item);
        }

        $software = [

            [

                'software_name' => 'DJI Terra',
                'slug' => Str::slug('Terra'),
                'description' => 'DJI Terra is a PC application software',
                'body' => 'DJI Terra is a PC application software that mainly relies on 2D orthophotos and 3D model reconstruction, with functions such as 2D multispectral reconstruction, LiDAR point cloud processing, and detailed inspection missions. It is a one- stop solution that delivers unparalleled efficiency to industry users, with comprehensive reconstruction models catering to verticals such as land mapping, power transmission, emergency services, construction, transportation, and agriculture.',

                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],

            [

                'software_name' => 'DJI GS Pro',
                'slug' => Str::slug('DJIPro'),
                'description' => 'DJI GS Pro (Ground Station Pro) is an iPad app for drone operations',
                'body' => 'DJI GS Pro (Ground Station Pro) is an iPad app for drone operations to help you plan automated flights, manage flight data on
                the cloud, and collaborate across
                projects to efficiently run your drone program
                ',

                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],

            [

                'software_name' => 'FlightHub 2',
                'slug' => Str::slug('FlightHub'),
                'description' => 'FlightHub 2 is an all-in-one cloud- based drone operations',
                'body' => 'FlightHub 2 is an all-in-one cloud- based drone operations management platform that helps you achieve comprehensive',

                'meta_keyword' => ['Lorem', 'Ipsum'],
                'meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s'

            ],
        ];


        foreach ($software as $item) {
            Software::create($item);
        }

        $academy_slider = [

            [
                'title' => 'IBN FIRNAS ACADEMY',
                'slug' => Str::slug('ACADEMY'),
                'slider_image' => 'images/slider_image/academy.jpg',
                'btn_link' => '/contact',
                'btn_text' => 'Get Connected'
            ],

            [
                'title' => 'IBN FIRNAS Courses',
                'slug' => Str::slug('Courses'),
                'slider_image' => 'images/slider_image/academy2.jpg',
                'btn_link' => '/about',
                'btn_text' => 'Explore More About Us'
            ],


        ];

        foreach ($academy_slider as $item) {
            AcademySlider::create($item);
        }

        $home_slider = [


            [
                'slug' => 'slide-1',
                'slider_video' => 'images/slider_video/home1.mp4',
            ],

            [
                'slug' => 'slide-12',
                'slider_video' => 'images/slider_video/home2.mp4',
            ]

        ];

        foreach($home_slider as $item){
            HomeSlider::create($item);
        }

        $pages = [
            [
                'page_name' => 'Index',
                'slug' => 'index',
                'meta_keyword' => ['Index'],
                'meta_description' => 'This is Landing Page',
                'default' => true,
            ],
            [
                'page_name' => 'About',
                'slug' => 'about',
                'meta_keyword' => ['About'],
                'meta_description' => 'This is About Page',
                'default' => true,
            ],
            [
                'page_name' => 'Contact',
                'slug' => 'contact',
                'meta_keyword' => ['Contact'],
                'meta_description' => 'This is Contact Page',
                'default' => true,
            ],
        ];

        foreach ($pages as $item) {
            Page::create($item);
        }

        $sections = [
            [
                'page_id' => 1,
                'section_name' => 'Slider Section',
                'slug' => 'slider-section',
                'section_heading' => null,
                'section_description' => null,
                'body' => null,
                'order_no' => 1,
                'active' => true,
            ],
            [
                'page_id' => 1,
                'section_name' => 'Service Section',
                'slug' => 'service-section',
                'section_heading' => 'Services',
                'section_description' => 'What we do',
                'body' => null,
                'order_no' => 2,
                'active' => true,
            ],
            [
                'page_id' => 1,
                'section_name' => 'Product Section',
                'slug' => 'product-section',
                'section_heading' => 'Product',
                'section_description' => 'What we offer',
                'body' => null,
                'order_no' => 3,
                'active' => true,
            ],
            [
                'page_id' => 1,
                'section_name' => 'Blog Section',
                'slug' => 'blog-section',
                'section_heading' => 'Blogs',
                'section_description' => 'Our Latest Blogs',
                'body' => null,
                'order_no' => 4,
                'active' => false,
            ],
            [
                'page_id' => 1,
                'section_name' => 'Team Section',
                'slug' => 'team-section',
                'section_heading' => 'Team',
                'section_description' => null,
                'body' => null,
                'order_no' => 5,
                'active' => true,
            ],
        ];

        foreach ($sections as $item) {
            PageSection::create($item);
        }

        $languages = [
            [
                'language_name' => 'English',
                'slug' => 'english',
            ],
            [
                'language_name' => 'Spanish',
                'slug' => 'spanish',
            ],
            [
                'language_name' => 'French',
                'slug' => 'french',
            ],
            [
                'language_name' => 'Russian',
                'slug' => 'russian',
            ],
        ];

        foreach ($languages as $item) {
            Language::create($item);
        }

        SiteContent::create([
            'site_name' => 'Firnas',
            'site_description' => 'Firnas Description',
        ]);

        Menu::create([
            'menu_name' => 'Primary Menu',
            'slug' => 'primary-menu',
            'default' => true,
        ]);


        $customer = Customer::create([
            'first_name' => 'Abdul',
            'last_name' => 'Rauf',
            'user_name' => 'Abdul Rauf',
            'slug' => 'abdul-rauf',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
