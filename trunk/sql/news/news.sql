-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2009 at 09:01 AM
-- Server version: 5.1.32
-- PHP Version: 5.2.9-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `subhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `heading` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `summery` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `breking_news` int(1) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `type`, `heading`, `summery`, `description`, `insert_date`, `breking_news`, `active`) VALUES
(32, '2', '''ఈల'' వేసిన లోక్ సత్తా', '<font class="UnicodeContent">హైదరాబాద్ : ఈల గుర్తును లోక్ సత్తా\nపార్టీకి కేటాయిస్తున్నట్లు రాష్ట్ర ఎన్నికల సంఘం ఆ పార్టీకి\nలిఖితపూర్వకంగా సమాచారం అందించింది. ఈల గుర్తుని ఫ్రీ సింబల్స్ జాబితాలో\nచేర్చాలని, తమ పార్టీకి దాన్ని కేటాయించాలంటూ లోక్ సత్తా పార్టీ చేసిన\nవిజ్ఞప్తి పట్ల ఈసీ సానుకూలంగా స్పందించినట్లైంది. </font>', '<font class="UnicodeContent">అయితే, ఈల గుర్తు కేటాయింపు తాత్కాలికమేనని,\nత్వరలో జరగనున్న గ్రేటర్ హైదరాబాద్ ఎన్నికల్లో ఈల గుర్తు మీది లోక్ సత్తా\nపోటీ చేయవచ్చని ఈసీ స్పష్టం చేసింది. లోక్ సత్తా పార్టీ ప్రధాన కార్యదర్శి\nవి. లక్ష్మణ్ బాలాజీకి రాష్ట్ర ఎన్నికల సంఘం కార్యదర్శి జి.ఎం. రమేష్\nకుమార్ రాసిన లేఖలో ఈ విషయం స్పష్టం చేశారు. ఈ విషయాన్ని లోక్ సత్తా\nఅధికార ప్రతినిధులు వి.లక్ష్మణ్ బాలాజీ, మహ్మద్ ఇషాక్ ఖాన్ గురువారం\nమధ్యాహ్నం పార్టీ కేంద్ర కార్యాలయంలో నిర్వహించిన మీడియా సమావేశంలో\nవివరించారు</font>', '2009-06-26 10:19:17', 0, 1),
(31, '1', 'మైకేల్ జాక్సన్ మృతి', '<font class="UnicodeContent">లాస్ ఏంజెలెస్ : ప్రపంచ సంగీత చక్రవర్తి,\nఆధునిక స్వర విన్యాస మూర్తి పాప్ స్టార్ మైకేల్ జాక్సన్ ఇక లేరు. విశ్వ\nసంగీత ప్రియులను రసధునిలో ఓలలాడించిన ఆ అద్భుత సంగీత స్రష్ట తనువు\nచాలించారు. నలభై వసంతాల పాటు కోట్లాది మంది</font>', '<font class="UnicodeContent">అభిమానులను తన స్వరంతో, బ్రేక్ డాన్స్ లతో\nమంత్ర ముగ్ధులను చేసిన మైకేల్ జోసఫ్ జాన్సన్ హృద్రోగంతో కన్నుమూశారు. తన\nనివాస గృహంలోనే గుండె పోటు రావడంతో అపస్మారక స్థితి(కోమా)లోకి వెళ్ళిపోయిన\nజాక్సన్ ఇక్కడి యుసిఎల్ ఏ మెడికల్ సెంటర్లో చికిత్స పొందుతూ శుక్రవారం\nతెల్లవారజూమున సుమారు రెండున్నర ప్రాంతంలో తుదిశ్వాస విడిచారు. జాక్సన్\nమృతి వార్త సంగీత ప్రపంచాన్ని విషాదంలో ముంచేసింది. జాక్సన్ మొదట లిజా\nమేరీ ప్రెస్లేను వివాహం చేసుకున్నారు. కానీ 1996లో విడాకులు తీసుకున్నారు.\nవీరికి ఒక సంతానం. ఆ తరువాత డెబ్బీ రోవ్ ను వివాహం చేసుకుని ఇద్దరు\nపిల్లలు కలిగిన తర్వాత విడిపోయారు. జాక్సన్ తన పిల్లలు మైకేల్ జోసఫ్\nజాక్సన్ జూనియర్, పారీస్ మైకేల్ కేథరైన్ జాక్సన్, ప్రిన్స్ బ్లాంకెట్\nమైకేల్ జాక్సన్ 1తో కలిసి ఉంటున్నారు. కాగా ఇటీవలే ఆయన మతం\nమార్చుకున్నారు. ఇస్లాం మతాన్ని స్వీకరించారు. <br>\n<br>\nఅయితే వివాదాలమయమైన ఆయన వ్యక్తిగత జీవితంలో చివరకు మరణం కూడా వివాదంగానే\nమిగిలింది. బుధవారం నుంచే జాక్సన్ అస్వస్థులుగా ఉన్నారని అతని సోదరుడు\nజర్మైన్ జాక్సన్ వివరించారు. అప్పుడే కుటుంబ వైద్యులను పిలిపించారు.\nతీవ్రమైన గుండెపోటుతో మైకేల్ జాక్సన్ కోమాలోకి వెళ్ళేసమయంలో వైద్యులు\nఅందుబాటులోనే ఉన్నారు. వెంటనే యూసీఎల్ ఏ మెడికిల్ సెంటర్ కు తరలించి\nవైద్యుల బృందం జాక్సన్ బతికించడానికి తీవ్ర ప్రయత్నాలు చేసినా ఫలితం\nదక్కలేదు. కోమాలోకి వెళ్ళే సరికే నాడి పడిపోయిందని వైద్యులు చెబుతున్నారు.\nకాగా చాలా కాలంగా వివిద రుగ్మతలతో బాధపడుతున్న జాక్సన్ కు వైద్యులు మందులు\nఇచ్చారని, వాటిని నియమం, పరిమితి లేకుండా వాడడం వల్లనే జాక్సన్ కు\nగుండెపోటు వచ్చి ఉంటుందని జాక్సన్ కుటుంబ అటార్నీ బ్రియాన్ ఆక్సమెన్\nచెబుతున్నారు. లాస్ ఏంజెలెస్ పోలీసులు జాక్సన్ మృతిపై దర్యాప్తును\nప్రారంభించారు. జాక్సన్ మృతిలో ఎలాంటి నేరపూరితమైన పరిణామాలూ\nచోటుచేసుకున్నట్టు ఆధారాలు లేకపోయినా పోలీసులు జాక్సన్ బంధువులను,\nస్నేహితులను, వైద్యులను ప్రశ్నిస్తున్నారు. అలానే జాక్సన్ పార్ధీవకాయనికి\nవైద్యపరమైన అటాప్సీ పరీక్షలు నిర్వహించనున్నారు. </font><br>', '2009-06-26 10:17:49', 0, 1),
(30, '3', 'వై. ఎస్. వ్యూహాన్ని తిప్పి కొట్టి', '<span><span><p align="justify">జిల్లా నియోజక వర్గ స్థాయి&nbsp;&nbsp; ఇతర పార్టీల&nbsp;\nముఖ్యనేతలను&nbsp; కాంగ్రెస్ లోకి చేర్చుకోవాలని&nbsp; మంత్రులకు సి. ఎం.&nbsp;&nbsp;\nస్పష్టమైన ఆదేశాలు ఇవ్వడం తో విపక్షాలు ముఖ్యంగా టి. డి.&nbsp; పి. లో గుబులు\nమొదలైంది.&nbsp; విభజించి పాలించడం లో వై.ఎస్. చాలా నిష్ణాతులు.&nbsp; వై. ఎస్.\nవ్యూహానికి ఇప్పుడే అడ్డుకట్ట వేయకపోతే రానున్న ఐదేళ్ల కాలంలో జిల్లాల్లో\nఉనికి లేకుండా పోతుందన్న ఆందోళన విపక్ష పార్టీలో మొదలైంది. </p>\n</span></span>', '<span><span><p align="justify">జిల్లా నియోజక వర్గ స్థాయి&nbsp;&nbsp; ఇతర పార్టీల&nbsp;\nముఖ్యనేతలను&nbsp; కాంగ్రెస్ లోకి చేర్చుకోవాలని&nbsp; మంత్రులకు సి. ఎం.&nbsp;&nbsp;\nస్పష్టమైన ఆదేశాలు ఇవ్వడం తో విపక్షాలు ముఖ్యంగా టి. డి.&nbsp; పి. లో గుబులు\nమొదలైంది.&nbsp; విభజించి పాలించడం లో వై.ఎస్. చాలా నిష్ణాతులు.&nbsp; వై. ఎస్.\nవ్యూహానికి ఇప్పుడే అడ్డుకట్ట వేయకపోతే రానున్న ఐదేళ్ల కాలంలో జిల్లాల్లో\nఉనికి లేకుండా పోతుందన్న ఆందోళన విపక్ష పార్టీలో మొదలైంది. </p>\n<p align="justify">వై. ఎస్. వ్యూహాన్ని తిప్పి కొట్టి&nbsp; పార్టీ క్యా\nడర్‌ను కాపాడుకునే పనిలో విపక్ష పార్టీలు&nbsp; తల మునకలు అవుతున్నాయి. మిగిలిన\nపార్టీలెమో కానీ తెలుగుదేశం పార్టీ కి&nbsp; మాత్రం ఈ సారి గట్టి దెబ్బ తగలడం\nఖాయం అని తెలిసింది.</p></span></span>', '2009-06-25 13:22:22', 0, 1),
(33, '3', 'గుజరాత్ అల్లర్ల కేసుపై స్టే తొలగించిన సుప్రీం కోర్టు ', '<font class="UnicodeContent">న్యూఢిల్లీ; హైదరాబాదీ బాడ్మింటన్‌ స్టార్‌\nసైనా నెహ్వాల్‌ సంచలనం సృష్టించింది. జకార్తాలో జరుగుతున్న ఇండోనేషియన్‌\nఓపెన్‌ సూపర్‌ సిరీస్‌ గెలిచిన తొలి భారత క్రీడాకారిణిగా రికార్డు\nనెలకొల్పింది. ఆదివారం ఉదయం జరిగిన ఫైనల్లో ఆరోసీడ్‌ సైనా 12-21, 21-18,\n21-9 తేడాతో మూడో సీడ్‌ చైనాకు చెందిన లిన్‌ వాంగ్‌పై గెలిచి టైటిల్‌\nసాధించింది. ప్రతి టోర్నీలో క్వార్టర్స్‌, సెమీస్‌ కు వరకు వెళ్లి ఆ\nతర్వాత చైనా </font>', '<font class="UnicodeContent">క్రీడాకారిణిల చేతిలో పరాజయం చవిచూసే సైనా ఈ\nసారి దాన్ని అధిగమించి సెమీస్‌, ఫైనల్లో చైనా ప్లేయర్స్‌పైనే విజయం\nసాధించింది. గత వారం సింగపూర్‌ సూపర్‌సిరీస్‌లో వాంగ్‌ చేతిలో ఓడిన సైనా\nఇప్పుడు 48 నిమిషాల పాటు పోరాడి విజయంతో ప్రతీకారం తీర్చుకుంది. <br>\n<br>\nసూపర్‌ సిరీస్‌ చరిత్రలో ఇప్పటి వరకు పుల్లెల గోపీచంద్‌,\nప్రకాశ్‌పదుకొనేలు మాత్రమే ఆల్‌ ఇంగ్లాండ్‌ బ్యాడ్మింటన్‌ టైటిల్స్‌\nసాధించారు. ఆట ప్రారంభం నుంచే సైనాపై వాంగ్‌ ఆధిక్యం ప్రదర్శించింది. ఏడు\nస్మాష్‌ పాయింట్లతో 3-9కు వాంగ్‌ దూసుకుపోయింది. దీంతో సైనా వెనుకంజ\nవేయడంతో 12-21తో వాంగ్‌ తొలిగేమ్‌ను సొంతం చేసుకుంది. అయితే రెండోగేమ్‌\nహోరాహోరిగా సాగింది. 5-5, 12-12, 16-16 ఇలా స్కోరు సమంగా సాగాయి. అయితే\nవరుసగా సైనా నాలుగు పాయింట్లు సాధించి 21-18తో గేమ్‌ను గెలిచింది. ఇక\nకీలకమైన మూడోగేమ్‌లో ఆరంభంలో 7-7తో ఇరువురు సమవుజ్జీలుగా ఉన్నారు. సైనా\nవరుసగా ఏడు పాయింట్లతో 15-9 ఆధిక్యానికి దూసుకుపోయింది. <br>\n<br>\nఆ తర్వాత వరుసగా ఆరు పాయింట్లు గెలవడంతో గేమ్‌ను మ్యాచ్‌తో పాటు తొలి\nసూపర్‌సిరీస్‌ను సొంతం చేసుకుంది. మొత్తం మ్యాచ్‌లో సైనా స్మాస్‌ల ద్వారా\n7, నెట్‌వద్ద 29 పాయింట్లు గెల్చుకోవడంతో పాటు 102 ర్యాలీల్లో 54సార్లు\nపైచేయి సాధించింది. ఈ విజయంతో సైనాకు దాదాపు రూ.8.5 లక్షల ప్రైజ్‌మనీ\nదక్కింది. <br>\n<br>\nవరల్డ్‌ ఛాంపియన్‌షిప్‌కు లాభిస్తుంది: గోపీచంద్‌<br>\n<br>\nఈ విజయం సైనాకు వచ్చే ఆగష్టు హైదరాబాద్‌లో జరగనున్న ప్రపంచ బ్యాడ్మింటన్‌\nచాంపియన్‌షిప్‌కు ఎంతో ఉపయోగపడుతుందని జాతీయ కోచ్‌ పుల్లెల గోపీచంద్‌\nఅన్నారు.స్వదేశంలో జరగనున్న వరల్డ్‌ చాంపియన్‌షిప్‌కు పూర్తి\nఆత్మవిశ్వాసంతో బరిలోకి దిగుతుందని ఆయన చెప్పారు.<br>\n<br>\nగర్వపడుతున్నా: హర్విర్‌సింగ్‌<br>\n<br>\nతన కూతురి విజయాన్ని చూసి గర్వపడుతున్నానని సైనా తండ్రి హర్విర్‌సింగ్‌\nఅన్నారు. తానొక్కడినే కాకా దేశం మొత్తం సైనా గెలుపు గర్వకారణమని చెప్పారు.\nదేశంలో ఎంతో మంది యువక్రీడాకారులకు ఆదర్శం అవుతుందని ఆయన తెలిపారు. <br>\n<br>\nవైఎస్‌, బాబు అభినందనలు<br>\n<br>\nతొలి సారిగా సూపర్‌ సిరీస్‌ గెలుపొందినందుకు సైనానెహ్వాల్‌ ముఖ్యమంత్రి\nవైఎస్‌ రాజశేఖరరెడ్డి, ప్రతిపక్ష నాయకుడు టీడీపీ అధినేత చంద్రబాబు\nఅభినందించారు. సైనా విజయం దేశానికే గర్వకారణమని కొనియాడారు. మరోవైపు\nసైనాకు భారత బ్యాడ్మింటన్‌ సంఘం (బాయ్‌) అధ్యక్షుడు వీకే వర్మ రూ.రెండు\nలక్షల నగదును ప్రకటించారు.</font><br>', '2009-06-26 10:20:45', 0, 1),
(34, '4', 'ట్వంటీ చాంపియన్ పాక్', '<font class="UnicodeContent">లండన్‌: శిఖరానికి చివరి మెట్టు ఎక్కుతూ\nశ్రీలంక జారిపడిపోయింది. ఫలితంగా పాకిస్థాన్‌ ట్వంటీ-20 ప్రపంచకప్‌\nసాధించింది. క్రితం సారి భారత్‌ చేతిలో ఛాంపియన్‌షిప్‌ కోల్పోయిన\nపాకిస్థాన్‌... ఈ సారి ఆ తప్పు చేయలేదు. ముందు బౌలింగ్‌ లో... తర్వాత\nబ్యాటింగ్‌లో పూర్తిస్థాయి ఆధిపత్యాన్ని చాటింది. శ్రీలంకను 8 వికెట్ల\nతేడాతో ఓడించింది. సెమీస్‌లో పాక్‌ను గెలిపించిన అఫ్రిదియే, ఫైనల్లోనూ\nజట్టును</font>', '<font class="UnicodeContent">గెలిపించాడు. అజేయ మైన అర్ధసెంచరీ(54)తో\nజట్టును విజయం శిఖరానికి చేర్చాడు. ‘మ్యాన్‌ ఆఫ్‌ ది మ్యాచ్‌’\nఅందుకున్నాడు. పరుగుల స్టార్‌ దిల్షాన్‌కు మ్యాన్‌ అఫ్‌ ది సిరీస్‌\nలభించింది. తొలుత బ్యాటింగ్‌ చేసిన శ్రీలంక నిర్ణీత 20 ఓవర్లలో 6 వికెట్లు\nకోల్పో యి 138 పరుగులు చేయగా, దీన్ని పాకిస్థాన్‌ కేవలం 2 వికెట్లు\nకోల్పోయి 18.4 ఓవర్లలోనే అధిగమించింది. <br>\n<br>\nప్రపంచకప్‌ లక్ష్యానికి కమ్రన్‌ అక్మల్‌(37), హసన్‌(19)లు 48 పరుగులతో\nశుభారంభమిచ్చారు. వీరిద్దరి నిష్ర్కమణతో క్రీజ్‌లోకి వచ్చిన అఫ్రిది,\nషోయబ్‌ మాలిక్‌ జాగ్రత్తగా ఆడారు. అనవసర షాట్లకు తావివ్వకుండా అడపా దడపా\nమెరుపులతో లక్ష్యానికి ఒక్కో పరుగును జోడించారు. చివరి వరకూ అజేయంగా\nనిలిచారు. అఫ్రిది 54(2్ఠ2,2్ఠ6) ఫిఫ్టీ చేసుకోగా, షోయబ్‌ మాలి్‌ 24\nపరుగులు చేశాడు.<br>\n<br>\nఅంతకుముందు టాస్‌ నెగ్గిన శ్రీలంక కెప్టెన్‌ సంగక్కర తొలుత\nపరుగుపెట్టేందుకే మొగ్గుచూ పాడు. కానీ తానొకటి తలస్తే... దైవం మరోలా\nతలచిందన్నట్లు... లంక పరిస్థితి ఆదిలోనే అధో గతి పాలైంది. దిల్షాన్‌,\nవన్‌డౌన్‌ బ్యాట్స్‌మన్‌ ముబా రక్‌ డకౌట్లతో శ్రీలంక 2కే 2 వికెట్లను\nకోల్పోయింది. దిల్షాన్‌ ను అమిర్‌, ముబారక్‌ను రజాక్‌ ఔట్‌ చేశారు. దీనికి\nకాసేపటికే దూకుడుగా ఆడుతున్న జయసూర్య (17)ను రజాక్‌ బౌల్డ్‌ చేశాడు.\nమరికాసేపటికే జయవర్ధనె కూడా రజాక్‌ బౌలింగ్‌లోనే నిష్ర్కమించాడు. రజాక్‌\nదెబ్బకు లంక 32/4. తర్వా త సంగక్కర ఒంటరిపోరాటం చేశాడు. అజేయంగా నిలిచి 64\nపరుగులు చేశాడు. 139 పరుగుల పోరాడే లక్ష్యాన్ని ప్రత్యర్థి ముందుంచాడు.<br>\n<br>\nస్కోరుబోర్డు: <br>\n<br>\nశ్రీలంక: దిల్షాన్‌ (సి)హసన్‌ (బి)అమిర్‌ 0, జయసూర్య (బి)రజాక్‌ 17,\nముబారక్‌ (సి)హసన్‌ (బి)రజాక్‌ 0, సంగక్కర నాటౌట్‌ 64, జయవర్ధనె\n(సి)మిస్బా (బి)రజాక్‌ 1, చమరసిల్వ(సి)అజ్మల్‌ (బి)గుల్‌ 14, ఉదన\n(బి)అఫ్రిది 1, మ్యాథ్యూస్‌ నాటౌట్‌ 35, ఎక్స్‌ట్రాలు 6, మొత్తం (20\nఓవర్లలో) 138/6<br>\n<br>\nవికెట్ల పతనం: 1-0, 2-2, 3-26, 4-32, 5-67, 6-70<br>\n<br>\nబౌలింగ్‌: అమిర్‌ 4-1-30-1, రజాక్‌ 3-0-20-3, అఫ్రిది 4-0-20-1, అజ్మల్‌ 4-0-28-0, షోయబ్‌ 1-0-8-1, ఉమర్‌గుల్‌ 4-0-29-1<br>\n<br>\nపాకిస్థాన్‌: అక్మల్‌ (స్టంప్డ్‌)సంగక్కర (బి)జయసూర్య , హసన్‌ (సి)జయసూర్య\n(బి)మురళీ 19, అఫ్రిది నాటౌట్‌ 54, మాలిక్‌ నాటౌట్‌ 24, ఎక్స్‌ట్రాలు 5,\nమొత్తం(18.4 ఓవర్లలో) 139/2<br>\n<br>\nవికెట్ల పతనం: 1-48, 2-63<br>\n<br>\nబౌలింగ్‌: మ్యాథ్యూస్‌ 2-0-17-0, ఉదన 4-0-44-0, మలింగ 3.4-0-14-0, మురళీధరన్‌ 3-0-20-1, మెండీస్‌ 4-0-34-0, జయసూర్య 2-0-8-1</font>', '2009-06-26 10:22:19', 0, 1);
