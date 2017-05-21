
<?php 

class Car_dealership extends CI_Model  {
		/**
		 * @var array
		 */
		protected $cars = array(
			'smax' => array(
				'active' => 1,
				'shortCarName' => 'Ford S-MAX',
				'completeCarName' => '<strong class="car-type">Ford S-MAX</strong> Business Sportvan',
				'completeCarNameOverview' => 'Ford S-MAX <span>Business Sportvan</span>',
				'price' => 269,
				'slogan' => 'Typisch Ford: <span>Platz fürs Hier und Jetzt</span>',
				'description' => '5-Sitzer, Audiosystem CD mit USB-Anschluss und Lenkrad-Fernbedienung, Ford Navigationssystem inkl. Ford&nbsp;SYNC2, Klimaanlage mit automatischer Temperaturkontrolle, Geschwindigkeitsregelanlage, 6-Gang, Start-Stopp-System, Park-Pilot-System vorn und hinten, Antiblockier-Bremssystem (ABS), Intelligentes Sicherheits-System (IPS), Bordcomputer u.&nbsp;v.&nbsp;m.',
			),
			'kuga' => array(
					'active' => 1,
					'shortCarName' => 'Ford Kuga',
					'completeCarName' => '<strong class="car-type">Ford Kuga</strong> INDIVIDUAL',
					'completeCarNameOverview' => 'Ford Kuga <span>INDIVIDUAL</span>',
					'price' => 198,
					'slogan' => '<span>Zum Super-Sonderpreis!</span>',
					'description' => '2.0&nbsp;TDCi „4x4“&nbsp;Automatic 110&nbsp;kW (150&nbsp;PS), 5-trg., 6-Gang-Automatik, Zentralverriegelung mit Fernbedienung, Geschwindigkeitsregelanlage, Fensterheber elektrisch vorn und hinten, Berganfahrassistent, Allradantrieb,Klimaanlage automatik, Leder-/Stoff Polster mit Sitzheizung und Fahrersitz 10-fach elektrisch einstellbar mit Memory Funktion, Start-Stopp-System, SonyNavigation mit SYNC und Premiumsoundsystem, Einpark-Assistent, Design-Paket&nbsp;I, Technologie-Paket, Leichtmetallräder 19“&nbsp;5X2 Speichen Design, FordKey Free Paket, Zusatzheizung, u.&nbsp;v.&nbsp;m.',
			),
			'focus' => array(
				'active' => 1,
				'shortCarName' => 'Ford Focus',
				'completeCarName' => '<strong class="car-type">Ford Focus</strong> Business',
				'completeCarNameOverview' => 'Ford Focus <span>Business</span>',
				'price' => 179,
				'slogan' => 'Typisch Ford: <span>offen für alles</span>',
				'description' => '5-trg., Audiosystem CD mit USB-Anschluss und Lenkrad-Fernbedienung, Außenspiegel beheizbar, Ford Navigationssystem inkl. Ford&nbsp;SYNC2, Geschwindigkeitsregelanlage, Park-Pilot-System hinten, Fensterheber vorne elektrisch, Berganfahrassistent, Klimaanlage manuell, Nebelscheinwerfer, Zentralverriegelung mit Fernbedienung, Antiblockier-Bremssystem (ABS), Notruf-Assistent, Bordcomputer u.&nbsp;v.&nbsp;m.',
			),
			'ecosport' => array(
				'active' => 1,
				'shortCarName' => 'Ford EcoSport',
				'completeCarName' => '<strong class="car-type">Ford EcoSport</strong> Trend',
				'completeCarNameOverview' => 'Ford EcoSport <span>Trend</span>',
				'price' => 169,
				'slogan' => 'Typisch Ford: <span>Power, wenn man sie braucht</span>',
				'description' => '5-trg., 7 Airbags (Front-, Seiten-, Kopf-, Schulter- und Knieairbag), Klimaanlage manuell, Audiosystem CD, Nebelscheinwerfer, Fensterheber vorn und hinten, elektrisch, Multifunktions-Lederlenkrad, 3-Speichen-Design u. v. m.',
				'payment-suffix' => '/Monat',
			),
			'focus' => array(
				'active' => 1,
				'shortCarName' => 'Ford Focus',
				'completeCarName' => '<strong class="car-type">Ford Focus</strong> Turnier',
				'completeCarNameOverview' => 'Ford Focus <span>Turnier</span>',
				'price' => 159,
				'slogan' => 'Typisch Ford: <span>offen für alles</span>',
				'description' => '5-trg., Audiosystem CD mit USB-Anschluss, Außenspiegel beheizbar, Fensterheber vorne elektrisch, Berganfahrassistent, Klimaanlage manuell, Ford Easy Fuel, Zentralverriegelung mit Fernbedienung, IPS- Intelligent Protection System, Antiblockier-Bremssystem (ABS), Bordcomputer, MyKey- Schlüsselsystem, u. v. m.',
				'payment-suffix' => '/Monat',
			),
			'fiesta' => array(
				'active' => 1,
				'shortCarName' => 'Ford Fiesta',
				'completeCarName' => '<strong class="car-type">Ford Fiesta</strong> Celebration',
				'completeCarNameOverview' => 'Ford Fiesta <span>Celebration</span>',
				'price' => 129,
				'slogan' => 'Typisch Ford: <span>Zum Super-Sonderpreis</span>',
				'description' => '3-trg., Audiosystem CD inkl. Ford SYNC, Klimaanlage manuell, Zentralverriegelung mit Fernbedienung, Bordcomputer, Ford Easy Fuel, Nebelscheinwerfer, Ford ECO-Mode, Berganfahrassistent, Fensterheber vorn elektrisch, Außenspiegel beheizbar, MyKey-Schlüsselsystem, Antiblockier-Bremssystem (ABS) mit elektronischer Bremskraftverteilung, Frontscheibe beheizbar, Sitzheizung vorne u. v. m.',
				'payment-suffix' => '/Monat',
			),
		);


