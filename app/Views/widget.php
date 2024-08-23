public function submitReview()
    {
        // Load necessary helpers and libraries
        helper(['form', 'url']);
    
        // Validation rules
        $rules = [
            'feedback' => 'required',
            'rating1_value' => 'required',
            'rating1_text' => 'required',
            'rating2_value' => 'required',
            'rating2_text' => 'required',
            'rating3_value' => 'required',
            'rating3_text' => 'required',
        ];
    
        // Validate form input
        if (!$this->validate($rules)) {
            // Redirect back with validation errors and input data
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
    
        $reviewModel = new ReviewModal();
    
        // Collecting data from the request
        $feedback = $this->request->getPost('feedback');
        $rating1_value = $this->request->getPost('rating1_value');
        $rating1_text = $this->request->getPost('rating1_text');
        $rating2_value = $this->request->getPost('rating2_value');
        $rating2_text = $this->request->getPost('rating2_text');
        $rating3_value = $this->request->getPost('rating3_value');
        $rating3_text = $this->request->getPost('rating3_text');
        $campaignId = $this->request->getPost('ID');
        $customer_name = $this->request->getPost('customer_name');
        $customer_email = $this->request->getPost('customer_email');
        $city = $this->request->getPost('state');
        $state = $this->request->getPost('city');
        $zipcode = $this->request->getPost('zipcode');
        $sentiment = $this->request->getPost('result_value');
        $review_type = $this->request->getPost('reviewType');
        $status = $this->request->getPost('status');
    
        // Preparing data for insertion
        $data = [
            'createdOn' => date('Y-m-d H:i:s'),
            'updatedOn' => date('Y-m-d H:i:s'),
            'campaignID' => $campaignId,
            'reviewText' => $feedback,
            'reviewType' => $review_type,
            'sentiment' => $sentiment,
            'reviewratings' => json_encode([
                'feedback' => $feedback,
                'Name' => $customer_name,
                'customer_email' => $customer_email,
                'status' => $status,
                'State' => $state,
                'City' => $city,
                'Zipcode' => $zipcode,
                'rate1' => ['text' => $rating1_text, 'value' => $rating1_value],
                'rate2' => ['text' => $rating2_text, 'value' => $rating2_value],
                'rate3' => ['text' => $rating3_text, 'value' => $rating3_value],
                'sentiment' => $sentiment,
                'review_type' => $review_type
            ]),
        ];
    
        $reviewModel->insert($data);
        // Send contact card email
        // $this->sendContactCard($customer_email , $status);
        $this->queueEmailCommand($customer_email, $status);
        // Display a thank you message or redirect as needed
        return redirect()->to('/thankyou')->with('message', 'Thank you for your feedback. Your feedback is important to us.');
    }
    protected function queueEmailCommand($customer_email, $status)
{
    $command = 'php spark my:customcommand ' . escapeshellarg($customer_email) . ' ' . escapeshellarg($status);
    // Use exec or a similar function to execute the command
    exec($command);
}
    // public function sendContactCard($customer_email)
    // {
    //     $contactCardModel = new ContactcardModal();
    //     $data['contactcard'] = $contactCardModel->first();

    //     $emailService = \Config\Services::email();

    //     // Building the email message
    //     $message = view('contact-card-tab/contact-card-layout', ['contactcard' => $data['contactcard']]);

    //     $emailService->initialize([
    //         'protocol' => 'smtp',
    //         'SMTPHost' => $_ENV['SMTP_HOST'],
    //         'SMTPPort' => intval($_ENV['SMTP_PORT']),
    //         'SMTPUser' => $_ENV['SMTP_USER'],
    //         'SMTPPass' => $_ENV['SMTP_PASS'],
    //         'mailType' => 'html',
    //         'charset' => 'utf-8',
    //         'newline' => "\r\n"
    //     ]);

    //     $emailService->setFrom($_ENV['SMTP_USER'], 'summitRA');
    //     $emailService->setTo($customer_email);
    //     $emailService->setSubject('Contact-card');
    //     $emailService->setMessage($message);

    //     if (!$emailService->send()) {
    //         log_message('error', $emailService->printDebugger(['headers', 'subject', 'body']));
    //     }
    // }




    // public function updatestatus($customer_email, $status)
    // {
    //     $reviewModel = new ReviewModal();
    //     // Check if a review already exists for the given customer email
    //     $existingReview = $reviewModel->where("JSON_EXTRACT(reviewratings, '$.customer_email') =", $customer_email)
    //                                 ->first();
    //     if ($existingReview) {
    //         // Check if the existing review status is 'pending'
    //         $existingStatus = json_decode($existingReview['reviewratings'], true)['status'] ?? '';
    //         if ($existingStatus === 'pending') {
    //             // Prepare data for update
    //             $data = [
    //                 'updatedOn' => date('Y-m-d H:i:s'),
    //                 'reviewratings' => json_encode(array_merge(
    //                     json_decode($existingReview['reviewratings'], true),
    //                     ['status' => 'done']
    //                 )),
    //             ];
    //             // Update the existing review entry
    //             $reviewId = $existingReview['ID'];
    //             $reviewModel->update($reviewId, $data);
    //         }
    //     }
    //     // Execute sendContactCard() function
    //     $this->sendContactCard($customer_email);
    // }
