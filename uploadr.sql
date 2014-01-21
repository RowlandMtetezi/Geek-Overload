-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2014 at 12:44 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geekoverload`
--


-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b35efe23790a643770cca74c088ac638', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 1389786258, '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `owner`, `name`, `description`) VALUES
(7, 1, 'Z_Appendix_6_Electromagnetic Spectrum.pdf', ''),
(8, 1, 'Web-Materials _ Safa Kasap.pdf', ''),
(9, 1, 'Problem_Set_6.pdf', ''),
(10, 2, 'BJT-SmallSignalHF.pdf', ''),
(11, 2, 'Diffusion.pdf', ''),
(12, 2, 'IonicBonding2.pdf', ''),
(13, 2, 'IonicBonding1_2.pdf', ''),
(14, 4, 'activatables.js', ''),
(15, 4, 'recover_form_bg.jpg', ''),
(17, 6, 'SteamTable.pdf', 'Awesome steam tables here, not for sale'),
(18, 7, 'Simple Harmonic Motion (SHM).htm', '            Simple HM'),
(19, 2, 'Quantum mechanics postulates.pdf', '            jknjk');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `author`, `title`, `slug`, `text`) VALUES
(1, 0, 'Copy of Net Guard to the Guard of Timboroa', 'copy-of-net-guard-to-the-guard-of-timboroa', '     One  morning,  as  Gregor  Samsa  was  waking  up  from\r\nanxious dreams, he discovered that in bed he had been changed into a monstrous verminous bug. He \r\nlay on his armour-hard back and saw, as he lifted his head up a little, his brown, arched abdomen \r\ndivided up into rigid bow- like sections. From this height the blanket, just  about ready to slide \r\noff completely, could hardly stay in place. His numerous legs, pitifully thin in comparison to the \r\nrest of his circumference, flickered helplessly before his eyes.\r\n‘What’s happened to me,’ he thought. It was no dream. His room, a proper room for a  human  being,  \r\nonly somewhat too small, lay quietly between the four well- known walls. Above the table, on which \r\nan unpacked collection of sample cloth goods was  spread  out  (Samsa was a traveling salesman) \r\nhung the picture which he had cut out of an illustrated magazine a little while ago and set in a \r\npretty gilt frame. It was a picture of a woman with a fur hat and a fur boa. She sat erect there, \r\nlifting up in the direction of the viewer a solid fur muff  into  which  her entire forearm \r\ndisappeared.\r\nGregor’s glance then turned to the window. The dreary weather (the rain drops were falling audibly \r\ndown on the\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nmetal window ledge) made him quite melancholy. ‘Why don’t I keep sleeping for a little while longer \r\nand forget all this foolishness,’ he thought. But this was entirely impractical, for he was used to \r\nsleeping on his right side, and in his present state he couldn’t get himself into this position. No \r\nmatter how hard he threw himself onto his right side, he always rolled again onto his back. He must \r\nhave tried it a hundred times, closing his eyes, so that he would not have to see the wriggling \r\nlegs, and gave up only when he began to feel a light, dull pain in his side which he had never felt \r\nbefore.\r\n‘O God,’ he thought, ‘what a demanding job I’ve chosen! Day in, day out on the road. The stresses \r\nof trade are much greater than the work going on at head office, and, in addition to that, I have \r\nto deal with the problems of traveling, the worries about train connections, irregular bad food, \r\ntemporary and constantly changing human relationships which never come from the heart. To hell with \r\nit all!’ He felt a slight itching on the top of his abdomen. He slowly pushed himself on his back \r\ncloser to the bed post so that he could lift his head more easily, found the itchy part, which was \r\nentirely covered with small white spots (he did not know what to make  of them), and wanted to feel \r\nthe place with a leg. But he\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nretracted  it  immediately,  for  the  contact  felt  like  a  cold\r\nshower all over him.\r\nHe slid back again into his earlier position. ‘This getting up early,’ he thought, ‘makes a man \r\nquite idiotic. A man must have his sleep. Other traveling salesmen live like harem women. For \r\ninstance, when I come back to the inn during the course of the morning to write up the necessary \r\norders, these gentlemen are just sitting down to breakfast. If I were to try that with my boss, I’d \r\nbe thrown out on the spot. Still, who knows whether that mightn’t be really good for me. If I \r\ndidn’t hold back for my parents’ sake, I would’ve quit ages ago. I would’ve gone to the boss and \r\ntold him just what I think from the bottom of my heart. He would’ve fallen right off his desk! How \r\nweird it is to sit up at the desk and talk down to the employee from way up there. The boss has \r\ntrouble hearing, so the employee has to step up quite close to him. Anyway, I haven’t completely \r\ngiven up that hope yet. Once I’ve got together the money to pay off the parents’ debt to him— that \r\nshould take another five or six years—I’ll do it for sure. Then I’ll make the big break. In any \r\ncase, right now I have to get up. My train leaves at five o’clock.’\r\nAnd he looked over at the alarm clock ticking away by the chest of drawers. ‘Good God,’ he thought. \r\n\r\n'),
(2, 0, 'Abracadabra is Back , Yes it is Back', 'abracadabra-is-back-yes-it-is-back', '\r\nTHE INNER WORKINGS OF THE NATIONAL SECURITY COUNCIL AND THE CIA''S COVERT ACTIONS IN ANGOLA, CENTRAL \r\nAMERICA AND VIETNAM\r\n\r\n"I did 13 years in the CIA altogether. I sat on a subcommittee of the NSC, so I was like a chief of \r\nstaff, with the GS-18s (like 3-star generals) Henry Kissinger, Bill Colby (the CIA director), the \r\nGS-18s and the CIA, making the important decisions and my job was to put it all together and make \r\nit happen and run it, an interesting place from which to watch a covert action being done....\r\n\r\nI testified for days before the Congress, giving them chapter and verse, date and detail, proving \r\nspecific lies. They were asking if we had to do with S. Africa, that was fighting in the country. \r\nIn fact we were coordinating this operation so closely that our airplanes, full of arms from the \r\nstates, would meet their airplanes in Kinshasa and they would take our arms into Angola to \r\ndistribute to our forces for us....\r\n\r\nWhat I found with all of this study is that the subject, the problem, if you will, for the world, \r\nfor the U.S. is much, much, much graver, astronomically graver, than just Angola and Vietnam. I \r\nfound that the Senate Church committee has reported, in their study of covert actions, that the CIA \r\nran several thousand covert actions since 1961, and that the heyday of covert action was before \r\n1961; that we have run several hundred covert actions a year, and the CIA has been in business for \r\na total of 37 years.\r\n\r\nWhat we''re going to talk about tonight is the United States national security syndrome. We''re going \r\nto talk about how and why the U.S. manipulates the press. We''re going to talk about how and why the \r\nU.S. is pouring money into El Salvador, and preparing to invade Nicaragua; how all of this concerns \r\nus so directly. I''m going to try to explain to you the other side of terrorism; that is, the other \r\nside of what Secretary of State Shultz talks about. In doing this, we''ll talk about the Korean war, \r\nthe Vietnam war, and the Central American war.\r\n\r\nEverything I''m going to talk to you about is represented, one way or another, already in the public \r\nrecords. You can dig it all out for yourselves, without coming to hear me if you so chose. Books, \r\nbased on information gotten out of the CIA under the freedom of information act, testimony before \r\nthe Congress, hearings before the Senate Church committee, research by scholars, witness of people \r\nthroughout the world who have been to these target areas that we''ll be talking about. I want to \r\nemphasize that my own background is profoundly conservative. We come from South Texas, East \r\nTexas....\r\n\r\nI was conditioned by my training, my marine corps training, and my background, to believe in \r\neverything they were saying about the cold war, and I took the job with great enthusiasm (in the \r\nCIA) to join the\r\nwar, and I took the job with great enthusiasm (in the CIA) to join the\r\n\r\n\r\nbest and the brightest of the CIA, of our foreign service, to go out into the world, to join the \r\nstruggle, to project American values and save the world for our brand of democracy. And I believed \r\nthis. I went out and worked hard....\r\n\r\nWhat I really got out of these 6 years in Africa was a sense ... that nothing we were doing in fact \r\ndefended U.S. national security interests very much. We didn''t have many national security \r\ninterests in Bujumbura, Burundi, in the heart of Africa. I concluded that I just couldn''t see the \r\npoint.\r\n\r\nWe were doing things it seemed because we were there, because it was our function, we were bribing \r\npeople, corrupting people, and not protecting the U.S. in any visible way. I had a chance to go \r\ndrinking with this Larry Devlin, a famous CIA case officer who had overthrown Patrice Lumumba, and \r\nhad him killed in 1960, back in the Congo. He was moving into the Africa division Chief. I talked \r\nto him in Addis Ababa at length one night, and he was giving me an explanation - I was telling him \r\nfrankly, ''sir, you know, this stuff doesn''t make any sense, we''re not saving anybody from anything, \r\nand we are corrupting people, and everybody knows we''re doing it, and that makes the U.S. look \r\nbad''.\r\n\r\nAnd he said I was getting too big for my britches. He said, `you''re trying to think like the people \r\nin the NSC back in Washington who have the big picture, who know what''s going on in the world, who \r\nhave all the secret information, and the experience to digest it. If they decide we should have \r\nsomeone in Bujumbura, Burundi, and that person should be you, then you should do your job, and wait \r\nuntil you have more experience, and you work your way up to that point, then you will understand \r\nnational security, and you can make the big decisions. Now, get to work, and stop, you know, this \r\nphilosophizing.''\r\n\r\nAnd I said, `Aye-aye sir, sorry sir, a bit out of line sir''. It''s a very powerful argument, our \r\npresidents use it on us. President Reagan has used it on the American people, saying, `if you knew \r\nwhat I know about the situation in Central America, you would understand why it''s necessary for us \r\nto intervene.''\r\n\r\nI went back to Washington, however, and I found that others shared my concern. A formal study was \r\ndone in the State Department and published internally, highly classified, called the Macomber [sp?] \r\nreport, concluding that the CIA had no business being in Africa for anything it was known to be \r\ndoing, that our presence there was not justified, there were no national security interests that \r\nthe CIA could address any better than the ambassador himself. We didn''t need to have bribery and \r\ncorruption as a tool for doing business in Africa at that time.\r\n\r\nI went from ... a tour in Washington to Vietnam. And there, my career, and my life, began to get a \r\nlittle bit more serious. They assigned me a country. It was during the cease-fire, ''73 to ''75. \r\nThere was no cease-fire. Young men were being slaughtered. I saw a slaughter. 300 young men that \r\nthe South Vietnamese army ambushed. Their bodies brought in and laid out in a lot next to my \r\ncompound. I was up-country in Tayninh. They were laid out next door, until the families could come \r\nand claim them and take them away for burial.\r\n\r\nI thought about this. I had to work with the sadistic police chief. When I reported that he liked \r\nto carve people with knives in the CIA safe-house - when I reported this to my bosses, they said, \r\n`(1). The post was too important to close down. (2). They weren''t going to get the man transferred \r\nor fired because that would make problems,\r\n'),
(9, 6, 'Iam the controller of this place \r\n                ', 'iam-the-controller-of-this-place', 'LANs are networks usually confined to a geographic area, such as a single building or a&lt;br /&gt;college campus. LANs can be small, linking as few as three computers, but often link&lt;br /&gt;hundreds of computers used by thousands of people. The development of standard&lt;br /&gt;networking protocols and media has resulted in worldwide proliferation of LANs&lt;br /&gt;throughout business and educational organizations.&lt;br /&gt;WANs (Wide Area Networks)&lt;br /&gt;Wide area networking combines multiple LANs that are geographically separate. This is&lt;br /&gt;accomplished by connecting the different LANs using services such as dedicated leased&lt;br /&gt;phone lines, dial-up phone lines (both synchronous and asynchronous), satellite links, and&lt;br /&gt;data packet carrier services. Wide area networking can be as simple as a modem and&lt;br /&gt;remote access server for employees to dial into, or it can be as complex as hundreds of&lt;br /&gt;branch offices globally linked using special routing protocols and filters to minimize the&lt;br /&gt;expense of sending data sent over vast distances.&lt;br /&gt;&amp;lsquo;OR&amp;rsquo;&lt;br /&gt;A wide area network (WAN) is a computer network that covers a large geographic area&lt;br /&gt;such as a city, country, or spans even intercontinental distances, using a communications&lt;br /&gt;channel that combines many types of media such as telephone lines, cables, and air&lt;br /&gt;waves. A WAN often uses transmission facilities provided by common carriers, such as&lt;br /&gt;telephone companies. WAN technologies generally function at the lower three layers of&lt;br /&gt;the OSI reference model: the physical layer, the data link layer, and the network layer.&lt;br /&gt;Internet&lt;br /&gt;The Internet is a system of linked networks that are worldwide in scope and facilitate data&lt;br /&gt;communication services such as remote login, file transfer, electronic mail, the World&lt;br /&gt;Wide Web and newsgroups. With the meteoric rise in demand for connectivity, the&lt;br /&gt;Internet has become a communications highway for millions of users. The Internet was&lt;br /&gt;initially restricted to military and academic institutions, but now it is a full-fledged&lt;br /&gt;conduit for any and all forms of information and commerce. Internet websites now&lt;br /&gt;provide personal, educational, political and economic resources to every corner of the&lt;br /&gt;planet.&lt;br /&gt;Intranet&lt;br /&gt;With the advancements made in browser-based software for the Internet, many private&lt;br /&gt;organizations are implementing intranets. An intranet is a private network utilizing&lt;br /&gt;Internet-type tools, but available only within that organization. For large organizations,&lt;br /&gt;an intranet provides an easy access mode to corporate information for employees.&lt;br /&gt;MANs (Metropolitan area Networks)&lt;br /&gt;A Metropolitan area network (MAN) is a large computer network that usually spans a&lt;br /&gt;city or a large campus.&lt;br /&gt;VPN (Virtual Private Network)&lt;br /&gt;VPN uses a technique known as tunneling to transfer data securely on the Internet to a&lt;br /&gt;remote access server on your workplace network. Using a VPN helps you save money by&lt;br /&gt;using the public Internet instead of making long&amp;ndash;distance phone calls to connect securely&lt;br /&gt;with your private network. There are two ways to create a VPN connection, by dialing an&lt;br /&gt;Internet service provider (ISP), or connecting directly to Internet.&lt;br /&gt;Categories of Network:&lt;br /&gt;Network can be divided in to two main categories:&lt;br /&gt;&amp;middot; Peer-to-peer.&lt;br /&gt;&amp;middot; Server &amp;ndash; based.&lt;br /&gt;Peer t&lt;strong&gt;o Peer&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;In peer-to-peer networking there are no dedicated servers or hierarchy among the&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;computers. All of the computers are equal and therefore known as peers. Normally each&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;computer serves as Client/Server and there is no one assigned to be an administrator&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;responsible for the entire network.&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Peer-to-peer networks are good choices for needs of small organizations where the users&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;are allocated in the same general area, security is not an issue and the organization and&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;the network will have limited growth within the foreseeable future.&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Server Based&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;The term Client/server refers to the concept of sharing the work involved in processing&lt;br /&gt;data between the client computer and the most powerful server computer.&lt;br /&gt;The client/server network is the most efficient way to provide:&lt;br /&gt;&amp;middot; Databases and management of applications such as Spreadsheets, Accounting,&lt;br /&gt;Communications and Document management.&lt;br /&gt;&amp;middot; Network management.&lt;br /&gt;&amp;middot; Centralized file storage.&lt;br /&gt;The client/server model is basically an implementation of distributed or cooperative&lt;br /&gt;processing. At the heart of the model is the concept of splitting application functions&lt;br /&gt;between a client and a server processor. The division of labor between the different&lt;br /&gt;&lt;/strong&gt;&lt;/strong&gt;&lt;/strong&gt;&lt;/strong&gt;&lt;/strong&gt;&lt;/strong&gt;&lt;/strong&gt;&lt;/strong&gt;&lt;/strong&gt;'),
(10, 6, 'How we edit posts here\r\n                ', 'how-we-edit-posts-here', '&lt;p&gt;&lt;img alt="Editor for ASP.NET MVC logo" src="http://www.kendoui.com/Image/kendo-logo.png" style="display:block;margin-left:auto;margin-right:auto;" /&gt;&lt;/p&gt;&lt;p&gt;Kendo UI Editor allows your users to edit HTML in a familiar, user-friendly way.&lt;br /&gt;In this version, the Editor provides the core HTML editing engine, which includes basic text formatting, hyperlinks, lists, and image handling. The widget &lt;strong&gt;outputs identical HTML&lt;/strong&gt; across all major browsers, follows accessibility standards and provides API for content manipulation. &lt;/p&gt;&lt;p&gt;Features include:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Text formatting &amp;amp; alignment&lt;/li&gt;&lt;li&gt;Bulleted and numbered lists&lt;/li&gt;&lt;li&gt;Hyperlink and image dialogs&lt;/li&gt;&lt;li&gt;Cross-browser support&lt;/li&gt;&lt;li&gt;Identical HTML output across browsers&lt;/li&gt;&lt;li&gt;Gracefully degrades to a &lt;code&gt;textarea&lt;/code&gt; when JavaScript is turned off&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Read &lt;a href="http://docs.kendoui.com"&gt;more details&lt;/a&gt; or send us your &lt;a href="http://www.kendoui.com/forums.aspx"&gt;feedback&lt;/a&gt;! &lt;/p&gt;'),
(11, 0, 'Network Infrastructure Top to Down Analysis\r\n  ', 'network-infrastructure-top-to-down-analysis', 'The objective of this and the following slides is to introduce the concept of\r\nlayers. Like any complex computer system, a network is made of components.\r\nThis decomposition is, to a large extent, stable: computer networking people\r\nhave agreed on a reasonable way to divide the set of functions into what is\r\ncalled “layers”.\r\nWe use the term layer because the decomposition always assumes that different\r\ncomponents can be ordered such that one component interfaces only with two\r\nadjacent components. We call “layers” the components.\r\nWe start with the simplest, and the oldest network example: it is a mainframe\r\nconnected to terminals. In this case, there are mainly two functions\r\n• physical layer: translates bits into electromagnetic waves;\r\n• data link layer: translates frames into bits.\r\nThese two functions are implemented on cables or on radi\r\n\r\n\r\nPhysical, data link and network layers are sufficient to build a packet\r\ntransport system between computers. However, this is not enough for the\r\nprogrammer.\r\nWhen you write a low-level program that uses the network (as we will do in\r\nthis lecture), you do not handle packets, but data. The primary goal of the\r\ntransport layer is to provide the programmer with an interface to the network.\r\nSecond, the transport layer uses the concept of port. A port is an address\r\nthat is used locally (on one machine) and identifies the source and the\r\ndestination of the packet inside one machine. We will come back to the concept\r\nof ports later in this chapter.\r\nThe transport layer exists in two varieties: unreliable and reliable. The\r\nunreliable variety simply sends packets, and does not attempt to guarantee any\r\ndelivery. The reliable variety, in contrast, makes sure that data does reach\r\nthe destination, even if some packets may be lost from time to\r\n\r\nA protocol is the formal definition of external behaviour for communicating\r\nentities. It defines:\r\n- format of PDUs\r\n- rules of operation (PDU sent, data delivered, abort)\r\nExamples of protocols are:\r\nTCP\r\nUDP\r\nIP\r\nEthernet\r\nProtocols are connection oriented or connectionless. A connection exists if\r\nthe communication requires some synchronization of all involved parties before\r\ncommunication can take place. The telephone system is connection oriented:\r\nbefore A can send some information to B, A has to call B (or vice versa) and\r\nsay “hello”. The postal (mail) system is connectionless. If A wants to send\r\nsome information to B, A can write a letter and mail it, even if B is not\r\nready to read it.'),
(12, 0, 'Network Infrastructure Top to Down Analysis\r\n  ', 'network-infrastructure-top-to-down-analysis', 'The objective of this and the following slides is to introduce the concept of\r\nlayers. Like any complex computer system, a network is made of components.\r\nThis decomposition is, to a large extent, stable: computer networking people\r\nhave agreed on a reasonable way to divide the set of functions into what is\r\ncalled “layers”.\r\nWe use the term layer because the decomposition always assumes that different\r\ncomponents can be ordered such that one component interfaces only with two\r\nadjacent components. We call “layers” the components.\r\nWe start with the simplest, and the oldest network example: it is a mainframe\r\nconnected to terminals. In this case, there are mainly two functions\r\n• physical layer: translates bits into electromagnetic waves;\r\n• data link layer: translates frames into bits.\r\nThese two functions are implemented on cables or on radi\r\n\r\n\r\nPhysical, data link and network layers are sufficient to build a packet\r\ntransport system between computers. However, this is not enough for the\r\nprogrammer.\r\nWhen you write a low-level program that uses the network (as we will do in\r\nthis lecture), you do not handle packets, but data. The primary goal of the\r\ntransport layer is to provide the programmer with an interface to the network.\r\nSecond, the transport layer uses the concept of port. A port is an address\r\nthat is used locally (on one machine) and identifies the source and the\r\ndestination of the packet inside one machine. We will come back to the concept\r\nof ports later in this chapter.\r\nThe transport layer exists in two varieties: unreliable and reliable. The\r\nunreliable variety simply sends packets, and does not attempt to guarantee any\r\ndelivery. The reliable variety, in contrast, makes sure that data does reach\r\nthe destination, even if some packets may be lost from time to\r\n\r\nA protocol is the formal definition of external behaviour for communicating\r\nentities. It defines:\r\n- format of PDUs\r\n- rules of operation (PDU sent, data delivered, abort)\r\nExamples of protocols are:\r\nTCP\r\nUDP\r\nIP\r\nEthernet\r\nProtocols are connection oriented or connectionless. A connection exists if\r\nthe communication requires some synchronization of all involved parties before\r\ncommunication can take place. The telephone system is connection oriented:\r\nbefore A can send some information to B, A has to call B (or vice versa) and\r\nsay “hello”. The postal (mail) system is connectionless. If A wants to send\r\nsome information to B, A can write a letter and mail it, even if B is not\r\nready to read it.');

-- --------------------------------------------------------

--
-- Table structure for table `search_terms`
--

CREATE TABLE IF NOT EXISTS `search_terms` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `term` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `search_terms`
--

INSERT INTO `search_terms` (`id`, `term`) VALUES
(1, 'kot'),
(2, 'kenya');

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE IF NOT EXISTS `tweets` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tweet_id` text NOT NULL,
  `user_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`) VALUES
(1, 'tom', '', '', 'kxd'),
(2, 'peter', '', '', 'dba'),
(3, 'philip', '', '', '182april'),
(4, 'ragen', '', '', 'ragen'),
(6, 'RowlandMtetezi', 'rowlandotienoo@gmail.com', '', 'Stycie1'),
(7, 'Nobert', 'nobertangana@gmail.vom', '', 'kxd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
