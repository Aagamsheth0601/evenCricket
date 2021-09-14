<?php
// first url is for team and second url is for player
$url = "http://localhost/evenCricket/apitest/index.php?all_players";
// $url = "http://localhost/evenCricket/apitest/index.php?player_id=3";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);
if (isset($result['status']) || isset($result['result'])) {
	if ($result['status']) {
		if ($result['result']) {
?>
			<table border="7">
				<tr>
					<td>Sr No</td>
					<td>Name</td>
					<td>Country</td>
					<td>Type</td>
					<td>Matches</td>
					<td>Total Runs</td>
					<td>Fifties</td>
					<td>Hundreds</td>
					<td>Highest Score</td>
					<td>Average</td>
					<td>Wickets</td>
					<td>Best Figures</td>
					<td>Economy</td>
					<td>Strike Rate</td>
					<td>Debut Year</td>
				<tr>
		<?php
			$srno = 1;
			foreach ($result['data'] as $data) {
				echo 	'<tr>
								<td>' . $srno . '</td>
								<td>' . $data["player_name"] . '</td>
								<td>' . $data["country_name"] . '</td>
								<td>' . $data["player_type"] . '</td>
								<td>' . $data["matches_played"] . '</td>
								<td>' . $data["total_runs"] . '</td>
								<td>' . $data["50"] . '</td>
								<td>' . $data["100"] . '</td>
								<td>' . $data["highest_score"] . '</td>
								<td>' . $data["average"] . '</td>
								<td>' . $data["wickets"] . '</td>
								<td>' . $data["best_figures"] . '</td>
								<td>' . $data["economy"] . '</td>
								<td>' . $data["strike_rate"] . '</td>
								<td>' . $data["debut_year"] . '</td>
							</tr>';
				$srno++;
			}
		} else {
			echo "No data is present";
		}
	} else {
		echo "Error occured";
	}
} else {
	echo "API not working";
}
		?>
			</table>