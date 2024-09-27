<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomersmsbioModel extends Model
{
    protected $table = "customersmsbio";
    protected $primaryKey = "id";
    protected $allowedFields = ["id","campaign_id","contact_number","reference","message_id","sms_count","used_credits","sent_at","status","employeeid"];

    public function getPulseCheckDataByMonth() {
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
        $results = $query->getResultArray();
        // Return the results
        // return $results;

        
        foreach ($results as $row) {
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

        return [
            'bioDates'        => json_encode($bioDates),
            'pulsecheckDates' => json_encode($pulsecheckDates),
            'bioCounts'       => json_encode($bioCounts),
            'pulsecheckCounts'=> json_encode($pulsecheckCounts),
        ];
    
    }


}
