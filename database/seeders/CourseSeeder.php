<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 新宿駅
        Course::create([
            'course_id' => 101,
            'place_id' => 1,
            'name' => '新宿御苑',
            'url' =>
            'https://goo.gl/maps/aNbMisMbh6mekNhT7',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3240.5412316894726!2d139.70311745123863!3d35.688296687093775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z44CSMTYwLTAwMjIg5p2x5Lqs6YO95paw5a6_5Yy65paw5a6_77yT5LiB55uu77yT77yY4oiS77yRIOaWsOWuv-mnhQ!3m2!1d35.6896067!2d139.7005713!4m5!1s0x60188cc21b93233f%3A0x6a1eb1b5a117f287!2z5p2x5Lqs6YO95paw5a6_5Yy65YaF6Jek55S677yR77yRIOaWsOWuv-W-oeiLkQ!3m2!1d35.685176299999995!2d139.71005169999998!5e0!3m2!1sja!2sjp!4v1660841768178!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 102,
            'place_id' => 1,
            'name' => 'ナンジャタウン',
            'url' =>
            'https://goo.gl/maps/deSGupm3mPzRtXJZA',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d25920.039803226773!2d139.71585230984724!3d35.701495176314666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z44CSMTYwLTAwMjIg5p2x5Lqs6YO95paw5a6_5Yy65paw5a6_77yT5LiB55uu77yT77yY4oiS77yRIOaWsOWuv-mnhQ!3m2!1d35.6896067!2d139.7005713!4m5!1s0x60188d6e467eeeb9%3A0x3a7442a32bebbcc0!2z5p2x5Lqs6YO96LGK5bO25Yy65p2x5rGg6KKL77yT5LiB55uu77yR4oiS77yTIOODiuODs-OCuOODo-OCv-OCpuODsw!3m2!1d35.7287104!2d139.719929!5e0!3m2!1sja!2sjp!4v1660842467999!5m2!1sja!2sjp'
            ,
            'outside_flg' => 0,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 103,
            'place_id' => 1,
            'name' => 'レインボーブリッジ',
            'url' =>
            'https://goo.gl/maps/8vujtoFS6jHUJEjo6',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d25932.46584451169!2d139.70958655980272!3d35.66325439359538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5p2x5Lqs6YO95paw5a6_5Yy65paw5a6_77yT5LiB55uu77yT77yYIEpSIOaWsOWuv-mnhSDmlrDlrr_pp4U!3m2!1d35.6896067!2d139.7005713!4m5!1s0x60188a309545656d%3A0x20fcbb1fa37a99af!2z5p2x5Lqs6YO95riv5Yy65rW35bK477yT5LiB55uuIOODrOOCpOODs-ODnOODvOODluODquODg-OCuA!3m2!1d35.6365639!2d139.7631443!5e0!3m2!1sja!2sjp!4v1660842812122!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 1,
        ]);
        // 横浜駅
        Course::create([
            'course_id' => 201,
            'place_id' => 2,
            'name' => '臨港パーク',
            'url' =>
            'https://goo.gl/maps/FvqzzietAUxtqMvR7',
            'gmap_url' =>
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6499.246562029316!2d139.625088198887!3d35.46411975902018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x60185c0df6cfd2f1%3A0xbbbca6f36b5235f5!2z44CSMjIwLTAwMTEg56We5aWI5bed55yM5qiq5rWc5biC6KW_5Yy66auY5bO277yS5LiB55uuIOaoqua1nOmnhQ!3m2!1d35.4659811!2d139.622062!4m5!1s0x60185c44dd3dcdbd%3A0x29a979a1e4c8e71c!2z56We5aWI5bed55yM5qiq5rWc5biC6KW_5Yy644G_44Gq44Go44G_44KJ44GE77yR5LiB55uu77yR4oiS5YWIIOiHqOa4r-ODkeODvOOCrw!3m2!1d35.461087!2d139.6368906!5e0!3m2!1sja!2sjp!4v1660843036730!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 202,
            'place_id' => 2,
            'name' => '横浜ランドマークタワー',
            'url' =>
            'https://goo.gl/maps/S51FNFzzaprGXh9s7',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6499.494338229832!2d139.62233584888685!3d35.46105325935609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x60185c0df6cfd2f1%3A0xbbbca6f36b5235f5!2z44CSMjIwLTAwMTEg56We5aWI5bed55yM5qiq5rWc5biC6KW_5Yy66auY5bO277yS5LiB55uuIOaoqua1nOmnhQ!3m2!1d35.4659811!2d139.622062!4m5!1s0x60185c5d7366a111%3A0x3661ef0a3534c8c7!2z5qiq5rWc44Op44Oz44OJ44Oe44O844Kv44K_44Ov44O8!3m2!1d35.454954!2d139.6313859!5e0!3m2!1sja!2sjp!4v1660843224428!5m2!1sja!2sjp'
            ,
            'outside_flg' => 0,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 203,
            'place_id' => 2,
            'name' => '横浜ベイブリッジ',
            'url' =>
            'https://goo.gl/maps/gKibLpwCcX9kyxd2A',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d13000.176719107898!2d139.6390215834414!3d35.45370066155951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x60185c0df6cfd2f1%3A0xbbbca6f36b5235f5!2z44CSMjIwLTAwMTEg56We5aWI5bed55yM5qiq5rWc5biC6KW_5Yy66auY5bO277yS5LiB55uuIOaoqua1nOmnhQ!3m2!1d35.4659811!2d139.622062!4m5!1s0x60185d51411bab4d%3A0x5e01dd915b954e3c!2z56We5aWI5bed55yM5qiq5rWc5biC5Lit5Yy65pys54mn44G16aCtIOaoqua1nOODmeOCpOODluODquODg-OCuA!3m2!1d35.4539493!2d139.67353359999998!5e0!3m2!1sja!2sjp!4v1660843328687!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 1,
        ]);
        // 藤沢
        Course::create([
            'course_id' => 301,
            'place_id' => 3,
            'name' => '江ノ島',
            'url' =>
            'https://goo.gl/maps/kYuuqAKwxSUZUsCB8',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d26043.67356969588!2d139.46130959003818!3d35.319416937916465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x60184fcad532942d%3A0x83bd847775c8252d!2z56We5aWI5bed55yM6Jek5rKi5biC6Jek5rKiIOODq-ODn-ODjeiXpOayouW6lyDol6TmsqLpp4U!3m2!1d35.3388984!2d139.4874695!4m5!1s0x60184ee69f0397eb%3A0xfaa059f57b5b0216!2z44CSMjUxLTAwMzYg56We5aWI5bed55yM6Jek5rKi5biC5rGf44Gu5bO277yR5LiB55uu77yZIOaxn-OBruWztg!3m2!1d35.3000228!2d139.4807831!5e0!3m2!1sja!2sjp!4v1661001966084!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 302,
            'place_id' => 3,
            'name' => 'テラスモール湘南',
            'url' =>
            'https://goo.gl/maps/ycGwDofDL1ueHNpL9',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d26037.73840546541!2d139.44927574007255!3d35.337840987631516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x60184fcad532942d%3A0x83bd847775c8252d!2z56We5aWI5bed55yM6Jek5rKi5biC6Jek5rKiIOODq-ODn-ODjeiXpOayouW6lyDol6TmsqLpp4U!3m2!1d35.3388984!2d139.4874695!4m5!1s0x601851ff8c0eedb3%3A0x819bb3b6b9fd9523!2z44CSMjUxLTAwNDEg56We5aWI5bed55yM6Jek5rKi5biC6L675aCC56We5Y-w77yR5LiB55uu77yT4oiS77yRIOODhuODqeOCueODouODvOODq-a5mOWNlw!3m2!1d35.338553499999996!2d139.4461012!5e0!3m2!1sja!2sjp!4v1661002444942!5m2!1sja!2sjp'
            ,
            'outside_flg' => 0,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 303,
            'place_id' => 3,
            'name' => '茅ヶ崎里山公園',
            'url' =>
            'https://goo.gl/maps/H4go6SAERaM9sfxG9',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d26031.574152539855!2d139.43527734010817!3d35.35696733733625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x60184fcad532942d%3A0x83bd847775c8252d!2z56We5aWI5bed55yM6Jek5rKi5biC6Jek5rKiIOODq-ODn-ODjeiXpOayouW6lyDol6TmsqLpp4U!3m2!1d35.3388984!2d139.4874695!4m5!1s0x601853b985bdb1e5%3A0xd2f9c0ae4e1ecbba!2z44CSMjUzLTAwMDgg56We5aWI5bed55yM6IyF44O25bSO5biC6Iq55rKi77yR77yQ77yT77yQIOiMheODtuW0jumHjOWxseWFrOWckg!3m2!1d35.376729999999995!2d139.4178269!5e0!3m2!1sja!2sjp!4v1661002663384!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 1,
        ]);
        // 秩父駅
        Course::create([
            'course_id' => 401,
            'place_id' => 4,
            'name' => '秩父今宮神社',
            'url' =>
            'https://goo.gl/maps/PNdGWSqJofwF79j49',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3227.97915488635!2d139.08091471512742!3d35.99637593012206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x601ec9794b57ee55%3A0xa1feb55e27a6463c!2z5Z-8546J55yM56ep54i25biC5a6u5YG055S677yRIOenqeeItumnhQ!3m2!1d35.9988242!2d139.0860611!4m5!1s0x601ec981b96fabeb%3A0x8700bbe72883b086!2z44CSMzY4LTAwNDMg5Z-8546J55yM56ep54i25biC5Lit55S677yR77yW4oiS77yR77yQIOenqeeItuS7iuWuruelnuekvg!3m2!1d35.9949708!2d139.0800645!5e0!3m2!1sja!2sjp!4v1661003052498!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 402,
            'place_id' => 4,
            'name' => '西武秩父駅前温泉祭の湯',
            'url' =>
            'https://goo.gl/maps/F3oL2Lf9TWwTqwQR9',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6456.115434400741!2d139.08077432562197!3d35.99445632048957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x601ec9794b57ee55%3A0xa1feb55e27a6463c!2z5Z-8546J55yM56ep54i25biC5a6u5YG055S677yRIOenqeeItumnhQ!3m2!1d35.9988242!2d139.0860611!4m5!1s0x601ecbd4f29bfff3%3A0x5137dc7dc1bb8b28!2z5Z-8546J55yM56ep54i25biC6YeO5Z2C55S677yR5LiB55uu77yR77yW4oiS77yR77yVIOilv-atpuenqeeItumnheWJjea4qeaziSDnpa3jga7mua8!3m2!1d35.990536399999996!2d139.0838292!5e0!3m2!1sja!2sjp!4v1661003410055!5m2!1sja!2sjp'
            ,
            'outside_flg' => 0,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 403,
            'place_id' => 4,
            'name' => '秩父ふるさと村',
            'url' =>
            'https://goo.gl/maps/gmQctiTfvYREFeBT8',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51634.713807419175!2d139.02978358631663!3d36.01615130993365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x601ec9794b57ee55%3A0xa1feb55e27a6463c!2z5Z-8546J55yM56ep54i25biC5a6u5YG055S677yRIOenqeeItumnhQ!3m2!1d35.9988242!2d139.0860611!4m5!1s0x601ec82a64b005b1%3A0x1143876d09740fb!2z56ep54i244G144KL44GV44Go5p2R44CB44CSMzY4LTAxMDIg5Z-8546J55yM56ep54i26YOh5bCP6bm_6YeO55S66ZW355WZ77yS77yS77yQ!3m2!1d36.015076799999996!2d139.0420045!5e0!3m2!1sja!2sjp!4v1661003756438!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 1,
        ]);
        // 千葉駅
        Course::create([
            'course_id' => 501,
            'place_id' => 5,
            'name' => '千葉市動物公園',
            'url' =>
            'https://goo.gl/maps/17GhD1MJQmhDRsZ5A',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d25943.242221977616!2d140.11222104061898!3d35.63006158318186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x602284b08e5183bd%3A0xe19a77ea5e06411c!2z5Y2D6JGJ6aeF44CB44CSMjYwLTAwMzEg5Y2D6JGJ55yM5Y2D6JGJ5biC5Lit5aSu5Yy65paw5Y2D6JGJ77yR5LiB55uu77yR!3m2!1d35.6131339!2d140.1133591!4m5!1s0x6022845f05e1a36d%3A0xcdc21143bd25f4a9!2z5Y2D6JGJ55yM5Y2D6JGJ5biC6Iul6JGJ5Yy65rqQ55S6Mjgw55Wq5ZywIOWNg-iRieW4guWLleeJqeWFrOWckg!3m2!1d35.6448994!2d140.12727859999998!5e0!3m2!1sja!2sjp!4v1661004324792!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 502,
            'place_id' => 5,
            'name' => '幕張メッセ',
            'url' =>
            'https://goo.gl/maps/s31F1m8PRfxfxPM5A',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51896.02287842429!2d140.04778878327275!3d35.61536313352354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x602284b08e5183bd%3A0xe19a77ea5e06411c!2z5Y2D6JGJ6aeF44CB44CSMjYwLTAwMzEg5Y2D6JGJ55yM5Y2D6JGJ5biC5Lit5aSu5Yy65paw5Y2D6JGJ77yR5LiB55uu77yR!3m2!1d35.6131339!2d140.1133591!4m5!1s0x6022821fd52ebfdf%3A0xcec0c09c4bed45e0!2z5Y2D6JGJ55yM5Y2D6JGJ5biC576O5rWc5Yy65Lit54Cs77yS5LiB55uu77yRIOW5leW8teODoeODg-OCuw!3m2!1d35.648199999999996!2d140.0346703!5e0!3m2!1sja!2sjp!4v1661004382283!5m2!1sja!2sjp'
            ,
            'outside_flg' => 0,
            'car_flg' => 0,
        ]);
        Course::create([
            'course_id' => 503,
            'place_id' => 5,
            'name' => 'ドラゴンファーム',
            'url' =>
            'https://goo.gl/maps/LGjHSJpRNqLDGRCJA',
            'gmap_url' => 
            'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d25944.79798734401!2d140.13310009060996!3d35.6252673832538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x602284b08e5183bd%3A0xe19a77ea5e06411c!2z5Y2D6JGJ6aeF44CB44CSMjYwLTAwMzEg5Y2D6JGJ55yM5Y2D6JGJ5biC5Lit5aSu5Yy65paw5Y2D6JGJ77yR5LiB55uu77yR!3m2!1d35.6131339!2d140.1133591!4m5!1s0x60228ffea58c055f%3A0xe65d378c6ae3d6fa!2z44CSMjY0LTAwMDcg5Y2D6JGJ55yM5Y2D6JGJ5biC6Iul6JGJ5Yy65bCP5YCJ55S677yR77yT77yV77yUIOODieODqeOCtOODs-ODleOCoeODvOODoA!3m2!1d35.6373331!2d140.18786029999998!5e0!3m2!1sja!2sjp!4v1661004007123!5m2!1sja!2sjp'
            ,
            'outside_flg' => 1,
            'car_flg' => 1,
        ]);
    }
}