		/**
		 * Liefert alle Autos zurück
		 *
		 * @return array
		 */
		public function getAllCars(){
			return $this->cars;
		}


		/**
		 * Vollständiger Name des Autos
		 *
		 * @param string $carModel
		 * @return string
		 */
		public function getCompleteCarName($carModel){
			if(array_key_exists($carModel, $this->cars)){
				return $this->cars[$carModel]['completeCarName'];
			}


			return '';
		}


		/**
		 * Kurzer Name des Autos
		 *
		 * @param string $carModel
		 * @return string
		 */
		public function getShortCarName($carModel){
			if(array_key_exists($carModel, $this->cars)){
				return $this->cars[$carModel]['shortCarName'];
			}


			return '';
		}


		/**
		 * Preis des Autos
		 *
		 * @param string $carModel
		 * @return string
		 */
		public function getCarPrice($carModel){
			if(array_key_exists($carModel, $this->cars)){
				return number_format($this->cars[$carModel]['price'], 0, ",", ".");
			}


			return '';
		}


		/**
		 * Slogan des Autos
		 *
		 * @param $carModel
		 * @return string
		 */
		public function getCarSlogan($carModel){
			if(array_key_exists($carModel, $this->cars)){
				return $this->cars[$carModel]['slogan'];
			}


			return '';
		}


		/**
		 * Beschreibung des Autos
		 *
		 * @param $carModel
		 * @return string
		 */
		public function getCarDescription($carModel){
			if(array_key_exists($carModel, $this->cars)){
				return $this->cars[$carModel]['description'];
			}


			return '';
		}


		/**
		 * Logo des Autohauses
		 *
		 * @param string $image Bildname
		 *
		 * @return string
		 */
		private function getLogo($image){
			return $this->getImagePath() . "/logos/{$image}";
		}


		/**
		 * Bild des Ansprechpartners
		 *
		 * @param string $image Bildname
		 *
		 * @return string
		 */
		private function getImageOfPerson($image){
			return $this->getImagePath() . "/persons/{$image}";
		}


		public function getRegions(){
			return array_merge($this->getRegionsFromRosenheim(), $this->getRegionsFromMuenchen(), $this->getRegionsFromAllgaeu());
		}


