-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2024 pada 11.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorite`
--

CREATE TABLE `favorite` (
  `id_favorite` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `favorite`
--

INSERT INTO `favorite` (`id_favorite`, `id_film`, `id_pengguna`) VALUES
(5, 20, 3),
(8, 4, 6),
(10, 25, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_film`, `id_pengguna`, `pesan`) VALUES
(4, 2, 3, 'filmnya bagus'),
(5, 20, 3, 'aku suka karakter ceweknya, kawai:)'),
(8, 31, 7, 'I love one piece\r\n'),
(9, 2, 8, 'saya suka film ini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_film`
--

CREATE TABLE `table_film` (
  `id_film` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(2500) NOT NULL,
  `tahun_rilis` int(4) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `download` varchar(300) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `video` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `table_film`
--

INSERT INTO `table_film` (`id_film`, `judul`, `deskripsi`, `tahun_rilis`, `genre`, `download`, `gambar`, `foto`, `video`) VALUES
(2, 'Sayonara no Asa ni Yakusoku no', 'Maquia is a member of a special race called the Iorph—mystical beings who can live for hundreds of years and remain separate from the lives and daily troubles of mankind. However, Maquia has always felt lonely despite being surrounded by her people, as she was orphaned from a young age. She daydreams about the outside world, but dares not travel from her home due to the warnings of the clan\'s chief.\r\n\r\nOne day however, the outside world finds her, as the power-hungry kingdom of Mezarte invades her homeland. They already have what is left of the giant dragons, the Renato, under their control, and now their king wishes to add the immortality of the Iorph to his bloodline.\r\n', 2018, 'Fantasi/Drama', 'https://drive.google.com/uc?export=download&id=1uNrMcCEtSJj44KB86VQB0c7Yf-6IyuGp', '1.jpg', 'a.jpg', 'https://www.youtube.com/embed/AEWvRqZQ0RU?si=xLFOgcEKKtoryBJW'),
(3, 'Byousoku 5 Centimeter', 'What happens when two people love each other but just aren\'t meant to be together? Takaki Toono and Akari Shinohara are childhood friends, but circumstances beyond their control tear them apart. They promise to stay in contact, and although the progression of time widens the distance between them, the chain of memories remains ever-present.\r\n\r\nByousoku 5 Centimeter is a romantic drama that focuses on the mundane and harsh reality of long-distance relationships. Stuck in the past and unable to make any new memories, Takaki and Akari cling to the hope of seeing each other again. They live their everyday lives half-heartedly, both hurting themselves and the people around them\r\n', 2007, 'Roman/Animasi', 'https://drive.google.com/uc?export=download&id=1JvwzHKkKfauzx7Y1mHTzbI93hloVMSX3', '2.jpg', 'b.jpg', 'https://www.youtube.com/embed/iPsu_sk-e7Q?si=yHVGwOYcMunsi8qS'),
(4, 'Koe no Katachi (A Silent Voice)', 'As a wild youth, elementary school student Shouya Ishida sought to beat boredom in the cruelest ways. When the deaf Shouko Nishimiya transfers into his class, Shouya and the rest of his class thoughtlessly bully her for fun. However, when her mother notifies the school, he is singled out and blamed for everything done to her. With Shouko transferring out of the school, Shouya is left at the mercy of his classmates. He is heartlessly ostracized all throughout elementary and middle school, while teachers turn a blind eye.\r\n\r\nNow in his third year of high school, Shouya is still plagued by his wrongdoings as a young boy. Sincerely regretting his past actions, he sets out on a journey of redemption: to meet Shouko once more and make amends.\r\n\r\nKoe no Katachi tells the heartwarming tale of Shouya\'s reunion with Shouko and his honest attempts to redeem himself, all while being continually haunted by the shadows of his past.\r\n', 2016, 'Roman/Drama', 'https://drive.google.com/uc?id=1UmF491-RkCg6-Hx5FFCTR-CM3tpL5dSj', '3.jpg', 'c.jpeg', 'https://www.youtube.com/embed/nfK6UgLra7g?si=U-jihnibRmprvHN9'),
(5, 'Josee to Tora to Sakana-tachi', 'Equipped with his passion for diving and admiration for marine biology, university student Tsuneo Suzukawa tries his best to juggle several part-time jobs to earn enough money to study abroad. But one night, in a fateful accident, he meets a girl in a wheelchair, driving his current path into a detour.\r\n\r\nThe girl, Kumiko—who prefers to be called \"Josee\"—initially comes off as rude. Tsuneo, however, is then convinced by Josee\'s grandmother to take on the paid job to be Josee\'s caretaker. Despite being annoyed with her bossy demeanor, Tsuneo sees the opportunity to save more funds to support his academic dream. Nonetheless, after putting up with Josee\'s behavior for some time, Tsuneo tries to quit, only to discover Josee\'s dreams of traversing the outside world—to experience a life free from her crippling condition.\r\n\r\n', 2020, 'Roman/Komedi ', 'https://drive.google.com/uc?export=download&id=1TX7J-waKjwAiO7VfBk1_zPdvkHSHqacA', '4.jpg', 'd.jpg', 'https://www.youtube.com/embed/QvgpMxoyDds?si=f5xq17X5YRbRNsFB'),
(20, 'Natsu e no Tunnel, Sayonara no Deguchi', 'Kaoru Touno\'s family is falling apart. After the death of a sibling and his parents\' divorce, he no longer feels any peace at home. Following a heated confrontation with his father, Kaoru runs out of his house and finds himself before a mysterious tunnel, which pulls him in. Bewildered by what he sees inside, he rushes to the exit, picking up a bird that looks identical to his deceased pet on his way out.\r\n\r\nUpon emerging outside, Kaoru realizes that, despite him spending just a few minutes inside the tunnel, an entire week has passed. The bizarre experience leads him to remember the rumors of \"Urashima Tunnel\"—a passage that grants wishes in exchange for one\'s lifespan. Given the resurrection of his pet bird, Kaoru cannot help but wonder if another visit can help fix his messed up life.\r\n', 2022, 'Fiksi ilmiah/Misteri', 'https://drive.google.com/uc?export=download&id=1tBbo6gsxiPYuGQfZPRhpjukTnqzLrZ-f', '5.jpg', 'e.jpg', 'https://www.youtube.com/embed/EhPu7arYYYo?si=4yoskBm939-z6AcI'),
(21, 'Summer Ghost', '\r\n\"Have you heard of Summer Ghosts?\" Tomoya, Aoi, and Ryo are high school students who met through the Internet. The urban legend of the Summer Ghost is that it is a ghost of a young woman who appears when fireworks are lit. Tomoya is unable to step out into the life he wants. Aoi is unable to find her place in the world. Ryo\'s bright future is suddenly closed to him. Each of them has their own reasons for meeting the Summer Ghost. On a summer night when life and death intersect, where will each of their thoughts go to?\r\n', 2021, 'Fantasi/Misteri', 'https://drive.google.com/uc?export=download&id=1vmfaqqEq9MldNBlNY7aTM5lg7OmhHITL', '6.jpg', 'f.jpg', 'https://www.youtube.com/embed/JgXXExMU9IQ?si=GF74k_NX0QLJeDXL'),
(22, 'Cider no You ni Kotoba ga Wakiagaru', 'Yui \"Cherry\" Sakura expresses himself better through the haiku he writes and posts on the internet, even though no one gives it attention. While preparing for him and his family to relocate in August, he spends the summer working part-time at a welfare facility. Meanwhile, Yuki \"Smile\" Hoshino is a budding influencer who wants everyone to smile. However, she feels uneasy about the braces on her protruding front teeth and conceals her own smile using a disposable mask.\r\n\r\nAfter an accidental encounter with Cherry, Smile finds herself becoming a part-time worker at the same facility as him. Soon, the two assist a senile man, Fujiyama, in searching an old vinyl record he owns. Unable to remember its last location, he wishes to listen to it once more before his memories fade for good. Cherry and Smile only have the record\'s sleeve and the word \"yamazakura\" as clues, and their hunt in the hazy summer heat begins\r\n', 2021, 'Roman/Komedi', 'https://drive.google.com/uc?export=download&id=1yAncYnAZjpyP9OhjCyIVAoZpNYzt1oKW', '7.jpg', 'g.jpg', 'https://www.youtube.com/embed/d8ohxzKmmzw?si=4zLUFWPyPQ871uih'),
(25, 'Tenki no Ko (Weathering with You)', 'Tokyo is currently experiencing rain showers that seem to disrupt the usual pace of everyone living there to no end. Amidst this seemingly eternal downpour arrives the runaway high school student Hodaka Morishima, who struggles to financially support himself—ending up with a job at a small-time publisher. At the same time, the orphaned Hina Amano also strives to find work to sustain herself and her younger brother.\r\n\r\nBoth fates intertwine when Hodaka attempts to rescue Hina from shady men, deciding to run away together. Subsequently, Hodaka discovers that Hina has a strange yet astounding power: the ability to call out the sun whenever she prays for it. With Tokyo\'s unusual weather in mind, Hodaka sees the potential of this ability. He suggests that Hina should become a \"sunshine girl\"—someone who will clear the sky for people when they need it the most.', 2019, 'Fantasi/Roman', 'https://drive.google.com/uc?export=download&id=1JfuY4HHYTvftvwyHbJrK-SZao-AQ04IQ', '8.jpg', 'h.jpg', 'https://www.youtube.com/embed/Q6iK6DjV_iE?si=UGOt8cTpg_V583-n'),
(26, '3D KANOJO : REAL GIRL', 'For Hikari Tsutsui, life within the two-dimensional realm is much simpler. Socially inept and awkward, he immerses himself in video games and anime, only to be relentlessly ridiculed and ostracized by his classmates. Sharing his misery is Yuuto Itou, his only friend, who wears cat ears and is equally obsessed with the world of games.\r\n\r\nAfter being forced to clean the pool as punishment for arriving late, Tsutsui meets Iroha Igarashi, but he attempts to steer clear of her, as her notoriety precedes her. Brazenly blunt, loathed by female classmates, and infamous for messing around with boys, Tsutsui believes that getting involved with her would cause nothing but problems.', 2018, 'Roman', 'https://drive.google.com/uc?export=download&id=1usXoep3rRlf2U1H-Oinj_EqUqWDM7Lfb', '9.jpg', 'i.jpg', 'https://www.youtube.com/embed/4b1Lpm_px04?si=Ez7YOyNf2mpwHH_z'),
(27, 'AKUDAMA', 'Long ago, war broke out between the regions of Kanto and Kansai, splitting the country in two. Kansai became a vassal state of Kanto and developed characteristic advancements. However, with the decline of the government and the police force, crime ran rampant. Those criminals are called Akudama.', 2020, 'Action', 'https://drive.google.com/uc?export=download&id=1WxmxE3KTyjpqh604bQdwmWVGGCVTOPch', '10.jpeg', 'j.jpg', 'https://www.youtube.com/embed/O4AAlCTCGa8?si=xFrpen_1VmLw0DHj'),
(28, 'BLEACH MOVIE 1 : MEMORIES OF NOBODY', 'When a life ends, its soul departs to its final resting place known as the Soul Society. However, if a soul is left to wander in the human world for too long, it ends up turning into a corrupted \"Hollow\" that feeds on other souls. In such cases, spirits called \"Soul Reapers\" are needed to eliminate the Hollows and guide the lost souls to the Soul Society.\r\n\r\nIchigo Kurosaki and Rukia Kuchiki are two Soul Reapers who are used to dealing with Hollows that appear in Karakura Town. But when they encounter the hostile \"Blanks\"—souls devoid of memories and immune to the \"soul burial\" used by Reapers—they are thrown for a loop. Senna, a fellow Reaper that neither Ichigo or Rukia are familiar with, comes to their rescue and manages to fend off the Blanks. The mystery deepens when a mirage of the human world suddenly appears over Soul Society. What could be the reason behind the strange phenomena, and how is it connected to Senna, who avoids any questions about her identity?', 2006, 'Action', 'https://docs.google.com/uc?id=1pEUOI5Axd82ZGlnQ51JDjccmPj_aMRjt', '11.jpeg', 'k.jpg', 'https://www.youtube.com/embed/PO4whF-Mqu0?si=2CuG8rXoQItgsoX3'),
(29, 'BLEACH MOVIE 2 : THE DIAMONDDASTREBILLION', 'After the treasured Ouin is stolen, Toshiro Hitsugaya disappears and becomes suspected of treason. When the Soul Society calls for his capture and execution, Substitute Soul Reaper Ichigo Kurosaki vows to prove Hitsugaya\'s innocence.', 2007, 'Action', 'https://docs.google.com/uc?id=1gKvaCeRkXioAZpFLWR43MyOa8jQ3krDH', '12.jpeg', 'l.jpg', 'https://www.youtube.com/embed/sEPGkt2Uczc?si=PaQrqN5DAT8lRTo1'),
(30, 'BLEACH MOVIE 2 : FADE TO BLACK', 'Bleach: Fade to Black (BLEACH Fade to Black 君の名を呼ぶ, Burīchi: Fade to Black - Kimi no Na o Yobu; Full Japanese title \"Bleach Fade to Black, I Call Your Name\") is the third Bleach film. It was released in Japan on December 13, 2008, and on DVD on September 30, 2009. The film\'s screenplay was written by Natsuko Takahashi, who is a screenwriter for the anime series. The official film website gives the tagline of \"Sayonara, Rukia\".', 2008, 'Action', 'https://drive.google.com/uc?export=download&id=1x-vptYomy5XCKwqb3bWAVbaURI3lgIQ0', '13.jpeg', 'm.jpg', 'https://www.youtube.com/embed/HVNLo3ciIpk?si=LW5gPUxnJPKDx5GU'),
(31, 'ONE PIECE MOVIE 1', 'There once was a pirate known as the Great Gold Pirate Woonan, who obtained almost 1/3 of the world\'s gold. Over the course of a few years, the pirate\'s existence faded, and a legend grew that he disappeared with his gold to a remote island, an island pirates continue to search for. Aboard the Going Merry, Luffy and his crew, starved and reckless, are robbed of their treasure. In an attempt to get it back, they wreck the getaway ship, guided by a young boy named Tabio, who\'s a captured part of El Drago\'s pirate crew.', 2000, 'Action', 'https://drive.google.com/uc?export=download&id=117xdjjs3wPsBzt0RPTAI091x58KXkOof', '14.jpeg', 'n.jpg', 'https://www.youtube.com/embed/HXY6cxtNIJc?si=MATYABQQutsI9urh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_pengguna` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipe` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_pengguna`, `nama`, `email`, `password`, `tipe`) VALUES
(1, 'Maman', 'maman@gmail.com', '123', 1),
(3, 'Rizky', 'rizky@gmail.com', '456', 2),
(6, 'Yogi', 'yogi@gmail.com', '098', 2),
(7, 'Lukman', 'lukman@gmail.com', '123', 2),
(8, 'Ahmad', 'ahmad@gmail.com', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id_favorite`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `table_film`
--
ALTER TABLE `table_film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id_favorite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `table_film`
--
ALTER TABLE `table_film`
  MODIFY `id_film` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
