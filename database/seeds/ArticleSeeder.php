<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'user_id' => 2,
                'category_id' => 1,
                'title' => "Pantai Kuta, Bali",
                'description' => "Pantai Kuta adalah sebuah tempat pariwisata yang terletak kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach) sebagai lawan dari pantai Sanur. Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta.",
                'image' => "images/article/324e8619-0b5f-4b9c-af81-c5e3fb236376.jpg",
            ],
            [
                'user_id' => 3,
                'category_id' => 2,
                'title' => "Gunung Raung",
                'description' => "Gunung Raung (puncak tertinggi: 3.344 mdpl) adalah gunung berapi kerucut yang terletak di ujung timur Pulau Jawa, Indonesia. Secara administratif, kawasan gunung ini termasuk dalam wilayah tiga kabupaten di wilayah Besuki, Jawa Timur, yaitu Banyuwangi, Bondowoso, dan Jember. Secara geografis, lokasi gunung ini berada dalam kawasan kompleks Pegunungan Ijen dan menjadi puncak tertinggi dari gugusan pegunungan tersebut. Dihitung dari titik tertinggi, Gunung Raung merupakan gunung tertinggi ketiga di Jawa Timur setelah Gunung Semeru dan Gunung Arjuno, serta menjadi yang tertinggi keempat di Pulau Jawa. Kaldera Gunung Raung juga merupakan kaldera kering yang terbesar di Pulau Jawa dan terbesar kedua di Indonesia setelah Gunung Tambora di Nusa Tenggara Barat. Terdapat empat titik puncak, yaitu Puncak Bendera, Puncak 17/Puncak Bendera (3159 mdpl), Puncak Tusuk Gigi,(3300 mdpl) dan, yang tertinggi, adalah Puncak Sejati (3.344 mdpl).",
                'image' => "images/article/e952b032-16c8-46dc-b81a-b866a4453ca0.jpg",
            ],
        ]);
    }
}
