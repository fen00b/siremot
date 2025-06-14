-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 05:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_sidakam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_opsi`
--

CREATE TABLE `tb_opsi` (
  `id_opsi` varchar(16) NOT NULL,
  `id_p` varchar(16) NOT NULL,
  `jawaban` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_opsi`
--

INSERT INTO `tb_opsi` (`id_opsi`, `id_p`, `jawaban`) VALUES
('j1', 'p6', 'Sebagai alat transportasi sehari hari (hanya dari rumah ke tujuan dan sebaliknya)\r\n'),
('j10', 'p8', 'Mencakup semua medan'),
('j2', 'p6', 'Sebagai alat utama dalam pekerjaan yang sangat sering digunakan (ojek, kurir, pedagang, dll)\r\n'),
('j3', 'p6', 'Hobi, hanya di gunakan pada waktu tertentu\r\n'),
('j4', 'p7', 'Cenderung rata ( cth : Dataran rendah, Perkotaan)\r\n'),
('j5', 'p7', 'Tanjakan Sedang (cth : Perbukitan)\r\n'),
('j6', 'p7', 'Tanjakan Curam (cth : Pegunungan, Perbukitan dengan tanjakan terjal)\r\n'),
('j7', 'p8', 'Aspal/beton\r\n'),
('j8', 'p8', 'Berbatu\r\n'),
('j9', 'p8', 'Tanah\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pert`
--

CREATE TABLE `tb_pert` (
  `id_p` varchar(16) NOT NULL,
  `pertanyaan` text NOT NULL,
  `def_0` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pert`
--

INSERT INTO `tb_pert` (`id_p`, `pertanyaan`, `def_0`) VALUES
('p10', 'Apakah anda sering melewati jalan dengan kondisi seperti ini? (Jalan Berbatu/Sudah aspal namun rusak parah)', 'p10.png'),
('p11', 'Apakah anda sering melewati jalan dengan kondisi seperti ini? (Tidak berbatu, Tidak beraspal)', 'p11.png'),
('p6', 'Untuk apa anda menggunakan sepeda motor?', '0'),
('p7', 'Bagaimana kontur daerah/jalan yang sering anda lewati?', '0'),
('p8', 'Bagaimana kondisi jalan yang sering anda lewati?', '0'),
('p9', 'Apakah anda sering melewati jalan dengan kondisi seperti ini? (Jalan sudah diaspal/beton)\r\n\r\n', 'p9.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spek`
--

CREATE TABLE `tb_spek` (
  `id` varchar(16) NOT NULL,
  `manufaktur` varchar(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `harga` int(32) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `jenis_detail` varchar(64) NOT NULL,
  `replacement` float NOT NULL,
  `transmisi` text NOT NULL,
  `tank_size` float NOT NULL,
  `bagasi_size` float NOT NULL,
  `other` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_spek`
--

INSERT INTO `tb_spek` (`id`, `manufaktur`, `nama`, `harga`, `jenis`, `jenis_detail`, `replacement`, `transmisi`, `tank_size`, `bagasi_size`, `other`, `image`, `deskripsi`) VALUES
('mtr0', 'Honda', 'BeAT', 17820000, 'skuter', 'Scooter', 109, 'CVT', 4, 12, 'Power Socket', 'honda/beat.jpg', 'Produk ini dikembangkan dengan memperhatikan 3 hal yakni ukuran, gaya dan fitur. Ukuran yang ramping, bentuk yang meruncing dan performa yang unggul membuat Honda BeAT ini cocok untuk pemakaian sehari hari. Motor ini didesain ulang dengan kesan agresif dan modern. Penggunaan velg dengan desain baru juga membuat tampilannya lebih tajam. Dari sisi teknologi juga berbagai teknologi tambahan disematkan untuk memberikan nilai lebih bagi pemilik Honda BeAT eSP.'),
('mtr1', 'Honda', 'Beat Street', 18476000, 'skuter', 'Scooter', 109, 'CVT', 4, 12, 'Power Socket', 'honda/beat-st.png', 'Merupakan varian lain dari Honda BeAT. Produk ini dikembangkan dengan memperhatikan 3 hal yakni ukuran, gaya dan fitur. Ukuran yang ramping, bentuk yang meruncing dan performa yang unggul membuat Honda BeAT ini cocok untuk pemakaian sehari hari. Motor ini didesain ulang dengan kesan agresif dan modern. Penggunaan velg dengan desain baru juga membuat tampilannya lebih tajam. Dari sisi teknologi juga berbagai teknologi tambahan disematkan untuk memberikan nilai lebih bagi pemilik Honda BeAT eSP.'),
('mtr10', 'Honda', 'CB 150 Verza', 20655000, 'naked', 'Naked', 149, 'Manual', 12, 1, '', 'honda/cb-150-verza.png', 'Generasi kedua dari Honda Verza yang kini menjadi All New CB150 Verza, hadir dengan desain bodi baru berkonsep tangguh dan maskulin namun tetap kompak. Pilihan warna stripe yang minimalis semakin memperkuat karakter desain bodi yang diusung. Model ini kini dilengkapi lampu depan berbentuk bulat yang memberi kesan modern dan tak lekang oleh waktu. All New Honda CB150 Verza tetap mengusung mesin 150cc berpendingin udara yang tangguh, responsif, efisien, serta ramah lingkungan untuk kebutuhan sehari-hari baik untuk berkendara jarak dekat maupun jarak jauh.'),
('mtr11', 'Honda', 'Sonic 150R', 24332000, 'bebek', 'Cub-Ayago', 149, 'Manual', 4, 1, '', 'honda/sonic-150.png', 'Untuk Sonic dikhususkan untuk dalam kota. Jadi torsinya diset ulang jadi sesuai karakter dalam kota – Yoshiyuki Horii, Large Project Leader Sonic 150R dari Honda R&D Co., Ltd. Motorcycle R&D Center.'),
('mtr12', 'Honda', 'CB150R', 30311000, 'naked', 'Naked', 149, 'Manual', 12, 1, '', 'honda/cb150r.png', 'CB150R dikembangkan dengan konsep motornakedterdepan di kelasnya. Kami mengembangkan motor ini dengan karakter di semua medan dari low speed sampai high speed. <br> Dengan teknologi yang amat superior ini, Honda CB150R StreetFire dapat mencapai kecepatan maksimum 125 km/jam serta akselerasi 10,5 detik untuk menempuh jarak 0-200 meter. <br> Untuk memenuhi keinginan pengguna motorsportyang senang memodifikasi kendaraannya, Honda CB150R StreetFire ini menggunakan new innovative Truss Frame dan sudah didesain untuk mudah dimodifikasi. Rangka Honda CB150R ini juga didesain untuk mengurangi getaran mesin secara optimal, sehingga menghasilkan kestabilan, kelincahan dan kenyamanan selama berkendara.'),
('mtr13', 'Honda', 'CB150X', 33660000, 'trail-adv', 'Sport-Adventure', 149, 'Manual', 12, 1, '', 'honda/cb150x.png', 'New CB150X hadir dengan desain adventure touring dan nuansa tampilan big bike, posisi berkendara yang nyaman, serta beragam fitur canggih yang mampu memberikan performa berkendara yang optimal. Dibekali mesin 150cc DOHC berpendingin cairan, model ini menyuguhkan performa responsif dan sensasi ketangguhan berpetualang ketika berkendara sehari-hari ataupun turing jarak jauh.'),
('mtr14', 'Honda', 'CRF150L', 35384000, 'trail-adv', 'Trail', 149, 'Manual', 7, 1, '', 'honda/crf150l.png', 'Dengan mengusung konsep terbaru yaitu “Take You to Off Fun Ride” All New Honda CRF150L hadir melalui penyematan desain terbaru, fitur unggulan baru dan mesin baru yang nyaman digunakan untuk berkendara di jalan raya dan menaklukan berbagai rintangan. Ketangguhan All New Honda CRF150L dicapai berkat penyematan mesin 150cc SOHC PGM-FI berperforma tinggi yang mendukung kemampuan jelajah optimal dengan nyaman dan mudah dikendalikan di berbagai kondisi jalan.'),
('mtr15', 'Honda', 'CBR150R', 36941000, 'sport', 'Sport', 149, 'Manual', 12, 1, '', 'honda/cbr150r.png', 'Honda CBR 150R resmi diluncurkan di Indonesia oleh PT Astra Honda Motor (AHM) pada tanggal 30 Juni 2011. Pada tanggal 7 September 2014 PT AHM resmi merilis versi lokal dari Honda CBR 150R ini. Produk ini memiliki 96.2% kandungan lokal. Meski dibuat secara lokal tetapi secara performa motor ini telah ditingkatkan kemampuannya dan disempurnakan. Banyak fitur tambahan juga telah diterapkan seperti Pro-Link Rear Suspension, dan rangka truss frame yang membuat motor ini cocok dengan slogannya “Made of Champion”.'),
('mtr16', 'Honda', 'CBR250RR', 62850000, 'sport', 'Sport', 249, 'Manual', 14, 1, 'ABS, TC, Assist Clutch', 'honda/cbr250rr.png', 'Dalam pengembangan All New Honda CBR250RR sebagai motor lightweight supersport terbaik di kelasnya di kelasnya telah dirumuskan beberapa tujuan untuk setiap bagian, yaitu Styling, Chassis, Power Unit, Elektrik dan sistem kontrol'),
('mtr17', 'Honda', 'CRF250L', 79900000, 'trail-adv', 'Trail', 249, 'Manual', 7, 1, '', 'honda/crf250l.png', 'Motor 250cc ini hadir dengan dua tujuan, yakni memberikan pengendalian mudah saat melalui jalan perkotaan yang padat karena bobotnya yang ringan dan proporsi yang ramping sangat cocok, sementara itu suspensi, jarak terendah ke tanah dan ketinggian joknya mampu memberikan rasa nyaman saat berkendara di permukaan kasar dan trail. Motor ini akhirnya mampu menghadirkan pengalaman berkendara untuk semua pengendara.'),
('mtr18', 'Honda', 'CRF250Rally', 92145000, 'trail-adv', 'Trail-Adventure', 249, 'Manual', 12, 1, '', 'honda/crf250rally.png', 'Motor 250cc ini hadir dengan dua tujuan, yakni memberikan pengendalian mudah saat melalui jalan perkotaan yang padat karena bobotnya yang ringan dan proporsi yang ramping sangat cocok, sementara itu suspensi, jarak terendah ke tanah dan ketinggian joknya mampu memberikan rasa nyaman saat berkendara di permukaan kasar dan trail. Motor ini akhirnya mampu menghadirkan pengalaman berkendara untuk semua pengendara.'),
('mtr19', 'Honda', 'Revo', 15644000, 'bebek', 'Cub', 109, 'Manual-DC', 4, 7, '', 'honda/revo.png', 'Tampil semakin keren dan dinamis dengan design striping baru yang menambah kesan anggresif. Honda revo adalah andalan untuk segala aktivitas sehari hari, terbukti dengan fitur mesin yang tangguh dan irit serta fitur yang fungsional'),
('mtr2', 'Honda', 'Genio', 18800000, 'skuter', 'Scooter', 109, 'CVT', 4, 14, 'Power Socket, Keyless', 'honda/genio.png', 'Honda Genio merupakan motor matik 110cc terbaru. Casual fashionable menjadi identitas dan tren baru motor matik ini bagi generasi muda Indonesia dalam berekspresi lebih stylish, enerjik, dengan tetap mempertimbangkan performa, bodi compact, kelincahan dan kenyamanan berkendara, serta konsumsi bahan bakar yang efisien. Penggunaan teknologi frame (rangka) baru eSAF (enhanced Smart Architecture Frame) yang diimplementasikan pertama di Indonesia ini membuat Honda Genio lebih ringan, lincah, dan nyaman dikendarai.'),
('mtr20', 'Honda', 'Supra X 125 F1', 18785000, 'bebek', 'Cub', 124, 'Manual-DC', 4, 7, '', 'honda/supra-x.png', 'Dikenal sejak awal produksi tahun 1997 dengan ketangguhannya kini performa Supra X 125 lebih bertenaga dengan dilengkapi mesin 125 cc dengan sistem pembakaran yang baik dari Honda. Menegaskan Sang Raja Motorbebeksemakin tangguh melibas jalanan.'),
('mtr21', 'Honda', 'Supra GTR 150', 24637000, 'bebek', 'Cub-Sport', 149, 'Manual', 4, 1, 'Power Socket', 'honda/supra-gtr.png', 'All New Supra GTR150 hadir dengan konsep baru Grand Touring Cub, dengan desain unik, nyaman dan untuk dikendarai sehari-hari, tenaga besar. Konsep yang disajikan begitu berbeda dibandingkan dengan motorbebeklainnya, Model motorsportcub ini memiliki desain dengan posisi berkendara yang menghadirkan kenyamanan optimal, mudah dikendalikan dan stabil dikendarai selama berpetualang dan berkendara jarak jauh yang dikembangkan khusus untuk menjadi pilihan tepat bagi pengendara yang mendambakan kepuasan sejati di setiap perjalanan.'),
('mtr22', 'Yamaha', 'XMAX 250', 66000000, 'skuter', 'Maxi-Scooter', 249, 'CVT', 13, 44, 'ABS, TC, Keyless, TFT infotaiment Display, Integrated SatNav, Power Socket', 'yamaha/xmax-250.png', 'Yamaha Xmax 250 merupakan motor matic premium terbaru dari Yamaha dengan tampilan yang modern dan sporty, Yamaha Xmax ini memiliki beberapa fitur diantaranya mesin Blue Core 250 cc Blue Core dengan performa paling besar dikelasnya, juga dilengkapi Liquid Cooled- 4 Valve yang telah dikembangkan untuk akselerasi ultimate.'),
('mtr23', 'Yamaha', 'NMAX 155', 31615000, 'skuter', 'Maxi-Scooter', 155, 'CVT', 7.1, 23, 'ABS, TC, Keyless, Power Socket', 'yamaha/nmax-155.png', 'Yamaha All New Nmax 155  ialahskutermatik terlengkap yang sempurna buat Kamu. Mesin Blue Core 155 cc yang dilengkapi dengan teknologi serta fitur terkini. Teknologi dan Fitur Terkini. Mesin Lebih Profesional. Terus menjadi Di Depan.'),
('mtr24', 'Yamaha', 'Aerox 155', 27275000, 'skuter', 'Maxi-Scooter', 155, 'CVT', 5, 25, 'ABS, Keyless, Power Socket', 'yamaha/aerox-155.png', 'Yamaha New Aerox 155  ialahskutermatik terlengkap yang sempurna buat Kamu. Mesin Blue Core 155 cc yang dilengkapi dengan teknologi serta fitur terkini.  Mesin Lebih Profesional. Terus menjadi Di Depan.'),
('mtr25', 'Yamaha', 'Lexi 155', 22840000, 'skuter', 'Maxi-Scooter', 155, 'CVT', 4, 12, 'ABS, Keyless, Power Socket', 'yamaha/lexi.png', 'Yamaha Lexi S direncanakan dan dikembangkan menjadi produk yang trendi di segmen premium. Dengan konsep High-Value Utility Commuter Model, Yamaha Lexi S menyajikan kepraktisan dan berbagai fitur modern dengan tampilan yang menarik perhatian pelanggan. Lexi dibuat dengan konsep baru Maxi Yamaha Indonesia yang membuatnya sangat praktis dan elegan. Lexi S memiliki 4 keunggulan utama yang tentu saja berbeda.'),
('mtr26', 'Yamaha', 'Grand Filano', 27000000, 'skuter', 'Scooter', 124, 'CVT', 4, 27, 'Hybrid engine, TFT Sub Display, Keyless, Power Socket', 'yamaha/grand-filano.png', 'Yamaha Grand Filano merupakan motor matic classy yang di lengkapi dengan fitur-fitur futuristik dan penampilan yang manis. Sangat cocok berkendara di dalam kota dengan kelengkapan fitur kekinian yang dapat melengkapi kebutuhan kamu guys.'),
('mtr27', 'Yamaha', 'Fazzio', 22500000, 'skuter', 'Scooter', 124, 'CVT', 5, 17, 'Hybrid engine, Power Socket', 'yamaha/fazzio.png', 'Yamaha Fazzio Hybrid sebagai keluarga baru Classy Yamaha, menghadirkan berbagai keunggulan seperti desain baru yang simpel dan modern, teknologi terbaru yang cocok untuk gaya hidup masa kini serta aksesoris port yang mewakili kebutuhan anak muda dalam mengekspresikan diri pada sepeda motornya sesuai dengan style masing-masing. Adapun teknologi yang dihadirkan yakni Blue Core Hybrid yang membuat semakin bertenaga, ramah lingkungan dan handal. Dilengkapi dengan Yamaha Motorcycle Connect yang mendukung generasi muda saat ini untuk selalu terkoneksi dengan smartphone lewat aplikasi Y-Connect.'),
('mtr28', 'Yamaha', 'FreeGo 125', 21400000, 'skuter', 'Scooter', 125, 'CVT', 4, 25, 'Keyless, Power Socket', 'yamaha/freego.png', 'Yamaha Freego Dengan desain yang elegan, ternyata mesin yang digunakan Yamaha Freego cukup elegan juga. Mesin yang digunakan berkapasitas 125cc dengan tipe mesin Air Cooled 4-stroke, SOHC. Dari mesin ini motor Yamaha Freego bisa menghasilkan tenaga sebesar 7.0 kW pada 8.000 rpm dengan torsi puncak sebesar 9.5 Nm pada 5.500 rpm. <br>\nPerlu diketahui juga bahwa motor Yamaha Freego menggunakan mesin Blue Core yang dilengkapi dengan SMG. Dengan menggunakan mesin ini motor YamahaFreego memiliki suara yang halus ketika dinyalakan, serta memberikan pengalaman berbeda ketika digunakan berkendara, pastinya irit, bertenaga, dan handal.'),
('mtr29', 'Yamaha', 'Gear 125', 18035000, 'skuter', 'Scooter', 124, 'CVT', 4, 10, 'Power Socket', 'yamaha/gear.png', 'Yamaha Gear 125 Standar Blue Core Tubeless & Ban Lebar menjadi pionir di kelas skutik entry level yang menggunakan lampu LED Headlight. Dengan ruang kaki yang lebih lebar, mendukung aktivitas anak muda aktif.Motor ini juga dilengkapi kait barang yang bisa dilipat sehingga lebih praktis dan berkelas, Cukup dengan menekan tombolnya satu kali maka alarm berbunyi dan pengendara akan tahu posisi motor. Dilengkapi pula dengan lampu hazard untuk memberi tanda dalam situasi darurat.'),
('mtr3', 'Honda', 'Scoopy', 21653000, 'skuter', 'Scooter', 109, 'CVT', 4, 14, 'USB Charger, Keyless', 'honda/scoopy.png', 'Nama Motor Honda Scoopy berasal dari kata Scooter + Scoopy yang artinyaskuterdengan bentuk seperti sendok (bulat / kurva). Konsep motor Scoopy ini mengikuti aliran Retro Modern yang memiliki nuansa klasik namun dikemas dengan sentuhan modern masa kini. Sejak pertama dirilis pada bulan May 2010, motor ini kerap mengukuhkan dirinya sebagai Raja Skutik Retro di Indonesia. Honda Scoopy eSP dengan dilengkapi teknologi eSP siap menjadi pilihan utama konsumen yang membutuhkan motor skutik yang fashionable dan nyaman dikendarai.'),
('mtr30', 'Yamaha', 'X-Ride 125', 19790000, 'skuter', 'Scooter', 125, 'CVT', 4, 10, '', 'yamaha/x-ride.png', 'Yamaha Xride 125 di sektor mesin yang kini menggunakan 125 cc Blue Core.Mesin ini sanggup menghentakkan tenaga 9,5 ps dan torsi 9,6 Nm yang disalurkan ke roda belaka melalui transmisi full otomatis.Setangnya dibuat lebih lebar, dengan alasan meningkatkan stabilitas dan mempermudah manuver.'),
('mtr31', 'Yamaha', 'Mio M3 125', 17235000, 'skuter', 'Scooter', 125, 'CVT', 4, 10, '', 'yamaha/mio-m3.png', 'Yamaha Mio M3 125 adalah motor matic dengan tampilan yang sporty dan trendy, menggunakan teknologi Blue Core untuk membuat tarikan menjadi lebih responsif & bertenaga, namun tetap irit. Dilengkapi Eco Lamp Indicator bermesin 4 langkah berpendingin udara, SOHC, serta mesin 125 cc yang menghasilkan torsi maksimun hingga 9.6 Nm/5500 rpm, sangat handal dan nyaman digunakan untuk aktivitas Anda sehari-hari.'),
('mtr32', 'Yamaha', 'Fino 125', 19980000, 'skuter', 'Scooter', 125, 'CVT', 4, 8, '', 'yamaha/fino.png', 'Yamaha Fino 125 Blue Core adalah sepeda motor Matic yang menggunakan teknologi blue core yang irit, halus, dan nyaman. Dilengkapi dengan mesin berkapsitas 125 cc tapi irit 50 %. New Fino 125 Blue Core didukung dengan fitur-fitur terbaru seperti Advance Key System dengan Answer Back (menemukan Fino mu) dan Auto Open Key Shutter (membuka dan memasukkan kunci menjadi lebih mudah, cepat dan praktis), Lock System, serta Smart Side Stand Switch yang cocok untuk aktivitas Anda sehari-hari.'),
('mtr33', 'Yamaha', 'XSR 155', 37635000, 'naked', 'Naked-Classic', 155, 'Manual', 10, 1, '', 'yamaha/xsr-155.png', 'Yamaha XSR 155 yakni simbol atas ekspresi tren style hidup&amp; refleksi dari nilai kreativitas tanpa batasan lohh Dengan campuran nilai peninggalan masa kemudian dan sentuhan teknologi masa saat ini, Yamaha XSR 155 diyakini sanggup menyajikan sensasi berkendara yg lebih mengasyikkan lewat tampilan desain motor yang berkonsepsportheritage, fitur berkendara modern, dan performa mesin yang andal serta bertenaga.'),
('mtr34', 'Yamaha', 'R15', 39875000, 'sport', 'Sport', 155, 'Manual', 11, 1, 'ABS, TC, Quick Shifter, ', 'yamaha/r15.png', 'Yamaha All New R15 Connected Bermesin 155cc 6 percepatan 4 Katup dan dilengkapi Variable Valve Actuation akan menjadikan torsi Merata di setiap putaran mesin, Dilengkapi juga dengan Liquid Cooled yang akan membuat suhu mesin stabil, Teknologi VVA menjaga tenaga dan torsi maksimum di setiap putaran mesin Fitur assist yang membuat kopling lebih ringan, dan Fitur Slipper Clutch membuat perpindahan gigi lebih halus dan akselerasi lebih cepat handling lebih sempurna motor lebih stabil dan terlihat semakin gagah saat berkendara'),
('mtr35', 'Yamaha', 'Vixion 150', 29275000, 'naked', 'Naked', 149, 'Manual', 12, 1, '', 'yamaha/vixion-150.png', 'Yamaha memberikan sedikit sentuhan penyegaran untuk motornakedini. Tidak banyak, hanya seputar warna dan grafis stiker body. Sementara sektor teknis seperti mesin atau kaki, tidak disentuh sama sekali. Perubahan ini pertama kali muncul di GIIAS 2018. \n<br>\nDi ulang tahun ke-10, Yamaha Vixion mendapat beberapa hadiah istimewa. Kado paling akhir didapatnya, penghargaan Indonesia Best Brand Award (IBBA) 2017 di kategori motor sport. IBBA 2017, ajang memberi penghargaan bagi brand terbaik di era digitalisasi pemasaran. \n<br>\nYamaha V-ixion memang seperti pencetak uang untuk Yamaha Indonesia. Motorsport150 cc ini banyak diminati karena memang praktis dan nyaman dikendarai. Yang disayangkan adalah, minimnya fitur pada Yamaha Vixion standar. '),
('mtr36', 'Yamaha', 'Vixion 155', 33000000, 'naked', 'Naked', 155, 'Manual', 11, 1, '', 'yamaha/vixion-155.png', 'Motor ini adalah varian dari All New Vixion. Perbedaan nyata dari All New Vixion R terletak pada engine. Motor ini menggunakan mesin yang sama digunakan pada All New R15. All New Vixion R menggunakan mesin 155cc, 6 percepatan dengan teknologi VVA sehingga tenaga mesin semakin besar tetapi sangat irit bahan bakar. All New Vixion R juga telah dilengkapi fitur Assist & Slipper Clutch.\nAll New Vixion R menggunakan rangka Deltabox yang terbukti kokoh dan New Design Aluminium Rear Arm yang membuat kestabilan berkendara terjaga. Dengan tapak ban belakang yang lebih lebar (130/70-17M/C 62P) serta ditunjang desain pelek baru membuat tampilannya semakin sporty.'),
('mtr37', 'Yamaha', 'MT15', 38525000, 'naked', 'Naked', 155, 'Manual', 10, 1, '', 'yamaha/mt15.png', 'Yamaha MT15 merupakan representasi atas gaya berkendara masa kini, Hal tersebut dapat dilihat melalui desain motor yang lebih agresif, penambahan fitur terbaru, serta optimalisasi mesin yang lebih bertenaga. Kami optimis Yamaha MT15 akan mendapat respon yang sangat positif dari masyarakat dan menjadi trend setter di kalangan para pecintanakedsport kedepannya'),
('mtr38', 'Yamaha', 'MT25', 57225000, 'naked', 'Naked', 249, 'Manual', 14, 1, '', 'yamaha/mt25.png', 'Yamaha MT25 adalah motornakedbike yang didesain pure streetnakedbike dengan maneuverability aggressive handling dan high performance engine. Jiwa streetnakedbike kuat terbentuk pada desain body yang kekar dengan karakter MT Series.'),
('mtr39', 'Yamaha', 'R25', 70225000, 'sport', 'Sport', 249, 'Manual', 14, 1, 'ABS', 'yamaha/r25.png', 'Yamaha R25 memiliki performa yang sangat impresif dengan handling sempurna. desain fairing baru yang meningkatkan performa dan aerodinamika. Yamaha 25 siap untuk melahap jalanan dan tikungan secara cepat dan responsif dengan supersportengine 250cc, 2 Silinder DOHC, 8 Valves yang diteruskan ke roda belakang melalui 6-speed manual transmission, dan tekonologi Liquid Cooling System.'),
('mtr4', 'Honda', 'Vario 125', 22500000, 'skuter', 'Scooter', 124, 'CVT', 5, 18, 'USB Charger, Keyless', 'honda/vario-125.png', 'Honda Vario 125 eSP resmi diluncurkan di Indonesia pada tanggal 14 Januari 2015. Dengan tag line “Ride The Perfection”, Honda Vario 125 eSP merupakan kombinasi teknologi canggih dari Honda yang didukung dengan teknologi ramah lingkungan. Honda Vario 125 eSP ini sudah dilengkapi dengan mesin eSP, starter AGV, Helm-In, lampu depan LED, PGM-FI, Combi Brake System, Idling Stop System. Dan hanya memerlukan satu liter bensin untuk menempuh 59,5 kilometer. Dengan segala kecanggihannya, Honda mengajak semua penggemarnya to “Ride The Perfection with Honda Vario 125 eSP“.'),
('mtr40', 'Yamaha', 'WR155', 38600000, 'trail-adv', 'Trail-Adventure', 155, 'Manual', 8, 1, '', 'yamaha/wr155.png', 'Motor nya para petualang, Yamaha WR 155 R dilengkapi mesin 155 cc yang handal di segala medan. Cek spesifikasi lengkap, harga terbaru Yamaha WR 155 R dan booking online di sini! Semakin Di Depan. Mesin Lebih Handal. Teknologi & Fitur Terbaru'),
('mtr41', 'Yamaha', 'MX-King 150', 25870000, 'bebek', 'Cub-Sport', 149, 'Manual', 4, 1, '', 'yamaha/mx-king.png', 'MX-KING memiliki desain supersportdengan bodi depan besar dan bodi belakang ramping serta meruncing lebih tinggi.  Dengan mesin 150cc fuel injection 4 valve membuat performa MX-KING semakin maksimal dan ditopang rangka backbone baru yang lebih ringan dan kokoh sehingga stabil saat bermanuver.'),
('mtr42', 'Yamaha', 'Jupiter Z1 ', 19790000, 'bebek', 'Cub', 113, 'Manual', 4, 7, '', 'yamaha/jupiter-z1.png', 'Jupiter Z memiliki desain yang futuristic dan aerodinamis,  mesin berkapasitas 115cc dengan teknologi fuel injection sehingga performa mesin meningkat 20% lebih dahsyat dan lebih irit bbm, di dukung dengan forged piston yang membuat motor lebih responsive dan irit.'),
('mtr43', 'Yamaha', 'Vega Force', 17915000, 'bebek', 'Cub', 113, 'Manual', 4, 9, '', 'yamaha/vega-force.png', 'Merupakan perpaduan antara Yamaha Vega dan Yamaha Force, Yamaha Vega Force memberikan alternatif baru bagi konsumen Indonesia yang menginginkan motorbebekyang irit, lincah, namun tetap bertenaga. Hadir dengan striping yang lebih sporty dan juga desain bodi yang lebih stylish dan ramping membuat manuver berkendara dengan Yamaha Vega Force semakin lincah dan fun to drive.'),
('mtr44', 'Suzuki', 'V-Strom 250 SX', 59500000, 'trail-adv', 'Sport-Adventure', 249, 'Manual', 12, 1, 'Power Socket, ABS', 'suzuki/v-strom-250-sx.jpg', 'V-STROM 250SX, motor petualang sport yang menggabungkan keberagaman yang tangguh dengan gaya modern yang mengesankan. Temukan petualangan baru, jelajahi pemandangan menakjubkan, dan nikmati perjalanan anda dengan gaya!'),
('mtr45', 'Suzuki', 'Gixxer SF250', 55500000, 'sport', 'Sport', 249, 'Manual', 12, 1, 'ABS', 'suzuki/gixxer-sf.jpg', 'MotorsportElegan, Dengan Segudang Fitur Modern Suzuki GIXXER SF 250 Siap Memberikan Pengalaman Berkendara yang Tak Terlupakan'),
('mtr46', 'Suzuki', 'GSX-R 150', 35000000, 'sport', 'Sport', 147, 'Manual', 11, 1, 'keyless, ABS', 'suzuki/gsx-150.jpg', 'SUZUKI GSX-R 150 tampil lebih gagah dan elegan membuat perhatian semua orang terpusat padamu.'),
('mtr47', 'Suzuki', 'GSX-S 150', 31422000, 'naked', 'Naked', 147, 'Manual', 11, 1, 'Keyless', 'suzuki/gsxs-150.jpg', 'Suzuki GSX-S150 dikenal sebagai sports street bike yang gesit dan ringan. GSX-S150 akan menjadi favorit para pengendara untuk transportasi harian dan hobi.'),
('mtr48', 'Suzuki', 'Satria F150', 28600000, 'bebek', 'Cub-Ayago', 147, 'Manual', 4, 1, '', 'suzuki/satria.jpg', 'All New Satria F150 kini tampil makin futuristik dan sporty dengan desain body yang aerodinamis. Semakin agresif menaklukan semua tantangan di jalan. Menggunakan mesin baru yang mengadaptasi teknologi MotoGP Suzuki All New Satria F150 siap kalahkan semua lawan dengan performa maksimal dan tercepat di kelas underbone 150cc.'),
('mtr49', 'Suzuki', 'Avenis 125', 30180000, 'skuter', 'Scooter', 124, 'CVT', 5, 21, 'Power Socket', 'suzuki/avenis.jpg', 'Design Suzuki Avenis 125 mengadopsi garis-garis tajam pada bagian depan hingga bagian belakang yang ramping . Anda akan disuguhi tampilan desain yang membangkitkan rasa visual berkecepatan tinggi dan pengalaman yang mengasyikkan.\n<br>\nRasakan akselerasi yang mengesankan, pengalaman berkendara yang nyaman serta kemampuan bermanuver dalam melalui kepadatan lalu lintas dengan menggunakan Suzuki Avenis 125.\n<br>\nAvenis 125 adalah pilihan terbaik untuk memenuhi kebutuhan masyarakat Indonesia dalam berkendara baik menjalankan tugas atau menikmati perjalanan yang mengasyikkan di sekitar kota.'),
('mtr5', 'Honda', 'Vario 160', 26539000, 'skuter', 'Scooter', 156, 'CVT', 5, 18, 'ABS, USB Charger, Keyless', 'honda/vario-160.png', 'PT Astra Honda Motor (AHM) meluncurkan All New Honda Vario 160 dengan perubahan menyeluruh pada mesin, rangka, desain dan fitur yang semakin canggih. Motor produksi anak bangsa ini hadir di Tanah Air sebagai jawaban bagi pecinta motor skutik premium sporti berperforma tinggi yang memberikan kebanggaan dan menjadi cerminan gaya hidup pengendara yang menyenangi sensasi berkendara nyaman dengan teknologi tinggi. <br> All New Honda Vario 160 memberikan sebuah energi dan gaya baru dalam revolusi desain, teknologi dan fitur canggih yang disematkan sesuai gaya berkendara masa kini. Model skutik ini mengekspresikan premium sporti dengan tampilan desain layaknya matik besar yang mampu memberikan kebanggaan bagi pengendaranya. Berbekal mesin performa tinggi kapasitas 160cc 4 katup enhanced Smart Power Plus (eSP+), serta memiliki teknologi minim gesekan menjadikan skutik premium sporti ini memberikan keseimbangan antara performa yang optimal dan kesempurnaan puncak saat dikendarai harian.'),
('mtr50', 'Suzuki', 'NEX II', 19355000, 'skuter', 'Scooter', 113, 'CVT', 3, 12, '', 'suzuki/nex-ii.jpg', 'NEX II adalah motor matic terbaru yang stylish dengan desain yang modern dan futuristik. NEX II mengusung mesin 115cc FI dengan teknologi SEP (Suzuki Eco Performance) yang memberikan keuntungan konsumsi bahan bakar. NEX II juga memiliki fitur Suzuki Easy Start System yang memudahkan dalam menyalakan mesin.'),
('mtr51', 'Suzuki', 'NEX II Crossover', 20600000, 'skuter', 'Scooter', 113, 'CVT', 3, 12, '', 'suzuki/nex-ii-crossover.jpg', 'NEX Crossover adalah motor matic terbaru dengan tampilan fresh pada handle bar dan seat cover, dan tetap mempertahankan teknologi SEP (Suzuki Eco Performance) pada mesin 115cc FI. NEX Crossover juga dilengkapi dengan Digital Speedometer yang membuat tampilan makin futuristik dan memberikan kemudahan dalam membaca informasi.'),
('mtr52', 'Suzuki', 'Address FI', 19933500, 'skuter', 'Scooter', 113, 'CVT', 5, 20, '', 'suzuki/address.jpg', 'Suzuki kembali melahirkan Address FI dengan mempertahankan keunggulan performa, ketangguhan serta konsumsi bahan bakar dan desain yang dinamis dan bergaya.'),
('mtr53', 'Suzuki', 'Address Playfull', 20866500, 'skuter', 'Scooter', 113, 'CVT', 5, 20, '', 'suzuki/address-pl.jpg', 'Model baru ini merupakan pilihan tambahan dari Suzuki Address FI yang telah eksis sebelumnya. Skutik multifungsi bermesin 113cc yang irit dan bertenaga tersebut kini dilengkapi dengan 10 pilihan warna aksesoris panel bodi menarik dan penuh gaya yang dapat disesuaikan dengan jiwa dan karakter muda-mudi masa kini, antara lain Stronger Red, Aura Yellow, Fresh Green, Macho Bright Blue, Majestic Gold, Dark Grey, Brilliant White, Hyper Pink, Luminous Orange dan Ice Silver. It’s So Me !'),
('mtr54', 'Kawasaki', 'Ninja ZX25R', 105000000, 'sport', 'Sport', 249, 'Manual', 15, 1, 'ABS, TC, ', 'kawasaki/ninja-zx25r.jpg', 'Menampilkan mesin dengan performa legendaris dari Kawasaki Ninja ZX Series, motor dengan mesin Supersport kelas 250 cc yang telah lama ditunggu-tunggu ini akhirnya hadir dan menjadi kenyataan. Mesin presisi 249.8 cc In-Line Four-nya memberikan power high-rpm, tertinggi di kelasnya. Model baru diperbarui dengan lampu sein LED, dan instrumentasi warna TFT dengan Circuit Mode dan Smartphone Connectivity. Dua edisi khusus juga dilengkapi dengan perlengkapan canggih termasuk suspensi belakang (RR) Ninja ZX-10R, suspensi depan yang dapat disesuaikan (RR), dan quick shifter (SE & RR). Kini, lebih dari sebelumnya, Ninja ZX-25R menghadirkan performa tak tertandingi di setiap berkendara.'),
('mtr55', 'Kawasaki', 'Ninja 250 R', 66900000, 'sport', 'Sport', 249, 'Manual', 14, 1, 'ABS', 'kawasaki/ninja-250.jpg', 'Kawasaki dengan bangga memperkenalkan sebuah modelsportdi arena yang sangat kompetitif, yaitu kelassport250 cc. Dibentuk dengan gaya Ninja baru yang tajam, Ninja 250 baru memberikan performa lebih hebat dibanding pendahulunya dengan mesin baru yang lebih bertenaga, dan juga dengan bobot yang lebih ringan.'),
('mtr56', 'Kawasaki', 'W175', 34600000, 'naked', 'Naked-Classic', 177, 'Manual', 14, 1, '', 'kawasaki/w175.jpg', 'Kawasaki W175 adalah model terbaru dari keluarga “W”. Mengikuti W800 dan W250, desain W175 dibuat simple dan tradisional dengan proporsi klasik yang tak lekang oleh waktu, sepeda motor dengan desain sepanjang masa. Walaupun masuk dalam segment dimana didominasi oleh model sport,bebekdan matic, W175 menawarkan alternative yang lebih berkelas.'),
('mtr57', 'Kawasaki', 'Versys 250 Tourer', 71200000, 'trail-adv', 'Sport-Adventure', 249, 'Manual', 17, 1, 'Power Outlet, Panniers', 'kawasaki/versys_250.jpg', 'Ditenagai dengan mesin 250 cc bersilinder ganda, rangka backbone, suspensi depan panjang dan kombinasi velg 19”/17”, Kawasaki Versys-X 250 hadir dengan paket performa “for Any Road – Any Time”. Menawarkan kenikmatan berkendara tingkat tinggi dan percaya diri di segala situasi.'),
('mtr58', 'Kawasaki', 'Z125 PRO', 47800000, 'naked', 'Naked', 125, 'Manual', 7, 1, '', 'kawasaki/z125-pro.jpg', 'Berukuran kecil tapi menyenangkan, sepeda motor Kawasaki Z125 PRO adalah streetfighter gesit yang memberikan statement ke mana pun ia pergi. Dengan mesin 125 cc, posisi mengendarai tegak dan ban jalanan responsif, menjadi rebel dengan cara menyenangkan.'),
('mtr59', 'Kawasaki', 'D-Tracker X', 71700000, 'trail-adv', 'Trail-Supermoto', 249, 'Manual', 7, 1, '', 'kawasaki/d-tracker-x.jpg', 'Didesain untuk lingkungan urban, D-Tracker berkemampuan tajam, cepat, dan mendebarkan. Velg berukuran 17’’ dan body ramping menjadikan handling yang gesit. Berkat mesin injeksi bahan bakar, 249 cc, DOHC 4-katup, satu silinder, setiap putaran throttle membuat Anda tersenyum. Pada model supermoto yang menarik seperti D-Tracker X, berkeliling kota tidak pernah semenyenangkan ini.'),
('mtr6', 'Honda', 'Stylo 160', 27550000, 'skuter', 'Scooter', 156, 'CVT', 5, 16, 'ABS, USB Charger, Keyless', 'honda/stylo.png', 'PT Astra Honda Motor (AHM) meluncurkan skutik premium fashionable 160cc pertama di Indonesia, New Honda Stylo 160 yang siap menjadi pusat perhatian melalui balutan desain modern klasik retro dan performa sepeda motor terbaik di kelasnya. Model ini menjadi jawaban atas kebanggaan berkendara yang sesungguhnya saat mengekspresikan gaya hidup sehari-hari maupun beraktivitas di akhir pekan. <br> Berbekal kapasitas mesin terbesar dari model skutik fashionable di kelasnya yakni 160cc 4 katup enhanced Smart Program Plus (eSP+) berpendingin cairan, skutik bagi penggemar fashion premium ini menjadi yang paling bertenaga dan responsif. Sensasi berkendara yang nyaman pun dihadirkan melalui ukuran body yang proporsional, mudah dikendalikan, dan ketinggian jok yang nyaman untuk konsumen di Indonesia. Kehadiran fitur-fitur menarik yang canggih dengan inovasi terkini seperti lampu depan LED yang ikonik, Honda smart key, maupun USB charger type A yang mampu menjawab kebutuhan sehari-hari dengan lebih berkelas dan nyaman dalam mengendarai New Honda Stylo 160.'),
('mtr60', 'Kawasaki', 'Stockman', 57500000, 'trail-adv', 'Trail', 233, 'Manual', 7, 1, '', 'kawasaki/stockman.jpg', 'All new STOCKMAN adalah penampilan yang disambut baik. Menampilkan mesin dan sasis off-road Kawasaki terbaru – keduanya dirancang dengan mempertimbangkan trail riding – STOCKMAN baru BUILT TOUGH dan dikemas untuk menghadapi berbagai medan yang menantang. Mesin 233 cc injeksi bahan bakar memberikan performa yang luar biasa, daya tahan yang luar biasa, dan start yang mudah. Paket yang ringkas dan dapat bermanuver dilengkapi dengan fitur pertanian yang diperlukan untuk menyelesaikan pekerjaan, menjadikan STOCKMAN yang kokoh dan andal sebagai mitra yang dapat Anda andalkan, setiap hari.'),
('mtr61', 'Kawasaki', 'KLX150SM', 37200000, 'trail-adv', 'Trail-Supermoto', 144, 'Manual', 6, 1, '', 'kawasaki/klx150-sm.jpg', 'Supermoto terbaru Kawasaki, KLX150SM, memberikan keseruan dalam berkendara di berbagai situasi mulai dari penggunaan dalam perkotaan seperti berkendara di kota dan perjalanan, hingga petualangan di luar kota. Sasisnya yang ramping, ringan, dan mesin berpendingin udara yang responsif dilengkapi dengan desain yang bertenaga dan bergaya, sehingga dapat dinikmati dengan santai oleh banyak pengendara.'),
('mtr62', 'Kawasaki', 'KLX230SM', 54500000, 'trail-adv', 'Trail-Supermoto', 233, 'Manual', 7, 1, '', 'kawasaki/klx230sm.jpg', 'Hidupkan kesenangan di jalanan dengan supermoto ini. Setiap perjalanan merupakan pengalaman saat Anda berkendara melintasi kota dengan mesin yang berputar cepat dan penanganan yang gesit. Cepat mencuri perhatian dengan performa dan attitude yang selaras.'),
('mtr63', 'Kawasaki', 'KLX150S', 33100000, 'trail-adv', 'Trail', 144, 'Manual', 6, 1, '', 'kawasaki/klx150s.jpg', 'Seri KLX150 terbaru menawarkan keseruan berkendara dalam berbagai situasi, mulai dari penggunaan perkotaan seperti city riding dan commuting hingga perjalanan off-road trail yang membangkitkan jiwa petualang. Sasisnya yang ramping, ringan, dan mesin berpendingin udara yang andal dilengkapi dengan desain terinspirasi MX yang kuat dan bergaya yang mengingatkan pada sepeda motor enduro lengkap, membuatnya dapat dinikmati dengan santai untuk berbagai macam pengendara.'),
('mtr64', 'Kawasaki', 'KLX230', 49900000, 'trail-adv', 'Trail', 233, 'Manual', 7, 1, '', 'kawasaki/klx230s.jpg', 'Bawa ke lapangan permainan dengan performa dual-sport yang gesit yang siap untuk menaklukkan baik on- maupun off-road. Motor gesit ini memiliki mesin 233 cc yang dapat berputar cepat, sasis ringan, suspensi long-travel, dan pembaruan gaya termasuk spatbor depan baru dan lampu depan LED. Injeksi bahan bakar memberikan respons awal yang mudah dan respons throttle yang tajam dalam berbagai ketinggian dan suhu. Hasilnya adalah pengendaraan yang konsisten di jalan beraspal, jalan tanah, dan seterusnya.'),
('mtr65', 'Kawasaki', 'KLX250', 71100000, 'trail-adv', 'Trail', 249, 'Manual', 7, 1, '', 'kawasaki/klx250.jpg', 'Sepeda motor KLX250 menghadirkan performa berkendara on-road dan off-road serius yang menarik bagi pengendara dari berbagai tingkat keahlian. Motor serba guna ini memiliki mesin 249 cc dan memberikan keunggulan berkendara untuk navigasi yang penuh percaya diri melalui jalan-jalan kota atau jalur off-road.'),
('mtr7', 'Honda', 'PCX 160', 32179000, 'skuter', 'Maxi-Scooter', 156, 'CVT', 8, 30, 'ABS, USB Charger, Keyless', 'honda/pcx-160.png', 'All New Honda PCX 160 dengan perubahan menyeluruh pada mesin, rangka, desain dan fitur yang semakin canggih. Motor produksi anak bangsa ini siap untuk semakin memberikan kebanggaan dan menjadi cerminan gaya hidup pecinta skutik premium Tanah Air yang menyenangi sensasi berkendara nyaman dengan teknologi tinggi. Motor Honda PCX 160 terbaru ini semakin mengkukuhkan posisinya sebagai skutik premium yang nyaman, elegan dan mewah.'),
('mtr8', 'Honda', 'ADV 160', 36000000, 'skuter', 'Maxi-Scooter', 156, 'CVT', 8, 30, 'ABS, TC, USB Charger, Keyless', 'honda/adv-160.png', 'PT Astra Honda Motor (AHM) meluncurkan skutik penjelajah New Honda ADV160. Tak hanya punya wajah baru yang semakin tangguh, sepeda motor yang sukses membuka segmen baru di kelas skutik premium ini, kini juga lebih bertenaga dengan mesin baru, semakin nyaman dengan jok lebih rendah dipadukan ground clearance tinggi, serta semakin canggih berkat fitur hightech seperti HSTC (Honda Selectable Torque Control). <br> New Honda ADV160 mempertahankan identitasnya sebagai skutik besar penjelajah jalanan terbaik yang tangguh, membanggakan, dan kaya akan fitur canggih. Hal ini menjawab kebutuhan masyarakat yang mempunyai aktivitas tinggi dan suka bereksplorasi melintasi berbagai kondisi jalan setiap hari.'),
('mtr9', 'Honda', 'Forza', 90313000, 'skuter', 'Maxi-Scooter', 249, 'CVT', 11, 48, 'ABS, TC, USB Charger, Keyless, T', 'honda/forza.png', 'Honda Forza sebagai ikon prestisius yang memiliki tampilan desain mewah dan sporti secara eksklusif diluncurkan PT Astra Honda Motor (AHM) pada ajang GIIAS 2018. Model ini hadir untuk memberikan kenyamanan dan kebanggaan tertinggi bagi pecinta skutik di Tanah Air. <br> Kemewahan Honda Forza hadir dengan penyematan desain mewah dan sporti yang didukung performa kelas atas mesin 250cc berpendingin cairan. Posisi berkendaranya memanjakan pengendara dengan kenyamanan tingkat tinggi karena diperkaya fitur canggih masa kini yang menunjang gaya hidup modern.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_at`, `last_login`, `updated_at`) VALUES
('669525cc94293', 'admin', '$2y$10$FKxTypW18KyF3aKZgTEAmenD2Oh5SUSAc8wCNqkc/mYaW26VaOkwm', '2024-07-15 06:36:24', NULL, '2024-07-15 06:36:24'),
('6697aee7be4fb', 'logaritma', '$2y$10$PoAyyihECM7HQJ4Jz.jnYuVf9pzBR5oai.zW15jk5ZXfSqAlTzCDm', '2024-07-17 04:45:56', NULL, '2024-08-06 21:19:55'),
('66b2fe9750213', 'andika', '$2y$10$fo3NMiM8DFo.hNMeibxgUODfvgoq/4/1jh.aatNvwc26bF1DOZJHu', '2024-08-06 21:57:13', NULL, '2024-08-06 21:57:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_opsi`
--
ALTER TABLE `tb_opsi`
  ADD PRIMARY KEY (`id_opsi`),
  ADD KEY `id_p` (`id_p`);

--
-- Indexes for table `tb_pert`
--
ALTER TABLE `tb_pert`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `tb_spek`
--
ALTER TABLE `tb_spek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_opsi`
--
ALTER TABLE `tb_opsi`
  ADD CONSTRAINT `tb_opsi_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `tb_pert` (`id_p`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
