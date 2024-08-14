<?php
namespace App\Models;
use CodeIgniter\Model;
class ReviewModal extends Model
{    
    protected $table;
    protected $allowedFields;
    protected $primaryKey;
    // protected $useTimestamps = true;

    public function __construct() 
    {
        parent::__construct();
        $this->table = getenv('REVIEWS_TABLE');
        $this->primaryKey = getenv('REVIEWS_TABLE_PRIMARY_KEY');
        $fields = getenv('REVIEWS_FIELD');
        $this->allowedFields = explode(',', $fields);
        
    }

    public function getEnumValues()
    {
        $db = \Config\Database::connect();
        
        // Define the columns to fetch enum values from
        $columns = ['reviewType', 'sentiment'];
        $enumValues = [];
        $queries = [];

        foreach ($columns as $column) {
            // Query to get column details
            $sql = "SHOW COLUMNS FROM {$this->table} LIKE '$column'";
            $queries[] = $sql;
            $builder = $db->query($sql);

            // Fetch the query result
            $row = $builder->getRow();
            
            // Extract enum values if row is valid
            if ($row) {
                preg_match_all("/'([^\']+)'/", $row->Type, $matches);
                $enumValues[$column] = $matches[1];
            } else {
                $enumValues[$column] = [];
            }
        }

        // Return the queries and the enum values for each column
        return [
            'enumValues' => $enumValues
        ];
    }

    public function getReviewsByType($type)
    {
        return $this->where('reviewType', $type)->findAll();
    }

    public function dispatchingchart(){
        // Load the database
        $db = \Config\Database::connect();
    
        // Write the SQL query
        $sql = "SELECT customers_bio.*, reviews.*
            FROM reviews 
            RIGHT JOIN customers_bio 
            ON customers_bio.campaignid = reviews.campaignID";
    
        // Execute the query
        $query = $db->query($sql);
    
        // Fetch all results as an associative array
        $results = $query->getResultArray();
    
        // Initialize counters and accumulators
        $positive = 0;
        $negative = 0;
        $ratetext1 = '';
        $ratetext2 = '';
        $ratetext3 = '';
        $rate1Sum = 0;
        $rate2Sum = 0;
        $rate3Sum = 0;
        $rate1Count = 0;
        $rate2Count = 0;
        $rate3Count = 0;
        $bioCount = 0;
        $pulsecheckCount = 0;
    
        // Loop through each result and count sentiments
        foreach ($results as $result) {
            $reviewRatings = $result['reviewratings'];
            // Decode the JSON data for review ratings
            $decodedData = json_decode($reviewRatings, true);
    
            // Process rate1
            if (isset($decodedData['rate1'])) {
                $rate1Value = (int) $decodedData['rate1']['value'];
                $rate1Sum += $rate1Value;
                $rate1Count++;
                $ratetext1 = $decodedData['rate1']['text'];
            }
    
            // Process rate2
            if (isset($decodedData['rate2'])) {
                $rate2Value = (int) $decodedData['rate2']['value'];
                $rate2Sum += $rate2Value;
                $rate2Count++;
                $ratetext2 = $decodedData['rate2']['text'];
            }
    
            // Process rate3
            if (isset($decodedData['rate3'])) {
                $rate3Value = (int) $decodedData['rate3']['value'];
                $rate3Sum += $rate3Value;
                $rate3Count++;
                $ratetext3 = $decodedData['rate3']['text'];
            }
    
            // Count sentiments
            if (strtolower($result['sentiment']) === 'positive') {
                $positive++;
            } elseif (strtolower($result['sentiment']) === 'negative') {
                $negative++;
            }
    
            // Count form status
            if (isset($result['formstatus'])) {
                if ($result['formstatus'] === 'bio') {
                    $bioCount++;
                } elseif ($result['formstatus'] === 'pulsecheck') {
                    $pulsecheckCount++;
                }
            }
        }
    
        // Calculate average ratings
        $averagerating1 = ($rate1Count > 0) ? ($rate1Sum / $rate1Count) : 0;
        $averagerating2 = ($rate2Count > 0) ? ($rate2Sum / $rate2Count) : 0;
        $averagerating3 = ($rate3Count > 0) ? ($rate3Sum / $rate3Count) : 0;
    
        // Convert average ratings to half-points
        $ratepoint1 = $averagerating1 / 2;
        $ratepoint2 = $averagerating2 / 2;
        $ratepoint3 = $averagerating3 / 2;
    
        // Function to generate star rating HTML
        function getStarRatingHTML($rating) {
            $fullStars = floor($rating);
            $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
            $emptyStars = 5 - $fullStars - $halfStar;
    
            $stars = str_repeat('<i class="fa fa-star"></i>', $fullStars);
            $stars .= str_repeat('<i class="fa fa-star-half-o"></i>', $halfStar);
            $stars .= str_repeat('<i class="fa fa-star-o"></i>', $emptyStars);
    
            return $stars;
        }
    
        // Calculate total sentiments
        $total = $positive + $negative;
        if ($total > 0) {
            $positive = ($positive / $total) * 100;
            $negative = ($negative / $total) * 100;
        }
         
        // Get pulse check data by month
        $pulseCheckData = $this->getPulseCheckDataByMonth();
        print_r($pulseCheckData);
    
        // Prepare arrays for the result
        $bioDates = [];
        $pulsecheckDates = [];
        $bioCounts = [];
        $pulsecheckCounts = [];
    
        foreach ($pulseCheckData as $row) {
            // If there are bio entries on this date, add to bioDates
            if ($row['bioCount'] > 0) {
                $bioDates[] = $row['date'];
                $bioCounts[] = $row['bioCount'];
            }
    
            // If there are pulsecheck entries on this date, add to pulsecheckDates
            if ($row['pulsecheckCount'] > 0) {
                $pulsecheckDates[] = $row['date'];
                $pulsecheckCounts[] = $row['pulsecheckCount'];
            }
        }
        echo'<br>';

        print_r($pulsecheckDates);
        echo'<br>';

        print_r($bioDates);

        // Prepare the data to return
        return [
            'ratetext1'       => $ratetext1,
            'ratetext2'       => $ratetext2,
            'ratetext3'       => $ratetext3,
            'starRating1'     => getStarRatingHTML($ratepoint1),
            'starRating2'     => getStarRatingHTML($ratepoint2),
            'starRating3'     => getStarRatingHTML($ratepoint3),
            'ratepoint1'      => round($ratepoint1, 1),
            'ratepoint2'      => round($ratepoint2, 1),
            'ratepoint3'      => round($ratepoint3, 1),
            'happyPercentage' => round($positive, 2),
            'unhappyPercentage' => round($negative, 2),
            'bioDates'        => json_encode($bioDates),
            'pulsecheckDates' => json_encode($pulsecheckDates),
            'bioCounts'       => json_encode($bioCounts),
            'pulsecheckCounts'=> json_encode($pulsecheckCounts),
        ];
    }    

    public function getPulseCheckDataByMonth() {
        // Load the database
        $db = \Config\Database::connect();
    
        // Write the SQL query
        $sql = "SELECT 
            DATE(created_at) AS date,
            COUNT(CASE WHEN formstatus = 'bio' THEN 1 END) AS bioCount,
            COUNT(CASE WHEN formstatus = 'pulsecheck' THEN 1 END) AS pulsecheckCount
        FROM customers_bio
        GROUP BY date
        ORDER BY date";
    
        // Execute the query
        $query = $db->query($sql);
        // Fetch all results as an associative array
        $results = $query->getResultArray();
        // Return the results
        return $results;
    
    }
    
}
