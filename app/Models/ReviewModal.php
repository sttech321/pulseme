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

    public function get_reviews_with_campaign($limit, $offset) {
        $sql = "
            SELECT reviews.*, campaign.name, campaign.department, campaign.employeeId
            FROM campaign
            RIGHT JOIN reviews ON reviews.campaignID = campaign.ID
            LIMIT $limit OFFSET $offset;
        ";
    
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    public function get_total_reviews_count() {
        $sql = "
            SELECT COUNT(*) as count
            FROM campaign
            RIGHT JOIN reviews ON reviews.campaignID = campaign.ID
        ";
    
        $query = $this->db->query($sql);
        $result = $query->getRow();
        return $result->count;
    }

    public function get_reviews($id) {
        $sql = "SELECT reviews.*, campaign.name, campaign.department, campaign.employeeId
                FROM reviews
                LEFT JOIN campaign ON reviews.campaignID = campaign.ID
                WHERE reviews.ID = ?";
    
        $query = $this->db->query($sql, [$id]);
        return $query->getRowArray(); 
    }
    
    public function get_reviews_campaignId($campaignID){
        $sql = "SELECT reviews.*, campaign.name, campaign.department, campaign.employeeId
                FROM reviews
                LEFT JOIN campaign ON reviews.campaignID = campaign.ID
                WHERE campaignID  = ?";
        $query = $this->db->query($sql, [$campaignID]);
        return $query->getRowArray(); 
    }

    // update reviewtype function 
    public function getReviewsByType()
    {
        $sql = "SELECT reviews.ID,reviews.campaignID,reviews.creditTo, reviews.reviewText,JSON_UNQUOTE(JSON_EXTRACT(reviews.reviewratings, '$.Name')) AS Name ,reviews.createdOn FROM reviews WHERE reviewType = 'Google'";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    // Create fucntion for fetch campaign name Start here 
    public function get_campaign_name() {
        $sql = "SELECT DISTINCT campaign.name, campaign.department, campaign.employeeId, campaign.ID
                FROM campaign
                LEFT JOIN reviews ON reviews.campaignID = campaign.ID";
    
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
    // Create fucntion for fetch campaign name End here  

    // report Chart page fucntions start
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
        $ratetext1 = 'How likely are you to recommend us to your friends and family?';
        $ratetext2 = 'Professionalism';
        $ratetext3 = 'Quality of Service';
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
        $ratepoint1 = $averagerating1 / 2 ? $averagerating1 / 2 : 1;
        $ratepoint2 = $averagerating2 / 2 ? $averagerating2 / 2 : 1;
        $ratepoint3 = $averagerating3 / 2 ? $averagerating3 / 2 : 1;
    
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
        // print_r($pulseCheckData);
        $statusdone = 0;
        $statuspending = 0;
        
        $sql = "SELECT JSON_UNQUOTE(JSON_EXTRACT(reviewratings, '$.status')) AS status, COUNT(*) AS count FROM reviews GROUP BY status";
        $query = $db->query($sql);
        $results = $query->getResultArray();
        
        foreach ($results as $result) {
            if ($result['status'] === 'done') {
                $statusdone = $result['count'];
            } elseif ($result['status'] === 'pending') {
                $statuspending = $result['count'];
            }
        }
    
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

        $smsquery = $this->getPulseChecksmsDataByMonth();
        // print_r($smsquery);

        // Prepare arrays for the result
        $smsbioDates = [];
        $smspulsecheckDates = [];
        $smsbioCounts = [];
        $smspulsecheckCounts = [];
        
        foreach ($smsquery as $rows) {
            // If there are bio entries on this date, add to bioDates
            if ($rows['bioCount'] > 0) {
                $smsbioDates[] = $rows['date'];
                $smsbioCounts[] = $rows['bioCount']; 
            }
    
            // If there are pulsecheck entries on this date, add to pulsecheckDates
            if ($rows['pulsecheckCount'] > 0) {
                $smspulsecheckDates[] = $rows['date'];
                $smspulsecheckCounts[] = $rows['pulsecheckCount'];
            }
        }

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
            'smsbioDates'        => json_encode($smsbioDates),
            'smspulsecheckDates' => json_encode($smspulsecheckDates),
            'smsbioCounts'       => json_encode($smsbioCounts),
            'smspulsecheckCounts'=> json_encode($smspulsecheckCounts),
            'statusdone'      => $statusdone,
            'statuspending'   => $statuspending,
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
     // report Chart page fucntions END

    // Social-review page update credit fucntion start here
    public function updateReviewCampaign($reviewID, $campaignName) {
        // Retrieve the existing 'creditTo' data for the review with the given ID
        $review = $this->select('creditTo')
                       ->where('ID', $reviewID)
                       ->first();
        // Initialize currentData as an empty array if the field is not present or not valid
        $currentData = isset($review['creditTo']) ? json_decode($review['creditTo'], true) : [];
        if (!is_array($currentData)) {
            $currentData = [];
        }
        // Append the new campaign name if it is not already in the array
        if (!in_array($campaignName, $currentData)) {
            $currentData[] = $campaignName;
            // Encode the updated array back to JSON
            $jsonData = json_encode($currentData);
            // Update the 'creditTo' field with the new JSON data
            return $this->where('ID', $reviewID)->set(['creditTo' => $jsonData])->update();
        }
        
        return false;
    }

    public function getReviewByID($reviewID) {
        return $this->select('creditTo')
                    ->where('ID', $reviewID)
                    ->first();
    }
    
    public function deleteReviewCampaign($ID, $creditTo) {
        // Construct the SQL query directly
        $sql = "
            UPDATE reviews
            SET creditTo = JSON_REMOVE(
                creditTo,
                JSON_UNQUOTE(
                    JSON_SEARCH(creditTo, 'one', $creditTo)
                )
            )
            WHERE id = $ID
            AND JSON_SEARCH(creditTo, 'one', $creditTo) IS NOT NULL;
        ";
   
        // Log the SQL query for debugging
        log_message('debug', $sql);
   
        // Execute the query with the provided ID and creditTo
        $query = $this->db->query($sql, [$creditTo, $ID, $creditTo]);
   
        // Check if the query executed successfully
        if ($query) {
            // You can check the affected rows if needed
            $affectedRows = $this->db->affectedRows();
            log_message('debug', 'Affected rows: ' . $affectedRows);
        } else {
            // Handle the query error
            log_message('error', 'Query failed: ' . $this->db->error());
        }
    }
    // Social-review page update credit fucntion End here

    public function getPulseChecksmsDataByMonth() {
        // Load the database
        $db = \Config\Database::connect();
    
        // Write the SQL query
        $sql = "SELECT 
            DATE(sent_at) AS date,
            COUNT(CASE WHEN status = 'bio' THEN 1 END) AS bioCount,
            COUNT(CASE WHEN status = 'pulsecheck' THEN 1 END) AS pulsecheckCount
        FROM customersmsbio
        GROUP BY date
        ORDER BY date";
    
        // Execute the query
        $query = $db->query($sql);
        // Fetch all results as an associative array
        $smsquery = $query->getResultArray();
        // Return the results
        return $smsquery;
   
    }

}
