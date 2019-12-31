<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20191231130758 extends AbstractMigration
{
    /**
     * @inheritDoc
     */
    public function getDescription() : string
    {
        return 'Initial data';
    }

    /**
     * @inheritDoc
     */
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('03f83f0d-9ec6-476f-a376-53af399155a2', 'AFETR', 'Air Force Eastern Test Range, Florida, USA') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('c27e7300-666b-48ba-843e-15886cade419', 'AFWTR', 'Air Force Western Test Range, California, USA') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('fa0271dc-bcc1-4497-bd0d-1ebc541aa009', 'CAS', 'Canaries Airspace') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('e5f740bd-e848-46f3-9268-0e02d1e104ef', 'DLS', 'Dombarovskiy Launch Site, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('062470df-59c8-4fb1-b7d2-36cd7995ccb7', 'ERAS', 'Eastern Range Airspace') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('dfa402bd-c18b-4108-b62a-99365b2f3ddb', 'FRGUI', 'Europe''s Spaceport, Kourou, French Guiana') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('5afa5cca-5e73-40c8-8fa6-5b045f88d624', 'HGSTR', 'Hammaguira Space Track Range, Algeria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('111016e9-bebb-472c-8276-6feac12be1e2', 'JSC', 'Jiuquan Space Center, PRC') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('ef76f5b3-fce7-46f8-84ad-544af44850af', 'KODAK', 'Kodiak Launch Complex, Alaska, USA') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('9a5d493a-18a8-4e63-acff-0fc610bea18e', 'KSCUT', 'Uchinoura Space Center (Fomerly Kagoshima Space Center—University of Tokyo, Japan)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('1889c8e0-3c2b-453f-a276-e50c7f365db2', 'KWAJ', 'US Army Kwajalein Atoll (USAKA)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('6d67f5f5-10b5-4651-87c4-3af840362c44', 'KYMSC', 'Kapustin Yar Missile and Space Complex, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('6e1ed088-0977-4216-a166-6fd6656e0c4c', 'NSC', 'Naro Space Complex, Republic of Korea') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('1315838e-ccd2-40e7-847a-9bccd6238c9e', 'PLMSC', 'Plesetsk Missile and Space Complex, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('4a62e7e3-b911-4dc0-a9c7-3adcb07208e5', 'RLLB', 'Rocket Lab Launch Base') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('f3844bb0-17cf-45d1-ad04-dd397f81c22e', 'SEAL', 'Sea Launch Platform (mobile)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('69e01450-6dbf-4c32-9a46-09fd2b8185f7', 'SEMLS', 'Semnan Satellite Launch Site, Iran') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('8425431e-df85-49d2-ba47-4286d99d760b', 'SNMLP', 'San Marco Launch Platform, Indian Ocean (Kenya)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('4939cba9-00a6-43e7-aa5a-8a69f1379893', 'SRILR', 'Satish Dhawan Space Centre, India (Formerly Sriharikota Launching Range)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('23a778fd-b580-4c43-9da5-c00e3a55afd4', 'SUBL', 'Submarine Launch Platform (mobile), Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('ddbb7eb2-6472-4e05-b913-77a33ad78d6d', 'SVOBO', 'Svobodnyy Launch Complex, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('b8786cc9-5880-4454-b3d5-9df1af26fe59', 'TAISC', 'Taiyuan Space Center, PRC') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('bc6c8dd7-fb0b-4f5e-a023-9ad0fc9f3f8f', 'TANSC', 'Tanegashima Space Center, Japan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('72340476-e5cc-4b55-91ad-a0f8f70f277b', 'TYMSC', 'Tyuratam Missile and Space Center, Kazakhstan (Also known as Baikonur Cosmodrome)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('42fa4364-7c11-4f06-9fd9-df26a88fc074', 'UNK', 'Unknown') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('bc4e7dce-11e5-4a2c-ace9-5c4af54ab62f', 'VOSTO', 'Vostochny Cosmodrome, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('f67cb877-3ca6-431c-bb27-50fb7a2bf3c6', 'WLPIS', 'Wallops Island, Virginia, USA') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('f544e66a-8348-4269-b833-d1da664ca2c2', 'WOMRA', 'Woomera, Australia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('80f92175-fb12-40e6-b622-1cf75db18728', 'WRAS', 'Western Range Airspace') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('e5317f3e-9a41-45e3-baab-c45fc193e4fc', 'WSC', 'Wenchang Satellite Launch Center, PRC') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('26c6205d-cfa1-4a1d-9fad-42af7b480132', 'XICLF', 'Xichang Launch Facility, PRC') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('282cbe5d-4164-489e-8888-dab132dee511', 'YAVNE', 'Yavne Launch Facility, Israel') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (id, code, name) VALUES ('71aabe46-a60f-4b6e-b9df-0f0e4c46a7de', 'YUN', 'Yunsong Launch Site (Sohae Satellite Launching Station), Democratic People''s Republic of Korea') ON CONFLICT DO NOTHING");
        
        $this->addSql("INSERT INTO operational_status (id, code, name) VALUES ('03f3d1f6-85ab-40b8-be44-892975daf362', '+', 'Operational') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO operational_status (id, code, name) VALUES ('d1e4f103-4ba2-4cc1-a564-8eba371a931a', '-', 'Nonoperational') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO operational_status (id, code, name) VALUES ('b14be733-d147-4821-8607-1d4eb2966f65', 'P', 'Partially Operational') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO operational_status (id, code, name) VALUES ('55c31fa0-afe0-483e-a6e7-d11b334cfd63', 'B', 'Backup/Standby') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO operational_status (id, code, name) VALUES ('ab49be72-40cc-4e5f-99d1-47476f132938', 'S', 'Spare') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO operational_status (id, code, name) VALUES ('a959a07e-821f-4a90-a3fa-c9d7729c2dca', 'X', 'Extended Mission') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO operational_status (id, code, name) VALUES ('4d35a787-e575-4d1f-a166-90f3fb06a07e', 'D', 'Decayed') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO operational_status (id, code, name) VALUES ('ff1e6a41-902e-4f77-b3e2-b06cb923c046', '?', 'Unknown') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO operational_status (id, code, name) VALUES ('5ed6381d-3e81-492e-8e61-f09a9d976738', 'U', 'Active') ON CONFLICT DO NOTHING");
        
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('56fb04df-061e-4aac-ba60-9d475e03f777', 'NCE', 'No Current Elements') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('02a5977d-7c08-4fd6-bc39-19032e3f98e7', 'NIE', 'No Initial Elements') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('76d4cd02-03f5-4c98-8fec-112b0574063b', 'NEA', 'No Elements Available') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('f932a377-4073-453a-872d-6642b479893c', 'DOC', 'Permanently Docked') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('67c5c6bd-ad3d-4e2f-8c64-dfe59c6ff8cf', 'ISS', 'Docked to International Space Station') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('04a6b4ae-0ddf-404b-b439-ebdf653b419f', 'AS0', 'Asteroid Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('89b5b0f9-3bcc-4915-a37d-5112559cf551', 'AS1', 'Asteroid Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('0a24fb97-bc3d-4b00-b3f4-7800940b6b3d', 'AS2', 'Asteroid Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('e2c6f0ea-f9e3-46c8-b997-c48692205cf5', 'AS3', 'Asteroid Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('952c0b81-5fbc-4044-a661-a459e901504a', 'EA0', 'Earth Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('1e8157df-31f3-45d1-bc93-0b703ee116e2', 'EA1', 'Earth Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('c06afcc4-bd99-4ee4-af53-699ee96dabeb', 'EA2', 'Earth Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('e779bf08-56f9-48ca-a62f-8f6dcf88750c', 'EA3', 'Earth Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('f127aac3-3991-46af-8189-365dd670c96f', 'EL0', 'Earth Lagrange Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('1f2e5608-9106-4509-bd39-ce0331974568', 'EL1', 'Earth Lagrange Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('b8ef4fce-d596-41ad-9b93-d57a0487b78b', 'EL2', 'Earth Lagrange Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('07a8d3e5-768f-46ee-b749-253371cbc0b2', 'EL3', 'Earth Lagrange Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('5097c522-0475-4726-84ea-efccb0d59e34', 'EM0', 'Earth-Moon Barycenter Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('f07289c1-fb46-466f-9666-de38cd47ce9e', 'EM1', 'Earth-Moon Barycenter Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('0afc1944-44ea-487e-888e-f8b13043292c', 'EM2', 'Earth-Moon Barycenter Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('8a1ee26c-cf7a-4ebf-804a-0c70a7382a72', 'EM3', 'Earth-Moon Barycenter Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('dc1970a8-fbf3-4937-b287-4d29851c6744', 'JU0', 'Jupiter Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('0ed6c886-d519-4823-a6c3-ac6135e983d2', 'JU1', 'Jupiter Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('e48cb024-dbbb-4e29-9f28-c41f20eacb26', 'JU2', 'Jupiter Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('7a15ba1f-b2d4-4c23-b505-b42f60103f78', 'JU3', 'Jupiter Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('d0329a55-b295-4b56-8456-00ac3a21dc83', 'MA0', 'Mars Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('397cfe44-10a0-4c93-8465-d717ce549eac', 'MA1', 'Mars Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('fce2fc98-344e-4335-bf82-9bf8e16be847', 'MA2', 'Mars Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('1bfcee5d-283f-4c6a-8cc6-730c8dea544d', 'MA3', 'Mars Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('981d6d51-d685-4d82-be80-f8e9b2ed0c29', 'ME0', 'Mercury Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('35a9a70d-6d84-49e9-8d3a-d7001b2eb1d5', 'ME1', 'Mercury Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('60c8d41b-880a-43e3-ab88-266f32cece00', 'ME2', 'Mercury Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('a9be8ed1-0970-4f93-9aea-9b61a98bb501', 'ME3', 'Mercury Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('4fcd5e36-6317-4f54-911b-b62aa6de26ac', 'MO0', 'Moon Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('dd9d20b7-3509-448c-86b2-45e36c05ce87', 'MO1', 'Moon Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('cf52b893-d137-488d-82e0-f6e231e15647', 'MO2', 'Moon Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('8d231ae6-5cc1-45c6-b716-f39f15910fa4', 'MO3', 'Moon Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('6214b0bb-c86f-40ec-9c9e-d6c1d1f068fc', 'NE0', 'Neptune Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('c484891d-feca-4355-966c-7d5395e9dee6', 'NE1', 'Neptune Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('e3ddd238-c9e7-4009-b757-0c1b99c3f4bc', 'NE2', 'Neptune Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('e5a2d43a-2a16-4b6d-b5be-c6c356c63342', 'NE3', 'Neptune Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('1eda18bd-3e07-4b7c-a39e-3a84d7f25c33', 'PL0', 'Pluto Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('170656f4-3387-428c-b99c-ab7df6030e84', 'PL1', 'Pluto Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('99a7a55c-8055-43db-8f8e-b18fb7ca53a2', 'PL2', 'Pluto Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('2be7d511-0898-4713-bbe2-240b146a0970', 'PL3', 'Pluto Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('04e11230-e1a5-4cb3-a904-93103d2707c4', 'SA0', 'Saturn Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('79bfe5cc-195e-4b7a-99ca-37631bee88f9', 'SA1', 'Saturn Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('2ecb4c0e-3bb5-4c61-8a3d-365a3278094f', 'SA2', 'Saturn Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('2f234cfc-3ab3-4e33-b570-620a31e21104', 'SA3', 'Saturn Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('350f58c1-59fc-41f7-888e-5304a830a205', 'SS0', 'Solar System Escape Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('b05c4abd-869f-469f-b83a-868ab76ca393', 'SS1', 'Solar System Escape Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('ff6936a0-9c03-4373-a88e-062ef7f51387', 'SS2', 'Solar System Escape Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('129a5e15-dcc6-4431-b717-0335edd81d77', 'SS3', 'Solar System Escape Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('11e1a522-d3f3-4aa5-8eb8-5279bbf9b48c', 'SU0', 'Sun Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('37f2c89a-0852-44b3-9632-c64ed9dfadfa', 'SU1', 'Sun Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('d51674ce-4072-4a43-923a-6c92173abc91', 'SU2', 'Sun Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('719f45e4-ffc2-4df1-900d-f9874647451b', 'SU3', 'Sun Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('0868d4db-61f0-4d17-86ea-3336f18118d9', 'UR0', 'Uranus Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('0ef1c529-ea47-4b80-94d0-4afad2771b66', 'UR1', 'Uranus Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('323d4a62-467a-407c-8c1b-dac80673cd15', 'UR2', 'Uranus Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('d39d5578-e217-4001-8543-d787bfe4bc70', 'UR3', 'Uranus Roundtrip') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('bc4e9e3d-3a97-46c9-926c-b89754f26df1', 'VE0', 'Venus Orbit') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('ceb15407-e199-42e3-9d3e-38fc7751e0f6', 'VE1', 'Venus Landing') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('1b57392d-b7c8-44ff-837b-7a36d64c3ac6', 'VE2', 'Venus Impact') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO orbital_status (id, code, name) VALUES ('b72151da-f53c-476e-98bc-cbb9ce89492c', 'VE3', 'Venus Roundtrip') ON CONFLICT DO NOTHING");
        
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('6a727d88-b0b1-447b-bb50-8186b0559624', 'AB', 'Arab Satellite Communications Organization') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('8553f037-5854-46fb-af74-17b1beb7f602', 'ABS', 'Asia Broadcast Satellite') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('c1e9f117-015b-4222-960d-160fa5c768fb', 'AC', 'Asia Satellite Telecommunications Company (ASIASAT)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('dc2521e2-50e3-4de4-a45c-a86015d494fd', 'ALG', 'Algeria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('2b87920e-254b-476d-aef5-ab69673b6bf7', 'ANG', 'Angola') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('f7d20635-e497-41ca-9e84-bd1bcfddce90', 'ARGN', 'Argentina') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('e8802a0f-637b-4a20-8c1a-18fdeff8b947', 'ASRA', 'Austria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('5f0a28a9-b1ea-4bca-9422-b080e0e60b80', 'AUS', 'Australia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('a63c8814-f4fa-4c06-b1fc-11ef4375a67b', 'AZER', 'Azerbaijan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('779d6a12-4a62-46e0-829a-69f76e192161', 'BEL', 'Belgium') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('01a73986-0010-4dff-ae59-aa59babc734b', 'BELA', 'Belarus') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('5e68c4a3-77ba-4a64-b728-2778eae9baf2', 'BERM', 'Bermuda') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('b68fd023-7b64-4de4-bf03-da1a7c4399cf', 'BGD', 'Peoples Republic of Bangladesh') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('e94836f4-0b57-44a3-b4f5-9983af624771', 'BHUT', 'Kingdom of Bhutan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('79748760-ea4b-40dd-ae50-451720495f64', 'BOL', 'Bolivia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('749078b9-ac02-4e19-92d9-6ac87cb22b49', 'BRAZ', 'Brazil') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('29dd29b4-edaa-41bc-ad7e-9bba9afb4136', 'BUL', 'Bulgaria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('4eeb35e3-8d8b-4a56-a08c-1499e49978b7', 'CA', 'Canada') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('ddf382fe-797c-4659-b32d-290a35ba1bc4', 'CHBZ', 'China/Brazil') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('e2e6da6d-e076-44f0-8896-2f34fb76f509', 'CHLE', 'Chile') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('9b2d7c96-852f-468d-a4be-946161a82ec7', 'CIS', 'Commonwealth of Independent States (former USSR)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('4c425d5f-db36-43da-98d5-054bdce3e889', 'COL', 'Colombia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('cd6b8706-8ee2-46ac-bc3d-a4b312768054', 'CRI', 'Republic of Costa Rica') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('92b46c27-df6d-43b2-92b3-7a19a473f402', 'CZCH', 'Czech Republic (former Czechoslovakia)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('ed6628f9-2934-4359-bbc7-c2b05a2521c4', 'DEN', 'Denmark') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('e8943e2e-f871-4d16-b752-59d0527a7610', 'ECU', 'Ecuador') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('5d3937c0-9371-4056-a1e7-d0f2db800a07', 'EGYP', 'Egypt') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('bc2d59e4-d478-492b-aa51-74bf2cd56af4', 'ESA', 'European Space Agency') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('2e8908c3-aef8-4011-a0a9-ae68f40b61f3', 'ESRO', 'European Space Research Organization') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('c2d082c2-f067-4f4c-a74c-edea5c1029f6', 'EST', 'Estonia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('728c7cdc-e078-4f19-abb7-1d2dd88e864a', 'EUME', 'European Organization for the') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('b41a4344-ac39-49b8-acc8-4dec7e79d5b4', 'EUTE', 'European Telecommunications Satellite Organization (EUTELSAT)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('4dc70b63-04fe-4add-a4d4-6a7361971883', 'FGER', 'France/Germany') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('8e235376-0958-414c-a597-8217340177c3', 'FIN', 'Finland') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('99b4113b-3a19-4605-9f4c-7881c6276f2d', 'FR', 'France') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('593dc5b6-2da2-418f-951f-1e16cdfa98ce', 'FRIT', 'France/Italy') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('d5be33f5-274c-40f9-8a58-64fe45255743', 'GER', 'Germany') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('ade4c7cb-2223-44e0-a2e9-094ed5091c14', 'GHA', 'Republic of Ghana') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('87796b4a-781b-4805-bb8a-871dab9a2d0f', 'GLOB', 'Globalstar') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('48167308-46f7-4660-900f-1526f1f4e50e', 'GREC', 'Greece') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('2c3d9dd8-3c5d-4191-a7e2-cd56537785e4', 'GRSA', 'Greece/Saudi Arabia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('a4e18fee-5c74-4178-8423-b91f1485e98e', 'HUN', 'Hungary') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('7b1cdda7-bc50-469c-832f-b4c47b03d060', 'IM', 'International Mobile Satellite Organization (INMARSAT)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('96829c3b-11ae-411c-b65e-801fbe4e9c62', 'IND', 'India') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('00db3199-9172-4f58-84fe-b36e97adb195', 'INDO', 'Indonesia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('e4d57461-e5e3-497a-add1-8e673e4ab398', 'IRAN', 'Iran') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('a048378e-a402-455a-b69f-cd40dff2aa47', 'IRAQ', 'Iraq') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('2a480ade-2459-4337-a200-018b08152ee2', 'IRID', 'Iridium') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('92340db9-9f54-46e7-9f5e-c2ce3c013465', 'ISRA', 'Israel') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('aa452334-57ba-4449-89f5-c552423ed78d', 'ISRO', 'Indian Space Research Organisation') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('dfa066d0-c31c-445b-b491-18dc5e70a758', 'ISS', 'International Space Station') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('2232716a-3904-437a-bef3-b790d2d20a25', 'IT', 'Italy') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('94e72f80-e878-4036-a70c-130ababa448d', 'ITSO', 'International Telecommunications Satellite Organization (INTELSAT)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('32ddb091-c2fd-4c3e-8550-0107ba008e7f', 'JPN', 'Japan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('b4fd6765-42ee-4d95-9b2a-936ed41251c9', 'KAZ', 'Kazakhstan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('c4b8107b-9609-4fa4-acc0-079a8820d6b2', 'KEN', 'Republic of Kenya') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('a3a58154-6b96-446f-b50f-239a28ec2ee5', 'LAOS', 'Laos') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('ceaacafc-6b3f-4e3f-8e74-f752427e15b2', 'LTU', 'Lithuania') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('cf8947b6-3bc2-490d-b88b-b5ab28463099', 'LUXE', 'Luxembourg') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('26f36202-13fe-42b5-9808-cf22846a2ec5', 'MA', 'Morroco') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('0841996f-cf92-4313-9cc7-5f0ae670e22c', 'MALA', 'Malaysia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('aa23b09e-448f-4dbb-b411-35e2f08bb5d8', 'MEX', 'Mexico') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('4941effe-763e-4e13-ae86-13ae9cec439e', 'MNG', 'Mongolia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('bea55f6e-5d2d-4056-9880-6ea8f74234f0', 'NATO', 'North Atlantic Treaty Organization') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('15ceea42-bffe-40cd-b5a6-fcf62fe620fc', 'NEP', 'Federal Democratic Republic of Nepal') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('dd98e20d-f009-45ad-902d-4e1884d5a23d', 'NETH', 'Netherlands') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('af9a7ef7-86f3-4b62-958c-2608593d247c', 'NICO', 'New ICO') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('8d91e571-796f-4d6c-8217-85d36f7c90e5', 'NIG', 'Nigeria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('398a8033-b66c-42fb-a1f6-3fe10b76c065', 'NKOR', 'Democratic People''s Republic of Korea') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('85b67ebe-117b-4af8-a456-d4b0bf6e5f6b', 'NOR', 'Norway') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('4cc82449-65f0-4c0b-8335-4ea6c9d1f24d', 'NZ', 'New Zealand') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('a1be7394-1e09-4c26-9721-fc4e5f97010d', 'O3B', 'O3b Networks') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('136e1908-a0d2-4637-bca4-947c02f428e8', 'ORB', 'ORBCOMM') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('5a2d6180-02db-4e84-89b1-1d5b555aa5b7', 'PAKI', 'Pakistan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('de35008c-dee6-494f-b3d3-15bdea5b8411', 'PERU', 'Peru') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('db92846c-4522-41e4-a443-c886fc9a445a', 'POL', 'Poland') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('73f4486a-4e10-4cc9-a930-23219d7e4fe9', 'POR', 'Portugal') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('16395d4b-93be-4a42-b517-ca4576e204c6', 'PRC', 'People''s Republic of China') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('0e46b9e8-b22f-4750-83f7-c2dd9dfed34f', 'PRES', 'People''s Republic of China/European Space Agency') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('034233a2-3bc1-4485-bc24-5af1bf77caf1', 'QATR', 'State of Qatar') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('7681f4f1-2a6c-4e27-aa58-cf31e699c6dc', 'RASC', 'RascomStar-QAF') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('8c72e157-0e8c-4135-9250-f41486524d40', 'ROC', 'Taiwan (Republic of China)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('a3bd3b9c-7580-495f-bce4-4794e5592964', 'ROM', 'Romania') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('ebb7a4b7-df9b-453c-a762-47158aa83678', 'RP', 'Philippines (Republic of the Philippines)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('76b4f107-473e-4593-a72c-4deddb59296e', 'RWA', 'Republic of Rwanda') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('bf8c90f4-bec7-4d74-a954-550e36735270', 'SAFR', 'South Africa') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('b1ec40f9-b76c-4780-9529-fde1527a5b64', 'SAUD', 'Saudi Arabia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('a655dde0-9e0f-4442-87e1-b97c33efa5aa', 'SDN', 'Republic of Sudan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('82a02636-dcd8-4e9e-b063-648027db1381', 'SEAL', 'Sea Launch') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('e497b093-1859-448f-a1c4-0fe5ecfcff7d', 'SES', 'SES') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('0e9fc0ee-09a5-4948-aa0f-0457d1b88010', 'SGJP', 'Singapore/Japan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('c9964d6d-01c8-4d44-a503-46490aed5e8b', 'SING', 'Singapore') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('17910d0b-dded-45bc-ae25-f7610817c305', 'SKOR', 'Republic of Korea') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('410dcb5b-49b1-4741-bed9-69f8f39d8e9d', 'SPN', 'Spain') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('f36535a5-800c-499e-9e3e-32b73b2fde71', 'SRI', 'Democratic Socialist Republic of Sri Lanka') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('18226927-842f-4196-ab10-5c90f6c74a06', 'STCT', 'Singapore/Taiwan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('b7e3a33d-d7aa-42f5-baa0-f5dbf37aaec0', 'SWED', 'Sweden') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('733c093a-1dd0-4a50-8adb-99ef1e8b95ff', 'SWTZ', 'Switzerland') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('90dec772-a74e-457d-b1bb-b82283c6e30b', 'THAI', 'Thailand') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('a7d17468-d396-4fba-8522-9c071c71ba4c', 'TMMC', 'Turkmenistan/Monaco') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('973dd183-498f-47f8-a224-11ab3c9b1dca', 'TURK', 'Turkey') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('479638df-3fdb-4880-bf0a-280a61bc0268', 'UAE', 'United Arab Emirates') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('bb68a138-dacd-407a-9541-c9ca73091058', 'UK', 'United Kingdom') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('3aafb482-3ad3-422c-803b-e337028c63a0', 'UKR', 'Ukraine') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('72f05bc9-01fb-4af9-9b41-a08f8b558d98', 'UNK', 'Unknown') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('1f9ea54e-8603-45cf-899c-215c330656ab', 'URY', 'Uruguay') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('64b446cf-1e68-48d3-aab8-391456f6b388', 'US', 'United States') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('41d1ee17-6eff-4609-9b00-039a5b939692', 'USBZ', 'United States/Brazil') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('e3421a5d-55d7-4394-945e-89e3aee86359', 'VENZ', 'Venezuela') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (id, code, name) VALUES ('96951492-d117-40d5-80a8-fdb1b157363b', 'VTNM', 'Vietnam') ON CONFLICT DO NOTHING");
    }

    /**
     * @inheritDoc
     */
    public function down(Schema $schema) : void
    {
    }
}
