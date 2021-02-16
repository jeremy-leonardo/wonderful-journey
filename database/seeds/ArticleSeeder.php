<?php

use Carbon\Carbon;
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'category_id' => 2,
                'title' => "Gunung Raung",
                'description' => "Gunung Raung (puncak tertinggi: 3.344 mdpl) adalah gunung berapi kerucut yang terletak di ujung timur Pulau Jawa, Indonesia. Secara administratif, kawasan gunung ini termasuk dalam wilayah tiga kabupaten di wilayah Besuki, Jawa Timur, yaitu Banyuwangi, Bondowoso, dan Jember. Secara geografis, lokasi gunung ini berada dalam kawasan kompleks Pegunungan Ijen dan menjadi puncak tertinggi dari gugusan pegunungan tersebut. Dihitung dari titik tertinggi, Gunung Raung merupakan gunung tertinggi ketiga di Jawa Timur setelah Gunung Semeru dan Gunung Arjuno, serta menjadi yang tertinggi keempat di Pulau Jawa. Kaldera Gunung Raung juga merupakan kaldera kering yang terbesar di Pulau Jawa dan terbesar kedua di Indonesia setelah Gunung Tambora di Nusa Tenggara Barat. Terdapat empat titik puncak, yaitu Puncak Bendera, Puncak 17/Puncak Bendera (3159 mdpl), Puncak Tusuk Gigi,(3300 mdpl) dan, yang tertinggi, adalah Puncak Sejati (3.344 mdpl).",
                'image' => "images/article/e952b032-16c8-46dc-b81a-b866a4453ca0.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'category_id' => 2,
                'title' => "Gunung Tambora",
                'description' => "Gunung Tambora (atau Tomboro) adalah sebuah gunung berapi kerucut aktif yang terletak di Pulau Sumbawa, Nusa Tenggara Barat, Indonesia. Gunung ini terletak di dua kabupaten yaitu Kabupaten Dompu yang mencakup lereng bagian barat dan selatan serta Kabupaten Bima yang mencakup lereng bagian timur dan utara. Gunung Tambora terbentuk akibat zona subduksi aktif di bawahnya. Pada masa lampau, ketinggian Gunung Tambora mencapai sekitar 4.300 m yang membuat gunung ini menjadi salah satu puncak tertinggi di Indonesia dahulu.",
                'image' => "images/article/b523c968-e4ec-4779-8339-bc1bb7691021.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'category_id' => 1,
                'title' => "Pantai Pangandaran",
                'description' => "Pantai Pangandaran merupakan sebuah objek wisata andalan Kabupaten Pangandaran (pemekaran dari Kabupaten Ciamis) yang terletak di sebelah tenggara Jawa Barat, tepatnya di Desa Pangandaran dan Pananjung, sekitar 222 km dari selatan Bandung, Kecamatan Pangandaran, Kabupaten Pangandaran, Provinsi Jawa Barat.",
                'image' => "images/article/5f2ade88-fe10-4f54-89fd-fbb64082bff6.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'category_id' => 1,
                'title' => "Pantai Klayar",
                'description' => "Pantai Klayar adalah sebuah pantai dengan pasir putih dan batu karang serta tebing-tebing batu yang mengelilingi. Pantai ini terletak di Pacitan, Jawa Timur dan berbatasan dengan Wonogiri, Jawa Tengah. Tepatnya berada di Desa Sendang, Kecamatan Donorojo, Kabupaten Pacitan, Provinsi Jawa Timur. Jaraknya sekitar 40 kilometer ke arah barat dari kota Pacitan. Pantai ini masih segaris dengan Pantai Teleng Ria yang sudah dikelola sebagai tempat wisata terlebih dahulu.",
                'image' => "images/article/ac26cc13-1069-4236-8d2c-3f9ac26c67f4.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'category_id' => 2,
                'title' => "Gunung Sinabung",
                'description' => "Gunung Sinabung (bahasa Karo: Deleng Sinabung) adalah gunung api di Dataran Tinggi Karo, Kabupaten Karo, Sumatra Utara, Indonesia. Sinabung bersama Gunung Sibayak di dekatnya adalah dua gunung berapi aktif di Sumatra Utara dan menjadi puncak tertinggi ke 2 di provinsi itu. Ketinggian gunung ini adalah 2.460 meter",
                'image' => "images/article/f6893d4f-e20a-4532-8194-3dd0113da643.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'category_id' => 2,
                'title' => "Gunung Agung",
                'description' => "Gunung Agung adalah gunung tertinggi di pulau Bali dengan ketinggian 3.031 mdpl. Gunung ini terletak di kecamatan Rendang, Kabupaten Karangasem, Bali, Indonesia. Pura Besakih, yang merupakan salah satu Pura terpenting di Bali, terletak di lereng gunung ini. Gunung Agung adalah gunung berapi tipe stratovolcano, gunung ini memiliki kawah yang sangat besar dan sangat dalam yang kadang-kadang mengeluarkan asap dan uap air. Dari Pura Besakih gunung ini tampak dengan kerucut runcing sempurna, tetapi sebenarnya puncak gunung ini memanjang dan berakhir pada kawah yang melingkar dan lebar.",
                'image' => "images/article/c67de97b-f1b0-4070-b4fc-def1bd7951ae.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
