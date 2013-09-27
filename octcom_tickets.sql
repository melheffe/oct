-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-06-2008 a las 09:35:11
-- Versión del servidor: 4.1.22
-- Versión de PHP: 5.2.3

SET FOREIGN_KEY_CHECKS=0;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `octcom_tickets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `at`
--

CREATE TABLE `at` (
  `id_at` int(3) NOT NULL auto_increment,
  `nombre_at` varchar(50) NOT NULL default '',
  `pic_at` varchar(120) NOT NULL default '',
  `cat_pds` int(2) NOT NULL default '0',
  `coments` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id_at`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Atractions ' AUTO_INCREMENT=74 ;

--
-- Volcar la base de datos para la tabla `at`
--

INSERT INTO `at` VALUES(1, 'Gwazi', 'files/at-image_gwazi.jpg', 12, '', 'Gwazi is Busch Gardens Tampa Bay''s mammoth double wooden coaster. It is also the Southeast''s largest and fastest double wooden roller coaster boasting more than 1.25 million board feet of lumber and over 2 million bolted connections. Named after a fabled lion with a tiger''s head, Gwazi races riders through almost 7,000 feet of track and is two distinct coasters intertwined. ');
INSERT INTO `at` VALUES(2, 'Congo River Rapids', 'files/at-image_congo.jpg', 12, '', 'Encounter the swift-flowing white water of the Congo River Rapids. Spin through a geyser, face an ominous waterfall, and other thrilling obstacles in a 12-person raft. You must be 42 inches tall to ride this ride and other safety restrictions may apply. \r\n');
INSERT INTO `at` VALUES(3, 'Stanley Falls', 'files/at-image_stanley.jpg', 12, '', 'Cool off on Stanley Falls. Our Log Flume whisks your whole family through a splashing trip ending in a 40-foot drop that''s sure to get you soaked. You must be 46 inches tall minimum or a minimum of 2 years of age accompanied by an adult to ride Stanley Falls. Other safety restrictions may apply.');
INSERT INTO `at` VALUES(4, 'Shamu', 'files/at-250px-shamubeach.jpg', 18, '', 'Shamu is the name of SeaWorld''s iconic Orca (killer whale) show. Shamu''s popular performances are presented along with Baby Shamu and Grandbaby Shamu in 7-million-gallon tanks');
INSERT INTO `at` VALUES(5, 'The Amazing Adventures of Spider-Man®', 'files/at-spiderm.jpg', 40, 'The Amazing Adventures of Spider-Man® is located in Marvel Super Hero Island® at Universal''s Islands of Adventure®.\r\n\r\nEnter a gleaming comic book city where the world''s greatest Super Heroes pit themselves against the world''s most diabolical Super Villains in the ultimate battle of good versus evil.', 'Your Spider-Senses Will Be Tingling. Put on your 3-D glasses for an eye-popping, pulse-pounding, first-of-its-kind 3-D Spider-Man thrill ride.\r\n\r\nCareening through the streets and swinging high above the city, you''ll see, hear, and actually FEEL the action of Spider-Man''s most amazing adventure ever. ');
INSERT INTO `at` VALUES(6, 'Dueling Dragons®', 'files/at-us-dueling-dragons.jpg', 40, 'Dueling Dragons® is located in The Lost Continent® at Universal''s Islands of Adventure®.\r\n\r\nExplore an ageless land of ancient myths and epic legends. From a castle guarded by warring dragons to a battle of titans beneath the sea, heart-pounding adventure awaits around every corner.', 'They''re the world''s first inverted, dueling roller-coasters. Soar 125 feet in the air and reach speeds of 55 mph on two unique rides.\r\n\r\nRide with the Fire Dragon or Ice Dragon as they narrowly pass within inches on a roller coaster dogfight across the sky!');
INSERT INTO `at` VALUES(7, 'Jurassic Park River Adventure®', 'files/at-jp_riveradventure.jpg', 40, 'Jurassic Park River Adventure® is located in Jurassic Park®, the largest of the five islands at Islands of Adventure at more than 21 acres. Experience the "real" Jurassic Park, where dinosaurs have been brought back to co-exist with man for the first time anywhere.', 'It''s lunchtime... and you''re on the Menu! Take an unforgettable river raft ride, and see dinosaurs in their natural habitats.\r\n\r\nBut be careful! The fences are down, the Raptors have broken loose, and the only escape from the terrifying jaws of a hungry T-rex is an 85-foot plunge in total darkness!');
INSERT INTO `at` VALUES(8, 'The Cat In The Hat™', 'files/at-seus.jpg', 40, 'The Cat In The Hat and other children''s rides are located in Seuss LandingTM at Islands of Adventure, the only place where Dr. Seuss'' whimsical children''s tales come to life before your eyes!\r\n\r\nIt''s a treat for all of your senses, especially your sense of humor!', 'Go For A Spin with The Cat In The Hat! Ride your couch through the pages of the famous children''s book.\r\n\r\nYou''ll spin and swerve this way and that as that mischievous cat and his friends Thing OneTM and Thing TwoTM almost bring down the house. You''d better hope things calm down before Mom comes home! ');
INSERT INTO `at` VALUES(10, 'Glass-Bottom Boats', 'files/at-sspring1.jpg', 42, ' ', 'Here you can view the underground springs from our famous glass-bottom boats, where you’ll see fish, shellfish, turtles and alligators in water that’s up to 80 feet deep and 99.8% pure.');
INSERT INTO `at` VALUES(11, 'Florida''s Natural Wildlife', 'files/at-sspring2.jpg', 42, '', 'Thrill to the unparalleled view of the world''s largest artesian springs and see countless fish, turtles, alligators, birds and other Florida Wildlife aboard the world famous glass Bottom Boats.');
INSERT INTO `at` VALUES(12, 'Toboggan Racers', 'files/at-tobaggan_racers.jpg', 30, '', 'Race in one of eight side-by-side lanes that toboggan down the mountain. Hang on to your mat and head down the slopes. Exhilarating dips make your charge to the finish line an avalanche of fun. Ready. Set. Snow! ');
INSERT INTO `at` VALUES(13, 'Slush Gusher', 'files/at-slush-gusher-250.jpg', 30, '', 'Speed down the 90-foot tall Mount Gushmore in a slush-banked mountain gully. Two humps create brisk fun-filled ups and downs on your journey to the bottom of the powder-capped mountain. Launch down the slopes in the shadow of Summit Plummet. There''s "snow" where else like it. ');
INSERT INTO `at` VALUES(14, 'Cross Country Creek', 'files/at-crosscountrycreek.jpg', 30, '', 'Kick back and "chill" in an inner tube on this gently meandering river that flows around the entire Park. Bask in the warmth of the sun. Use the Creek as a transportation system to effortlessly get from one area of the Park to the next or just ride along and watch the world drift slowly by. Go with the flow! ');
INSERT INTO `at` VALUES(15, 'Surf Pool', 'files/at-typhoon_lagoon_surf_pool.jpg', 32, '', 'Take a dip in the azure blue waters of one of the world''s largest wave pools. The surf''s up all day long as body-surfing enthusiasts catch waves toward the sandy shore. Dive into the excitement, languish in the gentle waters farther from the action or lounge on the white sand beaches. Whichever you choose, you can always listen to the shrieks of delight every time a wave heads for shore. Surf''s up! ');
INSERT INTO `at` VALUES(16, 'Shark Reef', 'files/at-tl11.jpg', 32, '', 'Swim into a tank with real live sharks and schools of tropical fish. This saltwater adventure takes place on a reef around an overturned sunken tanker. Non-swimming Guests can even go inside the tanker and observe the sharks through portholes. Sink your teeth into this exciting excursion!');
INSERT INTO `at` VALUES(18, 'Space Mountain', 'files/at-space50th-wr.jpg', 35, '', 'Dare to be a rocket jockey and blast into the outer-galaxy past shooting stars and other-worldly celestial satellites. Twist and turn in a tumult of fun as you launch into the inky blackness of the nether reaches of space. It''s one giant leap for fun! ');
INSERT INTO `at` VALUES(19, 'THE TREE OF LIFE', 'files/at-2.jpg', 27, '', 'In this amazing place, your in a living story book on a breath taking adventure filled with creatures real and fantastic. From an incredible blast through flaming meteors and ferocious dinosaurs to a crazy, twisting romp through time on a spinning roller coaster, every turn brings unexpected wonders. Venture out on safari across 110 acres of African Savannah to encounter freely roaming wildlife. Get a hilarious 3-D look at the world from a bug''s point of view. Let your heart sing along with the movie musical celebration of the circle of life, Festival Of The Lion King. In Disney''s Animal Kingdom Theme Park, every path and trail invites you to explore the awesome surprised of nature combined with all the enchantment of Disney.');
INSERT INTO `at` VALUES(20, 'DINOSAUR', 'files/at-1.jpg', 27, '', 'You board the 12 passenger, all terrain vehicle, fasten your seat belt and are OFF!!! When the light emerges, you find yourself in the prehistoric forests and dinosaurs are everywhere.The sky darkens once again and meteors come flying out at you. You speed through the alioramous as he enjoys a giant lizard. Your Time Rover is caught in the Meteor shower and has lost its headlights. You are face to face with a carnotaurus!The radio signals that there are 60 seconds to impact! You dip and swerve still looking for the Iguanodon. The homing signal attaches to the Iguanodon just as a meteor hits earth! The force of the impact creates a tremendous vacuum, sucking everything forward. ITS OVER! You survived! And not only are you alive and OK, but Dr. Seeker''s Iguanodon came back with you!');
INSERT INTO `at` VALUES(21, 'THE SEAS WITH NEMO!', 'files/at-epcot03.jpg', 34, '', 'Inspired by Disney·Pixar''s "Finding Nemo"\r\nCruise out to sea in the clamobile! Greet all your Nemo pals as they swim amid the live marine life of the gigantic aquarium. Delve down into the deepest parts of the ocean in this fun-filled story where the majesty of nature meets whimsical Disney magic. Afterwards, chill out and spend some quality time in Turtle Talk with Crush.\r\n');
INSERT INTO `at` VALUES(22, 'SOARIN', 'files/at-epcot05.jpg', 0, '', 'Take your imagination to new heights at Walt Disney World''s Epcot Center, as you wing your way through the skies on a breathtaking, awe-inspiring flight on the newest Epcot attraction.\r\nFrom 40-feet in the air this amazing free-flying attraction gives you an aerial view of the beauty and splendor of California. Experience the Golden State like never before — from the Majestic redwoods of Yosemite to the Golden Gate Bridge to the bright lights of Hollywood.');
INSERT INTO `at` VALUES(23, 'SOARIN', 'files/at-epcot05.jpg', 34, '', 'Take your imagination to new heights at Walt Disney World''s Epcot Center, as you wing your way through the skies on a breathtaking, awe-inspiring flight on the newest Epcot attraction.\r\nFrom 40-feet in the air this amazing free-flying attraction gives you an aerial view of the beauty and splendor of California. Experience the Golden State like never before — from the Majestic redwoods of Yosemite to the Golden Gate Bridge to the bright lights of Hollywood. ');
INSERT INTO `at` VALUES(25, 'Down Town Disney', 'files/at-disneyquest04.jpg', 36, ' ', 'DisneyQuest is located in Down Town Disney, and is an Indoor Interactive Theme Park, \r\ncombining cutting-edge entertainment technologies such as virtual reality and \r\n3-D with Disney stories and characters to create a one-of-a-kind experience. Explore five floors of virtual fun with over 250 attractions, rides, and games that can only be experienced at DisneyQuest®.Price includes one-day admission and unlimited play on all Disney Quest® attractions and games (excludes prize redemption games). Children under 10 years old must be accompanied by an adult. \r\nStrollers are not permitted. Late Night Ticket subject to availability. ');
INSERT INTO `at` VALUES(26, 'Pirates of the Caribbean', 'files/at-dq6.jpg', 36, ' ', 'Put on your headpiece to inhabit a world booming with swashbuckling action. Steer your ship, fire cannons at marauding buccaneers and race for the gold!\r\nHeight Requirement: 35" (88.9 cm) or taller ');
INSERT INTO `at` VALUES(27, '', 'files/at-cirque_nouba.jpg', 0, '', 'An everyday circus this is not! \r\nAnd there is no life experience that could possibly prepare you for what you are about to feel. A masterfully scored evening of entertainment. Cirque du Soleil® La Nouba™ blends the daring with the endearing, and it make the impossible seem quite possible indeed. It will dazzle you with its outrageous costumes and outlandish acts. An avant-garde blend of circus art and theater. Broadway spectacle, and absolute whimsy is waiting for your witness at the Downtown Disney® West Side.');
INSERT INTO `at` VALUES(28, '', 'files/at-dvd07.jpg', 26, '', 'Experience the wonder of this one-of-a-kind theatrical delight. "Live it up" at this spellbinding Cirque du Soleil® creation, a must-see for anyone who desires a truly dazzling evening of spectacular entertainment -- created exclusively for the Walt Disney World® Resort. ');
INSERT INTO `at` VALUES(29, '', 'files/at-cirque_nouba.jpg', 26, '', 'An everyday circus this is not! \r\nAnd there is no life experience that could possibly prepare you for what you are about to feel. A masterfully scored evening of entertainment. Cirque du Soleil® La Nouba™ blends the daring with the endearing, and it make the impossible seem quite possible indeed. It will dazzle you with its outrageous costumes and outlandish acts. An avant-garde blend of circus art and theater. Broadway spectacle, and absolute whimsy is waiting for your witness at the Downtown Disney® West Side.');
INSERT INTO `at` VALUES(30, '', 'files/at-orl_pleasureisland.jpg', 31, ' ', 'Eight Completely different clubs offer something for everyone. Exceptional dining, distinctive shops and boutiques it''s an entire Island of nighttime fun! At the stroke of midnight, be part of an incredible New Year''s Eve celebration... every night! Downtown Disney® Pleasure Island is the only place \r\nwhere club hopping is non-stop! • BET SoundStage Club™ Hot Hip Hop and R&B  21 & up Only\r\n• Comedy Warehouse may cause sides to ache from laughter 18 & up\r\n• Mannequins Dance Palace Voted #1 in the US 21 & up Only\r\n ');
INSERT INTO `at` VALUES(32, '', 'files/at-pi1.jpg', 31, '', 'NEW! Orlando Harley-Davidson Store \r\n• 8 Trax bell-bottomed smashes from the ''70s 21 & up Only\r\n• Rock N Roll Beach Club Jam to all-time hits  21 & up Only\r\n• NEW! Raglan Road Irish Pub and Restaurant \r\n• Adventurer''s Club Zany outrageous tales of adventure 18 & Up\r\n• Motion Top-40 music sweeps you through the cobalt blue of space in the Island''s newest club 21 & up Only\r\n\r\nAnd for your dining pleasure, don''t forget the New Portobello Yacht Club ,\r\nserving the best in regional Italian cuisine.');
INSERT INTO `at` VALUES(33, 'Lights, Motors, Action! Extreme Stunt Show!', 'files/at-hollywood01.jpg', 33, '', 'Get ready for extreme thrills as this full-throttle, high-octane live stunt spectacular comes roaring in from Disneyland® Resort Paris. Engines rev, tires screech and adrenaline kicks into overdrive as a series of highly orchestrated stunts, specially designed cars, motorcycles and jet skis and amazing pyrotechnics give you a behind-the-scenes look at how action stunts are created for the movies.');
INSERT INTO `at` VALUES(34, 'Movies more than 40 years ago!', 'files/at-hollywood02.jpg', 33, '', 'Walt Disney first had the idea for a park based on the movies more than 40 years ago, but it wasn''t until May 1989 that the Walt Disney Company unveiled the Disney-Hollywood Studios, where guests of Walt Disney World can witness the inner workings of living, breathing movie and television production facilities.');
INSERT INTO `at` VALUES(35, 'More than 40 major adventures', 'files/at-magickingdom07.jpg', 44, '', 'More than 40 major adventures on a 107-acre site. Seven lands with attractions, restaurants and shops based on favorite Disney themes of fantasy, of yesterday and tomorrow: Adventureland®; Liberty Square; Frontierland®; Main Street, U.S.A.; Fantasyland®; Tomorrowland®; Mickey''s Toontown® Fair. Opened October 1, 1971..\r\nFollow your Disney dreams to a place where storybook fantasy comes to life for children of all ages. \r\nSeek out adventures, create magical memories with beloved Characters and discover the fun where imagination reigns ');
INSERT INTO `at` VALUES(36, 'Also', 'files/at-magickingdom04.jpg', 0, '', 'Monsters, INC. Laugh Floor\r\nMicky''S Philhar Magic \r\nThe Haunted Mansion\r\nStitch´s  Great Escape\r\nBuzz Lightyear`s Space Ranger Spin \r\nPirates Of The Caribbean \r\nBig Thunder Mountain Railroad\r\nSpace Mountain \r\nSplash Mountain\r\nTomorrowland Speedway\r\n\r\n');
INSERT INTO `at` VALUES(37, 'Also', 'files/at-magickingdom04.jpg', 44, '', 'Monsters, INC. Laugh Floor, MICKEY''S PHILHAR MAGIC, THE HAUNTED MANSION, STITCH''S GREAT ESCAPE, BUZZ LIGHTYEAR''S SPACE RANGER SPIN, PIRATES OF THE CARIBBEAN \r\nBig Thunder Mountain Railroad, Space Mountain, Splash Mountain, Tomorrowland Speedway....... \r\n\r\n\r\n\r\n');
INSERT INTO `at` VALUES(39, 'SHREK 4-D ®', 'files/at-shrek.jpg', 38, '', 'Joins Princess FionaTMand our heroes on an all new honeymoon adventure picking up where the Oscar - winning movie "Shrek" left off. Shrek 4-DTM freatures an orignal 3-D Film, plus an extra dimension of special effects through the miracle of Ogre Vision.');
INSERT INTO `at` VALUES(40, 'MEN IN BLACK ALIEN ATTACKTM', 'files/at-universal01.jpg', 38, '', 'It''s up to YOU to protect the Earth from aliens in MEN IN BLACK Alien Attack. As an agent trainee, you''ll zap aliens as you chase them through the streeets of New York in this high-tech ride based on the hit movie. The outcome is based on your score--save Earth and you might get promoted to full fledge Men in Black agent! With mulitple endings, it''s never the same ride twice! Have you got what it takes to join the best of the best?');
INSERT INTO `at` VALUES(41, 'BLUE MAN GROUP', 'files/at-blue-man.jpg', 38, '', 'Experience the new face of today''s entertainment at Universal Orlando Resort with Blue Man Group. Their unique form of entertainment that combines music, comedy and multimedia theatrics to create a blissful party atmosphere that people of all ages agree is a totally outrageous experience. World-renowned for their live stage shows, Blue Man Group now brings their eclectic mix of live music, fantastic percussion instruments, unexpected humor and so much more to Orlando—and the only place in town you’ll find a show as astounding as this is at Universal Orlando Resort.');
INSERT INTO `at` VALUES(42, 'JOURNEY TO ATLANTIS', 'files/at-sea25.jpg', 18, '', 'Brave the plummets and perils of Seaworld''s extraordinary water-coaster, Journey to Atlantis. Traveling on water and high-speed rails, you''ll be chased by spirits who want to keep Atlantis - and you - for their own! You''ll never know what''s around the next corner or the next drop - even when it''s 60 feet, nearly straight down.');
INSERT INTO `at` VALUES(43, 'THE NEW DISCO H20', 'files/at-wet1.jpg', 41, '', 'Enter a bomb-like capsule and feel the floor drop from beneath you as you take a heart stopping plunge down a 76-foot height, nearly vertical slide. There''s nothing else quite like Wet and Wild. All 30 action -packed acres are loaded with thrills, from the height speed excitement of the board around our half-mile lake course, hurtle through the darkness of the Black Hole, or bounce and slide on a big rubber ball called the Bubble up. And for the kids, there''s an interactive playground with a tiny wave pool and miniature versions of our hottest rides. ');
INSERT INTO `at` VALUES(44, 'BUBA TUB', 'files/at-wet-n-wild2.jpg', 41, '', 'Wet and Wild has more for families to do together than any other water park in Orlando! Mom and Dad can relax and drift away on the lazy River or the Surf Lagoon wave pool, while thrill seeking teens can experience the ultimate free-fall on the Bomb Bay or the Der Stuka. Little ones love the Kids’ Park with miniature versions of the park’s most popular adult rides – there’s something for everyone to do, no matter how young or young at hear you are! And if the family wants to spend time together, they can enjoy a wide variety of multi-passenger rides in tubes big enough to hold the entire family!');
INSERT INTO `at` VALUES(45, 'A magical tale of love and triumph', 'files/at-100.jpg', 1, '', 'Arabian Nights Dinner Attraction, voted #1 dinner show in Orlando, Florida, is a magical tale of love and triumph that features 60 horses from around the world. This Dinner Show production features Walter Farley''s Black Stallion and is performed nightly in an arena that seats 1,200. The "Palace of Horses" has received millions of guests over twenty years, and provides the backdrop for a dramatic story that delights guests with beautiful horses and continuous action.');
INSERT INTO `at` VALUES(46, 'More costumes than a Broadway production', 'files/at-anights1.jpg', 0, '', 'Arabian Nights Dinner Attraction uses more costumes than a Broadway production and is enhanced by state-of-the-art lighting and special effects (including snow!). The Dinner Show story revolves around the birthday of a Princess and guests are invited to share in the wonder and magic created in this romantic tale on horseback.');
INSERT INTO `at` VALUES(47, 'More costumes than a Broadway production', 'files/at-anights1.jpg', 1, '', 'Arabian Nights Dinner Attraction uses more costumes than a Broadway production and is enhanced by state-of-the-art lighting and special effects (including snow!). The Dinner Show story revolves around the birthday of a Princess and guests are invited to share in the wonder and magic created in this romantic tale on horseback');
INSERT INTO `at` VALUES(48, ' We should be your first stop!', 'files/at-pirates.jpg', 3, '', 'If you are looking for an adventurous time while visiting the area of Orlando, then we should be your first stop! Pirates Dinner Adventure is a dinner show attraction that puts you and your family right in the middle of all of the swashbuckling action. The show is perfect for children. \r\nAt Pirates Dinner Show, you, along with the beautiful Princess Anita and her court, are hostages of a band of pirates led by the dastardly Sebastian the Black who will stop at nothing to plunder, pillage, and rob. Hang on, because there are rough seas ahead only at Pirates Dinner Adventure!.');
INSERT INTO `at` VALUES(49, 'Action, romance, and comedy.', 'files/at-pirates500.jpg', 3, '', 'The evening continues with the swashbuckling, side-splitting, musical Pirates Dinner Adventure Spectacular! This Broadway-quality show is presented on an enormous, fully-rigged pirates galleon. The elaborate set provides the backdrop for action, romance, and comedy. Tickets are good for any day you would like to use them. There’s nothing a dastardly pirate likes more than having a swaggering good-time celebration. Conclude your evening by joining the crew at the Buccaneer Bash and party the night away. \r\nEven royalty joins the fun at the Buccaneer Bash!');
INSERT INTO `at` VALUES(50, 'THE LONGEST RUNNING COMEDY EVER!', 'files/at-tnt_nyc_cast_1.jpg', 5, '', 'Since opening February 14th, 1988 in New York City this unique theatrical experience has won over the hearts of thousands of people, in over 100 cities worldwide, including Japan, Australia and many European cities.');
INSERT INTO `at` VALUES(51, 'Eat, Drink and  Dance', 'files/at-photo1.jpg', 5, '', 'At Tony n'' Tina''s Wedding, audience members actually play the roles of Tony n'' Tina''s family and/or friends. These are roles we have all been practicing, every time we go to a real wedding. This universal familiarity with the union of two individuals from 2 distinct families, regardless as to where you are from, will take you back and forth between fantasy and reality throughout the entire evening. For the ultimate experience... eat, drink, dance, converse and allow yourself to be caught up in the activities. This all inclusive evening of entertainment will be something you and your friends will be talking about for many years to come. ');
INSERT INTO `at` VALUES(52, 'Earth and sea.', 'files/at-dancer.jpg', 6, '', 'As the sun sets over the harbor, the Seafire Inn turns Polynesian as it hosts the Makahiki Luau, a bountiful, nightly celebration featuring the ancient customs, rhythmic music and dance, authentic costumes and cuisine of the Pacific Islands. From the moment the Kahuna welcomes you, the excitement is non-stop in this festive, fiery show that celebrates man''s co-existence with the earth and sea');
INSERT INTO `at` VALUES(53, 'Experience the enchantment of the South Seas', 'files/at-80.jpg', 6, '', 'Experience the enchantment of the South Seas at Orlando''s hottest night spot, the Makahiki Luau, presented nightly at Sea World! From the moment the Kahuna welcomes you, the action is non stop in this festive, fiery display of man''s co-existence with the earth and sea. SeaWorld admission and parking are not required for guests attending the Makahiki Luau only. Hula is the language of the heartand therefore the heartbeatof the Hawaiian people.');
INSERT INTO `at` VALUES(54, 'King Alphonso the Magnificent,  invites you', 'files/at-02.jpg', 23, ' ', 'Imagine a majestic castle high upon a hill. Upon its turrets, colorful banners wave gently in the wind. Within its walls, spirited stallions perform for their masters at Medieval Times. On this day, his majesty, King Alphonso the Magnificent, has invited six of the most noble knights of the realm to compete in a tournament of games, jousting, and hand-to-hand combat. Only one knight shall be victorious and become the personal champion to the King. Now is the time to begin our magnificent journey into the past. This is Medieval Times Dinner andTournament. ');
INSERT INTO `at` VALUES(55, 'SWORD FIGHT', 'files/at-medi1.jpg', 23, '', 'The battle grows as the two warriors fight for the honor of the king and their kingdom. In the end, only one knight will stand victorious. This worthy champion has restored peace to the kingdom and earned the adoration of the noble guests and so ends the adventure.. or does it? Visit Medieval Times and experience it for yourself.');
INSERT INTO `at` VALUES(56, 'Comedy, and improvisation with magic', 'files/at-25000.jpg', 37, ' ', 'This show combines high-energy comedy improvisation with magic to entertain audiences of all ages. Enjoy unlimited pizza, beer, wine and soda. Reservations are recommended, but walk-ins are welcome to attend the show. ');
INSERT INTO `at` VALUES(57, 'Entertain audiences of all ages', 'files/at-magic-pic-1.jpg', 37, '', 'The 90 minute experience will keep you on the edge of your seat and tickle your funny bone every 8 seconds.The production features nationally recognized entertainers Tony Brent and Danny Devaney who are sure to keep you busting at the seams. The Outta Control Magic Show provides a one of a kind entertainment experience to the Orlando area with non-stop audience participation.');
INSERT INTO `at` VALUES(58, 'Step into the world of mystery and intrigue.', 'files/at-853.jpg', 17, '', 'Step into the world of mystery and intrigue. Mingle with unusual characters. Watch for clues. The action is fast and the laughter is contagious. You will be kept on the edge of your seat as you try to solve an exciting who-dunnit. It is a challenge you will long remember!');
INSERT INTO `at` VALUES(59, 'Every night a mystery', 'files/at-sleuths2.jpg', 17, '', 'Bring your investigative skills, your appetite, and be prepared to laugh your way through the evening at Sleuths Mystery Dinner Shows, Orlando, Florida. You''ll be kept on the edge of your seat as you enjoy a delicious dinner and dessert with unlimited beer, wine and soft drinks. Our nightly performances feature one of our eleven original comedy mysteries');
INSERT INTO `at` VALUES(60, 'Visit Jerusalem in Orlando!', 'files/at-yerusalem_city-gate-w_border.jpg', 11, '', 'Visit Jerusalem in Orlando!  It is an inspiring, full day of discovery that takes you 2000 years back in time to the world of the Bible. It brings to life ancient Israel as a unique, thriving world filled with fascinating exhibits and venues. Learn about the Wilderness Tabernacle and the Great Temple; discover the amazing history of the Bible; explore the city of Jerusalem in miniature; see re-enactments of Jesus'' ministry, His life, death, and resurrection; and feel the power and passion of our original musical productions. With so much to do, people of all ages will love Orlando''s most inspiring destination!');
INSERT INTO `at` VALUES(61, 'Upcoming see Jesus at the Qumran Caves', 'files/at-999.jpg', 11, ' ', 'The 3,500 piece Nativity set was started in Italy. The original pieces are hand-carved out of hardened soap and clay. The nativity was brought to the United States from Italy about 70 years ago has been shown at malls, churches, etc. See this amazing exhibit when you visit the Holy Land Experience. ');
INSERT INTO `at` VALUES(62, 'Florida''s Natural Wildlife', 'files/at-9159298_cc4d32e3c9.jpg', 42, '', 'Thrill to the unparalleled view of the world''s largest artesian springs and see countless fish, turtles, alligators, birds and other Florida Wildlife aboard the world famous glass Bottom Boats. Take a River Cruise down the Ft. King Waterway and travel through a lush Florida Jungle teeming with extraordinary wildlife.');
INSERT INTO `at` VALUES(63, 'KRAKEN', 'files/at-666.jpg', 18, '', 'It''s just you and the monster... at Seaworld Orlando. Over 4,000 feet of track, speeds of 65 miles an hour, 7 inversions and extreme g-forces over water and underground. Dare to tame the beast, Kraken only at Seaworld Orlando!');
INSERT INTO `at` VALUES(64, 'Experience fantasia of the flight', 'files/at-1111111.jpg', 15, '', 'At Fantasy of Flight you will experience the fun and adventure of flight at the World''s Greatest Aviation Attraction. Our stunning art deco facility is home to over 40 rare and vintage aircraft many of which have been restored to flyable condition. But that is just the beginning - we offer a variety of guided tours including visits to our working restoration and maintenance areas. You can climb inside the cockpit of a Corsair fighter for a battle over the Pacific and then take a spin on our state-of-the-art hang glide simulator in our Fun with Flight area. If you are looking for a real experience, real fun, and real takeaway - something the entire family can enjoy, Fantasy of Flight is An Attraction on a Higher Plane.');
INSERT INTO `at` VALUES(65, 'We all fly in our dreams', 'files/at-908700.jpg', 15, '', '"Since the dawn of time, man has been fascinated by flight. That fascination is a physical reflection of what we all long to return to. We all fly in our dreams and when we wake, we long for that inner freedom. I hope the fantasy of flight will help light that spark within to continue you on your journey. We''ve seen the last 100 years, let''s create the next. Flight, more than anything on this planet, symbolizes man''s desire to go beyond himself. Let''s use it to inspire mankind to take the next step on its journey." ');
INSERT INTO `at` VALUES(66, 'The Gator Jumparoo Show', 'files/at-gatorland3.jpg', 16, '', 'At Gatorland, thrills and chills abound as some of the largest alligators in the world actually jump four to five feet out of the water to retrieve food in this famous one-of-a-kind show. Learn more about alligators and crocodiles and their awesome powers. Watch as giant alligators jump high enough out of the water to actually snatch food from the trainer''s hand. \r\nA must see for the entire family only at Gatorland!');
INSERT INTO `at` VALUES(67, 'Animals everywhere', 'files/at-p220455-aruba-iguanas.jpg', 16, '', 'Tortoises, iguanas, emus, fish, baby chics, goats and more. Enjoy a train ride through this beautiful natural marsh land with animals around every corner to see. Making its debut in 1965, the original Gatorland Iron Horse gave visitors a glimpse of the south end of the park as it carried passengers over alligators and by the animal displays on its journey back to the station. After 35 years of loyal service carrying millions of passengers, the old Iron Horse was finally retired in 2000 and a new station was built.Making its inaugural run on July 1, 2001, the new Gatorland Express departed from its brand new train station carrying passengers around the Jungle Crocs and Breeding Marsh/Bird Rookery areas. The train makes a stop at the very South end of the park close to Pearl''s Smokehouse and the Alligator Wrestling Stadium. Visitors can still see the old original Gator land Iron Horse on display just outside the new train station.Also located at the Gator land Train Station is Jorge''s Fun Face Painting for both kids and adults.');
INSERT INTO `at` VALUES(68, 'You don''t have to be an astronaut', 'files/at-ksc11.jpg', 25, '', 'To explore space. The Kennedy Space Center Visitor Complex provides an exhilarating and educational experience of the space program.\r\nFrom NASA''s earliest manned missions to the crews of today''s Space Shuttle, scores of Astronaut heroes have lived, trained and left their mark here at Kennedy Space Center. Now it''s your turn to explore. Nowhere else can you see, touch and hear more about the workings of America''s space program -- or get so close to the amazing machines that launched a nation into space and kept it there for more than 40 years.');
INSERT INTO `at` VALUES(69, 'John F. Kennedy Space Center', 'files/at-ksc3.jpg', 25, '', 'Is America''s premier gateway to the universe. As the world''s only launch site for the Space Shuttle, Kennedy prepares the vehicles for each mission, operates each countdown and manages end-of-mission landing recovery activities.');
INSERT INTO `at` VALUES(70, 'Tour Kennedy Space Center', 'files/at-ksc8.jpg', 25, '', 'Visit the exciting Kennedy Space Center and learn everything about our travels in space. \r\nTour Kennedy Space Center, see IMAX® movies and enjoy the exhibits and shows.');
INSERT INTO `at` VALUES(71, 'Glide through the wetlands', 'files/at-873.jpg', 43, '', 'Glide through the wetlands viewing Florida''s native wildlife. Our airboat tours start with a leisure idle down a natural canal to experience the excitement of viewing exotic birds, turtles and the Florida alligator in their own natural environment. Then you will fly like the wind into the swamps experiencing the awesome feel of the airboat ride traveling at speeds of up to 45 miles per hour. Boggy Creek Airboat Rides is the best way to experience the beautiful Central Florida Everglades. ');
INSERT INTO `at` VALUES(72, 'At night also', 'files/at-nighttour1_003.jpg', 0, '', 'We have 3 airboat tours available. 30 minute airboat ride, 45 minute private airboat tour and the one hour night time airboat ride. Click on the photo to the left to get more information on our airboat tours.');
INSERT INTO `at` VALUES(73, 'At night also', 'files/at-nighttour1_003.jpg', 43, '', 'This Airboat Tour is for those who want to go to the farthest extremes in adventure and thrills and are not afraid of the dark. Search the thrilling swamps for the intimidating Florida Alligator. Watch the alligators glide across the marsh seeking their next prey. The only way to see these impressive dinosaurs is in their territory on one of our One Hour Night Airboat Tours. Your captain will wear a miners cap that will help seek out these most revered reptiles.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(6) NOT NULL auto_increment,
  `id_item` int(5) default NULL,
  `type` int(5) default NULL,
  `id_ses_track` varchar(255) default NULL,
  `cantidad` smallint(5) unsigned default NULL,
  `h` int(1) NOT NULL default '0' COMMENT 'Hopper',
  `w` int(1) NOT NULL default '0' COMMENT 'Water Parks',
  `e` int(1) NOT NULL default '0' COMMENT 'No Expiration',
  `kind` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id_cart`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Volcar la base de datos para la tabla `cart`
--

INSERT INTO `cart` VALUES(1, 11, 1, 'f3941c647167790562e91c5e2a9cdd6d', 1, 0, 0, 0, 0);
INSERT INTO `cart` VALUES(2, 48, 1, '079c7cdf1e800dd9efd379b97ff6797b', 1, 0, 0, 0, 0);
INSERT INTO `cart` VALUES(3, 46, 1, '079c7cdf1e800dd9efd379b97ff6797b', 1, 0, 0, 0, 0);
INSERT INTO `cart` VALUES(4, 48, 1, '12e4d7c4b3a576752271be776dcc1ad7', 7, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(10, 48, 1, '98f54fbd987e4f45024569bf9d8c5021', 3, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(9, 0, 1, '98f54fbd987e4f45024569bf9d8c5021', 1, 1, 0, 1, 3);
INSERT INTO `cart` VALUES(11, 15, 1, 'd71d03d26414b1bbe8d7010f4a180856', 3, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(12, 0, 1, '5fc4360cf44a3986fe8f340296c3e2be', 2, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(13, 0, 1, 'f58fd8a06850a98621145a822e20fe9e', 3, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(14, 0, 2, 'bd52de061e9cbded53c2abf7b08c56b4', 1, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(15, 48, 1, 'bd52de061e9cbded53c2abf7b08c56b4', 10, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(16, 48, 1, 'af9fcf7e1b264a2e081f03571aad2027', 2, 1, 1, 1, 3);
INSERT INTO `cart` VALUES(17, 4, 2, '44c766b3bef66ac699bfd2c6e3f92461', 1, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(18, 1, 1, '44c766b3bef66ac699bfd2c6e3f92461', 1, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(19, 49, 1, 'e2cc8282b86b5384d5c72cf528344b44', 7, 0, 0, 0, 2);
INSERT INTO `cart` VALUES(20, 15, 1, '185406016beefe73c77dcc6cd012e8a6', 1, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(21, 16, 2, '185406016beefe73c77dcc6cd012e8a6', 1, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(22, 48, 1, '2e7b0e464a1c6acd85d18e15175de61f', 3, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(23, 0, 2, '2e7b0e464a1c6acd85d18e15175de61f', 2, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(24, 48, 1, 'ec44b4a298f9d59b94f454f6933f5e7a', 1, 1, 1, 0, 3);
INSERT INTO `cart` VALUES(25, 1, 1, '905e8744d15f2a2c2d0177466b0533cf', 1, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(26, 0, 1, 'c6d7f09b660d6a7f6c9dfe348d0f1b6d', 4, 0, 1, 0, 3);
INSERT INTO `cart` VALUES(27, 48, 1, 'e46ef650a9bdd8f9a4472dc90c60d31d', 5, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(28, 48, 1, '921b040d4a8527a3aeddd9ca96da1f24', 1, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(29, 48, 1, '5716595c786ac5a5dc21a113412ebf93', 3, 1, 1, 1, 3);
INSERT INTO `cart` VALUES(30, 0, 1, '5716595c786ac5a5dc21a113412ebf93', 1, 1, 1, 1, 3);
INSERT INTO `cart` VALUES(31, 48, 1, '40a45b675b4657ccc38db691dc746c4b', 2, 1, 1, 0, 3);
INSERT INTO `cart` VALUES(32, 48, 1, 'd18517d579dbe061ce15f0b2e9c42a66', 2, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(33, 0, 1, '8c48dbda7a6b3c3a8664f077ff0ee11d', 2, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(34, 48, 1, '8c48dbda7a6b3c3a8664f077ff0ee11d', 3, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(35, 0, 1, '8c48dbda7a6b3c3a8664f077ff0ee11d', 2, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(36, 0, 1, '8c48dbda7a6b3c3a8664f077ff0ee11d', 2, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(37, 0, 1, 'e653f6cf71189ab98885e97ff64f381a', 2, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(38, 0, 1, '8c48dbda7a6b3c3a8664f077ff0ee11d', 20, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(39, 48, 1, 'cc2e78b8c47368bf559b8e2f3b7b34dc', 1, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(40, 0, 2, 'cc2e78b8c47368bf559b8e2f3b7b34dc', 3, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(41, 52, 1, '7b0b8576668d7513e8ae17f445c56c65', 1, 0, 0, 0, 2);
INSERT INTO `cart` VALUES(42, 48, 1, '7b0b8576668d7513e8ae17f445c56c65', 1, 0, 1, 0, 3);
INSERT INTO `cart` VALUES(43, 1, 1, '7b0b8576668d7513e8ae17f445c56c65', 1, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(46, 48, 1, 'b79f10ef9f0ac5d8d4cc5b10e284855c', 3, 0, 1, 0, 3);
INSERT INTO `cart` VALUES(47, 17, 1, 'ad159da0b83fa32236d62c492913e748', 10, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(48, 48, 1, '90f6f55e8602730fa585b2baa6f11077', 7, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(49, 0, 1, 'a5471da0966bd043c075a5e4938a4742', 2, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(50, 48, 1, '54a62acca8224f41f5c2adcd42e3e9be', 2, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(51, 0, 1, 'd05f8e95ff39e03dea64646197e3cdaf', 2, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(52, 48, 1, 'd05f8e95ff39e03dea64646197e3cdaf', 4, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(53, 25, 1, '35daac6bdb0b13569faa10cfa867afe7', 2, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(54, 26, 1, '35daac6bdb0b13569faa10cfa867afe7', 2, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(55, 13, 1, 'd5819225a8f1a25d9dcf39b6afe6c7f2', 4, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(56, 14, 2, 'd5819225a8f1a25d9dcf39b6afe6c7f2', 2, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(57, 0, 1, 'd5819225a8f1a25d9dcf39b6afe6c7f2', 4, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(58, 48, 1, 'd5819225a8f1a25d9dcf39b6afe6c7f2', 1, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(59, 0, 2, 'd5819225a8f1a25d9dcf39b6afe6c7f2', 2, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(60, 48, 1, 'd09aa22c7437c828c43aad160591382b', 1, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(61, 13, 1, '2c298b979a729104e0ac242555161c2d', 4, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(62, 0, 1, '2c298b979a729104e0ac242555161c2d', 4, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(63, 48, 1, '46e507c51542065326768979687afbec', 3, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(64, 0, 2, '46e507c51542065326768979687afbec', 1, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(65, 0, 2, '46e507c51542065326768979687afbec', 1, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(66, 73, 1, 'e287e67ef1a4db183877ac4034bc2671', 2, 1, 0, 1, 3);
INSERT INTO `cart` VALUES(67, 73, 1, 'c27b139afb957ec77ec228b3099c8b88', 1, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(68, 68, 1, '10ead38682ac50d35b55da932c67c4da', 72, 0, 0, 0, 2);
INSERT INTO `cart` VALUES(69, 69, 2, '10ead38682ac50d35b55da932c67c4da', 1, 0, 0, 0, 2);
INSERT INTO `cart` VALUES(70, 70, 1, '8be8ca5fe0b82024afb940ae27eae694', 4, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(71, 73, 1, '1e676ff95f8a987b3ff53df027428147', 17, 1, 0, 1, 3);
INSERT INTO `cart` VALUES(72, 73, 1, '5963041685977318152fed7a53abd481', 4, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(73, 73, 1, '0cbb3f6d14ba6c8a6a3b4ac5e3a15368', 4, 1, 0, 0, 3);
INSERT INTO `cart` VALUES(74, 73, 1, '6b5ed5beb1578f7f6c87603ad7e8c8ed', 1, 1, 1, 1, 3);
INSERT INTO `cart` VALUES(75, 67, 2, '4700b92dd0aa81c50e04aba7f07113d9', 1, 0, 0, 0, 2);
INSERT INTO `cart` VALUES(76, 62, 1, '4700b92dd0aa81c50e04aba7f07113d9', 1, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(77, 73, 1, '4700b92dd0aa81c50e04aba7f07113d9', 3, 1, 0, 1, 3);
INSERT INTO `cart` VALUES(78, 0, 1, '4700b92dd0aa81c50e04aba7f07113d9', 1, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(79, 1, 1, '4700b92dd0aa81c50e04aba7f07113d9', 1, 0, 0, 0, 1);
INSERT INTO `cart` VALUES(80, 73, 1, '3bdc08d81be54fd0af0368a63841790a', 4, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(81, 0, 1, 'd942b5e8d811b23efb43c1a27fa3d829', 1, 0, 0, 0, 3);
INSERT INTO `cart` VALUES(82, 69, 2, 'd942b5e8d811b23efb43c1a27fa3d829', 2, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_info`
--

CREATE TABLE `cc_info` (
  `id_cc_info` int(5) NOT NULL auto_increment,
  `Id_customer` int(4) NOT NULL default '0',
  `id_ses_track` varchar(45) NOT NULL default '',
  `c_name` varchar(35) NOT NULL default '',
  `c_type` char(1) NOT NULL default '',
  `c_number` int(12) NOT NULL default '0',
  `c_add` varchar(70) NOT NULL default '',
  `c_country` varchar(25) NOT NULL default '',
  `c_county` varchar(50) NOT NULL default '',
  `c_city` varchar(25) NOT NULL default '',
  `c_zip` varchar(10) NOT NULL default '',
  `c_phone` varchar(20) NOT NULL default '',
  `Id_order` int(5) NOT NULL default '0',
  `c_status` char(1) NOT NULL default 'U',
  PRIMARY KEY  (`id_cc_info`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='CC information with relative info about chechkout' AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `cc_info`
--

INSERT INTO `cc_info` VALUES(1, 24, 'e704b7577cf577b271cba93c5051c92e', 'cesars', 'V', 2147483647, '435893478932', 'sdjhaksdhsaas', '', 'sadasadssadadas', '233323232', '232323232323', 0, 'U');
INSERT INTO `cc_info` VALUES(2, 1, 'e065984caf10db122b51e425d91395cd', 'Chris Rodriguez', 'V', 2147483647, '4944 Parkview Drive', 'United States', '', 'Saint Cloud', '34771', '407 4771103', 0, 'U');
INSERT INTO `cc_info` VALUES(3, 1, 'ac2ccbaec47d7d4b4af476d4cc945d99', 'Chris', 'V', 2147483647, 'Calle catatumbo', 'Venezuela', '', 'Valencia', '2002', '584129998877', 0, 'U');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ce`
--

CREATE TABLE `ce` (
  `id_ce` int(3) NOT NULL auto_increment,
  `cat_pds` int(2) NOT NULL default '0',
  `titulo` varchar(35) NOT NULL default '',
  `contenido` text NOT NULL,
  `foto` varchar(100) NOT NULL default '',
  `activo` char(1) NOT NULL default '',
  PRIMARY KEY  (`id_ce`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Customer''s Experience' AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `ce`
--

INSERT INTO `ce` VALUES(2, 12, 'Jonas Mitchels', 'Now, I''m not gonna lie. Sheikra had me scared. I just kept thinking about that crazy drop. The thing drops STRAIGHT DOWN. There''s no slope. Just straight down like you''re jumping out of a plane. (Now I have sky-dived before, so I was prepared...slightly). So, since I was scared, that meant that I had to ride in the very front. In fact, that''s the best way to ride it, right in the front. You might have to wait a little longer, but you do get a full view of the ground beneath you (which is 200 feet below) before you race face down into it. So, when I did ride it, I''ll tell you what, that drop was crazy.', 'files/ce-006.jpg', '2');
INSERT INTO `ce` VALUES(3, 12, 'Pedro Martinez', 'Now, I''m not gonna lie. Sheikra had me scared. I just kept thinking about that crazy drop. The thing drops STRAIGHT DOWN. There''s no slope. Just straight down like you''re jumping out of a plane. (Now I have sky-dived before, so I was prepared...slightly). So, since I was scared, that meant that I had to ride in the very front. In fact, that''s the best way to ride it, right in the front. You might have to wait a little longer, but you do get a full view of the ground beneath you (which is 200 feet below) before you race face down into it. So, when I did ride it, I''ll tell you what, that drop was crazy.', 'files/ce-001.jpg', '1');
INSERT INTO `ce` VALUES(4, 18, 'Jhonsons', 'I loved it.. simply was the most fantastic experience me and my family ever had. 100% recomended.', 'files/ce-jim_morrison_full-thumb.jpg', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `Id_customer` int(5) NOT NULL auto_increment,
  `title` varchar(5) NOT NULL default '',
  `firstname` varchar(35) NOT NULL default '',
  `lastname` varchar(35) NOT NULL default '',
  `add_1` varchar(50) NOT NULL default '',
  `add_2` varchar(50) NOT NULL default '',
  `town` varchar(35) NOT NULL default '',
  `county` varchar(35) NOT NULL default '',
  `postcode` varchar(12) NOT NULL default '',
  `country` varchar(35) NOT NULL default '',
  `email` varchar(75) NOT NULL default '',
  `clave` varchar(12) NOT NULL default '',
  `phone` varchar(20) NOT NULL default '',
  `mobile` varchar(20) NOT NULL default '',
  `reg_date` varchar(35) NOT NULL default '',
  `reg_ip` varchar(20) NOT NULL default '',
  `advertise` char(1) NOT NULL default 'Y',
  `agree` char(1) NOT NULL default 'N',
  PRIMARY KEY  (`Id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Customers' AUTO_INCREMENT=33 ;

--
-- Volcar la base de datos para la tabla `customers`
--

INSERT INTO `customers` VALUES(1, '', 'Chris', '', '', '', '', '', '', '', 'melheffe@gmail.com', '123456', '', '', '', '', 'Y', 'N');
INSERT INTO `customers` VALUES(2, '', 'Sharon', 'Beaudry', '87 Jericho Road', '', 'Pelham', 'Rockingham', '03076', 'USA', 'sharon_beaudry@yahoo.com', 'michael', '', '603-943-3243', '2008-2-28 11:34:30', '158.228.155.115', 'o', 'o');
INSERT INTO `customers` VALUES(3, 'mr', 'troy', 'allen', '2169 Charnwood', 'drive', 'burlington', 'Ontario', 'l7m2x4', 'canada', 'allen_troy@yahoo.com', 'lisa123', '4163186617', '', '2008-2-28 12:02:52', '206.186.37.200', '', 'o');
INSERT INTO `customers` VALUES(4, '', 'Kerry', 'Little', '', '', 'McAdam', 'Canada', 'E6J 1N3', '', 'kerryl@flakeboard.ca', '', '', '', '2008-3-01 6:20:26', '142.167.91.34', '', 'o');
INSERT INTO `customers` VALUES(5, 'Mr', 'Adam', 'Walton', '27 High Manor Dr', 'Apt 7', 'Henrietta', 'Monroe', '14467', 'USA', 'pokeycracker@hotmail.com', 'nocros4861', '', '', '2008-3-04 21:34:00', '74.74.208.224', 'o', 'o');
INSERT INTO `customers` VALUES(6, '', 'KELLY', 'AND', '', '', '', '', '', '', '', '', '', '', '2008-3-10 8:17:42', '204.117.204.103', '', '');
INSERT INTO `customers` VALUES(7, '', 'KELLY', 'ANDERS', '2735 EVANS ROAD', '', 'LABELLE', 'FLORIDA', '33935', 'USA', 'kellyanders@aol.com', '', '863-673-2219', '', '2008-3-10 8:18:32', '204.117.204.103', 'o', 'o');
INSERT INTO `customers` VALUES(8, '', 'KELLY', 'ANDERS', '2735 EVANS ROAD', '', 'LABELLE', 'FLORIDA', '33935', 'USA', 'kellyanders@aol.com', '', '863-673-2219', '', '2008-3-10 8:18:49', '204.117.204.103', 'o', 'o');
INSERT INTO `customers` VALUES(9, '', 'chuck', 'curfman', '7701 E. Kellogg', '', 'wichita', 'sedgwick', '67207', 'usa', 'curfman2@hotmail.com', 'woodchuck', '316 6555777', '', '2008-3-11 12:02:30', '68.102.2.117', '', 'o');
INSERT INTO `customers` VALUES(10, '', 'Rich', 'Herrold', '125 Murray Ave.', '', 'Washington', 'Washington', '15301', 'USA', 'rherrold125@comcast.net', 'kathy7225', '724-228-6591', '', '2008-3-12 9:02:42', '76.125.174.107', '', 'o');
INSERT INTO `customers` VALUES(11, '', 'Rich', 'Herrold', '125 Murray Ave.', '', 'Washington', 'Washington', '15301', 'USA', 'rherrold125@comcast.net', 'kathy7225', '724-228-6591', '', '2008-3-12 9:04:26', '76.125.174.107', '', '');
INSERT INTO `customers` VALUES(12, '', 'James', 'Robertson', '1776 Gideon Grove Church Road', '', 'Stokesdale', 'Rockingham', '27357', 'usa', 'jrobertson32@triad.rr.com', 'faith92704', '', '', '2008-3-18 18:42:59', '71.71.7.82', '', 'o');
INSERT INTO `customers` VALUES(13, '', 'Lesya', 'Kindiuk', '12760 Indian Rocks Rd', '525', 'Largo', 'Pinellas', '33774', 'USA', 'lisakindiuk@hotmail.com', 'mikitiuk', '7727-501-4287', '', '2008-3-19 17:40:55', '97.102.6.198', '', 'o');
INSERT INTO `customers` VALUES(14, '', 'Lesya', 'Kindiuk', '12760 Indian Rocks Rd', '525', 'Largo', 'Pinellas', '33774', 'USA', 'lisakindiuk@hotmail.com', 'mikitiuk', '7727-501-4287', '', '2008-3-19 17:41:24', '97.102.6.198', '', 'o');
INSERT INTO `customers` VALUES(15, 'ms', 'ida', 'dickenson', '2037 las palmas circle', '', 'orlando', 'orange', '32822', '', 'ida.dickenson@wachovia.vom', '3sentra$', '', '', '2008-3-24 9:31:14', '169.200.204.17', '', 'o');
INSERT INTO `customers` VALUES(16, '', 'jason', 'mohan', '439 willmott', '', 'milton', '', '', '', 'jassonmohan55@hotmail.com', '21012101', '', '', '2008-3-26 8:19:30', '67.70.123.231', '', 'o');
INSERT INTO `customers` VALUES(17, '', 'Alane', 'Hazewinkel', '16790 Garfield Rd', '', 'Big Rapids', 'Mecosta', '49307', 'USA', 'hazewinkel1@aol.com', 'caseoliver', '231-250-8574', '', '2008-3-29 10:45:00', '205.142.19.92', '', '');
INSERT INTO `customers` VALUES(18, 'Mrs', 'cess', 'carter', '2676 cutters grove circle', '', 'anoka', 'anoka', '55303', 'usa', 'nicholas386#@msncom', 'nicholas', '7637129855', '', '2008-4-02 5:18:40', '71.37.227.231', 'o', 'o');
INSERT INTO `customers` VALUES(19, '', 'Russ', 'Couron', '38515 Naomi Ave', '', 'Zephyrhills', 'Pasco', '33542', 'USA', 'rgcouron@msn.com', 'margy612', '813-788-5158', '', '2008-5-01 6:11:04', '96.228.179.147', '', 'o');
INSERT INTO `customers` VALUES(20, '', 'Russ', 'Couron', '38515 Naomi Ave', '', 'Zephyrhills', 'Pasco', '33542', 'USA', 'rgcouron@msn.com', 'margy612', '813-788-5158', '', '2008-5-01 6:11:29', '96.228.179.147', '', 'o');
INSERT INTO `customers` VALUES(21, '', 'Russ', 'Couron', '38515 Naomi Ave', '', 'Zephyrhills', 'Pasco', '33542', 'USA', 'rgcouron@msn.com', 'margy612', '813-788-5158', '', '2008-5-01 6:11:41', '96.228.179.147', '', 'o');
INSERT INTO `customers` VALUES(22, '', 'Russ', 'Couron', '38515 Naomi Ave', '', 'Zephyrhills', 'Pasco', '33542', 'USA', 'rgcouron@msn.com', 'margy612', '813-788-5158', '', '2008-5-01 6:12:04', '96.228.179.147', 'o', 'o');
INSERT INTO `customers` VALUES(23, '', '', '', '', '', '', '', '', '', '', '', '', '', '2008-5-05 21:33:22', '127.0.0.1', 'Y', 'Y');
INSERT INTO `customers` VALUES(24, 'mrh', 'cesar', 'estrada', '332232', '', 'sjd', 'usa', '32323', '', 'tyt@yahoo.com', 'killerclub', '7777777777', '8888888888', '2008-5-07 18:30:47', '68.204.172.85', '', 'o');
INSERT INTO `customers` VALUES(25, 'Mrs', 'Andrea', 'Kenworthy', '37 Cotterdale Gardens', 'Wombwell', 'Barnsley', 'South Yorkshire', 'S73 0BX', 'UK', 'nelandra_international@msn.com', 'babyduck', '', '07768073800', '2008-5-10 15:26:09', '90.208.234.140', 'o', 'o');
INSERT INTO `customers` VALUES(26, 'Mrs.', 'Cheryl', 'Koch', 'N3192 2nd ave.', '', 'Oxford', 'Maquette', '53952', 'USA', 'cheryl_53190@yahoo.com', 'oliveoil', '608-586-4586', '608-369-2517', '2008-5-15 0:56:16', '66.206.48.105', 'o', 'o');
INSERT INTO `customers` VALUES(27, 'Lic.', 'henry', 'Barboza', '7805 NW 15 street', 'Suite 506-609', 'Miami', 'Florida', '33126', 'USA', 'hbarboza@eie.ucr.ac.cr', 'tallerucr35', '305-599-1812', '', '2008-5-16 12:26:35', '163.178.124.135', 'o', 'o');
INSERT INTO `customers` VALUES(28, '', '', '', '', '', '', '', '', '', '', '', '', '', '2008-5-17 20:05:13', '190.39.121.222', '', '');
INSERT INTO `customers` VALUES(29, '', 'Kristina', 'Albert', '806 Silver Sage Dr', '', 'Miles City', 'Custer', '59301', 'United States', 'kalbert35@yahoo.com', 'Ch33s3s', '4062342791', '', '2008-5-18 18:41:45', '64.89.210.251', 'o', 'o');
INSERT INTO `customers` VALUES(30, 'laura', 'laura', 'rios', '2940 e. 90th st.', '', 'chicago', 'cook', '60617', 'us', 'yeya_rios@yahoo.com', 'jaime', '7733147537', '', '2008-5-22 21:05:45', '70.9.202.9', '', 'o');
INSERT INTO `customers` VALUES(31, 'Ms', 'tywanda', 'gadson', '33 E Elm St', '', 'Linden', 'Union', '07036', 'USA', 'tgadson@hotmail.com', 'makiyah11', '908-925-2092', '073-789-4405', '2008-6-03 3:43:07', '68.244.179.163', 'o', 'o');
INSERT INTO `customers` VALUES(32, 'mrs', 'wendy', 'proctor', '172 sproull rd', '', 'rome', 'floyd', '30161', 'usa', 'wendy.proctor@otrwheel.com', '11nine58', '706-506-2430', '', '2008-6-03 8:59:13', '75.144.43.233', '', 'o');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docs`
--

CREATE TABLE `docs` (
  `id_doc` int(2) NOT NULL auto_increment,
  `doc_tit` varchar(125) NOT NULL default '',
  `doc_cont` text NOT NULL,
  `active` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id_doc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Documentation module' AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `docs`
--

INSERT INTO `docs` VALUES(1, 'Support', 'Customer Services:\r\n\r\nWe are available to help you Mon. to Fri. 9:00 am to 5:00 pm.\r\n\r\nYou can also contact us by phone at : \r\n\r\nor if you want, you can write us an email at: cs@orlandocheaptickets.com and we will reply as soon as posible or we  will contact you to attend your concer. \r\n\r\nThanks for use orlandocheaptickets.com\r\n\r\n  ', 1);
INSERT INTO `docs` VALUES(2, 'Terms and Conditions', 'Terms of Use\r\nWelcome to Orlandocheaptickets. The following are the Terms of Use (these "Terms") that govern use of the Orlandocheaptickets.com web sites (collectively, the "Site"). By using or visiting the Site, you expressly agree to be bound by these Terms and to follow these Terms and all applicable laws and regulations governing the Site. Orlandocheaptickets and each of their respective subsidiaries (collectively "Orlandocheaptickets" or "we") reserve the right to change these Terms at any time, effective immediately upon posting on the Site. Please check this page of the Site periodically. If you violate these Terms, Orlandocheaptickets may terminate your use of the Site, bar you from future use of the Site, cancel tickets you receive through the site, cancel your ticket order, and/or take appropriate legal action against you. \r\n\r\nPermitted Use\r\nYou agree that you are only authorized to visit, view and to retain a copy of pages of this Site for your own personal use, and that you shall not duplicate, download, publish, modify or otherwise distribute the material on this Site for any purpose other than to review event and promotional information, for personal use, or to purchase tickets or merchandise, unless otherwise specifically authorized by Orlandocheaptickets to do so. You also agree not to deep-link to the site for any purpose, unless specifically authorized by Orlandocheaptickets to do so or unless deep-linking to the pages where you have posted tickets for sale. The content and software on this Site is the property of Orlandocheaptickets and/or its suppliers and is protected by U.S. and international copyright laws. We post a legal notice and various credits on pages of the Site, which may not be removed. Please do not remove this notice or these credits, or any additional information contained along with the notices and credits. \r\n  ', 1);
INSERT INTO `docs` VALUES(3, 'Privacy Policy', 'Orlando Cheap Tickets.com takes your privacy seriously. Please read the following to learn more about our privacy policy.\r\n \r\nWhat This Privacy Policy Covers\r\n\r\nThis policy covers how OrlandoCheapTickets.com treats personal information that OCT collects and receives, including information related to your past use of OTC products and services. Personal information is information about you that is personally identifiable like your name, address, email address, or phone number, and that is not otherwise publicly available. \r\n\r\nInformation Sharing and Disclosure\r\n\r\nOrlandoCheapTickets.com does not rent, sell, or share personal information about you with other people or non-affiliated companies.\r\n\r\nYour Ability to Edit and Delete Your Account Information and Preferences\r\n\r\nGeneral\r\n\r\nYou can edit your OrlandoCheapTicket.com Account Information, including your marketing preferences, at any time. \r\nNew categories of marketing communications might be added to the Marketing Preferences page from time to time. Users who visit this page can opt out of receiving future marketing communications from these new categories or they can unsubscribe by following instructions contained in the messages they receive. \r\nWe reserve the right to send you certain communications relating to the OrlandoCheaptickets.com service, such as service announcements, administrative messages and the OrlandoCheapTicket.com Newsletter, that are considered part of your OCT account, without offering you the opportunity to opt out of receiving them. \r\nYou can delete your OCT account by visiting our Account Deletion page. Please click here to read about information that might possibly remain in our archived records after your account has been deleted. \r\n\r\nConfidentiality and Security \r\n\r\nWe limit access to personal information about you to employees who we believe reasonably need to come into contact with that information to provide products or services to you or in order to do their jobs. \r\nWe have physical, electronic, and procedural safeguards that comply with federal regulations to protect personal information about you.\r\n\r\n Changes to this Privacy Policy\r\n\r\nOrlandoCheapTickets.com may update this policy. We will notify you about significant changes in the way we treat personal information by sending a notice to the primary email address specified in your OCT account or by placing a prominent notice on our site. \r\n ', 1);
INSERT INTO `docs` VALUES(5, 'Purchase Policy', 'Purchase Policy\r\nOur goal at Orlandocheaptickets.com is to make your purchasing experience easy, efficient and equitable, so we can get you on your way to live events as quickly as possible. The following purchase policies are designed to ensure your satisfaction and understanding of the purchase process on Orlandocheaptickets.com. If you have any questions about the information below, please Contact Us This Purchase Policy is subject to, and incorporates by this reference, the Terms of Use. Each ticket that you purchase is a license to attend a particular event, and is subject to the additional terms set forth on that ticket. \r\n\r\nCurrency\r\nAll ticket prices for events that occur in the United States are stated in U.S. Dollars. All ticket prices for events that occur in Canada are stated in Canadian Dollars.\r\n\r\nPayment Methods\r\nOrlandocheaptickets.com accepts several methods of payment to accommodate your needs. If the event for which you are buying tickets is located in the United States, Orlandocheaptickets.com accepts Visa and MasterCard. \r\n\r\nOrder Confirmation\r\nIf you do not receive a confirmation number (in the form of a confirmation page or email) after submitting payment information, or if you experience an error message or service interruption after submitting payment information, it is your responsibility to confirm with your Customer Service Department whether or not your order has been placed. Only you may be aware of any problems that may occur during the purchase process. Orlandocheaptickets will not be responsible for losses (monetary or otherwise) if you assume that an order was not placed because you failed to receive confirmation. \r\n\r\nCancelled and Postponed Events\r\nPlease see Canceled/Postponed Events for our postponed and canceled events policies, which are hereby incorporated into this purchase policy. \r\n\r\nRefunds and Exchanges\r\nBefore purchasing tickets, carefully review your event and seat selection. Policies set forth by our clients, including venues, generally prohibit Orlandocheaptickets from issuing exchanges or refunds after a ticket has been purchased or for lost, stolen, damaged or destroyed tickets.  Once the tickets leave our shipping centers, OrlandoCheapTickets.com cannot issue exchanges or refunds. \r\n\r\nBilling Information Verification\r\nOrders are processed only after a billing address, and other billing information, has been verified. Occasionally, we receive incorrect billing or credit card account information for a ticket order that can delay processing and delivery. In these cases, Orlandocheaptickets customer service will attempt to contact you, using the information provided at the time of purchase. If Orlandocheaptickets is unable to reach you after its initial attempt, Orlandocheaptickets may cancel your order and may sell your tickets to another customer without further notice. \r\n\r\nDelivery Options\r\nPlease see Deliveryn Methods for our ticket delivery policies, which are hereby incorporated into this purchase policy. \r\n\r\nPricing and Other Errors\r\nIf the amount you pay for a ticket is incorrect regardless of whether because of an error in a price posted on this web site or otherwise communicated to you, or you are able to order a ticket before its scheduled on-sale or presale date or you are able to order a ticket that was not supposed to have been released for sale, then: Orlandocheaptickets will have the right to cancel that ticket (or the order for that ticket) and refund to you the amount that you paid. This will apply regardless of whether because of human error or a transactional malfunction of this web site or other Orlandocheaptickets operated system. \r\n\r\nMultiple Browser Windows\r\nWhen ordering tickets online with Orlandocheaptickets, please ensure you are looking for tickets and placing an order using only one browser window. Looking up tickets using multiple browser windows could result in losing your tickets or timer expiration. \r\n\r\nUnlawful Re-Sale of Tickets; Commercial Purposes\r\nUnlawful resale of tickets (or attempt) is grounds for seizure and cancellation without compensation. A ticket shall not be used for advertising, promotions, contests or sweepstakes, unless formal written authorization is given by the Event Provider, provided that even if such consent is obtained, use of Orlandocheaptickets''s trademarks and other intellectual property is subject to Orlandocheaptickets''s consent.\r\n  ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id_pic` int(4) NOT NULL auto_increment,
  `id_pds` int(4) NOT NULL default '0',
  `ruta` varchar(75) NOT NULL default '',
  PRIMARY KEY  (`id_pic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=188 ;

--
-- Volcar la base de datos para la tabla `galerias`
--

INSERT INTO `galerias` VALUES(1, 12, 'files/galery-77110434_WGzlDNEO.jpg');
INSERT INTO `galerias` VALUES(2, 12, 'files/galery-adv_tour_pic_new1.jpg');
INSERT INTO `galerias` VALUES(3, 12, 'files/galery-bgt13.jpg');
INSERT INTO `galerias` VALUES(4, 12, 'files/galery-bgt15.jpg');
INSERT INTO `galerias` VALUES(5, 12, 'files/galery-flmay05_13.jpg');
INSERT INTO `galerias` VALUES(6, 12, 'files/galery-flmay05_22.jpg');
INSERT INTO `galerias` VALUES(7, 12, 'files/galery-picture_135_134.jpg');
INSERT INTO `galerias` VALUES(8, 12, 'files/galery-python1.jpg');
INSERT INTO `galerias` VALUES(9, 12, 'files/galery-picture_133_156.jpg');
INSERT INTO `galerias` VALUES(10, 11, 'files/galery-hle_map.jpg');
INSERT INTO `galerias` VALUES(11, 11, 'files/galery-holyland.jpg');
INSERT INTO `galerias` VALUES(12, 11, 'files/galery-jesus.jpg');
INSERT INTO `galerias` VALUES(13, 11, 'files/galery-jerusalem.jpg');
INSERT INTO `galerias` VALUES(14, 5, 'files/galery-TnT_013.jpg');
INSERT INTO `galerias` VALUES(15, 5, 'files/galery-TnT_006.jpg');
INSERT INTO `galerias` VALUES(16, 5, 'files/galery-TnT_101.jpg');
INSERT INTO `galerias` VALUES(17, 15, 'files/galery-Bestmann_01.jpg');
INSERT INTO `galerias` VALUES(18, 15, 'files/galery-stearmanflyer-a.jpg');
INSERT INTO `galerias` VALUES(19, 15, 'files/galery-family.jpg');
INSERT INTO `galerias` VALUES(20, 15, 'files/galery-stearman-blue-h.jpg');
INSERT INTO `galerias` VALUES(21, 18, 'files/galery-Mb0e3acc3-07d7-43bc-9d41-fe3d5cba59e1.jpg');
INSERT INTO `galerias` VALUES(23, 18, 'files/galery-Mc4c38a8e-ee3e-49de-9807-fbfa87d7d2e7.jpg');
INSERT INTO `galerias` VALUES(25, 42, 'files/galery-sspring1.jpg');
INSERT INTO `galerias` VALUES(26, 42, 'files/galery-sspring2.jpg');
INSERT INTO `galerias` VALUES(27, 30, 'files/galery-BBraft.jpg');
INSERT INTO `galerias` VALUES(28, 30, 'files/galery-BBsumplm.jpg');
INSERT INTO `galerias` VALUES(29, 30, 'files/galery-Slush-Gusher-250.jpg');
INSERT INTO `galerias` VALUES(30, 30, 'files/galery-CrossCountryCreek.jpg');
INSERT INTO `galerias` VALUES(31, 30, 'files/galery-Tobaggan_Racers.jpg');
INSERT INTO `galerias` VALUES(32, 32, 'files/galery-TYsnork.jpg');
INSERT INTO `galerias` VALUES(33, 32, 'files/galery-TYWave.jpg');
INSERT INTO `galerias` VALUES(35, 32, 'files/galery-Disney_World_Vacation_Package134.jpg');
INSERT INTO `galerias` VALUES(36, 32, 'files/galery-typhoon_lagoon_surf_pool.jpg');
INSERT INTO `galerias` VALUES(37, 35, 'files/galery-300px-Magic_Kingdom_castle.jpg');
INSERT INTO `galerias` VALUES(47, 27, 'files/galery-1.jpg');
INSERT INTO `galerias` VALUES(48, 27, 'files/galery-2.jpg');
INSERT INTO `galerias` VALUES(49, 27, 'files/galery-3.jpg');
INSERT INTO `galerias` VALUES(50, 27, 'files/galery-4.jpg');
INSERT INTO `galerias` VALUES(51, 27, 'files/galery-5.jpg');
INSERT INTO `galerias` VALUES(52, 27, 'files/galery-6.jpg');
INSERT INTO `galerias` VALUES(53, 34, 'files/galery-Ecopt06.jpg');
INSERT INTO `galerias` VALUES(54, 34, 'files/galery-Epcot02.jpg');
INSERT INTO `galerias` VALUES(55, 34, 'files/galery-Epcot05.jpg');
INSERT INTO `galerias` VALUES(56, 34, 'files/galery-Epcot01.jpg');
INSERT INTO `galerias` VALUES(57, 36, 'files/galery-Disneyquest04.jpg');
INSERT INTO `galerias` VALUES(58, 36, 'files/galery-Disneyquest05.jpg');
INSERT INTO `galerias` VALUES(59, 36, 'files/galery-DQ3.jpg');
INSERT INTO `galerias` VALUES(60, 36, 'files/galery-DQ6.jpg');
INSERT INTO `galerias` VALUES(61, 36, 'files/galery-DQ10.jpg');
INSERT INTO `galerias` VALUES(62, 38, 'files/galery-blue-man.jpg');
INSERT INTO `galerias` VALUES(63, 38, 'files/galery-fearlogo.jpg');
INSERT INTO `galerias` VALUES(67, 38, 'files/galery-Mummy.jpg');
INSERT INTO `galerias` VALUES(68, 38, 'files/galery-Jimmy.jpg');
INSERT INTO `galerias` VALUES(69, 38, 'files/galery-Shrek.jpg');
INSERT INTO `galerias` VALUES(70, 26, 'files/galery-409557045_607d19b401.jpg');
INSERT INTO `galerias` VALUES(71, 26, 'files/galery-4-4.jpg');
INSERT INTO `galerias` VALUES(72, 26, 'files/galery-1174589947.29_lowres_lg.jpg');
INSERT INTO `galerias` VALUES(74, 31, 'files/galery-Orl_PleasureIsland.jpg');
INSERT INTO `galerias` VALUES(75, 31, 'files/galery-2930.jpg');
INSERT INTO `galerias` VALUES(76, 31, 'files/galery-pi1.jpg');
INSERT INTO `galerias` VALUES(77, 31, 'files/galery-pleasureisland.jpg');
INSERT INTO `galerias` VALUES(78, 33, 'files/galery-tower_of_terror.jpg');
INSERT INTO `galerias` VALUES(79, 33, 'files/galery-10-hollywoodstudios-04.jpg');
INSERT INTO `galerias` VALUES(80, 33, 'files/galery-hollywood_studios.jpg');
INSERT INTO `galerias` VALUES(81, 33, 'files/galery-Hollywood02.jpg');
INSERT INTO `galerias` VALUES(82, 44, 'files/galery-300px-Magic_Kingdom_castle.jpg');
INSERT INTO `galerias` VALUES(83, 44, 'files/galery-MKTigger.jpg');
INSERT INTO `galerias` VALUES(84, 44, 'files/galery-MagicKingdom01.jpg');
INSERT INTO `galerias` VALUES(85, 44, 'files/galery-MagicKingdom02.jpg');
INSERT INTO `galerias` VALUES(86, 44, 'files/galery-mikecomedy.jpg');
INSERT INTO `galerias` VALUES(87, 38, 'files/galery-Universal01.jpg');
INSERT INTO `galerias` VALUES(88, 40, 'files/galery-15.jpg');
INSERT INTO `galerias` VALUES(89, 40, 'files/galery-30.jpg');
INSERT INTO `galerias` VALUES(90, 40, 'files/galery-05.jpg');
INSERT INTO `galerias` VALUES(92, 40, 'files/galery-25.jpg');
INSERT INTO `galerias` VALUES(94, 18, 'files/galery-sea05.jpg');
INSERT INTO `galerias` VALUES(95, 18, 'files/galery-seaworld-best.jpg');
INSERT INTO `galerias` VALUES(96, 18, 'files/galery-sea01.jpg');
INSERT INTO `galerias` VALUES(97, 18, 'files/galery-play_seaworld.jpg');
INSERT INTO `galerias` VALUES(98, 41, 'files/galery-water-slide-3.jpg');
INSERT INTO `galerias` VALUES(104, 41, 'files/galery-wet-n-wild1.jpg');
INSERT INTO `galerias` VALUES(105, 41, 'files/galery-WetnWild_narrowweb__300x414,0.jpg');
INSERT INTO `galerias` VALUES(107, 41, 'files/galery-DH2OStructure.jpg');
INSERT INTO `galerias` VALUES(109, 41, 'files/galery-wet1.jpg');
INSERT INTO `galerias` VALUES(110, 1, 'files/galery-anights.jpg');
INSERT INTO `galerias` VALUES(111, 1, 'files/galery-arabian_nights1.jpg');
INSERT INTO `galerias` VALUES(112, 1, 'files/galery-arabian_nights.jpg');
INSERT INTO `galerias` VALUES(113, 1, 'files/galery-anights1.jpg');
INSERT INTO `galerias` VALUES(114, 1, 'files/galery-100.jpg');
INSERT INTO `galerias` VALUES(115, 3, 'files/galery-01.jpg');
INSERT INTO `galerias` VALUES(116, 3, 'files/galery-20.jpg');
INSERT INTO `galerias` VALUES(117, 3, 'files/galery-Pirates500.jpg');
INSERT INTO `galerias` VALUES(118, 3, 'files/galery-pirates.jpg');
INSERT INTO `galerias` VALUES(119, 5, 'files/galery-photo1.jpg');
INSERT INTO `galerias` VALUES(120, 5, 'files/galery-tnt_nyc_cast_1.jpg');
INSERT INTO `galerias` VALUES(121, 6, 'files/galery-500.jpg');
INSERT INTO `galerias` VALUES(124, 6, 'files/galery-80.jpg');
INSERT INTO `galerias` VALUES(126, 6, 'files/galery-luaugirls.jpg');
INSERT INTO `galerias` VALUES(127, 6, 'files/galery-Dancer.jpg');
INSERT INTO `galerias` VALUES(128, 6, 'files/galery-firedancer1.jpg');
INSERT INTO `galerias` VALUES(129, 23, 'files/galery-03.jpg');
INSERT INTO `galerias` VALUES(131, 23, 'files/galery-medieval3.jpg');
INSERT INTO `galerias` VALUES(132, 23, 'files/galery-medi2.jpg');
INSERT INTO `galerias` VALUES(135, 23, 'files/galery-02.jpg');
INSERT INTO `galerias` VALUES(137, 23, 'files/galery-1000.jpg');
INSERT INTO `galerias` VALUES(138, 37, 'files/galery-2000.jpg');
INSERT INTO `galerias` VALUES(139, 37, 'files/galery-3000.jpg');
INSERT INTO `galerias` VALUES(140, 37, 'files/galery-25000.jpg');
INSERT INTO `galerias` VALUES(141, 37, 'files/galery-magic-pic-1.jpg');
INSERT INTO `galerias` VALUES(142, 37, 'files/galery-actors.jpg');
INSERT INTO `galerias` VALUES(143, 17, 'files/galery-853.jpg');
INSERT INTO `galerias` VALUES(144, 17, 'files/galery-46000.jpg');
INSERT INTO `galerias` VALUES(145, 17, 'files/galery-2074-3.jpg');
INSERT INTO `galerias` VALUES(146, 17, 'files/galery-74000.jpg');
INSERT INTO `galerias` VALUES(147, 17, 'files/galery-89000.jpg');
INSERT INTO `galerias` VALUES(148, 11, 'files/galery-Yerusalem_city-gate-w_border.jpg');
INSERT INTO `galerias` VALUES(150, 42, 'files/galery-9159298_cc4d32e3c9.jpg');
INSERT INTO `galerias` VALUES(152, 42, 'files/galery-69400.jpg');
INSERT INTO `galerias` VALUES(154, 42, 'files/galery-Figure1.jpg');
INSERT INTO `galerias` VALUES(156, 42, 'files/galery-000001.jpg');
INSERT INTO `galerias` VALUES(157, 30, 'files/galery-blizzard_beach_image.jpg');
INSERT INTO `galerias` VALUES(159, 30, 'files/galery-rivercounty-789718.jpg');
INSERT INTO `galerias` VALUES(160, 15, 'files/galery-908700.jpg');
INSERT INTO `galerias` VALUES(161, 15, 'files/galery-1111111.jpg');
INSERT INTO `galerias` VALUES(162, 16, 'files/galery-gatorland3.jpg');
INSERT INTO `galerias` VALUES(163, 16, 'files/galery-164065706ENElBr_fs.jpg');
INSERT INTO `galerias` VALUES(164, 15, 'files/galery-N68hp.jpg');
INSERT INTO `galerias` VALUES(165, 15, 'files/galery-pb4y-2.jpg');
INSERT INTO `galerias` VALUES(166, 16, 'files/galery-gatorland.jpg');
INSERT INTO `galerias` VALUES(167, 16, 'files/galery-galal2.jpg');
INSERT INTO `galerias` VALUES(168, 16, 'files/galery-p220455-Aruba-Iguanas.jpg');
INSERT INTO `galerias` VALUES(169, 16, 'files/galery-creek.jpg');
INSERT INTO `galerias` VALUES(170, 25, 'files/galery-ksc7.jpg');
INSERT INTO `galerias` VALUES(171, 25, 'files/galery-ksc1.jpg');
INSERT INTO `galerias` VALUES(172, 25, 'files/galery-ksc4.jpg');
INSERT INTO `galerias` VALUES(173, 25, 'files/galery-ksc2.jpg');
INSERT INTO `galerias` VALUES(175, 25, 'files/galery-ksc3.jpg');
INSERT INTO `galerias` VALUES(177, 25, 'files/galery-ksc11.jpg');
INSERT INTO `galerias` VALUES(178, 25, 'files/galery-ksc8.jpg');
INSERT INTO `galerias` VALUES(180, 43, 'files/galery-873.jpg');
INSERT INTO `galerias` VALUES(181, 43, 'files/galery-flamingos.jpg');
INSERT INTO `galerias` VALUES(182, 43, 'files/galery-Flamingos(9)_prefRes.jpg');
INSERT INTO `galerias` VALUES(183, 43, 'files/galery-Nighttour1_003.jpg');
INSERT INTO `galerias` VALUES(185, 43, 'files/galery-4-full.jpg');
INSERT INTO `galerias` VALUES(187, 43, 'files/galery-untitled.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kw`
--

CREATE TABLE `kw` (
  `Id_kw` int(3) NOT NULL auto_increment,
  `keyword` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`Id_kw`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Keywords list ' AUTO_INCREMENT=73 ;

--
-- Volcar la base de datos para la tabla `kw`
--

INSERT INTO `kw` VALUES(1, 'blue man group');
INSERT INTO `kw` VALUES(2, 'honey moon');
INSERT INTO `kw` VALUES(3, 'honeymoon');
INSERT INTO `kw` VALUES(4, 'orlando');
INSERT INTO `kw` VALUES(5, 'Magic Kingdom');
INSERT INTO `kw` VALUES(6, 'Epcot');
INSERT INTO `kw` VALUES(7, 'Epcot Center');
INSERT INTO `kw` VALUES(8, 'Disney''s Hollywood Studios');
INSERT INTO `kw` VALUES(9, 'Disney''s Animal Kingdom');
INSERT INTO `kw` VALUES(10, 'Orlando Chreap Tickets');
INSERT INTO `kw` VALUES(11, 'Discount Tickets');
INSERT INTO `kw` VALUES(12, 'Low Price Tickets');
INSERT INTO `kw` VALUES(13, 'low price tickets');
INSERT INTO `kw` VALUES(14, 'discount tickets');
INSERT INTO `kw` VALUES(15, 'epcot center');
INSERT INTO `kw` VALUES(16, 'orlando chreap tickets');
INSERT INTO `kw` VALUES(17, 'Orlando');
INSERT INTO `kw` VALUES(18, 'cheap');
INSERT INTO `kw` VALUES(19, 'discount');
INSERT INTO `kw` VALUES(20, 'tickets');
INSERT INTO `kw` VALUES(21, 'coupons');
INSERT INTO `kw` VALUES(22, 'theme parks');
INSERT INTO `kw` VALUES(23, 'vacations');
INSERT INTO `kw` VALUES(24, 'Cheap');
INSERT INTO `kw` VALUES(25, 'Coupons');
INSERT INTO `kw` VALUES(26, 'Discount');
INSERT INTO `kw` VALUES(27, 'Orlando Florida');
INSERT INTO `kw` VALUES(28, 'orlando florida');
INSERT INTO `kw` VALUES(29, 'Orlando FL');
INSERT INTO `kw` VALUES(30, 'Orlando Fl');
INSERT INTO `kw` VALUES(31, 'orlando fl');
INSERT INTO `kw` VALUES(32, 'Florida');
INSERT INTO `kw` VALUES(33, 'Florida parks');
INSERT INTO `kw` VALUES(34, 'florida parks');
INSERT INTO `kw` VALUES(35, 'florida themeparks');
INSERT INTO `kw` VALUES(36, 'florida theme parks');
INSERT INTO `kw` VALUES(37, 'Florida Theme Parks');
INSERT INTO `kw` VALUES(38, 'florida parks tickets');
INSERT INTO `kw` VALUES(39, 'Florida Parks Tickets');
INSERT INTO `kw` VALUES(40, 'theme park tickets');
INSERT INTO `kw` VALUES(41, 'Theme Park Tickets');
INSERT INTO `kw` VALUES(42, 'Disney Tickets');
INSERT INTO `kw` VALUES(43, 'Disney World Tickets');
INSERT INTO `kw` VALUES(44, 'Disney cheap tickets');
INSERT INTO `kw` VALUES(45, 'disney cheap tickets');
INSERT INTO `kw` VALUES(46, 'disney discount');
INSERT INTO `kw` VALUES(47, 'disney discount tickets');
INSERT INTO `kw` VALUES(48, 'disney tickets offer');
INSERT INTO `kw` VALUES(49, 'save on disney tickets');
INSERT INTO `kw` VALUES(50, 'discount tickets disney');
INSERT INTO `kw` VALUES(51, 'cheap disney tickets');
INSERT INTO `kw` VALUES(52, 'disney');
INSERT INTO `kw` VALUES(53, 'walt disney');
INSERT INTO `kw` VALUES(54, 'dianeyland');
INSERT INTO `kw` VALUES(55, 'disneyland');
INSERT INTO `kw` VALUES(56, 'disney land');
INSERT INTO `kw` VALUES(57, 'disney world');
INSERT INTO `kw` VALUES(58, 'disney land tickets');
INSERT INTO `kw` VALUES(59, 'Disney World cheap Tickets');
INSERT INTO `kw` VALUES(60, 'disneyland tickets');
INSERT INTO `kw` VALUES(61, 'walt disney world tickets');
INSERT INTO `kw` VALUES(62, 'disney world tickets');
INSERT INTO `kw` VALUES(63, 'disney tickets');
INSERT INTO `kw` VALUES(64, 'disney tickets sale');
INSERT INTO `kw` VALUES(65, 'disney discounts');
INSERT INTO `kw` VALUES(66, 'discounts');
INSERT INTO `kw` VALUES(67, 'cheap tickets');
INSERT INTO `kw` VALUES(68, 'tickets to orlando');
INSERT INTO `kw` VALUES(69, 'orlando tickets');
INSERT INTO `kw` VALUES(70, 'orlando discount tickets');
INSERT INTO `kw` VALUES(71, 'discount tickets to orlando');
INSERT INTO `kw` VALUES(72, 'cheap tickets to orlando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ml`
--

CREATE TABLE `ml` (
  `Id_ml` int(4) NOT NULL auto_increment,
  `email` varchar(50) NOT NULL default '',
  `ip` varchar(20) NOT NULL default '',
  `date` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`Id_ml`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Mailing list' AUTO_INCREMENT=31 ;

--
-- Volcar la base de datos para la tabla `ml`
--

INSERT INTO `ml` VALUES(1, 'trotinet@msn.com', '72.189.206.13', 'Tue, 04 Dec 2007 11:48:23 -0600');
INSERT INTO `ml` VALUES(2, 'germancho1980@hotmail.com', '72.189.206.13', 'Tue, 04 Dec 2007 11:48:34 -0600');
INSERT INTO `ml` VALUES(3, 'dodgese@yahoo.com', '70.125.66.48', 'Wed, 05 Dec 2007 07:04:57 -0600');
INSERT INTO `ml` VALUES(4, 'edpeck@yahoo.com', '69.253.253.123', 'Wed, 19 Dec 2007 20:07:59 -0600');
INSERT INTO `ml` VALUES(5, 'germancho1980@hotmail.com', '72.189.206.13', 'Wed, 19 Dec 2007 20:08:59 -0600');
INSERT INTO `ml` VALUES(6, 'devust@optonline.net', '68.196.60.86', 'Fri, 28 Dec 2007 09:45:31 -0600');
INSERT INTO `ml` VALUES(7, 'k_l_clare@hotmail.com', '24.222.231.80', 'Sat, 29 Dec 2007 08:19:09 -0600');
INSERT INTO `ml` VALUES(8, 'kevinporath@att.net', '75.7.182.30', 'Sat, 29 Dec 2007 09:14:19 -0600');
INSERT INTO `ml` VALUES(9, 'sjalam@yahoo.com', '99.227.173.147', 'Thu, 03 Jan 2008 17:36:33 -0600');
INSERT INTO `ml` VALUES(10, 'k_l_clare@hotmail.com', '24.222.231.80', 'Sun, 06 Jan 2008 10:55:27 -0600');
INSERT INTO `ml` VALUES(11, 'npalma1@tampabay.rr.com', '70.125.66.48', 'Wed, 16 Jan 2008 16:03:15 -0600');
INSERT INTO `ml` VALUES(12, 'countrymanlouis@msn.com', '74.135.114.159', 'Tue, 29 Jan 2008 13:21:51 -0600');
INSERT INTO `ml` VALUES(13, 'bruinsfan1113@yahoo.com', '24.63.163.126', 'Wed, 30 Jan 2008 19:22:22 -0600');
INSERT INTO `ml` VALUES(14, 'estmar026@aol.com', '65.202.26.177', 'Tue, 12 Feb 2008 12:40:16 -0600');
INSERT INTO `ml` VALUES(15, 'marcela.estrada@us.hsbc.com', '65.202.26.177', 'Tue, 12 Feb 2008 12:40:33 -0600');
INSERT INTO `ml` VALUES(16, 'dlev52@yahoo.com', '65.5.244.236', 'Tue, 12 Feb 2008 12:50:38 -0600');
INSERT INTO `ml` VALUES(17, 'hansen3@embarqmail.com', '71.51.150.31', 'Fri, 15 Feb 2008 15:50:23 -0600');
INSERT INTO `ml` VALUES(18, 'grillite@netrover.com', '70.121.246.186', 'Thu, 21 Feb 2008 09:41:54 -0600');
INSERT INTO `ml` VALUES(19, 'vihensa@hotmail.com', '68.212.191.36', 'Mon, 25 Feb 2008 11:00:08 -0600');
INSERT INTO `ml` VALUES(20, 'csoileau@cpso.com', '66.112.93.180', 'Tue, 04 Mar 2008 19:52:10 -0600');
INSERT INTO `ml` VALUES(21, 'amigos33@msn.com', '75.75.25.254', 'Fri, 21 Mar 2008 19:20:17 -0500');
INSERT INTO `ml` VALUES(22, 'chinadiva9697@yahoo.com', '71.196.8.242', 'Fri, 04 Apr 2008 17:52:05 -0500');
INSERT INTO `ml` VALUES(23, 'yolchan@yahoo.com', '69.252.151.43', 'Thu, 10 Apr 2008 16:25:15 -0500');
INSERT INTO `ml` VALUES(24, 'omyquintana@aol.com', '204.15.145.45', 'Tue, 15 Apr 2008 11:35:13 -0500');
INSERT INTO `ml` VALUES(25, 'tu_prieta_chula@hotmail.com', '97.101.23.94', 'Tue, 15 Apr 2008 12:44:54 -0500');
INSERT INTO `ml` VALUES(26, 'dmd@adinet.com.uy', '200.125.47.222', 'Tue, 15 Apr 2008 19:12:16 -0500');
INSERT INTO `ml` VALUES(27, 'kalbert35@yahoo.com', '64.89.210.251', 'Sun, 18 May 2008 18:38:20 -0500');
INSERT INTO `ml` VALUES(28, 'tim-chele1991@hotmail.com', '72.161.255.240', 'Wed, 28 May 2008 10:46:02 -0500');
INSERT INTO `ml` VALUES(29, 'l_santiago05@yahoo.com', '66.50.245.194', 'Fri, 30 May 2008 18:09:52 -0500');
INSERT INTO `ml` VALUES(30, 'ancapaul116@yahoo.com', '68.106.149.45', 'Sat, 07 Jun 2008 15:05:37 -0500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `na`
--

CREATE TABLE `na` (
  `id_na` int(3) NOT NULL auto_increment,
  `titulo` varchar(35) NOT NULL default '',
  `contenido` text NOT NULL,
  `foto` varchar(55) NOT NULL default '',
  `activo` char(1) NOT NULL default '',
  PRIMARY KEY  (`id_na`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='New''s Articles' AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `na`
--

INSERT INTO `na` VALUES(1, 'Summer is ON!!', 'Summer is right around the corner and Orlando is the place to spend it.  Orlando is full of things to do.  Disney, Universal, SeaWorld, and night time entertainment make up the wonderfull things to do in Orlando.  \r\n\r\nOrlandoCheapTickets.com is here to save you money and time on your vacation.  We offer discounted tickets.  The best part is we live and play here.  Some companies main office is in Texas.  What do they know about Orlando? \r\n\r\n', 'files/080225-orchid-walk.jpg', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `idnews` int(2) NOT NULL auto_increment,
  `dia` int(2) NOT NULL default '0',
  `mes` int(2) NOT NULL default '0',
  `anio` int(4) NOT NULL default '0',
  `titulo` varchar(50) NOT NULL default '',
  `body` text NOT NULL,
  PRIMARY KEY  (`idnews`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='News' AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `news`
--

INSERT INTO `news` VALUES(1, 17, 1, 2008, 'Grand Opening', 'TODAY!!  nnnnn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id_order` int(6) NOT NULL auto_increment,
  `Id_customer` int(6) NOT NULL default '0',
  `id_payment` int(6) NOT NULL default '0',
  `ship_type` int(1) NOT NULL default '0',
  `date` varchar(20) NOT NULL default '0000-00-00',
  `status` int(1) NOT NULL default '0',
  `comments` text NOT NULL,
  `order_num` varchar(40) NOT NULL default '',
  `amount` double(5,2) NOT NULL default '0.00',
  PRIMARY KEY  (`id_order`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `orders`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders_items`
--

CREATE TABLE `orders_items` (
  `id_oi` int(6) NOT NULL auto_increment,
  `order_num` varchar(50) NOT NULL default '',
  `id_item` int(5) default NULL,
  `type` int(5) default NULL,
  `Id_customer` int(6) default NULL,
  `cantidad` smallint(5) unsigned default NULL,
  `h` int(1) NOT NULL default '0' COMMENT 'Hopper',
  `w` int(1) NOT NULL default '0' COMMENT 'Water Parks',
  `e` int(1) NOT NULL default '0' COMMENT 'No expiration',
  `kind` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id_oi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `orders_items`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_track`
--

CREATE TABLE `order_track` (
  `id_order_track` int(5) NOT NULL auto_increment,
  `id_order` int(5) NOT NULL default '0',
  `date` varchar(30) NOT NULL default '',
  `status` int(1) NOT NULL default '0',
  `comments` text NOT NULL,
  PRIMARY KEY  (`id_order_track`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `order_track`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(5) NOT NULL auto_increment,
  `type` int(1) NOT NULL default '0',
  `id_customer` int(3) NOT NULL default '0',
  `id_ses_track` varchar(50) NOT NULL default '',
  `status` varchar(25) NOT NULL default '',
  `comments` text NOT NULL,
  `id_cc_info` int(5) NOT NULL default '0',
  PRIMARY KEY  (`id_payment`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Order Payment information' AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `payment`
--

INSERT INTO `payment` VALUES(1, 1, 1, 'a336a4f489ed3ef584674364c2d4c5a4', '0', 'Not Proccesed', 0);
INSERT INTO `payment` VALUES(2, 1, 1, 'a336a4f489ed3ef584674364c2d4c5a4', '0', 'Not Proccesed', 0);
INSERT INTO `payment` VALUES(3, 1, 24, 'e704b7577cf577b271cba93c5051c92e', '0', 'Not Proccesed', 0);
INSERT INTO `payment` VALUES(4, 2, 24, 'e704b7577cf577b271cba93c5051c92e', '0', 'Not Proccesed', 0);
INSERT INTO `payment` VALUES(5, 2, 1, 'e065984caf10db122b51e425d91395cd', '0', 'Not Proccesed', 1);
INSERT INTO `payment` VALUES(6, 1, 1, 'c53a3732b4752437cad6bcb26481aaca', '0', 'Not Proccesed', 0);
INSERT INTO `payment` VALUES(7, 1, 1, 'c53a3732b4752437cad6bcb26481aaca', '0', 'Not Proccesed', 0);
INSERT INTO `payment` VALUES(8, 1, 1, 'c53a3732b4752437cad6bcb26481aaca', '0', 'Not Proccesed', 0);
INSERT INTO `payment` VALUES(9, 2, 1, 'ac2ccbaec47d7d4b4af476d4cc945d99', '0', 'Not Proccesed', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pds`
--

CREATE TABLE `pds` (
  `id_pds` int(2) NOT NULL auto_increment,
  `nombre_pds` varchar(45) NOT NULL default '',
  `description` text NOT NULL,
  `pic_pds` varchar(150) NOT NULL default '',
  `coments` text NOT NULL,
  `cat_pds` int(2) NOT NULL default '0',
  `cat_pds2` int(2) NOT NULL default '0',
  `disney` int(1) NOT NULL default '0',
  `universal` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id_pds`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Parks, Diners and Shows' AUTO_INCREMENT=46 ;

--
-- Volcar la base de datos para la tabla `pds`
--

INSERT INTO `pds` VALUES(1, 'Arabian Nights', 'Immerse yourself in a delightful fairy tale that comes alive before your eyes with amazing displays of horsemanship atop more than 60 galloping majesties at the Arabian Nights Dinner Theater. The founders of Arabian Nights had one goal when they developed this show more than 15 years ago to recreate the world''s best horse performances.  This spectacular production has surpassed everyone''s expectations, has "wowed" more than a million guests, and has won several noteworthy awards, ', 'files/princ-anights.jpg', 'Including:  Best Romantic Restaurant, Best Dinner Theater Show, The Golden Palm Award, and Best Performing Arts Group or Venue. \r\nThe fairy tale unfolds as soon as you enter the 1,200 seat arena known as the Horse Palace.  You''ll join the Royal Family on the wedding day of the Princess, where the feast and the entertainment are fit for a King--or, in this case, Sultan.  Every fairy tale needs a villain, and this one is no different--plenty of romance, adventure and suspense lurk around every corner. The wedding''s entertainment is provided by the genie, who calls up more than 20 delightful acts--from a square dance on horseback, to bareback riding gypsies, even a unicorn!  And, in one of the most noteworthy performances, the Black Stallion makes an appearance you won''t forget.   ', 2, 0, 0, 0);
INSERT INTO `pds` VALUES(3, 'Pirates Dinner Adventure', 'Pirates is an action packed, musical adventure that includes spectacular stunts, dazzling special effects, enchanting singing and amazing aerial acts... aboard an actual pirate ship floating in a 300,000 gallon lagoon.\r\n \r\n \r\n As a special guest of Princess Anita at Pirate''s Dinner Adventure you are invited to start off your evening with a bountiful appetizer buffet. Enjoy the King’s assorted salads, tasty snacks, and special sauces. The festival buffet is prepared to wet the appetite of royalty and commoner alike. You''ll be entertained by a gypsy fortune teller, games of skill and the whimsy of the village tattoo artist who offers face painting and make-believe tattooing for the children.', 'files/princ-pirateslogo.jpg', 'Pirates Dinner Adventure is the one dinner show that can''t be missed in the Orlando area. Delicious food, "swashbuckling action", and a full-rigged pirate''s ship help make this award winning show an unbelievable adventure. As special guests of Princess Anita, everyone is treated to a tasty appetizer buffet before moving on to a full course meal. Although this show is of broadway quality, you might forget it when the feared Sebastian the Black takes everyone hostage beginning an unforgettable night of action, romance and comedy.', 2, 0, 0, 0);
INSERT INTO `pds` VALUES(6, 'Polynesian Luau Dinner Show - at SeaWorld Orl', 'The Makahiki Polynesian Luau dinner show is one of the most exciting and memorable attractions in Orlando. In addition to flaming fire, traditional Hawaiian music, and spectacular performs, guests are also served a fantastic full course meal.  \r\nWhile on your Florida vacation, spend an evening being whisked away to gorgeous Hawaii, with cultural music, dance, and a full course meal.  The authenticity of this dinner show is impossible to beat, and a must see for all vacationers, young and old. \r\n  \r\n \r\n  ', 'files/princ-Copyofmaka.jpg', 'The Makahiki Luau Polynesian Feast and Celebration at SeaWorld Florida is held nightly in the "Luau Terrace," a non-smoking, air-conditioned dining room inside the park.\r\n', 2, 0, 0, 0);
INSERT INTO `pds` VALUES(11, 'Holy Land Experience', 'Holy Land Experience is a theme park unique from all others in the Orlando area. As you enter the gates, you are immediately transported 7,000 miles away, and 2,000 years back in history. Purchase Holy Land Experience tickets, and relive what life was like in Jerusalem, just as Jesus would have experienced it.  Become immersed in the sights and sounds, and become enlightened, as people of all ages, are able to actively participate in the city''s events.\r\n     ', 'files/princ-holylandlogo.jpg', 'It''s Educational\r\n\r\nThere are many wonderful things to learn at The Holy Land Experience. From the moment you pass through the gates of our walled city, you will be immersed in ancient Jerusalem. The structures and exhibits characterize the style, architecture, and settings that existed in the Holy Land 2000 years ago. The Garden Tomb, Qumran Dead Sea Caves, Great Temple and Plaza, Jerusalem Model, and Wilderness Tabernacle are all intricately detailed, both inside and out, to provide you with a clearer understanding of their biblical significance.\r\n\r\n   ', 4, 0, 0, 0);
INSERT INTO `pds` VALUES(12, 'Busch Gardens®', 'Busch Gardens Tampa Bay is the ultimate family adventure park offering many of fascinating attractions based on an African theme. Dig into a fascinating exposition of unique rides and zoos featuring more than 2700 distinct animals. Get on the Montu which will go deep into an ancient land filled with stories and modern day sensations, hold tight at the Katonga while you approach lions, giraffes and magnificent animal close-up, or take the Cheetah Chase ride that will take the whole family through hair pin turns followed by desert grills with flavorful aromas.  ', 'files/princ-bg.jpg', 'Take an exciting action packed adventure on the Kumba with 360’ twirls, 100 ft drops and 60 mph rushes, while you dare to challenge Gwazi a two headed beast enjoying the antics of hundreds of colorful birds who love to make new friends. Ride America’s exclusive Sheikra a coaster that takes you 200 feet up and then dives at 90’. Finally share the enjoyment at the land of the Dragons, make a splash at Congo River rapids, Tanganyika tidal wave and Stanley falls, or savor the fares at Crown Colony, the Desert Grill, Zambia Smokehouse, and Zagora Café   ', 1, 1, 0, 0);
INSERT INTO `pds` VALUES(15, 'Fantasy of Flight®', '   See vintage aircraft such as a British Spitfire, B-24 Liberator, Short Sutherland (a four engine flying boat), B-17 Flying Fortress, Corsair and more. Thry their Great Balloon Experience in which you ride a large, tethered gas balloon up to 600 ft. with views up to 25 miles, and you can ride it as often as you like. They also have many combat simulators where you sit in the cockpit of a Corsair over the Pacific during WWII in their "Fightertown", which you can also visit as often as you want. There''s also The Compass Rose Restaurant which is a 1930''s art deco style diner (with high ceilings). Just 20 minutes drive from Walt Disney World Resort.  ', 'files/princ-FOF_LOGO.jpg', ' The fleet of vintage aircraft displayed at Fantasy of Flight features aircraft whose accomplishments have earned the admiration of knowledgeable aviators and inspired the imagination of those who have always dreamed of soaring above the clouds. The vintage aircraft, painstakingly acquired by lifelong aviation enthusiast and founder of Fantasy of Flight, Kermit Weeks, represents all eras of aviation from early flight to the 1950s.\r\n\r\nSome aircraft have been carefully restored to represent the same dignity they possessed when they ruled the skies. Others, shown in the immersion experiences, look exactly the same as when Weeks acquired them. Below is a list of the aircraft you can expect to see when you visit Fantasy of Flight.\r\n\r\n', 4, 0, 0, 0);
INSERT INTO `pds` VALUES(16, 'Gatorland®', 'Self-proclaimed as the "Alligator Capital of the World" TM, I have no reason to doubt their claim. They have very many alligators and crocodiles from around the world, including jungle crocs from Asia, Africa''s Nile River, Cuba, South America and of course American crocs and gators. There are also shows that feature gator wrestling, jumping gators pursuing their lunch, a Snakes of Florida show with poisonous diamondback rattlesnakes, water-mocassins, and deadly coral snakes. ', 'files/princ-gatorland_logo.jpg', ' There''s a small-scale train there, and theres a mini-water park for the kids called "Lilly''s Pad" where you may want them to wear a bathing suit. There''s also a bird sanctuary, petting zoo, eco-tour, "jungle excursion". They say that the entire experience lasts approximately half of a day. If you are curious what alligators taste like, they offer Gator Tail Nuggets and Gator Ribs (subject to change without notice. They have more traditional fast-food too!) ', 4, 0, 0, 0);
INSERT INTO `pds` VALUES(17, 'Sleuths Mystery Dinner Show', 'Orlando Dinner Show Since 1980, Sleuths Mystery Dinner Shows have been providing an exciting and intellectually stimulating form of entertainment In Orlando, Florida. An evening at Sleuth''s begins with you being treated as a guest at a celebration such as a wedding or class reunion depending on which of our 8 plays you attend. ', 'files/princ-sleuths.jpg', 'Over hors d''oeuvres, salad, and drinks you will begin to get acquainted with the characters of the show and will learn more about their situation during the 30-45 minute play at the end of which, of course, one of them dies. After the murder, everyone is hungry so you can discuss clues and theories over dinner. Be sure to come up with some good questions because after dinner we bring all the characters back on stage (the ones that are still alive anyway) and allow you to interrogate them for more information. The dramatic unveiling follows dessert.', 2, 0, 0, 0);
INSERT INTO `pds` VALUES(18, 'SeaWorld Orlando ®', 'SeaWorld Orland is the world''s most popular marine life adventure park with more than 200 acres of shows, attractions and exhibits that combine entertainment and education to create incredible once-in-a-lifetime adventures.\r\n \r\nYou can meet Shamu the killer whale, or walk through a glass underwater tunnel as sharks and stingrays swim above you. More than 80 million visitors have explored the mysteries of the sea with up-close animal interactions and exhilarating thrills.   ', 'files/princ-sw.jpg', 'New state-of-the-art rides such as “Kraken” and “Journey To Atlantis” twist, turn, and drench guests with unprecedented thrills, while amazing animal encounters include killer whale shows, dolphins, sea lions, stingrays and more. \r\n\r\nSeaWorld Orlando is the world''s premiere marine adventure park with 200 acres of world-class shows, thrilling rides & unforgettable animal encounters. More than 80 million visitors have explored the mysteries of the sea with up-close animal interactions & exhilarating thrills.   ', 1, 1, 0, 0);
INSERT INTO `pds` VALUES(23, 'Medieval Times dinner and tournament', 'Medieval Times is more than the nation''s #1 and longest running dinner attraction — it''s a living link to the past where the glory, chivalry and valor of old burst to life in authentic pageantry and thrilling tournament action.  While guests enjoy a hearty four-course banquet medieval style, without silverware, six brave knights compete in games of skill astride magnificent Andalusian stallions.  ', 'files/princ-mtknightrhorse3copy.jpg', 'Lances splinter against shields of steel, broad swords spark and a champion emerges, to the cheers of the enthusiastic crowd.  The spectacle unfolds nightly inside a fully enclosed, climate controlled European-style castle.  Price includes dinner and show. Show runs at various times. Please check the schedule. for specific show times and dates. Show runs approximately two hours. This show is appropriate for all ages. The theater is handicap accessible. \r\nThe castle theater seats approximately 1,100 guests. Vegetarian meals are available upon request. Casual dress is recommended.  ', 2, 0, 0, 0);
INSERT INTO `pds` VALUES(25, 'Kennedy Space Center', 'Each year, more than 1.5 million guests from around the world experience their very own space adventure by exploring the exciting past, present and future of America ’s space program at Kennedy Space Center Visitor Complex. Built in 1967 as a means for NASA astronauts’ and employees’ families to view space center operations, today the Visitor Complex is one of Central Florida’s most popular tourist destinations. Since 1995, when Delaware North Companies Parks and Resorts, Inc. began managing the Visitor Complex, every aspect of this 70-acre facility has been entirely redeveloped and enhanced. From larger-than-life IMAX® films to live shows, hands-on activities and behind-the-scenes tours, Kennedy Space Center Visitor Complex offers guests an educational, entertaining and comprehensive space program experience.', 'files/princ-ksc.jpg', 'Kennedy Space Center Visitor Complex is located 45 minutes east of Orlando on State Road 405, six miles inside the Kennedy Space Center entrance. From Orlando, take State Road 528 east and follow the signs to Kennedy Space Center. From Interstate 95, take exit 212 northbound or exit 215 southbound. From Merritt Island or Cocoa Beach, take State Road 3.\r\nOperating Hours\r\nOpens daily at 9:00 a.m. Closing times vary. Open every day except December 25 and certain launch days. Guests should plan to spend the day for a complete experience.', 4, 0, 0, 0);
INSERT INTO `pds` VALUES(26, 'Cirque du Soleil in Downtown Disney', 'This Cirque du Soleil creation is an unforgettable journey through this universe -- at once threatening and exhilarating, frightening and familiar. La Nouba is the story of all stories, the site of all mysteries, where dreams and nightmares sleep side by side. La Nouba is memory, individual and universal. It beckons to us, challenges us to uncover passions we thought we had lost long ago. Here, anything is possible. ', 'files/princ-disney_cirque_de_solei.jpg', 'La Nouba contains two types of families or groups and throughout the ride the magic and fantasy of the colorful Cirques (circus people) clash with the monochromatic world of the Urbains (urbanites). But as in fables, it is not so much this contrast as the interplay between these two groups, which sparks our curiosity and feeds our imagination. Once upon a time, a door opened and two worlds collided. Dreams clashed with reality. The mundane mixed with the marvelous. It was no longer possible to tell where one world began and the other ended. This new place was called La Nouba. ', 5, 0, 0, 0);
INSERT INTO `pds` VALUES(27, 'Disney’s Animal Kingdom®', 'Here on the southwestern edge of the Walt Disney World Resort, Disney Imagineers have created a nature-rich and protective environment for exotic animals. \r\nThey include everything from komodo dragons to hippos, lions, crocodiles and gorillas, herds of antelope and rhinos -- mingled where feasible, separated by natural-looking or invisible barriers where needed. acaws, an anteater and iguanas. The park is laid out in a classic hub-and-spoke Disney style. \r\n\r\n   ', 'files/princ-aklogo.jpg', ' Architectural scale is suppressed to allow trees to “overshadow” buildings. Overall building height is limited to 30 feet. Many trees transplanted to the site are over 40 feet tall. Some are man-made. Others are carefully arranged dead trees or reshaped growing trees found on the site. In Africa, for instance, they have been pruned to resemble such African signature trees as the flat-topped acacia or maringa trees with their sausage-like seed pods added.  ', 5, 0, 1, 0);
INSERT INTO `pds` VALUES(30, 'Blizzard Beach', 'Disney legend has it that after a freak winter storm blanketed the area with snow, Florida''s first ski resort was born. When temperatures returned to normal, the powdery snow turned to slippery slush. Slalom courses, bobsled and toboggan runs became downhill waterslides. The chair lift carried swimmers instead of skiers. The ski jump became the tallest, fastest waterslide in the nation. It has become Disney''s Blizzard Beach, the most slushy, slippery, exhilarating beach water park anywhere!      ', 'files/princ-blizzard-beach.jpg', 'Blizzard Beach Height Requirements\r\n\r\nBlizzard Beach Chair Lift - Must be at least 32 inches tall to ride. \r\n(No infants or lap-riding) \r\nCross Country Creek - Adult supervision is required \r\n\r\nDownhill Double Dipper (mat slide) - Must be at least 48" tall to ride \r\n\r\nSlush Gusher (speed slide) - Must be at least 48" tall to ride \r\n\r\nSummit Plummet (speed slide) - Must be at least 48" tall to ride \r\n\r\nT-Bar (in Ski Patrol Training Camp) - Must be under 48" tall to ride \r\n\r\nTike’s Peak (childrens area) - Must be under 48" tall to ride ', 5, 3, 1, 0);
INSERT INTO `pds` VALUES(31, 'Pleasure Island in Downtown Disney', 'Party all night under the lights! This island of entertainment is an oasis of non-stop fun.  ', 'files/princ-pi.jpg', '  Whatever your pleasure — from dynamite dancing to non-stop laughs — one ticket allows you unlimited access to all the late-night clubs where you''re sure to have an electrifying time!   ', 5, 0, 0, 0);
INSERT INTO `pds` VALUES(32, 'Disney''s Typhoon Lagoon', 'Disney legend has it that a furious storm once roared across the sea, hurling surfboards into trees, blowing small boats through roofs and impaling a shrimp boat on a peak of a great volcanic mountain. Left in the typhoon''s wake was a water park filled with twisting tides, roaring rapids, wonderful waterways and relaxing rivers. Whether you are navigating the nine exhilarating waterslides and streams or conquering one of the world''s largest artificially created waves.  ', 'files/princ-typhoon_lagoon_logo.jpg', 'Typhoon Lagoon Height Requirements\r\nCastaway Creek (continuous river raft ride) - Adult supervision is required \r\nHumunga Kowabunga (speed slide) - Must be at least 48" tall to ride \r\nKetchakiddee Creek (children’s area) - Must be under 48" tall to experience \r\nMayday Falls (raft ride) - Must be at least 48" tall to ride \r\nShark Reef (saltwater reef environment) - Children under age 10 must be accompanied by an adult. Mothers to be may wish to bypass the ride and those with neck or back problems are strongly discouraged from experiencing any water slide attraction. \r\nTyphoon Lagoon (wave pool) - Adult supervision is required \r\n  ', 5, 3, 0, 0);
INSERT INTO `pds` VALUES(33, 'Hollywood Studios', 'Disney-MGM Studios is a colourful nostalgic blend of art deco, architecture, pop art sculpted gardens, trendy restaurants, funk diners and curio shops. Here, you can see company cartoonists at work on vintage and new characters and it can easily be visited in one day.\r\n\r\nDisney-MGM Studios are split into six sections: Hollywood Boulevard, Sunset Boulevard, Animation Courtyard, Sound Stages and Backlot, New York Street and Echo Lake.  ', 'files/princ-disneys-hollywood-studios-large.jpg', 'Disney-MGM Studios are split into six sections: Hollywood Boulevard, Sunset Boulevard, Animation Courtyard, Sound Stages and Backlot, New York Street and Echo Lake.  ', 5, 0, 1, 0);
INSERT INTO `pds` VALUES(34, 'Epcot®', 'Epcot, Walt Disney’s futuristic world of peace and happiness, stands for Experimental Prototype Community of Tomorrow and incorporates laboratories and museums in a theme-park style. Epcot is environmentally advanced with it’ organic gardens, solar energy fuelling most of the park and rainwater lagoons and ponds filled with rainwater.  ', 'files/princ-epcot.jpg', ' Adults and children will enjoy Epcot as it is a place that suggests and explains but always entertains. Epcot is divided into two worlds: Future World and World Showcase.   ', 5, 0, 1, 0);
INSERT INTO `pds` VALUES(36, 'DisneyQuest®', 'Create your own adventures in this one-of-a-kind indoor interactive Theme Park bursting with games that give "state-of-the-art" new meaning. Discover five floors exploding with cutting-edge technology, virtual reality and 3-D experiences — all fueled by Disney innovation and imagination. ', 'files/princ-dq.jpg', ' The entry portal, Ventureport, leads to four different zones: the Explore Zone, a virtual Adventureland; the Score Zone, for superhero quests; the Create Zone, for artistic endeavors; and the Replay Zone for nostalgic fun. Anyway you cut it, you''re in the Zone at DisneyQuest! ', 5, 0, 0, 0);
INSERT INTO `pds` VALUES(37, 'The Outta Control Magic Dinner Show', 'Wonder Works, the upside-down building on popular International Drive, features Orlando''s funniest dinner show. The show, which is entitled The Outta Control Magic Show is just that. This hilarious show combines high energy comedy improvisation with spectacular magic to thoroughly entertain audiences of all ages. During the show, enjoy:\r\nunlimited fresh hand-tossed pizza \r\nunlimited popcorn \r\nunlimited beer, wine, and soda \r\n', 'files/princ-outtacontrolmagiccomedy.jpg', 'The 90 minute experience will keep you on the edge of your seat and tickle your funny bone every 8 seconds.The production features nationally recognized entertainers Tony Brent and Danny Devaney who are sure to keep you busting at the seams. The Outta Control Magic Show provides a one of a kind entertainment experience to the Orlando area with non-stop audience participation.', 2, 0, 0, 0);
INSERT INTO `pds` VALUES(38, 'Universal Studios', 'Universal Studios Tickets Universal Studios Florida is where the movies come to life. With over 40 show, rides and attractions there is something for all ages. Experience Twister: Ride It Out, Mummy The Ride, Terminator 2, Men in Black Alien Attack, and Shrek 4D! A fun packed day for everyone at Universal Studios Orlando Florida.  ', 'files/princ-uni.jpg', 'You are the star at Universal Studios, the number one movie and TV based theme park in the world. At this real film and television studio you will go behind the scenes, beyond the screen and right into the action of your favorite movies.\r\n\r\nWhether you are a fan of high-powered excitement, side-splitting comedy or heart-warming children''s tales, nobody puts you in the picture like Universal Studios.', 1, 0, 0, 1);
INSERT INTO `pds` VALUES(40, 'Islands of Adventure', 'Islands of Adventure is a brand new state of the art theme park. In 5 different Islands you can enjoy white knuckle rides and award winning shows! Enjoy some of the world''s best attractions including Spiderman, The Hulk, Dueling Dragons, and Seuss Landing!    ', 'files/princ-islandofadventure.jpg', ' There''s even more excitement on the horizon with the announcement of the Harry Potter “theme park within a theme park” coming to Islands of Adventure. Fans will be immersed in the adventures of the world’s most popular wizard in The Wizarding World of Harry Potter, scheduled to open in 2009.   ', 1, 0, 0, 1);
INSERT INTO `pds` VALUES(41, 'Wet ''N Wild', 'Wet ''N Wild, owned and operated by world renowned Universal Studios Orlando,  features a fun-packed day of wild rides for the whole family. Rated as Orlando''s premier water-park, Wet ‘N Wild showcases its latest centerpiece ride, Disco H2O. \r\n\r\nCome and enjoy a premier water-park with world-class signature rides including the Stuka speed slide, Storm cyclone chute, Mach 5 flumes, Bombay vertical slide, The Surge multi-passenger tube and Wake Zone Skiing. \r\n\r\n', 'files/princ-wet_n_wild_logo.jpg', 'Imagine taking a plunge on a hot summers day, ride the Storm which swirls as you hold on for dear life, leap into the Black Hole with no lights into a un-ending tunnel which twists and turns, climb the Bubble Up and then slide down while water-guns fire on every side, or just enjoy a relaxing moment on an inner tube winding around a lazy river.  ', 3, 0, 0, 0);
INSERT INTO `pds` VALUES(42, 'Silver Springs', 'Silver Springs is a 350 acre nature theme park that surrounds the headwaters of the beautiful Silver River, the largest artesian spring formation in the world. Located 90 miles north of Orlando, just east of Ocala, Florida. \r\n\r\nHere you can view the underground springs from our famous glass-bottom boats, where you’ll see fish, shellfish, turtles and alligators in water that’s up to 80 feet deep and 99.8% pure.   ', 'files/princ-silversprings.jpg', 'Walk the beautiful grounds and experience the natural habitats of Florida’s largest alligators, endangered bears and panthers, Kritter Korral petting zoo, plus an entertaining variety of wildlife shows from Birds of Prey to snakes and reptiles.  There are rides and exhibits for all ages in a natural setting of stunning beauty.    ', 4, 4, 0, 0);
INSERT INTO `pds` VALUES(43, 'Boggy Creek Airboat Tours', 'Enjoy 30 minutes of spectacular scenes as you venture out into one of the most intriguing areas of Florida — The Everglades. Known as one of the world''s greatest treasures, you''ll get the chance to witness wildlife in their natural habitat.  ', 'files/princ-boggy.jpg', 'Sightings include bald eagles, blue herons, deer, a wide variety of water foul, and the star attraction — the American alligator. And if that weren''t enough, you''ll have the thrill of skimming across the water at speeds of up to 40 MPH!   ', 4, 0, 0, 0);
INSERT INTO `pds` VALUES(44, 'Magic Kingdom', 'Welcome to the Magic Kingdom ® Park. Everyday, classic Disney magic and new sup rises invite you to believe in make-believe. Don''t miss the new Cinderellabration- a royal, regal, magical celebration of Cinderella''s coronation filled with enchantment and visit from your favorite Disney princesses. Set off with Donald Duck on a madcap, musical 3-D adventure through classic disney films. Hold onto you hat, your hair and everything else as Stitch cuts loose with comic chaos in his own attraction. ', 'files/princ-princ-copyofmkcastl11.jpg', 'Challenge the famous Magic Kingdom mountain range with a rocket ride through the stars, a twisting runaway train ride and wild watery plunge into Brer Rabbit''s laughin'' place. On special nights, gather together as Disney magic weaves a sparkling story in the sky! ', 5, 5, 1, 0);
INSERT INTO `pds` VALUES(45, 'Aquatica', 'Aquatica.  SeaWorld''s Aquatica is a one-of-a-kind waterpark that blends up close animal experiences from serene to extreme, high-speed thrills and wide, sandy beaches. This unique water park covers 60 acres with lush landscaping inspired by the South Sea Islands. Inside the park crystal-blue rivers wind through hidden grottos and refreshing waterfalls, while rich greenery and bright flowers adorn towering rock formations. ', 'files/princ-untitled-3.jpg', ' ', 3, 3, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pg`
--

CREATE TABLE `pg` (
  `Id_pg` int(2) NOT NULL auto_increment,
  `nombre_pg` varchar(25) NOT NULL default '',
  `rank` int(2) NOT NULL default '0',
  PRIMARY KEY  (`Id_pg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de Grupos Principales' AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `pg`
--

INSERT INTO `pg` VALUES(1, 'Theme Parks', 1);
INSERT INTO `pg` VALUES(2, 'Dinner Shows', 0);
INSERT INTO `pg` VALUES(3, 'Water Parks', 0);
INSERT INTO `pg` VALUES(4, 'Other Attractions', 4);
INSERT INTO `pg` VALUES(5, 'Disney', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc`
--

CREATE TABLE `tc` (
  `id_tc` int(2) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id_tc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Ticket''s Categories' AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `tc`
--

INSERT INTO `tc` VALUES(1, 'Adult');
INSERT INTO `tc` VALUES(2, 'Child');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tk`
--

CREATE TABLE `tk` (
  `id_tk` int(3) NOT NULL auto_increment,
  `kind` int(1) NOT NULL default '1',
  `days` int(2) NOT NULL default '0',
  `nombre_tk` varchar(45) NOT NULL default '',
  `cat_pds` int(2) NOT NULL default '0',
  `type_tk` int(1) NOT NULL default '0',
  `conditions` text NOT NULL,
  `gate` decimal(4,2) NOT NULL default '0.00',
  `our` decimal(4,2) NOT NULL default '0.00',
  `ages` varchar(10) NOT NULL default '',
  `status` int(1) NOT NULL default '0',
  `stock` int(1) NOT NULL default '0',
  `h` decimal(4,2) NOT NULL default '0.00',
  `w` decimal(4,2) NOT NULL default '0.00',
  `e` decimal(4,2) NOT NULL default '0.00',
  PRIMARY KEY  (`id_tk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tickets ' AUTO_INCREMENT=75 ;

--
-- Volcar la base de datos para la tabla `tk`
--

INSERT INTO `tk` VALUES(1, 1, 1, 'Arabian Nights', 1, 1, 'Adult-Arabian Nights. Dinner is included. Reservations are highly recommended. ', 56.60, 29.00, '12+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(2, 1, 1, 'Busch Gardens (Tampa)', 12, 1, 'Adult Busch Gardens Tampa \r\nOne day admission to Busch Gardens Receive 2nd Day Free, 2nd day must be used within 7 days from the 1st day of use. You must upgrade your ticket at the guest service center.\r\n\r\n', 69.50, 65.00, '10 +', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(3, 1, 1, 'Busch Gardens (Tampa)', 12, 2, 'Adult-One day admission to Busch Gardens Receive 2nd Day Free, 2nd day must be used within 7 days from the 1st day of use. You must upgrade your ticket at the guest service center.       ', 58.80, 55.00, '3 - 9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(4, 1, 1, 'Arabian Nights', 1, 2, 'Adult-Arabian Nights. Dinner is included. Reservations are highly recommended. ', 31.03, 23.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(7, 1, 1, 'Medieval Times', 23, 1, 'Adult-Medieval Times. Dinner is included. Reservations are required.      ', 60.94, 45.00, '13+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(8, 1, 1, 'Medieval Times', 23, 2, 'Child-Medieval Times. Dinner is included. Reservations are required.     ', 38.47, 35.00, '3-12', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(9, 1, 1, 'Boggy Creek', 43, 2, '  ', 23.49, 19.50, '10 +', 0, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(10, 1, 1, 'Boggy Creek', 43, 1, '   ', 17.07, 15.00, '3-9', 0, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(11, 1, 1, 'Holy Land Experience', 11, 1, 'Adult-Holy Land. One day ticket.    ', 35.00, 27.00, '13+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(12, 1, 1, 'Holy Land Experience', 11, 2, 'Child-Holy Land One day ticket.', 20.00, 17.00, '6-12', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(13, 1, 1, 'Pirates Dinner Show', 3, 1, 'Adult-Pirates Dinner Adventure. Dinner is included. Reservations are highly recommended.     ', 61.72, 41.50, '12+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(14, 1, 1, 'Pirates Dinner Show', 3, 2, 'Adult-Pirates Dinner Adventure. Dinner is included. Reservations are highly recommended.     ', 40.42, 34.00, '3-11', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(15, 1, 1, 'Sea World luau', 6, 1, 'Adult-Makahiki Luau.  SeaWorld admission and parking are not required for guests attending the Makahiki Luau only. Reservations required. Tickets are good for any night you wish to use them.    ', 48.94, 41.00, '12 +', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(16, 1, 1, 'Sea World luau', 6, 2, 'Child-Makahiki Luau. SeaWorld admission and parking are not required for guests attending the Makahiki Luau only. Reservations required. Tickets are good for any night you wish to use them. \r\n   ', 31.90, 27.50, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(17, 1, 1, 'Sleuths', 17, 1, 'Adult-Sleuth''s Mystery Dinner. Dinner is included. Reservations are required.    ', 53.20, 41.00, '12+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(18, 1, 1, 'Sleuths', 17, 2, 'Child-Sleuth''s Mystery Dinner.  Dinner is included. Reservations are required.      ', 25.51, 24.00, '3-11', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(19, 1, 1, 'Kennedy Space Center', 25, 1, 'Adult-All day Maximum Access Admission. Includes tour into restricted areas and all Visitor Complex exhibits, shows and IMAX movies.      ', 41.34, 36.50, '12 +', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(20, 1, 1, 'Kennedy Space Center', 25, 2, 'Adult-All day Maximum Access Admission. Includes tour into restricted areas and all Visitor Complex exhibits, shows and IMAX movies.    ', 30.74, 27.50, '3-11', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(21, 1, 1, 'Gatorland', 16, 1, 'Adult-Gatorland. All day Ticket.', 24.44, 18.25, '13 +', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(22, 1, 1, 'Silver Springs', 42, 1, 'Adult-Silver Springs.  One day Ticket.', 36.20, 28.50, '11+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(23, 1, 1, 'Silver Springs', 42, 2, 'Child-Silver Springs. 1 day ticket.', 25.55, 20.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(24, 1, 1, 'Gatorland', 16, 2, 'Child-Gatorland. 1 day ticket.  ', 15.92, 12.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(25, 1, 1, 'Wet''N Wild Orlando Florida', 41, 1, 'Wet ''n Wild, the world''s premier water park, features a full-day of fun for the entire family. Honored by Amusement Business Magazine as one of the nation''s best-attended water parks since the onset of their survey. Wet ''n Wild''s world-class signature thrill rides and quality service offer something for fun-lovers of all ages.    ', 42.55, 37.00, '10 +', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(26, 1, 1, 'Wet''N Wild Orlando Florida', 41, 1, 'Wet ''n Wild, the world''s premier water park, features a full-day of fun for the entire family.    ', 36.16, 32.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(30, 1, 1, 'Universal 1 Day 2 Parks', 38, 1, 'Adult-One Day Admission to either Universal Studios or Islands of Adventure       ', 88.35, 80.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(31, 1, 1, 'Universal 1 Day 2 Parks', 38, 2, 'Child-One Day Admission to either Universal Studios or Islands of Adventure        ', 77.70, 69.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(33, 1, 1, ' SeaWorld', 18, 2, 'One day admission to Seaworld. Receive 2nd Day Free, 2nd day must be used within 7 days from the 1st day of use. You must upgrade your ticket at the Passport Center at SeaWorld.\r\n\r\n       ', 61.72, 57.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(34, 0, 1, 'SeaWorld', 18, 1, 'One day admission to Seaworld. Receive 2nd Day Free, 2nd day must be used within 7 days from the 1st day of use. You must upgrade your ticket at the Passport Center at SeaWorld.\r\n\r\n      ', 72.37, 67.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(35, 4, 7, 'Universal Pass 7 Day 2 Parks', 38, 1, 'Adult-7 Day Universal Pass. Includes 7 Days of unlimited access to Universal Studios and Islands of Adventure. Moving park to park allowed. Expires 6 days after first day of use. Also includes 7 consecutive days of admission to CityWalk.     ', 124.56, 112.00, 'Adult (10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(36, 4, 7, 'Universal Pass 7 Day 2 Parks', 38, 2, 'Child-7 Day Universal Pass. Includes 7 Days of unlimited access to Universal Studios and Islands of Adventure. Moving park to park allowed. Expires 6 days after first day of use. Also includes 7 consecutive days of admission to CityWalk.\r\n  ', 113.91, 101.00, 'Ages (3-9)', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(37, 1, 1, 'Universal CityWalk Club Pass', 38, 1, 'Enjoy all night access to: Jimmy Buffett''s Margaritaville, Bob Marley-A Tribute To Freedom, The Groove, Latin Quarter, Motown Cafe, Pat O''Brien''s, CityJazz.   ', 12.77, 8.00, '21+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(43, 1, 1, 'Fantasy Of Flight 1 Day Ticket', 15, 1, 'Includes all day pass.  Does not include special events or plane rides.  ', 30.97, 25.00, '16+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(44, 1, 1, 'Fantasy Of Flight 1 Day Ticket', 15, 2, 'Includes all day pass.  Does not include special events and plane rides.  ', 15.99, 13.00, '6-15', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(45, 1, 1, 'Pleasure Island', 31, 1, 'Eight Completely different clubs offer something for everyone. Club hopping is non-stop!  ', 23.38, 19.75, '21+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(48, 3, 3, 'Magic Your Way 3D - A', 0, 1, '', 125.01, 125.01, '10+', 1, 0, 22.50, 24.99, 20.01);
INSERT INTO `tk` VALUES(49, 2, 1, 'SeaWorld And Aquatica Combo', 0, 1, 'Allows 1 day at SeaWorld and 1 day at Aquatica ', 100.00, 90.00, '12+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(52, 4, 7, 'Universal 5 Park 7 Day Play Ticket', 0, 1, 'Adult-5 Park 7 Day Universal Play Pass. Includes 7 Days of unlimited access to Universal Studios, Islands of Adventure and Wet'' n Wild, 2 Day access to SeaWorld within the 7 Days and 1 Day Admission into Aquatica within the 7 Days. Moving from park to park allowed only at Universal Studios, Islands of Adventure and Wet'' n Wild. Expires 6 days after first day of use. Also includes 5 consecutive days of admission to CityWalk. ', 0.00, 205.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(53, 4, 7, 'Universal 5 Park 7 Day Play Ticket', 0, 2, 'Child-5 Park 7 Day Universal Play Ticket. Includes 7 Days of unlimited access to Universal Studios, Islands of Adventure and Wet'' n Wild, 2 Day access to SeaWorld within the 7 Days and 1 Day Admission into Aquatica within the 7 Days. Moving from park to park allowed only at Universal Studios, Islands of Adventure and Wet'' n Wild. Expires 6 days after first day of use. Also includes 5 consecutive days of admission to CityWalk. ', 0.00, 187.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(56, 4, 2, '2 Day Universal Pass', 0, 1, 'Adult-2 Day Universal Pass. Includes 2 Days of unlimited access to Universal Studios and Islands of Adventure. Moving park to park allowed. Expires 6 days after first day of use. Also includes 5 consecutive days of admission to CityWalk. ', 123.49, 102.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(57, 4, 2, '2 Day Universal Pass', 0, 2, 'Child-2 Day Universal Pass. Includes 2 Days of unlimited access to Universal Studios and Islands of Adventure. Moving park to park allowed. Expires 6 days after first day of use. Also includes 5 consecutive days of admission to CityWalk. ', 111.78, 92.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(58, 4, 7, 'Universal 3 Park Unlimited 7 Day', 0, 1, 'Adult-3 Day Universal Pass. Includes 7 Days of unlimited access to Universal Studios, Islands of Adventure and Wet''n Wild. Moving park to park allowed. Expires 6 days after first day of use. Also includes 5 consecutive days of admission to CityWalk.', 136.26, 122.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(59, 4, 7, 'Universal 3 Park Unlimited 7 Day', 0, 2, 'Adult-3 Day Universal Pass. Includes 7 Days of unlimited access to Universal Studios, Islands of Adventure and Wet''n Wild. Moving park to park allowed. Expires 6 days after first day of use. Also includes 5 consecutive days of admission to CityWalk.', 125.61, 113.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(60, 1, 1, 'Island of Adventure 1 Day', 40, 1, 'Adult-One Day Admission to either Universal Studios or Islands of Adventure.', 75.62, 73.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(61, 1, 1, 'Island of Adventure 1 Day', 40, 2, 'Child-One Day Admission to either Universal Studios or Islands of Adventure. ', 63.90, 61.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(62, 1, 1, 'Universal 1 Day 1 Park', 38, 1, 'Adult-One Day Admission to Universal Studios. ', 75.62, 73.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(63, 1, 1, 'Universal 1 Day 1 Park', 38, 2, 'Child-One Day Admission to Universal Studios. ', 63.90, 61.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(64, 1, 1, 'Island of Adventure 1 Day 2 Parks', 40, 1, 'Adult-One Day Admission to both Universal Studios and Islands of Adventure. Moving park to park allowed.', 90.48, 80.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(65, 1, 1, 'Island of Adventure 1 Day 2 Parks', 40, 2, 'Child-One Day Admission to both Universal Studios and Islands of Adventure. Moving park to park allowed.', 79.83, 69.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(66, 4, 14, '5 Park Flex Ticket', 38, 1, 'Adult-5 Park Flex. You receive 14 consecutive days unlimited access to Universal Studios, Islands of Adventure, Sea World, Wet n'' Wild and Aquatica. Only pay parking once per day, moving park to park allowed. CityWalk is included. ', 250.26, 238.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(67, 4, 14, '5 Park Flex Ticket', 0, 2, 'Child-5 Park Flex. You receive 14 consecutive days unlimited access to Universal Studios, Islands of Adventure, Sea World, Wet n'' Wild and Aquatica Only pay parking once per day, moving park to park allowed. CityWalk is included.', 207.66, 196.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(68, 4, 14, ' 6 Park Flex Ticket', 0, 1, 'Adult-6 Park Flex. You receive 14 consecutive days unlimited access to Universal Studios, Islands of Adventure, Sea World, Wet n'' Wild, Aquatica and Busch Gardens. Only pay parking once per day, moving park to park allowed. CityWalk is included.', 298.41, 280.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(69, 4, 14, '6 Park Flex Ticket', 0, 2, 'Child-6 Park Flex. You receive 14 consecutive days unlimited access to Universal Studios, Islands of Adventure, Sea World, Wet n'' Wild, Aquatica and Busch Gardens. Only pay parking once per day, moving park to park allowed. CityWalk is included.', 249.40, 233.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(70, 1, 1, 'Sea World', 18, 1, 'One day admission to Seaworld. Receive 2nd Day Free, 2nd day must be used within 7 days from the 1st day of use. You must upgrade your ticket at the Passport Center at SeaWorld.', 72.37, 67.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(71, 2, 2, 'SeaWorld/Busch Combo', 0, 1, 'Enjoy one day each at Sea World and Busch Gardens, at a great savings over one day passes to each park. ', 106.70, 100.00, '10+', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(72, 2, 2, 'SeaWorld/Busch Combo', 0, 2, 'Enjoy one day each at Sea World and Busch Gardens, at a great savings over one day passes to each park.', 96.02, 92.00, '3-9', 1, 0, 0.00, 0.00, 0.00);
INSERT INTO `tk` VALUES(73, 3, 3, 'base', 0, 1, '', 999.99, 200.00, '10+', 1, 0, 230.00, 269.00, 400.00);
INSERT INTO `tk` VALUES(74, 2, 1, 'Disney 1 Day Admission to Typhoon Lagoon or B', 0, 1, 'Adult-Enjoy 1 day at Blizzard Beach or 1 day at Typhoon Lagoon.  There is one no hopping bettween parks. 1 day only.  ', 41.54, 39.75, '10+', 1, 0, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tk_combo_items`
--

CREATE TABLE `tk_combo_items` (
  `id_tk_combo_items` int(3) NOT NULL auto_increment,
  `id_tk` int(3) NOT NULL default '0',
  `id_pds` int(3) NOT NULL default '0',
  PRIMARY KEY  (`id_tk_combo_items`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Ticket combo items' AUTO_INCREMENT=53 ;

--
-- Volcar la base de datos para la tabla `tk_combo_items`
--

INSERT INTO `tk_combo_items` VALUES(1, 49, 45);
INSERT INTO `tk_combo_items` VALUES(2, 49, 18);
INSERT INTO `tk_combo_items` VALUES(3, 52, 45);
INSERT INTO `tk_combo_items` VALUES(4, 52, 18);
INSERT INTO `tk_combo_items` VALUES(5, 52, 41);
INSERT INTO `tk_combo_items` VALUES(6, 52, 38);
INSERT INTO `tk_combo_items` VALUES(7, 52, 40);
INSERT INTO `tk_combo_items` VALUES(9, 53, 38);
INSERT INTO `tk_combo_items` VALUES(10, 53, 40);
INSERT INTO `tk_combo_items` VALUES(11, 53, 18);
INSERT INTO `tk_combo_items` VALUES(12, 53, 45);
INSERT INTO `tk_combo_items` VALUES(13, 53, 41);
INSERT INTO `tk_combo_items` VALUES(14, 56, 40);
INSERT INTO `tk_combo_items` VALUES(15, 56, 38);
INSERT INTO `tk_combo_items` VALUES(16, 57, 38);
INSERT INTO `tk_combo_items` VALUES(17, 57, 40);
INSERT INTO `tk_combo_items` VALUES(18, 58, 38);
INSERT INTO `tk_combo_items` VALUES(19, 58, 40);
INSERT INTO `tk_combo_items` VALUES(20, 58, 41);
INSERT INTO `tk_combo_items` VALUES(21, 59, 38);
INSERT INTO `tk_combo_items` VALUES(22, 59, 40);
INSERT INTO `tk_combo_items` VALUES(23, 59, 41);
INSERT INTO `tk_combo_items` VALUES(24, 66, 38);
INSERT INTO `tk_combo_items` VALUES(25, 66, 40);
INSERT INTO `tk_combo_items` VALUES(26, 66, 18);
INSERT INTO `tk_combo_items` VALUES(27, 66, 41);
INSERT INTO `tk_combo_items` VALUES(28, 66, 45);
INSERT INTO `tk_combo_items` VALUES(29, 67, 38);
INSERT INTO `tk_combo_items` VALUES(30, 67, 40);
INSERT INTO `tk_combo_items` VALUES(31, 67, 18);
INSERT INTO `tk_combo_items` VALUES(32, 67, 41);
INSERT INTO `tk_combo_items` VALUES(33, 67, 45);
INSERT INTO `tk_combo_items` VALUES(34, 68, 38);
INSERT INTO `tk_combo_items` VALUES(35, 68, 40);
INSERT INTO `tk_combo_items` VALUES(36, 68, 18);
INSERT INTO `tk_combo_items` VALUES(37, 68, 12);
INSERT INTO `tk_combo_items` VALUES(38, 68, 41);
INSERT INTO `tk_combo_items` VALUES(39, 68, 45);
INSERT INTO `tk_combo_items` VALUES(40, 69, 38);
INSERT INTO `tk_combo_items` VALUES(41, 69, 40);
INSERT INTO `tk_combo_items` VALUES(42, 69, 18);
INSERT INTO `tk_combo_items` VALUES(44, 69, 12);
INSERT INTO `tk_combo_items` VALUES(45, 69, 45);
INSERT INTO `tk_combo_items` VALUES(46, 69, 41);
INSERT INTO `tk_combo_items` VALUES(47, 71, 18);
INSERT INTO `tk_combo_items` VALUES(48, 71, 12);
INSERT INTO `tk_combo_items` VALUES(49, 72, 18);
INSERT INTO `tk_combo_items` VALUES(50, 72, 12);
INSERT INTO `tk_combo_items` VALUES(51, 74, 30);
INSERT INTO `tk_combo_items` VALUES(52, 74, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tk_disney_items`
--

CREATE TABLE `tk_disney_items` (
  `id_tk_disney_items` int(3) NOT NULL auto_increment,
  `id_tk` int(3) NOT NULL default '0',
  `id_pds` int(3) NOT NULL default '0',
  PRIMARY KEY  (`id_tk_disney_items`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Ticket Disney items' AUTO_INCREMENT=30 ;

--
-- Volcar la base de datos para la tabla `tk_disney_items`
--

INSERT INTO `tk_disney_items` VALUES(1, 46, 27);
INSERT INTO `tk_disney_items` VALUES(2, 46, 30);
INSERT INTO `tk_disney_items` VALUES(3, 46, 32);
INSERT INTO `tk_disney_items` VALUES(4, 46, 33);
INSERT INTO `tk_disney_items` VALUES(5, 46, 34);
INSERT INTO `tk_disney_items` VALUES(6, 46, 36);
INSERT INTO `tk_disney_items` VALUES(7, 46, 44);
INSERT INTO `tk_disney_items` VALUES(8, 47, 44);
INSERT INTO `tk_disney_items` VALUES(9, 47, 36);
INSERT INTO `tk_disney_items` VALUES(10, 47, 34);
INSERT INTO `tk_disney_items` VALUES(11, 47, 33);
INSERT INTO `tk_disney_items` VALUES(12, 47, 32);
INSERT INTO `tk_disney_items` VALUES(13, 47, 30);
INSERT INTO `tk_disney_items` VALUES(14, 47, 27);
INSERT INTO `tk_disney_items` VALUES(15, 48, 44);
INSERT INTO `tk_disney_items` VALUES(16, 48, 36);
INSERT INTO `tk_disney_items` VALUES(17, 48, 33);
INSERT INTO `tk_disney_items` VALUES(18, 48, 34);
INSERT INTO `tk_disney_items` VALUES(19, 48, 32);
INSERT INTO `tk_disney_items` VALUES(20, 48, 30);
INSERT INTO `tk_disney_items` VALUES(21, 48, 27);
INSERT INTO `tk_disney_items` VALUES(22, 35, 38);
INSERT INTO `tk_disney_items` VALUES(23, 35, 40);
INSERT INTO `tk_disney_items` VALUES(24, 36, 38);
INSERT INTO `tk_disney_items` VALUES(25, 36, 40);
INSERT INTO `tk_disney_items` VALUES(26, 73, 32);
INSERT INTO `tk_disney_items` VALUES(27, 73, 27);
INSERT INTO `tk_disney_items` VALUES(28, 73, 30);
INSERT INTO `tk_disney_items` VALUES(29, 73, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tk_universal_items`
--

CREATE TABLE `tk_universal_items` (
  `id_tk_universal_items` int(3) NOT NULL auto_increment,
  `id_tk` int(3) NOT NULL default '0',
  `id_pds` int(3) NOT NULL default '0',
  PRIMARY KEY  (`id_tk_universal_items`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Ticket combo items' AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `tk_universal_items`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `nombre` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `clave` varchar(255) default NULL,
  `id_tipo_usuario` int(2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` VALUES(1, 'admin', 'usr@usr.com', '123456', 1);
INSERT INTO `usuario` VALUES(2, 'Manuel', 'manuel@orlandocheaptickets.com', '6543219', 1);
INSERT INTO `usuario` VALUES(3, 'Cesar', 'cesar@orlandocheaptickets.com', '6543219', 1);
INSERT INTO `usuario` VALUES(4, 'Cheryl', 'cheryl@orlandocheaptickets.com', '6543219', 1);

SET FOREIGN_KEY_CHECKS=1;
