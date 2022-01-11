<?php
  // create class job
    class Job{
      private $db;
      // create  constructor function that Handle The Database name
      public function __construct(){
        $this->db = new Database;
      }
      // Get All Jobs With THis Function
      public function getAllJobs(){
        $this->db->query("SELECT jobs.* , categories.name AS cname From jobs
        INNER JOIN categories ON jobs.category_id = categories.id ORDER BY  post_date DESC");
        // ASsign THe Result  Set
        $result = $this->db->resultSet();
        return $result;
      }

      // Get The Categories From Database
      public function getCategories(){
        $this->db->query("SELECT * FROM categories");
        // ASsign THe Result  Set
        $result = $this->db->resultSet();
        return $result;
      }
      // Get All  Jobs By Category ID
      public function getByCategory($category){
        $this->db->query("SELECT jobs.* , categories.name AS cname From jobs
        INNER JOIN categories ON jobs.category_id = categories.id
        WHERE jobs.category_id = $category
         ORDER BY  post_date DESC");
         // assign the result to set function
         $result =$this->db->resultSet();
         return $result;
      }
      // Get Category By Id
      public function getCategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        $this->db->bind(":category_id", $category_id);
        $row = $this->db->single();

        return $row;
      }
      // Get All Job By id
      public function getJob($id){
        $this->db->query("SELECT * FROM jobs WHERE id = :id");
        $this->db->bind(':id', $id);
        // Assign Row Variable
        $row = $this->db->single();
        return $row;
      }
      // Create Job Listing
      public function create($data){
        // Insert Into The Database
        $this->db->query("INSERT INTO jobs(category_id , company ,job_title , description
         , salary , location  , contact_user  , contact_email , post_date )
        VALUES (:category_id, :job_title,:company,:description,:location ,:salary,
        :contact_user,:contact_email, now())");
        //  Bind THe Param With BInd Function
        // $row = $this->db->execute(array(
        //   ':category_id'  => $category_id,
        //   ':job_title'    => $job_title,
        //   ':company'      => $desc,
        //   ':location'     => $location,
        //   ':salary'       => $salary,
        //   ':contact_user' => $cont_user,
        //   ':contact_email'=> $cont_email
        // ));

        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);
        //then WIll Execute THe Statement

        // foreach ($this->db->bind() as $data) {
        //   $this->db->execute($data);
        // }
        if ($this->db->execute()) {
          return true;
        }else {
          return false;
        }

      }
      // Create Delete Function
      public function delete($id){
        $this->db->query("DELETE FROM jobs where id = $id");
        if ($this->db->execute()) {
          return true ;
        }else {
          return false;
        }
      }
      // Update job function
      public function update($id , $data){
        // update The job listing into  Database
        $this->db->query("UPDATE  jobs SET category_id = :category_id,
                          job_title = :job_title,
                           company =  :company,
                          description = :description,
                          location =  :location ,
                          salary =  :salary,
                          contact_user =  :contact_user,
                          contact_email :contact_email,
                           WHERE id = $id ");
      // binf the param
        $this->db->bind(':category_id', $id);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);
        //then WIll Execute THe Statement
        // 
        if ($this->db->execute()) {
          return true;
        }else {
          return false;
        }
      }
    }
