-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2023 pada 17.29
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anatomy_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `aset` varchar(50) NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `tgl_modif` datetime NOT NULL,
  `pembuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `judul`, `isi`, `aset`, `tgl_dibuat`, `tgl_modif`, `pembuat`) VALUES
(1, 'HEADBONE', 'Tulang tengkorak merupakan salah satu bagian tulang yang penting dalam sistem rangka manusia. Tulang tengkorak tersusun dari beberapa tulang dengan fungsinya masing-masing. Tulang tengkorak berperan besar dalam membentuk struktur kepala dan wajah, serta melindungi otak dari cedera.', 'scene.gltf', '2022-10-29 00:00:00', '2022-11-02 00:00:00', 1),
(3, 'EAR', 'Telinga merupakan organ yang cukup berpengaruh dan penting untuk manusia, yaitu berfungsi sebagai organ pendengaran yang berguna untuk proses komunikasi dan juga sebagai organ keseimbangan bersama dengan mata, persendian, otot dan kulit. Telinga terdiri dari tiga bagian, yaitu bagian luar, tengah, dan dalam.', 'ear.gltf', '0000-00-00 00:00:00', '2022-11-03 00:00:00', 1),
(9, 'EYEBALL', 'Mata adalah salah satu bagian tubuh yang memiliki peranan penting dalam hidup manusia. Sebagai indera penglihat, mata memiliki bagian-bagian yang memiliki fungsi tersendiri, baik bagian luar seperti kelopak mata dan alis, atau bagian dalam mata seperti kornea, retina dan pupil.', 'bolamata.gltf', '0000-00-00 00:00:00', '2022-12-01 00:00:00', 1),
(17, 'Mouth', 'Mulut adalah suatu rongga terbuka tempat masuknya makanan dan air pada hewan. Mulut biasanya terletak di kepala dan umumnya merupakan bagian awal dari sistem pencernaan lengkap yang berakhir di anus. Mulut terdiri dari gigi dan lidah. Bagian-bagian yang terdapat dalam mulut: Gigi fungsinya untuk menggigit, mengunyah, mencabik.', 'mulut.gltf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel_card`
--

