 <?php
 class search {
		//public $namefilm;
		
		public function getDataFromIMDB()
		{

		if (!empty($_POST['StringSearch']))

				{
					$namefilm = $_POST['StringSearch'];
					$newstroka = str_replace(" ","+",$namefilm);
					$endpoint = 'http://www.omdbapi.com/?apikey=9415da&t='.$newstroka;
					$data = json_decode(file_get_contents($endpoint), true);
				}
				if($data['Response']!="True"){
				$data = array(
				"Title" => "Film is not found",
				"imdbRating" => "",
				"Poster" => "",
				"imdbVotes" => "",
				"Year" => "",
				"Actors" => "",
				"Country" => "",
				"totalSeasons" => "",
				"Awards" => "",
				"Plot" => "",
				);	
				}
				return $data;
		
		}

		public function __construct()
		{

				


		}
	}
	
	

 