		/**
		 * Sucht anhand der URL die richtigen Regionen aus der Klasse
		 *
		 * @return array
		 */
		public function getCurrentRegions(){
			$region = $this->getRegionName();
			switch($region){
				case 'rosenheim':
					return $this->getRegionsFromRosenheim();
				case 'muenchen':
					return $this->getRegionsFromMuenchen();
				case 'allgaeu':
					return $this->getRegionsFromAllgaeu();
				default:
					return array();
			}
		}


		/**
		 * @param $email
		 * @return bool
		 */
		public function isValidContactEmail($email){
			foreach($this->getRegions() as $region){
				foreach($region as $detail){
					if($detail['ansprechpartner']['email'] == $email){
						return true;
					}
				}
			}


			return false;
		}


		/**
		 * E-Mail-anhand der Adresse zurückgeben
		 *
		 * @param $email
		 * @return null
		 */
		public function getAddressByEmail($email){
			foreach($this->getRegions() as $region){
				foreach($region as $detail){
					if($detail['ansprechpartner']['email'] == $email){
						return $detail['autohaus']['adresse'];
					}
				}
			}


			return NULL;
		}


		/**
		 * Region Rosenheim mit allen Informationen
		 *
		 * @return array
		 */
		public function getRegionsFromRosenheim(){
			$regions = array(
				1 => array(
					'kolbermoor' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Auto Eder Kolbermoor',
							'name'           => 'Auto Eder GmbH',
							'niederlassung'  => 'Zweigndl. Kolbermoor',
							'adresse'        => array(
								'strasse' => 'Rosenheimer Straße 59',
								'plz'     => '83059',
								'ort'     => 'Kolbermoor',
							),
							'url'            => 'http://ford-eder-kolbermoor.de/',
							'logo'           => $this->getLogo('autoeder-kolbermoor.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Stefan',
							'nachname'     => 'Schenk',
							'bild'         => $this->getImageOfPerson('stefan_schenk.jpg'),
							'telefon'      => '08031 9099-0',
							'matelso'      => 'tracking_tn02',
							'email'        => 'p.wiesholzer@auto-eder.de,kolbermoor@auto-eder.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8 - 19 Uhr',
								'Sa'    => '9 - 14 Uhr',
							),
						),
					),
				),
				2 => array(
					'tuntenhausen' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Auto Eder Tuntenhausen',
							'name'           => 'Auto Eder GmbH',
							'niederlassung'  => 'Standort: Tuntenhausen',
							'adresse'        => array(
								'strasse' => 'Tillystr. 4',
								'plz'     => '83104',
								'ort'     => 'Tuntenhausen',
							),
							'url'            => 'http://ford-eder-tuntenhausen.de/',
							'logo'           => $this->getLogo('autohaus-tuntenhausen.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Felix',
							'nachname'     => 'Hoffmann',
							'bild'         => $this->getImageOfPerson('felix_hoffmann.jpg'),
							'telefon'      => '08067 9035-0',
							'matelso'      => 'tracking_tn04',
							'email'        => 'f.hoffmann@auto-eder.de,tuntenhausen@auto-eder.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8 - 18.30 Uhr',
								'Sa'    => '8 - 13 Uhr',
							),
						),
					),
				),
				3 => array(
					'wasserburg' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Auto Eder Wasserburg',
							'name'           => 'Auto Eder GmbH',
							'niederlassung'  => 'Standort: Wasserburg',
							'adresse'        => array(
								'strasse' => 'Gewerbering 1',
								'plz'     => '83549',
								'ort'     => 'Eiselfing',
							),
							'url'            => 'http://ford-eder-wasserburg.de/',
							'logo'           => $this->getLogo('autoeder-wasserburg.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Andreas',
							'nachname'     => 'Göschl',
							'bild'         => $this->getImageOfPerson('andreas_goeschl.jpg'),
							'telefon'      => '08071 9096-0',
							'matelso'      => 'tracking_tn01',
							'email'        => 'a.goeschl@auto-eder.de,wasserburg@auto-eder.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8 - 18 Uhr',
								'Sa'    => '9 - 13 Uhr',
							),
						),
					),
				),
				4 => array(
					'rosenheim' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Freilinger & Geisler Rosenheim',
							'name'           => 'Freilinger & Geisler',
							'niederlassung'  => 'Zweigndl. der Auto Eder GmbH',
							'adresse'        => array(
								'strasse' => 'Ebersberger Str. 59',
								'plz'     => '83022',
								'ort'     => 'Rosenheim',
							),
							'url'            => 'http://ford-freilinger-und-geisler-rosenheim.de/',
							'logo'           => $this->getLogo('freilinger-geisler-rosenheim.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Werner',
							'nachname'     => 'Karl',
							'bild'         => $this->getImageOfPerson('werner_karl.jpg'),
							'telefon'      => '08031 8002-0',
							'matelso'      => 'tracking_tn03',
							'email'        => 'w.karl@freilinger-geisler.de,info@freilinger-geisler.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8 - 18.30 Uhr',
								'Sa'    => '9 - 13 Uhr',
							),
						),
					),
				)
			);
			// shuffle regions
			shuffle($regions);


			return $regions;
		}


		/**
		 * Region Müchen mit allen Informationen
		 *
		 * @return array
		 */
		public function getRegionsFromMuenchen(){
			$regions = array(
				1 => array(
					'miesbach' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Auto Eder Miesbach',
							'name'           => 'Auto Eder Miesbach',
							'niederlassung'  => 'Zweigndl. der Auto Eder GmbH',
							'adresse'        => array(
								'strasse' => 'Wendelsteinstr. 8',
								'plz'     => '83714',
								'ort'     => 'Miesbach',
							),
							'url'            => 'http://ford-eder-miesbach.de/',
							'logo'           => $this->getLogo('autohaus-miesbach.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Patrick',
							'nachname'     => 'Körner',
							'bild'         => $this->getImageOfPerson('patrick_koerner.jpg'),
							'telefon'      => '08025 2939-0',
							'matelso'      => 'tracking_tn07',
							'email'        => 'p.koerner@auto-eder.de,miesbach@auto-eder.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8 - 18.30 Uhr',
								'Sa'    => '9 - 13 Uhr',
							),
						),
					),
				),
				2 => array(
					'kirchseeon' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Autohaus Kirchseeon',
							'name'           => 'Autohaus Kirchseeon',
							'niederlassung'  => 'Zweigndl. der Auto Eder GmbH',
							'adresse'        => array(
								'strasse' => 'Am Marterfeld 1',
								'plz'     => '85614',
								'ort'     => 'Kirchseeon',
							),
							'url'            => 'http://ford-kirchseeon.de/',
							'logo'           => $this->getLogo('autohaus-kirchseeon.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Andreas',
							'nachname'     => 'Sölch',
							'bild'         => $this->getImageOfPerson('andreas_soelch.jpg'),
							'telefon'      => '08091 5422',
							'matelso'      => 'tracking_tn06',
							'email'        => 'andreas.soelch@auto-eder.de,info@auto-eder.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8 - 18.30 Uhr',
								'Sa'    => '8.30 - 14 Uhr',
							),
						),
					),
				),
				3 => array(
					'marktschwaben' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Autohaus Markt Schwaben',
							'name'           => 'Autohaus Markt Schwaben',
							'niederlassung'  => 'Zweigndl. der Auto Eder GmbH',
							'adresse'        => array(
								'strasse' => 'Poinger Str. 9',
								'plz'     => '85570',
								'ort'     => 'Markt Schwaben',
							),
							'url'            => 'http://ford-markt-schwaben.de/',
							'logo'           => $this->getLogo('autohaus-markt-schwaben.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Richard',
							'nachname'     => 'Seibold',
							'bild'         => $this->getImageOfPerson('richard_seibold.jpg'),
							'telefon'      => '08121 9344-0',
							'matelso'      => 'tracking_tn05',
							'email'        => 'r.seibold@auto-eder.de,markt-schwaben@auto-eder.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8 - 18.30 Uhr',
								'Sa'    => '8.30 - 12.30 Uhr',
							),
						),
					),
				)
			);
			// shuffle regions
			shuffle($regions);


			return $regions;
		}


		/**
		 * Region Allgäu mit allen Informationen
		 *
		 * @return array
		 */
		public function getRegionsFromAllgaeu(){
			$regions = array(
				1 => array(
					'kempten' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Auto Hartmann Kempten',
							'name'           => 'Auto Hartmann GmbH',
							'niederlassung'  => 'Standort: Kempten',
							'adresse'        => array(
								'strasse' => 'Im Moos 3',
								'plz'     => '87435',
								'ort'     => 'Kempten',
							),
							'url'            => 'http://ford-hartmann-kempten.de/',
							'logo'           => $this->getLogo('hartmann-kempten.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Michael',
							'nachname'     => 'Grimm',
							'telefon'      => '0831 960460-0',
							'matelso'      => 'tracking_tn08',
							'bild'         => $this->getImageOfPerson('michael_grimm.jpg'),
							'email'        => 'michael.grimm@autohaus-kempten.de,info@autohaus-kempten.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '7.30 - 18 Uhr',
								'Sa'    => '9 - 13 Uhr',
							),
						),
					),
				),
				2 => array(
					'oberstdorf' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Auto Hartmann Oberstdorf',
							'name'           => 'Auto Hartmann GmbH',
							'niederlassung'  => 'Standort: Oberstdorf',
							'adresse'        => array(
								'strasse' => 'Walserstr. 36',
								'plz'     => '87561',
								'ort'     => 'Oberstdorf',
							),
							'url'            => 'http://ford-hartmann-oberstdorf.de/',
							'logo'           => $this->getLogo('hartmann-oberstdorf.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Werner',
							'nachname'     => 'Schmidt',
							'bild'         => $this->getImageOfPerson('werner_schmidt.jpg'),
							'telefon'      => '08321 6725-0',
							'matelso'      => 'tracking_tn09',
							'email'        => 'w.schmidt@autohaus-sonthofen.de,info@autohaus-oberstdorf.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8 - 12 Uhr u. 13 - 17 Uhr',
							),
						),
					),
				),
				3 => array(
					'sonthofen' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Auto Hartmann Sonthofen',
							'name'           => 'Auto Hartmann GmbH',
							'niederlassung'  => 'Standort: Sonthofen',
							'adresse'        => array(
								'strasse' => 'An der Eisenschmelze 6',
								'plz'     => '87527',
								'ort'     => 'Sonthofen',
							),
							'url'            => 'http://ford-hartmann-sonthofen.de/',
							'logo'           => $this->getLogo('hartmann-sonthofen.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Werner',
							'nachname'     => 'Schmidt',
							'bild'         => $this->getImageOfPerson('werner_schmidt.jpg'),
							'telefon'      => '08321 6725-0',
							'matelso'      => 'tracking_tn10',
							'email'        => 'w.schmidt@autohaus-sonthofen.de,info@autohaus-sonthofen.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8 - 17 Uhr',
								'Sa'    => '9 - 12 Uhr',
							),
						),
					),
				),
				4 => array(
					'memmingen' => array(
						'autohaus'        => array(
							'accordionLabel' => 'Autohaus Fischer',
							'name'           => 'Autohaus Fischer',
							'niederlassung'  => 'Zweigndl. der Auto Eder GmbH',
							'adresse'        => array(
								'strasse' => 'Am Vogelsbrunnen 4',
								'plz'     => '87700',
								'ort'     => 'Memmingen',
							),
							'url'            => 'http://ford-fischer-memmingen.de/',
							'logo'           => $this->getLogo('autohaus-fischer.png'),
						),
						'ansprechpartner' => array(
							'anrede'       => 'Herr',
							'vorname'      => 'Volker',
							'nachname'     => 'Brehm',
							'bild'         => $this->getImageOfPerson('volker_brehm.jpg'),
							'telefon'      => '08331 92436-0',
							'matelso'      => '',
							'email'        => 'info@fischer.fsoc.de',
							'sprechzeiten' => array(
								'Mo-Fr' => '8.30 - 18 Uhr',
								'Sa'    => '9 - 13 Uhr',
							),
						),
					),
				)
			);
			// shuffle regions
			shuffle($regions);


			return $regions;
		}
	}