CREATE TABLE `tb_artikel_card` (
  `id` int(11) NOT NULL,
  `judul` varchar(32) NOT NULL,
  `isi` text NOT NULL,
  `aset` varchar(100) NOT NULL,
  `id_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_artikel_card`
--

INSERT INTO `tb_artikel_card` (`id`, `judul`, `isi`, `aset`, `id_art`) VALUES
(1, 'Ethmoid Bone', 'Tulang tapis atau tulang etmoid merupakan bagian dari tulang tengkorak yang terletak di depan tulang baji, tepatnya di antara mata. Tulang ini memiliki ukuran yang kecil, bentuknya pipih, dan tidak lebar. Tulang ini juga merupakan pembentuk dari struktur rongga hidung.', 'Ethmoid-bonee.gif', 1),
(2, 'Frontal Bone', 'Tulang frontal adalah tulang tengkorak yang terdapat di daerah dahi. Ini adalah salah satu dari delapan tulang yang membentuk tempurung kepala, atau kotak otak. Tulang frontal memainkan peran penting dalam mendukung dan melindungi jaringan saraf halus otak.', 'Frontal-bonee.gif', 1),
(3, 'Occipital Bone', 'Occipital atau tulang kepala belakang adalah tulang yang berbentuk lempengan trapesium dan berada di bagian bawah tulang tengkorak. Ini merupakan satu dari tujuh tulang yang menyatu dan membentuk tulang tengkorak.', 'Occipital-bonee.gif', 1),
(5, 'Parietal Bone', 'Tulang parietal merupakan sepasang tulang pipih yang terletak di kedua sisi kepala, tepatnya di belakang tulang depan. Tulang ini sering disebut juga dengan tulang ubun-ubun.', 'Parietal-bone.gif', 1),
(6, 'Sphenoid Bone', 'Tulang sphenoid (Os sphenoidale) adalah tulang pusat tengkorak, yang secara kasar berbentuk tawon terbang dengan sayap melebar dan kaki terkulai: Terdiri dari tubuh tulang sphenoid (korpus), dua tulang sphenoid besar (Alae majores), dua tulang sayap sphenoid kecil (Alae minores) dan pelengkap seperti sayap ke bawah (Processus pterygoidei).', 'Sphenoid-bone.gif', 1),
(9, 'Temporal Bone', 'Tulang temporal adalah yang terbesar dari semua tulang tengkorak. Ini menempel pada tulang tengkorak dan tulang depan tetapi tidak memiliki hubungan dengan struktur tengkorak lainnya. Tulang temporal menampung sejumlah organ penting termasuk telinga tengah (yang mencakup bagian-bagian seperti gendang telinga), telinga dalam, dan telinga.', 'Temporal-bone.gif', 1),
(10, 'Ear Drum', 'Gendang telinga atau membrana tympani adalah selaput atau membran tipis yang memisahkan telinga luar dan telinga tengah. Ia berfungsi untuk menghantar getaran suara dari udara menuju tulang pendengaran di dalam telinga tengah.', 'How-the-ear-works.gif', 3),
(12, 'PUPIL', 'Pupil merupakan bagian di tengah mata yang berbentuk bulat dan berwarna hitam. Fungsi pupil adalah mengatur berapa banyak cahaya yang masuk ke dalam mata. Guna menjalankan fungsinya, pupil akan melebar saat Anda berada di tempat gelap, untuk menangkap lebih banyak cahaya.', 'pupil.gif', 9),
(13, 'CORNEA', 'Kornea atau Cornea adalah lapisan terluar pada mata berupa selaput bening berbentuk kubah, yang menutupi bagian depan mata. Peran kornea sangat penting untuk penglihatan. Tiap bagian kornea mata memiliki fungsinya masing-masing, namun saling mendukung. Berbeda dengan jaringan tubuh lain, kornea tak memiliki pembuluh darah.', 'corneaa.gif', 9),
(14, 'ANTERIOR CHAMBER', 'Bilik mata depan adalah kantung mirip jelly yang berada di belakang kornea, di depan lensa (lihat pada gambar indra penglihatan Anda di atas). Kantung yang juga dikenal dengan istilah anterior chamber ini berisi cairan aqueous humor yang membantu membawa nutrisi ke jaringan mata.', 'anterior chamber.gif', 9),
(15, 'SCLERA', 'Sklera adalah bagian mata yang berbentuk selaput putih keras dengan jaringan fibrosa yang menutupi seluruh bola mata Anda, kecuali bagian kornea. Di dalamnya terdapat otot yang menempel guna menggerakkan mata yang menempel pada sklera.', 'sclera.gif', 9),
(16, 'IRIS', 'Iris merupakan bagian berwarna pada mata yang membantu untuk mengatur jumlah cahaya yang masuk ke mata. Ketika ada cahaya terang, iris menutup pupil agar cahaya yang masuk sedikit. Sedangkan, ketika cahaya redup, iris membuka pupil agar cahaya yang masuk mata lebih banyak.', 'IRIS.jpg', 9),
(17, 'LENS', 'Lensa adalah bagian mata yang berupa jaringan transparan dan lentur, yang terletak tepat di belakang iris dan pupil, setelah kornea (lihat gambar indra penglihatan Anda di atas). Fungsi lensa adalah membantu memusatkan cahaya dan gambar pada retina Anda. Lensa ini memberikan 25-35 persen kekuatan fokus mata Anda.', 'Structure_lens.png', 9),
(19, 'CHOROID', 'Koroid adalah lapisan pembuluh darah yang memberikan makanan bagi lapisan luar dari retina. Koroid merupakan perluasan dari selaput pelangi dan badan siliaris, yang terletak di antara retina dan sklera.', 'eyeChoroid.gif', 9),
(20, 'KONJUNGTIVA', 'Konjungtiva merupakan salah satu bagian dari mata berbentuk lapisan tipis (membran transparan) yang berfungsi untuk melindungi bola mata dan mengandung pembuluh darah untuk memberi nutrisi pada kornea.', 'konjungtiva.jpg', 9),
(21, 'VITREOUS HUMOR', 'Vitreous humor adalah gel bening dan tidak berwarna yang mengisi sekitar 80% volume bola mata serta hampir seluruhnya terdiri dari (98%) air, komponen lainnya adalah garam anorganik, lipid, kolagen dan glukosaminoglikan.', 'vitreous-humour.gif', 9),
(22, 'RETINA', 'Retina adalah lapisan sangat tipis di bagian belakang bola mata yang sensitif terhadap cahaya. Sel dalam retina, yakni sel batang (basilus) dan sel kerucut (konus), berfungsi memicu impuls saraf melalui saraf optik ke otak untuk membentuk penglihatan.', 'Retinaa.gif', 9),
(23, 'MACULA', 'Makula adalah area sensitif kecil di tengah retina yang memberikan penglihatan sentral. Pada makula, terdapat fovea. Fovea terletak di pusat makula dan fungsinya untuk memberikan penglihatan detail yang paling tajam di mata Anda.', 'macula.gif', 9),
(24, 'PALPEBRA', 'Kelopak mata (palpebra) terdiri dari tujuh lapisan yaitu kulit dan jaringan subkutan, otot protraktor, septum orbita, lemak orbita, otot-otot retraktor, tarsus, dan konjungtiva. Kelopak mata merupakan struktur bilamela yang terdiri dari lamela anterior dan posterior.', 'Palpebra.gif', 9),
(26, 'OSSICLES', 'Ossicles adalah rantai kecil dari tiga tulang; malleus, incus dan stapes, yang bergerak di telinga tengah dengan cara yang bergetar saat mereka bereaksi terhadap pergerakan gendang telinga.Fungsi dari ketiga tulang ini yakni untuk menghantarkan dan memperkuat gelombang suara hingga mencapai 10 kali lebih kuat dari udara hingga telinga tengah.', 'Ossicles.gif', 3),
(27, 'EUSTACHIUS TUBE', 'Fungsi saluran eustachius adalah menjaga telinga tengah tetap sehat dengan menyamakan tekanan di dalam dan di luar telinga, mengeluarkan cairan dari telinga bagian tengah, serta melindungi telinga dari kuman penyebab infeksi.', 'Eustachian tube.gif', 3),
(28, 'INNER EAR', 'Sesuai namanya, telinga bagian dalam berada di bagian terdalam dari anatomi telinga. Fungsinya untuk membantu keseimbangan tubuh dan menjadi bagian dalam pendengaran. Di telinga dalam terdapat tiga bagian utama, yaitu koklea, saluran semisirkular, dan vestibular.', 'inner.jpg', 3),
(29, 'OUTER EAR', 'Struktur telinga ini terbentuk dari auricula (daun telinga) dan kanal pendengaran eksternal (liang telinga atau ear canal). Auricula terbentuk oleh tulang rawan elastis yang melekat erat pada kulit yang miring. Ini berfungsi untuk menangkap suara dan melokalisasi suara.', 'Outer-Middle-Inner-Ear.gif', 3),
(30, 'LIPS', 'Bibir adalah bagian tubuh yang terlihat di mulut manusia maupun pada beberapa binatang. Bibir yang lembut, bergerak, dan berfungsi sebagai pembukaan untuk asupan makanan dan dalam artikulasi suara dan bicara.', 'lips.jpg', 13),
(31, 'TOOTH', 'Gigi adalah jaringan tubuh yang sangat keras dibanding yang lainnya. Strukturnya berlapis-lapis mulai dari email yang keras, dentin (tulang gigi) di dalamnya, pulpa yang berisi pembuluh darah, pembuluh saraf, dan bagian lain yang memperkokoh gigi.', 'Teeth.gif', 13),
(34, 'TONGUE', 'Lidah merupakan indra pengecap yang terdiri dari sejumlah bagian dan memiliki berbagai macam fungsi. Selain berfungsi sebagai pengecap, lidah juga memiliki beberapa fungsi utama, seperti membantu Anda berkomunikasi serta mengunyah dan menelan makanan.', 'tongue.gif', 13),
(35, 'TONSIL', 'Amandel adalah bagian dari organ tubuh kita yang berada di beberapa tempat dan fungsinya sebagai sistem pertahanan tubuh. Amandel berfungsi untuk menangkal berbagai kuman, bakteri, dan virus yang akan masuk ke tubuh kita.', 'tonsil.gif', 13),
(36, 'UVULA', 'Uvula atau uvula palatina adalah daging kecil yang menempel di belakang soft palate (yaitu langit-langit mulut di bagian belakang). Uvula memiliki beberapa fungsi, seperti memerangi infeksi juga memberi pelumas pada tenggorokan saat berbicara atau mencerna makan.', 'uvula.gif', 13),
(39, 'TOOTH', 'Gigi adalah jaringan tubuh yang sangat keras dibanding yang lainnya. Strukturnya berlapis-lapis mulai dari email yang keras, dentin (tulang gigi) di dalamnya, pulpa yang berisi pembuluh darah, pembuluh saraf, dan bagian lain yang memperkokoh gigi.', 'Teeth.gif', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(32) NOT NULL,
  `passwd` text NOT NULL,
  `passasli` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `passwd`, `passasli`) VALUES
(1, 'Administrator FULL GOD', 'godadmin', 'f6fdffe48c908deb0f4c3bd36c032e72', 'adminadmin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_artikel_card`
--
ALTER TABLE `tb_artikel_card`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_artikel_card`
--
ALTER TABLE `tb_artikel_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
